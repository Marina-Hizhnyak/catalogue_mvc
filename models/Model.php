<?php 
class Model
{
  protected static $db;

  public static function connectDB() 
  {
    if(isset(self::$db)) return;
    self::$db = new PDO("mysql:host=" . getenv("DBHOST") . ";dbname=" . getenv("DBNAME") . ";charset=utf8", getenv("DBUSER"), getenv("DBPASSWORD"));
  }

  public static function findAll()
  {
    $table = static::getTable();
    $sql = "SELECT * FROM `$table`";
    $stmt = self::$db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function findOne($id)
  {
    $table = static::getTable();
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    return self::$db->query($sql)->fetch(PDO::FETCH_ASSOC);
  }

  public static function delete($id)
  {
    $table = static::getTable();
    $sql = "DELETE FROM `$table` WHERE `id` = '$id'";
    return self::$db->exec($sql);
  }


}

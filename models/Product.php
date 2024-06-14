<?php 

class Product extends Model
{ 

  public static function getTable() 
  {
    return "products";  
  }

  public static function add($data, $fileName) 
  {
    $sql = "INSERT INTO `products`( `name`, `price`, `image`, `description`) 
    VALUES (:name, :price, :image, :description)";
    $stmt = self::$db->prepare($sql);
    $data['image'] = $fileName;
    return $stmt->execute($data);
  }

  public static function edit($data) 
  {
    $sql = "UPDATE `products` SET `name` = :name,`price` = :price, `description` = :description WHERE `id`= :id";
    $stmt = self::$db->prepare($sql);
    return $stmt->execute($data);
  }

   public static function editImg($image, $id) 
  {
    $sql = "UPDATE `products` SET `image` = '$image' WHERE `id`= '$id'";
    return self::$db->exec($sql);
  }

    public static function getCart($arr)
  {
    if(!$arr) return;
    $productIds= implode(",", $arr);
    $table = static::getTable();
    $sql = "SELECT * FROM `$table` WHERE `id` IN ($productIds)";
    // echo $sql;
     return self::$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  }
}
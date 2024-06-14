<?php class Message 
{
  public static function display()
  {
    // выходим если нет сообщения
    if (empty($_SESSION['mess'])) return; // получаем текст сообщения
    $type = $_SESSION['mess']['type']; 
    $text = self::getText($type);
    // выводим текст на экран
    if ($type == 'success') echo "<div class='alert alert-success mt-3'>$text</div>"; 
    else echo "<div class='alert alert-danger mt-3'>$text</div>";
    // удаляем сессию
    unset($_SESSION['mess']);
  }

  private static function getText($type) 
  {
    // получаем массив сообщений из файла
    $messages = include 'messages.php';
    // возвращаем текст сообщения из массива по ключу
    $key = $_SESSION['mess']['key'];
    return $messages[$type][$key]; 
  }

  public static function add($type, $key)
  {
    $_SESSION['mess']['type'] = $type;
    $_SESSION['mess']['key'] = $key; 
  }
}
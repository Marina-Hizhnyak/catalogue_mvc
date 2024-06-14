<?php 
class Route
{
  static function start()
  {
  // название контроллера и экшена по умолчанию
    $controller_name = 'Main'; 
    $action_name = 'index';
    $url = explode('?', $_SERVER['REQUEST_URI'])[0];
    $routes = explode('/', $url);
    if ( !empty($routes[1]) ) { 
      $controller_name = $routes[1];
    }
    if ( !empty($routes[2]) ) { 
      $action_name = $routes[2];
    }
    $controller_name = 'Controller_'.ucfirst($controller_name); 
    $action_name = 'action_'.$action_name;

    // echo $controller_name;
    $controller_path = dirname(__DIR__) . "/controllers/" . $controller_name . '.php';
// echo $controller_path;
// exit;

    if(file_exists($controller_path)) { 
      include $controller_path;
    }
    else {
      echo 'controller not exist'; 
      exit;
    }

    $controller = new $controller_name;
    
    if(method_exists($controller, $action_name)) {
// вызываем метод контроллера (action)
      $controller->$action_name(); }
    else {
      echo 'action not exist';
      exit;
    }
    // debug($controller);
  }
}
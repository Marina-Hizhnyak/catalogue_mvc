<?php 

function model_autoload($class){
  $path = 'models/' . $class . '.php'; 
  if (file_exists($path)) {
        require_once($path);
  }
}

function core_autoload($class){
  $path = 'core/' . $class . '.php'; 
  if (file_exists($path)) {
        require_once($path);
  }
}

function helper_autoload($class){
  $path = 'helpers/' . $class . '.php'; 
  if (file_exists($path)) {
        require_once($path);
  }
}

spl_autoload_register('model_autoload');
spl_autoload_register('core_autoload');
spl_autoload_register('helper_autoload');
<?php 
class View 
{
    public static function render($template, $data = null) 
    {

      if(is_array($data)) {
          extract($data);
      }

      $template_path = 'views/' . $template . '.php';

      include 'views/layouts/layout.php';
    }
}
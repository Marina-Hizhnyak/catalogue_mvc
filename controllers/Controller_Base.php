<?php 
class Controller_Base 
{
  protected function addMessage($result, $key){
    $type = $result ? 'success' : 'error';
    Message::add($type, $key);
    return $this;
  }

  protected function redirect($url){
    header("location: /$url");
    exit;
  }

  protected function home(){
    header("location: /");
    exit;
  }

  public function back(){
    $previous_page = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
    header('Location: ' . $previous_page);
    exit;
  }
}
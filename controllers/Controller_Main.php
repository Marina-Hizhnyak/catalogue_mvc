<?php 
class Controller_Main
{
   public function action_index() {
    $products = Product::findAll();
    View::render('main/index', ['products' => $products]);
  }

  public function action_view() {
    $product = Product::findOne($_GET['id']);
    // debug($product);
     View::render('main/view', ['product' => $product]);
  }

}
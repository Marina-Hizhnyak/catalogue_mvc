<?php 
class Controller_Cart extends Controller_Base
{
   public function action_view() {
    if (isset($_SESSION['cart'])){
      $products = Product::getCart($_SESSION['cart']);
    } else {
      $products = [];
    }
    // debug($products);
    View::render('cart/view', ['products' => $products]);
  }

  public function action_add() {
    if (isset($_GET['id'])){
     $_SESSION['cart'][] = $_GET['id'];
    } 
    // debug($products);
    $this->addMessage(true, "add_cart")->home();
  }

  public function action_delete() {
    if (isset($_GET['id'])){
      foreach ($_SESSION['cart'] as $index => $prod_id) {
         if ($prod_id == $_GET['id']) { 
          unset($_SESSION['cart'][$index]); 
        }  
      }
    }
    $this->addMessage(true, "delete_cart")->back();
    } 

    public function action_deleteAll() {
      if ($_GET['clear']){
        unset($_SESSION['cart']); 
        $this->addMessage(true, "delete_cart")->back();
      }
    }  
      
  }
  
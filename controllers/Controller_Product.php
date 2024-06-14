<?php 
class Controller_Product extends Controller_Base
{

   public function action_index() {
    $products = Product::findAll();
    View::render('product/index', ['products' => $products]);
  }

  public function action_view() {
    $product = Product::findOne($_GET['id']);
     View::render('product/view', ['product' => $product]);
  }

   public function action_add() {
      if($_POST) {
         $fileName = $this->uploadFile("add");
         $result = Product::add($_POST, $fileName);
         $this->addMessage($result, "add")->redirect('product/index');
      } else {
         View::render('product/add');
      }
   }
   private function uploadFile ($action) {
      $img = new File('img', 50000000, ['png', 'jpg', 'jpeg']);

      try {
         $img->upload('assets/img');
         return $img->fileName;
      } catch (Exception $e) {
         $this->addMessage(false,$e->getMessage());
         if($action=="add") {
            $this->back();
         } else {
            $this->redirect('product/edit?id='.$_POST['id']);
         }
      }
   }

   public function action_delete() {
      $result = Product::delete($_GET['id']);
      $this->addMessage($result,"del")->back();
   }

   public function action_edit() {
      if($_POST) {
         if($_FILES['img']['error']==0) {
            $fileName = $this->uploadFile("edit");
             $product = Product::findOne($_POST['id']);
             if(file_exists('/assets/img/'.$product['img'])){
               unlink(('/assets/img/'.$product['img']));
             }
            // debug($fileName);
            Product::editImg($fileName,$_POST['id']);
         }
         $result = Product::edit($_POST);
         // debug($result);
         $this->addMessage($result, "edit");
         if($result){
            $this->redirect('product/index');
         } else {
            $this->redirect('product/edit?id='.$_POST['id']);
         }
        
      } else {
         $product = Product::findOne($_GET['id']);
         View::render('product/edit', ['product' => $product]);
      }
   }

}
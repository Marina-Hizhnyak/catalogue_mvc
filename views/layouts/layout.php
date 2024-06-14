<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Product Catalog</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>


  <!-- menu -->
<div class="container  mb-3">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cart/view">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/product/index">Admin</a>
      </li>
    </ul>
  </div>
</nav>
</div>
<!-- end menu -->
<div class="container">
  <?php Message::display();?>
</div>
<?php require_once $template_path;?>


<?php //require_once 'pagination.php';?> 

</body>
</html>

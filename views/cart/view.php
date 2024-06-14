
<div class="container">

	<h1 class="text-center">Cart page</h1>
  <!-- <a href="cart.php?clear=true">Clear</a> -->
	<a href="/cart/deleteAll?clear=true">Clear</a>
	<main class="grid">
    <?php  if ($products):?>
      <?php  foreach($products as $product):?>
      <div class="card">
        <img src="../assets/img/<?php echo $product['image'];?>" alt="tshirt photo">
        <div class="text">
          <h3>
            <a href="single.html"><?php echo $product['name'];?></a>
          </h3>
          <p class="price">price: <span><?php echo $product['price'];?>$</span></p>
          <a href="/cart/delete?id=<?php echo $product['id'];?>" class="btn btn-primary btn-block">Delete from cart</a>
        </div>
      </div>
      <?php endforeach?>
    <?php else:?>
        <p>Cart is empty</p>
    <?php endif?>
	</main>
	
</div>
 
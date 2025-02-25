<div class="container">
	<h1>Product</h1>
	<div class="row mt-3">
    <div class="col-5">
      <img src="/assets/img/<?php echo $product['image']; ?>" alt="tshirt">
    </div>
    <div class="col-6 offset-1">
      <div class="content border border-primary p-3">
        <h3>Name: <?php echo $product['name']; ?></h3>
        <p class="price h4">Price: <span><?php echo $product['price']; ?>$</span></p>
        <div class="description">
          <h4>Description</h4>
         <?php echo $product['description']; ?>
        </div>
        <div class="details mt-3">
          <h4>Details</h4>
          <div class="detail"><span>Material:</span> Coton</div>
          <div class="detail"><span>Color:</span> Red</div>
          <div class="detail"><span>Size:</span> XL</div>
        </div>
        <div class="mt-3">
          <a href="#" class="btn btn-primary">Add to cart</a>
        </div>
      </div>
    </div>
	</div>
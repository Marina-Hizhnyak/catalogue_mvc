<div class="container">
	<h1>Product Catalog</h1>
	<main class="grid">
		<?php foreach ($products as $product):?>
			<div class="card">
				<img src="/assets/img/<?php echo $product['image']; ?>" alt="tshirt">
				<div class="text">
						<h3>
							<a href="/main/view?id=<?php echo $product['id'];?>"><?php echo $product['name']; ?></a>
						</h3>
						<p class="price">price: <span><?php echo $product['price']; ?>$</span></p>
						<a href="/cart/add?id=<?php echo $product['id'];?>" class="btn btn-primary btn-block">Add to cart</a>
			  </div>
			</div>
		<?php endforeach?>
	</main>
</div>
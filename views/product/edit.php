<div class="container">
	<h1 class="text-center">Edit product page</h1>
	<div class="row">
		<div class="col-6 mx-auto">
			<form action="/product/edit" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $product['name'];?>">
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="text" class="form-control" name="price" value="<?php echo $product['price'];?>">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" id="description" rows="3" name="description"><?php echo $product['description'];?></textarea>
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" class="form-control-file" id="image" name="img" value="<?php echo $product['image'];?>">
				</div>
				<input type="hidden" name="id" value="<?php echo $product['id'];?>">
			  	<button type="submit" class="btn btn-primary">Edit</button>
			</form>
  </div>
</div>
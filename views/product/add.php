<div class="container">
	<h1 class="text-center">Add product page</h1>
	
	<div class="row">
		<div class="col-6 mx-auto">
			<form action="/product/add" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="text" class="form-control" name="price">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" id="description" rows="3" name="description"></textarea>
				</div>
				<div class="form-group">
					<label for="image">Image</label>
					<input type="file" class="form-control-file" id="image" name="img">
				</div>
			  	<button type="submit" class="btn btn-primary">Add</button>
			</form>
		</div>
	</div>
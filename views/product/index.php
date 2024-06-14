
  	<div class="container">
		<h1 class="text-center">Admin page</h1>
		<a href="/product/add" class="btn btn-primary mb-3" role="button">Add product</a>

		<table class="table table-bordered table-hover">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Description</th>
					<th scope="col">Price</th>
					<th scope="col">Image</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
        <?php $num = 1;?>
				<?php foreach($products as $product):?>
				<tr>
					<td><?php echo $num++;?></td>
					<td><?php echo $product['name'];?></td>
					<td><?php echo $product['description'];?>
					</td>
					<td class="price"><?php echo $product['price'];?>$</td>
					<td>
						<img src="../assets/img/<?php echo $product['image'];?>" alt="tshirt" height="100px">
					</td>
					<td>
						<a href="/product/delete?id=<?php echo $product['id'];?>" class="btn-sm btn-danger btn-block">Delete</a>
						<a href="/product/edit?id=<?php echo $product['id'];?>" class="btn-sm btn-primary btn-block">Edit</a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
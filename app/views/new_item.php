<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){ ?>
<?php global $conn; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-8 offset-lg-2">
			<h3>Add new plant</h3>
			<form action="../controllers/process_new_item.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" class="form-control" name="name" id="name" required>
				</div>
				<div class="form-group">
					<label for="price">Price:</label>
					<input type="number" class="form-control" name="price" id="price" required>
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea class="form-control col-8" rows="5" id="description" name="description"></textarea>
				</div>
				<div class="form-group">
					<label for="categories">Category:</label>
					<select class="form-control col-8" id="categories" name="category_id">
						<?php 
							$category_query = "SELECT * FROM categories";
							$categories = mysqli_query($conn, $category_query);
							foreach ($categories as $category) {
								//$category['id'], $category['name']
								extract($category);
								//extract is another way of transforming data for a row to variables. It transforms each column into a variable with name = column name.
								echo "<option value= '$id' > $name </option>";
							}
						?>
					</select>
					<br>
					<!-- for uploading images -->
					<div class="form-group">
						<label for="image">Image:</label>
						<input type="file" class="form-control" name="image" required>
					</div>
					<!-- submitting new item -->
					<button type="submit" class="btn btn-primary uk-button uk-button-default demo" onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Added New Item'})">Add new item</button>
				</div>

			</form>
		</div>
	</div>
</div>

<?php } ?>
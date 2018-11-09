<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){ ?>
<?php global $conn;
	$item_id = $_GET['id'];
	$edit_item_query = "SELECT * FROM items WHERE id = $item_id;";
	$result = mysqli_query($conn, $edit_item_query);
	$item = mysqli_fetch_assoc($result);
 ?>

<!-- place checking here -->
<?php if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 1) { ?>
<!-- end checking here -->
 
 <div class="container py-2">
 	<div class="row">
 		<div class="col-lg-8 offset-lg-2">
 			<form action="../controllers/process_edit_item.php" method="POST" enctype="multipart/form-data">
 			<input type="number" name="id" value="<?php echo $item_id; ?>" hidden>
 			<h4>Item Update/Change</h4>
 			
 			<div class="form-group">
 				<label for="name">Name:</label>
 				<input type="text" class="form-control" name="name" id="name" value="<?php echo $item['name']; ?>" required>
			</div> 			

			<div class="form-group">
 				<label for="price">Price:</label>
 				<input type="number" class="form-control" min="1" name="price" id="price" value="<?php echo $item['price']; ?>" required>
			</div> 

			<div class="form-group">
 				<label for="description">Description:</label>
 				<textarea type="text" class="form-control col-8" rows="5" name="description" id="description" required><?php echo $item['description'];?></textarea>

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
								$selected =$item['category_id'] == $id ? 'selected' : ''; //ternary operator: short hand for an if else statment
								//syntax: cond ? value if true : value if false

								//extract is another way of transforming data for a row to variables. It transforms each column into a variable with name = column name.
								echo "<option value= '$id' $selected>$name </option>";
							}
						?>
					</select>
			</div>
					<div class="form-group">
						<input type="file" class="form-control" name="image" value="<?php echo $item['image_path']; ?>" required>
					</div>
					<!-- submitting edited item -->
					<button type="submit" class="btn btn-primary edit-item">Edit Item</button>
					<a class="btn btn-secondary"  href="items.php">Cancel</a>
		</div>

				
 			</form>
 		</div>
 	</div>
 </div>

<!-- place else statment here -->
<?php } else {
	header("Location: ./error.php");
}
?>

<?php } ?>
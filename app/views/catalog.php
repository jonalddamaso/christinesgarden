<?php require_once "../partials/template.php" ?>

<?php function get_page_content() { 
require_once "../controllers/connections.php"; ?>

	<div class="container-fluid" id="page-catalog">
		<div class="row">
			<div class="col-sm-2">
				<h2>Categories</h2>
				<ul class="list-group border" style="background-color: #e6e6e6;">
					<a href="catalog.php" class="category category-all">
						<li class="list-group-item">
							All
						</li>
					</a>
					<?php
					 $sql_query = "SELECT * FROM categories";
					 $categories = mysqli_query($conn, $sql_query);
					 foreach ($categories as $category) { ?>
					 	<a href="catalog.php? category_id= <?php echo $category['id'];?>" class="category" data-id ="<?php echo $category['id']?>">
					 	<li class="list-group-item">
					 		<?php echo $category['name']; ?>
					 	</li>
					 	</a>
					 <?php }
					?>
				</ul>

				<h2>Sort</h2>
					<ul class="list-group border" style="background-color: #e6e6e6;">
						<a href="../controllers/sort.php?sort=asc">
							<li class="list-group-item">
								Price(Lowest to Highest)
							</li>
						</a>
						<a href="../controllers/sort.php?sort=desc">
							<li class="list-group-item">
								Price(Highest to Lowest)
							</li>
						</a>
					</ul>

			</div>

			<div class="col">
				<div class="container">
				<?php 
					$sql_query2 = "SELECT * FROM items";
					if(isset($_GET['category_id'])){
						$sql_query2 .= " WHERE category_id =". $_GET['category_id'];
					}
					if(isset($_SESSION['sort'])){
						$sql_query2 .= $_SESSION['sort'];
					}
					$items = mysqli_query($conn, $sql_query2);
					echo "<div class = 'row'>";
					foreach ($items as $item) { ?>
						<div class="col-sm-3 py-2">
							<div class="card h-100">
								<img class="card-img-top" src="<?php echo $item['image_path']; ?>">
								<div class="card-body">
									<h4 class="card-title">
										<?php echo $item['name']?>
									</h4>
									<p class="card-text">
										<?php echo $item['description'];?>
										<br>
										<h5>Price: <strong><?php echo $item['price']; ?></strong></h5>
									</p>
								</div>
								<div class="card-footer">
									<input type="nuber" class="form-control" placeholder = "Quantity">
									<br>
										<button type="submit" class="btn btn-outline-primary add-to-cart" data-id = "<?php echo $item['id'];?>">Add to cart</button>
								</div>
							</div>
						</div>

				<?php } echo "</div>"; ?>
					
				</div>
			</div>
		</div>
	</div>
<?php mysqli_close($conn); ?>
<?php } ?>

<?php require_once "../partials/template.php" ?>

<?php function get_page_content() { 
		global $conn; //refers to $conn outside of my function.
		?>

	<div class="container-fluid">
		<div class="row">
			<!-- <div class="col-sm-12"  id="drop-menu"> -->
			<div class="col-sm-12 uk-card uk-card-default uk-card-body mx-auto" style="z-index: 980;">
				<div class="row">
					<ul class="list-group mx-auto d-flex justify-content-center" id="ul-all">
						<a href="catalog.php" class="category category-all">Categories <span class="uk-margin-small-center" uk-icon="icon: triangle-down"></span>
						<div uk-dropdown="mode: click" id="drop">
							<li class="list-group-item" id="li-all">
								All
							</li>
						</a>
						<?php
						 $sql_query = "SELECT * FROM categories";
						 $categories = mysqli_query($conn, $sql_query);
						 foreach ($categories as $category) { ?>
						 	<a href="catalog.php? category_id= <?php echo $category['id'];?>" class="category" data-id ="<?php echo $category['id']?>">
						 	<li class="list-group-item" id="li-all">
						 		<?php echo $category['name']; ?>
						 	</li>
						 	</a>
						 <?php }
						?>
					</ul>

					<ul class="list-group mx-auto d-flex justify-content-center" id="ul-all">
							<a href="../controllers/sort.php?sort=asc"> Sort <span class="uk-margin-small-center" uk-icon="icon: triangle-down"></span>
						<div uk-dropdown="mode: click" id="drop">
								<li class="list-group-item" id="li-all">
									Price(Lowest to Highest)
								</li>
							</a>
							<a href="../controllers/sort.php?sort=desc">
								<li class="list-group-item" id="li-all">
									Price(Highest to Lowest)
								</li>
							</a>
					</ul>
				</div>
			</div>

			<div class="col-sm-12" id="page-catalog">
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
							<div class="card h-100  zoomIn animated">
								<img class="card-img-top" src="<?php echo $item['image_path']; ?>">
								<div class="card-body">	
										<h4 class="card-title">
											<?php echo $item['name']?>
										</h4>
									
										<p class="card-text overlay">
										<?php echo $item['description'] ?>
										</p>
								
										<p class="card-text mb-0">
											<h5>Price: Php <strong><?php echo $item['price']; ?></strong></h5>
										</p>

									
								</div>
								<div class="card-footer mx-auto d-flex justify-content-center">
							
									<input type="number" class="mx-1" name="quantity" min="1" placeholder="qty" style="width:60px;">

									<button type="submit" class="btn btn-outline-warning add-to-cart mx-1" data-id = "<?php echo $item['id'];?>">
										Add to <i class="fas fa-cart-plus"></i></button>

								</div>
							</div>
						</div>

				<?php } echo "</div>"; ?>
					
				</div>
			</div>
		</div>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg></button>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			        document.getElementById("myBtn").style.display = "block";
			    } else {
			        document.getElementById("myBtn").style.display = "none";
			    }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			    document.body.scrollTop = 0;
			    document.documentElement.scrollTop = 0;
			}
			</script>
	</div>
		
<?php } ?>



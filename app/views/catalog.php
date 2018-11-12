<?php require_once "../partials/template.php" ?>

<?php function get_page_content() { 
		global $conn; //refers to $conn outside of my function.
		?>

<!-- place checking here -->
<?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role'] == 2)) { ?>
<!-- end checking here -->

	<div class="container-fluid">
		<div class="row">
			<nav class="col-sm-12 uk-navbar-container uk-navbar-right" style="z-index: 980;" uk-navbar>
				        <ul class="uk-navbar-nav">
				            <li id="li-all">
				                <a href="catalog.php" class="category" id="category">Categories
				                <div class="uk-navbar-dropdown" uk-dropdown="pos: bottom-justify;animation: uk-animation-slide-top-small; duration: 500">
				                    <ul class="uk-nav uk-navbar-dropdown-nav" id="ul-all">
				                        <li class="list-group-item uk-active" id="li-all">All</li>
				                </a>
				                        <?php
											 $sql_query = "SELECT * FROM categories";
											 $categories = mysqli_query($conn, $sql_query);
											 foreach ($categories as $category) { ?>
											 	<a href="catalog.php? category_id= <?php echo $category['id'];?>" class="category" data-id ="<?php echo $category['id']?>" id="li-all">
											 	<li class="list-group-item" id="li-all">
											 		<?php echo $category['name']; ?>
											 	</li>
											 	</a>
											 <?php }
											?>
				                    </ul>
				                </div>
				             </li>
				             <li id="li-all">

				                <a href="../controllers/sort.php?sort=asc" class="sort" id="sort">Sort Price
				                <div class="uk-navbar-dropdown" uk-dropdown="pos: bottom-justify;animation: uk-animation-slide-top-small; duration: 500">
				                    <ul class="uk-nav uk-navbar-dropdown-nav" id="ul-all">
				                       	<li class="list-group-item" id="li-all">
									Lowest to Highest
								</li>
								</a>
								<a href="../controllers/sort.php?sort=desc" id="sort">
									<li class="list-group-item" id="li-all">
										Highest to Lowest
									</li>
								</a>
					                    </ul>
				                </div>
				          				           
				            </li>
				            

				        </ul>
				       

		    </nav>

			 
			<div class="col-sm-12 mx-auto" id="page-catalog">
				<div class="container mx-auto">
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
								<img class="card-img" src="<?php echo $item['image_path']; ?>">
								<div class="card-body">	
										<div class="card-text text-center uk-position-bottom">
											<?php echo $item['name']?>
											<h5>Price: ₱<strong><?php echo $item['price']; ?></strong></h5>
										</div>
									
										<p class="card-text uk-margin-small-right overlay" uk-toggle="target: #mod<?php echo $item['id']; ?>">
										<div class="uk-position-center" id="pin">
                   							 <span uk-icon ="icon: plus; ratio: 2" uk-toggle="target: #mod<?php echo $item['id']; ?>"></span>
                						</div>
										</p>

										<!-- This is the modal with the outside close button -->
											<div id="mod<?php echo $item['id']; ?>" uk-modal>
											    <div class="uk-modal-dialog uk-modal-body">
											    	 <button class="uk-modal-close-outside" type="button" uk-close></button>
											    	 <div class="row">
											    	 	 <div class="col-lg-5">
											    	 	 	<img class="card-img-top" src="<?php echo $item['image_path']; ?>">
													      </div>

													      <div class="col-lg-7"> 
													        <h2 class="uk-modal-title h2-responsive">
													      	 	 <strong><?php echo $item['name']?></strong>	
													        </h2>

													        <h4 class="h4-responsive">
													        <span class="green-text">
												           	 	₱ <strong><?php echo $item['price']; ?></strong>
												        	</span>
												            </h4>

												            <!--Accordion wrapper-->
												            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

													              <!-- Accordion card -->
													              <div class="uk-card uk-card-hover">

													                <!-- Card header -->
													                <div class="card-header" role="tab" id="productdesc">
													                  <a data-toggle="collapse" data-parent="#accordionEx" id="hide-desc" href="#collapsedesc" aria-expanded="true"
													                    aria-controls="collapsedesc">
													                    <h5 class="mb-0">
													                      Product Description <i class="fas fa-angle-down"></i>
													                    </h5>
													                  </a>
													                </div>

													                <!-- Card body -->
													                <div id="collapsedesc" class="collapse show" role="tabpanel" aria-labelledby="productdesc"
													                  data-parent="#accordionEx">
													                  <div class="card-body">
													                    <p>
																        <?php echo $item['description'] ?>
																        </p>
													                  </div>
													                </div>

													              </div>
													            </div>
												              <!-- Accordion card -->
												              <hr>

												              <div class="text-center">

												                <input type="number" class="quantity-box mx-1" uk-tooltip="title: Add quantity; pos: bottom" name="quantity" min="1" placeholder="QTY" style="width:60px;">

																<button type="submit" class="btn btn-outline-warning add-to-cart mx-1" data-id = "<?php echo $item['id'];?>" class="demo uk-button uk-button-default" type="button" onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Added to your cart',pos:'bottom-right',status: 'success',timeout: 1000})">
																	Add to <i class="fas fa-cart-plus"></i></button>
												              </div>

													        
													      </div>
											    	</div>
											    </div>
											</div>
										<!-- End of Modal -->

								</div>

								<div class="card-footer mx-auto d-flex justify-content-center">
							
									<input type="number" class="quantity-box mx-1" uk-tooltip="title: Add quantity; pos: bottom" name="quantity" min="1" placeholder="QTY" style="width:60px;">

									<button type="submit" class="btn btn-outline-warning add-to-cart mx-1" data-id = "<?php echo $item['id'];?>" class="demo uk-button uk-button-default" type="button" onclick="UIkit.notification({message: '<span uk-icon=\'icon: check\'></span> Added to your cart',pos:'bottom-right',status: 'success',timeout: 1000})">
										Add to <i class="fas fa-cart-plus"></i></button>

								</div>
							</div>
						</div>

				<?php } echo "</div>"; ?>
					
				</div>
			</div>
		</div>
		<!-- go to top -->
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

		<!-- end of go to top -->
	</div>
	
<?php } else { ?>
<script type="text/javascript">
	window.location.href = "./error.php" ;
</script>
<?php }
?>

<?php } ?>



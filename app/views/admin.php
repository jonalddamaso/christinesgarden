<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){
	global $conn; ?>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<div class="card" style="margin: 20px 0 25px 0;">
					<img class="card-img-top" src="../assets/images/landingplant5.jpg">
				
			</div>
		</div>
		<div class="col-lg-6">
		<div  style="margin: 20px 0 25px 0;">
			<div class="jumbotron text-center">
				<h4>Admin Account</h4>
			</div>
			<form action="" method="POST">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="item_name">
								Item name
							</label>
							<input type="text" class="form-control" id="item_name" name="item_name" placeholder="Enter Item name">
							<span class="validation"></span>
						</div>
						<div class="form-group">
							<label for="item_desc">
								Item Description
							</label>
							<input type="text" class="form-control" id="item_desc" name="item_desc" placeholder="Enter Item Description">
							<span class="validation"></span>
						</div>
						<div class="form-group">
							<label for="item_price">
								Item Price
							</label>
							<input type="number" class="form-control" id="item_price" name="item_price" placeholder="Enter Item Price">
							<span class="validation"></span>
						</div>
						<div class="form-group">
							<label for="item_category">
								Item Category
							</label>
							<input type="text" class="form-control" id="item_category" name="item_category" placeholder="Enter Item Category">
							<span class="validation"></span>
						</div>
						<!-- <div class="form-group">
							<label for="item_image">
								Item Image
							</label>
							<input type="text" class="form-control" id="item_image" name="item_image" placeholder="Enter Item Category">
							<span class="validation"></span>
						</div> -->
							<form action="../controllers/process_file_upload.php" method="post" enctype="multipart/form-data">
								Select Image to upload:<br>
								<input type="file" name="item_image" id="item_image"></input>
								<button type="submit">Upload image</button>
							</form>
					</div>
				</div>
			</form>
			<div class="d-block text-center py-4">
				<button type="button" class="btn btn-primary" id="add_item">Add</button>
			</div>
		</div>		
	</div>
	</div>
	</div>

<?php } ?>
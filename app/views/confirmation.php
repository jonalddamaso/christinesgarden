<?php require_once "../partials/template.php" ?>
<?php function get_page_content(){ ?>
	<div class="container my-4">
		<div class="row">
			<div class="col-lg-12">
				<h3>Your Reference Number for the order is: <?php echo $_SESSION['trans_code'];?></h3>
				<?php unset($_SESSION['trans_code']); ?>
				<h4>Thank you for shopping! Your order is now being processed.</h4>
				<a href="./catalog.php" class="btn btn-primary">Continue Shopping</a>
			</div>
		</div>
	</div>
<?php } ?>
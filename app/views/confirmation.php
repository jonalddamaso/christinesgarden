<?php require_once "../partials/template.php" ?>
<?php function get_page_content(){ ?>
	
	<!-- place checking here -->
	<?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role'] == 2)) { ?>
	<!-- end checking here -->

	<div class="container my-4">
		<div class="row">
			<div class="col-lg-12">
				<h3>Your Reference Number for the order is: <?php echo $_SESSION['trans_code'];?></h3>
				<?php unset($_SESSION['trans_code']); ?>
				<h4>Thank you for shopping! Your order is now being processed.</h4>
				<a href="./catalog.php" class="uk-button uk-button-default" id="btn-continue">Continue Shopping</a>
			</div>
		</div>
	</div>

<?php } else {
header("Location: ./error.php");
}
?>

<?php } ?>
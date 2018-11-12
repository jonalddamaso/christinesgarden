<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){
	global $conn; ?>
	<!-- place checking here -->
<?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role'] == 2)) { ?>
<!-- end checking here -->


	<div class= "container my-4" id="checkoutpage">
		<div class="row">
			<div class="col-lg-12">
				<h1>Cart page</h1>
			</div>
		</div>
		<hr>
		<div class="table-responsive">
			<table class="table table-striped table-bordered" id="cart-items">
				<thead class="modify-header">
					<tr class="text-center">
						<th>Image</th>
						<th>Item Name</th>
						<th>Item Price</th>
						<th>Item Quantity</th>
						<th>Item Subtotal</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody class="modify-body">
					<?php
					if(isset($_SESSION['cart'])){
						if(count($_SESSION['cart'])!=0){
							$cart_total = 0;
							foreach($_SESSION['cart'] as $id => $qty){
								$sql_query = "SELECT * FROM items WHERE id = '$id';";
								$itemInfo = mysqli_query($conn, $sql_query);
								$item = mysqli_fetch_assoc($itemInfo);
								$subTotal = $_SESSION['cart'][$id] * $item['price'];
								$cart_total += $subTotal;
							?>
							<tr>
							<td class="image_path align-middle"><?php  echo "<img src='". $item['image_path'] ."'/>"; ?></td>
							<td class="item_name align-middle"><?php echo $item['name']; ?></td>
							<td class="item_price text-right align-middle"><?php echo $item['price']; ?></td>
							<td class="item_quantity align-middle"><input type="number" value="<?php echo $qty; ?>" class="form-control text-right align-middle mx-auto" min="1" style="width:150px" data-id="<?php echo $id; ?>"></td>
							<td class="item_subtotal text-right align-middle"><?php echo $subTotal; ?></td>
							<td class="item_action text-center align-middle"><button class="btn btn-danger item-remove" id="removed" data-id="<?php echo $id; ?>">X</button></td>
							</tr>					
						<?php } ?>
				</tbody>
				<tfoot>

					<tr>
						<td class="text-right font-weight-bold align-middle" colspan="4">Total</td>
						<td class="text-right font-weight-bold align-middle" id="total_price">
							<?php echo $cart_total; ?>
						</td>
					</tr>
					<tr>
						<td>
							<button onclick="<?php if(!isset($_SESSION['user'])){echo 'login()';}else { echo 'checkout()';} ?>" id="btn-proceed" class="uk-button uk-button-default my-2 py-3">Proceed to Checkout</button>
							<script type="text/javascript">
								function login() {
  	 							 // alert("you must login first");
  	 							 UIkit.modal('#sign-in').toggle();
								}
								function checkout() {
									window.location.href= "checkout.php"
								}
							</script>
						</td>
					</tr>
					<?php } ?>
				</tfoot>
				<?php
				} else { 
					echo "<tr><td class='text-center' colspan='6'> No Items in Cart </tr></td>";
		
				} ?>
			</table>
		</div>
	</div>

<?php } else {
	header("Location: ./error.php");
}
?>


<?php  } ?>
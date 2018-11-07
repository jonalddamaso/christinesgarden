<?php 
	session_start();
	require_once "connections.php";

	function generate_transaction_code() {
		$ref_num = "";
		$source = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'];

		//we want to make a random 6 string long transaction code
		for ($i = 0; $i < 6; $i++){
			$index = rand(0,15); //generates a random number from 0 to 15
			//append random character
			$ref_num = $ref_num . $source[$index];
		}

		//Q. how do we make sure that this doesn't repeat.
	//A. we add something else that never repeats. Time.
	$today = getdate(); //gets the datetime
	return $ref_num . "-". $today[0]; //today[0] is the second since unix epoch
}



//get all details of the order
$user_id = $_SESSION['user']['id'];
$purchase_date = date("Y-m-d G:i:s"); //Q. what is the date format here?
$status_id = 1;
$payment_mode_id = 1;
$address = $_POST['addressLine1'];
$trans_code = generate_transaction_code();
$_SESSION['trans_code'] = $trans_code;

// echo "User id: ". $user_id;
// echo "Purchase date: ". $purchase_date;
// echo "Address: ". $address;
// echo "Trans code: ". $trans_code;

//create  new order by create the sql statement to add a new entry in the orders tble.

$sql_query = "INSERT INTO orders (user_id, transaction_code, purchase_date, status_id, payment_mod_id) VALUES ('$user_id', '$trans_code', '$purchase_date', '$status_id', '$payment_mode_id');";

$result = mysqli_query($conn, $sql_query);
//we need to get the order_id of the new order created, why?
//this is to create the order details.
//To get the previously created order_id
$new_order_id = mysqli_insert_id($conn); //this looks for the most recently created id number and assigns it to $new_order_id

//Populate the order items
if($result){
	//SESSION cart is just an indexed array for quantities and each index correspond to a specific item_id
	foreach ($_SESSION['cart'] as $item_id => $qty) {
		$item_query = "SELECT price FROM items WHERE id = '$item_id';";
		$item_result = mysqli_query($conn, $item_query);
		$item = mysqli_fetch_assoc($item_result);

		$sql = "INSERT INTO orders_item (order_id, item_id, quantity, price) VALUES ('$new_order_id','$item_id','$qty', '". $item['price']. "');";
		$ord_detail_result = mysqli_query($conn, $sql);
		if($ord_detail_result){
		}
	}  
}

//empties the cart.
unset($_SESSION['cart']);

				//send email to customer
				//import the necessary classes of phpmailer
				use PHPMailer\PHPMailer\PHPMailer;
				use PHPMailer\PHPMailer\Exception;

				//load composer's autloader (this allows us to use any other files composer needs)
				require "../vendor/autoload.php";

				//create a new instance of phpmailer.
				$mail = new PHPMailer(true);

				//Email contents
				$staff_email = 'christines0garden@gmail.com'; //this is the email you created earlier
				$customer_email = $_SESSION['user']['email']; //Email of the user that is currently logged in.
				$email_subject = "Christine's Garden - Order confirmation!"; //This is  up to you.
				$email_body = "<h3>Reference Number: $trans_code</h3> <p>Ship to: $address</p>";

				//Actual Sending of email
				try {
				 //Server setting
					// $mail->SMTPDebug = 4; //Enables us to see detailed debug output;
					//Removing debug will remove the messages and route us to confirmation
					$mail->isSMTP(); //sets mailer to use SMTP to send email
					$mail->Host = 'smtp.gmail.com'; //uses Gmail's SMTP server
					$mail->SMTPAuth = true; //Enables SMTP authentication
					$mail->Username = $staff_email; //defines the email's username
					$mail->Password = "garden080121"; //defines the email's password , password is the password you created for the email.
					$mail->SMTPSecure = 'tls'; //allows for TLS encrption, we can also use SSL
					$mail->Port = 587; //Port to connect to.

				//Recipients
					$mail->setFrom($staff_email, "Christine's Garden"); //sets the sender's alias.
					$mail->addAddress($customer_email);

				//Content
					$mail->isHTML(true); //Sets email format to HTML
					$mail->Subject = $email_subject;
					$mail->Body = $email_body;

					$mail->send();


				} catch (Exception $e){
					echo "Message couldn't be sent. Mailer Error: ". $mail->ErrorInfo;
				}
				//try catch: it performs a block of code and if it fails it catches the eroor message.

				//End send email

mysqli_close($conn);
header('location: ../views/confirmation.php');



?>
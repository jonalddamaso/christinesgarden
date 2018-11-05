<?php 
//see if the form has been completed
if (isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$phoneNumber = $_POST['phoneNumber'];
	$address = $_POST['address'];

	if ($firstname && $lastname && $gender && $phone && $address) {
		mysql_connect("localhost","root","") or die ("Could not connect");
		mysql_select_db("test") or die ("Could not connect to the database");
		
		// check if that name exists
		$exists = mysql_query ("SELECT * FROM users WHERE firstname='$firstname'") or die ("The query could not be completed");
		if (mysql_rows($exists) == 0){
			// update the info in the database4
			mysql_query("UPDATE users SET firstname='$firstname',lastname='$lastname',gender='$gender', phoneNumber='$phoneNumber', address = '$address' WHERE name ='$firstname'") or die ("Update could not be applied");
			echo "Successful!";
		} else echo "User does not exist! Please try again:";
	} else echo "You need to enter all information ot the fields. Please try again: ";

}

?>

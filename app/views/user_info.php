<h2>Your Personal Information</h2>
<form action="../controllers/user_update.php" method="POST">
	<table>
		<tr>
		<td>First Name:</td>
		<td><input type="text" id="firstname" name="firstname"></td>
		</tr>
		<td>Last Name:</td>
		<td><input type="text" id="lastname" name="lastname"></td>
		</tr>
		<td>Gender:</td>
		<td><input type="text" id="gender" name="gender"></td>
		</tr>
		<td>Phone number:</td>
		<td><input type="number" id="phoneNumber" name="phoneNumber"></td>
		</tr>
		</tr>
		<td>Address:</td>
		<td><input type="text" id="address" name="address"></td>
		</tr>
		<td><input type="submit" id="submit" name="submit" value="update personal info"></td>
		</tr>
	</table>
</form>
$(document).on("DOMContentLoaded", ()=>{
	function validate_registration_form(){
		 // - /^[a-zA-z]+$/ is what we call regular expression or regex 
		 // - regex is a writing notation to create a pattern for your code to search through
		 // - it uses certain symbols to check if the pattern exists or not.
		let name = /^[a-zA-Z ]+$/;
		let email = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
		let username = /^[A-Za-z0-9]+(?:[. _-][A-Za-z0-9]+)*$/;
		//Password should contain uppercase, lowercase AND numbers and should be at least 8 characters
		let password = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
		let address = /^[A-Za-z0-9]+(?:[. _-][A-Za-z0-9]+)*$/;
		let errors = 0;

		// username
		if(!$("#username").val().match(username)){
			//uses regex to match to the value of the username field.
			$("#username").next().text("Please provide a valid username").css("color","red");
			errors++;
		} else {
			$("#username").next().text('');
		}

		//password
		if(!$("#password").val().match(password)){
			//uses regex to match to the value of the password field.
			$("#password").next().text("Please provide a valid password").css("color","red");
			errors++;
		} else {
			$("#password").next().text('');
		}

		//email
		if(!$("#email").val().match(email)){
			//uses regex to match to the value of the email field.
			$("#email").next().text("Please provide a valid email").css("color","red");
			errors++;
		} else {
			$("#email").next().text('');
		}

		// address
		if(!$("#address").val().match(address)){
			//uses regex to match to the value of the address field.
			$("#address").next().text("Please provide a valid address").css("color","red");
			errors++;
		} else {
			$("#address").next().text('');
		}

		// firstname
		if(!$("#firstname").val().match(name)){
			//uses regex to match to the value of the firstname field.
			$("#firstname").next().text("Please provide a valid firstname").css("color","red");
			errors++;
		} else {
			$("#firstname").next().text('');
		}

		// lastname
		if(!$("#lastname").val().match(name)){
			//uses regex to match to the value of the lastname field.
			$("#lastname").next().text("Please provide a valid lastname").css("color","red");
			errors++;
		} else {
			$("#lastname").next().text('');
		}

		// confirm password
		if($("#password").val() !== $("#cpassword").val()){
			$("#cpassword").next().text("Password should match").css("color","red");
			errors++;
		} else {
			$("#cpassword").next().text();
		}

		if(errors > 0){
			return false; //this means there are errors in validation.
		} else {
			return true; //this means you're good to register.
		}
	}

	//actual registration
	$("#add_user").click((e) => {
		if(validate_registration_form()){
			let username = $("#username").val();
			let password = $("#password").val();
			let firstname = $("#firstname").val();
			let lastname = $("#lastname").val();
			let email = $("#email").val();
			let address = $("#address").val();

			$.ajax({
				"url": '../controllers/create_user.php',
				"type": "POST",
				"data":{
					'username':username,
					'password':password,
					'firstname':firstname,
					'lastname':lastname,
					'email':email,
					'address':address,
				},
				"success": (data) => {
					if (data == "user_exists"){
						$("#username").next().text("Username already exists");
					}
				}

			});
		}
	});

});
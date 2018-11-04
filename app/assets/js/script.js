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
					'address':address
				},
				"success": (data) => {
					if (data == "user_exists"){
						$("#username").next().text("Username already exists").css("color","red");
					} else {
					window.location.replace("login.php");
					}
				}

			});
		}
	});

	//adding new items
	$("#add_item").click((e) => {
		if(validate_registration_form()){
			let item_name = $("#item_name").val();
			let item_desc = $("#item_desc").val();
			let item_price = $("#item_price").val();
			let item_category = $("#item_category").val();
			let item_image = $("#item_image").val();
			
			$.ajax({
				"url": '../controllers/admin_user.php',
				"type": "POST",
				"data":{
					'item_name':item_name,
					'item_desc':item_desc,
					'item_price':item_price,
					'item_category':item_category,
					'item_image':item_image
				},
				"success": (data) => {
					if(data == "item_exists"){
						$("#item_name").next().text("Item already in database");
					} else {
						window.location.replace("admin_user.php");
						alert("Successfully Added to Database");
					}
				}

			});
		}
	});

	// login and session
	$("#login").click((e) => {
		let username = $('#username').val();
		let password = $('#password').val();
		//alert("username:" + username);
		//alert("password:" + password);
		$.ajax({
			"url": "../controllers/authenticate.php",
			"type": "POST",
			"data": {
				'username': username,
				'password': password
			},

			"success": (data) => {
				if(data == "login_failed"){
					$("#username").next().text("Please provide correct credentials").css("color","red");
				} else {
					window.location.replace("../index.php");
				}
			}

		});

	});

	//prep for add to cart: turning off the default behavior and overriding with our own
	$(document).off('click', '.add-to-cart').on('click', '.add-to-cart', (e) => {
		e.stopPropagation();
		let item_id = $(e.target).attr('data-id');
		let item_quantity = parseInt($(e.target).prev().val());
		// alert("ID: " + item_id + " Quantity ordered: " + item_quantity);

		$.ajax({
			"url": "../controllers/update_cart.php",
			"data": {
				'item_id': item_id,
				'item_quantity': item_quantity,
				'update_flag': false
			},
			"type": "POST",
			"success": (dataFromController) => {
				$("#cart-count").text(dataFromController);
				$(e.target).prev().val('');
			}

		});


	});

	function getTotal(){
		let total = 0;
		$(".item_subtotal").each(function(e){
			total += parseFloat($(this).text());
		});
		$("#total_price").text(total.toFixed(2));
	}

	//edit cart
	$(".item_quantity>input").on("input", (e) => {
		let item_id = $(e.target).data('id');
		let quantity = parseInt($(e.target).val());
		let price = parseFloat($(e.target).parents('tr').find(".item_price").text());

		// console.log(item_id + " New Quantity: " + quantity);
		subTotal = quantity * price;
		$(e.target).parents('tr').find('.item_subtotal').text(subTotal.toFixed(2));
		getTotal();
		$.ajax ({
			"type": "POST",
			"url": "../controllers/update_cart.php",
			"data": {
				'item_id': item_id,
				'item_quantity': quantity,
				'update_flag': true
			},
			"success": (data) => {
				$('#cart-count').text(data);
			}
		});

	});

	//delete
	$(document).off('click', ".item-remove").on('click', '.item-remove',(e) =>{
		e.stopPropagation();
		let item_id = $(e.target).data('id');
		// alert("Item id to be removed: " + item_id);

		$.ajax({
			"type": "POST",
			"url": "../controllers/update_cart.php",
			"data": {
				'item_id': item_id,
				'item_quantity': 0
			},
			"success": (data) => {
				$(e.target).parents('tr').remove();
				$("#cart-count").text(data);
				getTotal();
			}
		});
	});
});
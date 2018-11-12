<?php require_once "../partials/template.php" ?>
<?php function get_page_content() { ?>
	<?php global $conn; ?>

 <div id="myPageContent" class="container-fluid">

		<section id="home">
			<div id="textSlider" class="row">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4 iamCol">
						<p>Christine's</p>
						<p>Garden</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 slideCol">
						<div class="scroller">
							<div class="inner">
								<p>Improve your office</p>
								<p>Welcome! <?php echo $_SESSION['user']['firstname']?></p>
								<p>Enliven your space</p>
								<p>Potted Indoor Plants</p>
							</div>
							
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-12 text-center py-2">
								<a class="uk-button uk-button-default" id="shophome" href="catalog.php">Shop Now!</a>
					</div>
								
			</div>
			
		</section>

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



<?php } ?>




 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar_id" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
    <a href="../index.php" class="navbar-brand" id="nav-name"><em id="logo">Christine's</em> Garden</a>
    <button class="navbar-toggler navbar-toggler-center" type="button" data-toggle="collapse" data-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbar">
        <ul class="navbar-nav ml-auto">
           
            <?php if(!isset($_SESSION['user']) || (isset($_SESSION['user']) && $_SESSION['user']['role'] == 2)){ ?>
                <li class="nav-item">
                    <a href="../views/catalog.php" class="nav-link">Catalog</a>              
                </li>
                <li class="nav-item" id="cart-img">
                    <a href="../views/cart.php" class="nav-link"><i class="fas fa-shopping-cart" ></i><span class="uk-badge" id="cart-count">
                        <?php if(isset($_SESSION['cart'])){
                            echo array_sum($_SESSION['cart']);
                        } else {
                            echo 0;
                        } ?>
                    </span>

                    </a>
                </li>
            <?php } elseif(isset($_SESSION['user']) && $_SESSION['user']['role'] == 1) { ?> 
                <button class="hide-button" type="button"><span uk-icon="settings"></span></button>
                    <div class="uk-drop" uk-dropdown ="animation: uk-animation-slide-top-small; duration: 500;pos: bottom-justify">

                        <li class="nav-item">
                            <a class="nav-link" href="../views/items.php" id="nav-link">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/users.php" id="nav-link">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/orders.php" id="nav-link">Orders</a>
                        </li>
                    </div>

                    <?php } ?>  
                    <?php if(!isset($_SESSION['user'])) { ?>
                            <li class="nav-item">
                                <a uk-toggle="target: #sign-in" class="nav-link"><span uk-icon="sign-in"></span> Login</a>              
                            </li>
                             <li class="nav-item">
                                <a href="../views/register.php" class="nav-link">Register</a>              
                            </li>


                      
            <?php } else { ?>
                    <button class="hide-button" type="button"><span uk-icon="user"></span></button>
                         <div class="uk-drop" uk-dropdown ="animation: uk-animation-slide-top-small; duration: 500;pos: bottom-justify">
                                <li class="uk-active">
                                    <a href="../views/profile.php" class="nav-link" id="nav-link">
                                        Welcome, <?php echo $_SESSION['user']['firstname']?>
                                    </a>
                                </li>
                                <li class="uk-active">
                                    <a href="../controllers/logout.php" class="nav-link" id="nav-link">
                                       <span uk-icon="sign-out"></span> Logout
                                    </a>
                                </li>
                            
                        </div>
            <?php } ?>
        </ul>
      
    </div>
   
 </nav>


<!-- This is the modal with the outside close button -->
<div id="sign-in" uk-modal>
  <?php  global $conn; ?>

    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <h2 class="uk-modal-title">Login</h2>
        <!-- Start form -->
                    <form action="" method="POST">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        <span class="validation"></span>
                      </div>
                      <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                        <span class="validation"></span>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-info" type="button" name="showpassword" id="showpassword" value="Show Password">Show password</button> 
                        <button class="btn btn-primary" id="login" name="login">Login</button>
                      </div>
                      <hr>
                      <div class="panel-footer">
                        Don't have an account! <a href="register.php"> Sign Up Here </a>
                    </div>
                      
                    </form>
            <!-- End form -->

    </div>
</div>













  <!-- <link rel="stylesheet" type="text/css" href="./assets/styles/style.css"> -->
 
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar_id">
    <a href="../index.php" class="navbar-brand" id="nav-name"><em id="logo">Christine's</em> Garden</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-right" id="navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="../views/catalog.php" class="nav-link">Catalog</a>              
            </li>
            <li class="nav-item">
                <a href="../views/cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i> <span class="badge bg-light text-dark" id="cart-count">
                    <?php if(isset($_SESSION['cart'])){
                        echo array_sum($_SESSION['cart']);
                    } else {
                        echo 0;
                    } ?>
                </span>
                </a>
            </li>
            <?php if(!isset($_SESSION['user'])) { ?>
             <li class="nav-item">
                <a href="../views/login.php" class="nav-link"><i class="fas fa-sign-in-alt"></i> Login</a>              
            </li>
             <li class="nav-item">
                <a href="../views/register.php" class="nav-link">Register</a>              
            </li>
            <?php } else { ?>
            <li class="nav-item"> 
                <a href="../views/admin.php" class="nav-link">
                    Welcome, <?php echo $_SESSION['user']['firstname']?>
                </a>
            </li>
            <li class="nav-item">
                <a href="../controllers/logout.php" class="nav-link" id="logout">
                    <i class="fas fa-lock"></i> Logout
                </a>
            </li>
            <?php } ?>
        </ul>
      
    </div>
   
 </nav>
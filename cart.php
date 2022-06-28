<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="home.php" class="logo"> <i class="fa fa-sort-numeric-up"></i> 19RISING </a>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars menu"></div>
        <div id="search-btn" class="fas fa-search"></div>
        <a href="#" class="fas fa-heart"></a>
        <a href="cart.php" class="fas fa-shopping-cart"></a>
        <a href="logout.php">
            <button class="logstatus" type="button">
                <p class=""></p> Log Out
            </button>
        </a>
    </div>

</header>

<!-- header section ends -->

<!-- side-bar section starts -->

<div class="side-bar">

    <div id="close-side-bar" class="fas fa-times"></div>

    <div class="user">
        <img src="images/user-img.jpg" alt="">
        <h3>Ariana Grande</h3>
        <a href="#">log out</a>
    </div>

    <nav class="navbar">
        <a href="home.php"> <i class="fas fa-angle-right"></i> home </a>
        <a href="about.php"> <i class="fas fa-angle-right"></i> about </a>
        <a href="products.php"> <i class="fas fa-angle-right"></i> products </a>
        <a href="contact.php"> <i class="fas fa-angle-right"></i> contact </a>
        <a href="cart.php"> <i class="fas fa-angle-right"></i> cart </a>
    </nav>

</div>

<!-- side-bar section ends -->

<!-- shopping cart section starts  -->

<section class="shopping-cart">

    <h1 class="heading">your <span>products</span></h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-1.jpg" alt="">
            <div class="content">
                <h3>smartphone</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">Rp1.999.999 <span>Rp2.999.999</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-2.jpg" alt="">
            <div class="content">
                <h3>camera</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">Rp3.999.999 <span>Rp4.999.999</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-3.jpg" alt="">
            <div class="content">
                <h3>television</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">Rp4.999.999 <span>Rp5.999.999</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-4.jpg" alt="">
            <div class="content">
                <h3>speaker</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">Rp799.999 <span>Rp899.999</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-6.jpg" alt="">
            <div class="content">
                <h3>smartwatch</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">Rp2.999.999 <span>Rp3.999.999</span></div>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-times"></i>
            <img src="images/product-7.jpg" alt="">
            <div class="content">
                <h3>headphone</h3>
                <form action="">
                    <span>quantity : </span>
                    <input type="number" name="" value="1" id="">
                </form>
                <div class="price">Rp999.999 <span>Rp1.999.999</span></div>
            </div>
        </div>

    </div>

    <div class="cart-total">
        <h3> subtotal : <span>Rp15.799.994</span> </h3>
        <a href="#" class="btn">proceed to checkout</a>
    </div>

</section>

<!-- shopping cart section ends -->

<!-- footer section starts  -->

<section class="quick-links">

    <a href="home.php" class="logo"> <i class="fa fa-sort-numeric-up"></i> 19RISING </a>
    
    <div class="links">
        <a href="home.php"> home </a>
        <a href="about.php"> about </a>
        <a href="products.php"> products </a>
        <a href="contact.php"> contact </a>
        <a href="cart.php"> cart </a>
    </div>

    <div class="share">
        <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
        <a href="https://twitter.com/" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com/feed/" class="fab fa-linkedin"></a>
    </div>

</section>

<!-- footer section ends -->

<!-- swiper js link      -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
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
    <link rel="icon" href="aboutimg.png" type="image/png" sizes="16x16">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

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
                <p class=""></p>Log Out
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

<!-- about section starts  -->

<section class="about">

    <div class="image">
        <img src="images/aboutimg.png" alt="">
    </div>

    <div class="content">
        <h3>About Us</h3>
        <p>Kami adalah Kelompok 2 Mata Kuliah Pemrograman Web Kelas F. Terdiri dari 4 Mahasiswa yaitu: </p>
        <p><b>Nadia Sumolang  (17021106099)<br>
           Angelique Rapar (20021106042)<br>
           Denilson Dien   (20021106143)<br>
           Mentari Pangkey (20021106015)</b></p>
        <p>Tujuan kami membuat website 19rising ini adalah untuk project Ujian Tengah Semester mata Kuliah Pemrograman web. Terima kasih ^.^</p>
        <a href="https://drive.google.com/drive/folders/1panGyFTR6CABXgroEtkyFdeo4n4aKDOD?usp=sharing" class="btn">Video Presentasi</a>
    </div>

</section>

<!-- about section ends -->

<!-- faq section starts  -->

<section class="faq">

    <h1 class="heading"> questions & <span>answers</span> </h1>

    <div class="accordion-container">

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to place order online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to pay online?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>is online payment safe?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>

        <div class="accordion">
            <div class="accordion-heading">
                <h3>how to contact service center?</h3>
                <i class="fas fa-angle-down"></i>
            </div>
            <p class="accordioin-content">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, laboriosam non eligendi reiciendis quis laborum exercitationem voluptatibus autem harum nihil nisi sed mollitia, quam blanditiis architecto cumque? Sit, voluptate maiores.
            </p>
        </div>


    </div>

</section>

<!-- faq section ends -->

<!-- review section starts  -->

<section class="review">

    <h1 class="heading"> clients <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/pic-1.jpeg" alt="">
                <h3>Tulus</h3>
                <span>Buyer</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt explicabo laborum eos delectus, in pariatur iste! Ducimus laudantium nostrum odio.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-2.jpg" alt="">
                <h3>Reza</h3>
                <span>Reseller</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt explicabo laborum eos delectus, in pariatur iste! Ducimus laudantium nostrum odio.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-3.jpg" alt="">
                <h3>Anya</h3>
                <span>Seller</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt explicabo laborum eos delectus, in pariatur iste! Ducimus laudantium nostrum odio.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-4.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo placeat laborum pariatur voluptatibus tenetur impedit assumenda ex reprehenderit soluta ea fugiat error in laboriosam cum dicta consequuntur, sapiente minima quis hic deserunt magnam dignissimos.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-5.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt explicabo laborum eos delectus, in pariatur iste! Ducimus laudantium nostrum odio.</p>
            </div>

            <div class="swiper-slide slide">
                <img src="images/pic-6.png" alt="">
                <h3>john deo</h3>
                <span>designer</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus earum quas quo natus quis, accusamus maxime magni molestias eos. Ab nihil magnam, id inventore explicabo ducimus repudiandae unde distinctio iste!</p>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

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
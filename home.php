<?php 

session_start();

if ( !isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}

require 'functions.php';


$produk = mysqli_query($conn, "SELECT * FROM product");



if ( isset($_POST["submit"])) {

    
       // cek keberhasilan query
  if (tambah($_POST) > 0 ) {
      echo "<script> 
      alert('data berhasil ditambahkan');
       </script>";
       header("Refresh:0");
  } else {
    echo "<script> 
    alert('data gagal ditambahkan');
    document.location.href = home.php; 
    </script>";
  }



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- cusom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

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

<!-- home section starts  -->

<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/home-img-1.png" alt="">
            </div>
            <div class="content">
                <span>up to 50% off</span>
                <h3>smartphones</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/home-img-2.png" alt="">
            </div>
            <div class="content">
                <span>up to 50% off</span>
                <h3>smartwatch</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="swiper-slide slide">
            <div class="image">
                <img src="images/home-img-3.png" alt="">
            </div>
            <div class="content">
                <span>up to 50% off</span>
                <h3>headphones</h3>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- banner section starts  -->

<section class="banner">

    <div class="box-container">

        <a href="#" class="box">
            <img src="images/banner-1.jpg" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>up to 50% off</h3>
            </div>
        </a>

        <a href="#" class="box">
            <img src="images/banner-2.jpg" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>up to 50% off</h3>
            </div>
        </a>

        <a href="#" class="box">
            <img src="images/banner-3.jpg" alt="">
            <div class="content">
                <span>special offer</span>
                <h3>up to 50% off</h3>
            </div>
        </a>
        
    </div>

</section>

<!-- banner section ends -->

<!-- arrivals section starts  -->



    <h1 class="heading"> Add <span>Products</span> </h1>

    <section class="services" style="position: relative;">

            <div class="service">
                <form name="todoForm" autocomplete="off" style="list-style: none;" action="" method="post">
                   <li>
                       <label for="nama">Nama Produk</label>
                       <input type="text" name="nama" id="nama" placeholder="isi nama Produk" required>
                   </li>
                   <li>
                       <label for="harga">Harga</label>
                       <input type="text" name="harga" id="harga"  placeholder="isi harga Produk" required>
                   </li>
                   <li>
                       <label for="gambar">Gambar</label>
                       <input type="text" name="gambar" id="gambar"  placeholder="isi url gambar Produk" required>
                   </li>
                   <li>
                       <label for="deskripsi">Deskripsi Produk</label>
                       <input type="text" name="deskripsi" id="deskripsi"  placeholder="isi deskripsi Produk" required>
                   </li>
                   <li>
                       <label for="toko">link toko</label>
                       <input type="text" name="toko" id="toko"  placeholder="link toko penjual" required>
                   </li>
                   <li>
                       <button type="submit" name="submit">Add Data</button>
                   </li>
                </form>
            </div>
        </section>

        <section class="services">

            <?php foreach ( $produk as $row)  : ?>

            <div class="service">
                <div class="icon">
                    <img src="<?= $row['gambar']; ?>"
                        alt="<?= $row['nama']; ?>">
                </div>
                <h3> <?= $row['nama']; ?></h3>
                <p>Price : <?= $row['harga']; ?></p>
                <p>desc : <?= $row['deskripsi']; ?></p>
                 <p>toko : <a href="<?= $row['toko']; ?>" target="_blank">Click disini</a></p>
                <br>
               
                <a class="ab" href="delete.php?id=<?= $row['id']; ?>">Hapus</a>
                
            </div>
            <?php endforeach; ?>
        </section>


<!-- arrivals section ends -->

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- Fontawsem -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/vendor/fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/vendor/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/vendor/fontawesome-free-6.4.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/vendor/fontawesome-free-6.4.2-web/css/brands.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/vendor/fontawesome-free-6.4.2-web/css/solid.min.css">

     

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo ROOT_PATH; ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo ROOT_PATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo ROOT_PATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo ROOT_PATH; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo ROOT_PATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo ROOT_PATH; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo ROOT_PATH; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo ROOT_PATH; ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo ROOT_PATH; ?>assets/css/main.css" rel="stylesheet">
</head>
<body>

     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><img src="<?php echo ROOT_PATH; ?>assets/img/Daco_5837149.png">of the world</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php echo ROOT_PATH; ?>">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li> -->
          <li><a class="nav-link scrollto" href="<?php echo ROOT_PATH; ?>category">Category</a></li>
          <?php
        if(isset($_SESSION['isSignedIn']) && $_SESSION['isSignedIn']){
      ?>
      <a href="<?php echo ROOT_PATH; ?>admin/addcountry" class="adds scrollto d-none d-lg-flex" style="border: 2px solid #cda45e;
      border-radius: 50px;text-transform: uppercase;letter-spacing: 1px; transition: 0.3s;margin-left:30px;padding-right: 20px;">Add Country</a>
      <a href="<?php echo ROOT_PATH; ?>admin/addreciepe" class="adds scrollto d-none d-lg-flex" style="border: 2px solid #cda45e;
      border-radius: 50px;text-transform: uppercase;letter-spacing: 1px; transition: 0.3s;margin-left:30px;padding-right: 20px;">Add Reciepe</a>
      <?php } ?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php
        if(isset($_SESSION['isSignedIn']) && $_SESSION['isSignedIn']){
      ?>
      <a href="<?php echo ROOT_PATH; ?>logout" class="book-a-table-btn scrollto d-none d-lg-flex">Log Out</a>
      <?php }else{ ?>
        <a href="<?php echo ROOT_PATH; ?>login" class="book-a-table-btn scrollto d-none d-lg-flex">Log In</a>
        <?php } ?>
    </div>
  </header><!-- End Header -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobile Store</title>

  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


  <!-- font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- owl carousel css  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Custom css  -->
  <link rel="stylesheet" href="style.css">

  <?php
  // require functions.php file
  require("./functions.php");
  ?>
  <!-- favicon  -->
  <link rel="shortcut icon" href="favicon.png" type="image/icon">

  <!-- owl-carousel CDN CSS-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <!-- start header  -->
  <header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1
        bg-light">
      <p class="font-rale font-size-12 text-black-50 m-0 fw-bold">
        Jordan Calderon 430-985 Eleifend st.Duluth Washington 92611(427)930-5255
      </p>
      <div class="font-rale font-size-14">
        <a href="#" class="px-3 border-right border-left text-dark text-decoration-none">Login</a>
        <a href="#" class="px-3 border-right text-dark text-decoration-none">Wishlist(0)</a>
      </div>
    </div>

    <!-- primary navigation  -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Mobile Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto font-rubik">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">On-sale</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Products <i class="fa-solid fa-chevron-down"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Categories<i class="fa-solid fa-chevron-down"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Coming Soon</a>
            </li>
          </ul>
          <form action="./cart.php" class="font-size-14 font-rale">
            <a href="#" class="py-2 rounded-pill color-primary-bg text-decoration-none">
              <span class="font-size-16 px-2 text-white"><i class="fa-solid fa-cart-plus"></i></span>
          <form method="post">
              <button class="px-3 py-2 rounded-pill text-dark text-bold bg-light" type="submit"><?php echo count($product->getData('cart'));?></button> 
              </form>
            </a>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <!-- main section  -->
  <main id="main-site">
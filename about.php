<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - About </title>
    <!-- swiper css  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- all link -->
    <?php require('inc/link.php');?>
  <style>

  </style>
</head>
<body class="bg-light">
<!-- header -->
<?php require('inc/header.php');?>


<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">About Us</h2>
    <div class="h-link"></div>
    <p class="text-center mt-4">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae laborum accusamus odio omnis. <br> Ea dolore eum natus, explicabo placeat sit.
    </p>
</div>

<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-6 mb-4">
            <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet sunt, distinctio accusamus adipisci ipsam, quam consequuntur eligendi eveniet neque architecto, facere animi esse nemo fugit enim temporibus aliquid. Delectus voluptas alias cum.
            </p>
        </div>
        <div class="col-lg-6 col-md-6 mb-4">
            <img src="./assets/images/about/about.jpg" alt="about" class="w-100">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top text-center border-4 box">
                <img src="./assets/images/about/hotel.svg" alt="icons" width="60px">
                <h4 class="mt-3">100+ Rooms</h4>
            </div>
        </div>


        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top text-center border-4 box">
                <img src="./assets/images/about/customers.svg" alt="icons" width="60px">
                <h4 class="mt-3">200+ Customers</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top text-center border-4 box">
                <img src="./assets/images/about/rating.svg" alt="icons" width="60px">
                <h4 class="mt-3">170+ Revies</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top text-center border-4 box">
                <img src="./assets/images/about/staff.svg" alt="icons" width="60px">
                <h4 class="mt-3">200+ staffs</h4>
            </div>
        </div>
    </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">Management Team</h3>
<div class="container px-4">
   <!-- Swiper -->
  <div class="swiper swiper-management">
    <div class="swiper-wrapper mb-5">

      <div class="swiper-slide overflow-hidden rounded bg-white text-center  ">
         <img src="./assets/images/about/IMG_17352.jpg" class="w-100" alt="img">
         <h5 class="mt-2">Random Name</h5>
      </div>

      <div class="swiper-slide overflow-hidden rounded bg-white text-center">
        <img src="./assets/images/about/IMG_17352.jpg" class="w-100" alt="img">
         <h5 class="mt-2">Random Name</h5>
      </div>

      <div class="swiper-slide overflow-hidden rounded bg-white text-center">
        <img src="./assets/images/about/IMG_17352.jpg" class="w-100" alt="img">
         <h5 class="mt-2">Random Name</h5>
      </div>

      <div class="swiper-slide overflow-hidden rounded bg-white text-center">
        <img src="./assets/images/about/IMG_17352.jpg" class="w-100" alt="img">
         <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide overflow-hidden rounded bg-white text-center">
        <img src="./assets/images/about/IMG_17352.jpg" class="w-100" alt="img">
         <h5 class="mt-2">Random Name</h5>
      </div>
      <div class="swiper-slide overflow-hidden rounded bg-white text-center">
        <img src="./assets/images/about/IMG_17352.jpg" class="w-100" alt="img">
         <h5 class="mt-2">Random Name</h5>
      </div>

      <div class="swiper-slide overflow-hidden rounded bg-white text-center">
        <img src="./assets/images/about/IMG_17352.jpg" class="w-100" alt="img">
         <h5 class="mt-2">Random Name</h5>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<!-- Footer -->
<?php require('inc/footer.php');?>
<!-- SWIPER  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper-management", {
      slidesPerView:4,
      spaceBetween:30,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
           breakpoints:{
        320:{
          slidesPerView:1,
        },
      640:{
          slidesPerView:1,
        },
      768:{
          slidesPerView:3,
        },
      1024:{
          slidesPerView:3,
        },
      }
    });
  </script>
</body>
</html>
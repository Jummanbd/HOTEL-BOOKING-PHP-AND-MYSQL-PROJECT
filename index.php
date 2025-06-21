<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - Home </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/link.php');?>

</head>
<body class="bg-light">
<?php require('inc/header.php');?>

<!-- carousel -->
<div class="container-fluid p-0">
    <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="assets/images/carousel/IMG_15372.png" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="assets/images/carousel/IMG_40905.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="assets/images/carousel/IMG_55677.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="assets/images/carousel/IMG_62045.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="assets/images/carousel/IMG_93127.png" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="assets/images/carousel/IMG_40905.png" class="w-100 d-block"/>
      </div>
    </div>
  </div>
</div>

<!-- check availability form -->
 <div class="container availability-from">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Checker Booking Availability</h5>
      <form>
        <div class="row align-items-end ">
          <div class="col-lg-3 mb-3">
             <label class="form-label" style = "font-weight:500;">Check-In</label>
             <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
             <label class="form-label" style = "font-weight:500;">Check-Out</label>
             <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
             <label class="form-label" style = "font-weight:500;">Adult</label>
             <select class="form-select shadow-none">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
             </select>
          </div>
          <div class="col-lg-3 mb-3">
             <label class="form-label" style = "font-weight:500;">Children</label>
             <select class="form-select shadow-none">
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
             </select>
          </div>
          <div class="col-lg-3 mb-3">
            <button class="btn text-white shadow-none custom-bg">
              Submit
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
 </div>

<!-- Our Rooms  -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
 <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
        <img src="./assets/images/rooms/1.jpg" class="card-img-top" alt="hotel room">
        <div class="card-body">
          <h5 class="card-title fw-bold">Simple Room Name</h5>
          <h6 class="mb-3">$200 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1 fw-bold">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Bathroom</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">3 Sofa</span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1 fw-bold">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Television</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">AC</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Room Heater</span>
          </div>
          <div class="ratin mb-4">
            <h6 class="mb-1 fw-bold">Rating</h6>
            <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>

          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
        <img src="./assets/images/rooms/IMG_78809.png" class="card-img-top" alt="hotel room">
        <div class="card-body">
          <h5 class="card-title fw-bold">Simple Room Name</h5>
          <h6 class="mb-3">$200 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1 fw-bold">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Bathroom</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">3 Sofa</span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1 fw-bold">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Television</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">AC</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Room Heater</span>
          </div>
          <div class="ratin mb-4">
            <h6 class="mb-1 fw-bold">Rating</h6>
            <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>

          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>

        <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width:350px; margin:auto;">
        <img src="./assets/images/rooms/IMG_39782.png" class="card-img-top" alt="hotel room">
        <div class="card-body">
          <h5 class="card-title fw-bold">Simple Room Name</h5>
          <h6 class="mb-3">$200 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1 fw-bold">Features</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">2 Rooms</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Bathroom</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Balcony</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">3 Sofa</span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1 fw-bold">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Wifi</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Television</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">AC</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Room Heater</span>
          </div>
          <div class="ratin mb-4">
            <h6 class="mb-1 fw-bold">Rating</h6>
            <span class="badge rounded-pill bg-light">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>

          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Now</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms ></a>
    </div>
  </div>
 </div>

 <!-- Our facilities -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

 <div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="./assets/images/facilities/IMG_43553.svg" alt="icons">
      <h5 class="mt-3">Wifi</h5>
    </div>

    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="./assets/images/facilities/IMG_96423.svg" alt="icons">
      <h5 class="mt-3">Star</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="./assets/images/facilities/IMG_43553.svg" alt="icons">
      <h5 class="mt-3">Wifi</h5>
    </div>

    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="./assets/images/facilities/IMG_43553.svg" alt="icons">
      <h5 class="mt-3">Wifi</h5>
    </div>

    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="./assets/images/facilities/IMG_43553.svg" alt="icons">
      <h5 class="mt-3">Wifi</h5>
    </div>

    <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Facilitiess</a>

    </div>
  </div>

 </div>

 <!-- Our testimonials -->

 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>
  <div class="container">
      <!-- Swiper -->
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <!-- item -->
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center py-4 text-center">
            <img src="./assets/images/facilities/IMG_41622.svg" width="30px" alt="profile img">
            <h6 class="m-0 ms-2">Random user name</h6>
          </div>
          <p class="user comment">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ullam soluta nihil. Odio, quibusdam eum aliquid repudiandae unde nobis dolorum voluptas deserunt iusto modi animi?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <!-- end item -->

              <!-- item -->
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center py-4 text-center">
            <img src="./assets/images/facilities/IMG_41622.svg" width="30px" alt="profile img">
            <h6 class="m-0 ms-2">Random user name</h6>
          </div>
          <p class="user comment">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ullam soluta nihil. Odio, quibusdam eum aliquid repudiandae unde nobis dolorum voluptas deserunt iusto modi animi?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <!-- end item -->
              <!-- item -->
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center py-4 text-center">
            <img src="./assets/images/facilities/IMG_41622.svg" width="30px" alt="profile img">
            <h6 class="m-0 ms-2">Random user name</h6>
          </div>
          <p class="user comment">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ullam soluta nihil. Odio, quibusdam eum aliquid repudiandae unde nobis dolorum voluptas deserunt iusto modi animi?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <!-- end item -->
              <!-- item -->
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center py-4 text-center">
            <img src="./assets/images/facilities/IMG_41622.svg" width="30px" alt="profile img">
            <h6 class="m-0 ms-2">Random user name</h6>
          </div>
          <p class="user comment">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus ullam soluta nihil. Odio, quibusdam eum aliquid repudiandae unde nobis dolorum voluptas deserunt iusto modi animi?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <!-- end item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
<!-- Reach us -->
 <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach us</h2>
 <div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe height="100% reunded" class="w-100"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.8318789773!2d90.33728815181979!3d23.780975728157536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1750414152535!5m2!1sen!2sbd" loading="lazy" ></iframe>
    </div>
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded mb-4">
        <h5 class=" fw-bold">Call Us</h5>
        <a href="tel:+9177788555" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>  +9177788555</a>
        <br>
        <a href="hello12@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i></i> hello12@gmail.com</a>
      </div>

      <div class="bg-white p-4 rounded mb-4">
        <h5 class=" fw-bold">Follow Us</h5>
        <a href="twitter.com" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i> Twitter
          </span>
        </a>
        <br>
        <a href="facebook.com" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i> Facebook
          </span>
        </a>
        <br>
        <a href="youtube.com" class="d-inline-block mb-3 ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-youtube me-1"></i> Youtube
          </span>
        </a>
      </div>
    </div>
  </div>
 </div>

<!-- Footer -->
<?php require('inc/footer.php');?>

<!-- SWIPER  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay:{
        delay:3500,
        disableOnInteraction:false,
      }

    });

     var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
          slidesPerView:1,
        },
      640:{
          slidesPerView:1,
        },
      768:{
          slidesPerView:2,
        },
      1024:{
          slidesPerView:3,
        },
      }
    });
  </script>
</body>
</html>
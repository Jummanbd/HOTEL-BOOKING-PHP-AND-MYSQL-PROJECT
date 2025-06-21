<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - Contact </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/link.php');?>

</head>
<body class="bg-light">
<?php require('inc/header.php');?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Contact Us</h2>
    <div class="h-link"></div>
    <p class="text-center mt-4">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae laborum accusamus odio omnis. <br> Ea dolore eum natus, explicabo placeat sit.
    </p>
</div>

<div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-5 px-4">
        <div class="bg-white p-4 rounded shadow">
            <iframe height="285px reunded" class="w-100"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.8318789773!2d90.33728815181979!3d23.780975728157536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1750414152535!5m2!1sen!2sbd" loading="lazy" ></iframe>
            <h5 class="mt-4 fw-bold">Address</h5>
            <a href="https://maps.app.goo.gl/jtATQyJgDUw7cHih8" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
              <i class="bi bi-geo-alt-fill"></i> XYZ, LONDON UK
            </a>

            <h5 class="mt-2 fw-bold">Call Us</h5>
              <a href="tel:+9177788555" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>  +9177788555</a>
              <br>
              <h5 class="mt-2 fw-bold">Email</h5>
              <a href="hello12@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i></i> hello12@gmail.com</a>

              <h5 class="mt-2 fw-bold">Follow Us</h5>
              <a href="twitter.com" class="d-inline-block fs-5 text-dark me-3 ">
                <i class="bi bi-twitter me-1"></i>
              </a>

              <a href="facebook.com" class="d-inline-block fs-5 text-dark me-3 ">
                <i class="bi bi-facebook me-1"></i>
              </a>

              <a href="youtube.com" class="d-inline-block fs-5 text-dark me-3 ">
                <i class="bi bi-youtube me-1"></i>
              </a>


              <a href="youtube.com" class="d-inline-block fs-5 text-dark me-3 ">
                <i class="bi bi-instagram"></i>
              </a>

        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-5 px-4">
        <div class="bg-white p-4 rounded shadow">
          <h5>Send a message</h5>
          <form action="">
            <div class="mb-3">
              <label  class="form-label "style="font-weight: 500;">Name</label>
              <input type="email" class="form-control shadow-none"  >
           </div>

            <div class="mb-3">
              <label  class="form-label "style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none"  >
           </div>

            <div class="mb-3">
              <label  class="form-label "style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none"  >
           </div>
            <div class="mb-3">
              <label  class="form-label "style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shadow-none"  >
           </div>

            <div class="mb-3">
              <label  class="form-label "style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none"  rows = "3"></textarea>
           </div>
           <button type="submit" class="btn custom-bg text-white shadow-none mt-2">Send</button>
          </form>
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
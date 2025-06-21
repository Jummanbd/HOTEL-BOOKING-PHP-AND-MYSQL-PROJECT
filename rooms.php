<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - Facilities </title>
    <?php require('inc/link.php');?>

</head>
<body class="bg-light">
<?php require('inc/header.php');?>

<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Facilities</h2>
    <div class="h-link"></div>
    <p class="text-center mt-4">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae laborum accusamus odio omnis. <br> Ea dolore eum natus, explicabo placeat sit.
    </p>
</div>

<div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 ">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
            <div class="container-fluid flex-lg-column align-items-lg-stretch">
                <h4 class="my-2">FILTERS</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="filterDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse align-items-lg-stretch flex-column " id="filterDropdown">

                   <div class="border bg-light p-3 rounded mb-3">
                      <h5 class="mb-3" style="font-size: 18px;">Check Availabilty</h5>
                      <label class="form-label">Check-in</label>
                      <input type="date" class="form-control shadow-none mb-3">
                      <label >Check-in</label>
                      <input type="date" class="form-control shadow-none mb-3 ">
                   </div>

                   <div class="border bg-light p-3 rounded mb-3">
                     <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                      <div class="mb-2">
                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                        <label   class="form-check-label" for= "f1">Facility One</label>
                      </div>
                      <div class="mb-2">
                        <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                        <label   class="form-check-label" for= "f2">Facility Two</label>
                      </div>
                      <div class="mb-2">
                        <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                        <label   class="form-check-label" for= "f3">Facility Three</label>
                      </div>
                   </div>


                   <div class="border bg-light p-3 rounded mb-3">
                      <h5 class="mb-3" style="font-size: 18px;">GUSTS</h5>
                      <div class="d-flex">
                        <div class="me-2">
                          <label class="form-label">Adults</label>
                          <input type="number" class="form-control shadow-none mb-3">
                        </div>
                        <div>
                          <label class="form-label">Children</label>
                          <input type="number" class="form-control shadow-none mb-3 ">
                        </div>
                      </div>
                   </div>
                </div>
            </div>
        </nav>
      </div>
      <div class="col-lg-9 col-md-12 mb-lg-0 mb-4">
        <!-- card item -->
        <div class="card mb-4 border-0 shadow"  >
          <div class="row g-0 ">
            <div class="col-md-5 p-0">
              <img src="./assets/images/rooms/IMG_39782.png" class="img-fluid rounded-start h-100"  alt="rooms">
            </div>

            <div class="col-md-5 p-4 align-items-center">
              <h5 class="card-title mb-3">Simple Room Name</h5>
              <div class="features mb-3">
                  <h6 class="mb-1 fw-medium">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">2 Rooms</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Bathroom</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Balcony</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">3 Sofa</span>
              </div>

              <div class="facilities mb-4  align-items-center">
                <h6 class="mb-1 fw-medium">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">Wifi</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">Television</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">AC</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">Room Heater</span>
              </div>
              <div class="guets mb-3 align-items-center">
                <h6 class=" fw-medium">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">3 Adults</span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">4 Children</span>

              </div>
            </div>
            <div class="col-md-2 d-flex  align-items-center">
              <div class="card-body ">
                <h6 class="mb-1 mb-2 fw-medium">$200 per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Booking Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end card-item -->
        <!-- card item -->
        <div class="card mb-4 border-0 shadow"  >
          <div class="row g-0 ">
            <div class="col-md-5 p-0">
              <img src="./assets/images/rooms/IMG_42663.png" class="img-fluid rounded-start h-100"  alt="rooms">
            </div>

            <div class="col-md-5 p-4 align-items-center">
              <h5 class="card-title mb-3">Simple Room Name</h5>
              <div class="features mb-3">
                  <h6 class="mb-1 fw-medium">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">2 Rooms</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Bathroom</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Balcony</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">3 Sofa</span>
              </div>

              <div class="facilities mb-4  align-items-center">
                <h6 class="mb-1 fw-medium">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">Wifi</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">Television</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">AC</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">Room Heater</span>
              </div>
              <div class="guets mb-3 align-items-center">
                <h6 class=" fw-medium">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">3 Adults</span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">4 Children</span>

              </div>
            </div>
            <div class="col-md-2 d-flex  align-items-center">
              <div class="card-body ">
                <h6 class="mb-1 mb-2 fw-medium">$200 per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Booking Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end card-item -->

        <!-- card item -->
        <div class="card mb-4 border-0 shadow"  >
          <div class="row g-0 ">
            <div class="col-md-5 p-0">
              <img src="./assets/images/rooms/IMG_65019.png" class="img-fluid rounded-start h-100"  alt="rooms">
            </div>

            <div class="col-md-5 p-4 align-items-center">
              <h5 class="card-title mb-3">Simple Room Name</h5>
              <div class="features mb-3">
                  <h6 class="mb-1 fw-medium">Features</h6>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">2 Rooms</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Bathroom</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">1 Balcony</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">3 Sofa</span>
              </div>

              <div class="facilities mb-4  align-items-center">
                <h6 class="mb-1 fw-medium">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">Wifi</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">Television</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">AC</span>
                  <span class="badge rounded-pill bg-light text-dark  text-wrap ">Room Heater</span>
              </div>
              <div class="guets mb-3 align-items-center">
                <h6 class=" fw-medium">Guest</h6>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">3 Adults</span>
                <span class="badge rounded-pill bg-light text-dark  text-wrap ">4 Children</span>

              </div>
            </div>
            <div class="col-md-2 d-flex  align-items-center">
              <div class="card-body ">
                <h6 class="mb-1 mb-2 fw-medium">$200 per night</h6>
                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Booking Now</a>
                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end card-item -->
      </div>
    </div>
</div>


<!-- Footer -->
<?php require('inc/footer.php');?>
</body>
</html>
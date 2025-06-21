<!--  Nav bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-3 shadow -sm sticky-top">
  <div class="container-fluid">
    <a class="me-5 fw-bold fs-4 h-font navbar-brand" href="index.php">Hotel Booking</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-6 ms-2 active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 ms-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6 ms-2" href="facilities.php">Facilities</a>
        </li>
         <li class="nav-item">
         <a class="nav-link fs-6 ms-2" href="about.php">About</a>
        </li>
        <li class="nav-item">
         <a class="nav-link fs-6 ms-2" href="contact.php">Contact Us</a>
        </li>

    </ul>
    <div class="d-flex" role="search">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
        Login
        </button>
        <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
        Register
        </button>
    </div>
    </div>
  </div>
</nav>




<!-- Modal login -->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
     <form action="">
        <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center " ><i class="bi bi-person-circle me-2"></i> User Login</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
     </form>
      <div class="modal-body">
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" class="form-control shadow-none"  >
        </div>
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="email" class="form-control shadow-none"  >
        </div>
        <div class="d-flex align-items-center justify-content-between mb-2">
        <button class="btn btn-dark shadow-none" type="submit">Login</button>
        <a href="javascript:void(0)" class=" text-decoration-none text-end text-secondary">Forget Password</a>
        </div>
      </div>

    </div>
  </div>
</div>


<!-- Modal Register -->
<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <form >
        <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center " ><i class="bi bi-person-fill-add me-2"></i></i>Registeration From</h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
     </form>
      <div class="modal-body">
        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note:Your details must match with your ID (Aadhaar card, passport, ddriving license, etc.) that will be reqired during check-in.</span>
        <div class="container-fluid">
            <div class="row">
                 <div class="col-md-6  mb-3 ">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control shadow-none"  >
                 </div>

                 <div class="col-md-6  mb-3">
                    <label class="form-label ">Email address</label>
                    <input type="email" class="form-control shadow-none"  >
                 </div>

                 <div class="col-md-6  mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control shadow-none"  >
                 </div>

                 <div class="col-md-6  mb-3">
                    <label class="form-label ">Picture</label>
                    <input type="file" class="form-control shadow-none"  >
                 </div>

                 <div class="col-md-12  mb-3 ">
                    <label class="form-label">Address</label>
                   <textarea class="form-control shadow-none" rows="1"></textarea>
                 </div>

                 <div class="col-md-6  mb-3">
                    <label class="form-label">Pincode</label>
                    <input type="number" class="form-control shadow-none"  >
                 </div>

                 <div class="col-md-6  mb-3">
                    <label class="form-label ">Date of birth</label>
                    <input type="date" class="form-control shadow-none"  >
                 </div>


                 <div class="col-md-6  mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none"  >
                 </div>

                 <div class="col-md-6  mb-3">
                    <label class="form-label ">Confirm Password</label>
                    <input type="password" class="form-control shadow-none"  >
                 </div>
                </div>
            </div>
        </div>
        <div class="text-center my-3">
          <button type="submit" class="btn btn-dark shadow-none ">REGISTER</button>
        </div>

    </div>
  </div>
</div>
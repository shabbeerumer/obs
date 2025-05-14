{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OBS</title>
  <link rel="icon" type="image/x-icon" href="../img/logo1.png">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZ<head>
 GkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>



</style>
<body> --}}
  @extends('frontend.layout.main')
  @section('content')
<div class="#" style="background-color:white;">
  {{-- <div class="container-fluid" style="background-color: white;">
    <p> <i class="fa-solid fa-phone-volume pt-4 text-danger ml-3"></i>
      <span style="margin-left: 10px;"> +(92)123 4565 32 </span>
      <span style="margin-left: 10px;"> <i class="fa-solid fa-envelope text-danger"></i></span>
      <span style="margin-left: 10px;"> obspakistangmail.com</span>
    </p>
  </div>
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top pt-4">
    <div class="container-fluid" style="background-color:black; padding:2%;">
      <B><a class="navbar-brand" href="#"
          style="font-size: 26px; padding-left: 140px; padding-right: 50px; padding-top: 4px;">
          <img src="../img/logo11.jpg" style="color: brown; border-radius: 100%;" height="60px" width="80px">
          <span style="color:white">OBS</span>
        </a></B>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html"
              style="margin: left 20px; color:white">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white" href="about.html">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:white" href="bikelisting.html">BIKE LIST</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" style="color:white" href="contact.html">CONTACT US</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color:white" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              ASSESSRIES
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="honda.html">HONDA ASSESSRIES</a></li>
              <li><a class="dropdown-item" href="yamaha.html">YAMAHA ASSESSRIES</a></li>
              <li><a class="dropdown-item" href="suzuki.html">SUZUKI ASSESSRIES</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
              <button class="nav-link dropdown-toggle ms-3 me-3" style=" border-radius: 50%; background-color: transparent; font-size: large; color:gray;" data-bs-toggle="dropdown" ><i class="fa-solid fa-user"></i></button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Login">SIGN-IN</a></li>
              <li><a class="dropdown-item" data-bs-target="#Register" data-bs-toggle="modal">SIGN-UP</a></li>
              <li><a class="dropdown-item">LOG-OUT</a></li>

            </ul>
          </li>

          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-danger text-white" type="submit">Search</button>
            <span style="margin-top: 10px; margin-left: 30px;"> <i
                class="fa-solid fs-3 fa-cart-plus text-danger"></i></span>
            <li>
        </ul>
      </div>
    </div>
  </nav>
 
<div class="modal fade" id="Login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Login/Register</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="">
      <div class="row" style="margin-bottom: 4%;">
        <div class="col-lg-3 col-md-3 col-sm-4"><div class="btn btn-danger"  data-bs-target="#Login"   data-bs-toggle="modal">Login</div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4"><div class="btn btn-outline-danger" data-bs-target="#Register" data-bs-toggle="modal"  >Register</div>
        </div>
      </div>
      <div class="input1">
        <input type="email" placeholder="Email" name="email" class="form-control" required>
      </div>
      <div class="input2 mt-2">
        <input type="password" placeholder="Password" name="password" class="form-control" required>
      </div>
      <div class="btn btn-outline-danger mt-3 " type="submit"  style="padding-left: 12%;padding-right: 10%; padding-top: 2%; padding-bottom: 2%;" >Sign in</div>
    </form>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="Register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Login/Register</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <form action="">
      <div class="row" style="margin-bottom: 4%;">
        <div class="col-lg-3 col-md-3 col-sm-4"><div class="btn btn-outline-danger" data-bs-target="#Login"   data-bs-toggle="modal">Login</div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4"><div class="btn btn-danger"  data-bs-target="#Register" data-bs-toggle="modal"  >Register</div>
        </div>
      </div>
      <div class="input1 mt-2">
        <input type="text" placeholder="Name" name="name" class="form-control" required>
      </div>
      <div class="input2 mt-2">
        <input type="email" placeholder="Email" name="email" class="form-control" required>
      </div>
      <div class="input3 mt-2">
        <input type="password" placeholder="Password" name="password" class="form-control" required>
      </div>
      <div class="input2 mt-2">
        <input type="password" placeholder=" Confirm Password" name="confirmpassword" class="form-control" required>
      </div>
      <div class="btn btn-outline-danger mt-3 " type="submit" style="padding-left: 12%;padding-right: 10%; padding-top: 2%; padding-bottom: 2%;" >Sign Up</div>
    </form>
    </div>
  </div>
</div>
</div>  --}}

  <div class="contaner-fluid">
    <img src="../img/b1.jpeg" style="height:300px; width: 100%; display: flex; object-fit: cover;">
    <div class="container-fluid p-3 " style="background-color:rgb(213, 63, 73); text-align: center;">
      <p style="color:black;"><a href="hondadetail.html" style="text-decoration:none; color:white;">Honda</a> / / Service</p>

    </div>
  </div>
  <!--end-->


  <!--start products card-->
  <div class="container-fluid">
    <h1 style="text-align: center; font-weight: bold; margin-top: 100px; margin-bottom: 100px;">Honda Shop</h1>
    <div class="row">
      <div class="col-md-3 col-md-3 col-sm-6 pt-4">
        <H3>Search Here</H3>
        <div>
          <input type="text" placeholder="Search" style="width: 70%;"> <button type="button"
            style="background-color: black; color: aliceblue;"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="container" style="border: 1px solid; margin-top: 5%;">

          <div class="range-container">
            <p style="margin-right: 300px;"><strong>Price range</strong></p>
            <div class="price-labels">
              <span id="minPrice">PKR 1000</span>
              <span id="maxPrice" class="ms-5">PKR 6000</span>
            </div>
            <div class="slider">
              <div class="slider-track"></div>
              <input type="range" id="minRange" min="1000" max="6000" value="1000">
              <input type="range" id="maxRange" min="1000" max="6000" value="6000" style="left: 10px; top: -35px;">
            </div>
          </div>

          <script>
            const minRange = document.getElementById("minRange");
            const maxRange = document.getElementById("maxRange");
            const minPrice = document.getElementById("minPrice");
            const maxPrice = document.getElementById("maxPrice");
            const sliderTrack = document.querySelector(".slider-track");

            function updatePrices() {
              let minVal = parseInt(minRange.value);
              let maxVal = parseInt(maxRange.value);

              if (maxVal - minVal < 500) {
                if (event.target === minRange) {
                  minRange.value = maxVal - 500;
                } else {
                  maxRange.value = minVal + 500;
                }
              }

              minPrice.textContent = `PKR ${minRange.value}`;
              maxPrice.textContent = `PKR ${maxRange.value}`;

              let minPercent = ((minRange.value - minRange.min) / (minRange.max - minRange.min)) * 100;
              let maxPercent = ((maxRange.value - maxRange.min) / (maxRange.max - maxRange.min)) * 100;

              sliderTrack.style.left = minPercent + "%";
              sliderTrack.style.width = (maxPercent - minPercent) + "%";
            }

            minRange.addEventListener("input", updatePrices);
            maxRange.addEventListener("input", updatePrices);

            updatePrices();
          </script>

        </div>
        <p style="margin-top: 15px;"><strong>Vehicle Type</strong></p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
          <label class="form-check-label ms-3" for="flexCheckDefault">
            Adventure Touring
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
          <label class="form-check-label ms-3" for="flexCheckChecked">
            ATV & UTV
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
          <label class="form-check-label ms-3" for="flexCheckChecked">
            Cruiser
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
          <label class="form-check-label ms-3" for="flexCheckChecked">
            Dirt Bike
          </label>
        </div>
        <p style="margin-top: 15px; margin-bottom: 4%;"><strong>Discount</strong></p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
          <label class="form-check-label ms-3" for="flexCheckChecked">
            40% or More

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
          <label class="form-check-label ms-3" for="flexCheckChecked">
            60% or More

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
          <label class="form-check-label ms-3" for="flexCheckChecked">
            15% or More

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
          <label class="form-check-label ms-3" for="flexCheckChecked">
            10% or More

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
          <label class="form-check-label ms-3" for="flexCheckChecked">
            70% or More

          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
          <label class="form-check-label ms-3" for="flexCheckChecked">
            50% or More

          </label>
        </div>
        <p style="margin-top: 15px;"><strong>Custumer Review</strong> </p>

        <div class="container">
          <p style="color: #26bb48;"><i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i><span style="margin-left: 5px; color: grey;">5.0</span>
          </p>
        </div>
        <div class="container">

          <p style="color: #26bb48;"><i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i><span style="margin-left: 5px; color: grey;">4.5</span>
          </p>
        </div>
        <div class="container">

          <p style="color: #26bb48;"><i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i><span style="margin-left: 5px; color: grey;">4.0</span>
          </p>
        </div>
        <div class="container">

          <p style="color: #26bb48;"><i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
            <i class="fa-regular fa-star"></i><span style="margin-left: 5px; color: grey;">3.5</span>
          </p>
        </div>
        <div class="container">

          <p style="color: #26bb48;"><i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i><span style="margin-left: 5px; color: grey;">3.0</span>
          </p>
        </div>
        <div class="container">

          <p style="color: #26bb48;"><i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star-half-stroke"></i>
            <i class="fa-regular fa-star"></i>
            <i class="fa-regular fa-star"></i><span style="margin-left: 5px; color: grey;">2.5</span>
          </p>
        </div>
        .<div class="container">
          <p style="margin-top: 15px;"><strong>Special Deals</strong></p>
          <div class="row">
            <div class="col-lg-4 mt-5" >
              <img src="../img/honda/a1.jpg" class="card-img-top">
            </div>
            <div class="col-lg-8 mt-4">
              <p class="card-title">XR70 CRF70 Carburetor Fit for Honda XR70R 1997-2005 
                CRF70 with 35mm Air Filter</p>
              <p style="color: red;">RS 600</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mt-5">
              <img src="../img/honda/a2.webp" class="card-img-top">
            </div>
            <div class="col-lg-8 mt-4">
              <p class="card-title">PRO BAT 12mm Rear Disc Hydraulic Brake Assembly Caliper
                 + 190mm Disc Brake Rotor</p>
              <p style="color: red;">RS 1200</p>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mt-5">
              <img src="../img/honda/a3.webp" class="card-img-top">
            </div>
            <div class="col-lg-8 mt-4">
              <p class="card-title">A7RTC CR7HSA Motorcycle Spark Plug A7RC A7TC CR7HSA
                 Motorcycle ATV Quad Scooter Dirt Racing Bike</p>
              <p style="color: red;">RS 1050</p>
            </div>
          </div>
        </div>
       
        <div class="container">
          <div class="row">
            
            
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="../img/honda/b1.jpg"  class="card-img-top p-5">
              <div class="card-body">
                <p class="card-title">Right 7/8" 22mm Clutch Brake Lever Perch for Honda CR XL XR CRF 
                  Dirt Bike</p>

                
                <p style="color: red; margin-right: 70%;">RS 800.00</p>
                <h4 style="margin-left: 80%; margin-top: 20px;"><i class="fa-solid fa-cart-shopping"></i></h4>

                <div style="color: grey;font-size: x-small; margin-right: 60%;">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="../img/honda/b3.jpg" class="card-img-top p-5">
              <div class="card-body">
                <p class="card-title">1PZ KW1-D01 Ignition Coil Spark Plug Replacement 
                  for Honda XR50 XR70 XR80 </p>
                <p style="color: red; margin-right: 70%;">RS 1500.00</p>
                  <h4 style="margin-left: 80%; margin-top: 20px;"><i class="fa-solid fa-cart-shopping"></i></h4>
                
                <div style="color: grey;font-size: x-small; margin-right: 60%;">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="../img/honda/b2.jpg" height="2%" class="card-img-top p-5">
              <div class="card-body">
                <p class="card-title">7/8 22mm Twist Throttle Accelerator Handle Grips,Kill Switch Set for 
                  33cc 43cc </p>
                <p style="color: red; margin-right: 70%; ">RS 500.00</p>
                <h4 style="margin-left: 80%; margin-top: 20px;"><i class="fa-solid fa-cart-shopping"></i></h4>
                
                <div style="color: grey;font-size: x-small; margin-right: 60%;">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="../img/honda/b5.webp" class="card-img-top p-5">
              <div class="card-body pt-5">
                <p class="card-title">New CD-70 Speedo Meter Model for Honda CD70 CC ,All Over The World Best.</p>
                <p style="color: red; margin-right: 70%;">RS 800.00</p>
                  <h4 style="margin-left: 80%; margin-top: 20px;"><i class="fa-solid fa-cart-shopping"></i></h4>
                
                <div style="color: grey;font-size: x-small; margin-right: 60%;">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="../img/honda/b6.webp" class="card-img-top p-5">
              <div class="card-body">
                <p class="card-title">For Honda XR70R CRF70 AT Top End Kit Cylinder Piston Head Gaskets 12101-GB0-910</p>
                <p style="color: red; margin-right: 70%;">RS 335.00</p>
                <h4 style="margin-left: 80%; margin-top: 20px;"><i class="fa-solid fa-cart-shopping"></i></h4>
               
                <div style="color: grey;font-size: x-small; margin-right: 60%;">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="../img/honda/b7.webp" class="card-img-top p-5">
              <div class="card-body">
                <p class="card-title">HONDA JAPAN Z50 C70 CT70 CL70 ATC70 SL70 XL70 CAM CHAIN REBUILD KIT </p>
                <p style="color: red; margin-right: 70%;">RS 465.90</p>
                <h4 style="margin-left: 80%; margin-top: 20px;"><i class="fa-solid fa-cart-shopping"></i></h4>
               
                <div style="color: grey;font-size: x-small; margin-right: 60%;">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="../img/honda/b8.webp" class="card-img-top ">
              <div class="card-body pt-5" style="margin-top: 18px;">
                <p class="card-title">*1EA OEM HONDA CT70 ALL OEM HONDA PARTS TOOL KIT 99008-01600 89210-GBJ-010 362Y</p>
                <p style="color: red; margin-right: 70%;">Rs 1000.00</p>
                <h4 style="margin-left: 80%; margin-top: 20px;"><i class="fa-solid fa-cart-shopping"></i></h4>
                
                <div style="color: grey;font-size: x-small; margin-right: 60%;">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="../img/honda/b9.jpg" class="card-img-top p-5">
              <div class="card-body">
                <p class="card-title">Pack of 2 Motorcycle Turn Signal Lights -
                   Front Rear Blinker Indicator Light Amber</p>
                <p style="color: red; margin-right: 70%;">RS 2100.00</p>
                <h4 style="margin-left: 80%; margin-top: 20px;"><i class="fa-solid fa-cart-shopping"></i></h4>
                <div style="color: grey;font-size: x-small; margin-right: 60%;">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="../img/honda/b10.webp" class="card-img-top p-5">
              <div class="card-body">
                <p class="card-title">CT70 Carburetor for Honda CT70H CT 70  with Throttle Cable & Air Filter</p>
                <p style="color: red; margin-right: 70%;">RS 900.00</p>
                <h4 style="margin-left: 80%; margin-top: 20px;"><i class="fa-solid fa-cart-shopping"></i></h4>
                <div style="color: grey;font-size: x-small; margin-right: 60%;">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    {{-- <!-- /Review section-->

    <div class="container-fluid py-md-5" style="background-color: white;">
      <div class="subscription-info text-center mx-auto">
        <i class="far fa-envelope " style="height: 50px;color: red; padding-top: 10%;"></i>
        <h2 class="title-w3l mb-2 fs-1 fw-bold">Get On The List</h2>
        <p class="fs-5">Shop Exclusive Promos & SAVE 20% on Your First Order</p>
        <input class=" form-control-lg " type="email" name="" placeholder="Your email here" required="">
        <button class="btn btn-style btn-danger btn-lg  mb-2">Subscribe</button>
        </form>
        <p class="fs-5">By entering your email, you are accepting our <a class="text-danger" href="term.html">Terms of Use</a>
          and
          <br><a class="text-danger" href="policies.html">Privacy Policy</a>.
        </p>
      </div>
    </div>

    <!-- /footer-->
    <div class="footer" style="background-color: black;">
      <div class="container text-white pt-5">
        <h1 class="fs-1 fw-bold mt-5 mb-5">Special Offer All Brand New Models of bikes @2025<br>
          With Heavy Discount</h1><br>
        <div class="row">
          <div class="col-lg-3 col-md-6" style="text-decoration: none;">
            <h3>USeful Links</h3>
            <ul class="footer-list mt-3"
              style="list-style: none; text-decoration-color: whitesmoke; color: grey; padding-left: 0%; ">
              <li><a style="text-decoration: none;color: gray;" href="index.html">Home</a></li>
              <li><a style="text-decoration: none;color: gray;" href="about.html">About</a></li>
              <li><a style="text-decoration: none;color: gray;" href="service.html">service</a></li>

              <li><a style="text-decoration: none;color: gray;"
                  href="https://bloggers.feedspot.com/bike_repair_blogs/">Blogs</a></li>
              <li><a style="text-decoration: none;color: gray;" href="contact.html">Contact</a></li>
              <li><a style="text-decoration: none;color: gray;"
                  href="https://urbanbike.news/en/review-and-preview-what-urban-bike-news-can-we-expect-in-2025/">News &
                  Media</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h3>Information</h3>
            <ul class="footer-list mt-3" style="list-style: none; color: whitesmoke; padding-left: 0%; ">
              <li><a style="text-decoration: none;color: gray;" href="term.html">Terms&conditions</a></li>
              <li><a style="text-decoration: none;color: gray;" href="policies.html">Return Policy</a></li>
              <li><a style="text-decoration: none;color: gray;" href="policies.html">Privacy Policy</a></li>
              <li><a style="text-decoration: none;color: gray;" href="fqa.html">FAQ</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h3>Address</h3>
            <ul class="footer-list mt-3" style="list-style: none; color: whitesmoke; padding-left: 0%;">
              <li><a style="text-decoration: none;color: gray;" href="#">PAkistan , Punjab RYK</a></li>
              <li><a style="text-decoration: none;color: gray;" href="#">jannah Town Street 03 </a></li>
              <li><a style="text-decoration: none;color: gray;" href="#">Opposite Cenal Road</a></li>
              <li><a style="text-decoration: none;color: gray;" href="#">+(92) 300 999 8888</a></li>
              <li><a style="text-decoration: none;color: gray;" href="#">obspakistan@gmail.com</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- <h3>Payment Method</h3>
          <div class="mt-3" style="height: 20px;">
            <i class="fa-brands fa-cc-visa" style="height: 40px;"></i>
            <i class="fa-brands fa-cc-discover" style="height: 40px;"></i>
            <i class="fa-brands fa-cc-paypal" style="height: 40px;"></i>
            <i class="fa-brands fa-cc-mastercard" style="height: 40px;"></i><br>
            <i class="fa-brands fa-cc-stripe" style="height: 40px;"></i>
            <i class="fa-brands fa-cc-jcb" style="height: 40px;"></i>
          </div> -->
            <!-- <div style="max-width:100%; overflow:hidden;color:red;width:800px;height:300px;">
              <div id="g-mapdisplay" style="height:70%; width:100%;max-width:100%;"><iframe
                  style="height:100%;width:100%;border:0;" frameborder="0"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20270.999303769277!2d70.31463601225997!3d28.42265556824317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39375c713b45db39%3A0x28af23c1672a0170!2sRahim%20Yar%20Khan%2C%20Pakistan!5e0!3m2!1sen!2s!4v1744085674024!5m2!1sen!2s"></iframe>
              </div><a class="google-map-code-enabler" href="https://www.bootstrapskins.com/themes"
                id="grab-map-info"></a>
              <style>
                #g-mapdisplay img.text-marker {
                  max-width: none !important;
                  background: none !important;
                }

                img {
                  max-width: none
                }
              </style> -->
              <H4 class="ms-3">CONTACT</H4>
              <div type="button" class="btn ms-2 "><a href="http://www.facebook.com" style="text-decoration: none; color: gray;"><i
                class="fa-brands fa-facebook text-white"></i></div>@FACEBOOK/OBSpakistan</a><BR>
          <div type="button" class="btn  ms-2 mt-1"> <a href="http://www.x.com" style="text-decoration: none;color: gray;"><i
                class="fa-brands fa-twitter text-white"></i></div>@TWITTER/OBSPAKISTAN</a><BR>

          <div type="button" class="btn ms-2 mt-1"> <a href="http://www.instagram.com" style="text-decoration: none;color: gray"><i
                class="fa-brands fa-instagram text-white"></i></div> @INSTAGRAM/OBSPAKISTAN</a><BR>
          <div type="button" class="btn ms-2 mt-1"> <a href="http://www.linkedin.com" style="text-decoration: none; color: gray"><i
                class="fa-brands fa-linkedin text-white"></i></div>@LINKEDIN/OBSPAKISTAN</a><BR>
            </div>
          </div>
        </div>
        <div class="row fs-5" style="color: gray;">
          <div class="col-lg-9">
            <p>© 2025 Online Bike Store. All rights reserved | Designed by <span><a
                  style="text-decoration: none; color: whitesmoke;" href="#"> Adnan Ali & Abdullah
                  Mustafa</a></span>
            </p>
          </div>
          <!--footer last line-->
          <div class="col-lg-3">
            
          </div>
           <!--footer last line-->

        </div>
      </div>
    </div> --}}
  </div>
 @endsection
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
    integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!--end-->



  <script src="demo.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

  <!--start footer-->

</body>

</html> --}}
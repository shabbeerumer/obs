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
            <button class="nav-link dropdown-toggle ms-3 me-3"
              style=" border-radius: 50%; background-color: transparent; font-size: large; color:gray;"
              data-bs-toggle="dropdown"><i class="fa-solid fa-user"></i></button>
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
              <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="btn btn-danger" data-bs-target="#Login" data-bs-toggle="modal">Login</div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="btn btn-outline-danger" data-bs-target="#Register" data-bs-toggle="modal">Register</div>
              </div>
            </div>
            <div class="input1">
              <input type="email" placeholder="Email" name="email" class="form-control" required>
            </div>
            <div class="input2 mt-2">
              <input type="password" placeholder="Password" name="password" class="form-control" required>
            </div>
            <div class="btn btn-outline-danger mt-3 " type="submit"
              style="padding-left: 12%;padding-right: 10%; padding-top: 2%; padding-bottom: 2%;">Sign in</div>
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
              <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="btn btn-outline-danger" data-bs-target="#Login" data-bs-toggle="modal">Login</div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="btn btn-danger" data-bs-target="#Register" data-bs-toggle="modal">Register</div>
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
              <input type="password" placeholder=" Confirm Password" name="confirmpassword" class="form-control"
                required>
            </div>
            <div class="btn btn-outline-danger mt-3 " type="submit"
              style="padding-left: 12%;padding-right: 10%; padding-top: 2%; padding-bottom: 2%;">Sign Up</div>
          </form>
        </div>
      </div>
    </div>
  </div>  --}}

  <div class="contaner-fluid">
    <img src="../img/1.jpg" style="height:300px; width: 100%; display: flex; object-fit: cover;">
    <div class="container-fluid p-3 " style="background-color:rgb(213, 63, 73); text-align: center;">
      <p style="color:black;"><a href="home.html" style="text-decoration:none; color:white;">Home</a> / / Service</p>

    </div>
  </div>
  <!--end-->
  <!--start form-->

  <h1 style="text-align: center; margin-top: 6%;"><strong>CONTACT US</strong></h1>

  <div class="container">
    <a href="index.html" style="text-decoration: none; color: black ;">Home</a>
    <a href="about.html" style="text-decoration: none; color: black;">About Us </a>

  </div>



  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <h3 style="margin-bottom: 5%;">Get in touch using the form below</h3>
        <div class="contact_form">
          <form method="post">
            <div class="form-group">
              <label class="control-label">Full Name <span style="color: red;">*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address <span style="color: red;">*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number <span style="color: red;">*</span></label>
              <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" required>
            </div>
            <div class="form-group">
              <label class="control-label">Message <span style="color: red;">*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn btn-danger mt-5" type="submit" name="send" type="submit">Send Message <span
                  class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 col-md-6">
        <h3 class="ms-3">Chatbot For Hellping Our Customer</h3>
        <div class="contact_detail">
          <img src="../img/logo11.jpg" height="30%" width="100%">
        </div>
      </div>
    </div>
  </div>
  </section>
  <!-- /Contact-us-->

  <!--Back to top-->
  <div id="back-top" class="back-top" style="margin-top: -70px;"> <a href="#top"><i class="fa fa-angle-up fs-3 fw-bold" style="color: red; margin-left: 50%;"
        aria-hidden="true"></i> </a> </div>

  <div class="container-fluid" style="background-color: white; margin-top: 6%;">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
        <div style="max-width:100%;overflow:hidden;color:red;width:800px;height:500px;">
          <div id="g-mapdisplay" style="height:100%; width:100%;max-width:100%;"><iframe
              style="height:100%;width:100%;border:0;" frameborder="0"
              src="https://www.google.com/maps/embed/v1/place?q=united+state&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
          </div><a class="google-map-code-enabler" href="https://www.bootstrapskins.com/themes"
            id="grab-map-info">premium bootstrap themes</a>
          <style>
            #g-mapdisplay img.text-marker {
              max-width: none !important;
              background: none !important;
            }

            img {
              max-width: none
            }
          </style>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 mt-5" id="bg" style=" text-align: center; ">
        <div class="bg1" style="background-image: url('../img/c1.jpg');">
          <div class="container-fluid" style="font-weight: 900; color:whitesmoke;">
            <i class="fa-solid fa-map text-danger" style="margin-top: 15%;"></i>
            <p>25478 Road St.121</p>
            <p>USA New Hill</p>
            <i class="fa-solid fa-phone-volume text-danger"></i>
            <p>+(000)123 4565</p>
            <p>+(010)123 4565</p>
            <i class="fa-solid fa-envelope color text-danger"></i>
            <p>info@example1.com</p>
            <p>info@example2.com</p>
          </div>
        </div>
      </div>
    </div>
    <!--end-->

    <!-- /Review section-->

    {{-- <div class="container-fluid py-md-5" style="background-color: white;">
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
              <li><a style="text-decoration: none;color: gray;" href="">PAkistan , Punjab RYK</a></li>
              <li><a style="text-decoration: none;color: gray;" href="">jannah Town Street 03 </a></li>
              <li><a style="text-decoration: none;color: gray;" href="#">Opposite Cenal Road</a></li>
              <li><a style="text-decoration: none;color: gray;" href="#">+(92) 300 999 8888</a></li>
              <li><a style="text-decoration: none;color: gray;" href="#">obspakistan@gmail.com</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
        
            <H4 class="ms-3">CONTACT</H4>
            <div type="button" class="btn ms-2 "><a href="http://www.facebook.com"
                style="text-decoration: none; color: gray;"><i class="fa-brands fa-facebook text-white"></i></div>
            @FACEBOOK/OBSpakistan</a><BR>
            <div type="button" class="btn  ms-2 mt-1"> <a href="http://www.x.com"
                style="text-decoration: none;color: gray;"><i class="fa-brands fa-twitter text-white"></i></div>
            @TWITTER/OBSPAKISTAN</a><BR>

            <div type="button" class="btn ms-2 mt-1"> <a href="http://www.instagram.com"
                style="text-decoration: none;color: gray"><i class="fa-brands fa-instagram text-white"></i></div>
            @INSTAGRAM/OBSPAKISTAN</a><BR>
            <div type="button" class="btn ms-2 mt-1"> <a href="http://www.linkedin.com"
                style="text-decoration: none; color: gray"><i class="fa-brands fa-linkedin text-white"></i></div>
            @LINKEDIN/OBSPAKISTAN</a><BR>
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
    </div> --}}
  </div>
</div>
  @endsection

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
  integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




<script src="demo.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>



</body>

</html> --}}
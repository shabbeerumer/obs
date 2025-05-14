<!-- <!DOCTYPE html>
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

<body class="body"> -->
  @extends('frontend.layout.main')
  @section('content')
      
  <div class="" style="background-color:white;">
    <!-- <div class="container-fluid" style="background-color: white;">
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
                <li><a class="dropdown-item" active="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Login">SIGN-IN</a></li>
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
    </div> -->
    <!--start ctrouser-->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner" style="height:500px; object-fit: cover; ">
        <div class="carousel-item active" data-bs-interval="2000">
          <img src="../img/a6.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block mb-5" style="padding-bottom: 15%;">
            <h1 style="font-weight: 900; margin: 30px;"><strong>Choise The Best Bike </strong></h1>
            <p class="mt-3">We have more than a thousand bikes for you to choose.</p>
            <button class="btn btn-outline btn-danger mt-5"><a href="bikelisting.html"
                style="text-decoration: none; color: aliceblue;">Find More</a></button>
          </div>

        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="../img/a7.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block mb-5" style="padding-bottom: 12%;">
            <h1 style="font-weight: 900; margin: 30px;"><strong>Choise The Best Bike </strong></h1>
            <p class="mt-3">We have more than a thousand bikes for you to choose.</p>
            <button class="btn btn-outline btn-danger mt-5"><a href="bikelisting.html"
                style="text-decoration: none; color: aliceblue;">Find More</a></button>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="../img/a8.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-md-block mb-5" style="padding-bottom: 12%;">
            <h1 style="font-weight: 900; margin: 30px;"><strong>Choise The Best Bike </strong></h1>
            <p class="mt-3">We have more than a thousand bikes for you to choose.</p>
            <button class="btn btn-outline btn-danger mt-5"><a href="bikelisting.html"
                style="text-decoration: none; color: aliceblue;">Find More</a></button>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!--start cards-->

    <!--end-->
    <!--cards-->
    <div class="container" style="background-color: white;">
      <h1 style="text-align: center; font-weight: 900; margin-top: 7%;">Find the Best Bike For You</h1>
      <p style="text-align: center;">Online Bike Showroom serves as a one-stop destination for bike enthusiasts,
        empowering them to find the perfect bike that aligns with their preferences, riding aspirations, and budget
        constraints. Through a combination of cutting-edge technology and user-friendly design,
        these platforms aim to make the bike selection process enjoyable and efficient for every potential buyer. </p>

      <div class="row">
        <div class="col-lg-4 md-4 sm-4 " style="margin-bottom: 2%;">
          <div class="card" style="width: 18rem; ">
            <a href="hondadetail.html" class="card-img-top"><img src="../img/h2025.png" width="100%"
                style="padding-bottom: 2%;"></a>
            <div class="card-body">
              <h5 class="card-title" style="font-weight:900">HONDA , CD 70 PETROL<h5>2025 MODEL</h5>
              </h5>
              <p class="card-text">PRICE <span style="color: red;">PKR 1,69000</span></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 md-4 sm-4">
          <div class="card" style="width: 18rem; margin: 20px;">
            <a href="suzukidetail.html" class="card-img-top"><img src="../img/SZUKI.png" width="100%"></a>
            <div class="card-body">
              <h5 class="card-title" style="font-weight:900">SUZUKI , 125 CC PETROL<h5>2025 MODEL</h5>
              </h5>
              <p class="card-text">PRICE <span style="color: red;">PKR 4,75000</span></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 md-4 sm-4">
          <div class="card" style="width: 18rem; margin: 20px;">
            <a href="yamahadetail.html" class="card-img-top"><img src="../img/y1.png" width="100%"
                style="padding-bottom: 30%;"></a>
            <div class="card-body">
              <h5 class="card-title" style="font-weight:900">YAMAHA ,125 CC PETROL<h5>2025 MODEL</h5>
              </h5>
              <p class="card-text">PRICE <span style="color: red;">7,15000</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--card end-->
  <div class="container-fluid" style="background-color:rgb(194, 194, 197); padding: 8%;">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="card"
          style="width: 12rem; height: 12rem; border-radius: 25%; font-weight: 900; margin-left: 25%; background-color:azure;">
          <i class="fa-solid fa-calendar-days" style="font-size: xx-large; font-weight: 900;"></i>
          <h1 class="text-danger" style="font-weight: 900;">40+</h1>

          <p style="font-weight: 900; ">Year In Bussnius</p>

        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="card"
          style="width: 12rem;height: 12rem; border-radius: 25%; font-weight: bolder; margin-left: 25%;background-color:azure;">
          <i class="fa fa-motorcycle " style="font-size: xx-large; font-weight: 900;"></i>
          <h1 class="text-danger" style="font-weight: 900;">1000+</h1>

          <p style="font-weight: 900;">New Bikes For Sale</p>

        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="card"
          style="width: 12rem;height: 12rem; border-radius: 25%; font-weight: 900; margin-left: 25%; background-color:azure;">
          <i class="fa fa-motorcycle " style="font-size: xx-large; font-weight: 900;"></i>
          <h1 class="text-danger" style="font-weight: 900;">999+</h1>

          <p style="font-weight: 900;">Used Bikes For Sale</p>

        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3">
        <div class="card"
          style="width: 12rem;height: 12rem; border-radius: 25%; font-weight: 900; margin-left: 25%; background-color:azure;">
          <i class="fa fa-user-circle" style="font-size: xx-large; font-weight: 900;"></i>
          <h1 class="text-danger" style="font-weight: 900;">850+</h1>

          <p style="font-weight: 900;">Satisfied Customers</p>

        </div>
      </div>

    </div>

  </div>
  <!--rough-->
  <!--rough-->
  <div class="container">

  </div>
  <h1 style="text-align: center; font-weight: bolder; margin-top: 10%; margin-bottom: 10%; color: whitesmoke;">Our
    Satisfied Customer's Review</h1>

  <!--start map-->

  <div class="container-fluid" style="background-color: white;">
    <h1
      style="text-align: center; font-weight: bolder; margin-top: 80px; margin-bottom: 30px; padding-top: 10%;color: crimson; ">
      Wellcome To Our Store</h1>

    <p style="text-align: center;">WE ARE THE ONLINE BIKE SHOWROOM. The only 100% dedicated bike selling website. The
      first ONLINE BIKE SHOWROOM shop was our own bike shop. Ever Since it has been our aim to make online bike selling
      easier for everyone, everywhere.We focus on making online bike selling easier for you.Your business has a unique
      set of challenges. We are the only dedicated online bike selling site and will be able to offer you a solution to
      match your needs.Get in touch with us today! We provide affordable bike rates,
      we hae lost of Satiisfied customers feedback, you can have a look at our home page too!!</p>
    <div class="container pt-5">
      <img src="../img/fqa2.png" height="60%" width="100%">
    </div>
    <!--end-->











    <!-- <div class="container-fluid py-md-5" style="background-color: white;">
      <div class="subscription-info text-center mx-auto">
        <i class="far fa-envelope " style="height: 50px;color: red; padding-top: 7%;"></i>
        <h2 class="title-w3l mb-2 fs-1 fw-bold">Get On The List</h2>
        <p class="fs-5">Shop Exclusive Promos & SAVE 20% on Your First Order</p>
        <input class=" form-control-lg " type="email" name="" placeholder="Your email here" required="">
        <button class="btn btn-style btn-danger btn-lg  mb-2">Subscribe</button>
        </form>
        <p class="fs-5">By entering your email, you are accepting our <a class="text-danger" href="term.html">Terms of
            Use</a>
          and
          <br><a class="text-danger" href="policies.html">Privacy Policy</a>.
        </p>
      </div>
    </div>

    <div class="footer-fluid" style="background-color: black;">
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
                style="text-decoration: none; color: whitesmoke;" href=""> Adnan Ali & Abdullah
                Mustafa</a></span>
          </p>
        </div>
      
        <div class="col-lg-3">

        </div>
       

      </div>
    </div> -->
  </div>
  </div>
  @endsection

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
    integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
 



  <script src="demo.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

 

</body>

</html> -->
<!DOCTYPE html>
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

<body>
  <div class="" style="background-color:white;">
    <div class="container-fluid" style="background-color: white;">
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
    <!--start Modal-->
<!-- Modal1 -->
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
<!-- Modal2 -->
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
</div>    <!--stat top-->

     <div class="contaner-fluid">
        <img src="../img/a5.jpeg" style="height:300px; width: 100%; display: flex; object-fit: cover;">
        <div class="container-fluid p-3 " style="background-color:rgb(213, 63, 73); text-align: center;">
            <p style="color:black;"><a href="index.html"style="text-decoration:none; color:white;">Home</a> / / Service</p>

        </div>
     </div>
     <!--end-->


     <!--start -->

     <h1 style="text-align: center; font-weight: bolder; margin-top: 80px; margin-bottom: 30px;">Service</h1>
     <div class="container pb-5 pt-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6" style="text-align: center;">
                <i class="fa-solid fa-truck p-3" style="border-radius: 100%; background-color: crimson;padding: 40px; color: black; font-size:30px;"></i>
                <h3>Shipping</h3>
                <p>We Are Offer Shipping Out Side The Country Even All Over The World</p>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" style="text-align: center;">
                <i class="fa-solid fa-phone-volume p-3" style="border-radius: 100%; background-color:  crimson;padding: 30px; color: black; font-size:30px;"></i>
                <h3>Support</h3>
                <p>We Always Avalible For Any Query.Contact Our Offical Gmail Or Phone</p>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" style="text-align: center;">
                <i class="fa-solid fa-rotate-left p-3" style="border-radius: 100%; background-color:  crimson;padding: 30px; color: black; font-size:30px;"></i>
                <h3>Return</h3>
                <p>Return Delivery Within 8 Working Days. Trust Of The Custumer Is More Important</p>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" style="text-align: center;">
                <i class="fa-solid fa-money-bill-alt p-3" style="border-radius: 100%; background-color:  crimson;padding: 30px; color: black; font-size:30px;"></i>
                <h3>online Cash</h3>
                <p>Online Payment Method Allowed For The Custumer</p>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" style="text-align: center;">
                <i class="fa-solid fa-arrow-right-arrow-left p-3" style="border-radius: 100%; background-color:  crimson;padding: 30px; color: black; font-size:30px;"></i>
                <h3>Exchange</h3>
                <p>Exchanging Poliies Applied Accourding To The Compeny POliceies</p>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6" style="text-align: center;">
                <i class="fa-solid fa-thumbs-up p-3" style="border-radius: 100%; background-color:  crimson;padding: 30px; color: black; font-size:30px;"></i>
                <h3>Quality</h3>
                <p>Branded Bikes Avalible In Our Showroom</p>

            </div>
        </div>
     </div>

     

    <!-- /Review section-->

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
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
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

</html>

    
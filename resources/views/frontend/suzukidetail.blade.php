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
  .nav .nav-item .active {
    color: white !important;
    background-color: red !important;

  }

  .nav .nav-item .nav-link {
    color: red;
  }
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
    </div> <!--end nev-->




    <style>
      html,
      body {
        position: relative;
        height: 100%;
      }
    </style>
    </head>

    <body>

      <swiper-container class="mySwiper" slides-per-view="3" space-between="30" pagination="true"
        pagination-type="fraction" navigation="true">
        <swiper-slide><img src="../img/suzuki/y1.jpg"></swiper-slide>
        <swiper-slide><img src="../img/suzuki/sd2.png"></swiper-slide>
        <swiper-slide><img src="../img/suzuki/sd3.jpg"></swiper-slide>
        <swiper-slide><img src="../img/suzuki/sd4.png"></swiper-slide>
      </swiper-container>




      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
      <!--end swipper-->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <h1 class="text-center text-black fw-bold" style="margin-top: 90px;"><b>SUZUKI , 125 R1 <a href="suzuki.html" style="text-decoration: none;"><span style="margin-left: 40px; color: red;
            font-size: medium;">Accessories</span></a></b></h1>
            <!--card end-->
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="card"
                    style="width: 12rem; height: 12rem; border-radius: 25%; font-weight: 900; margin-left: 25%; background-color:azure;">
                    <i class="fa-solid fa-calendar-days" style="font-size: xx-large; font-weight: 900;"></i>
                    <h1 class="text-danger" style="font-weight: 900;">2025</h1>

                    <p style="font-weight: 900; ">Reg.Year</p>

                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="card"
                    style="width: 12rem;height: 12rem; border-radius: 25%; font-weight: bolder; margin-left: 25%;background-color:azure;">
                    <i class="fa-solid fa-gas-pump" style="font-size: xx-large; font-weight: 900;"></i>
                    <h1 class="text-danger" style="font-weight: 900;">Petrol</h1>

                    <p style="font-weight: 900;">Fuel Type</p>

                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="card"
                    style="width: 12rem;height: 12rem; border-radius: 25%; font-weight: 900; margin-left: 25%; background-color:azure;">
                    <i class="fa fa-motorcycle " style="font-size: xx-large; font-weight: 900;"></i>
                    <h1 class="text-danger" style="font-weight: 900;">2</h1>

                    <p style="font-weight: 900;">Seats</p>

                  </div>
                </div>


              </div>

            </div>
            <!--start-->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist"
              style="background-color: lightgray; color: black; font-weight: bolder;  margin-top: 7%;">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                  type="button" role="tab" aria-controls="pills-home" aria-selected="true"><span>Vehicals
                    Overview</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                  type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Suggestions</button>
              </li>

            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active mb-5" id="pills-home" role="tabpanel"
                aria-labelledby="pills-home-tab" tabindex="0">
                The Yamaha YZF-R1 comes with a 998cc inline 4-cylinder CP4 engine. This is a liquid-cooled 16 valves
                engine.
                This engine features a cross-plane crankshaft technology that is borrowed from the YZR-M1. The CP4 motor
                in this engine ensures a stable and linear delivery of torque.
                This improves grip on the rear wheel and the overall stability of the bike. This bike can go from 0 to
                100 km/h in just 4.1 seconds and from 0 to 200 km/h in just 9.45 seconds.
                As standard from the factory, this engine can rev up to 13,750rpm. This sports bike produces around 200
                bhp, which is extraordinary for a bike.
                The engine is paired with a 6-speed transmission with a wet multi-plate assist and slipper clutch.
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                tabindex="0">
                <!--honda.html-->
                <a href="" style="text-decoration: none;">

                  <div class="card mb-1" style="max-width: 80%; height: 300px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="../img/SZUKI.png" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8" style="background-color:lightgray">
                        <div class="card-body">
                          <p class="card-title fs-2 pb-3 pt-4"><b>SUZUKI 125cc</b></p>
                          <p class="card-text"><i class="fa-solid fa-person"></i>3 seat
                            <span style="margin-left: 40px;"><i class="fa-solid fa-calendar-days"></i> 2025 Model</span>
                            <span style="margin-left: 40px;"><i class="fa-solid fa-motorcycle"></i>Petrol</span>
                          </p>
                          <p style="margin-left: -200px;"><button class="btn btn-danger p-2 mt-2"><b>View Details
                                ></b></button></p>
                        </div>
                      </div>
                    </div>
                  </div>

                </a>
                <!---->
                <a href="" style="text-decoration: none;">

                  <div class="card mb-3" style="max-width: 80%; height: 300px;">
                    <div class="row g-0">
                      <div class="col-md-4 mt-5">
                        <img src="../img/yamaha/Yamaha.png" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8" style="background-color:lightgray">
                        <div class="card-body">
                          <p class="card-title fs-2 pb-3 pt-4"><b>YAMAHA 125cc</b></p>
                          <p class="card-text"><i class="fa-solid fa-person"></i>2 seat
                            <span style="margin-left: 40px;"><i class="fa-solid fa-calendar-days"></i> 2025 Model</span>
                            <span style="margin-left: 40px;"><i class="fa-solid fa-motorcycle"></i>Petrol</span>
                          </p>
                          <p style="margin-left: -200px;"><button class="btn btn-danger p-2 mt-2"><b>View Details
                                ></b></button></p>
                        </div>
                      </div>
                    </div>
                  </div>

                </a>
                <!---->


                <!---->
                <a href="" style="text-decoration: none;">

                  <div class="card mb-3" style="max-width: 80%; height: 300px;">
                    <div class="row g-0">
                      <div class="col-md-4 mt-4">
                        <img src="../img/honda/honda3.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8" style="background-color:lightgray">
                        <div class="card-body">
                          <p class="card-title fs-2 pb-3 pt-4"><b>HONDA 70 CC</b></p>
                          <p class="card-text"><i class="fa-solid fa-person"></i>2 seat
                            <span style="margin-left: 40px;"><i class="fa-solid fa-calendar-days"></i> 2025 Model</span>
                            <span style="margin-left: 40px;"><i class="fa-solid fa-motorcycle"></i>Petrol</span>
                          </p>
                          <p style="margin-left: -200px;"><button class="btn btn-danger p-2 mt-2"><b>View Details
                                ></b></button></p>
                        </div>
                      </div>
                    </div>
                  </div>

                </a>
                <!---->
                <!---->
              </div>

            </div>
            <!--end-->

          </div>
          <div class="col-lg-4 col-md-8">
            <h1 class="text-center text-black fw-bold" style="margin-top: 90px;"><b>PKR 6,34500</b></h1>
            <div class="container"
              style="padding: 10px; margin-top: 30px; background-color: hsl(0, 0%, 4%); color: azure; border-radius: 10px;">
              <span class="fw-bold" style="padding-left: 20px; padding-right: 40px;"><b>share</b></span>
              <div type="button" class="btn p3 "><a href="http://www.facebook.com"><i
                    class="fa-brands fa-facebook text-white"></i></div></a>
              <div type="button" class="btn  ms-2 p3"> <a href="http://www.x.com"><i
                    class="fa-brands fa-twitter text-white"></i></div></a>

              <div type="button" class="btn ms-2 p3"> <a href="http://www.instagram.com"><i
                    class="fa-brands fa-instagram text-white"></i></div></a>
              <div type="button" class="btn ms-2 p3"> <a href="http://www.linkedin.com"><i
                    class="fa-brands fa-linkedin text-white"></i></div></a>
            </div>
            <h4 style="font-weight: bolder; margin-top:30px;"><i class="fa-solid fa-envelope "></i><b>Book
                Now</b></h4>
            <h6 class="mt-5">Booking Date</h6>

            <form action="">
              <input class="form-control form-control-lg" type="date" id="booktime" name="booktime">


              <h6 class="mt-3"> Required Date</h6>


              <input class="form-control form-control-lg" type="date" id="requiredtime" name="requiredtime">
              <select class="form-select mt-4" id="validationCustom04" placeholder="Peyment Method" required>

                <option selected disabled value="">Select Payment Method</option>
                <option>Cash</option>
                <option>Bank</option>
              </select>
              <input type="email" id="email" name="email" placeholder="Email" class="form-control form-control-lg">
              <button type="submit" class="btn btn-primary mt-4 form-control form-control-lg" style="background-color: black;
                            color: white; padding: 10px; margin-top:2px;"> Subscribe ></button>
              <p>*We send great deals and latest auto news to our subscribed users very week.

              </p>

            </form>
          </div>

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

</html>s
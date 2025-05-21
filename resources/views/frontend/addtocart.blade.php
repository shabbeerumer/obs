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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>



</style>

<body class="">
   <div class="container-fluid bg-white">
    <p class="pt-3 mb-0">
        <i class="fa-solid fa-phone-volume text-danger ml-3"></i>
        <span class="ms-2">+(92) 123 4565 32</span>
        <i class="fa-solid fa-envelope text-danger ms-3"></i>
        <span class="ms-2">obspakistangmail.com</span>
    </p>
</div>

<nav class="navbar navbar-expand-lg sticky-top pt-3" style="background-color: black;">
    <div class="container-fluid px-5">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('img/logo11.jpg') }}" class="rounded-circle" height="60" width="80" alt="OBS Logo">
            <span class="text-white ms-2" style="font-size: 26px;"><strong>OBS</strong></span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('frontend.index') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('frontend.about') }}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('frontend.bikelisting') }}">BIKE LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('frontend.contact') }}">CONTACT US</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">ACCESSORIES</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('frontend.honda') }}">HONDA ACCESSORIES</a></li>
                        <li><a class="dropdown-item" href="{{ route('frontend.yamaha') }}">YAMAHA ACCESSORIES</a></li>
                        <li><a class="dropdown-item" href="{{ route('frontend.suzuki') }}">SUZUKI ACCESSORIES</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <button class="btn nav-link dropdown-toggle text-white" style="background-color: transparent;" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-user"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Login">SIGN-IN</a></li>
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#Register">SIGN-UP</a></li>
                        <li><a class="dropdown-item" href="{{ route('backend.authentication.logout') }}">LOG-OUT</a></li>
                    </ul>
                </li>

                <li class="nav-item d-flex align-items-center">
                    <form class="d-flex ms-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-danger text-white" type="submit">Search</button>
                    </form>
                    <i class="fa-solid fa-cart-plus fs-4 text-danger ms-4"></i>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Flash Messages -->
@if (session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="alert alert-danger text-center">{{ session('error') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Login Modal -->
<div class="modal fade" id="Login" tabindex="-1" aria-labelledby="LoginLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend.authentication.login') }}" method="POST">
                    @csrf
                    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
                    <button type="submit" class="btn btn-outline-danger w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="Register" tabindex="-1" aria-labelledby="RegisterLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('backend.authentication.register') }}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
                    <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
                    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
                    <input type="password" name="password_confirmation" class="form-control mb-3" placeholder="Confirm Password" required>
                    <button type="submit" class="btn btn-outline-danger w-100">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Auto-open login modal if needed -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if (session('showLoginModal'))
            new bootstrap.Modal(document.getElementById('Login')).show();
        @endif
    });
</script>

<div class="container mt-5">
  <h2 class="mb-4">🛒 Your Shopping Cart</h2>

  @if(session('sessioncrud') && count(session('sessioncrud')) > 0)
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Image</th>
          <th>Title</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php $total = 0; @endphp
        @foreach(session('sessioncrud') as $id => $item)
          @php $subtotal = $item['price'] * $item['quantity']; @endphp
          @php $total += $subtotal; @endphp
          <tr>
            <td><img src="{{ asset('upload/' . $item['image']) }}" width="60"></td>
            <td>{{ $item['title'] }}</td>
            <td>RS {{ $item['price'] }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>RS {{ $subtotal }}</td>
            <td>
              <form action="{{ route('backend.addtocart.remove', $id) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
              </form>
            </td>
          </tr>
        @endforeach
        <tr>
          <td colspan="4" class="text-right"><strong>Total</strong></td>
          <td colspan="2"><strong>RS {{ $total }}</strong></td>
        </tr>
      </tbody>
    </table>

    <!-- 🧾 User Information Form -->
    <div class="mt-4">
      <h4 class="mb-3">Customer Information</h4>
      <form action="{{ route('backend.checkout') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
          <label for="name">Full Name</label>
          <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group mb-3">
          <label for="email">Email Address</label>
          <input type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group mb-3">
          <label for="phone">Phone Number</label>
          <input type="text" class="form-control" name="phone" required>
        </div>

        <div class="form-group mb-3">
          <label for="address">Delivery Address</label>
          <textarea class="form-control" name="address" rows="3" required></textarea>
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-success">Place Order</button>
        </div>
      </form>
    </div>

  @else
    <p>Your cart is empty.</p>
  @endif
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js"
        integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>




    <script src="demo.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>


<div class="container-fluid py-md-5" style="background-color: white;">
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
    </div>
</body>

</html>
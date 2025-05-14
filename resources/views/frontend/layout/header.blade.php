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
                     <a class="nav-link active" aria-current="page" href="{{ route('frontend.index') }}"
                         style="margin: left 20px; color:white">HOME</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" style="color:white" href="{{ route('frontend.about') }}">ABOUT US</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" style="color:white" href="{{ route('frontend.bikelisting') }}">BIKE LIST</a>
                 </li>

                 <li class="nav-item">
                     <a class="nav-link" style="color:white" href="{{ route('frontend.contact') }}">CONTACT US</a>
                 </li>

                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" style="color:white" role="button" data-bs-toggle="dropdown"
                         aria-expanded="false">
                         ASSESSRIES
                     </a>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="{{ route('frontend.honda') }}">HONDA ASSESSRIES</a></li>
                         <li><a class="dropdown-item" href="{{ route('frontend.yamaha') }}">YAMAHA ASSESSRIES</a></li>
                         <li><a class="dropdown-item" href="{{ route('frontend.suzuki') }}">SUZUKI ASSESSRIES</a></li>
                     </ul>
                 </li>
                 <li class="nav-item dropdown">
                     <button class="nav-link dropdown-toggle ms-3 me-3"
                         style=" border-radius: 50%; background-color: transparent; font-size: large; color:gray;"
                         data-bs-toggle="dropdown"><i class="fa-solid fa-user"></i></button>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" active="btn btn-danger" data-bs-toggle="modal"
                                 data-bs-target="#Login">SIGN-IN</a></li>
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

 <!-- Flash Messages -->
@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
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
<div class="modal fade" id="Login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header">
             <h1 class="modal-title fs-5" id="exampleModalLabel">Login/Register</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <form action="{{ route('backend.authentication.login') }}" method="POST">
                 @csrf
                 <div class="row mb-4">
                     <div class="col-lg-3 col-md-3 col-sm-4">
                         <div class="btn btn-danger" data-bs-target="#Login" data-bs-toggle="modal">Login</div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-sm-4">
                         <div class="btn btn-outline-danger" data-bs-target="#Register" data-bs-toggle="modal">Register</div>
                     </div>
                 </div>
                 <div class="input1">
                     <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" class="form-control" required>
                 </div>
                 <div class="input2 mt-2">
                     <input type="password" placeholder="Password" name="password" class="form-control" required>
                 </div>
                 <button type="submit" class="btn btn-outline-danger mt-3" style="padding: 2% 10%;">Login</button>
             </form>
         </div>
     </div>
 </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="Register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header">
             <h1 class="modal-title fs-5" id="exampleModalLabel">Login/Register</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <form action="{{ route('backend.authentication.register') }}" method="POST">
                 @csrf
                 <div class="row mb-4">
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
                 <div class="input4 mt-2">
                     <input type="password" placeholder="Confirm Password" name="password_confirmation" class="form-control" required>
                 </div>
                 <button type="submit" class="btn btn-outline-danger mt-3" style="padding: 2% 10%;">Sign Up</button>
             </form>
         </div>
     </div>
 </div>
</div>

<!-- Auto Open Login Modal Based on Session -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if (session('showLoginModal'))
            var loginModal = new bootstrap.Modal(document.getElementById('Login'));
            loginModal.show();
        @endif
    });
</script>
 --}}
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

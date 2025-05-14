@extends('frontend.layout.main')
@section('content')
    
<div class="" style="background-color:white;">

  <div class="contaner-fluid pb-5">
    <img src="../img/l1.jpg" style="height:300px; width: 100%; display: flex; object-fit: cover;">
    <div class="container-fluid p-3 " style="background-color:rgb(213, 63, 73); text-align: center;">
      <p style="color:black;"><a href="index.html" style="text-decoration:none; color:white;">Home</a> / / Service</p>

    </div>
  </div>
  <!--end-->


  <!--start listing-->
  <!-- body > section.listing-page -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 col-12">
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h3 style="font-weight: bolder;"><i class="fa fa-filter" aria-hidden="true"></i> Find Your Bike </h3>
          </div>
          <div class="sidebar">
            <form action="search-bikeresult.php" method="post">
              <div class="form-group select">
                <select class="form-control mt-5" name="brand">
                  <option>Select Brand</option>
                  <option value="Petrol">Suzuki</option>
                  <option value="Diesel">Yamaha</option>
                  <option value="CNG">Honda</option>

                 
                </select>
              </div>
              <div class="form-group select">
                <select class="form-control" name="fueltype">
                  <option>Select Fuel Type</option>
                  <option value="Petrol">Petrol</option>
                  <option value="Diesel">Diesel</option>
                  <option value="CNG">CNG</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-danger" style="width: 100%; padding: 10px; margin-top: 8%;"><i
                    class="fa fa-search" aria-hidden="true"></i> Search
                  Bike</button>
              </div>
            </form>
          </div>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-motorcycle pt-4" aria-hidden="true"></i> Recently Listed Bikes</h5>
          </div>
          <div class="recent_addedbike">
            <!---->
            <a href="" style="text-decoration: none;">

              <div class="card" style="width: 100%; height: 100px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <a href="hondadetail.html"> <img src="../img/honda/honda2.jpg" href="hondadetail.html"
                        class="img-fluid rounded-start" alt="..."></a>
                  </div>
                  <div class="col-md-8" style="background-color:lightgray">
                    <div class="">
                      <p style="margin-bottom: -8px;"><b>HONDA 70 CC</b></p>
                      <p>2025 Model</p>
                    </div>
                  </div>
                </div>
              </div>

            </a>
            <!---->
            <!---->
            <a href="" style="text-decoration: none;">

              <div class="card " style="width: 100%; height: 100px;">
                <div class="row g-0">
                  <div class="col-md-4 ">
                    <img src="../img/yamaha/Yamaha.png" style="height: 50px;" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8" style="background-color:lightgray">
                    <div class="">
                      <p style="margin-bottom: -8px;"><b>YAMAHA 125cc</b></p>
                      <p>2025 Model</p>
                    </div>
                  </div>
                </div>
              </div>

            </a>
            <!---->
            <!---->
            <a href="" style="text-decoration: none;">

              <div class="card " style="width: 100%; height: 100px;">
                <div class="row g-0">
                  <div class="col-md-4 mb-1">
                    <img src="../img/SZUKI.png" style="height: 60px;" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8" style="background-color:lightgray">
                    <div class="">
                      <p class=" fs-6" style="margin-bottom: -8px;"><b> SUZUKI 125cc</b></p>
                      <p class="">2025 Model</p>
                    </div>
                  </div>
                </div>
              </div>

            </a>
           
          </div>
        </div>


      </div>
      <div class="col-lg-9 col-md-8 col-sm-6 mt-5 ">

        <!---->
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
                  <p style="margin-left: -200px;"><button class="btn btn-danger p-2 mt-2"><b>View Details ></b></button>
                  </p>
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
                  <p style="margin-left: -200px;"><button class="btn btn-danger p-2 mt-2"><b>View Details ></b></button>
                  </p>
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
                <a href="hondadetail.html"><img src="../img/honda/honda3.jpg" class="img-fluid rounded-start"
                    alt="..."></a>
              </div>
              <div class="col-md-8" style="background-color:lightgray">
                <div class="card-body">
                  <p class="card-title fs-2 pb-3 pt-4"><b>HONDA 70 CC</b></p>
                  <p class="card-text"><i class="fa-solid fa-person"></i>2 seat
                    <span style="margin-left: 40px;"><i class="fa-solid fa-calendar-days"></i> 2025 Model</span>
                    <span style="margin-left: 40px;"><i class="fa-solid fa-motorcycle"></i>Petrol</span>
                  </p>
                  <p style="margin-left: -200px;"><button class="btn btn-danger p-2 mt-2"><b>View Details ></b></button>
                  </p>
                </div>
              </div>
            </div>
          </div>

        </a>
        <!---->

      </div>
    </div>



  </div>
  <!--/end cards-->












 
</div>
</div>
@endsection

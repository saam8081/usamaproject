<!DOCTYPE html>
<html>
<head>
  <title> Laravel Project</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/index.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <header style="background:white;">
        <!-- Start Navbar -->
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="#" style="font-size: 25px;font-weight: 900;">YoAds</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown" >
            <ul class="navbar-nav ml-auto">
              @if (Route::has('login'))
                @Auth
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-weight: 700;">
                  Earn by
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">View Ads</a>
                  <a class="dropdown-item" href="#">Video Ads</a>
                  <a class="dropdown-item" href="#">Play Game</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('pricing')}}" style="font-weight: 700;">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}" style="font-weight: 700;">My account</a>
              </li>
                @else
                <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}" style="font-weight: 700;">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}" style="font-weight: 700;">Register</a>
              </li>
                @endauth
              @endif
              
              
            </ul>
          </div>
        </nav>
      </div>
</header>
<!-- End Navbar -->

        <!-- Start Slider -->
        <div class="slider" style="background-image: url(https://i.imgur.com/oTICU4O.png); height: 500px;width: 100%;">
          <div class="container">
            <div class="col-lg-12">
            <h2 style="padding-top: 150px; text-align: center;">Sign Up your account and get $2 Sign Up bonus in your purchase balance</h2>
          </div>
          <div class="col-lg-12" style="padding-top: 39px;">
            <center>
              <a href="{{route('register')}}" style="background:white;border: solid 2px;font-size: 40px;border-radius: 15px;border-color: black;padding: 6px;color: black;font-weight: 600;text-decoration: none; ">Signup Now</a>

            <a href="{{route('login')}}" style="background:white;border: solid 2px;font-size: 40px;border-radius: 15px;border-color: black;padding: 6px;color: black;font-weight: 600;text-decoration: none; ">Signin Now</a>
            </center>
          </div>
          </div>
        </div>
        <!-- End Slider -->

        <div class="methods">
          <h1 style="text-align: center;">START WITH US</h1>
          <div class="container">
            <div class="row">
            <div class="col-lg-3">
              <h3 style="text-align: center;">ADVERTISE</h3>
              <p>We are the team and we have five years experience in HTML coding language </p>
            </div>
            <div class="col-lg-3">
              <h3 style="text-align: center;">VIDEO ADS</h3>
              <p>We are the team and we have five years experience in Css coding language </p>
            </div>
            <div class="col-lg-3">
              <h3 style="text-align: center;">VIEW ADS</h3>
              <p>We are the team and we have five years experience in Bootstrap coding language </p>
            </div>
            <div class="col-lg-3">
              <h3 style="text-align: center;">GAME</h3>
              <p>We are the team and we have five years experience in HTML coding language </p>
          </div>
          </div>
        </div>
        
        
  @yield('content')

  <!-- Start Footer -->

  <div class="footer" style="background:linear-gradient(184deg, #a04cec, #7341de); height: 100px; width: 100%;">
    <div class="container">
          <div class="row" >
          <div class="col-lg-12 col-md-6">
          <div class="content text-center">
           <div class="footerlink" style="margin-top: 25px;">
                <a href="#" style=" margin-right: 20px; color: white;">Home</a> 
                <a href="#" style=" margin-right: 20px; color: white;">Help</a> 
                <a href="#" style=" margin-right: 20px; color: white;">Contact</a>
                <a href="#" style=" margin-right: 20px; color: white;">Terms of Service</a>
                <a href="#" style=" margin-right: 20px; color: white;">Proof of Payments</a>
                <a href="#" style=" margin-right: 20px; color: white;">News</a>
                <a href="#" style=" margin-right: 20px; color: white;">Forum</a>
           </div>   
        </div>
        </div>    
            <div class="col-lg-12 col-md-6">
              <div class="content text-center">
              <div class="footerp">
                <p>Copyright © 2021 Larave Assignment All rights reserved</p>
              </div>    
              </div> 
            </div>   
    
      </div>
  </div>
  </div>

  <!-- End footer -->
</body>
</html>
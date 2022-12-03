<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamerstorebd | Tournament</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" defer></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
  <link rel="stylesheet" href="{{asset('/css/tournament.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

  <!----------------------------CDN LINK FOR SLIDER Starts Here--------------------------->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" defer></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js" defer></script>
  <!----------------------------CDN LINK FOR SLIDER Ends Here--------------------------->
  <script type="text/javascript" src="{{asset('/js/slider.js')}}" defer></script>

</head>
<body>

<!----------------------------Header Section Starts Here--------------------------->

<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="/">
                        <img src="/image/logo.png" alt="GSBD Logo" style="width: 10rem; margin-top: -7px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="/">
                                <strong>HOME</strong>
                                <span class="sr-only">(current)</span></a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/topup">TOPUP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">SHOP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/tournament">TOURNAMENT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contractus">CONTRACT US</a>
                        </li>

                      </ul>

                      <h1>

                      </h1>


                      <form class="form-inline my-2 my-lg-0">

                       @if(Auth::check())

                       <div class="dropdown">
                        <button class="btn btn-outline-dark my-2 my-sm-0 dropbtn" disabled><strong>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</strong></button>
                        <div class="dropdown-content">
                          <a href="/user">User Panel</a>
                          <a href="{{ url('/logout') }}">LogOut</a>
                        </div>
                      </div>

                       @else
                            <a href="/login" class="btn btn-outline-dark my-2 my-sm-0" role="button"><strong>LOGIN/SIGN-UP</strong></a>
                       @endif


                      </form>
                    </div>
                  </nav>
            </div>
        </div>
    </div>

</header>
<!----------------------------Header Section ends Here--------------------------->


<!----------------------------Slider Section Starts Here--------------------------->

<section class="slider">
    <div class="container">
        <div class="row">

            <div class="col-md-1">

            </div>

            <div class="col-md-10">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="fill" style=" background-image: url({{asset("/image/1.jpg")}});">.</div>
                        </div>
                        <div class="carousel-item">
                            <div class="fill" style=" background-image: url({{asset("/image/2.jpg")}});">.</div>
                        </div>
                        <div class="carousel-item">
                            <div class="fill" style=" background-image: url({{asset("/image/3.jpg")}});">.</div>
                        </div>
                        <div class="carousel-item">
                            <div class="fill" style=" background-image: url({{asset("/image/4.jpg")}});">.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-1">

            </div>

        </div>
    </div>


</section>

<!----------------------------Slider Section Ends Here--------------------------->

<!----------------------------daily-match Section Starts Here--------------------------->

<section class="daily-match ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Daily   Match</h2> <br>
                <div class="daily-match-inner">

                    <div class="card" style="width: 14rem;">
                        <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                        <div class="card-body" style="text-align: center;">
                            <h4> <strong>FREE FIRE</strong> </h4>
                            <p class="card-text">CS Lover</p>
                            <span class="text-muted"></span>
                            <a href="/match-cs-daily" class="stretched-link"></a>
                        </div>
                      </div>

                      <div class="card" style="width: 14rem;">
                        <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                        <div class="card-body" style="text-align: center;">
                            <h4> <strong>FREE FIRE</strong> </h4>
                            <p class="card-text">Regular</p>
                            <span class="text-muted"></span></div>
                            <a href="/match-regular-daily" class="stretched-link"></a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!----------------------------daily-match Section Ends Here--------------------------->

<!----------------------------Line Section Starts Here--------------------------->
<section class="line-section">
    <div class="geeks"></div>
</section>
<!----------------------------Line Section Ends Here---------------------------->

<!----------------------------tournament-match Section Starts Here--------------------------->

<section class="tournament-match ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Tournament   Match</h2> <br>
                <div class="tournament-match-inner">

                    <div class="card" style="width: 14rem;">
                        <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                        <div class="card-body" style="text-align: center;">
                            <h4> <strong>FREE FIRE</strong></h4>
                            <p class="card-text">REGULAR</p>
                            <span class="text-muted"></span>
                            <a href="/match-regular-tournament" class="stretched-link"></a>
                        </div>
                      </div>

                      <div class="card" style="width: 14rem;">
                        <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                        <div class="card-body" style="text-align: center;">
                            <h4><strong> FREE FIRE</strong></h4>
                            <p class="card-text">CS LOVER</p>
                            <span class="text-muted"></span></div>
                            <a href="/match-cs-tournament" class="stretched-link"></a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!----------------------------tournament-match Section Ends Here--------------------------->

<!-----------------------------tlink Section Starts Here--------------------------->

<section class="tlink">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tlink-inner">
                    <div class="tlink-btn">
                        <a role="button"  class="btn btn-primary" href="/matchongoing">
                            <i class="fas fa-spinner fa-spin"></i>
                        On Going
                        </a>
                    </div>
                    <div class="tlink-btn">
                        <a role="button" class="btn btn-primary" href="/matchresults">
                            <i class="fas fa-trophy fa-beat"></i>
                            Results</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-----------------------------tlink Section Ends Here----------------------------->

<!----------------------------footer Section Starts Here--------------------------->
<!-- Footer -->
<footer class="footer-section text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4 social">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Discord -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-discord"></i
        ></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>

        <!-- Youtube -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-youtube"></i
        ></a>

        <!-- Telegram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-telegram"></i
        ></a>

      </section>
      <!-- Section: Social media -->

      <!-- Section: Form -->
      <section class="footer-mail">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center" style="margin-bottom: -20px">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                Sign up for our newsletter
              </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example2" class="form-control" />
                <label class="form-label" for="form5Example2"></label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->

      <!-- Section: Text -->
      <section class="mb-4 footer-disclaimer">
        <p>
          Disclaimer: Registered names and trademarks are the copyright and property of their respective owners.
          Use of this Web site constitutes acceptance.
        </p>
      </section>
      <!-- Section: Text -->

      <!-- Section: Links -->
      <section class="footer-links">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 lnk">
            <h5 class="text-uppercase"></h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="/termsandconditions" class="text-white underline">Terms and Condition</a>
              </li>
              <li>
                <a href="/tournament" class="text-white underline">Tournament</a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 lnk">
            <h5 class="text-uppercase"></h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="/contractus" class="text-white underline">Contract Us</a>
              </li>
              <li>
                <a href="/shop" class="text-white underline">shop</a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 lnk">
            <h5 class="text-uppercase"></h5>

            <ul class="list-unstyled mb-0" >

              <li>
                <a href="/shipmentinfo" class="text-white underline">Shipment info</a>
              </li>

              <li>
                <a href="/privacypolicy" class="text-white underline">Privacy Policy</a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0 lnk">
            <h5 class="text-uppercase"></h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="/aboutus" class="text-white underline">About Us</a>
              </li>
              <li>
                <a href="/refundandreturnpolicy" class="text-white underline">Refund and Return Policy</a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
              <li>
                <a href="#!" class="text-white"></a>
              </li>
            </ul>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="copy text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        <p>© 2021 Copyright.</p>

     <!-- <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a> -->
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

<!----------------------------footer Section Ends Here----------------------------->
</body>
</html>

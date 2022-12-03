<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamerstorebd</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

  <!----------------------------CDN LINK FOR SLIDER Starts Here--------------------------->
  <script src="//code.jquery.com/jquery-1.11.1.min.js" defer></script>
  <!----------------------------CDN LINK FOR SLIDER Ends Here--------------------------->
  <script type="text/javascript" src="{{asset('/js/slider.js')}}" defer></script>

</head>
<body>

    <!----------------------------POPUP  STARTS HERE--------------------------->
    <div  class="d-flex justify-content-center align-items-center w-100">
        <div class="toast" data-autohide="false" role="alert" aria-live="assertive" aria-atomic="true"  style="text-align: center; margin-top:50vh; position: absolute; top: 0; z-index:1;">
            <div class="toast-header">
              <strong class="mr-auto">GAMERSTOREBD</strong>
              <small class="text-muted"></small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
            </div>
            <div class="toast-body" style="padding: 10px;">

                @foreach ($popup as $popup)
                    {{$popup['text']}}
                @endforeach

            </div>
          </div>
    </div>


    <!----------------------------POPUP  STARTS HERE--------------------------->


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
                            <a class="nav-link active" href="/">
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
                            <a class="nav-link" href="/tournament">TOURNAMENT</a>
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


<!----------------------------Games Section Starts Here--------------------------->

<section class="games">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>
                    NEW GAMES
                </h3>
            </div>
        </div>

        <div class="row">


                <div class="col-md-12 game-card-inner">
                    <div class="game-card">


                    <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/c1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Free Fire (IN GAME)</p>
                          <a href="/g1" class="stretched-link"></a>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/c2.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Free Fire (ID CODE)</p>
                          <a href="/g2" class="stretched-link"></a>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/c3.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">PUBG Mobile</p>
                          <a href="/g3" class="stretched-link"></a>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/c4.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Call of Duty: Mobile</p>
                          <a href="/g4" class="stretched-link"></a>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/c5.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Free Fire (Promo)</p>
                          <a href="/g5" class="stretched-link"></a>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/c6.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">Mobile Legends</p>
                          <a href="/g6" class=" stretched-link"></a>
                        </div>
                      </div>



                    </div>
                </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="game-btn">

                    <a href="/topup" type="button" class="btn btn-outline-light" role="button">VIEW ALL GAMES</a>

                </div>
            </div>
        </div>

    </div>
</section>

<!----------------------------games Section Ends Here--------------------------->


<!----------------------------categories Section Starts Here--------------------------->

<section class="categories">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="categories-head">
                    <h3>TOP CATEGORIES</h3>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="categories-inner">
                    <div class="card">
                        <img class="card-img-top" src="/image/d1.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">T-SHIRTS</p>
                        </div>
                      </div>


                      <div class="card">
                        <img class="card-img-top" src="/image/d2.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">CHAIRS</p>
                        </div>
                      </div>

                      <div class="card">
                        <img class="card-img-top" src="/image/d3.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">HEADSETS</p>
                        </div>
                      </div>

                      <div class="card">
                        <img class="card-img-top" src="/image/d4.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">KEYCHAINS</p>
                        </div>
                      </div>

                      <div class="card">
                        <img class="card-img-top" src="/image/d5.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">MOUSE PAD</p>
                        </div>
                      </div>

                      <div class="card">
                        <img class="card-img-top" src="/image/d6.jpg" alt="Card image cap">
                        <div class="card-body">
                          <p class="card-text">GAMING PC</p>
                        </div>
                      </div>

                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="categories-btn">
                    <a href="#" type="button" class="btn btn-outline-light" role="button">VIEW ALL CATEGORY</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!----------------------------categories Section Ends Here----------------------------->


<!----------------------------product Section Starts Here--------------------------->

<section class="product">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h3>PRODUCTS</h3>

            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
              <div class="search-inner">
                <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                      aria-describedby="search-addon" />
                      &nbsp;
                      <span class="input-group-text border-0" id="search-addon">
                      <i class="fas fa-search"></i>
                    </span>
                  </div>
              </div>
            </div>

            <div class="col-md-6">

            </div>

            <div class="col-md-3">
            <div class="view-btn">
                <a href="#" type="button" class="btn btn-outline-light" role="button">VIEW ALL</a>

            </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product-inner">

                    <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p1.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>Lenovo H105 Gaming In-Ear Headset</h2>
                        <h6>৳ 1050</h6>
                        </div>
                      </div>


                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p2.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>Logitech G431 Gaming Headset</h2>
                        <h6>৳ 8600</h6>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p3.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>Fantech HG17S Visage Headset</h2>
                        <h6>৳ 1350</h6>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p4.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>Havit HV-H2239D Gaming Headphone</h2>
                        <h6>৳ 1150</h6>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p5.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>Rapoo VPRO VH510 Gaming Headset</h2>
                        <h6>৳ 2850</h6>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p6.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>FANTECH HG23 OCTANE 7.1 Gaming Headset</h2>
                        <h6>৳ 2800</h6>
                        </div>
                      </div>

                </div>
                <div class="stack-top">
                    <h1>COMING SOON!</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-inner">

                    <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p7.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>Havit HV-MP850 Gaming Mouse Pad</h2>
                        <h6>৳ 350</h6>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p8.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>FANTECH MPR800s RGB Mousepad</h2>
                        <h6>৳ 1900</h6>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p9.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>Anker Spirit 2 Bluetooth In-Ear Earbuds (A3406)</h2>
                        <h6>৳ 2400</h6>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p10.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>Havit E500BT Wireless Black Neckband Bluetooth Earphone</h2>
                        <h6>৳ 1050</h6>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p11.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>Remax RM-512 Wired Black Earphone</h2>
                        <h6>৳ 375</h6>
                        </div>
                      </div>

                      <div class="card" style="width: 11rem;">
                        <img class="card-img-top" src="/image/p12.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h2>Remax RM-502 Crazy Robot Earphone</h2>
                        <h6>৳ 350</h6>
                        </div>
                      </div>


                </div>
            </div>
        </div>


    </div>
</section>

<!----------------------------product Section Ends Here----------------------------->

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


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
$('.toast').toast('show')
</script>
</body>
</html>

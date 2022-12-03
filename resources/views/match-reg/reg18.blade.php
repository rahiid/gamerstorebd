<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamerstorebd | Match Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" defer></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
  <link rel="stylesheet" href="{{asset('/css/match-reg.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

  <script type="text/javascript" src="{{asset('/js/reg.js')}}" defer></script>

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


<!-----------------------------reg Section Starts Here--------------------------->
<section class="match-reg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="match-reg-inner">

                    <div class="reg-description">
                        <strong>GSBD Match এর খেলার নিয়মাবলি:</strong>
                        <br>
                    <ul class="text-justify reg-list">

                    <li>আবশ্যিক (MUST) "GSBD" এর অংশগ্রহন করা ম্যাচগুলাে
                        PHONE ওপেন করার পর থেকে
                        "SCREEN RECORD" করে রাখবেন। আবশ্যিক (MUST) PLANE
                        এ ওঠার পরে RECORDING বন্ধ করে দিবেন ঐ ক্ষেত্রে আপনার GAME
                        ও LAG করবে না। ভিডিও দিলে REWARD পাবেন। ম্যাচ চলাকালীন
                        সময় আপনার "GAMEPLAY" আমাদের কাছে সন্দেহজনক মনে হলে
                        আপনার কাছ থেকে VIDEO চাওয়া হবে। প্রতিদিনের ম্যাচ এভাবে
                        রেকর্ড করে রাখবেন। আমরা ২৪ ঘন্টা এর মধ্যে ভিডিও না চাইলে
                        আপনি ভিডিও "DELETE" করে দিতে পারবেন। আশা করছি সবাই
                        সহযােগিতা করবেন। এভাবে সবার "GAMEPLAY" FAIR হবে।
                    </li>

                    <li>কোনাে SERVER PROBLEM হলে recording ছাড়া কোন প্রকার
                        RE-FUND দেওয়া হবে না।
                    </li>
                    <li>কোনাে কারন বসত রুম থেকে কিক দেওয়া হলে সেই ক্ষেত্রে
                        RECORDING ছাড়া কোন RE FUND দেওয়া হবে না।</li>

                    <li>আপনার FREE FIRE আইডি ৪০ লেভেলের কম হলে খেলতে
                        পারবেন না।
                    </li>

                    <li>রুম থেকে কিক দেওয়া হলে কোন প্রকার RE-FUND দেওয়া হবে না।
                        রুম আইডি এবং পাসওয়ার্ড ম্যাচ টাইমের ৫-৭মিনিট আগে দেওয়া
                        হবে।
                    </li>

                    <li>সঠিক সময়ে রুমে জয়েন করতে না পারলে টাকা রিফান্ড করা হবে
                        না।
                    </li>

                    <li>রুম আইডি এবং পাসওয়ার্ড "UN-REGISTERED" দের সাথে শেয়ার
                        করবেন না।
                    </li>

                    <li>যদি হ্যাক এবং টিমিং করার সময় ধরা পরে তাহলে "GSBD" থেকে
                        ব্যান করে দেওয়া হবে।
                    </li>

                    <li>DUO অথবা saUAD ম্যাচ এ "UN-REGISTERED" টিম মেইটস
                        নিয়ে খেলা যাবে না।
                    </li>

                    <li>প্রতি কিল এবং "WINNINGS" এর টাকা ম্যাচ শেষ হওয়ার ৩০-৬০
                        মিনিটের মধ্যে দিয়ে দেওয়া হবে।
                    </li>

                    <li>কোনাে কারনবসত ম্যাচ এর RESULTS না পাওয়া গেলে আমারা
                        "NOTIFICATION " দিবাে সেই কেত্রে ম্যাচ এর "SCREENSHOTS" দিয়ে
                        টাকা এড করতে হবে।
                    </li>

                    <li>যদি কোনাে প্লেয়ার এর টিমিং অথবা হ্যাকিং এর প্রমাণ আমাদের
                        দিয়ে সাহায্য করতে পারেন সেই ক্ষেত্রে আপনাকে GSBD এর পক্ষ
                        থেকে রিওয়ার্ড দেওয়া হবে।
                    </li>

                    <li>
                        WITHDRAW RESUEST গুলাে দিনের সব ম্যাচ শেষে রাতে দেওয়া
                    হবে।
                    </li>


                    <li>এডমিনদের সিদ্ধান্ত ই হলাে চুরান্ত সিদ্ধান্ত।</li>

                    </ul>

                </div>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="join-match">
                <form method="POST" action="reg18">
                    @csrf
                    <div  class="form-group">


                        @if(Auth::check())

                            @if (count($reg18))
                            <h2>CARD 18</h2>
                            <div class="show_participants" style="width:100%; text-align: center;">

                                    <table class="table table-dark " style="background: #7C4DFF; padding:20px;">
                                        <thead>
                                          <tr>
                                            <th scope="col">Paricipants</th>
                                          </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($reg18 as $reg18)
                                            <tr>
                                            <td>
                                                @if (($reg18['team_type'] =='solo'))
                                                {{$reg18['name']}} <span>(Solo)</span>
                                                @elseif(($reg18['team_type'] =='squad'))
                                                {{$reg18['name']}} <span>(Squad)</span>
                                                @endif
                                            </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>

                            </div>


                            @endif




                             <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                             <input type="hidden" name="name" value="{{ Auth::user()->name }}">


                            <br>


                            <div class="teamtype">

                            <input type="radio" name="team_type" value="solo" checked onclick="display(1)">
                            <label  for="solo">
                              Solo
                            </label>

                            &nbsp;

                            <input type="radio" name="team_type" value="squad" onclick="display(2)" style="color: red;">
                            <label  for="Squad">
                              Squad
                            </label>
                          </div>

                          <br>
                          <label for="transaction">IN GAME ID: </label><br>
                          <div id="solo">
                            <input class="game_id_input"  type="text" name="game_id_p1">  <input class="game_id_input"  type="text" name="userid_p1" placeholder="GSBD User ID"> <br>
                          </div>


                        <div id="squad">
                            <input class="game_id_input"  type="text" name="game_id_p2">  <input class="game_id_input"  type="text" name="userid_p2" placeholder="GSBD User ID"> <br>
                            <input class="game_id_input"  type="text" name="game_id_p3">  <input class="game_id_input"  type="text" name="userid_p3" placeholder="GSBD User ID"> <br>
                            <input class="game_id_input"  type="text" name="game_id_p4">  <input class="game_id_input"  type="text" name="userid_p4" placeholder="GSBD User ID"> <br>
                          </div>


                    <button type="submit" class="btn btn-primary">JOIN NOW</button>
                </div>
                <p style="color: red">***IF You enter wrong Game ID, We will not be responsible for that. Please check before entering the Game ID. ***</p>
                        @else
                            <h4 style="color: #7C4DFF;"> PLEASE LOGIN TO JOIN THE MATCH!!!</h4>
                            <a href="/login" class="btn btn-outline-warning my-2 my-sm-0" role="button"><strong>LOGIN</strong></a>
                        @endif

                </form>
            </div>
        </div>
    </div>
</section>

<!-----------------------------reg Section Ends Here---------------------------->

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

                            <a role="button"  class="btn btn-primary" href="/tournament">
                            <i class="fas fa-dragon "></i>
                            Tournament
                            </a>
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

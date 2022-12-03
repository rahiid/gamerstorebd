<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamerstorebd | Top Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="{{asset('/css/g.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

  <script type="text/javascript" src="{{asset('/js/g.js')}}" defer></script>

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
                                HOME
                                <span class="sr-only">(current)</span></a>
                          </li>
                        <li class="nav-item">
                          <a class="nav-link active" href="topup"> <strong>TOPUP</strong> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">SHOP</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/tournament">TOURNAMENT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contractus">CONTRACT US</a>
                        </li>

                      </ul>

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


<!----------------------------Product Banner Section Starts Here--------------------------->

<section class="product-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="backgroundImage" class="banner-top-up">
                    <div class="card mb-3">
                         <div class="row no-gutters banner-inner">

                           <div class="col-md-2">
                             <img src="/image/c5.jpg" class="card-img" alt="banner-image">
                           </div>
                           <div class="col-md-9 card-right"    style="text-align: justify;">
                             <div class="card-body" >
                               <h5 class="card-title">Free Fire (Promo)</h5>
                               <p class="card-text">Garena Free Fire is a battle royale game, developed by 111 Dots Studio and published by Garena for Android and iOS. </p>
                               <p class="card-text"><medium class="text-muted">Region	EA <br>Platform	Mobile <br>Publisher	Garena Online ® </medium></p>
                             </div>
                           </div>
                         </div>
                       </div>
                 </div>
            </div>
        </div>
    </div>
</section>


<!----------------------------Product Banner Section Ends Here----------------------------->


<!----------------------------Top-up Section Starts Here--------------------------->

<section class="top-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <form name="game-form" action="submit2" method="POST">
                    @csrf


                    @if(Auth::check())
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <input type="hidden" name="username" value="{{ Auth::user()->name }}">
                    @else
                    <input type="hidden" name="user_id" value="0">

                    <input type="hidden" name="username" value="none">
                    @endif

                    <input type="hidden" name="category" value="G5_Free Fire Promo">

                    <div class="timeline-wrapper">

                        <ul class="StepProgress">

                            <li class="StepProgress-item is-done">
                                <div class="bold time">STEP 1</div>
                                <div class="bold"><h5>GAME ID</h5></div>

                                <div class="form-group account-type">

                                    <div class="form-group">

                                      <input name="gameid" type="text" class="form-control"  placeholder="Enter Your Game ID" required>
                                    </div>
                            </li>

                            <li class="StepProgress-item is-done">
                                <div class="bold time">Step 2</div>
                                <div class="bold"> <h5>Select Recharge</h5></div>
                                <div class="form-group recharge-type">

                                    @foreach ($games as $row)

                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <div class="btn-inner">
                                            <input value="Weekly" type="radio" class="btn-check" name="product_name" id="btnradio1" onclick="display()" required>
                                            <label class="myradio btn btn-outline-primary" for="btnradio1">Weekly <sup>BDT</sup> <sup id="p1">{{$row['g1']}}</sup> </label>
                                        </div>
                                        <div class="btn-inner">
                                            <input value="Monthly" type="radio" class="btn-check" name="product_name" id="btnradio2" onclick="display()" required>
                                            <label class="myradio btn btn-outline-primary" for="btnradio2">Monthly <sup>BDT</sup> <sup id="p2">{{$row['g2']}}</sup></label>
                                        </div>
                                        <div class="btn-inner">
                                            <input value="100 Diamond" type="radio" class="btn-check" name="product_name" id="btnradio3" onclick="display()" required>
                                            <label class="myradio btn btn-outline-primary" for="btnradio3">100 Diamond <sup>BDT</sup> <sup id="p3">{{$row['g3']}}</sup></label>
                                        </div>
                                        <div class="btn-inner">
                                            <input value="200 Diamond" type="radio" class="btn-check" name="product_name" id="btnradio4" onclick="display()" required>
                                            <label class="myradio btn btn-outline-primary" for="btnradio4">200 Diamond <sup>BDT</sup> <sup id="p4">{{$row['g4']}}</sup></label>
                                        </div>

                                        <div class="btn-inner">
                                            <input value="310 Diamond" type="radio" class="btn-check" name="product_name" id="btnradio5" onclick="display()" required>
                                            <label class="myradio btn btn-outline-primary" for="btnradio5">310 Diamond <sup>BDT</sup> <sup id="p5">{{$row['g5']}}</sup> </label>
                                        </div>

                                        <div class="btn-inner">
                                            <input value="520 Diamond" type="radio" class="btn-check" name="product_name" id="btnradio6" onclick="display()" required>
                                            <label class="myradio btn btn-outline-primary" for="btnradio6">520 Diamond <sup>BDT</sup> <sup id="p6">{{$row['g6']}}</sup></label>
                                        </div>
                                        <div class="btn-inner">
                                            <input value="620 Diamond" type="radio" class="btn-check" name="product_name" id="btnradio7" onclick="display()" required>
                                            <label class="myradio btn btn-outline-primary" for="btnradio7">620 Diamond <sup>BDT</sup> <sup id="p7">{{$row['g7']}}</sup></label>
                                        </div>
                                        <div class="btn-inner">
                                            <input value="830 Diamond" type="radio" class="btn-check" name="product_name" id="btnradio8" onclick="display()" required>
                                            <label class="myradio btn btn-outline-primary" for="btnradio8">830 Diamond <sup>BDT</sup> <sup id="p8">{{$row['g8']}}</sup></label>
                                        </div>

                                        <div class="btn-inner">
                                            <input value="1060 Diamond" type="radio" class="btn-check" name="product_name" id="btnradio9" onclick="display()" required>
                                            <label class="myradio btn btn-outline-primary" for="btnradio9">1060 Diamond <sup>BDT</sup> <sup id="p9">{{$row['g9']}}</sup></label>
                                        </div>
                                        <div class="btn-inner">
                                            <input value="2180 Diamond"  type="radio" class="btn-check" name="product_name" id="btnradio10" onclick="display()" required>
                                            <label class="myradio btn btn-outline-primary" for="btnradio10">2180 Diamond <sup>BDT</sup> <sup id="p10">{{$row['g10']}}</sup></label>
                                        </div>

                                        @endforeach
                                    </div>

                                 </div>
                         </li>

                         <li class="StepProgress-item is-done">
                            <div class="bold time">Step 3</div>
                            <div class="bold"> <h5>Payment Methods</h5> </div>


                             <div class="form-group payment-type">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio1" value="Wallet_Payment" onclick="payment(1)">
                                    <i class="fas fa-wallet fa-2x"></i>
                                    <label class="form-check-label" for="inlineRadio1"> GSBD</label>

                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2" value="Online_Payment" onclick="payment(2)">
                                    <i class="fas fa-money-check-alt fa-2x"></i>
                                    <label class="form-check-label" for="inlineRadio2"> Online Pay</label>
                                </div>
                            </div>
                        </li>
                        </ul>

                    </div>





<div class="online-payment" id="onlinepay">
                        <div class="addmoney-inner">
                            @foreach ($phone_numbers as $row)

                            <label for="bkash">
                            <input type="radio" id="bkash" name="payment_type" value="bkash"  onclick='document.getElementById("addmoney-number").innerHTML = "{{$row['bkash']}}"'>
                            <img src="/image/bkash.jpg" alt="bkashlogo">
                            </label>

                            <label for="nagad">
                            <input type="radio" id="nagad" name="payment_type" value="nagad" onclick='document.getElementById("addmoney-number").innerHTML = "{{$row['nagad']}}"'>
                            <img src="/image/nagad.jpg" alt="nagadlogo">
                            </label>

                            <label for="rocket">
                            <input type="radio" id="rocket" name="payment_type" value="rocket" onclick='document.getElementById("addmoney-number").innerHTML = "{{$row['rocket']}}"'>
                            <img src="/image/rocket.jpg" alt="rocketlogo">
                            </label>


                        </div>

                        <div class="addmoney-text">
                            <h5 id="addmoney-number" style="text-align: center;">{{$row['bkash']}}</h5>
                            @endforeach
                            <p style="text-align: center">
                                <strong>Gamerstorebd টাকা Pay করবেন কীভাবে? </strong>
                                <br>
                                (যেকোন পার্সোনাল বিকাশ একাউন্ট হতে হবে) <br>

                                <strong>STEP-1</strong>
                                <br>

                                প্রথমে উপরে দেওয়া নাম্বার কপি করুণ। <br>

                                (bKash,Nagad,Rocket) App অথাবা Ussd কোডের মধ্যেমে <br>

                                সেন্ড মানি অপশন সিলেক্ট করুণ। <br>



                                এম্যাউন্ট অর্থাৎ কত টাকা যোগ করবেন তার পরিমাণ প্রবেশ করুণ। <br>

                                রেফারেন্সে আপনার সেলফটেন ইউজার আইডি প্রবেশ করুণ। <br>

                                আপনার বিকাশ পিন নাম্বার প্রবেশ করুণ। <br>

                                <strong>STEP-2</strong><br>

                                নিচে যে দুটি বক্স দেখতে পারছেন প্রথম Box এ কত টাকা পাঠিয়েছেন সেটা লিখুন। <br>

                                দ্বিতীয় বক্সে আপনি যে নাম্বার থেকে টাকা পাঠিয়েছেন সেই নাম্বারটি লিখুন। <br>

                                তারপর Submit অপশনে ক্লিক করুণ। <br>

                                পাঁচ থেকে দশ মিনিটের মধ্যে টাকা Pay হয়ে যাবে। <br>

                                অবশ্যই টাকা Send Money করার পর এই কাজটি করবেন।<br>
                            </p>
                        </div>

                        <div class="addmoney-items" >
                            <div class="form-group" >
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref" >Ammount</label> <br>
                                <input type="number" id="ammount" name="ammount" min="1" max="100000"  style="width: 100%;">
                            </div>

                            <div class="form-group">
                                <label for="transaction">Transaction id</label> <br>
                                <input type="text" id="txid" name="transaction_id" style="width: 100%;">
                            </div>

                            <div class="form-group">
                                <label for="phone">Sender Number</label> <br>
                                <input type="tel" id="phone" name="sender_number" style="width: 100%;">
                            </div>

                        </div>

                    </div>
                    <div class="wallet-payment" id="walletpay">
                        <h4> <strong>GAMERSHOREBD</strong> Secure Payment</h4>
                        <table class="table table-bordered table-responsive-md">

                            <tbody>
                              <tr>
                                <th scope="row">User Id</th>


                                @if(Auth::check())
                                <td> <strong> #000{{{ isset(Auth::user()->name) ? Auth::user()->id : Auth::user()->email }}}</strong></td>
                                @else
                                <td><strong>Please Login to Pay with Wallet.</strong>  </td>
                                @endif

                              </tr>
                              <tr>
                                <th scope="row">Product Name</th>
                                <td style="color: #7C4DFF;"> <strong id="product_name">Please Select the Product First.</strong> </td>

                              </tr>
                              <tr>
                                <th scope="row">Total</th>
                                <td style="color: #7C4DFF;"><strong id="product_price">Please Select the Product First.</strong></td>

                              </tr>
                            </tbody>
                          </table>


                        @if(Auth::check())
                        <h6 style="color: #7C4DFF; font-weight:700;">Wallet Balance: ৳{{{ isset(Auth::user()->name) ? Auth::user()->wallet : Auth::user()->email }}}</h6>
                        @else
                        <h6 style="color: #7C4DFF; font-weight:700;">Please Login to know wallet Balance.</h6>
                        @endif


                    </div>


                    <input type="hidden" name="price" value="0" id="hidden_price">

                    <div class="buy-btn">
                        <button type="button" id="cancel-order-btn" class="btn btn-outline-danger btn-lg">Cancel Order</button>
                        <button type="submit" id="confirm-order-btn" class="btn btn-outline-primary btn-lg">Confirm Order</button>
                    </div>



                  </form>
            </div>
        </div>
    </div>
</section>




<!----------------------------Top-up Section Ends Here----------------------------->

<div class="description-section">
    <div class="description" style="text-align: center">
        <h5> <strong>–READ THE DESCRIPTION BEFORE ORDER–</strong> </h5>
        <p> *ভুল নাম্বার/পাসওয়ার্ড দিয়ে অথবা একাউন্ট এ ২ স্টেপ দিয়ে রাখলে আপনার অর্ডার ক্যান্সেল হয়ে যাবে!* <br>
            *যারা অন্যদের টপআপ/এয়ারড্রপ কিনে দিচ্ছেন তারা অর্ডার করার আগে নিজে লগ ইন করে চ্যাক করুন। নতুবা অনুগ্রহ করে অর্ডার করবেন না*  <br>
            *এয়ারড্রপ এর সময় মিনিমাম ১ ঘন্টা থাকতে হবে।*  <br>
        </p>
    </div>
</div>


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

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamerstorebd | Wallet Withdraw</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="{{asset('/css/withdraw.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>

    <style>
      .sidebar{
          height: 100vh;
      }
      .user-info{
          height: 100vh;
      }
    </style>

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
                          <a class="nav-link " href="/topup"> TOPUP </a>
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


<!----------------------------withdraw Section starts Here--------------------------->
<section class="sidebar" style="height: 840px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="sidebar-inner" >
                    <div class="profile-userpic">
                        <img src="/image/avatar.png" class="img-responsive" alt="Userpic">

                        @if(Auth::check())
                        <h5>User Name  : {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h5>
                        <h6>User Id:  00{{{ isset(Auth::user()->name) ? Auth::user()->id : Auth::user()->email }}}</h6>
                        @else
                        <h5 >User Name: </h5>
                        <h6 >User Id: </h6>
                        @endif

                    </div>

                    <div class="sidebar-bottom">

                        <div class="sidebar-items">
                            <a href="/user"> <i class="fas fa-user fa-lg"></i></a>
                            <a  href="/user" class="sidebar-links"><h5>My Profile</h5></a>
                        </div>
                        <div class="sidebar-items">
                            <a href="/wallet"><i class="fas fa-wallet fa-lg"></i></a>

                            <a href="/wallet" class="sidebar-links"><h5>My Wallet</h5></a>
                        </div>
                        <div class="sidebar-items">
                            <a href="/orders"><i class="fas fa-cart-arrow-down fa-lg"></i></a>

                            <a href="/orders" class="sidebar-links"><h5>My Order</h5></a>
                        </div>
                        <div class="sidebar-items">
                            <a href="/withdraw"><i class="fas fa-money-check-alt fa-lg"></i></i></a>

                            <a href="/withdraw" class="sidebar-links"><h5>Withdraw</h5></a>
                        </div>
                        <div class="sidebar-items">
                            <a href="#"><i class="fas fa-sign-out-alt fa-lg"></i></a>
                            <a href="{{ url('/logout') }}" class="sidebar-links"><h5>LogOut</h5></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="user-info" style="height: 840px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="withdraw user-inner">

                    <form method="POST" class="withdraw-control" name="withdraw-form" action="withdraw1">
                        @csrf

                         <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <div class="withdraw-inner form-group">
                        @foreach ($phone_numbers as $row)
                            <label for="bkash">
                            <input type="radio" id="bkash" name="payment_type" value="Bkash" checked onclick='document.getElementById("withdraw-number").innerHTML = "{{$row['bkash']}}"'>
                            <img src="/image/bkash.jpg" alt="bkashlogo">
                            </label>

                            <label for="nagad">
                            <input type="radio" id="nagad" name="payment_type" value="Nagad" onclick='document.getElementById("withdraw-number").innerHTML = "{{$row['nagad']}}"'>
                            <img src="/image/nagad.jpg" alt="nagadlogo">
                            </label>

                            <label for="rocket">
                            <input type="radio" id="rocket" name="payment_type" value="Rocket" onclick='document.getElementById("withdraw-number").innerHTML = "{{$row['rocket']}}"'>
                            <img src="/image/rocket.jpg" alt="rocketlogo">
                            </label>
                    </div>
                    <div class="withdraw-text">
                        <h5 id="withdraw-number">{{$row['bkash']}}</h5>
                        @endforeach
                        <p style="text-align: center">
                            <strong>Gamerstorebd টাকা withdraw করবেন কীভাবে? </strong>
                            <br>
                            (যেকোন পার্সোনাল বিকাশ একাউন্ট হতে হবে) <br>

                            <strong>STEP-1</strong>
                             <br>

                            (bKash,Nagad,Rocket) App অপশন সিলেক্ট করুণ। <br>

                            আপনার নাম্বার (_) প্রবেশ করুণ। <br>

                            এম্যাউন্ট অর্থাৎ কত টাকা withdraw করবেন তার পরিমাণ প্রবেশ করুণ। <br>


                            <strong>STEP-2</strong><br>


                            তারপর withdraw অপশনে ক্লিক করুণ। <br>

                            পাঁচ থেকে দশ মিনিটের মধ্যে টাকা যোগ হয়ে যাবে আপনার নাম্বার এ। <br>


                        </p>
                    </div>


                        <div class="withdraw-items" >

                            <div class="form-group" >
                                <label class="my-1 mr-2" for="inlineFormCustomSelectPref" >Ammount</label> <br>
                                <input class="withdraw-control" type="number" id="ammount" name="ammount" min="100" style="width: 60%;">
                            </div>



                            <div class="form-group">
                                <label for="phone">Receiving Number</label> <br>
                                <input class="withdraw-control" type="tel" id="phone" name="sendernumber" style="width: 60%;">
                            </div>

                            <button type="submit" class="btn btn-primary">Withdraw</button>
                        </div>
                      </form>





                      <div class="withdraw-table" style="padding-top: 40px">
                        <table class="table table-responsive-md table-bordered" style="width:90%;">
                            <thead style="background-color: #7C4DFF; color:white;">
                              <tr>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">NUMBER</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">DATE</th>

                              </tr>
                            </thead>
                            <tbody>

                                @if(Auth::check())
                                @if (count($withdraw))

                                    @foreach ($withdraw as $withdraw)
                                        <tr>


                                            <td>{{$withdraw['ammount']}}</td>
                                            <td>{{$withdraw['sendernumber']}}</td>
                                            <td>{{$withdraw['status']}}</td>
                                            <td>{{ Str::limit($withdraw['created_at'], 10) }}</td>
                                        </tr>

                                    @endforeach

                                  @endif

                                  @else
                                  <ht style="color: #7C4DFF;">No Data to Show!!!</ht>
                                  @endif




                            </tbody>
                          </table>
                    </div>

                 </div>

                </div>
            </div>



        </div>

    </div>

</section>

<!----------------------------withdraw Section ends Here---------------------------->



</body>
</html>

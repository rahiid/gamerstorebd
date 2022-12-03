<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamerstorebd | User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="{{asset('/css/user.css')}}">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

  <script type="text/javascript" src="{{asset('/js/user.js')}}" defer></script>

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


<!----------------------------user Section starts Here--------------------------->
<section class="sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <div class="sidebar-inner">
                    <div class="profile-userpic">
                        <img src="/image/avatar.png" class="img-responsive" alt="Userpic">



                        @if(Auth::check())
                        <h5>User Name  : {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</h5>
                        <h6>User Id:  00{{{ isset(Auth::user()->name) ? Auth::user()->id : Auth::user()->email }}}</h6>
                        @else
                        <h5 style="color: white; font-size: 1.5rem;">User Name: </h5>
                        <h5 style="color: white; font-size: 1.5rem;">User Id: </h5>
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
<section class="user-info">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="user-inner">
                    <p>User Information</p>



                    @if(Auth::check())

                    <h5>User Name  : {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} <button class="user_change_btn" onclick="useredit(1)" type="button">EDIT</button></h5>
                        <form action="submit4" method="POST">
                            @csrf
                            <div class="change_input" id="change_name">

                                <input id="name" type="text"   name="name" >

                                <button type="submit">Save</button> <button type="button"  onclick="canceledit(1)"  class="u_cancel">Cancel</button>
                            </div>

                        </form>
                    <h5>User Email : {{{ isset(Auth::user()->name) ? Auth::user()->email : Auth::user()->email }}} <button class="user_change_btn" onclick="useredit(2)" type="button">EDIT</button></h5>
                        <form action="submit5" method="POST">
                            @csrf
                            <div class="change_input" id="change_email">
                                <input id="email" type="email"   name="email" >

                                <button type="submit">Save</button> <button type="button"   onclick="canceledit(2)" class="u_cancel">Cancel</button>
                            </div>
                        </form>
                   <h5>User Number: 0{{{ isset(Auth::user()->name) ? Auth::user()->number : Auth::user()->email }}} <button class="user_change_btn" onclick="useredit(3)" type="button">EDIT</button></h5>
                        <form action="submit6" method="POST">
                            @csrf
                            <div class="change_input" id="change_number">
                                <input id="number" type="text"  name="number"  >

                                <button type="submit">Save</button> <button type="button"  onclick="canceledit(3)" class="u_cancel">Cancel</button>
                            </div>
                        </form>

                    @else
                       {{'User Name :'}}
                       {{'User Email :'}}
                       {{'User Number :'}}
                   @endif



                </div>
            </div>
        </div>
    </div>
</section>

<!----------------------------user Section ends Here---------------------------->


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamerstorebd</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('/image/favicon.ico')}}" type="image/x-icon">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


<!----------------------------  <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">  --------------------------->

  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">


</head>
<body>




<!----------------------------Header Section Starts Here--------------------------->

@section('header')
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
@show
<!----------------------------Header Section ends Here--------------------------->

</body>
</html>

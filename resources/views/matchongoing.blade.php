<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gamerstorebd | On Going Matchs</title>
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

<!-----------------------------ongoing Section Starts Here--------------------------->
<section class="ongoing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>On Going Matchs</h2>
                <div class="ongoing-inner">


                    @foreach ($tcard1 as $row)
                    @forelse ($tcard1 as $row)
                    <div id="tcard1"  class="card" style="width: 18rem;">
                        <script>
                             var x= "{{$row['status']}}";
                            if(x=="ongoing"){
                                document.getElementById("tcard1").style.display="block";
                            }
                            else{
                                document.getElementById("tcard1").style.display="none";
                            }
                        </script>

                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                          <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                          <h6><span>{{$row['match_id']}}</span></h6>
                          <p class="card-text">{{$row['date']}}</p>
                          <p>{{$row['time']}}</p>
                        </div>
                        <div class="card-table">
                            <table class="table borderless table-responsive">
                                <thead>
                                  <tr>

                                    <th scope="col">TOTAL PRIZE</th>
                                    <th scope="col">PER KILL</th>
                                    <th scope="col">ENTRY FEE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td> <strong>{{$row['total_price']}}</strong> </td>
                                    <td> <strong>{{$row['per_kill']}}</strong></td>
                                    <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                  </tr>
                                  <tr>

                                    <td>TYPE</td>
                                    <td>VERSION</td>
                                    <td>MAP</td>
                                  </tr>
                                  <tr>
                                    <td> <strong>{{$row['type']}}</strong> </td>
                                    <td> <strong>{{$row['version']}}</strong> </td>
                                    <td> <strong>{{$row['map']}}</strong> </td>

                                  </tr>
                                </tbody>
                              </table>
                        </div>

                        <div class="card-body mcd-link">

                                <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>
                        </div>
                        <div class="card-body" style="padding: 0px; text-align:center; color:red;">
                            <h5>TOURNAMENT</h5>
                        </div>
                        <div class="card-body">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Total Price Details
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="drop-border">
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                        </div>

                                    </div>


                                </div>
                              </div>
                          </div>
                          <div class="card-body" style="text-align: center; padding: 0px;">

                            <p style="color: #7C4DFF;">Room Code: {{$tgcode1}}</p>

                          </div>
                      </div>



                      @empty

                    @endforelse
                    @endforeach


                    @foreach ($tcard2 as $row)
                    @forelse ($tcard2 as $row)
                    <div id="tcard2"  class="card" style="width: 18rem;">
                        <script>
                             var x= "{{$row['status']}}";
                            if(x=="ongoing"){
                                document.getElementById("tcard2").style.display="block";
                            }
                            else{
                                document.getElementById("tcard2").style.display="none";
                            }
                        </script>

                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                          <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                          <h6><span>{{$row['match_id']}}</span></h6>
                          <p class="card-text">{{$row['date']}}</p>
                          <p>{{$row['time']}}</p>
                        </div>
                        <div class="card-table">
                            <table class="table borderless table-responsive">
                                <thead>
                                  <tr>

                                    <th scope="col">TOTAL PRIZE</th>
                                    <th scope="col">PER KILL</th>
                                    <th scope="col">ENTRY FEE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td> <strong>{{$row['total_price']}}</strong> </td>
                                    <td> <strong>{{$row['per_kill']}}</strong></td>
                                    <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                  </tr>
                                  <tr>

                                    <td>TYPE</td>
                                    <td>VERSION</td>
                                    <td>MAP</td>
                                  </tr>
                                  <tr>
                                    <td> <strong>{{$row['type']}}</strong> </td>
                                    <td> <strong>{{$row['version']}}</strong> </td>
                                    <td> <strong>{{$row['map']}}</strong> </td>

                                  </tr>
                                </tbody>
                              </table>
                        </div>

                        <div class="card-body mcd-link">

                                <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>
                        </div>
                        <div class="card-body" style="padding: 0px; text-align:center; color:red;">
                            <h5>TOURNAMENT</h5>
                        </div>
                        <div class="card-body">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Total Price Details
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="drop-border">
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                        </div>

                                    </div>


                                </div>
                              </div>
                          </div>
                          <div class="card-body" style="text-align: center; padding: 0px;">

                            <p style="color: #7C4DFF;">Room Code: {{$tgcode2}}</p>

                          </div>
                      </div>



                      @empty

                    @endforelse
                    @endforeach


                    @foreach ($tcard3 as $row)
                    @forelse ($tcard3 as $row)
                    <div id="tcard3"  class="card" style="width: 18rem;">
                        <script>
                             var x= "{{$row['status']}}";
                            if(x=="ongoing"){
                                document.getElementById("tcard3").style.display="block";
                            }
                            else{
                                document.getElementById("tcard3").style.display="none";
                            }
                        </script>

                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                          <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                          <h6><span>{{$row['match_id']}}</span></h6>
                          <p class="card-text">{{$row['date']}}</p>
                          <p>{{$row['time']}}</p>
                        </div>
                        <div class="card-table">
                            <table class="table borderless table-responsive">
                                <thead>
                                  <tr>

                                    <th scope="col">TOTAL PRIZE</th>
                                    <th scope="col">PER KILL</th>
                                    <th scope="col">ENTRY FEE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td> <strong>{{$row['total_price']}}</strong> </td>
                                    <td> <strong>{{$row['per_kill']}}</strong></td>
                                    <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                  </tr>
                                  <tr>

                                    <td>TYPE</td>
                                    <td>VERSION</td>
                                    <td>MAP</td>
                                  </tr>
                                  <tr>
                                    <td> <strong>{{$row['type']}}</strong> </td>
                                    <td> <strong>{{$row['version']}}</strong> </td>
                                    <td> <strong>{{$row['map']}}</strong> </td>

                                  </tr>
                                </tbody>
                              </table>
                        </div>

                        <div class="card-body mcd-link">

                                <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>
                        </div>
                        <div class="card-body" style="padding: 0px; text-align:center; color:red;">
                            <h5>TOURNAMENT</h5>
                        </div>
                        <div class="card-body">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Total Price Details
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="drop-border">
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                        </div>

                                    </div>


                                </div>
                              </div>
                          </div>
                          <div class="card-body" style="text-align: center; padding: 0px;">

                            <p style="color: #7C4DFF;">Room Code: {{$tgcode3}}</p>

                          </div>
                      </div>



                      @empty

                    @endforelse
                    @endforeach

                    @foreach ($tcard4 as $row)
                    @forelse ($tcard4 as $row)
                    <div id="tcard4"  class="card" style="width: 18rem;">
                        <script>
                             var x= "{{$row['status']}}";
                            if(x=="ongoing"){
                                document.getElementById("tcard4").style.display="block";
                            }
                            else{
                                document.getElementById("tcard4").style.display="none";
                            }
                        </script>

                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                          <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                          <h6><span>{{$row['match_id']}}</span></h6>
                          <p class="card-text">{{$row['date']}}</p>
                          <p>{{$row['time']}}</p>
                        </div>
                        <div class="card-table">
                            <table class="table borderless table-responsive">
                                <thead>
                                  <tr>

                                    <th scope="col">TOTAL PRIZE</th>
                                    <th scope="col">PER KILL</th>
                                    <th scope="col">ENTRY FEE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td> <strong>{{$row['total_price']}}</strong> </td>
                                    <td> <strong>{{$row['per_kill']}}</strong></td>
                                    <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                  </tr>
                                  <tr>

                                    <td>TYPE</td>
                                    <td>VERSION</td>
                                    <td>MAP</td>
                                  </tr>
                                  <tr>
                                    <td> <strong>{{$row['type']}}</strong> </td>
                                    <td> <strong>{{$row['version']}}</strong> </td>
                                    <td> <strong>{{$row['map']}}</strong> </td>

                                  </tr>
                                </tbody>
                              </table>
                        </div>

                        <div class="card-body mcd-link">

                                <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>
                        </div>
                        <div class="card-body" style="padding: 0px; text-align:center; color:red;">
                            <h5>TOURNAMENT</h5>
                        </div>
                        <div class="card-body">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Total Price Details
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="drop-border">
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                        </div>

                                    </div>


                                </div>
                              </div>
                          </div>
                          <div class="card-body" style="text-align: center; padding: 0px;">

                            <p style="color: #7C4DFF;">Room Code: {{$tgcode4}}</p>

                          </div>
                      </div>



                      @empty

                    @endforelse
                    @endforeach


                    @foreach ($tcard5 as $row)
                    @forelse ($tcard5 as $row)
                    <div id="tcard5"  class="card" style="width: 18rem;">
                        <script>
                             var x= "{{$row['status']}}";
                            if(x=="ongoing"){
                                document.getElementById("tcard5").style.display="block";
                            }
                            else{
                                document.getElementById("tcard5").style.display="none";
                            }
                        </script>

                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                          <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                          <h6><span>{{$row['match_id']}}</span></h6>
                          <p class="card-text">{{$row['date']}}</p>
                          <p>{{$row['time']}}</p>
                        </div>
                        <div class="card-table">
                            <table class="table borderless table-responsive">
                                <thead>
                                  <tr>

                                    <th scope="col">TOTAL PRIZE</th>
                                    <th scope="col">PER KILL</th>
                                    <th scope="col">ENTRY FEE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td> <strong>{{$row['total_price']}}</strong> </td>
                                    <td> <strong>{{$row['per_kill']}}</strong></td>
                                    <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                  </tr>
                                  <tr>

                                    <td>TYPE</td>
                                    <td>VERSION</td>
                                    <td>MAP</td>
                                  </tr>
                                  <tr>
                                    <td> <strong>{{$row['type']}}</strong> </td>
                                    <td> <strong>{{$row['version']}}</strong> </td>
                                    <td> <strong>{{$row['map']}}</strong> </td>

                                  </tr>
                                </tbody>
                              </table>
                        </div>

                        <div class="card-body mcd-link">

                                <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>
                        </div>
                        <div class="card-body" style="padding: 0px; text-align:center; color:red;">
                            <h5>TOURNAMENT</h5>
                        </div>
                        <div class="card-body">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Total Price Details
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="drop-border">
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                        </div>

                                    </div>


                                </div>
                              </div>
                          </div>
                          <div class="card-body" style="text-align: center; padding: 0px;">

                            <p style="color: #7C4DFF;">Room Code: {{$tgcode5}}</p>

                          </div>
                      </div>



                      @empty

                    @endforelse
                    @endforeach





                    @foreach ($tcard6 as $row)
                    @forelse ($tcard6 as $row)
                    <div id="tcard6"  class="card" style="width: 18rem;">
                        <script>
                             var x= "{{$row['status']}}";
                            if(x=="ongoing"){
                                document.getElementById("tcard6").style.display="block";
                            }
                            else{
                                document.getElementById("tcard6").style.display="none";
                            }
                        </script>

                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                          <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                          <h6><span>{{$row['match_id']}}</span></h6>
                          <p class="card-text">{{$row['date']}}</p>
                          <p>{{$row['time']}}</p>
                        </div>
                        <div class="card-table">
                            <table class="table borderless table-responsive">
                                <thead>
                                  <tr>

                                    <th scope="col">TOTAL PRIZE</th>
                                    <th scope="col">PER KILL</th>
                                    <th scope="col">ENTRY FEE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td> <strong>{{$row['total_price']}}</strong> </td>
                                    <td> <strong>{{$row['per_kill']}}</strong></td>
                                    <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                  </tr>
                                  <tr>

                                    <td>TYPE</td>
                                    <td>VERSION</td>
                                    <td>MAP</td>
                                  </tr>
                                  <tr>
                                    <td> <strong>{{$row['type']}}</strong> </td>
                                    <td> <strong>{{$row['version']}}</strong> </td>
                                    <td> <strong>{{$row['map']}}</strong> </td>

                                  </tr>
                                </tbody>
                              </table>
                        </div>

                        <div class="card-body mcd-link">

                                <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>
                        </div>
                        <div class="card-body" style="padding: 0px; text-align:center; color:red;">
                            <h5>TOURNAMENT</h5>
                        </div>
                        <div class="card-body">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Total Price Details
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="drop-border">
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                        </div>

                                    </div>


                                </div>
                              </div>
                          </div>
                          <div class="card-body" style="text-align: center; padding: 0px;">

                            <p style="color: #7C4DFF;">Room Code: {{$tgcode5}}</p>

                          </div>
                      </div>



                      @empty

                    @endforelse
                    @endforeach






                    @foreach ($card1 as $row)
                    @forelse ($card1 as $row)
                    <div id="card1"  class="card" style="width: 18rem; overflow:auto;">
                        <script>
                            var x= "{{$row['status']}}";
                            if(x=="ongoing"){
                                document.getElementById("card1").style.display="block";
                            }
                            else{
                                document.getElementById("card1").style.display="none";
                            }
                        </script>

                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                          <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                          <h6><span>{{$row['match_id']}}</span></h6>
                          <p class="card-text">{{$row['date']}}</p>
                          <p>{{$row['time']}}</p>
                        </div>
                        <div class="card-table">
                            <table class="table borderless table-responsive">
                                <thead>
                                  <tr>

                                    <th scope="col">TOTAL PRIZE</th>
                                    <th scope="col">PER KILL</th>
                                    <th scope="col">ENTRY FEE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td> <strong>{{$row['total_price']}}</strong> </td>
                                    <td> <strong>{{$row['per_kill']}}</strong></td>
                                    <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                  </tr>
                                  <tr>

                                    <td>TYPE</td>
                                    <td>VERSION</td>
                                    <td>MAP</td>
                                  </tr>
                                  <tr>
                                    <td> <strong>{{$row['type']}}</strong> </td>
                                    <td> <strong>{{$row['version']}}</strong> </td>
                                    <td> <strong>{{$row['map']}}</strong> </td>

                                  </tr>
                                </tbody>
                              </table>
                        </div>

                        <div class="card-body">
                          <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                          <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                        </div>
                        <div class="card-body">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Total Price Details
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="drop-border">
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                        </div>

                                    </div>



                                </div>
                              </div>
                          </div>
                          <div class="card-body" style="text-align: center; padding: 0px;">

                            <p style="color: #7C4DFF;">Room Code: {{$gcode1}}</p>

                          </div>

                      </div>



                      @empty

                     @endforelse
                      @endforeach




                    @foreach ($card2 as $row)
                    @forelse ($card2 as $row)
                    <div id="card2"  class="card" style="width: 18rem; overflow:auto;">
                        <script>
                            var x= "{{$row['status']}}";
                            if(x=="ongoing"){
                                document.getElementById("card2").style.display="block";
                            }
                            else{
                                document.getElementById("card2").style.display="none";
                            }
                        </script>

                        <div class="card-body">
                            <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                          <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                          <h6><span>{{$row['match_id']}}</span></h6>
                          <p class="card-text">{{$row['date']}}</p>
                          <p>{{$row['time']}}</p>
                        </div>
                        <div class="card-table">
                            <table class="table borderless table-responsive">
                                <thead>
                                  <tr>

                                    <th scope="col">TOTAL PRIZE</th>
                                    <th scope="col">PER KILL</th>
                                    <th scope="col">ENTRY FEE</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>

                                    <td> <strong>{{$row['total_price']}}</strong> </td>
                                    <td> <strong>{{$row['per_kill']}}</strong></td>
                                    <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                  </tr>
                                  <tr>

                                    <td>TYPE</td>
                                    <td>VERSION</td>
                                    <td>MAP</td>
                                  </tr>
                                  <tr>
                                    <td> <strong>{{$row['type']}}</strong> </td>
                                    <td> <strong>{{$row['version']}}</strong> </td>
                                    <td> <strong>{{$row['map']}}</strong> </td>

                                  </tr>
                                </tbody>
                              </table>
                        </div>

                        <div class="card-body">
                          <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                          <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                        </div>
                        <div class="card-body">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Total Price Details
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="drop-border">
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                        </div>
                                        <div class="dropdown-item">
                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                        </div>

                                    </div>


                                </div>
                              </div>
                          </div>
                          <div class="card-body" style="text-align: center; padding: 0px;">

                            <p style="color: #7C4DFF;">Room Code: {{$gcode2}}</p>

                          </div>
                      </div>



                      @empty

                     @endforelse
                      @endforeach




                      @foreach ($card3 as $row)
                      @forelse ($card3 as $row)
                      <div id="card3"  class="card" style="width: 18rem; overflow:auto;">
                          <script>
                              var x= "{{$row['status']}}";
                              if(x=="ongoing"){
                                  document.getElementById("card3").style.display="block";
                              }
                              else{
                                  document.getElementById("card3").style.display="none";
                              }
                          </script>

                          <div class="card-body">
                              <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                            <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                            <h6><span>{{$row['match_id']}}</span></h6>
                            <p class="card-text">{{$row['date']}}</p>
                            <p>{{$row['time']}}</p>
                          </div>
                          <div class="card-table">
                              <table class="table borderless table-responsive">
                                  <thead>
                                    <tr>

                                      <th scope="col">TOTAL PRIZE</th>
                                      <th scope="col">PER KILL</th>
                                      <th scope="col">ENTRY FEE</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>

                                      <td> <strong>{{$row['total_price']}}</strong> </td>
                                      <td> <strong>{{$row['per_kill']}}</strong></td>
                                      <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                    </tr>
                                    <tr>

                                      <td>TYPE</td>
                                      <td>VERSION</td>
                                      <td>MAP</td>
                                    </tr>
                                    <tr>
                                      <td> <strong>{{$row['type']}}</strong> </td>
                                      <td> <strong>{{$row['version']}}</strong> </td>
                                      <td> <strong>{{$row['map']}}</strong> </td>

                                    </tr>
                                  </tbody>
                                </table>
                          </div>

                          <div class="card-body">
                            <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                            <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                          </div>
                          <div class="card-body">
                              <div class="dropdown">
                                  <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Total Price Details
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <div class="drop-border">
                                          <div class="dropdown-item">
                                              <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                          </div>
                                          <div class="dropdown-item">
                                              <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                          </div>
                                          <div class="dropdown-item">
                                              <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                          </div>

                                      </div>


                                  </div>
                                </div>
                            </div>
                            <div class="card-body" style="text-align: center; padding: 0px;">

                                <p style="color: #7C4DFF;">Room Code: {{$gcode3}}</p>

                              </div>
                        </div>

                          @empty

                       @endforelse
                        @endforeach



                        @foreach ($card4 as $row)
                        @forelse ($card4 as $row)
                        <div id="card4"  class="card" style="width: 18rem; overflow:auto;">
                            <script>
                                var x= "{{$row['status']}}";
                                if(x=="ongoing"){
                                    document.getElementById("card4").style.display="block";
                                }
                                else{
                                    document.getElementById("card4").style.display="none";
                                }
                            </script>

                            <div class="card-body">
                                <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                              <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                              <h6><span>{{$row['match_id']}}</span></h6>
                              <p class="card-text">{{$row['date']}}</p>
                              <p>{{$row['time']}}</p>
                            </div>
                            <div class="card-table">
                                <table class="table borderless table-responsive">
                                    <thead>
                                      <tr>

                                        <th scope="col">TOTAL PRIZE</th>
                                        <th scope="col">PER KILL</th>
                                        <th scope="col">ENTRY FEE</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>

                                        <td> <strong>{{$row['total_price']}}</strong> </td>
                                        <td> <strong>{{$row['per_kill']}}</strong></td>
                                        <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                      </tr>
                                      <tr>

                                        <td>TYPE</td>
                                        <td>VERSION</td>
                                        <td>MAP</td>
                                      </tr>
                                      <tr>
                                        <td> <strong>{{$row['type']}}</strong> </td>
                                        <td> <strong>{{$row['version']}}</strong> </td>
                                        <td> <strong>{{$row['map']}}</strong> </td>

                                      </tr>
                                    </tbody>
                                  </table>
                            </div>

                            <div class="card-body">
                              <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                              <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                            </div>
                            <div class="card-body">
                                <div class="dropdown">
                                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Total Price Details
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="drop-border">
                                            <div class="dropdown-item">
                                                <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                            </div>
                                            <div class="dropdown-item">
                                                <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                            </div>
                                            <div class="dropdown-item">
                                                <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                            </div>

                                        </div>


                                    </div>
                                  </div>
                              </div>
                              <div class="card-body" style="text-align: center; padding: 0px;">

                                <p style="color: #7C4DFF;">Room Code: {{$gcode4}}</p>

                              </div>
                          </div>



                          @empty

                         @endforelse
                          @endforeach




                          @foreach ($card5 as $row)
                          @forelse ($card5 as $row)
                          <div id="card5"  class="card" style="width: 18rem; overflow:auto;">
                              <script>
                                  var x= "{{$row['status']}}";
                                  if(x=="ongoing"){
                                      document.getElementById("card5").style.display="block";
                                  }
                                  else{
                                      document.getElementById("card5").style.display="none";
                                  }
                              </script>

                              <div class="card-body">
                                  <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                                <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                <h6><span>{{$row['match_id']}}</span></h6>
                                <p class="card-text">{{$row['date']}}</p>
                                <p>{{$row['time']}}</p>
                              </div>
                              <div class="card-table">
                                  <table class="table borderless table-responsive">
                                      <thead>
                                        <tr>

                                          <th scope="col">TOTAL PRIZE</th>
                                          <th scope="col">PER KILL</th>
                                          <th scope="col">ENTRY FEE</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>

                                          <td> <strong>{{$row['total_price']}}</strong> </td>
                                          <td> <strong>{{$row['per_kill']}}</strong></td>
                                          <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                        </tr>
                                        <tr>

                                          <td>TYPE</td>
                                          <td>VERSION</td>
                                          <td>MAP</td>
                                        </tr>
                                        <tr>
                                          <td> <strong>{{$row['type']}}</strong> </td>
                                          <td> <strong>{{$row['version']}}</strong> </td>
                                          <td> <strong>{{$row['map']}}</strong> </td>

                                        </tr>
                                      </tbody>
                                    </table>
                              </div>

                              <div class="card-body">
                                <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                              </div>
                              <div class="card-body">
                                  <div class="dropdown">
                                      <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Total Price Details
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <div class="drop-border">
                                              <div class="dropdown-item">
                                                  <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                              </div>
                                              <div class="dropdown-item">
                                                  <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                              </div>
                                              <div class="dropdown-item">
                                                  <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                              </div>

                                          </div>


                                      </div>
                                    </div>
                                </div>
                                <div class="card-body" style="text-align: center; padding: 0px;">

                                    <p style="color: #7C4DFF;">Room Code: {{$gcode5}}</p>

                                  </div>
                            </div>



                            @empty

                           @endforelse
                            @endforeach




                          @foreach ($card6 as $row)
                          @forelse ($card6 as $row)
                          <div id="card6"  class="card" style="width: 18rem; overflow:auto;">
                              <script>
                                  var x= "{{$row['status']}}";
                                  if(x=="ongoing"){
                                      document.getElementById("card6").style.display="block";
                                  }
                                  else{
                                      document.getElementById("card6").style.display="none";
                                  }
                              </script>

                              <div class="card-body">
                                  <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                                <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                <h6><span>{{$row['match_id']}}</span></h6>
                                <p class="card-text">{{$row['date']}}</p>
                                <p>{{$row['time']}}</p>
                              </div>
                              <div class="card-table">
                                  <table class="table borderless table-responsive">
                                      <thead>
                                        <tr>

                                          <th scope="col">TOTAL PRIZE</th>
                                          <th scope="col">PER KILL</th>
                                          <th scope="col">ENTRY FEE</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>

                                          <td> <strong>{{$row['total_price']}}</strong> </td>
                                          <td> <strong>{{$row['per_kill']}}</strong></td>
                                          <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                        </tr>
                                        <tr>

                                          <td>TYPE</td>
                                          <td>VERSION</td>
                                          <td>MAP</td>
                                        </tr>
                                        <tr>
                                          <td> <strong>{{$row['type']}}</strong> </td>
                                          <td> <strong>{{$row['version']}}</strong> </td>
                                          <td> <strong>{{$row['map']}}</strong> </td>

                                        </tr>
                                      </tbody>
                                    </table>
                              </div>

                              <div class="card-body">
                                <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                              </div>
                              <div class="card-body">
                                  <div class="dropdown">
                                      <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Total Price Details
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <div class="drop-border">
                                              <div class="dropdown-item">
                                                  <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                              </div>
                                              <div class="dropdown-item">
                                                  <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                              </div>
                                              <div class="dropdown-item">
                                                  <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                              </div>

                                          </div>


                                      </div>
                                    </div>
                                </div>
                                <div class="card-body" style="text-align: center; padding: 0px;">

                                    <p style="color: #7C4DFF;">Room Code: {{$gcode6}}</p>

                                  </div>
                            </div>



                            @empty

                           @endforelse
                            @endforeach




                            @foreach ($card7 as $row)
                            @forelse ($card7 as $row)
                            <div id="card7"  class="card" style="width: 18rem; overflow:auto;">
                                <script>
                                    var x= "{{$row['status']}}";
                                    if(x=="ongoing"){
                                        document.getElementById("card7").style.display="block";
                                    }
                                    else{
                                        document.getElementById("card7").style.display="none";
                                    }
                                </script>

                                <div class="card-body">
                                    <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                                  <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                  <h6><span>{{$row['match_id']}}</span></h6>
                                  <p class="card-text">{{$row['date']}}</p>
                                  <p>{{$row['time']}}</p>
                                </div>
                                <div class="card-table">
                                    <table class="table borderless table-responsive">
                                        <thead>
                                          <tr>

                                            <th scope="col">TOTAL PRIZE</th>
                                            <th scope="col">PER KILL</th>
                                            <th scope="col">ENTRY FEE</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>

                                            <td> <strong>{{$row['total_price']}}</strong> </td>
                                            <td> <strong>{{$row['per_kill']}}</strong></td>
                                            <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                          </tr>
                                          <tr>

                                            <td>TYPE</td>
                                            <td>VERSION</td>
                                            <td>MAP</td>
                                          </tr>
                                          <tr>
                                            <td> <strong>{{$row['type']}}</strong> </td>
                                            <td> <strong>{{$row['version']}}</strong> </td>
                                            <td> <strong>{{$row['map']}}</strong> </td>

                                          </tr>
                                        </tbody>
                                      </table>
                                </div>

                                <div class="card-body">
                                  <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                  <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                </div>
                                <div class="card-body">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Total Price Details
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <div class="drop-border">
                                                <div class="dropdown-item">
                                                    <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                </div>
                                                <div class="dropdown-item">
                                                    <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                </div>
                                                <div class="dropdown-item">
                                                    <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                </div>

                                            </div>


                                        </div>
                                      </div>
                                  </div>
                                  <div class="card-body" style="text-align: center; padding: 0px;">

                                    <p style="color: #7C4DFF;">Room Code: {{$gcode7}}</p>

                                  </div>
                              </div>

                                @empty

                             @endforelse
                              @endforeach



                              @foreach ($card8 as $row)
                              @forelse ($card8 as $row)
                              <div id="card8"  class="card" style="width: 18rem; overflow:auto;">
                                  <script>
                                      var x= "{{$row['status']}}";
                                      if(x=="ongoing"){
                                          document.getElementById("card8").style.display="block";
                                      }
                                      else{
                                          document.getElementById("card8").style.display="none";
                                      }
                                  </script>

                                  <div class="card-body">
                                      <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                                    <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                    <h6><span>{{$row['match_id']}}</span></h6>
                                    <p class="card-text">{{$row['date']}}</p>
                                    <p>{{$row['time']}}</p>
                                  </div>
                                  <div class="card-table">
                                      <table class="table borderless table-responsive">
                                          <thead>
                                            <tr>

                                              <th scope="col">TOTAL PRIZE</th>
                                              <th scope="col">PER KILL</th>
                                              <th scope="col">ENTRY FEE</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>

                                              <td> <strong>{{$row['total_price']}}</strong> </td>
                                              <td> <strong>{{$row['per_kill']}}</strong></td>
                                              <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                            </tr>
                                            <tr>

                                              <td>TYPE</td>
                                              <td>VERSION</td>
                                              <td>MAP</td>
                                            </tr>
                                            <tr>
                                              <td> <strong>{{$row['type']}}</strong> </td>
                                              <td> <strong>{{$row['version']}}</strong> </td>
                                              <td> <strong>{{$row['map']}}</strong> </td>

                                            </tr>
                                          </tbody>
                                        </table>
                                  </div>

                                  <div class="card-body">
                                    <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                    <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                  </div>
                                  <div class="card-body">
                                      <div class="dropdown">
                                          <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Total Price Details
                                          </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <div class="drop-border">
                                                  <div class="dropdown-item">
                                                      <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                  </div>
                                                  <div class="dropdown-item">
                                                      <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                  </div>
                                                  <div class="dropdown-item">
                                                      <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                  </div>

                                              </div>


                                          </div>
                                        </div>
                                    </div>
                                    <div class="card-body" style="text-align: center; padding: 0px;">

                                        <p style="color: #7C4DFF;">Room Code: {{$gcode8}}</p>

                                      </div>
                                </div>



                                @empty

                               @endforelse
                                @endforeach



                                @foreach ($card9 as $row)
                                @forelse ($card9 as $row)
                                <div id="card9"  class="card" style="width: 18rem; overflow:auto;">
                                    <script>
                                        var x= "{{$row['status']}}";
                                        if(x=="ongoing"){
                                            document.getElementById("card9").style.display="block";
                                        }
                                        else{
                                            document.getElementById("card9").style.display="none";
                                        }
                                    </script>

                                    <div class="card-body">
                                        <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                                      <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                      <h6><span>{{$row['match_id']}}</span></h6>
                                      <p class="card-text">{{$row['date']}}</p>
                                      <p>{{$row['time']}}</p>
                                    </div>
                                    <div class="card-table">
                                        <table class="table borderless table-responsive">
                                            <thead>
                                              <tr>

                                                <th scope="col">TOTAL PRIZE</th>
                                                <th scope="col">PER KILL</th>
                                                <th scope="col">ENTRY FEE</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>

                                                <td> <strong>{{$row['total_price']}}</strong> </td>
                                                <td> <strong>{{$row['per_kill']}}</strong></td>
                                                <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                              </tr>
                                              <tr>

                                                <td>TYPE</td>
                                                <td>VERSION</td>
                                                <td>MAP</td>
                                              </tr>
                                              <tr>
                                                <td> <strong>{{$row['type']}}</strong> </td>
                                                <td> <strong>{{$row['version']}}</strong> </td>
                                                <td> <strong>{{$row['map']}}</strong> </td>

                                              </tr>
                                            </tbody>
                                          </table>
                                    </div>

                                    <div class="card-body">
                                      <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                      <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                    </div>
                                    <div class="card-body">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Total Price Details
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <div class="drop-border">
                                                    <div class="dropdown-item">
                                                        <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                    </div>

                                                </div>


                                            </div>
                                          </div>
                                      </div>
                                      <div class="card-body" style="text-align: center; padding: 0px;">

                                        <p style="color: #7C4DFF;">Room Code: {{$gcode9}}</p>

                                      </div>
                                  </div>



                                  @empty

                                 @endforelse
                                  @endforeach




                                @foreach ($card10 as $row)
                                @forelse ($card10 as $row)
                                <div id="card10"  class="card" style="width: 18rem; overflow:auto;">
                                    <script>
                                        var x= "{{$row['status']}}";
                                        if(x=="ongoing"){
                                            document.getElementById("card10").style.display="block";
                                        }
                                        else{
                                            document.getElementById("card10").style.display="none";
                                        }
                                    </script>

                                    <div class="card-body">
                                        <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                                      <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                      <h6><span>{{$row['match_id']}}</span></h6>
                                      <p class="card-text">{{$row['date']}}</p>
                                      <p>{{$row['time']}}</p>
                                    </div>
                                    <div class="card-table">
                                        <table class="table borderless table-responsive">
                                            <thead>
                                              <tr>

                                                <th scope="col">TOTAL PRIZE</th>
                                                <th scope="col">PER KILL</th>
                                                <th scope="col">ENTRY FEE</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>

                                                <td> <strong>{{$row['total_price']}}</strong> </td>
                                                <td> <strong>{{$row['per_kill']}}</strong></td>
                                                <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                              </tr>
                                              <tr>

                                                <td>TYPE</td>
                                                <td>VERSION</td>
                                                <td>MAP</td>
                                              </tr>
                                              <tr>
                                                <td> <strong>{{$row['type']}}</strong> </td>
                                                <td> <strong>{{$row['version']}}</strong> </td>
                                                <td> <strong>{{$row['map']}}</strong> </td>

                                              </tr>
                                            </tbody>
                                          </table>
                                    </div>

                                    <div class="card-body">
                                      <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                      <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                    </div>
                                    <div class="card-body">
                                        <div class="dropdown">
                                            <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              Total Price Details
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <div class="drop-border">
                                                    <div class="dropdown-item">
                                                        <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                    </div>

                                                </div>


                                            </div>
                                          </div>
                                      </div>
                                      <div class="card-body" style="text-align: center; padding: 0px;">

                                        <p style="color: #7C4DFF;">Room Code: {{$gcode10}}</p>

                                      </div>
                                  </div>



                                  @empty

                                 @endforelse
                                  @endforeach




                                  @foreach ($card11 as $row)
                                  @forelse ($card11 as $row)
                                  <div id="card11"  class="card" style="width: 18rem; overflow:auto;">
                                      <script>
                                          var x= "{{$row['status']}}";
                                          if(x=="ongoing"){
                                              document.getElementById("card11").style.display="block";
                                          }
                                          else{
                                              document.getElementById("card11").style.display="none";
                                          }
                                      </script>

                                      <div class="card-body">
                                          <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                                        <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                        <h6><span>{{$row['match_id']}}</span></h6>
                                        <p class="card-text">{{$row['date']}}</p>
                                        <p>{{$row['time']}}</p>
                                      </div>
                                      <div class="card-table">
                                          <table class="table borderless table-responsive">
                                              <thead>
                                                <tr>

                                                  <th scope="col">TOTAL PRIZE</th>
                                                  <th scope="col">PER KILL</th>
                                                  <th scope="col">ENTRY FEE</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>

                                                  <td> <strong>{{$row['total_price']}}</strong> </td>
                                                  <td> <strong>{{$row['per_kill']}}</strong></td>
                                                  <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                                </tr>
                                                <tr>

                                                  <td>TYPE</td>
                                                  <td>VERSION</td>
                                                  <td>MAP</td>
                                                </tr>
                                                <tr>
                                                  <td> <strong>{{$row['type']}}</strong> </td>
                                                  <td> <strong>{{$row['version']}}</strong> </td>
                                                  <td> <strong>{{$row['map']}}</strong> </td>

                                                </tr>
                                              </tbody>
                                            </table>
                                      </div>

                                      <div class="card-body">
                                        <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                        <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                      </div>
                                      <div class="card-body">
                                          <div class="dropdown">
                                              <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Total Price Details
                                              </button>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <div class="drop-border">
                                                      <div class="dropdown-item">
                                                          <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                      </div>
                                                      <div class="dropdown-item">
                                                          <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                      </div>
                                                      <div class="dropdown-item">
                                                          <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                      </div>

                                                  </div>


                                              </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="text-align: center; padding: 0px;">

                                            <p style="color: #7C4DFF;">Room Code: {{$gcode11}}</p>

                                          </div>
                                    </div>

                                      @empty

                                   @endforelse
                                    @endforeach



                                    @foreach ($card12 as $row)
                                    @forelse ($card12 as $row)
                                    <div id="card12"  class="card" style="width: 18rem; overflow:auto;">
                                        <script>
                                            var x= "{{$row['status']}}";
                                            if(x=="ongoing"){
                                                document.getElementById("card12").style.display="block";
                                            }
                                            else{
                                                document.getElementById("card12").style.display="none";
                                            }
                                        </script>

                                        <div class="card-body">
                                            <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                                          <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                          <h6><span>{{$row['match_id']}}</span></h6>
                                          <p class="card-text">{{$row['date']}}</p>
                                          <p>{{$row['time']}}</p>
                                        </div>
                                        <div class="card-table">
                                            <table class="table borderless table-responsive">
                                                <thead>
                                                  <tr>

                                                    <th scope="col">TOTAL PRIZE</th>
                                                    <th scope="col">PER KILL</th>
                                                    <th scope="col">ENTRY FEE</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>

                                                    <td> <strong>{{$row['total_price']}}</strong> </td>
                                                    <td> <strong>{{$row['per_kill']}}</strong></td>
                                                    <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                                  </tr>
                                                  <tr>

                                                    <td>TYPE</td>
                                                    <td>VERSION</td>
                                                    <td>MAP</td>
                                                  </tr>
                                                  <tr>
                                                    <td> <strong>{{$row['type']}}</strong> </td>
                                                    <td> <strong>{{$row['version']}}</strong> </td>
                                                    <td> <strong>{{$row['map']}}</strong> </td>

                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div>

                                        <div class="card-body">
                                          <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                          <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                        </div>
                                        <div class="card-body">
                                            <div class="dropdown">
                                                <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                  Total Price Details
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <div class="drop-border">
                                                        <div class="dropdown-item">
                                                            <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                        </div>

                                                    </div>


                                                </div>
                                              </div>
                                          </div>
                                          <div class="card-body" style="text-align: center; padding: 0px;">

                                            <p style="color: #7C4DFF;">Room Code: {{$gcode12}}</p>

                                          </div>
                                      </div>



                                      @empty

                                     @endforelse
                                      @endforeach



                                      @foreach ($card13 as $row)
                                      @forelse ($card13 as $row)
                                      <div id="card13"  class="card" style="width: 18rem; overflow:auto;">
                                          <script>
                                              var x= "{{$row['status']}}";
                                              if(x=="ongoing"){
                                                  document.getElementById("card13").style.display="block";
                                              }
                                              else{
                                                  document.getElementById("card13").style.display="none";
                                              }
                                          </script>

                                          <div class="card-body">
                                              <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                                            <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                            <h6><span>{{$row['match_id']}}</span></h6>
                                            <p class="card-text">{{$row['date']}}</p>
                                            <p>{{$row['time']}}</p>
                                          </div>
                                          <div class="card-table">
                                              <table class="table borderless table-responsive">
                                                  <thead>
                                                    <tr>

                                                      <th scope="col">TOTAL PRIZE</th>
                                                      <th scope="col">PER KILL</th>
                                                      <th scope="col">ENTRY FEE</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>

                                                      <td> <strong>{{$row['total_price']}}</strong> </td>
                                                      <td> <strong>{{$row['per_kill']}}</strong></td>
                                                      <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                                    </tr>
                                                    <tr>

                                                      <td>TYPE</td>
                                                      <td>VERSION</td>
                                                      <td>MAP</td>
                                                    </tr>
                                                    <tr>
                                                      <td> <strong>{{$row['type']}}</strong> </td>
                                                      <td> <strong>{{$row['version']}}</strong> </td>
                                                      <td> <strong>{{$row['map']}}</strong> </td>

                                                    </tr>
                                                  </tbody>
                                                </table>
                                          </div>

                                          <div class="card-body">
                                            <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                            <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                          </div>
                                          <div class="card-body">
                                              <div class="dropdown">
                                                  <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Total Price Details
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      <div class="drop-border">
                                                          <div class="dropdown-item">
                                                              <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                          </div>
                                                          <div class="dropdown-item">
                                                              <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                          </div>
                                                          <div class="dropdown-item">
                                                              <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                          </div>

                                                      </div>


                                                  </div>
                                                </div>
                                            </div>
                                            <div class="card-body" style="text-align: center; padding: 0px;">

                                                <p style="color: #7C4DFF;">Room Code: {{$gcode13}}</p>

                                              </div>
                                        </div>



                                        @empty

                                       @endforelse
                                        @endforeach




                                      @foreach ($card14 as $row)
                                      @forelse ($card14 as $row)
                                      <div id="card14"  class="card" style="width: 18rem; overflow:auto;">
                                          <script>
                                              var x= "{{$row['status']}}";
                                              if(x=="ongoing"){
                                                  document.getElementById("card14").style.display="block";
                                              }
                                              else{
                                                  document.getElementById("card14").style.display="none";
                                              }
                                          </script>

                                          <div class="card-body">
                                              <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                                            <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                            <h6><span>{{$row['match_id']}}</span></h6>
                                            <p class="card-text">{{$row['date']}}</p>
                                            <p>{{$row['time']}}</p>
                                          </div>
                                          <div class="card-table">
                                              <table class="table borderless table-responsive">
                                                  <thead>
                                                    <tr>

                                                      <th scope="col">TOTAL PRIZE</th>
                                                      <th scope="col">PER KILL</th>
                                                      <th scope="col">ENTRY FEE</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>

                                                      <td> <strong>{{$row['total_price']}}</strong> </td>
                                                      <td> <strong>{{$row['per_kill']}}</strong></td>
                                                      <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                                    </tr>
                                                    <tr>

                                                      <td>TYPE</td>
                                                      <td>VERSION</td>
                                                      <td>MAP</td>
                                                    </tr>
                                                    <tr>
                                                      <td> <strong>{{$row['type']}}</strong> </td>
                                                      <td> <strong>{{$row['version']}}</strong> </td>
                                                      <td> <strong>{{$row['map']}}</strong> </td>

                                                    </tr>
                                                  </tbody>
                                                </table>
                                          </div>

                                          <div class="card-body">
                                            <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                            <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                          </div>
                                          <div class="card-body">
                                              <div class="dropdown">
                                                  <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Total Price Details
                                                  </button>
                                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                      <div class="drop-border">
                                                          <div class="dropdown-item">
                                                              <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                          </div>
                                                          <div class="dropdown-item">
                                                              <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                          </div>
                                                          <div class="dropdown-item">
                                                              <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                          </div>

                                                      </div>


                                                  </div>
                                                </div>
                                            </div>
                                            <div class="card-body" style="text-align: center; padding: 0px;">

                                                <p style="color: #7C4DFF;">Room Code: {{$gcode14}}</p>

                                              </div>
                                        </div>



                                        @empty

                                       @endforelse
                                        @endforeach




                                        @foreach ($card15 as $row)
                                        @forelse ($card15 as $row)
                                        <div id="card15"  class="card" style="width: 18rem; overflow:auto;">
                                            <script>
                                                var x= "{{$row['status']}}";
                                                if(x=="ongoing"){
                                                    document.getElementById("card15").style.display="block";
                                                }
                                                else{
                                                    document.getElementById("card15").style.display="none";
                                                }
                                            </script>

                                            <div class="card-body">
                                                <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                                              <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                              <h6><span>{{$row['match_id']}}</span></h6>
                                              <p class="card-text">{{$row['date']}}</p>
                                              <p>{{$row['time']}}</p>
                                            </div>
                                            <div class="card-table">
                                                <table class="table borderless table-responsive">
                                                    <thead>
                                                      <tr>

                                                        <th scope="col">TOTAL PRIZE</th>
                                                        <th scope="col">PER KILL</th>
                                                        <th scope="col">ENTRY FEE</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>

                                                        <td> <strong>{{$row['total_price']}}</strong> </td>
                                                        <td> <strong>{{$row['per_kill']}}</strong></td>
                                                        <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                                      </tr>
                                                      <tr>

                                                        <td>TYPE</td>
                                                        <td>VERSION</td>
                                                        <td>MAP</td>
                                                      </tr>
                                                      <tr>
                                                        <td> <strong>{{$row['type']}}</strong> </td>
                                                        <td> <strong>{{$row['version']}}</strong> </td>
                                                        <td> <strong>{{$row['map']}}</strong> </td>

                                                      </tr>
                                                    </tbody>
                                                  </table>
                                            </div>

                                            <div class="card-body">
                                              <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                              <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                            </div>
                                            <div class="card-body">
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                      Total Price Details
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <div class="drop-border">
                                                            <div class="dropdown-item">
                                                                <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                            </div>

                                                        </div>


                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="card-body" style="text-align: center; padding: 0px;">

                                                <p style="color: #7C4DFF;">Room Code: {{$gcode15}}</p>

                                              </div>
                                          </div>

                                            @empty

                                         @endforelse
                                          @endforeach



                                          @foreach ($card16 as $row)
                                          @forelse ($card16 as $row)
                                          <div id="card16"  class="card" style="width: 18rem; overflow:auto;">
                                              <script>
                                                  var x= "{{$row['status']}}";
                                                  if(x=="ongoing"){
                                                      document.getElementById("card16").style.display="block";
                                                  }
                                                  else{
                                                      document.getElementById("card16").style.display="none";
                                                  }
                                              </script>

                                              <div class="card-body">
                                                  <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                                                <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                                <h6><span>{{$row['match_id']}}</span></h6>
                                                <p class="card-text">{{$row['date']}}</p>
                                                <p>{{$row['time']}}</p>
                                              </div>
                                              <div class="card-table">
                                                  <table class="table borderless table-responsive">
                                                      <thead>
                                                        <tr>

                                                          <th scope="col">TOTAL PRIZE</th>
                                                          <th scope="col">PER KILL</th>
                                                          <th scope="col">ENTRY FEE</th>
                                                        </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tr>

                                                          <td> <strong>{{$row['total_price']}}</strong> </td>
                                                          <td> <strong>{{$row['per_kill']}}</strong></td>
                                                          <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                                        </tr>
                                                        <tr>

                                                          <td>TYPE</td>
                                                          <td>VERSION</td>
                                                          <td>MAP</td>
                                                        </tr>
                                                        <tr>
                                                          <td> <strong>{{$row['type']}}</strong> </td>
                                                          <td> <strong>{{$row['version']}}</strong> </td>
                                                          <td> <strong>{{$row['map']}}</strong> </td>

                                                        </tr>
                                                      </tbody>
                                                    </table>
                                              </div>

                                              <div class="card-body">
                                                <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                                <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                              </div>
                                              <div class="card-body">
                                                  <div class="dropdown">
                                                      <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Total Price Details
                                                      </button>
                                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                          <div class="drop-border">
                                                              <div class="dropdown-item">
                                                                  <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                              </div>
                                                              <div class="dropdown-item">
                                                                  <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                              </div>
                                                              <div class="dropdown-item">
                                                                  <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                              </div>

                                                          </div>


                                                      </div>
                                                    </div>
                                                </div>
                                                <div class="card-body" style="text-align: center; padding: 0px;">

                                                    <p style="color: #7C4DFF;">Room Code: {{$gcode16}}</p>

                                                  </div>
                                            </div>



                                            @empty

                                           @endforelse
                                            @endforeach



                                            @foreach ($card17 as $row)
                                            @forelse ($card17 as $row)
                                            <div id="card17"  class="card" style="width: 18rem; overflow:auto;">
                                                <script>
                                                    var x= "{{$row['status']}}";
                                                    if(x=="ongoing"){
                                                        document.getElementById("card17").style.display="block";
                                                    }
                                                    else{
                                                        document.getElementById("card17").style.display="none";
                                                    }
                                                </script>

                                                <div class="card-body">
                                                    <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                                                  <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                                  <h6><span>{{$row['match_id']}}</span></h6>
                                                  <p class="card-text">{{$row['date']}}</p>
                                                  <p>{{$row['time']}}</p>
                                                </div>
                                                <div class="card-table">
                                                    <table class="table borderless table-responsive">
                                                        <thead>
                                                          <tr>

                                                            <th scope="col">TOTAL PRIZE</th>
                                                            <th scope="col">PER KILL</th>
                                                            <th scope="col">ENTRY FEE</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>

                                                            <td> <strong>{{$row['total_price']}}</strong> </td>
                                                            <td> <strong>{{$row['per_kill']}}</strong></td>
                                                            <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                                          </tr>
                                                          <tr>

                                                            <td>TYPE</td>
                                                            <td>VERSION</td>
                                                            <td>MAP</td>
                                                          </tr>
                                                          <tr>
                                                            <td> <strong>{{$row['type']}}</strong> </td>
                                                            <td> <strong>{{$row['version']}}</strong> </td>
                                                            <td> <strong>{{$row['map']}}</strong> </td>

                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                </div>

                                                <div class="card-body">
                                                  <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                                  <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                                </div>
                                                <div class="card-body">
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          Total Price Details
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <div class="drop-border">
                                                                <div class="dropdown-item">
                                                                    <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                                </div>

                                                            </div>


                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="card-body" style="text-align: center; padding: 0px;">

                                                    <p style="color: #7C4DFF;">Room Code: {{$gcode17}}</p>

                                                  </div>
                                              </div>



                                              @empty

                                             @endforelse
                                              @endforeach




                                            @foreach ($card18 as $row)
                                            @forelse ($card18 as $row)
                                            <div id="card18"  class="card" style="width: 18rem; overflow:auto;">
                                                <script>
                                                    var x= "{{$row['status']}}";
                                                    if(x=="ongoing"){
                                                        document.getElementById("card18").style.display="block";
                                                    }
                                                    else{
                                                        document.getElementById("card18").style.display="none";
                                                    }
                                                </script>

                                                <div class="card-body">
                                                    <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                                                  <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                                  <h6><span>{{$row['match_id']}}</span></h6>
                                                  <p class="card-text">{{$row['date']}}</p>
                                                  <p>{{$row['time']}}</p>
                                                </div>
                                                <div class="card-table">
                                                    <table class="table borderless table-responsive">
                                                        <thead>
                                                          <tr>

                                                            <th scope="col">TOTAL PRIZE</th>
                                                            <th scope="col">PER KILL</th>
                                                            <th scope="col">ENTRY FEE</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>

                                                            <td> <strong>{{$row['total_price']}}</strong> </td>
                                                            <td> <strong>{{$row['per_kill']}}</strong></td>
                                                            <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                                          </tr>
                                                          <tr>

                                                            <td>TYPE</td>
                                                            <td>VERSION</td>
                                                            <td>MAP</td>
                                                          </tr>
                                                          <tr>
                                                            <td> <strong>{{$row['type']}}</strong> </td>
                                                            <td> <strong>{{$row['version']}}</strong> </td>
                                                            <td> <strong>{{$row['map']}}</strong> </td>

                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                </div>

                                                <div class="card-body">
                                                  <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                                  <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                                </div>
                                                <div class="card-body">
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                          Total Price Details
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <div class="drop-border">
                                                                <div class="dropdown-item">
                                                                    <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                                </div>
                                                                <div class="dropdown-item">
                                                                    <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                                </div>

                                                            </div>


                                                        </div>
                                                      </div>
                                                  </div>
                                                  <div class="card-body" style="text-align: center; padding: 0px;">

                                                    <p style="color: #7C4DFF;">Room Code: {{$gcode18}}</p>

                                                  </div>
                                              </div>



                                              @empty

                                             @endforelse
                                              @endforeach




                                              @foreach ($card19 as $row)
                                              @forelse ($card19 as $row)
                                              <div id="card19"  class="card" style="width: 18rem; overflow:auto;">
                                                  <script>
                                                      var x= "{{$row['status']}}";
                                                      if(x=="ongoing"){
                                                          document.getElementById("card19").style.display="block";
                                                      }
                                                      else{
                                                          document.getElementById("card19").style.display="none";
                                                      }
                                                  </script>

                                                  <div class="card-body">
                                                      <img class="card-img-top img-fluid" src="/image/c2.jpg" alt="Card image cap">
                                                    <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                                    <h6><span>{{$row['match_id']}}</span></h6>
                                                    <p class="card-text">{{$row['date']}}</p>
                                                    <p>{{$row['time']}}</p>
                                                  </div>
                                                  <div class="card-table">
                                                      <table class="table borderless table-responsive">
                                                          <thead>
                                                            <tr>

                                                              <th scope="col">TOTAL PRIZE</th>
                                                              <th scope="col">PER KILL</th>
                                                              <th scope="col">ENTRY FEE</th>
                                                            </tr>
                                                          </thead>
                                                          <tbody>
                                                            <tr>

                                                              <td> <strong>{{$row['total_price']}}</strong> </td>
                                                              <td> <strong>{{$row['per_kill']}}</strong></td>
                                                              <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                                            </tr>
                                                            <tr>

                                                              <td>TYPE</td>
                                                              <td>VERSION</td>
                                                              <td>MAP</td>
                                                            </tr>
                                                            <tr>
                                                              <td> <strong>{{$row['type']}}</strong> </td>
                                                              <td> <strong>{{$row['version']}}</strong> </td>
                                                              <td> <strong>{{$row['map']}}</strong> </td>

                                                            </tr>
                                                          </tbody>
                                                        </table>
                                                  </div>

                                                  <div class="card-body">
                                                    <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                                    <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                                  </div>
                                                  <div class="card-body">
                                                      <div class="dropdown">
                                                          <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Total Price Details
                                                          </button>
                                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                              <div class="drop-border">
                                                                  <div class="dropdown-item">
                                                                      <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                                  </div>
                                                                  <div class="dropdown-item">
                                                                      <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                                  </div>
                                                                  <div class="dropdown-item">
                                                                      <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                                  </div>

                                                              </div>


                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body" style="text-align: center; padding: 0px;">

                                                        <p style="color: #7C4DFF;">Room Code: {{$gcode19}}</p>

                                                      </div>
                                                </div>

                                                  @empty

                                               @endforelse
                                                @endforeach



                                                @foreach ($card20 as $row)
                                                @forelse ($card20 as $row)
                                                <div id="card20"  class="card" style="width: 18rem; overflow:auto;">
                                                    <script>
                                                        var x= "{{$row['status']}}";
                                                        if(x=="ongoing"){
                                                            document.getElementById("card20").style.display="block";
                                                        }
                                                        else{
                                                            document.getElementById("card20").style.display="none";
                                                        }
                                                    </script>

                                                    <div class="card-body">
                                                        <img class="card-img-top img-fluid" src="/image/c5.jpg" alt="Card image cap">
                                                      <h5 class="card-title"> <strong>GSBD || {{$row['type']}}</strong> </h5>
                                                      <h6><span>{{$row['match_id']}}</span></h6>
                                                      <p class="card-text">{{$row['date']}}</p>
                                                      <p>{{$row['time']}}</p>
                                                    </div>
                                                    <div class="card-table">
                                                        <table class="table borderless table-responsive">
                                                            <thead>
                                                              <tr>

                                                                <th scope="col">TOTAL PRIZE</th>
                                                                <th scope="col">PER KILL</th>
                                                                <th scope="col">ENTRY FEE</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              <tr>

                                                                <td> <strong>{{$row['total_price']}}</strong> </td>
                                                                <td> <strong>{{$row['per_kill']}}</strong></td>
                                                                <td> <strong>{{$row['entry_fee']}}</strong> </td>
                                                              </tr>
                                                              <tr>

                                                                <td>TYPE</td>
                                                                <td>VERSION</td>
                                                                <td>MAP</td>
                                                              </tr>
                                                              <tr>
                                                                <td> <strong>{{$row['type']}}</strong> </td>
                                                                <td> <strong>{{$row['version']}}</strong> </td>
                                                                <td> <strong>{{$row['map']}}</strong> </td>

                                                              </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>

                                                    <div class="card-body">
                                                      <a href="{{$row['matchlink']}}" role="button" class="btn btn-primary  btn-sm">WATCH MATCH</a>
                                                      <a href="#" role="button" class="btn btn-danger  btn-sm">NOT JOINED</a>

                                                    </div>
                                                    <div class="card-body">
                                                        <div class="dropdown">
                                                            <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                              Total Price Details
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <div class="drop-border">
                                                                    <div class="dropdown-item">
                                                                        <p> <i class="fas fa-award"></i> Winner-{{$row['winner_tk']}}৳</p>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup1_tk']}}৳</p>
                                                                    </div>
                                                                    <div class="dropdown-item">
                                                                        <p> <i class="fas fa-award"></i> Runner Up 1-{{$row['runnerup2_tk']}}৳</p>
                                                                    </div>

                                                                </div>


                                                            </div>
                                                          </div>
                                                      </div>
                                                      <div class="card-body" style="text-align: center; padding: 0px;">

                                                        <p style="color: #7C4DFF;">Room Code: {{$gcode20}}</p>

                                                      </div>
                                                  </div>



                                                  @empty

                                                 @endforelse
                                                  @endforeach




                </div>
            </div>
        </div>
    </div>
</section>
<!-----------------------------ongoing Section Starts Here--------------------------->

<!-----------------------------tlink Section Starts Here--------------------------->

<section class="tlink">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tlink-inner">
                    <div class="tlink-btn">
                        <a role="button"  class="btn btn-primary" href="/tournament">
                            <i class="fas fa-dragon "></i>
                        Tournament
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

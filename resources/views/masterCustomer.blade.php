<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <title>CRUD TICKET</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default" role="davigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" >Travelad.id</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li ><a href="{{url('/ticket_custommer')}}">Ticket anda</a></li>
            <li><a href="{{url('/pesanan')}}">Pesanan Anda</a></li>


          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>@if(Auth::guest())
  						<a href="{{url('login')}}" id=""><span>Login</span></a>

              @else
  							<a href="{{url('logout')}}" id=""><span>Logout</span></a>

  						@endif
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row">
          @yield('content')
        </div>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>

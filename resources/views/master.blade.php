<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>CTC Admin</title>
  </head>
  <body>
    <nav class="nav navbar-default">
      <div class="container-fluid">
         <div class="navbar-header">
           <a class="navbar-brand" href="/">CTC Admin Panel</a>
         </div>
         <ul class="nav navbar-nav">
           <li><a href="#">Home</a></li>
           <li><a href="#">Lugger</a></li>
           <li><a href="#">Clubber</a></li>
           <li><a href="#">Log</a></li>
         </ul>
         @if (Auth::check())
         <ul class="nav navbar-nav navbar-right">
           <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
         </ul>
         @else
         <ul class="nav navbar-nav navbar-right">
           <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
           <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
        @endif
      </div>
    </nav>
    <div class="container-fluid">
    @yield('content')
    </div>
  </body>
</html>

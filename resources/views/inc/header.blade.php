<!DOCTYPE html>
<html>
<head>
	<title>Laravel CRUD operation</title>
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css') }}">
  <link rel="stylesheet" type="text/css" href="url(https://fonts.googleapis.com/css?family=Nunito);">
	
	<script type="text/javascript" src="{{url('js/bootstrap.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Laravel CRUD Operation</a>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item  active" >
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{"/dashboard"}}">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{"/create"}}">Create</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-right">
       <li class="nav-item">
          <a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span>Sign Up</a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="{{"/login"}}">Login</a>
        </li>
    </ul>
  </div>
</nav>
</body>
</html>
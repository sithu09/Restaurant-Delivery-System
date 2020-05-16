<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
.about{
    width: 100%;
    height:100%;
  background-repeat: no-repeat;
  background-size: cover;
	background-image: url("https://i1.wp.com/taiwan-scene.com/wp-content/uploads/2019/03/taiwan-scene_funnow_fun-bar_-restaurant_e7be8ee4babae88cb6e98187e69db1e59da1e88289dong-po-pork-served-oriental-beauty02.jpg?fit=600%2C400&ssl=1");
}
.navbar{
    background-color: brown;
  	opacity:0.9;
    border-color: transparent;
      margin-bottom: 0;
}
@media (max-width: @screen-xs) {
    body{font-size: 10px;}
}

@media (max-width: @screen-sm) {
    body{font-size: 14px;}
}


li{
    font-size: 1.2em;
}
  </style>
</head>
<body>



{{-- Nav --}}
<nav class="navbar navbar-inverse navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand text-dark" href="#">စားဘဲကြီး</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      {{-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul> --}}
    </div>
  </div>
</nav>
{{-- End Nav --}}
    <div class="about">
<h3>About</h3>
    </div>
    {{-- Form --}}
     <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>





</body>
</html>

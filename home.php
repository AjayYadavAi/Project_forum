<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    body{background-color: #eaeaea;}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><img src="logo.png" width="40" height="40"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="members.php">MEMBERS</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    	<li class="nav-item">
    		<a class="nav-link" href="#"><span class="fa fa-search"></span></a>
    	</li>
    </ul>
  </div>  
</nav>

<div class="text-right" id="part1">
	<a href="#" data-toggle="modal" data-target="#LoginToggle">Log In</a>
	<a href="register.php">Register</a>
  <div class="modal" id="LoginToggle">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form method="POST" action="login.php">
            <div class="form-group">
              <input type="text" name="email" placeholder="Username or Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="form-check">
              <label for="form-check-label" for="remember">
                <input type="checkbox" name="remember" class="from-check-input" value="remember"> Keep me logged in
              </label>
            </div>
            <button type="submit" class="btn btn-info btn-block">Log in</button>
            <div class="text-center">
              <p>Or</p>
              <p><a href="register.php">Create an account</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
	<hr>
</div>
<div id="part2">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-sm-10">
			<a href="index.php"><span class="fa fa-list"> Topics </span></a>
			<a href="members.php"><span class="fa fa-user"> Members </span></a>
			<a href="create_topic.php" type="button" class="btn btn-info float-right">Start New Topic</a>
			<hr>
		</div>
	</div>
</div>

</body>
</html>



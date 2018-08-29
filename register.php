<?php
include_once("home.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.main{background-color: white;padding: 8%;}
	</style>
</head>
<body>
<div class="container">
	<h3>MEMBER REGISTRATION</h3>
	<p>All fields marked with a * are required.</p>
	<div class="main">
		<form method="POST" action="add_user.php">
			<div class="form-group row">
				<label for="name" class="col-sm-3 col-form-label">Username* </label>
				<div class="col-sm-9">
					<input type="text" name="name" class="form-control" required="">
				</div>
			</div>
			<div class="form-group row">
				<label for="email" class="col-sm-3 col-form-label">Email Address* </label>
				<div class="col-sm-9">
					<input type="email" name="email" class="form-control" required="">
				</div>
			</div>
			<div class="form-group row">
				<label for="password" class="col-sm-3 col-form-label">Password* </label>
				<div class="col-sm-9">
					<input type="password" name="password" class="form-control" required="">
				</div>
			</div>
			<div class="form-group row">
				<label for="rule" class="col-sm-3 col-form-label">Forum Terms & Rules* </label>
				<div class="col-sm-9 form-check">
					<label class="form-check-label">
						<input type="checkbox" name="rule" class="form-check-input" value="yes" required=""> I agree to the Forum Terms and Rules
					</label>
				</div>
			</div>
			<button type="submit" class="btn btn-info">Create Account</button>
		</form>
	</div>
</div>
</body>
</html>
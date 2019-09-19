<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Student clearance System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body  style="background-image: url(bg1.jpg); background-repeat: no-repeat;">

	<div class="header" style="background-color: #4d4dff;">
		<h1><img src="admin/img/logo.png"></h1>
		<h2>OSCS Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn" style="background-color: #4d4dff;">Login</button>
		</div>
		<!-- <p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p> -->
	</form>


</body>
</html>
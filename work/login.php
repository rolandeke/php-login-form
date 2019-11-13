<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Salim - Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<?php include('navbar.php')?>
	<div class="container login">
	<img src="image/login.png"/>
		<div class="header">
			<h2>Log in </h2>
		</div>
		<div class="input-fields">
			<form action="login.php" method="post" class="log">
				
				<div class="form-input login">
					
					<label for="username">Username</label>
					
					<input type="text" placeholder="Enter your username" name="username" required>

				</div>


				<div class="form-input login">
					
					<label for="password">Password</label>
					
					<input type="password" placeholder="Enter your password" name="password_1" required>

				</div>


				<button type="submit" name="login_user">Log in</button>

				<p>Not a user ? <a href="registration.php"> <b>Sign up </b> </a> </p>

				
			</form>
		</div>

	</div>

</body>
</html>

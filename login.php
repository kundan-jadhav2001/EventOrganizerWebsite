<!DOCTYPE html>
<html lang="en" >
<head>
  	<meta charset="UTF-8">
	<title>DREAM Planners</title>
	<link rel="stylesheet" href="css/loginevent.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
	<form action= "loginvalidation.php" method="post">
		<h1>Login</h1>
		<div class="content">
		<div class="input-field">
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="input-field">
			<input type="password" name="password" placeholder="Password" autocomplete="new-password">
		</div>
		<a href="#" class="link">Forgot Your Password?</a>
		</div>
		<div class="action">
			<button>Sign in</button>
		</div>
	</form>
	<div class="action">
		<a href="signup.php"><button>Register</button></a>
  	</div>


</div>
<!-- partial -->
  	<script  src="js/loginscript.js"></script>

</body>
</html>

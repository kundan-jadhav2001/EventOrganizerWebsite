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
	<form action= "signupvalidation.php" method="post">
		<h1>Signup</h1>
		<div class="content">
		<div class="input-field">
			<input type="email" placeholder="Email" autocomplete="nope">
		</div>
		<div class="input-field">
			<input type="password" placeholder="Password" autocomplete="new-password">
		</div>
		<div class="input-field">
			<input type="text" placeholder="name">
		</div>
		<div class="input-field">
			<input type="text" placeholder="username">
		</div>

		<div class="action">
			<button>Sign Up</button>
		</div>
	</form>

	<div class="action">
		<a href="login.php"><button>Log in</button></a>
  	</div>


</div>
<!-- partial -->
  	<script  src="js/loginscript.js"></script>

</body>
</html>

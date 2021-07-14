
	<head>
		<title> Covid-19 Tracker || Log In </title>
		<link rel="shortcut icon" href="images/logo.png"/>
		<link rel="stylesheet" href="login.css">
	
		<link rel="shortcut icon" href="icon.png"/>

	</head>
	<body style="background-image: url(back.jpg);">
	<div class="loginBox">
		
		<img src="user.png" class="user">
		<h2> Member Login </h2>
		<form class="login100-form validate-form" action="login_process.php" method="POST">
			<p> E-mail </p>
			<input type="text" name = "email" placeholder="Enter Email">
			<p> Password </p>
			<input type="password" name = "password" placeholder="Enter Password">
			<input type="submit" name = "btnLogin" value="Sign In">
      <br><br>
			<a href="register.php"><center> Or Register Here  </center></a>
		</form>
	</div>
	
<script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script>
<script src="<?php echo web_root; ?>js/bootstrap.min.js"></script> 
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo web_root; ?>vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>
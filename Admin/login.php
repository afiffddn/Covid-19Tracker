

<html>
	<head>
		<title> Covid-19 Tracker || Log In </title>
		<link rel="shortcut icon" href="images/logo.png"/>
		<link rel="stylesheet" href="login.css">
	
		<link rel="shortcut icon" href="images/icon.png"/>

	</head>
	<body style="background-image: url(images/back.jpg);">
	<div class="loginBox">
		
		<img src="images/admin.png" class="user">
		<h2> Covid-19 Tracker </h2><br>
		<form class="login100-form validate-form" action="login_process.php" method="POST">
			<p> Admin ID </p>
			<input type="text" name = "email" placeholder="Enter ID">
			<p> Password </p>
			<input type="password" name = "password" placeholder="Enter Password"><br><br>
			<input type="submit" name = "btnLogin" value="Sign In">
      <br><br>
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
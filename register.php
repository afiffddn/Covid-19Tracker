
	<head>
		<title> Covid-19 || Register </title>
		<link rel="shortcut icon" href="logo.png"/>
		<link rel="stylesheet" href="register.css">
	
		

	</head>
	<body style="background-image:url(back.jpg);">
	<div class="loginBox">
		
		<img src="user.png" class="user">
		<h2> Registration Form </h2>
		<form action="register_process.php" method="POST">
			<input type="text" name = "first_name" placeholder=" First Name ">
			<input type="text" name = "last_name" placeholder=" Last Name ">
			<input type="text" name = "address" placeholder=" Address ">
      <input type="text" name = "phone_number" placeholder=" Phone Number ">
      <input type="text" name = "email" placeholder=" Email ">
      <input type="password" name = "password" placeholder=" Password ">
      
			<input type="submit" name = "btnRegister" value=" Register ">
		</form>
	</div>
	</body>
</html>
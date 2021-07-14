<?php session_start() ;?>
<?php
include 'covid_db.php';

$state=$_POST['stateSelect'];
$city=$_POST['citySelect'];

$sql = mysqli_query($con, "SELECT totalcase, recovered, deaths FROM users WHERE state='$state' AND city='$city'");
?>

<!DOCTYPE HTML> 
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Covid-19 || Malaysia</title>
		<link rel="shortcut icon" href="logo.png"/>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">
		<form action= "About_process.php" method= "POST">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#">Kementerian Kesihatan Malaysia</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="Index.html">HOME</a></li>
						<li><a href="https://www.outbreak.my/">NEW UPDATE MALAYSIA</a></li>
						
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<img src="logokkm.jpg" width="200" height="200">
					<h2>Covid-19 Tracker</h2>
					<p>STAY HOME, STAY SAFE</p>
				</header>
<center>
	<table style="width:50%">
	  <tr>
	    <th>Total Case</th>
	    <th>Recovered Case</th> 
	    <th>Death Toll</th>
	  </tr>
	  <?php
	  	 while($row = mysqli_fetch_assoc($sql)){
	  	 	$totalcase = $row['totalcase'];
	  	 	$recovered = $row['recovered'];
	  	 	$deaths = $row['deaths'];

	  	 	echo 
	  	 	'<tr>
	  	 		<td>'.$totalcase.'</td>
	  	 		<td>'.$recovered.'</td>
	  	 		<td>'.$deaths.'</td>
	  	 	</tr>';
	  	 
	  	 }
	  ?>
	  <tr>
	    <td></td>
	    <td></td>
	    <td></td>
	  </tr>
	</table>
</center>
</section>
<br>
</select><br>
<center><a href="About.php">Back</center>
</form><closeform></closeform>
<br>


					<hr class="major" />
					<div class="row">
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="pic01.jpg" alt="" /></a>
								<h3>PETALING JAYA:</h3>
								<p>Malaysia recorded 18 new cases on Friday (July 17), bringing the total infections to 8,755 with three recoveries, says the Health Ministry.Of the 18 new positive cases reported, 10 were imported cases, involving seven Malaysians and three non-Malaysians.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Read More</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="pic02.jpg" alt="" /></a>
								<h3>PETALING JAYA</h3>
								<p>Malaysia announced its first Covid-19 cases on Jan 25 involving three China tourists who had entered Malaysia via Johor from Singapore on Jan 23. The number of cases then rose to 22 by Feb 16,representing a first wave of cases.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Read More</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
									<h3>Accumsan</h3>
									<ul class="alt">
										<li><a href="#">Nascetur nunc varius</a></li>
										<li><a href="#">Vis faucibus sed tempor</a></li>
										<li><a href="#">Massa amet lobortis vel</a></li>
										<li><a href="#">Nascetur nunc varius</a></li>
									</ul>
								</div>
								<div class="6u">
									<h3>Faucibus</h3>
									<ul class="alt">
										<li><a href="#">Nascetur nunc varius</a></li>
										<li><a href="#">Vis faucibus sed tempor</a></li>
										<li><a href="#">Massa amet lobortis vel</a></li>
										<li><a href="#">Nascetur nunc varius</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="6u">
							<h2>Aliquam Interdum</h2>
							<p>Blandit nunc tempor lobortis nunc non. Mi accumsan. Justo aliquet massa adipiscing cubilia eu accumsan id. Arcu accumsan faucibus vis ultricies adipiscing ornare ut. Mi accumsan justo aliquet.</p>
							<ul class="icons">
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							</ul>
						</div>
					</div>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a></li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a></li>
					</ul>
				</div>
			</footer>

	</body>
</html>
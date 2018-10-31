<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lumen/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/css_test_m.css">
		<title>Home</title>
		
	</head>

	<body>
		<img src="img/logo.png" alt="Simpson Bed and Breakfast logo" class = "center">
		
		<?php include '../resources/nav.php'; ?>
		
	<header>
		<h1>SIMPSON BED AND BREAKFAST</h1>
	</header>
	<br>
	<br>
	<div class="container">
		<img class="img" style="border: #0D0D0D 10px double" src="img/house.png" alt="Housing for our Bed and Breakfast">

		<br>
		<br>
		<section class="border-warning">
			<p>We have two available housing units that are located in Indianola, IA.</p>
			<p>We have one older authentic housing called Kresge and one newly renovated called Barker.</p>
			<p>View our housing page for more information.</p>
			<br>
			<br>
			<p>We also have apartment living!</p>
			<p>We have a few amazing choices when it comes to apartment living.  We have Hamilton House, Station Square, Washington, Clinton, and Detroit.</p>
			<input type="button" class="btn btn-outline-warning" value="Book Now!" onclick="location.href = 'booking.html';">
			
		</section>
		
		<?php include '../resources/footnote.php'; ?>
		
	</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>

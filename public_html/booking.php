<!DOCTYPE html>
<!-- M Leonard-->
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lumen/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/css_test_m.css">
		<title>Booking</title>
	</head>

	<body>
		<img src="img/logo.png" alt="Simpson Bed and Breakfast logo" class = "center">
		
		<?php include '../resources/nav.php'; ?>
		
		<header>
			<h1>Book A Room</h1>
		</header>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Book Now! </strong>Only 3 Rooms Left.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>

		<div class="container">
			<div class="row">
				<div class="col center">
					<h3>Room in Kresge</h3>

					<img class="img" style="border: #0D0D0D 10px double" src="img/kresge.jpg" alt="Room in Kresge">

					<h4>Double room with Two Full Beds</h4>
					<h4>$125 per night or $700 for a week.</h4>
					<h4>$700 is &lt; $825. GREAT SAVINGS!</h4>
				</div>
				<div class="col center">
					<h3>Room in Barker</h3>

					<img class="img" style="border: #0D0D0D 10px double" src="img/barker.jpg" alt="Room in Barker">

					<h4>Double room with Two Full Beds</h4>
					<h4>$130 per night or $800 for a week.</h4>
					<h4>$800 is &lt; $910. GREAT SAVINGS!</h4>
				</div>
			</div>
			<br>
			<p class="center">Call: 515-971-2580 to book a room, or book online below!</p>
			<br>
			<form>
				 First and Last Name:<br>
				 <input type="text" name="fullname"><br>
				 Room Type:<br>
				 <input type="radio" name="room" value="barker" checked>Barker<br>
				 <input type="radio" name="room" value="kresge">Kresge<br>
				 Date:<br>
				 <input type="text" name="date">
				 <input class="btn btn-outline-warning" type="submit" value="Submit">
			</form>
		</div>
		<br>
		<br>
		
		<?php include '../resources/footenote.php'; ?>
		
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>

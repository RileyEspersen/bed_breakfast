<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lumen/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/css_test_m.css">
		<title>Things to Do</title>
	</head>
	
	<body>
		<img src="img/logo.png" alt="Simpson Bed and Breakfast logo" class = "center">
		
	<?php include '../resources/nav.php'; ?>	
		
	<header>
		<h1>THINGS TO DO</h1>
	</header>
	<br>
	<div class="container">
	
			<div class="jumbotron jumbotron-fluid text-primary border border-warning">
			<div class="container">
				<h1 class="display-4">Become part of the college!</h1>
				<p class="lead">Everyone staying at Simpson Bed & Breakfast is more than welcome to partake in any of the activities Simpson College has to offer. <br/>
				   Simpson College constantly has events from workouts to paintings, to check what planned events are coming up, please visit the website at <br/>
    <input type="button" class="btn btn-outline-warning" value="Simpson College Events" onclick="location.href = 'http://simpson.edu/student-life/';"></p>
			</div>
		</div>
		
		<div class="row">
			<div class="col">	
				<h3 class="text-warning font-weight-bold"><u>Football Games</u></h3>
					<img style="border: #0D0D0D 10px double" src="img/footballfield.jpg" alt="Simpson College's football field.">
					<p>Simpson College has varsity football games throughout the fall on Saturdays and JV games on the week days. The following link will take you to their schedule.</p>
					<input type="button" class="btn btn-outline-warning" value="Simpson College Football Schedule" onclick="location.href = 'http://www.simpsonathletics.com/sports/fball/2018-19/schedule';">
			</div>
			<div class="col">
				<h3 class="text-warning font-weight-bold"><u>Bingo</u></h3>
				<img style="border: #0D0D0D 10px double" src="img/bingo.jpg" alt="Bingo sheet">
				<p>Simpson College has bingo nights open to the public where you can win anything from a jar of pickles to a TV and soundbar. The next one will be September 14th at 9pm.</p>
				<p>For more information contact Simpson College and they will direct you to the event director.</p>
			</div>
		</div>
	</div>
	
	<?php include '../resources/footnote.php'; ?>
	
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>

<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>xkcd Password Generator</title>
			
			<!-- Link to Bootstrap CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="css/p2.css">
			<?php require('php/logic.php'); ?>
	</head>

	<body>
		
		<h1>xkcd Password Generator</h1>
		<form class="form-horizontal">
			<div class="form-group">
				<label for="numWord" class="col-sm-2 control-label">Number of words:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputWord" placeholder="Please enter a number between 1-9">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label>
							<input type="checkbox"> Include a number
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label>
							<input type="checkbox"> Include a symbol
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="radio">
						<label>
							<input type="radio" name="caseRadio" id="lowCase" value="option1" checked>
							All lowercase
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<div class="radio">
						<label>
							<input type="radio" name="caseRadio" id="upCase" value="option2">
							All uppercase
						</label>
					</div>
				</div>
			</div>	
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Generate</button>
				</div>
			</div>
		</form>
		<a href="http://xkcd.com/936/"><img src="images/xkcd.png" alt="xkcd_pw_pic"></a>
		<!-- Link to jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <!-- Link to Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
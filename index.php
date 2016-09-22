<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<?php require('php/logic.php'); ?>

<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>xkcd Password Generator</title>
			
			<!-- Link to Bootstrap CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
			<link rel="stylesheet" href="css/p2.css">
	</head>

	<body>
		
		<h1 class="text-center">xkcd Password Generator</h1>
		<div class="text-center">
			<p class="error"><?php echo $errormsg; ?></p>
		</div>
		
		<form action="index.php">
			<div class="form-group">
				<label for="numWord">Number of words</label>
				<input type="text" class="form-control" name="numWord" id="numWord" placeholder="Please enter a number between 1-9" maxlength="1" required>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="symbol"> Include a symbol
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="number"> Include a number
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="case" id="lowCase" value="low" checked>
					Lowercase
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="case" id="upCase" value="up">
					Uppercase
				</label>
			</div>
			<button type="submit" class="btn btn-default">Generate Password</button>
		</form>
		
		<div class="text-center">
			<h2><?php echo $password; ?></h2>
		</div>
		<div class="text-center" id="info">
			<p>This is an xkcd-style password generator. Please enter a number of words (between 1 and 9). Then, select whether or not you want to append a symbol and/or number to the generated password, and whether or not you'd like to make the password all lowercase (default) or all uppercase. By selecting "Generate Password," a random password containing however many words you asked for and any of the other options you may have chosen will be displayed to you.</p>
			<a href="http://xkcd.com/936/"><img src="images/xkcd.png" alt="xkcd_pw_pic"></a>
		</div>
		<!-- Link to jQuery 
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <!-- Link to Bootstrap JS
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
	</body>
</html>
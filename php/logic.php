<?php

# Initialize variables
$symbols = array('!','@','#','$','%','^','&','*','?','-');
$errormsg = '';
$defaultVal = 4;

# Receive the user input. If the user does not provide input, use default value of 4.
if (isset($_GET['numWord'])) {
  $input = $_GET['numWord'];
}
else {
  $input = $defaultVal;
}

# Check if input is not a number. If not a number, provide user with error message and use default value of 4 to generate the password.
if (!is_numeric($input)) {
  $input = $defaultVal;
  $errormsg = 'ERROR: You must enter a number!';
}

# Check if input is between 2-10. If not between 2-10, provide user with error message and use default value of 4 to generate the password.
else if ($input < 2 || $input > 10) {
  $input = $defaultVal;
  $errormsg = 'ERROR: You must enter a number between 2-10!';
}

# Scrape html page for words between list elements.
$source = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html');
$doc = new DOMDocument();
@$doc->loadHTML($source);

foreach ($doc->getElementsByTagName('li') as $li) {
            $words[] = $li->nodeValue;
}

# Choose random words from the $words array based on the number provided by the user.
$randArray = array_rand($words, $input);
$valueArray = array();

foreach ($randArray as $value) {
  $valueArray[] = $words[$value];
}

# Place a '-' between each word in the password.
$password = join('-', $valueArray);
$password = preg_replace('/\s+/', '', $password);

# If option is selected by the user, make the password all uppercase.
if (isset($_GET['case']) && $_GET['case'] == 'up') {
  $password = strtoupper($password);
}
else {
  $password = strtolower($password);
}

# If option is selected by the user, append a random number to the end of the password.
if (isset($_GET['number'])) {
  $password = $password . rand(0, 9);
}

# If option is selected by the user, appent a random symbol to the end of the password.
if (isset($_GET['symbol'])) {
  $password = $password . $symbols[rand(0, count($symbols)-1)];
}
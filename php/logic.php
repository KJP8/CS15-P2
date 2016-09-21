<?php

#Initializing arrays
$words = array('one','two','three','four','five','six','seven','eight','nine','ten');
$symbols = array('!','@','#','$','%','^','&','*','?','-');
$errormsg = '';


#Receive the user input
if (isset($_GET['numWord'])) {
  $input = $_GET['numWord'];
}
else {
  $input = 4;
}

#Check if input is not a number
if (!is_numeric($input)) {
  $input = 4;
  $errormsg = 'You must enter a number!';
}

else if ($input < 1 || $input > 9) {
  $input = 4;
  $errormsg = 'You must enter a number between 1-9!';
}

#Choose random words given the $words array and the $input number
$randArray = array_rand($words, $input);
$valueArray = array();

foreach ($randArray as $value) {
  $valueArray[] = $words[$value];
}

$password = join('-', $valueArray);

if (isset($_GET['case']) && $_GET['case'] == 'up') {
  $password = strtoupper($password);
}
else {
  $password = strtolower($password);
}

if (isset($_GET['symbol'])) {
  $password = $password . rand(0, 9);
}

if (isset($_GET['number'])) {
  $password = $password . $symbols[rand(0, count($symbols)-1)];
}
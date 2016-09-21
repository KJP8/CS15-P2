<?php

#Initializing arrays
$words = array('one','two','three','four','five','six','seven','eight','nine','ten');
$symbols = array('!','@','#','$','%','^','&','*','?','-');
$numbers = array('1','2','3','4','5','6','7','8','9');



#Receive the user input
$input = $_GET['numWord'];

#Check if the input is NULL
if (!isset($input)) {
  #TODO
}

#Check if input is not a number
else if (!is_numeric($input)) {
  #TODO
}

else if ($input < 1 || > 9) {
  #TODO
}

#Choose random words given the $words array and the $input number
$randArray = array_rand($words, $input);

$password = join('-', $randArray);

$case = $_GET['case'];
#TODO

$symbol = $_GET['symbol'];

if (!isset($symbol)) {
  #TODO
}

$number = $_GET['number'];

if (!isset($number)) {
  #TODO
}
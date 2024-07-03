<?php
// if else
$age = 20;

if ($age >= 18) {
  echo "You are an adult.";
} else {
  echo "You are not an adult.";
}

// switch
$day = "Monday";

switch ($day) {
  case "Monday":
    echo "Today is Monday.";
    break;
  case "Tuesday":
    echo "Today is Tuesday.";
    break;
  default:
    echo "It's another day.";
}

// Ternary Operator
$ageT = 20;
$status = ($ageT >= 18) ? "adult" : "not an adult";
echo $status; // Output: adult
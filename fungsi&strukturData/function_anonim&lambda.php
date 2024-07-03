<?php
$greet = function ($name) {
  return "Hello, " . $name . "!";
};

echo $greet("John"); // Output: Hello, John!

// Menggunakan array_map dengan fungsi anonim
$numbers = [1, 2, 3, 4, 5];
$squared_numbers = array_map(function ($num) {
  return $num * $num;
}, $numbers);

print_r($squared_numbers); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

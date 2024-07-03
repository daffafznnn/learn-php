<?php
// for loop
for ($i = 0; $i < 5; $i++) {
  echo $i; // Output: 01234
}

// foreach loop
$fruits = array("apple", "banana", "cherry");

foreach ($fruits as $fruit) {
  echo $fruit; // Output: applebananacherry
}

// while loop
$iw = 0;

while ($iw < 5) {
  echo $iw; // Output: 01234
  $iw++;
}

// do while loop
$idw = 0;

do {
  echo $idw; // Output: 01234
  $idw++;
} while ($idw < 5);
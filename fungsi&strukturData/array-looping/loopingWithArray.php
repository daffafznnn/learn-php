<?php
$fruits = array("apple", "banana", "cherry");

for ($i = 0; $i < count($fruits); $i++) {
  echo $fruits[$i] . "<br>";
}

foreach ($fruits as $fruit) {
  echo $fruit . "<br>";
}

// Looping pada array asosiatif
$person = array(
  "name" => "John",
  "age" => 25,
  "city" => "New York"
);

foreach ($person as $key => $value) {
  echo $key . ": " . $value . "<br>";
}
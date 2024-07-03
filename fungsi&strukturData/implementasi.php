<?php
// Fungsi
function calculate_average($grades)
{
  $total = array_sum($grades);
  return $total / count($grades);
}

// Data
$students = array(
  array(
    "name" => "John",
    "grades" => array(90, 85, 88)
  ),
  array(
    "name" => "Jane",
    "grades" => array(92, 80, 87)
  )
);

// Looping dan menggunakan fungsi
foreach ($students as $student) {
  $average = calculate_average($student["grades"]);
  echo "Name: " . $student["name"] . "<br>";
  echo "Average Grade: " . $average . "<br><br>";
}

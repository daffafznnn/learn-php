<?php
// Variabel dan tipe data
$name = "Daffa";
$age = 25;
$is_student = true;
$grades = array(90, 85, 88);

// Operator
$total = $grades[0] + $grades[1] + $grades[2];
$average = $total / count($grades);

// Struktur kontrol
if ($average >= 90) {
  $grade = "A";
} elseif ($average >= 80) {
  $grade = "B";
} else {
  $grade = "C";
}

// Looping
foreach ($grades as $grade_value) {
  echo "Grade: " . $grade_value . "<br>";
}

// Output akhir
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Is Student: " . ($is_student ? "Yes" : "No") . "<br>";
echo "Average Grade: " . $average . "<br>";
echo "Final Grade: " . $grade . "<br>";

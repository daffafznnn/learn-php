<?php
$buah = array("Apel", "Jeruk", "Pisang");  // array biasa
$harga = array("Apel" => 3000, "Jeruk" => 4000, "Pisang" => 2000);  // array asosiatif

foreach ($buah as $item) {
  echo "$item ";
}
echo "<br>";

foreach ($harga as $key => $value) {
  echo "$key: $value <br>";
}

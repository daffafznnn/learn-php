<?php
$fruits = array("apple", "banana");

// Menambahkan elemen di akhir array
array_push($fruits, "cherry");
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => cherry )

// Menghapus elemen terakhir
array_pop($fruits);
print_r($fruits); // Output: Array ( [0] => apple [1] => banana )

// Menambahkan elemen di awal array
array_unshift($fruits, "kiwi");
print_r($fruits); // Output: Array ( [0] => kiwi [1] => apple [2] => banana )

// Menghapus elemen pertama
array_shift($fruits);
print_r($fruits); // Output: Array ( [0] => apple [1] => banana )

// Menyisipkan elemen di posisi tertentu
array_splice($fruits, 1, 0, "orange");
print_r($fruits); // Output: Array ( [0] => apple [1] => orange [2] => banana [3] => cherry )

// Menghapus elemen di posisi tertentu
array_splice($fruits, 1, 1);
print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => cherry )
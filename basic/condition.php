<?php

$nilai = 150;
$nama = "daffa";

if ($nilai <= 100) {
  if ($nama != "daffa") {
    echo "nama anda bukan daffa!";
  } else {
    echo "Hai daffa dengan nilai $nilai, anda belum lulus";
  }
} else {
  echo "Hai $nama selamat kamu lulus!";
}
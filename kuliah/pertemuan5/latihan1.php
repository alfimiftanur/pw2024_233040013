<?php
// 1. Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "February", "Maret"];
$mahasiswa = ["Alfi", 3.9, false];

// 2. Mencetak Isi Array
// Mencetak 1 Nilai Pada Array, Menggunakan Index
// Index Dimulai 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// Cetak semua isi Array
// var_dudmp() atau print()
// DIgunakan saat debugging
var_dump($hari);
echo("<br>");
print_r($bulan);
echo("<br>");
var_dump($mahasiswa);
echo "<hr>";

// 3. Memanipulasi Isi Array
// Menambah Isi Array
// Diakhir ; [ ]atau array_push
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo("<br>");
array_push($bulan,"April", "Mei");
print_r($bulan);
echo("<br>");

// Diawal : array_unshift()
array_unshift($mahasiswa, "233040013");
print_r($mahasiswa);
echo "<hr>";

// Menghapus Isi Array
//  Di belakang : array_pop()
//  Di awal    : array_shift()
array_pop($hari);
array_shift($bulan);
print_r ($hari);
echo("<br>");
print_r ($bulan);
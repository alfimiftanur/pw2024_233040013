<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r) {
    $pi = 3.14;
    return $pi * ($r **  2) ;
}
$radius = 10;
echo "Jari-jari  = ". $radius ." cm". "<br/>";
echo "Total Luas Lingkaran Adalah = ". hitungLuasLingkaran ($radius) . " cm<sup>2</sup>";

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r){
    $keliling =  2 * 3.14 * $r;
    return $keliling ;
}
$jari_jari = 20;
echo "Jari-jari  = ". $jari_jari ." cm". "<br/>";
echo "Total Keliling Lingkaran Adalah = ". hitungKelilingLingkaran ($jari_jari) . " cm";
echo "<hr>";


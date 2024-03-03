<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r) {
    $pi = 3.14;
    return $pi * ($r **  2) ;
}
echo "Jari-jari  =  10  cm <br/>";
echo "Total Luas Lingkaran Adalah = ". hitungLuasLingkaran (10) . " cm<sup>2</sup>";

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r){
    $keliling =  2 * 3.14 * $r;
    return $keliling ;
}
echo "Jari-jari  = 20 cm <br/>";
echo "Total Keliling Lingkaran Adalah = ". hitungKelilingLingkaran (20) . " cm";
echo "<hr>";


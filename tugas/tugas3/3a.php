<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r) {
    $pi = 3.14;
    echo "Jari-jari  =  $r  cm <br>";
    return $pi * ($r **  2) ;
}
echo "Total Luas Lingkaran Adalah = ". hitungLuasLingkaran (10) . " cm<sup>2</sup>";

echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r){
    $keliling =  2 * 3.14 * $r;
    echo "Jari-jari  = $r <br>";
    return $keliling ;
}
echo "Total Keliling Lingkaran Adalah = ". hitungKelilingLingkaran (20) . " cm";
echo "<hr>";


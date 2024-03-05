<?php
// Sisi kubus a = 9 sisi kubus b = 4
// hitung total volume kedua kubus

// $sisi_a = 9;
// $sisi_b = 4;
// $volume_a = $sisi_a * $sisi_a  * $sisi_a ;
// $volume_b = $sisi_b * $sisi_b * $sisi_b ; 
// echo "Volume Kubus A : ". $volume_a ."<br>";
// echo "Volume Kubus B : ". $volume_b . "<br>";

// $total_volume = $volume_a + $volume_b;
// echo "Total Volume Kubus A dan Kubus B adalah : $total_volume";

function total_volume_dua_kubus($a, $b){
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total_volume = $volume_a + $volume_b;
    return $total_volume;
    return $a * $a * $a + $b * $b * $b
}

echo "Total volume kubus A dan Kubus B adalah = ". total_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total volume kubus C dan Kubus D adalah = ". total_volume_dua_kubus(10, 15);
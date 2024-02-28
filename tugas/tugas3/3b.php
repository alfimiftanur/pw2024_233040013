<?php
function urutanAngka($angka) {
    $angka2 = 1; 
    for ($i = 1; $i <= $angka ; $i++) {
        for ($j = 1; $j <= $i; $j++) {
          echo "$angka2 ";
          $angka2++;
        }
        echo "<br>";
      }
}
urutanAngka(5);
?>
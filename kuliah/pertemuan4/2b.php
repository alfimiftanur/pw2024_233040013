<?php
for ($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= 5; $j++){
        echo "$j". " ";
    }
    echo "<br>";
}

echo "</br>";
for ($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "$i". " ";
    }
    echo "<br>";
}
?>
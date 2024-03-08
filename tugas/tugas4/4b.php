<?php
    $perangkat = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
    array_push ($perangkat, "Card Reader", "Modem");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php for ($i = 0; $i <= 5; $i++) {?>
        <li><?= $perangkat[$i];?></li>
        <?php }?>
    </ol>
    
    <h3>Macam-macam perangkat keras komputer baru</h3>
    
    <ol>
        <?php sort($perangkat);?>
        <?php foreach ($perangkat as $p) : ?>
        <li><?= $p;?></li>
        <?php endforeach?>
    </ol>
</body>
</html>
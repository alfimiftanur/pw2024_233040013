<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6a</title>
    <style>
    .number-item {
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
        border: 1px solid black;
        background-color: lightblue;
        margin: 3px;
        display: inline-block;
    }
    </style>
</head>
<body>

    <?php
        if(isset($_GET["angka"])):
            for ($i = $_GET["angka"]; $i >= 1; $i--)  :
                for($j = 1; $j <= $i; $j++)
                    echo "<div class='number-item'>" . $i . "</div>" . "\n";
                echo "<br>";
            endfor;
        endif;
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>
    <style>
        .row{
            display:flex;
        }
        .box{
            width: 50px;
            height: 50px;
            line-height:50px;
            text-align:center;
            font-size:15px;
            border:1px solid black;
            background-color:salmon;
        }
        .box.black{
            background-color: black;
        }
        .box.white{
            background-color: white;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 1; $i <= 5; $i++) { 
        echo '<div class ="row">';
        for ($j = 1; $j <= 5; $j++ ) { 
            if (($i + $j) %2 == 0) {
                echo '<div class="box black"></div>';
            }else {
                echo '<div class="box white"></div>';
            }
        }
        echo '</div>';
    }
    ?>  
</body>
</html>
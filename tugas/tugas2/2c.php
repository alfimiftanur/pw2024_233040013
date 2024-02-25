<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2c</title>
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
  </style>
</head>
<body>
  <?php
  for ($i = 10; $i >= 1; $i--){
    echo '<div class="row">';
    for($j = 1; $j <= $i; $j++ ){
      echo '<div class="box"> '.($j).'</div>';
    }
    echo "</div>";
  }
  ?>
</body>
</html>
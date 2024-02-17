<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1c</title>
  <style>
    .row{
      display:flex;
    }

    .col{
      width: 100px;
      height: 100px;
      line-height:100px;
      text-align:center;
      font-size:40px;
      border:1px solid black;
      background-color:salmon;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="col box-1">1</div>
    <div class="row">
      <div class="col box-2">2</div>
      <div class="col box-2">2</div>
  </div>
  <div class="row">
    <div class="col box-3">3</div>
    <div class="col box-3">3</div>
    <div class="col box-3">3</div>
  </div>
</body>
</html>
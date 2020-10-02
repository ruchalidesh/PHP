<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">
  body {
    background: #fff;
  }

  .wrapper {
    width: 300px;
    height: 100px;
    background: #D1D1D1;
    /* margin-left: 30px; */
    margin-left: 0px;
    margin-right: auto;
    text-align: center;

  }

  .time_date {
    width: auto;
    height: 20px;
    line-height: 40px;
    font-size: 30px;

  }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="time_date">
      <?php

$name="XYZ";
setcookie('user' ,$name,strtotime('+1 minute'));
echo "Name:".$name;


?>

    </div>
  </div>



</body>

</html>
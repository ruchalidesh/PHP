<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">
  body {
    background: #D1D1D1;
  }

  .wrapper {
    width: 500px;
    height: 500px;
    background: #fff;
    /* margin-left: 30px; */
    margin-left: auto;
    margin-right: auto;
    text-align: center;

  }

  .time_date {
    width: 470px;
    height: 120px;
    line-height: 40px;
    font-size: 30px;

  }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="time_date">
      <b>Asia/kolkata</b><br>
      <?php
    date_default_timezone_set("Asia/kolkata")."<br>";
    // echo date_default_timezone_get()."<br>";
    echo "Date:" ,date("d/M/Y")."<br>";
    echo "Time:" ,date(" h:i:sa")."<br>";

    $time=timezone_open("Asia/kolkata");
    echo "<pre>";
    print_r(timezone_location_get($time));
    echo "</pre>";

    // $t = timezone_location_get($time);
    // print_r($t);
    // echo $t['country_code'];


    // date_default_timezone_set("Asia/kolkata")."<br>";
    // $t=time();
    // // $t1=strtotime("+10 minutes");
    // $t1="1600954763"."<br>";
    // echo $t1;
    // if($t1 > $t)
    // {
    //   echo "code is valid";

    // }
    // else{
    //   echo "code is expire";
    // }
?>
    </div>
  </div>



</body>

</html>
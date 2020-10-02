<?php

$errors = array();
if(isset($_GET['submit']))
{
  $timezone=$_GET['timezone'];
  if(isset($_GET['timezone']))
  {
    date_default_timezone_get('timezone');
            echo "Date:" ,date("d/M/Y")."<br>";
            echo "Time:" ,date(" h:i:sa")."<br>";
  }
}
?>


<!DOCTYPE html>
<html>

<head>

</head>

<body>
  <form action="timezone_drop.php" method="get">
    <div class="form-group">
      <label for="timezone">Choose a timezone:</label>
      <select class="form-control" name="timezone" id="">
        <opyion selected value="">please select the timezone</option>
          <option value="Asia/kolkata">Asia/kolkata</option>
          <option value="America/Chicago">America/Chicago</option>
          <option value="Asia/Dubai">Asia/Dubai</option>
          <option value="Europe/Brussels">Europe/Brussels</option>
      </select>
      <br><br>
      <input type="submit" value="Submit">
  </form>
  </div>



</body>

</html>
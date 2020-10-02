<?php

session_start();

if(isset($_SESSION['email']))
{
  echo "Welcome "."<br>";
  echo $_SESSION['email']."<br>";
  ?>
<br><br>
<a href="logout.php"><button>logout</button></a>
<?php 
}

else{
  header("location: login.php");
  echo "user not logged in,please login";
}

?>
<?php

session_start();

if(isset($_SESSION['username']))
{
  echo "Name =>".$_SESSION['username']."<br>";
  echo "Address =>".$_SESSION['address'];
}
else{
  echo "username is not set";
}

?>
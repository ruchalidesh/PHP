<?php 
if (isset($_GET['submit']))
{
  echo $_GET['name'];
  
}
$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['password'];

echo "Hello " . $name . "<br>";
    echo "Your email is ".$email;
?>
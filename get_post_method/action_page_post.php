<?php 

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
}
   if(empty($email))
   {
       echo "email is requried";
   }
   if(empty($password))
   {
       echo "password is requried";
   }
   else
   {
    echo "Hello " . $name . "<br>";
    echo "Your email is ".$email;
   }
   
?>
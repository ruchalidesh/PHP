<?php

if(isset($_POST['submit'])){
  $email="abc@gmail.com";
  $password="1234";
  if($email == $_POST['email'] && $password == $_POST['password']){
    session_start();
    $_SESSION['email'] = $email;
    echo 'login successfully';
    header("location:home.php"); 
}
else{
  echo 'invalid,please try again';
}
}

?>
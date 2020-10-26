<?php

$servername='localhost';
$user='root';
$password='';
$dbname='student';
$conn=mysqli_connect($servername,$user,$password,$dbname);

if($conn){
  echo "connection successfully";
}
else{
  die("connection failed".mysqli_connect_error());
}
?>
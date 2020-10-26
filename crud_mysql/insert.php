<?php

include("connection.php");

$query ="insert into student values ('xyz','xyz@gmail.com','pune','cse')";
mysqli_query($conn,$query);
?>
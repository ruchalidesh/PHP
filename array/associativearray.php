<?php

$person1=array(
  'name'=>'Ruchali',
  'last name'=>'black',
);

$person2=array(
  'name'=>'Akshada',
  'last name'=>'pink',
);

// print array
echo "<pre>";
var_dump($person1,$person2);
echo "</pre>";

$users=array($person1,$person2);
var_dump($users);

// print particular values
echo "your name is =>". $person1['name'];


?>
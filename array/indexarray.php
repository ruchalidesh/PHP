<?php

// index array
$names=array("Ruchali","Akshada","Vijeta");
echo "<pre>";
var_dump($names);

// adding values
$names[3]="Pooja";
echo "<pre>";
var_dump($names)."<br>";

// print particular values
echo $names[2]."<br>";

// count array length
$arraylength =count($names);
echo $arraylength;

// print array
for($i=0;$i<$arraylength;$i++)
{
  echo "<br>".$names[$i]."<br>";
}



?>
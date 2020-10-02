<?php

$emp=[
  [1,"abc","manager",50000],
  [2,"xyz","salesman",20000],
  [3,"pqr","devloper",60000]

];
// particular value
echo $emp[0][1]."<br>";


for($row=0;$row<3;$row++)
{
  for($col=0;$col<3;$col++)
  {
    echo $emp[$row][$col]." ";
  }
  echo "<br>";
}
echo "<pre>";
var_dump($emp);
echo "</pre>";





?>
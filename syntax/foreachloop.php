<!-- This loop is used to iterate over arrays. For every counter of loop, an array element is assigned and the next counter is shifted to the next element. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $names =array('rucha','akshu','archana','priyanka');
  foreach($names as $name){
    echo $name."<br>";
  }
  ?>
</body>
</html>
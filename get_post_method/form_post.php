
<?php 

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  

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
  }
   else{

  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>php Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h2> Basic form</h2>
    <form action="form_post.php" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type=name class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" name="remember"> Remember me</label>
      </div>
      <input type="submit" class="btn btn-primary" value="submit" name="submit">
    </form>
  </div>

</body>

</html>
<?php
   }
?>
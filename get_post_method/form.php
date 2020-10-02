<?php 
    $errors = array();
    if( isset( $_GET['submit'] ) ){

        $name = $_GET['name'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        $state =$_GET['state'];
        $state =$_GET['textarea'];
        $errors = [];
       
        if ( empty($name) ){
             array_push($errors, 'name');
        }
        if( empty($email) ){
             array_push($errors, 'email');
        }
        if( empty($password) ){
            array_push($errors, 'password');
        }
        if( empty($state) ){
          array_push($errors, 'state');
      }
        
        if( empty($textarea)){
          array_push($errors, 'textarea');
        }
        str_word_count($textarea);
          if (strlen($textarea) > 10) 
          {   
              echo $textarea;
              setcookie('name',$name,strtotime('+10 minutes'));
              setcookie('email',$email,strtotime('+10 minutes'));
              setcookie('password',$password,strtotime('+10 minutes'));
              setcookie('state',$state,strtotime('+10 minutes'));
              setcookie('textarea',$textarea,strtotime('+10 minutes'));
              
      }
      else{
        echo "words should be greater than 100";
      }
    
    print_r($errors);
        if( count($errors) == 0 ){
            
            echo "Hello=> " . $name . "<br>";
            echo "Your email is =>".$email;
            echo "state=>".$state;
            echo "about yourself".$textarea;
        }
  }
   
    if( !( isset($_GET['submit']) ) || count($errors) > 0 ){

    
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
    <h2>Basic form</h2>
    <div class="row">
      <div class="col-md-6">
        <form action="form.php" method="GET">
          <div class="form-group">
            <label for="name">Name:</label>
            <span style="color:red;"><?php if( in_array('name', $errors) ){ echo 'name is required'; } ?></span>
            <input type=name class="form-control" value="<?php if( isset( $_GET['name'] )){ echo $_GET['name']; } ?>"
              id="name" placeholder="Enter name" name="name">
          </div>


          <div class="form-group">
            <label for="email">Email:</label>
            <span style="color:red;"><?php if( in_array('email', $errors) ){ echo 'email is required'; } ?></span>
            <input type="email" class="form-control"
              value="<?php if( isset( $_GET['email'] )){ echo $_GET['email']; } ?>" id="email" placeholder="Enter email"
              name="email">
          </div>


          <div class="form-group">
            <label for="password">Password:</label>
            <span style="color:red;"><?php if( in_array('password', $errors) ){ echo 'password is required'; } ?></span>
            <input type="password" class="form-control"
              value="<?php if( isset( $_GET['password'] )){ echo $_GET['password']; } ?> " id="password"
              placeholder="Enter password" name="password">
          </div>


          <label for="state">select city:</label>
          <select name="state" id="state" class="form-control">
            <option value="maharastra"
              <?php if( isset( $_GET['state'] ) && $_GET['state']== 'maharastra'){ echo 'selected'; } ?>>Maharastra
            </option>

            <option value="gujrat"
              <?php if( isset( $_GET['state'] ) && $_GET['state']== 'gujrat'){ echo 'selected'; } ?>>
              Gujrat</option>

            <option value="panjab"
              <?php if( isset( $_GET['state'] ) && $_GET['state']== 'panjab'){ echo 'selected'; } ?>>
              Panjab</option>

            <option value="bihar" <?php if( isset( $_GET['state'] ) && $_GET['state']== 'bihar'){ echo 'selected'; } ?>>
              Bihar</option>
          </select>

          <div class="form-group">
            <label for="textarea">About Yourself:</label>
            <span
              style="color:red;"><?php if( in_array('textarea', $errors) ){ echo 'words should be greater than 100'; } ?></span>
            <input type="textarea" rows="6" cols="50" class="form-control"
              value="<?php if( isset( $_GET['textarea'] )){ echo $_GET['textarea']; }?> " id=" textarea"
              placeholder="write in 100 words" name="textarea">
          </div>

          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>

          </div>
          <input type="submit" class="btn btn-primary" value="submit" name="submit">
        </form>
      </div>
    </div>
  </div>

</body>

</html>
<?php
  }
?>
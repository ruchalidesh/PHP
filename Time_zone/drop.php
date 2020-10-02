<?php 

    $errors = array();

    echo "<pre>";
    print_r(timezone_identifiers_list());
    echo "</pre>";
    if( isset( $_GET['submit'] ) ){
        
       
        $time = $_GET['time'];
        $time = $_GET['time'];
      
       
        if( empty($time) ){
         
            array_push($errors, 'time');
            
        }
        
        if( isset( $_GET['Asia/kolkata'] )){

          array_push($time, $_GET['Asia/kolkata']);        
      }
    }
     
      if( isset( $_GET['America/Chicago'] )){

          array_push($time, $_GET['America/Chicago']);        
      }
    
        if( count($errors) == 0 ){
           
            // date_default_timezone_set("Asia/kolkata")."<br>";
            // echo date_default_timezone_get()."<br>";
            echo "Date:" ,date("d/M/Y")."<br>";
            echo "Time:" ,date(" h:i:sa")."<br>";
        
            // $time=timezone_open("Asia/kolkata");
            // echo "<pre>";
            // print_r(timezone_location_get($t1));
            // echo "</pre>";

            // date_default_timezone_set("America/Chicago")."<br>";
            // // echo date_default_timezone_get()."<br>";
            // echo "Date:" ,date("d/M/Y")."<br>";
            // echo "Time:" ,date(" h:i:sa")."<br>";
        
            // $time=timezone_open("America/Chicago");
            // echo "<pre>";
            // print_r(timezone_location_get($t2));
            // echo "</pre>";
      
      }

    if( !( isset($_GET['submit']) ) || count($errors) > 0 ){

    
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-3">

    <div class="row">
      <div class="col-md-4">
        <form action="drop.php" method="get">


          <div class="form-group">
            <span style="color:red;"><?php if( in_array('time', $errors) ){ echo 'required'; } ?> </span>
            <label for="time"></label>
            <select class="form-control" name="time" id="">
              <option selected value="">Select timezone</option>
              <option <?php if( isset($_GET['time']) &&  $_GET['time'] == 'Asia/kolkata'){ echo 'selected'; } ?>
                value="Asia/kolkata">Asia/kolkata</option>
              <option <?php if( isset($_GET['time']) &&  $_GET['time'] == 'America/Chicago'){ echo 'selected'; } ?>
                value="America/Chicago">America/Chicago</option>
            </select>
            <small id="" class="form-text text-muted">Timezones</small>
          </div>


          <input class="btn btn-primary" type="submit" value="submit" name="submit">
        </form>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
<?php 
    }
?>
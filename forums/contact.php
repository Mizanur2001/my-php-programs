<?php
   $submit=false;
   $submit_error=false;
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $desc = $_POST['desc'];
        
      
      // Connecting to the Database
      $servername = "sql103.epizy.com";
      $username = "epiz_28842284";
      $password = "jPMNR6AvHa";
      $database = "epiz_28842284_contacts";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);

      
    
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contacts_mizanur` (`name`, `email`, `concern`, `dt`) VALUES ('$name', '$email', '$desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if($result){
        $submit=true;
        }
        else{
        $submit_error=true;
        }

      }

    }

    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-    +0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <link rel="icon" type="image/x-icon" href="img/logo_vw.ico">
    <title>Contact Us</title>
    <style>
        body{
             background: url("img/customer-service.jpg") no-repeat center center/cover;
            }
    </style>
  </head>
  <body>
<?php   require "partial/dbconnect.php"?>
  <?php require "partial/nevber.php"?>

  
<?php
if ($submit) {
 echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> Success!</strong> Your entry has been submitted successfully!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($submit_error) {
  echo
  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong> Error!</strong>  We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>
 

    <h2 class='text-center mt-3'>Your concerns</h2>
    <br>
    <div class="contener" style=" display: flex; flex-direction: column; align-items: center;">
    
    <form action ="/contact.php" method="post" >
  <div class="form-grup col-md-20">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"  placeholder="Name">
  </div>
  <br>
  <div class="form-grup col-md-20">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"  placeholder="Email Id"> 
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
   <br>
  <div class="form-grup col-md-20">
    <label for="desc" class="form-label">Description</label>
    <textarea class="form-control" name="desc" id="desc" cols="20" rows="10"  placeholder="Description"></textarea> 
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    
    </div>
<br><br><br><br><br>
<?php require "partial/footer.php" ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
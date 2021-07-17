<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>LOGIN</title>
  </head>
  <body background="https://source.unsplash.com/1600x900/?nature,water">

  <?php require "partial/dbconnect.php"?>

  <?php require "partial/nevber.php"?>
  <style>
    #br{
      min-height:680px;
    }
    </style>

  

    <?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
     

     $email=$_POST["email"];
     $password=$_POST["password"];

     //checking login data 
     $sql="SELECT * FROM `users` WHERE email ='$email' AND password ='$password'";
     $result=mysqli_query($connect,$sql);
     $num=mysqli_num_rows($result);

        if ($num==1) {
          //taking user name from data base..
          $unsql="SELECT * FROM `users` WHERE email ='$email'";
           $unresult=mysqli_query($connect,$unsql);
          $row=mysqli_fetch_assoc($unresult);
          $user_name=$row['user_name'];
          $user_slno=$row['sl_no'];
          //Loged in 
          session_start();
          $_SESSION['loggedin']=true;
          $_SESSION['email']=$email;
          $_SESSION['user_name']=$user_name;
          $_SESSION['user_slno']=$user_slno;

          header("location:index.php?login=true");
        }
        else{
          echo
          '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> User name or Password not matched
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }

    }
    
  ?>
  <br><br>
    <h3 class="text-center"> Please Login ...</h3>
    

    <br>

    <div class="contener" style=" display: flex; flex-direction: column; align-items: center;" id="br">
    
    <form action ="/joy/login.php" method="post" >
  <div class="form-grup col-md-20">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name = "email" aria-describedby="emailHelp"placeholder="Enter Email">
  </div>
  <br>
  <div class="form-grup col-md-20">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name= "password"  placeholder="Enter password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary ">Login</button>
</form>
    
    </div>

    <?php require "partial/footer.php" ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>
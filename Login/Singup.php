
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Singup</title>
  </head>
  <body background="reinhart-julian-pVDnlvCNPpw-unsplash.jpg">
    <?php  require '_Navber/Navber.php'; ?>
   
<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
  $Cpassword = $_POST['Cpassword'];

  require 'Database.php';

  $sqli = "SELECT * from `login_data` where `Email`='$Email'";
  $result2 =mysqli_query($connect,$sqli);
  $num2 = mysqli_num_rows($result2);
  

 if($num2==0){

       if ($Password==$Cpassword) {
          //$hash = password_hash($Password,PASSWORD_DEFAULT);
         // echo $hash;
         $sql =" INSERT INTO `login_data` (`Email`, `Password`) VALUES ( '$Email', '$Password')";
            $result = mysqli_query($connect,$sql);
          
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Successful!</strong> Your account is created and you can login..........
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
          
        }

        else{
       
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Sorry!! </strong>  Password do not matched........
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
       
        }
 

}
else {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!! </strong> Email id Already Exists ........
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

}

}


?>

  
    <form action ="/login/Singup.php" method = "post"> 

    <Dev class="contener" style= " display: flex; flex-direction: column; align-items: center;">
  <br>
    <h4 class="text-center">Singup to Virtual World </h4>
    <br>
    <form>
  <div class="form-grop col-md-20">
    <label for="email" class="form-label">Email address</label> 
    <input type="email" maxlength= "30" class="form-control" id="email" name = "Email"  aria-describedby="emailHelp">
    
  </div>
  <br>
  
    <div class="form-grop col-md-20">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control"  name = "Password"  id="password">
  </div>
  <br>

  <div class="form-grop col-md-20">
    <label for="cpassword" class="form-label">Conferm Password</label>
    <input type="password" class="form-control" name = "Cpassword" id="cpassword" >
    <div id="emailHelp" class="form-text">Type The same password here.</div>

  </div>
  <br>
  
  <button type="submit" class="btn btn-primary">Singup</button>
</form>
    
    
    
    </Dev>

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
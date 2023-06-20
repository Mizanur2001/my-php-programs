<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Singup</title>
</head>

<body background="https://source.unsplash.com/1600x900/?nature,water">
 <?php   require 'partial/dbconnect.php';?>
    <?php  require 'partial/nevber.php'; ?>

   <?php
   $alert=false;
   if($_SERVER['REQUEST_METHOD']=="POST")
   {
   
   $user_name=$_POST['name'];
   $user_email=$_POST['email'];
   $password=$_POST['password'];
   $cpassword=$_POST['cpassword'];

   $existsql="SELECT * FROM `users` WHERE email='$user_email'";
   $result=mysqli_query($connect,$existsql);
   $num= mysqli_num_rows($result);

    if($num==1){
    $alert=true;
    $showerror="Email alrady in use";
    }

   else{

       if ($password==$cpassword)
       { 
         //sql quare have to run here
        $sql="INSERT INTO `users` ( `user_name`, `email`, `password`, `time`) VALUES
         ('$user_name', '$user_email', '$password', current_timestamp())";
        $result=mysqli_query($connect,$sql);
        
        header("location:index.php?singup=true");
       }

       else
       { $alert=true;
         $showerror="Password not matched";
       }

   }
   
   


   }
   
   ?>

   <?php
    if ($alert) {
      echo
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Error! </strong> '. $showerror .'
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
   
   
   ?>

    <form action="/forums/singup.php" method="post">

        <div class="contener" style=" display: flex; flex-direction: column; align-items: center;">
            <br>
            <h4 class="text-center">Singup to Virtual World </h4>
            <br>
            <form>

                <div class="form-grop col-md-20">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" maxlength="30" class="form-control" id="fmane" name="name"
                        aria-describedby="emailHelp" placeholder="Enter Full Name">

                </div>
                <br>

                <div class="form-grop col-md-20">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" maxlength="30" class="form-control" id="email" name="email"
                        aria-describedby="emailHelp" placeholder="Enter Email">

                </div>
                <br>

                <div class="form-grop col-md-20">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Enter password">
                </div>
                <br>

                <div class="form-grop col-md-20">
                    <label for="cpassword" class="form-label">Conferm Password</label>
                    <input type="password" class="form-control" name="cpassword" id="cpassword"
                        placeholder="Enter conferm password">
                    <div id="emailHelp" class="form-text">Type The same password here.</div>

                </div>
                <br>

                <button type="submit" class="btn btn-primary">Singup</button>
            </form>



        </div>
        <br>
        <?php require "partial/footer.php" ?>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>
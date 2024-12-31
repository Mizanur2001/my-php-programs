<!--PHP Part-->

<?php

$login=false;

if ($_SERVER['REQUEST_METHOD']=="POST") {
    $u_name=$_POST['u_name'];
    $password=$_POST['password'];
    require "partial/db_connect.php";


    $sql = "SELECT * from `teachers`where  `u_name`='$u_name' AND `Password`='$password'";
    $result = mysqli_query($connect,$sql);
    $num =mysqli_num_rows($result);
    $row=mysqli_fetch_assoc($result);

    if ($num==1 && $row['sl_no'] <= 10 && $row['sl_no'] != 1) {
        
            session_start();
            $_SESSION['u_name']=$u_name;
            $_SESSION['Loggedin']=true;
            $_SESSION['password']=$password;
            $_SESSION['sl_no']=$row['sl_no'];
            header("location:s1_s2_s3.php");
    }
    else if($num==1 && $row['sl_no']==1) {
        
            session_start();
            $_SESSION['u_name']=$u_name;
            $_SESSION['Loggedin']=true;
            $_SESSION['password']=$password;
            $_SESSION['sl_no']=$row['sl_no'];
            header("location:class_teacher.php");
    }
    else if($num==1 && $row['sl_no']==11) {
        
            session_start();
            $_SESSION['u_name']=$u_name;
            $_SESSION['Loggedin']=true;
            $_SESSION['password']=$password;
            $_SESSION['sl_no']=$row['sl_no'];
            header("location:marksheet_search.php");
    }
    else if($num==1 && $row['sl_no']==12) {
        
            session_start();
            $_SESSION['u_name']=$u_name;
            $_SESSION['Loggedin']=true;
            $_SESSION['password']=$password;
            $_SESSION['sl_no']=$row['sl_no'];
            header("location:Student_classes.php");
    }
    else {
       $login=true;
    }
      
      
}


?>



<!-- HTML Part -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/login.png">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/head_foot.css">
    <link rel="stylesheet" media="screen and (max-width: 780px)" href="css/tab_head_foot.css">
    <link rel="stylesheet" media="screen and (max-width: 460px)" href="css/phone_head_foot.css">
    <link rel="stylesheet" media="screen and (max-width: 780px)" href="css/tab_login.css">
    <link rel="stylesheet" media="screen and (max-width: 460px)" href="css/phone_login.css">
</head>

<body>
    <?php require "partial/header.php";?>


    <?php

          if ($login) {
          echo 
          '<div class="alert alert-danger alert-dismissible fade show my-0" role="alert">
             <strong>Sorry:(</strong> invalid credentials
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          }


    ?>


    <div id="container">
        <h1>Login <img src="img/login_l.png" alt="login" id="login_img"></h1>
        <form action="login.php" method='post'>
            <div id="form-group">
                <img src="img/user.png" alt="User" class="img_gof">
                <label for="Name">User Name :) </label>
                <input type="text" id="name" name="u_name" placeholder="User Name">
                <img src="img/passwosd.png" alt="passwosd" class="img_gof">
                <label for="Name">Password:) </label>
                <input type="password" id="password" name="password" placeholder="Passwosd">
                <button class="btn">Login</button>
            </div>
        </form>
    </div>

    <?php require "partial/footer.php";?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>
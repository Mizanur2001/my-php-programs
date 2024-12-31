<!--PHP part to check login or not-->
<?php

 session_start();
 if (($_SESSION['Loggedin']==false)&&(!isset($_SESSION['u_name']))&&(!isset($_SESSION['password']) )) {
   header("location:login.php");
   exit;
 }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>S1 S2 S3</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/head_foot.css">
    <link rel="stylesheet" media="screen and (max-width: 780px)" href="css/tab_head_foot.css">
    <link rel="stylesheet" media="screen and (max-width: 460px)" href="css/phone_head_foot.css">
    <link rel="stylesheet" href="css/s1_s2_s3.css">
    <style>
      @media (max-width:340px)  {
        #container {
         margin: 5px;
         overflow: auto;
        }
    }
    </style>
</head>

<body>
    <?php require "partial/header.php"?>

    <div id="container">
        <div class="box">
            <?php
            echo
            '<button class="btn"> <a href="enter_marks.php?s='. 1 .'">S1 </a> </button>
            <button class="btn"> <a href="enter_marks.php?s='. 2 .'">S2 </a> </button>
            <button class="btn"> <a href="enter_marks.php?s='. 3 .'">S3 </a> </button>';
            ?>
        </div>  
    </div>

    <?php require "partial/footer.php" ?>
</body>

</html>
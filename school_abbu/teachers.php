<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>Teachers Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/head_foot.css">
    <link rel="stylesheet" href="css/teachers.css">
    <link rel="stylesheet" media="screen and (max-width: 780px)" href="css/tab_head_foot.css">
    <link rel="stylesheet" media="screen and (max-width: 460px)" href="css/phone_head_foot.css">
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
    <?php require "partial/header.php";?>

    <div id="container">
        <?php
         require "partial/db_connect.php";
         $sql="SELECT * FROM `teachers` where `sl_no` = '1'";
         $result=mysqli_query($connect,$sql);
         while ($row=mysqli_fetch_assoc($result)) {
             $name= $row['name'];
             $subject=$row['subject'];
             $id=$row['sl_no'];
        echo
        '<div class="box" id="classteacher">
            <h1>Class Teacher</h1>
            <p>Teacher\'s Name:- '.$name.'</p>
            <div class="button">
                <button class="btn"><a href="login.php">Enter</a></button>
            </div>
        </div>';
         }
        ?>

        <?php

         require "partial/db_connect.php";
         $sql="SELECT * FROM `teachers` where `sl_no`!='1'";
         $result=mysqli_query($connect,$sql);
         while ($row=mysqli_fetch_assoc($result)) {
             $name= $row['name'];
             $subject=$row['subject'];
             $id=$row['sl_no'];
        echo
        '<div class="box">
            <h1>'.$subject.'</h1>
            <p>Teacher\'s Name:-'.$name.'</p>
            <div class="button">
                <button class="btn"><a href="login.php">Enter</a></button>
            </div>
        </div>';
        }
        ?>

    </div>


    <?php require "partial/footer.php";?>
</body>

</html>
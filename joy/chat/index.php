<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $message=$_POST["message"];
        date_default_timezone_set('Asia/Kolkata');
        $date = date("h:i");

        require "db_connect.php";
        $sql = "INSERT INTO `chat_data` ( `message`, `sender_id`, `receiver_id`, `time`) VALUES ( '$message', '0', '0', '$date')";
        $result = mysqli_query($connect,$sql);
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chatting For #BTS-M</title>
    <script defer src="http://localhost:8000/socket.io/socket.io.js"></script>
    <script defer src="client.js"></script>
</head>

<body>
    <div class="logo">
        <img src="chat-logo.png" alt="">
        <h2>James</h2>
    </div>

    <div class="cointainer">
        <?php
           require "db_connect.php";
           $sql_f="SELECT * from `chat_data`  WHERE `sender_id`=0";
           $result = mysqli_query($connect,$sql_f);
           
         while ($row=mysqli_fetch_assoc($result)){
            $message=$row['message'];
            $time=$row['time'];
            echo
            '<div class="message-left"> '.$message.' <div class="time">'.$time.'</div> </div>';
         }
        ?>

        <?php
          require "db_connect.php";
          $sql_f="SELECT * from `chat_data`  WHERE `receiver_id`=0";
          $result = mysqli_query($connect,$sql_f);

          while ($row=mysqli_fetch_assoc($result)){
          $message=$row['message'];
          $time=$row['time'];
          echo
          '<div class="message-right">'.$message.'<div class="time">'.$time.'</div></div>';
          }
        ?>
    </div>

     <form action="index.php" id="send-container" method="POST">
         <input type="text" name="message" id="message" placeholder="Type your message">
          <button class="btn" type="submit">Send</button>
      </form>

</body>

</html>
<?php

$servername = "localhost";
 $username = "root";
 $password_database = "";
 $database = "bahmrs";
 $connect =mysqli_connect($servername,$username,$password_database,$database);
 
 if (!$connect) {
    
     die ("Sorry! we are Unable to Connect the Database<br>");
 }




?>
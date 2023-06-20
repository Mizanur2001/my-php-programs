<?php
 $sarvername= "localhost";
 $username= "root";
 $password ="";

 $connect = mysqli_connect($sarvername,$username,$password);

   if ($connect) {
    echo "Successfully Connected to the SQLI server<br>";
     }
    else {
        echo "Sorry we are unable to connect the SQLI server<br>";
    }

  $sqli = "create database Mizanur";

 $dbms= mysqli_query ($connect,$sqli);

 if ($dbms) {
     echo "Congratulalions!! your DBMS successfully created";
 }
 else {
     echo "Sorry We are unable to create the DBMS because of "
      . mysqli_error($connect);
 }

  


?>
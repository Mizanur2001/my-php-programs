<?php
$sarvername="localhost";
$username="root";
$DBMS_password ="";
$DBMS="#password";

$connect=mysqli_connect($sarvername,$username,$DBMS_password,$DBMS);

if (!$connect) {
    echo"Sorry!! We are unable to connect Database....";
}

?>
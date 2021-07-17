<?php
$servername="localhost";
$username="root";
$db_password="";
$database="forums_virtual_world";

$connect=mysqli_connect($servername,$username,$db_password,$database);
if (!$connect) {
    die("Sorry we failed to connect the DataBase Because ". mysqli_connect_error());
}

?>
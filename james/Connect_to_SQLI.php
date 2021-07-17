<?php
echo "Welcome to the Connection of SQLI server<br>";

$servername= "localhost";
$username ="root";
$password ="";

$connect = mysqli_connect($servername,$username,$password);
if (!$connect) {                                                   
    echo "Sorry We are unable to connect to the SQLI server";// . mysqli_error($connect);
}
else {
    echo "We Are Succesfully connected to SQLI server";
}

?>
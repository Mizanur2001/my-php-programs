<?php
$servername ="localhost";
$username ="root";
$password ="";
$DBMS ="contacts";

$connect =mysqli_connect($servername,$username,$password,$DBMS);

if ($connect) {
    echo "Connected to The SQLI server<br>";
}

else {
    echo "Sorry! we are unable to Connect the SQLI server<br>";
}
    

?>
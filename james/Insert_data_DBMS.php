<?php

$servername="localhost";
$username ="root";
$password ="";
$DBMS = "Mizanur";

$connect=mysqli_connect($servername,$username,$password,$DBMS);

if ($connect) {
    echo"Connect to the SQLI server<br>";
}
else {
    echo "Sorry we are unable to connect to the Sqli server<br>";

}
$name="Mizanur Rahaman";
$age ="20";
$id ="owner";
$phone ="9475149702";

$Insert = "INSERT INTO `Empoyees` (`Name`, `Age`,`ID`,`Phone`,`SL_NO`) VALUES ('$name','$age','$id',
'$phone','6')";

$result = mysqli_query($connect , $Insert);

if ($result) {

    echo"The record has been entered successfully <br>";
}
else {
    echo "Sorry The record was not entered successfully because ". mysqli_error($connect);

}










?>
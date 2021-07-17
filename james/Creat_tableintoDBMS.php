<?php
$servername ="localhost";
$username ="root";
$password ="";
$DBMS ="Mizanur";

$connect =mysqli_connect($servername,$username,$password,$DBMS);

if ($connect) {
    echo "Connected to The SQLI server<br>";
}

else {
    echo "Sorry! we are unable to Connect the SQLI server<br>";
}

$create_table ="CREATE TABLE `Empoyees` ( `SL_NO` INT(6) NOT NULL AUTO_INCREMENT ,
 `Name` VARCHAR(25) NOT NULL ,`AGE` int(6) NOT NULL , `ID` varchar(10)NOT NULL, 
 `phone`varchar(12) not null, PRIMARY KEY (`SL_NO`))";

$result = mysqli_query($connect, $create_table);

if ($result) {
    echo "Your Table created successfully";
}
else {
    echo "Sorry Fail to creating The table because " . mysqli_error($connect);
}



?>
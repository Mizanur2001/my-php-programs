<?php
include '_DBMS_connect.php';

$sql = "SELECT * from `contacts_mizanur`";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

echo $num ;
echo " Records found in the DataBase<br>";


if ($num>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br> SL_NO:- ". $row['sno']." <br> Name:-  ". $row['name']." <br> Email:-  ". $row['email'].
        " <br> Concern:-  ". $row['concern']." <br> Date:- ". $row['dt'];
         echo " <br> " . "<br>";
    }
}
else{
    echo "No datata found sorry<br>";
}



?>
<?php
$servername ="localhost";
$username = "root";
$password ="";
$database ="contacts";

$connect = mysqli_connect($servername,$username,$password,$database);
$sql="SELECT * FROM `contacts_mizanur`";
$result = mysqli_query ($connect,$sql);

if ($result) {
    
    echo "Successfuly Connected To Database<br>";
}

else {
    echo "Sorry We are Unable connect to database<br>";
}
 

   // READIND DATA FROM DATABASE..................


   /*$row = mysqli_fetch_assoc($result);
    echo var_dump($row);
    echo "<br>"*/

    /*

   $num = mysqli_num_rows($result);

   echo "$num Records found in the database...";

   if ($num>0) {
       while ($rows=mysqli_fetch_assoc($result)) {
           echo "<br>Sl.No". $rows['sno'] . "<br>Email" . $rows['email'] . "<br>Name" .$rows['name'] .
           "<br>Concern" . $rows['concern'];
       }
   }
 else {
     echo "No data found in the Database";
 }

 */

 // FETCH PATICULAR DATA FROM DATABASE........ . ..........
 /* 
 $sqlfp="SELECT * FROM `contacts_mizanur` WHERE 
 `email`='jameslev2001@gmail.com'";

 $result2 = mysqli_query($connect,$sqlfp);

 $num=mysqli_num_rows($result2);

 if ($num>0) {
    while ($rows=mysqli_fetch_assoc($result2)) {
        echo "<br>Sl.No". $rows['sno'] . "<br>Email" . $rows['email'] . "<br>Name" .$rows['name'] .
        "<br>Concern" . $rows['concern'];
    }
}
else {
  echo "No data found in the Database...";
}
     */


 //UPDATE DATA ON THE DATABASE.....................................


 /*
 $sqlu = "UPDATE `contacts_mizanur` SET `name` = 'NO name Entered by User' WHERE
 `email` = ''" ;

 $result3=mysqli_query($connect,$sqlu);

 $num =mysqli_num_rows($result);

 echo "$num Record are found in the database<br>";

 if($num>0){
     while ($rows=mysqli_fetch_assoc($result)) {
        echo "<br>Sl.No:-". $rows['sno'] . "<br>Email:-" . $rows['email'] . "<br>Name:-" .$rows['name'] .
        "<br>Concern:-" . $rows['concern'];
     }
 }

 else {
     echo "Sorry! we are unable to update <br>";
 }
  */

 //DELETE DATA FROM DATABASE .............................................

   $sqld = "DELETE FROM `contacts_mizanur` WHERE `contacts_mizanur`.`name` = 'delete'";
   $result4 = mysqli_query($connect,$sqld);

  if ($result4) {
      echo "Successfuly!! Delete The data from data base.....";
  }
  else{
      echo "sorry we are unable to delete Data from database.....";
  }


?>

<?php
/*
include 'Database.php';
$p=12345678;
$e='jameslev2001@gmail.com';

echo$p;
echo$e;

$sql = "SELECT * from `login_data`where `Password`='$p'AND `Email`='$e'";

$result = mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

echo $num ;
echo " Records found in the DataBase<br>";


if ($num>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br> SL_NO:- ". $row['Sl_NO']." <br> Email:-  ". $row['Email'].
        " <br> Password:-  ". $row['Password']." <br> Date:- ". $row['Date'];
         echo " <br> " . "<br>";
    }
}
else{
    echo "No datata found sorry<br>";
}

*/
echo "This is test page<br>";

?>

<?php
require 'Database.php';
$sql = "SELECT * from `login_data`where  `Email`='Jameslev2001@gmail.com'";
$password='12345678';
$result = mysqli_query($connect,$sql);
$num =mysqli_num_rows($result);
if($num==1){
while ($row=mysqli_fetch_assoc($result)) {
    if(password_verify($password, $row['Password'])){

   echo "WElCOME<br>";
    }
      
      else {
       echo "It is here.....<br>";
       echo var_dump( password_verify($row['Password'],$password));
       echo $row['Password'];
      }
    }
}
else {
    echo "Error<br>";
}

?>
<?php
session_start();

if (isset($_SESSION['Username'])) {
    
    echo "Welcome to virtual world " . $_SESSION['Username'] . "<br>" . "<br>";
    
    echo "Your User Nane is " . $_SESSION['Username'];
    echo "<br>";
    echo "Your pass Word is " .$_SESSION['Password'];

}    
else{

    echo "You are Loged out Dude!! ..... <br> Please Log in to continue ......";
}





?>
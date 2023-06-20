<?php

session_start();
$_SESSION['Username'] = "Mizanur";
$_SESSION['Password'] = "12345678";
echo "Hello " . $_SESSION['Username'] ." You are loged in <br>";












?>
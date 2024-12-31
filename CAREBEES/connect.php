<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carebees";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
} elseif (!mysqli_select_db($conn, $dbname)) {
    die("Database Selection Failed: " . mysqli_error($conn));
} else {
    // echo "Database Selected Successfully<br>";

}
?>
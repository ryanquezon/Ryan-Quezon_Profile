<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword ="";
$dbName = "quezon_register";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName );
If (!$conn) {
die("Something went wrong!");
}

?>
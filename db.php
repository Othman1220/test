<?php

require "config/constants.php";

$servername = HOST;
$username = USER;
$password = PASSWORD;
$db = "sfe";


// Create connection
$con = mysqli_connect($servername, $username, $password,$db);
//$con->mysqli_set_charset('utf_8');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
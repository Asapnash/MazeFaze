
<?php

$servername = "194.81.104.22";
$username = "team5";
$password = "group5";
$dbname = "db_team5";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





























?>
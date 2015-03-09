<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['Username']) || empty($_POST['Password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$Username=$_POST['Username'];
$Password=$_POST['Password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("194.81.104.22", "team5", "group5");
// To protect MySQL injection for Security purpose
$Username = stripslashes($Username);
$Password = stripslashes($Password);
$Username = mysqli_real_escape_string($connection, $Username);
$Password = mysqli_real_escape_string($connection, $Password);
// Selecting Database
$db = mysqli_select_db($connection ,"db_team5");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection, "select * from Registration where Password='$Password' AND Username='$Username'" );
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$Username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>
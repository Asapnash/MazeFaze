<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("194.81.104.22", "team5", "group5");
// Selecting Database
$db = mysqli_select_db($connection ,"db_team5");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection, "select Username from Registration where Username='$user_check'" );
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['Username'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection

}
?>
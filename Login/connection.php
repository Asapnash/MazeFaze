<?php
session_start();
$con = mysqli_connect("194.81.104.22","team7","group5","db_team5");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
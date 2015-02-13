
<?php
session_start();
$con = mysql_connet("194.81.104.22", "team5", "group5","db_team5") or die("couldn't connect to server!");

if (mysqli_connect_errno())
   {
   echo "couldn't connect to server! " . mysqli_connect_error();
   } 
   
?>
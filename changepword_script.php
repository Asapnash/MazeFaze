<?php

session_start();

if (!(isset($_SESSION['login_user']) || $_SESSION['login_user'] == '')) {
    header("location:profile.php");
}

$dbcon = mysqli_connect('194.81.104.22', 'team5', 'group5', 'db_team5') or die(mysqli_error($dbcon));

$password1 = mysqli_real_escape_string($dbcon, $_POST['newPassword']);
$password2 = mysqli_real_escape_string($dbcon, $_POST['confirmPassword']);
$username = mysqli_real_escape_string($dbcon, $_SESSION['login_user']);

if ($password1 <> $password2)

 { echo "Your passwords do not match.";}

else if (mysqli_query($dbcon, "UPDATE Registration SET Password='$password1' WHERE Username='$username'"))
    {echo "You have successfully changed your password.";
	
	header('Location: profile.php');}

else { mysqli_error($dbcon); }

mysqli_close($dbcon);

?>
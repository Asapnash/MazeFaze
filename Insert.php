<?php

session_start();
include('connection.php');

		$Firstname = $_POST['Firstname'];
	   	$Surname = $_POST['Surname'];
	   	$Gender = $_POST['Gender'];
	   	$Age = $_POST['Age'];
	   	$Username = $_POST['Username'];
       		$Password = $_POST['Password'];
	   	$Email = $_POST['Email']; 
		
	   

$sql = "INSERT INTO Registration (Firstname,Surname,Gender,Age,Username,Password,Email)
VALUES ('$Firstname','$Surname','$Gender','$Age','$Username','$Password', '$Email')";

if (mysqli_query($conn, $sql)) {
    header('Location: success.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

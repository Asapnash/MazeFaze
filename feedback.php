<?php

/* Email Variables */
$emailSubject = 'mazefaze5!'; /*Make sure this matches the name of your file*/
$webMaster = 'maze.faze.5@outlook.com';

/* Data Variables */
$email = $_POST['email'];
$fullname = $_POST['fullname'];
$comments = $_POST['comments'];



$body = <<<EOD
<br><hr><br>
Name: $fullname <br>
Email: $email <br>
Comments: $comments <br>
EOD;
$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body,
$headers);


/* Results rendered as HTML */
$theResults = <<<EOD
<html>
<head>
<title>sent message</title>
<meta http-equiv="refresh" content="5;URL=http://www.eng.nene.ac.uk/~2027c_5/MazeFaze/contact.html">
<style type="text/css">
<!--
body {
background-color: #444;
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 20px;
font-style: normal;
line-height: normal;
font-weight: normal;
color: #fec001;
text-decoration: none;
padding-top: 200px;
margin-left: 150px;
width: 800px;
}
-->
</style>
</head>
<div align="center">Your message has been successfully sent</div>
</div>
</body>
</html>
EOD;
echo "$theResults";
?>

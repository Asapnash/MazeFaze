<html>
     <head>
          <title>Login</title>

		  
		    <style type='text/css'>

body {
	background-color:orange;
	;
}
</style>

     </head>
<body>
<script language="javascript" type="text/javascript">     

var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
document.write("<mediam><font color='000000' face='Arial'><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+"</b></font></small>")
</script>
<form method='post' action='login.php'>
      <table width='286' border='10' align='center'>
	  <tr>
	     <td align='center' colspan='6'><h1>Login Form</h1></td>
     </tr>	
     <tr>
	     <td align='center'>User Name:</td>
		 <td> <input type='text' name='name' /></td>
     </tr>
     <tr>
	     <td align='center'>Password:</td>
		 <td> <input type='Password' name='pass' /></td>
     </tr>
     <tr>
	     <td colspan='6' align='center'><input type='submit' name='login' value='Login' /></td>
     </tr>		 
	 
	 
       </table>
	   </form>
	 <center>  
	 <font color='blue' size='6'>Not registered yet? </<a href='registration.php'>Sign Up Here</a>
     </font>
	 
	 <?php

mysql_connect("194.81.104.22", "team5", "group5","db_team5") or die("couldn't connect to server!");
mysql_select_db("db_team5");

if(isset($_POST['submit']))
{
	$password =$_POST['pass'];
	$email = $_POST['email'];
	$check_user = "select * from users where user_pass='$password' AND user_email='$email'";
	$run = mysql_query($check_user);
	if(mysql_num_rows($run)>0)
	    {
	   echo "<script>window.open('welcome.php','_self)</script>";
	     }
	else
		{
	   echo "<script>alert(Email or Password is incorrect')</script>";
	   }
   }

$db=new mysql("194.81.104.22", "team5", "group5","db_team5") or die("couldn't connect to server!");

$sql = "INSERT INTO login VALUES('','".$_POST['user_name']."','".$_POST['user_pass']."')";
if (!$db->query($sql)){
	die('There was an error running this query'. $db->error);
}
?>
</body>		 
</html>

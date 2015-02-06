<html>
     <head>
          <title> Registration Form</title>

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
<form method='post' action='registration.php'>
      <table width='286' border='10' align='center'>
	   <tr>
	     <td align='center' colspan='6'><h1>Registration From</h1></td>
     </tr>
	  <tr>
	     <td align='center'>firstname:</td>
		 <td> <input type='first name' name='user_firstname' /></td>
     </tr>
     <tr>
	     <td align='center'>surname:</td>
		 <td> <input type='last name' name='user_lastname' /></td>
     </tr>		
 <tr>
	     <td align='center'>gender:</td>
		 <td> <input type='' name='' /></td>
     </tr>
	  <tr>
	     <td align='center'>Age:</td>
		 <td> <input type='age' name='' /></td>
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
	     <td align='center'>Email:</td>
		 <td> <input type='text' name='email' /></td>
     </tr>		  
	<tr>
	     <td colspan='6' align='center'><input type='submit' name='submit' value='register' /></td>
     </tr>
       </table>
	   </form>
	   <center><b>Already Registered</b><br><a href='login.php'>Login Here</a></br></center>
	   
	   <a href="#" onclick="window.print();#">print</a>
<?php
mysql_connect("194.81.104.22", "team5", "group5","db_team5") or die("couldn't connect to server!");
error_reporting(0);
    if(isset($_POST['submit'])){
	   $user_firstname = $_POST['firstname'];
	   $user_lastname = $_POST['surname'];
	   $user_gender = $_POST['gender'];
	   $user_age = $_POST['age'];
	   $user_name = $_POST['name'];
       $user_pass = $_POST['pass'];
	   $user_email = $_POST['email']; 
	}    
	

 ?>
	   
	   
	   
	   
	   

</body>		 

</html>

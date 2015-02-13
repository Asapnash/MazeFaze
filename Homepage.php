
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Maze Faze</title>

<link href="main.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>


</head>

<div align="center">
<body>

<div id="Banner"><!-------Banner Container------------>
	
		
    	<A href="Homepage.html">
  <IMG SRC="http://images.clipartpanda.com/banner-20clipart-normal_1283818525.jpg" 				BORDER="0" WIDTH="600" HEIGHT="80" ALT="Come to my page!">
  </A>
  	


</div><!-------End Banner Container------------>


<p>&nbsp;</p>


    
    
 	
<div id="topNavigation"><!-------Top Navigation Container------------>
	<ul id="MenuBar1" class="MenuBarHorizontal">															 			
		<li><a href="Homepage.html">Home</a></li>
        
  		<li><a class="MenuBarItemSubmenu" href="Game Page.html">Game</a>
   			<ul>
      			<li><a href="Game Page.html">Download</a></li>
     			<li><a href="Support.html #Tutorial">Tutorial</a></li>
   			</ul>
   		</li> 
            
  		<li><a class="MenuBarItemSubmenu" href="#">Forum</a>
    		<ul>
      			<li><a class="MenuBarItemSubmenu" href="#">Community</a>
       				<ul>
         				<li><a href="NewsUpdate Page.html #NEWS">News</a></li>
          				<li><a href="NewsUpdate Page.html #UPDATE/GIVEAWAY">Updates</a></li>
       			 	</ul>
     		 	</li>
     		 	<li><a href="Support.html">Support</a></li>
   			</ul>
 	 	</li>
  
  		<li><a href="Support.html #FAQ">FAQ</a></li>
 
 	 	<li><a href="Contact.html">Contact</a></li>
 
	</ul>
    
    
   
  <table style=" margin-left:68%;"><!-------Website CLock ------------>
  <tr>
    <td>
    	<div id="dateTimeValue">
			<script type="text/javascript">
			function GetClock(){
			var d=new Date();
			var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear(),nhour=d.getHours(),nmin=d.getMinutes(),ap;
     		if(nhour==0){ap=" AM";nhour=12;}
			else if(nhour<12){ap=" AM";}
			else if(nhour==12){ap=" PM";}
			else if(nhour>12){ap=" PM";nhour-=12;}
			if(nyear<1000) nyear+=1900;
			if(nmin<=9) nmin="0"+nmin;

			document.getElementById('dateTimeValue').innerHTML=""+(nmonth+1)+"/"+ndate+"/"+nyear+" "+nhour+":"+nmin+ap+"";
			}
			window.onload=function(){
			GetClock();
			setInterval(GetClock,1000);
			}
			</script>
		`	

   		</div>
	</td>
  </tr>
</table><!-------End of Website Clock------------>



</div><!-------End Top Navigation Container------------>
	

<p>&nbsp;</p>



<div id="main"><!-------Main Container------------>


  	<div id="Sub1"><!-------Main Sub 1 Container------------>

		<div id="Login">
         
        
		  <table width="150" height="270"  style=" margin-left:5%;">
			  <tr>
     		 		<td width="137">
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
     
   
     
	     <td colspan='6' align='center'><br><input type='submit' name='login' value='Login' />
        <br><br>
          <font size='4'>Not registered yet? 
     <br>
     <a href='registration.php'>Sign Up Here</a>
     </font></td>
     </tr>		 
	 
	 
       </table>
	   </form>
	 
	
	 
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
      				</td>
				 </tr>
	  		</table>
		 </div>


  </div><!-------End Main Sub 1 Container------------>



	<div id="Sub2"><!-------Main Sub 2 Container------------>
    	<table width="390" height="429" style=" margin-left:40%;">
  			<tr>
    			<td height="422">
                
                		<table width="380" height="420" border = "1">
  <tr>
    <td> IMAGE PREVIEW </td>
  </tr>
  <tr>
    <td>NEWS/UPDATE/GIVEAWAYS</td>
  </tr>
</table>

                
                
                
                              
                
                
                </td>
		  
          	</tr>
		</table>

 	</div><!-------End Main Sub 2 Container------------>

</div><!-------End Main Container------------>

	<p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
<div id="footer"><!-------Footer Container------------>



<a href="#">Links</a>
&nbsp;&nbsp;
<a href="#">Links</a>
&nbsp;&nbsp;
<a href="#">Links</a>
&nbsp;&nbsp;
<a href="#">Links</a>
&nbsp;&nbsp;
<a href="#">Links</a>



</div><!-------End Footer Container------------>



<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>

</body>
</div>


















</html>

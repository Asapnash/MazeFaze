<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Maze Faze</title>
<link href="main.css" rel="stylesheet" type="text/css">
<link href="SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">

<style type="text/css">
body {
	background-image: url(Images/wall.jpg);
	background-size:cover;
}
</style>


<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<div align="center">
<body>
<div id="Banner"><!-------Banner Container------------> 
  
  <A href="Homepage.php"> <IMG SRC="Images/logo.png"BORDER="0" WIDTH="600" HEIGHT="80" ALT="Come to my page!"> </A> </div>
<!-------End Banner Container------------>

<p>&nbsp;</p>
<div id="topNavigation"><!-------Top Navigation Container------------>
  <ul id="MenuBar1" class="MenuBarHorizontal">
     <li><a href="Homepage.php">Home</a></li>
    <li><a class="MenuBarItemSubmenu" href="Game Page.html">Game</a>
      <ul>
        <li><a href="Game Page.html">Download</a></li>
        <li><a href="Support.html">Tutorial</a></li>
      </ul>
    </li>
    
    <li><a href="Support.html">FAQ</a></li>
     <li><a href="news.html">News</a></li>
      <li><a href="fun.html">Fun</a></li>
    <li><a href="Contact.php">Contact</a></li>
  </ul>
  <table style=" margin-left:68%;">
    <!-------Website CLock ------------>
    <tr>
      <td><div id="dateTimeValue"> 
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
        </div></td>
    </tr>
  </table>
  <!-------End of Website Clock------------> 
  
</div>
<!-------End Top Navigation Container------------>

<p>&nbsp;</p>
<div id="main"><!-------Main Container------------>
  
  <div id="Sub1"><!-------Main Sub 1 Container------------>
    
    <div id="Login">
      <?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
      <table width="150" height="270"  style="margin-left:5%;">
        <tr>
          <td width="137"><form action="" method="post">
              <table width='271' align='center'>
                <tr>
                	<p>&nbsp;</p>
                  <td align='center' colspan='6'><h1> Login</h1></td>
                </tr>
                <tr>
                  <td align='center'><label>UserName:</label></td>
                  <td><input id="name" name="Username" placeholder="Username" type="text"></td>
                </tr>
                <tr>
                  <td align='center'><label>Password:</label></td>
                  <td><input id="Password" name="Password" placeholder="**********" type="password"></td>
                </tr>
                <tr>
                  <td colspan='6' align='center'><?php echo $error; ?><br>
                    <input name="submit" type="submit" value=" Login ">
                    <br>
                    <br>
                    <font size='4'>Not registered yet? <br>
                    <a href='registration.php'>Sign Up Here</a></font>
                    </p>
                    </td>
                </tr>
              </table>
            </form></td>
        </tr>
      </table>
    </div>
  </div>
  <!-------End Main Sub 1 Container------------>
  
  <div id="Sub2"><!-------Main Sub 2 Container------------>
    <table width="390" height="429" style=" margin-left:40%;">
      <tr>
        <td height="422"><table width="380" height="420" border = "1">
            <tr>
              <td> IMAGE PREVIEW </td>
            </tr>
            <tr>
              <td>NEWS/UPDATE/GIVEAWAYS</td>
            </tr>
          </table></td>
      </tr>
    </table>
  </div>
  <!-------End Main Sub 2 Container------------> 
  
</div>
<!-------End Main Container------------>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="footer"><!-------Footer Container------------> 
  
  <a href="#">Links</a> &nbsp;&nbsp; <a href="#">Links</a> &nbsp;&nbsp; <a href="#">Links</a> &nbsp;&nbsp; <a href="#">Links</a> &nbsp;&nbsp; <a href="#">Links</a> </div>
<!-------End Footer Container------------> 

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</div>
</html>

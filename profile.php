<?php
include('session.php');
?>

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
  
  <A href="Homepage.html"> <IMG SRC="http://images.clipartpanda.com/banner-20clipart-normal_1283818525.jpg" 				BORDER="0" WIDTH="600" HEIGHT="80" ALT="Come to my page!"> </A> </div>
<!-------End Banner Container------------>

<p>&nbsp;</p>
<div id="topNavigation"><!-------Top Navigation Container------------>
  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="homepage.html">Home</a></li>
    <li><a class="MenuBarItemSubmenu" href="game Page.html">Game</a>
      <ul>
        <li><a href="game Page.html">Download</a></li>
        <li><a href="support.html #Tutorial">Tutorial</a></li>
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
      <table width="150" height="270"  style=" margin-left:50%;">
        <tr>
          <td width="137"><form action="" method="post">
              <table width='194' height="270" border='10' align='center'>
                <tr>
                  <td width="166" align='center'><p><b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b></p>
                    <p>&nbsp;</p>
                    <p> <b id="logout"><a href="logout.php">Log Out</a></b></p></td>
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
              <td> Username:</td>
              <td><?php echo $login_session; ?></td>
            </tr>
            <tr>
            	
              <td> Password:</td>
              <td><form name="frmChange" role="form" class="form-signin" method="POST" action="changepword_script.php">
                  <label for="InputPassword2">New Password</label>
                  <br>
                  <input type="password" class="form-control" id="InputPassword2" placeholder="New Password" name="newPassword">
                  <br><br>
                  <label for="InputPassword3">Confirm New Password</label><br>
                  <input type="password" class="form-control" id="InputPassword3" placeholder="Confirm Password" name="confirmPassword">
                  <br><br>
                  <button class="btn btn-lrg btn-default btn-block" type="submit" value="send">Change Password</button>
                </form></td>
            </tr>
            <tr>
              <td> Highscore:</td>
              <td> Highscore</a></td>
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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Maze Faze</title>

<link href="main.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
 <style type="text/css">
body {
	background-image: url(Images/wall.jpg);
}
</style>

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



<div id="main"><!-------Main Container------------><!-------End Main Sub 1 Container------------>



	<div id="Sub2contact"><!-------Main Sub 2 Container------------>
    	<table width="390" height="429" style=" margin-left:5%;">
  			<tr>
    			<td height="422">
                
                		<table width="450" height="420"  style=" margin-left:5%;">
  <tr>
    <td> 
   

<div class="articles"><!--------Contatct info----->

<h2> Contact</h2>
<p>To contact  for more information fill out the form below.</p>


<div class="articles2">

<p>&nbsp;</p>

<h2> Write to us </h2>

<div align="left">
<div style="padding-left: 50px; line-height: 15px;">


 <form name="myForm" onsubmit="return Validation()" action="#" method="post">

 <form name="myForm" onsubmit="return Validation()" action="mazefaze5@gmail.com" method="post">


First name: <input type="text" name="firstname" />
<br><br>  
Last name: <input type="text" name="lastname" />



<p> What is your sex</p>

<input type="checkbox" name="sex" value="male" /> Male<br/>
<input type="checkbox" name="sex" value="female" /> Female



<p> Do you have any complaints about the website?</p>


<input type="radio" name="boolean" value="Yes" /> YES<br />
<input type="radio" name="boolean" value="NO" /> NO

<div align="center">
Write comments here: <br>
<textarea name="comments" rows="13" cols="40"></textarea><br><br>


  <input type = "reset" value = "Clear Your Entries">
   <input type="submit" value="submit" onclick="funcky()">
   
  </form>
</div>  

<script type=text/javascript">
function funky()
    {
     alert("make sure all parts are filled in correctly!!"):
    }
    </script>



<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>

<p>&nbsp;</p>
<p>&nbsp;</p>


</body>
</div>















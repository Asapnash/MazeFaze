</body>		 
</html>
 <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Maze Faze</title>

<link href="main.css" rel="stylesheet" type="text/css">
<link href="SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

<style type="text/css">
body {
	background-image: url(Images/gte.png);
	background-repeat:no-repeat;
	background-size:cover;
}
</style>


</head>

<div align="center">
<body>

<div id="Banner"><!-------Banner Container------------>
	
		
    	<A HREF="Homepage.php">
  <IMG SRC="Images/logo.png"BORDER="0" WIDTH="600" HEIGHT="80" ALT="Come to my page!">
  </A>
  	


</div><!-------End Banner Container------------>


<p>&nbsp;</p>


    
    
 	
<div id="topNavigation"><!-------Top Navigation Container------------>
	<ul id="MenuBar1" class="MenuBarHorizontal">															 			
		<li><a href="Homepage.php">Home</a></li>
        
  		<li><a class="MenuBarItemSubmenu" href="Game Page.html">Game</a>
   			<ul>
      			<li><a href="Game Page.html">Download</a></li>
     			<li><a href="Support.html #Tutorial">Tutorial</a></li>
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
	





<div id="main"><!-------Main Container------------>


  



	<div id="Registration"><!-------Main Sub 2 Container------------>
    	
        <table width="400" height="600" style="margin-left: 3cm;">
  			<tr>
    			<td width="400" height="600">
                
                		
  
 
  
<form name="reg" action="Insert.php"  method="post">



    <table width='286'  align='center'>
	   	<tr>
	     	<td align='center' colspan='6'>
            <p>&nbsp;</p><p>&nbsp;</p>
            	<h1>Registration From</h1>
            	<div align="center">
                
	</div>
        
        	
	        </td>
    	</tr>
	 	<tr>
	    	<td align='center'>Firstname:</td>
		 	<td> <input type='Text' name='Firstname' /></td>
     	</tr>
    	<tr>
	     	<td align='center'>Surname:</td>
		 	<td> 
            	<input type='Text' name='Surname' />
            </td>
     	</tr>		
 		<tr>
	     	<td align='center'>Gender:</td>
		 	<td> 
            	<select name="Gender">
    				<option value="Male">Male</option>
   				 	<option value="Female">Female</option>
 				</select>
  			</td>
     	</tr>
	  	<tr>
	     	<td align='center'>Age:</td>
		 	<td> 
            	<input type='text' name='Age' />
            </td>
     	</tr>
     	<tr>
	     	<td align='center'>Username:</td>
			<td>
            	<input type='text' name='Username' />
            </td>
    	</tr>
     	<tr>
	    	<td align='center'>Password:</td>
		 	<td> 
            	<input type='Password' name='Password' />
            </td>
     	</tr>		 
     	<tr>
	    	<td align='center'>Email:</td>
		 	<td> 
            	<input type='text' name='Email' />
            </td>
     	</tr>		  
		<tr>
	     	<td colspan='1' align='center'>
            	<input type='submit' name='submit' value='Register'/>
           	</td>
     	</tr>
       	</table>
	  
</form>




   
<center>
  <b>Already Registered</b>
       <br>
  <a href='login.php'>Login Here</a>
       <br>
  <a href="javascript:window.print()" onClick="window.print();#">Print</a>
  </center>
	   
	  </table>
  
                
                </td>
		        </tr>
		</table>

 	</div><!-------End Main Sub 2 Container------------>

</div><!-------End Main Container------------>

  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
       <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
      
      
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

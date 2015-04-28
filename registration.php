<html>
     <head>
          <title>Registration Form</title>

<style type="text/css">
body {
	background-image: url(url(Images/gte.jpg));
	
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




<form name="reg" action="insert.php"  method="post">



    <table width='286' border='10' align='center'>
	   	<tr>
	     	<td align='center' colspan='6'>
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
	     	<td colspan='6' align='center'>
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
	   

	   
	   
	   
	   

</body>		 
</html>

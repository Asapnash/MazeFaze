
<?php

// Set email variables
$email_to = 'youremail@address.com';
$email_subject = 'Form submission';

// Set required fields
$required_fields = array('fullname','email','comment');

// set error messages
$error_messages = array(
	'fullname' => 'Please enter a Name to proceed.',
	'email' => 'Please enter a valid Email Address to continue.',
	'comment' => 'Please enter your Message to continue.'
);

// Set form status
$form_complete = FALSE;

// configure validation array
$validation = array();

// check form submittal
if(!empty($_POST)) {
	// Sanitise POST array
	foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
	
	// Loop into required fields and make sure they match our needs
	foreach($required_fields as $field) {		
		// the field has been submitted?
		if(!array_key_exists($field, $_POST)) array_push($validation, $field);
		
		// check there is information in the field?
		if($_POST[$field] == '') array_push($validation, $field);
		
		// validate the email address supplied
		if($field == 'email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
	}
	
	// basic validation result
	if(count($validation) == 0) {
		// Prepare our content string
		$email_content = 'New Website Comment: ' . "\n\n";
		
		// simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
		}
		
		// if validation passed ok then send the email
		mail($email_to, $email_subject, $email_content);
		
		// Update form switch
		$form_complete = TRUE;
	}
}

function validate_email_address($email = FALSE) {
	return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}

function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<title>Contact Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="main.css" rel="stylesheet" type="text/css">
<link href="SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript">
		var nameError = '<?php echo $error_messages['fullname']; ?>';
		var emailError = '<?php echo $error_messages['email']; ?>';
		var commentError = '<?php echo $error_messages['comment']; ?>';
	</script>
    
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

</head>
<div align="center">
<body>

<div id="Banner"><!-------Banner Container------------>
	
		
    	<A href="Homepage.php">
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
     			<li><a href="Support.html">Tutorial</a></li>
   			</ul>
   		</li> 
            
  
  		<li><a href="Support.html">FAQ</a></li>
 
 	 	<li><a href="Contact.php">Contact</a></li>
 
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


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="articles2">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="formwrap">
<div id="form">
<?php if($form_complete === FALSE): ?>
<form action= "contact.php" method="post" id="comments">
      <div class="row">
	  <div class="label">Name</div> <!------end label------>
	  <div class="input">
	  <input type="text" id="fullname" class="details" name="fullname" value="<?php echo isset($_POST['fullname'])? $_POST['fullname'] : ''; ?>" /><?php if(in_array('fullname', $validation)): ?><span class="error"><?php echo $error_messages['fullname']; ?></span><?php endif; ?>
	</div><!-------End input------------>
	</div><!-------End row------------>
	</div><!-------End of #form------------>
</div><!-------End of formwrap------------>

<div id="formwrap">
<div id="form">
      <div class="row">
	  <div class="label">Email</div> <!------end label------>
	  <div class="input">
	  <input type="text" id="email" class="details" name="email" value="<?php echo isset($_POST['email'])? $_POST['email'] : ''; ?>" /><?php if(in_array('email', $validation)): ?><span class="error"><?php echo $error_messages['email']; ?></span><?php endif; ?>
	</div><!-------End input------------>
	</div><!-------End row------------>
	</div><!-------End of #form------------>
</div><!-------End of formwrap------------>

<div id="formwrap">
<div id="form">
      <div class="row">
	  <div class="label">comment</div> <!------end label------>
	  <div class="input">
	  <textarea name="comment" cols="60" rows="15" class="mess" id="comments_form">
<?php echo isset($_POST['comment'])? $_POST['comment'] : ''; ?></textarea><?php if(in_array('comment', $validation)): ?><span class="error"><?php echo $error_messages['comment']; ?></span><?php endif; ?>
	  
	  <div class="submit">
	  <input type="submit" id="submit" name="submit" value="Send Message"/>
      </div>
      </form>
      <?php else: ?>
<p style="font-size:30px; font-family:Arial, Helvetica, sans-serif; color:#255E67; margin-left:20px;">Thank you for your Message!</p>
<script type="text/javascript">
setTimeout('ourRedirect()', 5000)
function ourRedirect(){
   location.href='contact.php'
}
</script>

<?php endif; ?>

	</div><!-------End input------------>
	</div><!-------End row------------>
	</div><!-------End of #form------------>
</div><!-------End of formwrap------------>
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














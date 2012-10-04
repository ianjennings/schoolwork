<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>The Making Of VentStatus / Provide Some Feedback</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="top">
<div id="wrapper">
	<div id="header">
		<a href="home.php"><img src="images/title.gif" alt="The Making of Ventstatus.com"/></a>
		<div id="menu">
			<a href="home.php">Home</a>
   			<a href="about.php">About</a>
			<a href="features.php">Features</a>
			<a href="review.php">Framework</a>
			<a href="cell.php">Cell Status</a>				
            <a href="archive.php">History</a>			                                                
			<a href="privacy.php">Privacy</a>	
			<a href="author.php">Author</a>
			<a href="feedback.php" class="sel">Feedback</a>
		</div>
	</div>
	<div id="middle">
    
        <div id="main_content">
        
        	<div id="feedback">
            
<?php
$recipient = "feedback_script@mailinator.com"; // who the email is being sent to
$email_subject = "New Feedback!";

$submit = "submit"; // the name of your submit button (name="x")
$required_fields = 0; // fields required to send the mail. they must match the name="x" part of the input html EXACTLY

$error = FALSE;

if (isset($_POST[$submit])){

	unset($_POST[$submit]);
	
	if (isset($required_fields)){
	
		foreach($required_fields as $value){
			if (empty($_POST[$value])){
				$missing_fields[] = $value;
				$comma_separated = implode(", ", $missing_fields);
			}
		}
	
	}
	
	if (isset($missing_fields)){
		
		$error = "Missing fields: $comma_separated";
		
	} else {
		
		foreach($_POST as $field => $value){
			if (!empty($value)){
				
				if(is_array($value)){
					$value = implode(", ", $value);
				}
				
				$message_text .= ucwords($field) . "\n----------\n$value\n\n";
			
			}
		}
		
		if(!mail($recipient, $email_subject, $message_text, $header)){
			$error = "Unable to send mail. Check email address.";
		}
									  
	} 
	
	// here we output a message of success if the email was sent, or an error if we have any
	if ($error){
		echo "<div class=\"message_error\"><b>Error:</b> $error</div>";
	} else {
		echo "<div class=\"message_sent\">Message sent. Thanks!</div><br>The Message would look like: <br><br> <textarea rows=\"15\" cols=\"50\">$message_text</textarea>" ;
	}
}
?>
            
            <form action="feedback.php" method="post">
            
            	<fieldset>
                	
                    <legend>Room for improvement?</legend>
                    
                    <label for="further_info">What else would you like to know about ventstatus?</label>
                    
                    <textarea id="further_info" name="further_info" rows="5" cols="80"></textarea>
                    
                    <label for="privacy">Do you have any privacy concerns about the tracking program?</label>
                    
                    <textarea id="privacy" name="privacy" rows="5" cols="80"></textarea>
                    
                    <label for="new_features">What else can I do with ventstatus.com, what features would you like to see?</label>
                    
                    <textarea id="new_features" name="new_features"  rows="5" cols="80"></textarea>
                
                </fieldset>
            
            	<fieldset>
                	
                    <legend>Hows the content?</legend>
                    
                    <label for="changes">What changes would you make to ventstatus.com or this page?</label>
                    
                    <textarea id="changes" name="changes" rows="5" cols="80"></textarea>
                    
                    <label for="layout_colors">Are you comfortable with the color scheme and layout of ventstatus, what needs improvement?</label>
                    
                    <textarea id="layout_colors" name="layout_colors" rows="5" cols="80"></textarea>
                
                </fieldset>
            
            	<fieldset>
                	
                    <legend>And what about ventrilo?</legend>
                    
                    <label for="ventrilo_use"> Do you use ventrilo? For what?</label>
                    
                    <textarea id="ventrilo_use" name="ventrilo_use" rows="5" cols="80"></textarea>
                    
                    <label for="buddy_list">Would you make use of a buddy list like application for ventrilo?</label>
                    
                    <textarea id="buddy_list" name="buddy_list" rows="5" cols="80"></textarea>
                
		    		<label for="advantage">How have you used ventstatus to your advantage?</label>
                    
                    <textarea id="advantage" name="advantage" rows="5" cols="80"></textarea>
		    
                    <input name="submit" type="submit" value="Submit Feedback" id="feedback_submit" />
                
                </fieldset>
                            
            </form>
            
            </div>
        
        </div>
    
    	<div id="sidebar">
        
		</div>
	
    </div>
  
	<div id="footer">
        <ul>
			<li><a href="home.php">Home</a></li>
   			<li><a href="about.php">About</a></li>
			<li><a href="features.php">Features</a></li>	
			<li><a href="review.php">Framework</a></li>
			<li><a href="cell.php">Cell Status</a></li>			
            <li><a href="archive.php">History</a></li>			                                                
			<li><a href="privacy.php">Privacy</a></li>
			<li><a href="author.php">Author</a></li>
			<li><a href="feedback.php">Feedback</a></li>
        </ul>
        <a href="#top" id="back_to_top">Back To Top</a>    </div>
</div>
</body>
</html>
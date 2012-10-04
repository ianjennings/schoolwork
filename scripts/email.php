<?php
$recipient = "jbass@mailinator.com"; // who the email is being sent to
$email_subject = "New Feedback!";

$submit = "submit"; // the name of your submit button (name="x")
$required_fields = array("name", "radios", "message"); // fields required to send the mail. they must match the name="x" part of the input html EXACTLY

$error = FALSE;

if (isset($_POST[$submit])){

	unset($_POST[$submit]);
	
	foreach($required_fields as $value){
		if (empty($_POST[$value])){
			$missing_fields[] = $value;
			$comma_separated = implode(", ", $missing_fields);
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
		echo "<div class=\"message_sent\">Message sent. Thanks!</div>";
	}
}
?>
<html>
<head>
<link href="http://www.formassembly.com/form-builder/css/campground/wforms.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.message_error{
	color: #930;
	background-color:#FFA8A8;
	border: 2px solid #930;
	padding: 20px;
}
.message_sent{
	color: #0F4A00;
	background-color:#B3FFB3;
	border: 2px solid #0F4A00;
	padding: 20px;
}
h1, h2, h3, h4, h5, h6, form {
padding: 0px;
margin: 0px;
}
div {margin: 10px;}
</style>
</head>
<body>

<div style="width: 1000px;">
    <h1>Dynamic Feedback Script <a href="email.txt">[source]</a></h1>
    <h2>by Ian Jennings</h2>
    <br />
	<br />
    <h3><strong>*</strong> denotes required fields</h3>
</div>

<div style="float: left; width: 600px;">
    
    
    <form action="email.php" method="POST">
        
      <fieldset>
        
            <legend>Part 1</legend>
            
            <label for="name"><strong>Name *</strong></label>
            
            <br />
    
            <input name="name" type="text" value="Louie Louie"/>
            
            <br />
            <br />
            
            <label for="radios"><strong>Radio Buttons *</strong></label>
            
            <br />
    
            <input type="radio" name="radios" value="oh no"/>
            oh no
            
            <br />
            <input type="radio" name="radios" value="Me gotta go"/>
            Me gotta go
            
            <br />
            <input type="radio" name="radios" value="Aye-yi-yi-yi, I  said"/>
            Aye-yi-yi-yi, I  said
            
            <br />
            <br />
            
            <label for="Checkboxs[]"><strong>Checkbox Group</strong></label>
            
            <br />
            
            <input type="checkbox" name="Checkboxs[]" value="Louie Louie"/>
            Louie Louie
            
            <br />
            <input type="checkbox" name="Checkboxs[]" value="oh baby"/>
            oh baby
            
            <br />
            <input type="checkbox" name="Checkboxs[]" value="Me gotta go"/>
            Me gotta go
            
      </fieldset>
        
        <fieldset>
        
            <legend>Part 2</legend>
            
            <label for="message"><strong>Message *</strong></label>
            
            <br />
    
          <textarea name="message" cols="45" rows="5">Fine little girl waits for me
Catch a ship across the sea
Sail that ship about, all alone
Never know if I make it home

Three nights and days I sail the sea
Think of girl, constantly
On that ship, I dream she's there
I smell the rose in her hair.</textarea>
            
            <br />
            <br />
            
            <label for="give_it_to_em"><strong>Give it to 'em?</strong></label>
            
            <br />
    
            <input type="checkbox" name="give_it_to_em"/>
            Okay, let's give it to 'em, right  now!
    
            
        </fieldset>
        
        <fieldset>
        
            <legend>Part 3</legend>
            
            <label for="line"><strong>Line</strong></label>
            
            <br />
    
          <select name="line" size="1">
                <option>See Jamaica, the moon above</option>
                <option>It won't be long, me see me love</option>
                <option>Take her in my arms again</option>
                <option>Tell her I'll never leave again</option>
          </select>
            <br />
            <br />
            
            <label for="take_it_on_outa_here"><strong>Take it on outa here?</strong></label>
            
            <br />
            
            <input type="checkbox" name="take_it_on_outa_here"/>Let's take it on outa here now
            
            <br />
            <br />
            
            <input type="submit" name="submit" value="Let's go!! " />
    
    
            
        </fieldset>
    
    </form>
    
</div>    


<div style="float: left; width: 600px;">

Email gets sent to here:

<br>
<br>

<iframe width=480 height=300 marginwidth=0 marginheight=0 scrolling=no frameborder=0 src='http://www.mailinator.com/widget/mailin8r.jsp?w=480&h=300&b=feedback_script&f=true'></iframe>

<br>
<br>

<object width="480" height="385"><param name="movie" value="http://www.youtube.com/v/UnTBNkNqjng&hl=en&fs=1&rel=0&color1=0x3a3a3a&color2=0x999999"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/UnTBNkNqjng&hl=en&fs=1&rel=0&color1=0x3a3a3a&color2=0x999999" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="480" height="385"></embed></object>
</div>
    
</body>
</html>
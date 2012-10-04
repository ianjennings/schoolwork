<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>The Making Of VentStatus / How Cell Phone Status Works</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!-- Lightbox 2: http://www.huddletogether.com/projects/lightbox2/ -->
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>

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
			<a href="cell.php" class="sel">Cell Status</a>			
            <a href="archive.php">History</a>
            <a href="privacy.php">Privacy</a>
			<a href="author.php">Author</a>
			<a href="feedback.php">Feedback</a>
		</div>
    </div>
    <div id="middle">
        <div id="main_content" class="with_sidebar">
            <div id="about">
                <h2>VentStatus on Your Cell Phone</h2>
                <p>To the right you can test out one of the cooler features of VentStatus, updates on your cell phone. This lets anybody check the status of any server right on the cell phone without internet access. This feature is provided by the free service, <a href="http://www.textmarks.com/">Textmarks</a> and is explained in more detail below. To see it in action, try typing <b>VSTAT 75</b> in the message box on the cell phone simulator to the right.</p>
                <h2>How It Works</h2>
                <p>If you are interested in how we process text messages from cell phones, I have worked out a simple loop to describe the transfer of information</p>
                <ol>
                	<li>A text message is sent to Textmarks, who turns it into a query for VentStatus</li>
                    <li>The query is marked as either a reply to an earlier query, or a brand new query</li>
                    <li>This query is processed by VentStatus and a response is sent to Textmarks</li>
                    <li>Textmarks forwards the final response back to the user</li>
                    <li>The user has the option to reply, if this is the case the loop begins again</li>
                </ol>
                <p>This is a very abbreviated version of the actual calculations that happen. Some interesting functions include one I wrote specifically to strip long usernames of their vowels in order to save characters in text messages.</p>
                    
</div>
        </div>
        <div id="sidebar">
        <iframe frameborder="0" src="http://www.textmarks.com/simulator/" width="300" height="320"></iframe>
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
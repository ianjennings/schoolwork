<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>The Making Of VentStatus / Server And User Privacy</title>
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
			<a href="cell.php">Cell Status</a>				
            <a href="archive.php">History</a>
            <a href="privacy.php" class="sel">Privacy</a>
			<a href="author.php">Author</a>
			<a href="feedback.php">Feedback</a>
		</div>
    </div>
    <div id="middle">
        <div id="main_content" class="with_sidebar">
            <div id="about">
                <h2>User Privacy</h2>
                <p>If you're looking to stay under the radar, Ventrilo has a little feature that will mask your username from status applications like VentStatus. The following instructions will make your username appear as &quot;XXXXXXXX&quot; to all status requests.</p>
                <p>All this requires is for you to edit your connection settings. Launch Ventrilo and select the server you wish to appear private on. Next, hit the arrow to launch the Connection Editor. Finally, uncheck the box next to 'Show login name in remote status requests.' Click OK and you should be good to go.</p>
                <h2>Server Privacy</h2>
                <p>If you want to keep your Ventrilo server on the down low, you can exclude Ventstatus from tracking specific aspects of your server. However, it is not possible to ever completely block Ventstatus or other status checkers from collecting your servers information.</p>
                <p>In order to make the appropriate changes, you must first connect to your server, and log in as an administrator. If you need help with this, check out the <a href="http://ventrilo.com/faq.php#admin1">official Ventrilo site</a>. Next, right click anywhere on the Ventrilo program, and select &quot;Server Admin&quot; then &quot;Server Properties.&quot;</p>
                <p>Finally, uncheck all appropriate tracking options under &quot;Remote statusing returns.&quot; The most important feature to uncheck is &quot;user names,&quot; as it involves all user data such as the user connected, their uptime, their comments and their ping.</p>
            </div>
        </div>
        <div id="sidebar">
            <a href="images/privacy/user.gif" rel="lightbox[privacy]" title="User Privacy Settings"><img src="images/privacy/user.gif" class="three_hundred" alt="User Privacy Settings"/></a>
            <a href="images/privacy/server.gif" rel="lightbox[privacy]" title="Server Privacy Settings"><img src="images/privacy/server.gif" class="three_hundred" alt="Server Privacy Settings"/></a>
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
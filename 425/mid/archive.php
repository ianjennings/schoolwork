<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Images from Development</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url(images/background.gif);
	background-color: #f5eee0;
}
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
	  <img src="images/title.gif" alt="The Making of Ventstatus.com"/>
	  <div id="menu">
       	  <a href="home.php">Home</a>
       	  <a href="author.php">About Me</a>
       	  <a href="review.php">CodeIgniter</a>
       	  <a href="archive.php">Dev Images</a>
       	  <div id="tracked"><i>Users Online / Tracked By VS:</i><b><?php echo $user_online; ?></b></div>
		</div>
</div>
	<div id="middle">
    
        <div id="main_content">
        
        	<div id="archive">
            
            	<div id="logo_1" class="image">
                	<a href="images/archive/logo_1.jpg"><img src="images/archive/thumbs/logo_1.gif" alt="The first ventstatus logo"/></a>
                    <h4>first Ventstatus logo</h4>
                    <p>This was the first ventstatus.com logo. I realized I really didn't take my demographic into concern with this, gamers like things a little more flashy. I'm most likely going to make use of the bar graph sound wave idea in the future. </p>                </div>
            
       	    <div id="timeline_1" class="image">
               	  <a href="images/archive/timeline_1.gif"><img src="images/archive/thumbs/timeline_1.gif" alt="An early sketch of the ventstatus timeline" /></a>
                    <h4>Yes, this is honestly an important part of ventstatus development</h4>
                    <p>Sometimes you just need a picture to get your ideas together. Normally you can jott down ideas like this before you even start storing data. This idea however, came about when I was looking through loads of data I already had, and suddenly had this radical idea of presenting it through a timeline. I quickly opened up MSPaint and planned out what is now one of the coolest features of Ventstatus.</p>
            </div>
            
				<div id="site_1" class="image">
                	<a href="images/archive/site_1.jpg"><img src="images/archive/thumbs/site_1.gif" alt="The ventstatus.com prototype" /></a>
                    <h4>Early in development, Basic Timeline and bar graph</h4>
                    <p>Here we have the first working page of Ventstatus. The bar graph above used a (now) ridiculous method to predict how many users (gray bars) in-between the real bars based on data gathered by the system (black bar). You can also see the first proof of concept of the timeline. </p>
                </div>
            
<div id="site_2" class="image">
                	<a href="images/archive/site_2.jpg"><img src="images/archive/thumbs/site_2.gif" alt="Ventstatus.com styled" /></a>
                    <h4>Now we look like a site</h4>
                    <p>I spent a day working mostly with CSS to come up with the above. You can see a fancy implementation of the uglier bar graph from above. The timeline is non existent at this point. </p>
                </div>
            
<div id="timeline_2" class="image">
                	<a href="images/archive/timeline_2.jpg"><img src="images/archive/thumbs/timeline_2.gif" alt="A large and early version of a vernstatus timeline" /></a>
                    <h4>Fisher Price timeline</h4>
                    <p>A good start on the timeline style. This was a quick mockup, just to get my head around how I'm going to present the timeline. I decided that it is going to be a separate window, most likely a popup. It also has the option of auto refreshing through Ajax. This design needed lots of improvement, as I found it hard to imagine this working for servers with over 100 users online.</p>
              </div>
            
				<div id="timeline_3" class="image">
                	<a href="images/archive/timeline_3.jpg"><img src="images/archive/thumbs/timeline_3.gif" alt="A smaller, more colorful timeline" /></a>
                    <h4>Its Christmas at ventstatus</h4>
                    <p>Another mockup, here I emphasize the beginning and end of the user's sessions. I also came up with the future layout and style for hour markers. Here the users are smaller to ensure the design will still work even for large amounts of users. Tooltips have been planned out to mark time as well.</p>
            </div>
            
  				<div id="site_3" class="image">
                	<a href="images/archive/site_3.jpg"><img src="images/archive/thumbs/site_3.gif" alt="A nice and polishedventstatus.com" /></a>
                    <h4>Finally starting to shape up</h4>
                    <p>Here is what the site currently looks like. I made some adjustments to the "get status" bar. It real just blended in to the above design, and here I tried to make it a little more apparent. The orange button was swapped for a brighter (and more fitting) green. I also made some changed to the graph algorithm, which doesn't require the need to predict the amount of users anymore, it simply gets that data from the timeline. This means no more dark green bars. I also made a pure css popup to show a nice reading of the amount of users displayed per bar, as well as the time period the bar on the graph represents. This is also the first image here in which the site is running on the CodeIgniter framework. </p>
              </div>
            
				<div id="timeline_4" class="image">
                	<a href="images/archive/timeline_4.jpg"><img src="images/archive/thumbs/timeline_4.gif" alt="The timeline under development as it looks now" /></a>
                    <h4>The timeline hardhat area</h4>
                    <p>This is what the timeline currently looks like. The red bars are a functional version of the hour markers from the mockup above. Each green bar is represents the time a user is online, each user has their own row. In the future I'm going to make this update with AJAX, as well as extend the hour markers, put time markings on top as well as a title and server information. </p>
                </div>
          
            
          </div>
        
    </div>
    
    	<div id="sidebar">
        
        	<div id="thumb_gallery">
            
            	<a href="#logo_1" style="background-image:url(images/archive/thumbs/logo_1.gif)"></a>
            	<a href="#timeline_1" style="background-image:url(images/archive/thumbs/timeline_1.gif)"></a>
            	<a href="#site_1" style="background-image:url(images/archive/thumbs/site_1.gif)"></a>
            	<a href="#site_2" style="background-image:url(images/archive/thumbs/site_2.gif)"></a>
            	<a href="#timeline_2" style="background-image:url(images/archive/thumbs/timeline_2.gif)"></a>
            	<a href="#timeline_3" style="background-image:url(images/archive/thumbs/timeline_3.gif)"></a>
            	<a href="#site_3" style="background-image:url(images/archive/thumbs/site_3.gif)"></a>
            	<a href="#timeline_4" style="background-image:url(images/archive/thumbs/timeline_4.gif)"></a>
            
            </div>
        
        </div>
  </div>
  
  <div id="footer">
  </div>
</div>
</body>
</html>
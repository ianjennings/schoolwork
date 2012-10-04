<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>The Making Of VentStatus / About The Project</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="top">
<div id="wrapper">
	<div id="header">
		<a href="home.php"><img src="images/title.gif" alt="The Making of Ventstatus.com"/></a>
		<div id="menu">
			<a href="home.php">Home</a>
   			<a href="about.php" class="sel">About</a>
			<a href="features.php">Features</a>
			<a href="review.php">Framework</a>
			<a href="cell.php">Cell Status</a>				
            <a href="archive.php">History</a>			                                                
			<a href="privacy.php">Privacy</a>
			<a href="author.php">Author</a>
			<a href="feedback.php">Feedback</a>
		</div>
</div>
	<div id="middle">
    	<div id="main_content">
        	<div id="about">
            	<h2>Ventstatus</h2>
				<p>Ventrilo is a VOIP or voice over internet protocol. In other words, it lets users chat with each other over the internet instantly. Ventrilo is known for its super high quality voice codecs, and for being simple and reliable. The difference between Ventrilo and something like Skype is that Skype creates a direct connection between two or more clients through a peer to peer network. Ventrilo, on the other hand, first gives this information to a server where it is then transmitted to everybody else connected to that server.</p>
                <p>This method makes Ventrilo an attractive resource for gamers. The servers are more stable and more reliable than direct connections, and the voice quality is supreme. The program also happens to be very lightweight, as to not distract processing power from high performance games. Ventrilo is the choice application for gamers who want to talk to other gamers.</p>
                <p>Most games allow you to browse through a list of joinable servers; a server browser. Ventrilo has no such thing. You are restricted to what server address you might have come across and what people make available. And again, most games allow you to track your buddies somehow, so you can follow them from game server to game server. Ventrilo has no such option. If a buddy leaves his server and you have no other contact, trying to reach him again is a lost cause.</p>
                <p>Ventstatus looks to solve some of these problems. It constantly queries Ventrilo servers for their name, users, and tons of other information. This way, a list of servers and users are available for search.</p>
                <div class="image_float">
                    <img src="images/vent.jpg" alt="Ventrilo Screenshot"/>
                    <p>Image from <a href="http://ventrilo.com/about.php">Ventrilo.com</a></p>
                </div>
                <p>All user activity is kept in logs, so it is possible to find out where a user has been and for how long they have been there. Over a large number of servers logs start to take up a mass amount of space, so data over a few days old is deleted. </p>
                <p>If users tend to feel like they’re being tracked just a little too closely, it is possible to go into stealth mode and disable tracking features. It is also possible to make an entire server private and free from tracking, upon which all data and users are hidden from trackers, regardless of user preferences. </p>
                <p>The Ventrilo client also allows its servers to be split into what are called channels. Each channel can have an infinite number of users, but users in a channel can only hear and speak to other users in that channel. This way large Ventrilo servers can have users move around into different channels depending on what they are doing. If they're playing Counter Strike, they move to the Counter Strike channel. This way people who are talking about the latest movie aren't being drowned out by thirteen year old cries for reinforcements. The names of the channels a server can help Ventstatus identify what kind of games and activities occur within each server. This lets people looking to talk to Counter Strike players find other servers with Counter Strike players.</p>
                <p>Ventstatus finds and detects channels that fit into preset categories. For example, World of Warcraft might have a dozen different names and references that would identify a channel as a World of Warcraft channel. What Ventstatus does is find any channel that has the words WoW, world of warcraft, alliance or horde all get grouped into the world of warcraft group (the last two are the two teams featured in the game). Then, users can search through the world of warcraft group for other Ventrilo servers that play world of warcraft.</p>
                <p>Ventstatus gathers this information by sending a request to a running process. The Ventrilo status process is the official script and program released by Flagship Inc. Whenever a server is queried, the process looks up all the status information and returns it to Ventstatus. Then, the data is gathered, sorted, logged, and displayed out to the user.</p>
                <p>One way this data is displayed is through charts and graphs. The obnoxious green graph displayed on the status page of every server is made out of pure CSS. Data from the most current query, and user logs help Ventstatus generate a bar graph of Ventrilo activity over time. The size and positioning of the bars are all done through CSS. The position is absolute, while the width and height are simply properties of a block element. The timestamp pop-ups are a CSS hack based on the hover property. When one of the block bars is “hovered,” the timestamp pop-up has its display set to ‘block’ from previous ‘none’. The data from the bar graph is based on a CodeIgniter function. </p>
                <p>Next, Ventstatus has a timeline which allows users to see not only the usage, but the history of the Ventrilo server. All usernames are displayed on a horizontal bar graph with a timeline running above. Users can see who was online for how long and when they logged off. This lets users know if they just happened to miss their favorite pal or help predict who might be on in the future. The plan is to eventually have this auto refresh with AJAX technology along with a bar graph as a live feed of server activity. </p>
                <p>The look and feel of Ventstatus is based completely on the needs and expectations of its intended audience: gamers. Gamers like a dark, sleek, detailed website. The site is designed to be inviting and colorful, while maintaining the hardcore feel. All the icons are based off the Fam Fam Fam silk icon pack available online, and really saved a whole lot of time when designing the site. On the Ventrilo display output, each channel type (games, music, afk) all have a matching icon and color to easily identify the channel type. Different users, like administrators, are bolded and given a bright green color to identify them as important users of the server. </p>
                <p>Ventstatus has a script which generates dynamic images through PHP to the user so they can be embedded as signatures on user boards or just displayed on web pages. The images are generated through the GD Library extension for PHP. Math is done to calculate how many usernames are possible to write out without having them run off the image. Additionally, a graph is drawn from the same data used to draw the all CSS graph on the main status page. However, this time the bars are drawn with a GD library function to draw rectangles. </p>
                <p>In addition to dynamic images, the future will hold a spot for dynamic JavaScript output and Flash displays of Ventrilo statuses. These mediums allow for more interactivity, and are generally more popular for teams and clans who want to inform users of their Ventrilo server and status. </p>
                <p>The future has a lot to hold for Ventstatus. One possibility is a Ventstatus buddy list like application for Adobe AIR. Buddies are added to a list, and then as Ventrilo servers are tracked, the buddies’ statuses are updated. This way, users can track other users’ locations in order to talk to them in a high quality low latency environment. It would also offer a simple text chatting feature in case the common Ventrilo server is unavailable.</p><p>Ventstatus is in no way a new idea, but its execution is far well above its competitors. Most other status-like sites feature all sorts of games and do not have time to focus on Ventrilo. However, Ventrilo requires special attention as it is not simply a gaming server. User activity on Ventrilo servers tends to be more loyal and consistent. Ventrilo servers may include five different genres of games in the same server, they might contain none. Ventrilo is unique to the market and its servers require more attention and classification than previously thought. Ventstaus is what is going to pick up the niche.</p>         
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
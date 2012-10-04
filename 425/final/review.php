<?php

$links = array (
	// no the, or click here
	array("http://codeigniter.com/user_guide/toc.html", "CodeIgniter user guide", "This table of contents will give you great examples to learn from, and also acts as a reference when programming."),
	array("http://codeigniter.com/", "CodeIgniter website", "A nice overview and summary of code igniters usage. Also includes links to download and a support forum."),
	array("http://net.tutsplus.com/tutorials/php/codeigniter-basics/", "Getting started with CodeIgniter", "The tutorial that got me started with Codeigniter. Its not entirely  accurate but will explain the MVC standard in short, as well as how it involves Codeigniter."),
	array("http://www.joshsharp.com.au/blog/view/why_you_should_be_using_a_framework", "Why you should be using a framework", "An explanation about the advantages of using a framework in your development. Goes into detail about the MCV standard and its benefits."),
	array("http://ventstatus.com/search/servers/", "VentStatus Servers", "The place to find what I’ve done so far in terms of server tracking. It is most likely going to be full of bugs and slow as snails."),
	array("http://php.net/", "PHP documentation", "The PHP manual. The main place of reference for any PHP programmer."),
	array("http://jquery.com/", "JQuery Javascript framework", "An example of one of the more popular Javascript frameworks. This framework is used everywhere from Google to Wordpress."),
	array("http://cakephp.org/", "Cake PHP Framework", "Another popular PHP framework. A little more restrictive than Codeigniter, but you may find cake more attractive in terms of style."),
	array("http://www.seoconsultants.com/articles/1000/urls.asp", "Search engine friendly urls", "An article about search engine friendly URLS and so called dirty URLS. Codeigniter supports URL rewriting which produces these nice, search engine friendly urls."),
);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>The Making Of VentStatus / The CodeIgniter Framework</title>
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
			<a href="review.php" class="sel">Framework</a>	
			<a href="cell.php">Cell Status</a>			
            <a href="archive.php">History</a>			
            <a href="privacy.php">Privacy</a>
			<a href="author.php">Author</a>
			<a href="feedback.php">Feedback</a>
		</div>
  </div>
	<div id="middle">
    	<div id="main_content" class="with_sidebar">
        <div class="hreview">
            <h2 class="summary">Review of CodeIgniter on Dreamhost</h2>
            <div class="sub_header">
            	<abbr title="2009-03-04T12:52-05:00" class="dtreviewed">Mar 4, 2009</abbr>
            	by <span class="reviewer vcard"><span class="fn">Ian Jennings</span></span>
            </div>
            <span style="display: none;" class="type">product</span>
            <div class="item"><a href="http://codeigniter.com/" class="fn url">CodeIgniter</a></div>
            <blockquote class="description">
                <p>You’re interested in this whole new idea of frameworks, but why spend time on the learning curve when the system you already have in place works fine? Well, you might find yourself using the same functions or classes over and over; modifications of simple tools you would think would already exist in PHP.</p> 
                <p>Well, frameworks are your solution. A framework provides all the standard functions you would (hope would be included) in PHP, as well as a structured format for your files and directories. What are the advantages to this? Well, the code you need to handle cookies, sessions, dates, downloads, uploads, input, output, dates, pagination, templates and most security issues already exists in structured files. The only thing left is to make use of the provided functions.</p> 
                <blockquote class="right">
                	CodeIgniter is an open source web application framework that helps you write kick-ass PHP programs.
                    <a href="http://www.codeigniter.com">CodeIgniter</a>
                </blockquote> 
                <p>The framework that I'm currently using the most is called CI, or CodeIgniter. It requires no use of the command line or any process installed on your server. It has a very well written documentation, a low footprint and happens to be one of the higher performing frameworks. What I find most attractive, however, is that rather than constricting you into a MVC model (more on this later), CodeIgniter simply presents the model to you, and it is up to the programmer to follow the model as loose or strict as they want.</p>
                <p>The site I’m using CodeIgniter on is called <a href="http://www.ventstatus.com">VentStatus</a>. VentStatus is a tool used to track the users and servers of a VOIP (voice over internet protocol) program called Ventrilo. Ventstatus constantly queries Ventrilo servers for things like their user count, their uptime, channels, and current users. </p>
                <p>CodeIgniter is a good choice for this kind of website. An external process is called to check the status of servers, so CodeIgniter’s caching and speed helps to make up for lost time calling the process.</p>
                <p>Most frameworks are based on the MVC framework. M stands for model,  V for view, and C for controller, but, this isn’t exactly the way I would go about describing the MVC model to anybody.</p>
                <blockquote class="left">
                	<img src="images/mvc.jpg" alt="An explanation of the MVC framework"/>
                    <a href="http://www.adobe.com/newsletters/edge/october2008/articles/article2/index.html?trackingid=DWZST">Adobe</a>
                </blockquote> 
                <p>I would start with the Controller part of MVC. The controller is what is responsible for converting the address bar into directions for your program. The first directory in a given URL specifies a file and class to call. The second directory specifies the function of that class to execute. For example, http://www.ventstatus.com/servers/status/ finds the servers.php file, calls the Servers class, and then executes the status function. Any directories given after /status/ are converted in to variables given to the status function.  The advantage of this is what we call search engine friendly URLs, or URLs that are readable to humans, as well as search engines.</p>
                <p>The next part to introduce would be the Model aspect of MVC. In my head models act as containers full of tools you’re able to make use of in any area of you web application. For example, in my users model, I have a list of functions that relate to manipulating user data. Some of my functions in include adding users, updating users, checking a users last online times and combinations of the past three based on input variables. This helps your program stay organized as you can call any set of tools you need as they are needed, rather than including mass amounts of functions that are unneeded in some areas of your site. </p> 
                <p>Last, but from my perspective one of the more important functions of CodeIgniter is the View part of MVC. The view part of CodeIgniter allows you to keep your content and presentation separate, which has been a repeated idea throughout design. All of your data is taken and made in Model and Controller, and theoretically there should be nothing left to calculate by the time View swings around. Thankfully though, CodeIgniter is not strict, and you can break the rules if you need to. A view page acts as a template for all the data outputted by the controller. So if you were to put somebody else in charge of site design who really had no idea how to program or wasn’t familiar with PHP, you could have them or anybody else work on the page without affecting any actual functioning code. This also allows you to make consistent header and footer templates to include on every page in your site, rather than coding the same thing over and over again.</p>
				<blockquote class="right">You have more time to focus on the fun things like developing new software rather than trying to find out how to account for daylight savings time in Utah.<a href="http://www.codeigniter.com"></a> </blockquote>
				<p>Now one of the great things about  CodeIgniter is the prewritten libraries and classes to help you write code more  quickly. These range from database classes to text formatting. They can be  included as needed, and really help simplify things. The whole point of  CodeIgniter is to help you by not "reinventing the wheel" so to speak. You  won't waste time writing code that has already been written my thousands of  programmers millions of times. You have more time to focus on the fun things  like developing new software rather than trying to find out how to account for  daylight savings time in Utah.</p>
<p>One of the most useful classes in CodeIgniter  is what is called &quot;Active Records&quot; in the database class. Instead of wasting  time debugging long database queries, Active Records lets you assign clauses as  you need to, and execute the query whenever you want. It also includes  shorthand functions for some more complicated but common database functions. </p>
<p>As I mentioned above, CodeIgniter  also has great time zone management. Since all site users are on different time  zones, any time stored in the database has to be based on the same standard time  zone, and any time or date outputted must be custom tailored to each user.  CodeIgniter includes a class which gives you a standard timestamp, as well as  conversion to other time zones based on the user's preference.</p>
<p>The View part of MVC is a great  timesaver as well. Over the years I've developed my own template system. MVC  allows for a standard template system for all of my projects. The template  system also enables caching to boost site performance, and load times.</p>
<p>I’ve run into a few hills while working on VentStatus, but the time CodeIgniter has saved me while developing makes up for it and then some.</p>
   <blockquote class="left"> CodeIgniter is definitely the solution for a developer looking for a speedy, useful, easy going framework with a minimal learning curve.</blockquote>
 <p>For one, the way CodeIgniter formats its URLs is a little buggy, not to mention confusing. For example, anything that is not an image, php, css, or html document is routed through CodeIgniter’s URL system. Linking to something like a pdf in a subdirectory of your web server won’t work unless you add an exception to your .htaccess file or CodeIgniter files. There may be tricks around this, but I haven’t looked too far into it yet. Another problem may be specific to my webhost (Dreamhost) who uses some non standard practices in their Apache setup. However, I found support quickly in CodeIgniter’s support forums.</p>
                <p>Overall there isn’t much I can really say is bad about CodeIgniter. Nothing about CodeIgniter is mandatory. CodeIgniter is definitely the solution for a developer looking for a speedy, useful, easy going framework with a minimal learning curve.</p>
</blockquote>
</div>
    </div>
    
    	<div id="sidebar"> 
        	<ul id="links">
				<?php
                $i=0;
                while ($i < count($links)){
                ?>
                    <li><a href="<?php echo $links[$i][0]; ?>"><?php echo $links[$i][1]; ?></a><?php echo $links[$i][2]; ?>
                  </li>
                <?php
                $i++;
                }
                ?>
        	</ul>
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
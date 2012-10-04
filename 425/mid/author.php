<?php

$links = array (
	// no the, or click here
	array("http://www.ventstatus.com", "VentStatus", "My current project, still a bit slow (and buggy)."),
	array("http://www.22pixels.com", "22Pixels", "My first site, photoshop downloads database and gallery."),
	array("http://www.supplycrate.com", "SupplyCrate", "Retail site where screen crosshairs are sold."),
	array("http://j3nnings.deviantart.com", "J3nnings.Deviantart", "All of my artwork in one gallery."),
);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>About Ian Jennings</title>
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
      	<div id="author">
         	<p>They call me Ian Jennings Jablonowski. Though I try to simplify my life and go by Ian Jennings as often as possible. I am currently a Freshman at Rutgers University in New Jersey. Although I haven't declared a major yet, I've been focusing on communications major with a focus in Information Technology. Currently I make most of my money as part of a two man operation that creates websites for industrial companies based in Indiana.</p>
            <img src="images/author/22pixels.gif" class="left" alt="A screenshot of 22pixels.com"/>
            <p>My first website, and now part time job and sandbox is known as <a href="http://www.22pixels.com">22Pixels.com</a>. 22Pixels was officially registered in 2005, though I had a few working sites under different names before I settled on one. 22Pixels is a collection of Photoshop download from around the internet. It allows people to find normally obscure Photoshop resources all in one place. For now, all the resources are added by me. 22Pixels also has a very helpful and welcoming community forum.</p>
            <img src="images/author/ventstatus.gif" class="right" alt="A screenshot of ventstatus.com"/>
            <p>My latest project, and what you're probably most interested in, is <a href="http://www.ventstatus.com">VentStatus.com</a>. Ventstatus works with the program Ventrilo by Flagship. Ventrilo is a VOIP chat program, which allows people to create and join voice chat rooms. VentStatus tracks which users use which chatrooms, so you can find out who is online before joining, what other servers users are interested in, and what kind of games each server plays.</p>
            <p>I also created the original Team Fortress 2, or <a href="http://www.tf2.com">TF2.com</a> website. That is, before Valve acquired it. Though I swear I can see some similarities between my design and theirs.</p>
            <img src="images/author/tf2.gif" alt="A comparison between tf2.com and my original design"/><br /><br />
            <img src="images/author/supply.gif" class="left" alt="A screenshot of supplycrate.com"/>
            <p>There was a trick competitive gamers used to use in order to achieve better accuracy in first person shooter games. We would take some tape, a sharpie, and draw a dot in the middle of our monitor. I found this to be a great opportunity  for a commercialized  product, and now sell individual crosshairs for computer monitors at <a href="http://www.supplycrate.com">http://www.supplycrate.com</a>.</p>
            <p>I've also written a couple pages for Stephen Cawood's <a href="http://www.amazon.com/Halo-Hacks-Tools-Finishing-Fight/dp/0596100590/ref=pd_bbs_sr_1?ie=UTF8&amp;s=books&amp;qid=1232562924&amp;sr=8-1">Halo 2 Hacks</a> and almost an entire chapter for his book, <a href="http://www.amazon.com/Black-Halo-Mods-Stephen-Cawood/dp/0672328046/ref=pd_bbs_sr_1?ie=UTF8&amp;s=books&amp;qid=1232562883&amp;sr=8-1">The Black Art Of Halo Mods. </a></p>
            <img src="images/author/graff.gif" class="right" alt="Spray paint version of one of Andy Warhol's pieces" />
            <p>When I have spare seconds, I try to get in touch with my creative side. I have a full portfolio of my artwork at <a href="http://j3nnings.deviantart.com">deviant art</a>. I love to work with large canvas (spray paint), but am also very interested in vector and pixel based digital design.</p>
      	</div>
   	  </div>
    
    	<div id="sidebar">
        <img src="images/author/me.gif" alt="A candid picture of me"/>
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
  </div>
</div>
</body>
</html>
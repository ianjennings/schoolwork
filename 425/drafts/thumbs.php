<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>The end of the world</title>

<style type="text/css">
body{
	font-family: Tahoma;
	font-size: 11px;
	color: #000000;
	background-color: #F6FEFF;
}
.right {
	float: right;
}
.left {
	float: left;
}
.gallery {
	width: 840px;
	float: left;
	}
.figure {
	margin: 5px;
	width: 260px;
	float: left;
	background-color: #201E18;
	color: #F5B741;
	padding: 5px;
}
.gallery .desc {
	line-height: 200%;
	margin-right: 5px;
	margin-left: 5px;
	font-size: 12px;
}
.figure:hover {
	background-color: #000000;
}
.figure p{
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 5px;
	margin-left: 5px;
}
.figure img{
	width: 260px;
	margin: 0px;
	padding: 0px;
	border: none;
}
.figure a:link, .figure a:hover{
}
.wrapper {
	margin-right: auto;
	margin-left: auto;
	width: 810px;
}
.subject {
	color: #FFFFFF;
	text-transform: uppercase;
	display: block;
	margin-bottom: 5px;
}
.fn {
	display: block;
	color: #7F7F7F;
	margin-top: 5px;
}
</style>
</head>
<body>
<?php

error_reporting(E_ALL ^ E_NOTICE);

$thumbs = array (
	array("3", "A foggy January morning", "Al Gores attempt to solve global warming put almost all forms of public transportation to a hault."),
	array("5", "A desperate attempt to escape the ice", "A trucks treadmarks the driver makes an attempt to escape their icy fate."),
	array("0", "An ice covered childrens area", "Disabled children are no longer able to enjoy their ourdoor playground, thanks Al Gore."),
	array("7", "As the ice clears up", "A couple students venturing out toward what is only the beginning of the storm."),
	array("8", "Some confusion", "This Rutgers student was unaware of Al Gores plan for the weather changes today."),
	array("1", "Deep Slush", "Comparing the length of a normal sign and this submerged DO NOT ENTER sign, we can conclude that Al Gore was the cause of the oh so many inches of slush last week."),
	array("4", "A frozen walkway", "Although it may look friendly, walkway injuries were a common occurrence during Al Gores day of reckoning."),
	array("6", "A determined couple", "Although classes werent canceled, very few students made the attempt to futher their education."),
	array("2", "18 on this treacherous day", "Road conditions were the lowest in years, only emergency vehicles were seen on the road."),
	);

?>   
    <div class="wrapper">
    
        <div class="gallery">
		
        <h1>The end of the world</h1>
        
        <p class="desc">As a final desperate cry for attention, Al Gore has come up with his own solution to global warming. Rather than wait for citizens to clean their own act up, Gore took matters into his own hands. In late January 2009, Gore managed to lower the average temperature of the Earth by almost 10 degrees through unknown means. Although unsuccessful at fixing our global warming problem, Gore found a temporary solution. This unnatural change was only temporary, but has caused catastrophic changes to the earths precipitation. Gore has stated that his next attempt to fix our global warming problem will be by manually refreezing our polar ice caps.</p>
        
        	<?php
			$i=0;
			while ($i < 9){
				?><div class="figure left">
                    <a href="images/eow/<?php echo $thumbs[$i][0]; ?>.JPG"><img class="image" src="images/eow/260/<?php echo $thumbs[$i][0]; ?>.gif" alt="<?php echo $thumbs[$i][1]; ?>" /></a>
                    <p class="legend">
                        <span class="subject"><?php echo $thumbs[$i][1]; ?></span><?php echo $thumbs[$i][2]; ?>
                        <span class="vcard credit">
                            <span class="fn">Ian Jennings</span>
                        </span>
                    </p>
                </div>
                <?php
				$i++;
			}
			?>
        
        </div>
    
    </div>
    
</body>
</html>
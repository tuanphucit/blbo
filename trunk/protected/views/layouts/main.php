<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<!--GOOGLE CUSTOM FONT LINK-->
<link rel="stylesheet" href="<?php echo Html::cssUrl('style.css');?> " type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo Html::cssUrl('prettyPhoto.css');?> " type="text/css" media="screen" />

<!--SCRIPTS-->
<script type="text/javascript" src="<?php echo Html::jsUrl('jquery.min.js');?> "></script>
<script type="text/javascript" src="<?php echo Html::jsUrl('jquery-ui-1.8.13.custom.min.js');?> "></script>
<script type="text/javascript" src="<?php echo Html::jsUrl('prettyphoto.js');?> "></script>
<script type="text/javascript" src="<?php echo Html::jsUrl('activity.js');?> "></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo Html::jsUrl('gmap3.min.js');?> "></script>
<script type="text/javascript" src="<?php echo Html::jsUrl('jquery.backstretch.min.js');?> "></script>
<script type="text/javascript" src="<?php echo Html::jsUrl('jquery.animate-colors-min.js');?> "></script>
<script type="text/javascript" src="<?php echo Html::jsUrl('custom.js');?> "></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

</head>

<body>

<div id="gMap"></div>

<div id="header">
	<!--LOGO-->
	<a id="logo" href="index.html"><img src="<?php echo Html::imageUrl('logo.png');?> " alt="The Navigator" /></a> 
	<!--DESCRIPTION-->
	<h2 id="description">Black Box Project</h2>	
	<!--NAVIGATION MENU-->
	<div id="navigation">
		<ul id="dropmenu" class="menu">
			<!--CURRENT MENU ITEM (class name = current-menu-item)-->
			<li class="current-menu-item"><a href="index.html">Home</a>
			<ul class="sub-menu">
				<li><a href="#">Africa</a></li>
				<li><a href="#">Asia</a></li>
				<li><a href="#">Australia</a></li>
				<li><a href="#">Europe</a></li>
				<li><a href="#">North America</a></li>
				<li><a href="#">South America</a></li>
				<li><a href="#">View All</a></li>
			</ul>
			</li>
			<li><a href="about.html">About</a></li>
			<li><a href="blog.html">Blog</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a target="_blank" href="#">Goto &rarr;</a></li>
		</ul>
	</div>
</div><!--end header-->	

<div id="loading"></div>

<div id="contentContainer">
	<?php echo $content?>
</div><!--end contentContainer-->

<div id="footer">

	<!--WIDGET PANEL OPEN/CLOSE-->
	<a href="#" id="widgetsOpen" title="More" class="widgetsToggle">+</a>
	<a href="#" id="widgetsClose" title="Close" class="widgetsToggle">&times;</a>	
	
	<!--SEARCH (NOT FUNCTIONAL)-->	
	<div id="footerSearch">
		<form method="get" action="/">
			<input type="image" src="<?php echo Html::imageUrl('mag_glass.png');?>" id="searchsubmit" alt="GO!" />
			<input type="text" value="" onfocus="this.value=''; this.onfocus=null;"  name="s" id="s" />
		</form>
	</div>
	
	<!--SOCIAL BUTTONS-->
	<div id="socialStuff">
		<a class="socialicon" id="rssIcon" href="#"  title="Subscribe via RSS" rel="nofollow"></a>
		<a class="socialicon" id="facebookIcon" href="#"  title="Facebook" rel="nofollow"></a>
		<a class="socialicon" id="twitterIcon" href="#" title="Follow on Twitter" rel="nofollow"></a>
		<!--
		<a class="socialicon" id="vimeoIcon" href="#" title="Vimeo" rel="nofollow"></a>
		<a class="socialicon" id="skypeIcon" href="#" title="Skype" rel="nofollow"></a>
		<a class="socialicon" id="myspaceIcon" href="#" title="MySpace" rel="nofollow"></a>
		<a class="socialicon" id="flickrIcon" href="#" title="Flickr" rel="nofollow"></a>
		<a class="socialicon" id="linkedinIcon" href="#" title="LinkedIn" rel="nofollow"></a>
		<a class="socialicon" id="youtubeIcon" href="#" title="YouTube" rel="nofollow"></a>
		-->
	</div>
		
	<!--COPYRIGHT NOTICE - IMPORTANT! DO NOT REMOVE GOOGLE NOTICE -->
	<div id="copyright">
	&copy; 2011 Black Box Project. Map by Google. Site by <a href="eTeam.vn">eTeam.vn</a>
	</div>	
	
	<!--THIS SHOULD BE THE TITLE OF THE PAGE-->
	<div class="pageContent">
		<h2>Thông tin chi tiết</h2>
	</div>
</div><!--end footer-->

</body>
</html>
<div id="content">

<div id="main" >

	<div id="handle"></div>
	<div id="closeBox"></div>
		
	<div  class="post">
		<!--POST TITLE-->
		<h2 class="posttitle"><?php echo $bus->code?></h2>
		
		<!--BREADCRUMB LINKS-->
		<div id="crumbs"><a href="#">Home</a> &nbsp;/&nbsp; <a href="#" title="View all posts in Locations">Locations</a> &nbsp;/&nbsp; <span class="current">Current Page</span></div>				
		
		<!--POST DETAILS-->
		<div id="entryToggle" class="toggleButton opened"><span>&times;</span>Info</div>
		<div class="entry">
			<p id='postAddr'>
				Thông tin về xe ở đây
				<em><a title='Track now' href='#'>Track now &rarr;</a></em>
			</p>	
			<!--GREEN CHECKMARK LIST-->		
			<ul class="goodList">
				<li>Biển số </li>
				<li>Tài xế</li>
				<li>Hãng xe</li>
			</ul>
			<!--YELLOW YIELD SIGN LIST-->
			<ul class="okList">
				<li>Giờ mở cửa</li>
				<li>Giở đóng cửa</li>
			</ul>
			<!--RED EXCLAMATION POINT LIST-->
			<ul class="badList">
				<li>Tốc độ</li>
				<li>Nhiên liệu</li>
				<li>Trạng thái</li>
			</ul>		
       	</div><!--end entry-->
		
		<!--IMAGE GALLERY-->
		<div id="galleryToggle" class="toggleButton closed"><span>+</span>Galery</div>
		<ul class="galleryBox">
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large1.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum1.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large2.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum2.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large3.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum3.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large4.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum4.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large5.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum5.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large6.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum6.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large7.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum7.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large8.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum8.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large1.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum1.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large2.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum2.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large3.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum3.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large4.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum4.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large5.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum5.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large6.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum6.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large7.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum7.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large8.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum8.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large1.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum1.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large2.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum2.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large3.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum3.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large4.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum4.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large5.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum5.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large6.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum6.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large7.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum7.jpg');?>" alt=""/></a></li>
       		<li class="wrapperli"><a href="<?php echo Html::imageUrl('thumbs/large8.jpg');?>"><img src="<?php echo Html::imageUrl('thumbs/small_colosseum8.jpg');?>" alt=""/></a></li>       
       	</ul><!--end galleryBox-->
		
		<!--SHARE BUTTONS-->       
       	<div id="socialToggle" class="toggleButton closed"><span>+</span>Share</div>
       	<div id="socialButtons">
       		<div class="socialButton">	
       			<!--ENTER TWITTER USERNAME IN DATA-VIA DECLARATION BELOW-->
				<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="theMOLITOR">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
			</div>
			<div class="socialButton">	
				<g:plusone size="medium" count="false"></g:plusone>
			</div>	
			<div class="socialButton">
				<!--ENTER PAGE URL IN THE HREF DECLARATION BELOW-->
				<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="#" send="false" layout="button_count" width="100" height="21" show_faces="true" action="recommend" colorscheme="light" font=""></fb:like>
			</div>	
			<div class="clear"></div>
		</div><!--end socialButtons-->
       
       	<!--META INFO-->
		<div id="tagsToggle" class="toggleButton"><span>+</span>Meta</div>
       	<div id="tags">
       		<p>Posted: July 9, 2011</p>
       		<p>Network: 2G</p> 
       	</div><!--end tags-->
	</div><!--end post-->

<script type="text/javascript">
jQuery.noConflict(); jQuery(document).ready(function(){

	cLat = 0; cLong = 0;
	updateLocation();
	function updateLocation() {
		jQuery.ajax({
			  url: "<?php echo $this->createUrl('/bus/now',array('id'=>$bus->id))?>",
			  complete: function(){
				  updateLocation();
			  },
			  success: function(location){
			  	location = location.split("|");
			  	lat  = location[0];
			  	long = location[1];
			  	if ((lat != cLat) && (long != cLong)){
				  	cLat = lat;
				  	cLong = long;
				  	jQuery('#gMap').gmap3({
				    	action: 'addMarker',
				    	//LATITUDE AND LONGITUDE OF MARKER - REQUIRED
				    	lat:lat,
				    	lng:long,
				    	marker:{
				    		//PIN MARKER IMAGE
				      		options:{icon: new google.maps.MarkerImage('<?php echo Html::imageUrl('pin.png')?>')}
				    	},
				    	map:{
				     	 center: true,
				     	 zoom: zoomLevel
				   		}
					},{
						action: 'setOptions', args:[{
							scrollwheel:false,
							disableDefaultUI:true,
							disableDoubleClickZoom:true,
							draggable:true,
							mapTypeControl: false,
							panControl:false,
							scaleControl:false,
							streetViewControl:false,
							zoomControl:false,
							//MAP TYPE: 'roadmap', 'satellite', 'hybrid'
							mapTypeId:'roadmap'
						}]
					});
			  	}
			  }
			});
	} 
	
	//MAP ZOOM (0 to 20)
	var zoomLevel = 16,
		gMap = jQuery("#gMap"),
		//iPad,iPhone,iPod...
		deviceAgent = navigator.userAgent.toLowerCase(),
		iPadiPhone = deviceAgent.match(/(iphone|ipod|ipad)/);
		
	//iPad Stuff
	if (iPadiPhone) {
		//ADDS MAP CONTROLS
		jQuery("#footer").append('<div id="mapTypeContainer"><div id="mapStyleContainer" class="gradientBorder"><div id="mapStyle"></div></div><div id="mapType" class="roadmap"></div></div>');	} else {
		jQuery('#zoomIn').live('click',function(){
			zoomLevel += 1;
			gMap.gmap3({action: 'setOptions', args:[{zoom:zoomLevel}]});
		});
		jQuery('#zoomOut').live('click',function(){
			zoomLevel -= 1;
			gMap.gmap3({action: 'setOptions', args:[{zoom:zoomLevel}]});
		});
		//ADDS MAP CONTROLS
      	jQuery("#footer").append('<div id="mapTypeContainer"><div id="mapStyleContainer" class="gradientBorder"><div id="mapStyle"></div></div><div id="mapType" class="roadmap"></div></div><div class="zoomControl" id="zoomOut"><img src="<?php echo Html::imageUrl('zoomOut.png');?>" alt="-" /></div><div class="zoomControl" id="zoomIn"><img src="<?php echo Html::imageUrl('zoomIn.png');?>" alt="+" /></div>');
    } 
    	
	jQuery('#gMap').gmap3({
    	action: 'addMarker',
    	//LATITUDE AND LONGITUDE OF MARKER - REQUIRED
    	lat:<?php echo $bus->cLat;?>,
    	lng:<?php echo $bus->cLong;?>,
    	marker:{
    		//PIN MARKER IMAGE
      		options:{icon: new google.maps.MarkerImage('<?php echo Html::imageUrl('pin.png')?>')}
    	},
    	map:{
     	 center: true,
     	 zoom: zoomLevel
   		}
	},{
		action: 'setOptions', args:[{
			scrollwheel:false,
			disableDefaultUI:true,
			disableDoubleClickZoom:true,
			draggable:true,
			mapTypeControl: false,
			panControl:false,
			scaleControl:false,
			streetViewControl:false,
			zoomControl:false,
			//MAP TYPE: 'roadmap', 'satellite', 'hybrid'
			mapTypeId:'roadmap'
		}]
	});

	
});
</script>

</div><!--end main-->

<div id="sidebar">
<ul>
<!--WIDGET 1-->
<li class="widget">
	<h2 class="widgettitle">Sponsors</h2>			
	<a href="http://themeforest.net/user/themolitor/portfolio?ref=themolitor">
		<img src="http://www.lakewaparks.com/wp/wp-content/uploads/2011/07/tf_260x120.gif" alt="ThemeForest" />
	</a>
</li><!--end widget-->

<!--WIDGET 2-->
<li class="widget">
	<h2 class="widgettitle">Text Widget</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis aliquet commodo. Sed consequat lorem a quam fermentum auctor. Donec quis nisi mi. In vel justo sem, quis iaculis tellus. Sed molestie imperdiet sapien, sed adipiscing tellus imperdiet at. Donec id orci sed elit eleifend luctus.</p>
</li><!--end widget-->

<!--WIDGET 3-->
<li class="widget">
	<h2 class="widgettitle">Tags</h2>
	<div class="tagcloud">
		<a href='#'>Africa</a>
		<a href='#'>All</a>
		<a href='#'>Argentina</a>
		<a href='#'>Arizona</a>
		<a href='#'>Asia</a>
		<a href='#'>Australia</a>
		<a href='#'>Brazil</a>
		<a href='#'>China</a>
		<a href='#'>Egypt</a>
		<a href='#'>England</a>
		<a href='#'>Europe</a>
		<a href='#'>France</a>
		<a href='#'>India</a>
		<a href='#'>Italy</a>
		<a href='#'>Mexico</a>
		<a href='#'>New York</a>
		<a href='#'>North Africa</a>
		<a href='#'>North America</a>
		<a href='#'>Paris</a>
		<a href='#'>Rome</a>
		<a href='#'>South America</a>
		<a href='#'>UK</a>
		<a href='#'>US</a>
	</div>
</li><!--end widget-->
</ul>
<div class="clear"></div>
</div><!--end sidebar-->

<div class="clear"></div>
</div><!--end content-->
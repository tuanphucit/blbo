<div id="content">
	
	<script type="text/javascript">
	//<![CDATA[
	jQuery.noConflict(); jQuery(document).ready(function(){  
    	//MAP ZOOM (0 to 20)
    	var zoomLevel = 16,
		gMap = jQuery("#gMap"),
		//iPad,iPhone,iPod...
		deviceAgent = navigator.userAgent.toLowerCase(),
		iPadiPhone = deviceAgent.match(/(iphone|ipod|ipad)/);
		
	//iPad Stuff
	if (iPadiPhone) {
		//ADD MAP CONTROLS AND POST ARROWS
		jQuery("#footer").prepend('<div class="markerNav" title="Prev" id="prevMarker">&lsaquo;</div><div id="markers"></div><div class="markerNav" title="Next" id="nextMarker">&rsaquo;</div><div id="mapTypeContainer"><div id="mapStyleContainer"><div id="mapStyle" class="satellite"></div></div><div id="mapType" title="Map Type" class="satellite"></div></div>');
	} else {//IF NOT iPad
		jQuery('#zoomIn').live('click',function(){
			zoomLevel += 1;
			gMap.gmap3({action: 'setOptions', args:[{zoom:zoomLevel}]});
		});
		jQuery('#zoomOut').live('click',function(){
			zoomLevel -= 1;
			gMap.gmap3({action: 'setOptions', args:[{zoom:zoomLevel}]});
		});
		//ADD MAP CONTROLS AND POST ARROWS
      	jQuery("#footer").prepend('<div class="markerNav" title="Prev" id="prevMarker">&lsaquo;</div><div id="markers"></div><div class="markerNav" title="Next" id="nextMarker">&rsaquo;</div><div id="mapTypeContainer"><div id="mapStyleContainer"><div id="mapStyle" class="satellite"></div></div><div id="mapType" title="Map Type" class="satellite"></div></div><div class="zoomControl" title="Zoom Out" id="zoomOut"><img src="images/zoomOut.png" alt="-" /></div><div class="zoomControl" title="Zoom In" id="zoomIn"><img src="images/zoomIn.png" alt="+" /></div>');
    }    
        jQuery('body').prepend("<div id='target'></div>");
        
        gMap.gmap3({ 
        	action: 'init',
            onces: {
              bounds_changed: function(){
              	var number = 0;
                jQuery(this).gmap3({
                  action:'getBounds', 
                  callback: function (){
//ADD MARKERS HERE - FORMAT IS AS FOLLOWS...
//add(jQuery(this), number += 1, "NAME", "URL","ADDRESS1<br />ADDRESS2","LATITUDE","LONGITUDE", 'THUMBNAIL');
<?php
	foreach ($buses as $bus){
		$bus->getCLocation();
		echo "add(jQuery(this), number += 1, '$bus->code', '".$this->createUrl('/bus/index',array('id'=>$bus->id))."','','$bus->cLat','$bus->cLong', '".Html::image(Html::imageUrl($bus->images),null,array('width'=>'95','height'=>'95'))."');";
	}
?>                  
                  }
                });
              }
            }
          },{ 
			action: 'setOptions', args:[{
				zoom:zoomLevel,
				scrollwheel:false,
				disableDefaultUI:true,
				disableDoubleClickZoom:true,
				draggable:true,
				mapTypeControl:false,
				panControl:false,
				scaleControl:false,
				streetViewControl:false,
				zoomControl:false,
				//MAP TYPE: 'roadmap', 'satellite', 'hybrid'
				mapTypeId:'roadmap',
			
			}]
		});
        function add(jQuerythis, i, title, link, excerpt, lati, longi, img){
          jQuerythis.gmap3(
		  
		  {
            action : 'addMarker',
            lat:lati,
            lng:longi,
			
            //PIN MARKER IMAGE
            options: {icon: new google.maps.MarkerImage('images/pin.png'),
					  content: 'fuck',
					  
			},
			
			

			
            events:{
       			
      			click: function(marker){window.location = link}
   			},
            callback: function(marker){
              var jQuerybutton = jQuery('<div id="marker'+i+'" class="marker"><div id="markerInfo'+i+'" class="markerInfo"><a href="'+link+'">'+img+'</a><h2><a href="'+link+'">'+title+'</a></h2><p>'+excerpt+'</p><a class="markerLink" href="'+link+'">View Details &rarr;</a><div class="markerTotal">'+i+' / <span></span></div></div></div>');
              jQuerybutton.mouseover(function(){
                  jQuerythis.gmap3({
                    action:'panTo', 
                    args:[marker.position]
                  });
                  jQuery("#target").stop(true,true).fadeIn(1200).delay(500).fadeOut(1200);
               });
              jQuery('#markers').append(jQuerybutton);
              var numbers = jQuery(".markerInfo").length;
              jQuery(".markerTotal span").html(numbers);
              if(i == 1){
              	jQuery('.marker:first-child').addClass('activeMarker').mouseover();
              }
              jQuerythis.gmap3({
              	action:'addOverlay',
              	content: '<div id="markerTitle'+i+'" class="markerTitle">'+title+'</div>',
              	latLng: marker.getPosition()
               });
            }    		
          },
		   { action:'addOverlay',
				content:  '<div style="color:#FFFFFF; border:1px solid #FFFFFF; ' +
              'background-color: #242424; width:70px; line-height:20px; ' +
              'height: 20px; text-align:center;font-size:12px;">'+title+'</div>',
				lat:lati,
				lng:longi,
				offset:{
					y:-32,
					x:12
					}
			}

		  );
        }
});
//]]>
</script>

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
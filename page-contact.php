<?php get_header(); ?>

<body>
	<div class="container">
		<div class="innerwrap">
		
			<section class="section1 clearfix">
				<div class="textcenter">
					<span class="shtext">Contact Us</span>
					<span class="seperator"></span>
					<h1>Drop Us a Mail</h1>
				</div>
			</section>
		
			<section class="section2 clearfix">
				<div class="col2 column1 first">
					<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div class="sec2map" style='overflow:hidden;height:550px;width:100%;'><div id='gmap_canvas' style='height:100%;width:100%;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">free web directories</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(19.075314480255834,72.88153973865361),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(19.075314480255834,72.88153973865361)});infowindow = new google.maps.InfoWindow({content:'<strong>My Location</strong><br>mumbai<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
				</div>
				<div class="col2 column2 last">
					<div class="sec2innercont">
						<div class="sec2addr">
							<p>45 BC, a Latin professor at Hampden-Sydney College in Virginia</p>
							<p><span class="collig">Phone :</span> +91 976885083</p>
							<p><span class="collig">Email :</span> vivek.mengu016@gmail.com</p>
							<p><span class="collig">Fax :</span> +91 9768850839</p>
						</div>
					</div>
					<div class="sec2contactform">
						<h3 class="sec2frmtitle">Want to Know More?? Drop Us a Mail</h3>
						<form action="">
							<div class="clearfix">
								<input class="col2 first" type="text" placeholder="FirstName">
								<input class="col2 last" type="text" placeholder="LastName">
							</div>
							<div class="clearfix">
								<input  class="col2 first" type="Email" placeholder="Email">
								<input class="col2 last" type="text" placeholder="Contact Number">
							</div>
							<div class="clearfix">
								<textarea name="textarea" id="" cols="30" rows="7">Your message here...</textarea>
							</div>
							<div class="clearfix"><input type="submit" value="Send"></div>
						</form>
					</div>

				</div>
			</section>
		
		</div>
	</div>
</body>




<!-- <div class='contactinfo'>
          <div>   
            <p>P. 64 3 366 1232</p>
            <p>E. craftedjewels@kennett.net.nz</p>
            <p>Billens House,</p>
            <p>175 High Street,</p>
            <p>Christchurch 8011</p>
          </div>
          <div class='hours'>
            <p>Mon-Fri 9.30am-5.00pm</p>
            <p>Sat 10.00am-3.00pm</p>
          </div> -->

<?php
get_footer(); ?>
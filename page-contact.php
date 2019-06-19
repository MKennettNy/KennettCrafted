<?php get_header(); ?>



<div class="contactForm">  
	<div class="map-responsive">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.3895737596317!2d172.64102595853598!3d-43.53592055857888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d318a2280fe7491%3A0xfa4a25ea7d24f8c6!2sKennett+Crafted+Jewels!5e0!3m2!1sen!2snz!4v1560487929314!5m2!1sen!2snz" width="600" height="450" align="center" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
    <div class="contactInformation">
        <div class='contactqinfo'>
            <h3>Contact</h3>
            <p>P. 64 3 366 1232</p>
            <p>E. craftedjewels@kennett.net.nz</p>
            <p>Billens House,</p>
            <p>175 High Street,</p>
            <p>Christchurch 8011</p>
        </div>
        <div class='hours'>
            <p>Mon-Fri 9.30am-5.00pm</p>
            <p>Sat 10.00am-3.00pm</p>
        </div>    
		</div>
		
  <form id="contact" action="" method="post">
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
	</form>
	
	
</div>





<?php
get_footer(); ?>
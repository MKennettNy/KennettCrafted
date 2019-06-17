<!-- <?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 
?> -->

<footer class="footer-container">
	<div class="footer-grid">
		<section class="footerTop">
			<div>
				<img class="logo" src='wp-content/themes/jewellery/src/assets/images/footer-logo.png'> 
			</div>
			<div>
				<ul>
					<li>Home</li>
					<li>Designs</li>
					<li>Services</li>
				</ul>		 
			</div>
			<div>
				<ul>		
					<li>About</li>
					<li>Contact</li>
				</ul>	
			</div>
			<div>
				<ul>
					<li>P. 03 366 1232</li>
					<li>Billens House</li>
					<li>175 High Street</li>
					<li>Christchurch 8011</li>
				</ul>		
			</div>
			<div>
				<ul>		
					<li>Mon-Fri 9.30am-5.00pm</li>
					<li>Sat 10.00am-3.00pm</li>
				</ul>	
			</div>
		</section>
				
		<section class="footerBottom">
			<div>
				<p>© 2019 Kennett Crafted Jewels. All Rights Reserved.</p>
			</div>
			<div>
				<img src='wp-content/themes/jewellery/src/assets/images/fb.png'>
				<img src='wp-content/themes/jewellery/src/assets/images/insta.png'>
				<img src='wp-content/themes/jewellery/src/assets/images/pinterest.png'>
				<img src='wp-content/themes/jewellery/src/assets/images/twitter.png'>
			</div>
		</section>	
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>

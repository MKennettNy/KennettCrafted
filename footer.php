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
				<img class="social" src="http://localhost/KennettCrafted/wp-content/uploads/2019/06/footer-logo.png">
			</div>
			<div>
				<ul>
					<a href="http://localhost/KennettCrafted/"><li>Home</li></a>
					<a href="http://localhost/KennettCrafted/"><li>Designs</li></a>
					<a href="http://localhost:3000/KennettCrafted/services/"><li>Services</li></a>
				</ul>		 
			</div>
			<div>
				<ul>		
					<a href="http://localhost/KennettCrafted/#welcome"><li>About</li></a>
					<a href="http://localhost:3000/KennettCrafted/contact/"><li>Contact</li></a>
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
				<a href="https://www.facebook.com/KennettCraftedJewels/"><img class="social" src="http://localhost/KennettCrafted/wp-content/uploads/2019/06/fb.png"></a>
				<a href="https://www.instagram.com/kennettcraftedjewels/"><img class="social" src="http://localhost/KennettCrafted/wp-content/uploads/2019/06/insta.png"></a>
				<a href="https://pl.pinterest.com/kennettjewels/"><img class="social" src="http://localhost/KennettCrafted/wp-content/uploads/2019/06/pinterest.png"></a>
				<a href="https://twitter.com/kennettjewels/"><img class="social" src="http://localhost/KennettCrafted/wp-content/uploads/2019/06/twitter.png"></a>
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

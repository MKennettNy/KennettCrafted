<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container">
	<div class="footer-grid">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
		<section class="logo"> 
		<img src='wp-content/themes/jewellery/src/assets/images/footer-logo.png'>
		</section>
		<section class="menu"> 
			<ul>
				<li>Home</li>
				<li>Designs</li>
				<li>Services</li>
				<li>About</li>
				<li>Contact</li>
			</ul>
		</section>
		<section class="social"> 
			<ul>
				<li><img src='wp-content/themes/jewellery/src/assets/images/fb.png'></li>
				<li><img src='wp-content/themes/jewellery/src/assets/images/insta.png'></li>
				<li><img src='wp-content/themes/jewellery/src/assets/images/pinterest.png'></li>
				<li><img src='wp-content/themes/jewellery/src/assets/images/twitter.png'></li>
			</ul>	
		</section>
		<section class="contact">
			<ul>
				<li>P. 03 366 1232</li>
				<li>Billens House</li>
				<li>175 High Street</li>
				<li>Christchurch 8011</li>
			</ul>	
			<ul>
				<li>Mon-Fri 9.30am-5.00pm</li>
				<li>Sat 10.00am-3.00pm</li>
			</ul>	

		</section>
		</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>

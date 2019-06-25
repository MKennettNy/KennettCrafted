<?php get_header(); ?>

<section class="erImage">
    <img src="http://localhost/KennettCrafted/wp-content/uploads/2019/06/engagementRings.jpg">
</section>

<section class="erInfo">
    <h2>Engagement Rings</h2>
    <?php
    $blurb = get_theme_mod('kc_er_info');
    if($blurb || is_customize_preview()):
    // echo wpautop($blurb);
    echo $blurb;
    endif;
    ?>
</section>


<?php echo do_shortcode('[sp_wpcarousel id="65"]'); ?>

<?php


get_footer(); ?>
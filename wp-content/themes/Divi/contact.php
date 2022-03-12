<?php
/*
Template Name: Contact
 */

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<section id="contact">
	<div class="wrapper">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-pages.png" class="logo-pages">
		<h1 class="main-titleh1 contact-title">Hello there,<br /> how can we help you?</h1>

		<?php echo do_shortcode('[contact-form-7 id="21" title="Contact form 1"]') ?>
	</div><!-- wrapper -->
</section><!-- contact -->

<?php

get_footer();

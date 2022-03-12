<?php
if ( et_theme_builder_overrides_layout( ET_THEME_BUILDER_HEADER_LAYOUT_POST_TYPE ) || et_theme_builder_overrides_layout( ET_THEME_BUILDER_FOOTER_LAYOUT_POST_TYPE ) ) {
    // Skip rendering anything as this partial is being buffered anyway.
    // In addition, avoids get_sidebar() issues since that uses
    // locate_template() with require_once.
    return;
}

/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );

if ( 'on' === et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

<footer id="footer">
	<div class="wrapper wrapper-flex">
		<div class="footer-left">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-footer.png" alt="" title="" class="logo-footer" /></a>
			<p class="footer-p">©2021 All right reserved. </p>
		</div><!-- footer-left -->
		
		<div class="footer-right">
			<div class="social">
				<a href="https://twitter.com/AbstrLabs" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="" title="" /></a>
				<a href="https://www.linkedin.com/in/yifang-ma/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png" alt="" title="" /></a>
				<a href="https://github.com/AbstrLabs" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/github.png" alt="" title="" /></a>
			</div><!-- social -->
			
			<a href="#" class="privacy">Privacy Policy</a>
		</div><!-- footer-right -->
	</div><!-- wrapper -->
	
</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>


</body>
</html>

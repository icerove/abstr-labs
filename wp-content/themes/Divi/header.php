<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php
	elegant_description();
	elegant_keywords();
	elegant_canonical();

	do_action( 'et_head_meta' );

	$template_directory_uri = get_template_directory_uri(); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
	
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<?php wp_head(); ?>
</head>
	
<body <?php body_class(); ?>>
<?php
	wp_body_open();

	$product_tour_enabled = et_builder_is_product_tour_enabled();
	$page_container_style = $product_tour_enabled ? ' style="padding-top: 0px;"' : ''; ?>
	<div id="page-container"<?php echo et_core_intentionally_unescaped( $page_container_style, 'fixed_string' ); ?>>
<?php
	if ( $product_tour_enabled || is_page_template( 'page-template-blank.php' ) ) {
		return;
	}

	$et_secondary_nav_items = et_divi_get_top_nav_items();

	$et_phone_number = $et_secondary_nav_items->phone_number;

	$et_email = $et_secondary_nav_items->email;

	$et_contact_info_defined = $et_secondary_nav_items->contact_info_defined;

	$show_header_social_icons = $et_secondary_nav_items->show_header_social_icons;

	$et_secondary_nav = $et_secondary_nav_items->secondary_nav;

	$et_top_info_defined = $et_secondary_nav_items->top_info_defined;

	$et_slide_header = 'slide' === et_get_option( 'header_style', 'left' ) || 'fullscreen' === et_get_option( 'header_style', 'left' ) ? true : false;
?>	

	<?php ob_start(); ?>
		<section id="top">
			<header id="header-top" data-height-onload="<?php echo esc_attr( et_get_option( 'menu_height', '66' ) ); ?>">
				<div class="wrapper wrapper-flex height100">
					<div class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="" title="">
						</a>
					</div><!-- logo -->

					<div id="et-top-navigation" data-height="<?php echo esc_attr( et_get_option( 'menu_height', '66' ) ); ?>" data-fixed-height="<?php echo esc_attr( et_get_option( 'minimized_menu_height', '40' ) ); ?>">
						<?php if ( ! $et_slide_header || is_customize_preview() ) : ?>
							<nav id="top-menu-nav">
							<?php
								$menuClass = 'nav';
								if ( 'on' === et_get_option( 'divi_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';
								$primaryNav = '';

								$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => 'top-menu', 'echo' => false ) );
								if ( empty( $primaryNav ) ) :
							?>
								<ul id="top-menu" class="<?php echo esc_attr( $menuClass ); ?>">
									<?php if ( 'on' === et_get_option( 'divi_home_link' ) ) { ?>
										<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'Divi' ); ?></a></li>
									<?php }; ?>

									<?php show_page_menu( $menuClass, false, false ); ?>
									<?php show_categories_menu( $menuClass, false ); ?>
								</ul>
							<?php
								else :
									echo et_core_esc_wp( $primaryNav );
								endif;
							?>
							</nav>
						<?php endif; ?>

						<?php
						if ( ! $et_top_info_defined && ( ! $et_slide_header || is_customize_preview() ) ) {
							et_show_cart_total( array(
								'no_text' => true,
							) );
						}
						?>

						<?php if ( $et_slide_header || is_customize_preview() ) : ?>
							<span class="mobile_menu_bar et_pb_header_toggle et_toggle_<?php echo esc_attr( et_get_option( 'header_style', 'left' ) ); ?>_menu"></span>
						<?php endif; ?>

						<?php /*?><?php if ( ( false !== et_get_option( 'show_search_icon', true ) && ! $et_slide_header ) || is_customize_preview() ) : ?>
						<div id="et_top_search">
							<span id="et_search_icon"></span>
						</div>
						<?php endif; // true === et_get_option( 'show_search_icon', false ) ?><?php */?>

						<?php

						/**
						 * Fires at the end of the 'et-top-navigation' element, just before its closing tag.
						 *
						 * @since 1.0
						 */
						do_action( 'et_header_top' );

						?>
					</div> <!-- #et-top-navigation -->
				</div> <!-- .container -->
			</header> <!-- #main-header -->
			
			<div class="wrapper wrapper-flex-top">
				<div class="top-text">
					<h1>We focus on developing zero knowledge proof technology</h1>
					<h2>We are math people, we trust proof and make proof to work.</h2>
					
					<a href="#" class="main-button">Learn More</a> 
				</div><!-- top-text -->
				
				<div class="imagetop"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image1.svg" alt="" title="" class="image-top"></div>
			</div><!-- wrapper -->
	</section><!-- top -->
		
	<?php
		$main_header = ob_get_clean();

		/**
		 * Filters the HTML output for the main header.
		 *
		 * @since 3.10
		 *
		 * @param string $main_header
		 */
		echo et_core_intentionally_unescaped( apply_filters( 'et_html_main_header', $main_header ), 'html' );
	?>
		<div id="et-main-area">
	<?php
		/**
		 * Fires after the header, before the main content is output.
		 *
		 * @since 3.10
		 */
		do_action( 'et_before_main_content' );

<?php

$sub_directory = dirname( __FILE__ ) . '/library';

return array(
	'%s Library'               => sprintf( esc_html_x( '%s Library', 'Divi Library', 'et_builder' ), 'Divi' ),
	'%d Layout'                => esc_html__( '%d Layout', 'et_builder' ),
	'%d Layouts'               => esc_html__( '%d Layouts', 'et_builder' ),
	'%d Page'                  => esc_html__( '%d Page', 'et_builder' ),
	'%d Pages'                 => esc_html__( '%d Pages', 'et_builder' ),
	'%d Layout Pack'           => esc_html__( '%d Layout Pack', 'et_builder' ),
	'%d Layout Packs'          => esc_html__( '%d Layout Packs', 'et_builder' ),
	'%d Total Layouts'         => esc_html__( '%d Total Layouts', 'et_builder' ),
	'Add New Category'         => esc_html__( 'Add New Category', 'et_builder' ),
	'Add New Layout'           => esc_html__( 'Add New Layout', 'et_builder' ),
	'Add New Pack'             => esc_html__( 'Add New Pack', 'et_builder' ),
	'API Key'                  => esc_html__( 'API Key', 'et_builder' ),
	'Authentication Required'  => esc_html__( 'Authentication Required', 'et_builder' ),
	'Cancel'                   => et_builder_i18n( 'Cancel' ),
	'Categories'               => esc_html__( 'Categories', 'et_builder' ),
	'Category'                 => esc_html__( 'Category', 'et_builder' ),
	'Failed to load your existing layouts. Please try again later.' => esc_html__( 'Failed to load your existing layouts. Please try again later.', 'et_builder' ),
	'Find A Layout'            => esc_html__( 'Find A Layout', 'et_builder' ),
	'Find A Page'              => esc_html__( 'Find A Page', 'et_builder' ),
	'Global'                   => esc_html_x( 'Global', 'Divi Library Global Module', 'et_builder' ),
	'Help'                     => esc_html__( 'Help', 'et_builder' ),
	'Layout'                   => esc_html_x( 'Layout', 'Divi Library Item Type', 'et_builder' ),
	'Layout Details'           => esc_html_x( 'Layout Details', 'Divi Library Title', 'et_builder' ),
	'Layout Pack'              => esc_html__( 'Layout Pack', 'et_builder' ),
	'Layout View'              => esc_html_x( 'Layout View', 'Divi Library View Mode', 'et_builder' ),
	'Layouts In This Pack'     => esc_html_x( 'Layouts In This Pack', 'Layout Pack', 'et_builder' ),
	'Library'                  => esc_html__( 'Library', 'et_builder' ),
	'List View'                => esc_html_x( 'List View', 'Divi Library View Mode', 'et_builder' ),
	'Load From Library'        => esc_html__( 'Load From Library', 'et_builder' ),
	'Manage Categories'        => esc_html_x( 'Manage Categories', 'Layout Categories', 'et_builder' ),
	'Manage Layouts'           => esc_html__( 'Manage Layouts', 'et_builder' ),
	'Manage Packs'             => esc_html_x( 'Manage Packs', 'Layout Packs', 'et_builder' ),
	'Module'                   => esc_html_x( 'Module', 'Divi Library Item Type', 'et_builder' ),
	'No Results'               => esc_html__( 'No Results', 'et_builder' ),
	'No Screenshot'            => esc_html__( 'No Screenshot', 'et_builder' ),
	'Pack View'                => esc_html_x( 'Pack View', 'Divi Library View Mode (Layout Pack)', 'et_builder' ),
	'Premade Layouts'          => esc_html__( 'Premade Layouts', 'et_builder' ),
	'Published'                => esc_html__( 'Published', 'et_builder' ),
	'Replace existing content' => esc_html__( 'Replace existing content', 'et_builder' ),
	'Row'                      => esc_html_x( 'Row', 'Divi Library Layout Type', 'et_builder' ),
	'Search'                   => esc_html__( 'Search', 'et_builder' ),
	'Search Layout Categories' => esc_html__( 'Search For Categories', 'et_builder' ),
	'Search Layout Packs'      => esc_html__( 'Search For Packs', 'et_builder' ),
	'Search Layouts'           => esc_html__( 'Search For Layouts', 'et_builder' ),
	'Section'                  => esc_html_x( 'Section', 'Divi Library Layout Type', 'et_builder' ),
	'Status'                   => esc_html__( 'Status', 'et_builder' ),
	'Submit'                   => esc_html__( 'Submit', 'et_builder' ),
	'Title'                    => et_builder_i18n( 'Title' ),
	'Use This Layout'          => esc_html_x( 'Use This Layout', 'Apply layout to the page', 'et_builder' ),
	'Username'                 => esc_html__( 'Username', 'et_builder' ),
	'Uh Oh!'                   => esc_html__( 'Uh Oh!', 'et_builder' ),
	'View Live Demo'           => esc_html_x( 'View Live Demo', 'Page layout', 'et_builder' ),
	'View Mode'                => esc_html_x( 'View Mode', 'Divi Library', 'et_builder' ),
	'Your Existing Pages'      => esc_html__( 'Your Existing Pages', 'et_builder' ),
	'Your Saved Layouts'       => esc_html__( 'Your Saved Layouts', 'et_builder' ),
	'$apiKeyHelp'              => et_get_safe_localization( sprintf( __( 'You can find your API Key <a href="%s" target="_blank">here</a>.', 'et_builder' ), 'https://www.elegantthemes.com/members-area/api/' ) ),
	// Translators: %1$s = Elegant Themes; %2$s = Divi; %3$s = URL to member area.
	'$expiredAccount'          => et_get_safe_localization( sprintf( __( 'Your %1$s subscription has expired. In order to download Premade Layouts from the %2$s Library you must <a href="%3$s" target="_blank">renew your subscription</a>.', 'et_builder' ), 'Elegant Themes', 'Divi', 'https://www.elegantthemes.com/members-area' ) ),
	// Translators: %1$s = Divi; %2$s = Elegant Themes; %3$s = URL to member area.
	'$noAccount'               => sprintf( esc_html__( 'Before you can download Premade Layouts from the %1$s Library you must authenticate your %2$s subscription.', 'et_builder' ), 'Divi', 'Elegant Themes' ),
	'$usernameHelp'            => esc_html__( 'This is the username that you use to access the Members Area on elegantthemes.com.', 'et_builder' ),
	'@categories'              => require $sub_directory . '/categories.php',
	'@layoutsLong'             => require $sub_directory . '/layouts-long.php',
	'@layoutsShort'            => require $sub_directory . '/layouts-short.php',
	'@packs'                   => require $sub_directory . '/packs.php',
);

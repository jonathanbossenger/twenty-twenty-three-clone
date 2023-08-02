<?php

/**
 * Enqueue theme.js file in the dashboard.
 */
add_action( 'admin_enqueue_scripts', 'twentytwentythreeclone_enqueue_scripts' );
function twentytwentythreeclone_enqueue_scripts() {
	wp_enqueue_script(
		'twentytwentythreeclone-theme-js',
		get_stylesheet_directory_uri() . '/assets/theme.js',
		array( 'wp-i18n' ),
		'1.0.0',
		true
	);
	wp_set_script_translations('twentytwentythreeclone-theme-js', 'twentytwentythreeclone');
}

/**
 * Create an admin submenu item under the "Appearance" menu.
 */
add_action( 'admin_menu', 'twentytwentythreeclone_add_submenu_page' );
function twentytwentythreeclone_add_submenu_page() {
	add_submenu_page(
		'themes.php', // parent slug
		__( 'Twenty Twenty Three Clone', 'twentytwentythreeclone' ), // page title
		__( 'Twenty Twenty Three Clone', 'twentytwentythreeclone' ), // menu title
		'manage_options', // capability
		'twentytwentythreeclone', // slug
		'twentytwentythreeclone_display_page' // callback
	);
}

/**
 * Render the page for the submenu item.
 */
function twentytwentythreeclone_display_page() {
	?>
    <div class="wrap">
        <h1><?php _e( 'Twenty Twenty Three Clone Settings', 'twentytwentythreeclone' ); ?></h1>
        <p><?php _e( 'This is a settings page for the Twenty Twenty Three Clone theme', '__' ); ?></p>
        <button id="twentytwentythreeclone-settings-button" class="button button-primary"><?php _e( 'Alert', 'twentytwentythreeclone' ); ?></button>
    </div>
	<?php
}


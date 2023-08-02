<?php

/**
 * Enqueue theme.js file in the dashboard.
 */
add_action( 'admin_enqueue_scripts', 'twentytwentythreeclone_enqueue_scripts' );
function twentytwentythreeclone_enqueue_scripts() {
    wp_enqueue_script(
        'twentytwentythreeclone-theme-js',
        get_stylesheet_directory_uri() . '/assets/theme.js',
        array(),
        '1.0.0',
        true
    );
}

/**
 * Create an admin submenu item under the "Appearance" menu.
 */
add_action( 'admin_menu', 'twentytwentythreeclone_add_submenu_page' );
function twentytwentythreeclone_add_submenu_page() {
	add_submenu_page(
		'themes.php', // parent slug
		'Twenty Twenty Three Clone', // page title
		'Twenty Twenty Three Clone', // menu title
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
		<h1>Twenty Twenty Three Clone Settings</h1>
		<p>This is a settings page for the Twenty Twenty Three Clone theme</p>
        <button id="twentytwentythreeclone-settings-button" class="button button-primary">Alert</button>
	</div>
	<?php
}


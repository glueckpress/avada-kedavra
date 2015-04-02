<?php
/**
 * Plugin Name: Avada Kedavra
 * Text Domain: avada-kedavra
 * Domain Path: /languages
 * Description: Disables all WordPress shortcodes registered by the active theme.
 * Author:      Caspar Hübinger
 * Author URI:  http://glueckpress.com/
 * Plugin URI:  https://github.com/glueckpress/avada-kedavra
 * License:     GPLv2 or later
 * Version:     0.5
 *
 * PHP Version: 5.2
 */

/**
 * Copyright (C) 2014 Caspar Hübinger
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */


/* Occlumens. */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Send a Patronus first to whitelist shortcodes registered by core or plugins.
 *
 * @return void
 */
function avada_kedavra__patronus() {

	// No use for muggles.
	if ( ! current_user_can( 'activate_plugins' ) ) {
		return;
	}

	global $shortcode_tags;

	// Expecto Patronum!
	set_transient( 'avada_kedavra_whitelisted_shortcodes', array_keys( (array) $shortcode_tags ) );

	// Spells in multiple languages.
	load_plugin_textdomain(
		'avada-kedavra',
		FALSE,
		dirname( plugin_basename( __FILE__ ) ) . '/languages'
	);
}
add_action( 'plugins_loaded', 'avada_kedavra__patronus' );


/**
 * Flash of green light.
 *
 * @return void
 */
function avada_kedavra() {

	// Again, no use for muggles.
	if ( ! current_user_can( 'activate_plugins' ) ) {
		return;
	}

	global $shortcode_tags;

	// Add any custom shortcode tags to the Patronus here.
	$whitelist = apply_filters(
		'avada_kedavra_whitelisted_shortcodes',
		(array) get_transient( 'avada_kedavra_whitelisted_shortcodes' )
	);

	// Eat, Nagini.
	delete_transient( 'avada_kedavra_whitelisted_shortcodes' );

	// This is going nowhere.
	if ( $whitelist === array_keys( (array) $shortcode_tags ) ) {
		// Send an owl to logged-in user.
		add_action( 'admin_notices', 'avada_kedavra__owl' );

		return;
	}

	// Avada kedavra!
	$shortcode_tags = array_intersect_key( $shortcode_tags, array_flip( $whitelist ) );

	// Send howler to logged-in user.
	add_action( 'admin_notices', 'avada_kedavra__howler' );
}
add_action( 'after_setup_theme', 'avada_kedavra', PHP_INT_MAX );


/**
 * Send owl when no shortcodes have been registered by theme.
 *
 * @return void
 */
function avada_kedavra__owl() {

	echo apply_filters(
		'avada_kedavra__owl',
		sprintf(
			'<div class="updated"><h3>%s</h3><p>%s</p></div>',
			__( "All good!", 'avada-kedavra' ),
			__( "Avada Kedavra hasn't detected a single shortcode registered by your theme. You may hope your content will remain intact when you'll switch themes some time in the future.", 'avada-kedavra' )
		)
	);
}


/**
 * Send howler when shortcodes have been registered by theme.
 *
 * @return void
 */
function avada_kedavra__howler() {

	echo apply_filters(
		'avada_kedavra__howler',
		sprintf(
			'<div class="update-nag"><h3>%s</h3><p><strong>%s</strong><br>%s</p></div>',
			__( "Heads up!", 'avada-kedavra' ),
			__( "Avada Kedavra has temporarily disabled all shortcodes registered by your theme!", 'avada-kedavra' ),
			__( "Visit the front-end of your site to see what your content will look like in the future by the time you might want to switch to another theme. To get everything back in order, just deactivate the Avada Kedavra plugin, but be clear about your choice regarding your theme.", 'avada-kedavra' )
		)
	);
}

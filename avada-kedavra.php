<?php
/**
 * Plugin Name: Avada Kedavra
 * Description: Disables ALL shortcodes at once.
 * Author:      Caspar Hübinger
 * Author URI:  http://glueckpress.com/
 * Plugin URI:  https://github.com/glueckpress/avada-kedavra
 * License:     GPLv2 or later
 * Version:     2014.11
 *
 * PHP Version: 5.2
 */

/**
	Copyright (C) 2014 Caspar Hübinger

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License along
	with this program; if not, write to the Free Software Foundation, Inc.,
	51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

/* Exit when accessed directly. */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Kiss. My. Ass.
 *
 * @return void
 */
function avada_kedavra() {

	remove_all_shortcodes();
}
add_action( 'after_setup_theme', 'avada_kedavra', 99 );
<?php
/**
 * AMP carousel image object plugin bootstrap.
 *
 * @package   Google\AMP_Carousel_Image_Attribute_Remover
 * @author    Weston Ruter, Google
 * @license   GPL-2.0-or-later
 * @copyright 2021 Google Inc.
 *
 * @wordpress-plugin
 * Plugin Name: AMP Carousel object-fit property remover.
 * Plugin URI: https://github.com/milindmore22/amp-carousel-img-attribute-remover/
 * Description: Removes object-fit="cover" attribute added to amp-carousel images.
 * Version: 0.1
 * Author: Milind, Google
 * Author URI: https://wpindia.co.in/
 * License: GNU General Public License v2 (or later)
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Google\AMP_Carousel_Image_Attribute_Remover;

add_filter(
	'amp_content_sanitizers',
	function ( $sanitizers ) {

		require_once __DIR__ . '/sanitizers/class-sanitizer.php';
		$sanitizers[ __NAMESPACE__ . '\Sanitizer' ] = [];
		return $sanitizers;
	},
	20
);

// Not needed.
/*
add_filter(
	'amp_content_embed_handlers',
	function( $embed_handlers ) {
		require_once __DIR__ . '/sanitizers/class-embed-sanitizer.php';
		$embed_handlers[ __NAMESPACE__ . '\Embed_Sanitizer' ] = [];
		return $embed_handlers;
	},
	20
);
*/

<?php
/**
 * Sanitizer file.
 *
 * @package Google\AMP_Carousel_Image_Attribute_Remover
 */

namespace Google\AMP_Carousel_Image_Attribute_Remover;

use AMP_Base_Sanitizer;
use DOMElement;
use DOMXPath;


/**
 * Class Sanitizer
 */
class Sanitizer extends \AMP_Base_Sanitizer {

	/**
	 * Sanitizes to remove object-fit property
	 */
	public function sanitize() {
		$xpath = new DOMXPath( $this->dom );

		// Set up mobile nav menu.
		$block_carousels = $xpath->query( '//amp-carousel' );

		if ( $block_carousels instanceof \DOMNodeList ) {
			foreach ( $block_carousels as $block_carousel ) {
				$block_carousel_images = $block_carousel->getElementsByTagName( 'amp-img' );
				if ( $block_carousel_images instanceof \DOMNodeList ) {
					foreach ( $block_carousel_images as $block_carousel_image ) {
						$block_carousel_image->removeAttribute( 'object-fit' );
						//$block_carousel_image->setAttribute( 'object-fit', 'contain' );
					}
				}
			}
		}
	}
}

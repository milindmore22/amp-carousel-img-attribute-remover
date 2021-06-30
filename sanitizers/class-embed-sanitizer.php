<?php
/**
 * Embed Sanitizer file.
 *
 * @package Google\AMP_Carousel_Image_Attribute_Remover
 */

namespace Google\AMP_Carousel_Image_Attribute_Remover;

use AMP_Base_Embed_Handler;
use AmpProject\Dom\Document;

/**
 * Class Sanitizer
 */
class Embed_Sanitizer extends AMP_Base_Embed_Handler {

	/**
	 *
	 */
	public function register_embed() {

	}

	/**
	 *
	 */
	public function unregister_embed() {

	}

	/**
	 * Sanitizes to remove object-fit property
	 *
	 * @param Document $dom DOM.
	 */
	public function sanitize_raw_embeds( Document $dom ) {
		$nodes = $dom->xpath->query( '//amp-carousel' );
		foreach ( $nodes as $node ) {
			$img_elements = $node->getElementsByTagName( 'img' );
			foreach ( $img_elements as $image_element ) {
				$image_element->removeAttribute( 'object-fit' );
				//$image_element->setAttribute( 'object-fit', 'contain' );
			}
		}

	}
}

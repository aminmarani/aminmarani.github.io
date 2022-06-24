<?php
/**
 * Blocks
 *
 * @author Jegstudio
 * @since 1.0.0
 * @package gutenverse
 */

namespace Gutenverse\Block;

/**
 * Class Init
 *
 * @package Gutenverse
 */
abstract class Block_Abstract {
	/**
	 * Block Attributes.
	 *
	 * @var array
	 */
	protected $attributes;

	/**
	 * Content.
	 *
	 * @var string
	 */
	protected $content;

	/**
	 * Render
	 *
	 * @param array  $attributes .
	 * @param string $content .
	 *
	 * @return mixed
	 */
	public function render( $attributes, $content ) {
		$this->set_attributes( $attributes );
		$this->set_content( $content );

		if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
			return $this->render_gutenberg();
		} else {
			return $this->render_frontend();
		}
	}

	/**
	 * Return empty content element
	 *
	 * @return mixed
	 */
	public function empty_content() {
		$text = esc_attr( $this->attributes['noContentText'] );
		$text = $text ? $text : '';

		$no_content = '<div class="guten-empty">' . $text . '</div>';

		return apply_filters( 'gutenverse_no_content', $no_content );
	}

	/**
	 * Block attributes
	 *
	 * @param array $attributes .
	 */
	public function set_attributes( $attributes ) {
		$this->attributes = $attributes;
	}

	/**
	 * Content
	 *
	 * @param string $content .
	 */
	protected function set_content( $content ) {
		$this->content = $content;
	}

	/**
	 * Display classes
	 *
	 * @return string
	 */
	protected function set_display_classes() {
		$display_classes = ' ';

		if ( isset( $this->attributes['hideDesktop'] ) && ( true === $this->attributes['hideDesktop'] || 'true' === $this->attributes['hideDesktop'] ) ) {
			$display_classes .= 'hide-desktop ';
		}

		if ( isset( $this->attributes['hideTablet'] ) && ( true === $this->attributes['hideTablet'] || 'true' === $this->attributes['hideTablet'] ) ) {
			$display_classes .= 'hide-tablet ';
		}

		if ( isset( $this->attributes['hideMobile'] ) && ( true === $this->attributes['hideMobile'] || 'true' === $this->attributes['hideMobile'] ) ) {
			$display_classes .= 'hide-mobile ';
		}

		return $display_classes;
	}

	/**
	 * Render view in editor
	 *
	 * @return mixed
	 */
	public function render_gutenberg() {
		return null;
	}

	/**
	 * Render view in frontend
	 *
	 * @return mixed
	 */
	public function render_frontend() {
		return null;
	}
}

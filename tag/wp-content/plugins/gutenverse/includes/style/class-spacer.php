<?php
/**
 * Gutenverse Spacer
 *
 * @author Jegstudio
 * @since 1.0.0
 * @package gutenverse
 */

namespace Gutenverse\Style;

/**
 * Class Spacer
 *
 * @package Gutenverse
 */
class Spacer extends Style_Abstract {
	/**
	 * Block Name
	 *
	 * @var array
	 */
	protected $name = 'spacer';

	/**
	 * Constructor
	 *
	 * @param array $attrs Attribute.
	 */
	public function __construct( $attrs ) {
		parent::__construct( $attrs );

		$this->set_feature(
			array(
				'border'      => null,
				'positioning' => null,
				'animation'   => null,
				'advance'     => null,
			)
		);
	}

	/**
	 * Generate style base on attribute.
	 */
	public function generate() {
		if ( isset( $this->attrs['space'] ) ) {
			$this->inject_style(
				array(
					'selector'       => ".{$this->element_id}.guten-spacer",
					'property'       => function( $value ) {
						return $this->handle_unit_point( $value, 'padding-bottom' );
					},
					'value'          => $this->attrs['space'],
					'device_control' => true,
				)
			);
		}
	}
}

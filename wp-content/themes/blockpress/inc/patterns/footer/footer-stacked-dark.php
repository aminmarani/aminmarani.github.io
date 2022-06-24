<?php
/**
 * Blockpress: Footer with heading, text, button, dark background
 *
 * @package Blockpress
 */

return array(
	'title'      => __( 'Footer with heading, text, button.', 'blockpress' ),
	'categories' => array( 'blockpress-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|textondark"}}},"spacing":{"padding":{"top":"100px","bottom":"40px"}}},"backgroundColor":"dark","textColor":"textondark","layout":{"inherit":true}} -->
				<div class="wp-block-group alignfull has-textondark-color has-dark-background-color has-text-color has-background has-link-color" style="padding-top:100px;padding-bottom:40px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"max-huge"} -->
				<h2 class="has-text-align-center has-max-huge-font-size" id="let-s-do-this" style="font-style:normal;font-weight:400;margin-bottom:20px">' . esc_html__( 'Let’s Do This', 'blockpress' ) . '</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Quisque aliquam nisl quis metus taylor feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing vestibulum vitae gravida non diam accumsan.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":0}},"className":"is-style-outline-white"} -->
				<div class="wp-block-button is-style-outline-white"><a class="wp-block-button__link no-border-radius" href="#">' . esc_html__( 'Get in Touch', 'blockpress' ) . ' →</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons -->

				<!-- wp:spacer {"height":70} -->
				<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size">© ' . gmdate( 'Y' ) . ' Your Company LLC · <a href="#">' . esc_html__( 'Contact Us', 'blockpress' ) . '</a></p>
				<!-- /wp:paragraph --></div>
				<!-- /wp:group -->',
);

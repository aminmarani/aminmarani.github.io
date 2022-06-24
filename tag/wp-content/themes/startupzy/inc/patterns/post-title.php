<?php
/**
 * Post Title content.
 */
return array(
	'title'      => __( 'Post Title', 'startupzy' ),
	'categories' => array( 'startupzy-basic' ),
	'content'    => '
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
        <div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"' . esc_url( STARTUPZY_URI ) . 'assets/img/action-african-american-american-asian-black-brainstorming-1442007-pxhere.com.webp","id":129,"dimRatio":92,"customOverlayColor":"#02132d","focalPoint":{"x":"0.50","y":"0.66"},"minHeight":520,"contentPosition":"center center","style":{"spacing":{"padding":{"bottom":"200px","top":"0px","right":"0px","left":"0px"}}}} -->
        <div class="wp-block-cover" style="padding-top:0px;padding-right:0px;padding-bottom:200px;padding-left:0px;min-height:520px"><span aria-hidden="true" class="has-background-dim-90 wp-block-cover__gradient-background has-background-dim" style="background-color:#02132d"></span><img class="wp-block-cover__image-background wp-image-129" alt="" src="' . esc_url( STARTUPZY_URI ) . 'assets/img/action-african-american-american-asian-black-brainstorming-1442007-pxhere.com.webp" style="object-position:50% 66%" data-object-fit="cover" data-object-position="50% 66%"/><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","theme":"startupzy"} /-->
        
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"160px"}}},"layout":{"wideSize":"1170px","contentSize":"1170px"}} -->
        <div class="wp-block-group" style="padding-top:160px"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column -->
        <div class="wp-block-column"><!-- wp:post-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"42px"}},"textColor":"white","fontFamily":"helvetica-arial"} /--></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group --></div></div>
        <!-- /wp:cover --></div>
        <!-- /wp:group -->',
);

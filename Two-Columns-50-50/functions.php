<?php
//* Do NOT include the opening php tag shown above. Copy only the code shown below.

//* Register widget areas
genesis_register_sidebar( array(
	'id'			=> 'featured-left',
	'name'			=> 'Featured Left',
	'description'	=> 'This is the Featured Left widget area.'
) );

genesis_register_sidebar( array(
	'id'			=> 'featured-right',
	'name'			=> 'Featured Right',
	'description'	=> 'This is the Featured Right widget area.'
) );

//* Show the widget areas
add_action( 'genesis_after_header', 'sp_featured_widgets' );
function sp_featured_widgets() {

	if ( is_active_sidebar( 'featured-left' ) || is_active_sidebar( 'featured-right' ) ) {

		echo '<div class="featured-widgets"><div class="wrap">';

		genesis_widget_area( 'featured-left', array(
			'before'	=> '<div class="featured-left widget-area one-half first">',
			'after'		=> '</div>',
		) );

		genesis_widget_area( 'featured-right', array(
			'before'	=> '<div class="featured-right widget-area one-half">',
			'after'		=> '</div>',
		) );

		echo '</div></div>';

	}

}

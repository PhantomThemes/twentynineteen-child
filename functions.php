<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


if ( !function_exists( '2019_parent_css' ) ):
    function 2019_parent_css() {
        wp_enqueue_style( 'parent-css', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', '2019_parent_css', 10 );

// END ENQUEUE PARENT ACTION

<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class PageCustomizer {

    public function register_options( $wp_customize ) {

        $wp_customize->add_section( 'page_options_section', [
            'title'    => __( 'Page', 'matinxblog' ),
            'priority' => 3,
        ] );

    }
}
<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class HeaderCustomizer {

    public function register_options( $wp_customize ) {

        $wp_customize->add_section( 'header_options_section', [
            'title'    => __( 'Header Options', 'matinxblog' ),
            'priority' => 1,
        ] );

        $wp_customize->add_setting( 'header_modes', [ 'default' => 'mode1' ] );
        $wp_customize->add_control( 'header_modes', [
            'label'    => __( 'Header modes', 'matinxblog' ),
            'section'  => 'header_options_section',
            'settings' => 'header_modes',
            'type'     => 'select',
            'choices'  => [
                'mode1' => __( 'Default', 'matinxblog' ),
            ],
        ] );

    }
}
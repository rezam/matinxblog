<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class SidebarCustomizer {

    public function register_options( $wp_customize ) {

        $wp_customize->add_section( 'sidebar_options_section', [
            'title'    => __( 'Sidebar Options', 'matinxblog' ),
            'priority' => 4,
        ] );

        $wp_customize->add_setting( 'use_sidebar_on_single', [ 'default' => 'no' ] );
        $wp_customize->add_control( 'use_sidebar_on_single', [
            'label'       => __( 'Use sidebar on Posts', 'matinxblog' ),
            'section'     => 'sidebar_options_section',
            'type'        => 'select',
            'choices'     => [
                'yes' => __( 'Yes', 'matinxblog' ),
                'no' => __( 'No', 'matinxblog' ),
            ],
        ] );

    }
}
<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once 'customs/Heading.php';
require_once 'CustomizerSettingsState.php';

use matinx\app\customization\Heading;

class FooterCustomizer {

    public function register_options( $wp_customize ) {

        $wp_customize->add_section( 'matinx_footer_options_section', [
            'title'    => __( 'Footer Options', 'matinxblog' ),
            'priority' => 2,
        ] );

        $wp_customize->add_setting( 'matinx_footer_modes', [ 'default' => 'mode1' ] );
        $wp_customize->add_control( 'matinx_footer_modes', [
            'label'    => __( 'Footer modes', 'matinxblog' ),
            'section'  => 'matinx_footer_options_section',
            'type'     => 'select',
            'choices'  => [
                'mode1' => __( 'Style 1', 'matinxblog' ),
                'mode2' => __( 'Style 2 (Available on Premium)', 'matinxblog' ),
            ],
        ] );

        $wp_customize->add_setting( 'matinx_footer_col1' );
        $wp_customize->add_control( new Heading( $wp_customize, 'matinx_footer_col1', [
            'label' => __( 'Column 1', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] ) );

        $wp_customize->add_setting( 'matinx_footer_col1_heading', [ 'default' => 'About us' ]);
        $wp_customize->add_control( 'matinx_footer_col1_heading', [
            'label' => __( 'Heading', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'type' => 'text',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] );

        $wp_customize->add_setting( 'matinx_footer_col1_text', [ 'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.' ]);
        $wp_customize->add_control( 'matinx_footer_col1_text', [
            'label' => __( 'Text', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'type' => 'textarea',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] );

        $wp_customize->add_setting( 'matinx_footer_col1_field1_title', [ 'default' => 'Email' ]);
        $wp_customize->add_control( 'matinx_footer_col1_field1_title', [
            'label' => __( 'Field 1 - Title', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'type' => 'text',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] );

        $wp_customize->add_setting( 'matinx_footer_col1_field1_value', [ 'default' => 'info@flexypress.com' ]);
        $wp_customize->add_control( 'matinx_footer_col1_field1_value', [
            'label' => __( 'Field 1 - Value', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'type' => 'text',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] );

        $wp_customize->add_setting( 'matinx_footer_col1_field2_title', [ 'default' => 'Phone' ]);
        $wp_customize->add_control( 'matinx_footer_col1_field2_title', [
            'label' => __( 'Field 2 - Title', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'type' => 'text',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] );

        $wp_customize->add_setting( 'matinx_footer_col1_field2_value', [ 'default' => '+1234567890' ]);
        $wp_customize->add_control( 'matinx_footer_col1_field2_value', [
            'label' => __( 'Field 2 - Value', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'type' => 'text',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] );

        $wp_customize->add_setting( 'matinx_footer_col2' );
        $wp_customize->add_control( new Heading( $wp_customize, 'matinx_footer_col2', [
            'label' => __( 'Column 2', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] ) );

        $wp_customize->add_setting( 'matinx_footer_col2_heading', [ 'default' => 'Quick Links' ]);
        $wp_customize->add_control( 'matinx_footer_col2_heading', [
            'label' => __( 'Heading', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'type' => 'text',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] );

        $wp_customize->add_setting( 'matinx_footer_col3' );
        $wp_customize->add_control( new Heading( $wp_customize, 'matinx_footer_col3', [
            'label' => __( 'Column 3', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] ) );

        $wp_customize->add_setting( 'matinx_footer_col3_heading', [ 'default' => 'Category' ]);
        $wp_customize->add_control( 'matinx_footer_col3_heading', [
            'label' => __( 'Heading', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'type' => 'text',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] );

        $wp_customize->add_setting( 'matinx_footer_col4' );
        $wp_customize->add_control( new Heading( $wp_customize, 'matinx_footer_col4', [
            'label' => __( 'Column 4', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] ) );

        $wp_customize->add_setting( 'matinx_footer_col4_heading', [ 'default' => 'Connect' ]);
        $wp_customize->add_control( 'matinx_footer_col4_heading', [
            'label' => __( 'Heading', 'matinxblog' ),
            'section' => 'matinx_footer_options_section',
            'type' => 'text',
            'active_callback' => [ '\matinx\app\CustomizerSettingsState', 'matinx_footer_mode1_is_enabled' ]
        ] );

    }
}
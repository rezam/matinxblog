<?php
namespace matinx\app;

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

class CustomizerSettingsState {
    public static function matinx_footer_mode1_is_enabled() {
        return get_theme_mod( 'matinx_footer_modes', 'mode1' ) == 'mode1';
    }

    public static function matinx_footer_col1_heading() {
        return sanitize_text_field( get_theme_mod( 'matinx_footer_col1_heading', __( 'About Us', 'matinxblog' ) ) );
    }

    public static function matinx_footer_col1_text() {
        return sanitize_text_field( get_theme_mod( 'matinx_footer_col1_text', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'matinxblog' ) ) );
    }

    public static function matinx_footer_col1_field1_title() {
        return sanitize_text_field( get_theme_mod( 'matinx_footer_col1_field1_title', __( 'Email', 'matinxblog' ) ) );
    }

    public static function matinx_footer_col1_field1_value() {
        return sanitize_text_field( get_theme_mod( 'matinx_footer_col1_field1_value', __( 'info@flexypress.com', 'matinxblog' ) ) );
    }

    public static function matinx_footer_col1_field2_title() {
        return sanitize_text_field( get_theme_mod( 'matinx_footer_col1_field2_title', __( 'Phone', 'matinxblog' ) ) );
    }

    public static function matinx_footer_col1_field2_value() {
        return sanitize_text_field( get_theme_mod( 'matinx_footer_col1_field2_value', __( '+123456789', 'matinxblog' ) ) );
    }

    public static function matinx_footer_col1_values() {
        if( empty( self::matinx_footer_col1_heading() ) && empty( self::matinx_footer_col1_text() ) && empty( self::matinx_footer_col1_field1_title() ) && empty( self::matinx_footer_col1_field1_value() ) && empty( self::matinx_footer_col1_field2_title() ) && empty( self::matinx_footer_col1_field2_value() ) ) {
            return false;
        }
        return true;
    }

    public static function matinx_footer_col2_heading() {
        return sanitize_text_field( get_theme_mod( 'matinx_footer_col2_heading', __( 'Quick Links', 'matinxblog' ) ) );
    }

    public static function matinx_footer_col3_heading() {
        return sanitize_text_field( get_theme_mod( 'matinx_footer_col3_heading', __( 'Category', 'matinxblog' ) ) );
    }

    public static function matinx_footer_col4_heading() {
        return sanitize_text_field( get_theme_mod( 'matinx_footer_col4_heading', __( 'Connect', 'matinxblog' ) ) );
    }

    public static function matinx_use_sidebar_on_single() {
        return sanitize_text_field( get_theme_mod( 'use_sidebar_on_single', 'no' ) ) == 'yes';
    }
}
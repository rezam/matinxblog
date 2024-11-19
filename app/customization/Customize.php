<?php

require_once 'HeaderCustomizer.php';
require_once 'FooterCustomizer.php';
require_once 'PageCustomizer.php';
require_once 'SidebarCustomizer.php';

require_once 'CustomizerSettingsState.php';

class Customize {

    public function __construct() {
        add_action( 'customize_register', [ $this, 'register_customizer_options' ] );
    }

    public function register_customizer_options( $wp_customize ) {
        $header_customizer = new HeaderCustomizer();
        $header_customizer->register_options( $wp_customize );

        $footer_customizer = new FooterCustomizer();
        $footer_customizer->register_options( $wp_customize );

        $page_customizer = new PageCustomizer();
        $page_customizer->register_options( $wp_customize );

        $sidebar_customizer = new SidebarCustomizer();
        $sidebar_customizer->register_options( $wp_customize );
    }
}
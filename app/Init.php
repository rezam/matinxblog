<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once 'customization/Customize.php';
require_once 'Core.php';
require_once 'BootstrapNavWalker.php';

class Init {

    private $version;

    public function __construct() {
        $this->version = '1.0.0';
        $this->define_constant();
        add_action( 'admin_enqueue_scripts', [ $this, 'admin_assets_enqueue' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue' ] );
        add_action( 'after_setup_theme', [ $this, 'theme_setup' ] );
        if ( class_exists( 'Customize' ) ) {
            new Customize();
        }
    }

    public function get_version() {
        return $this->version;
    }

    public function define_constant() {
        define( 'MATINXB_VERSION', $this->version );
        define( 'MATINXB_BASE', dirname( __FILE__ ) );
    }

    function admin_assets_enqueue() {
        wp_enqueue_style( 'matinxblog-admin_customization-css', get_template_directory_uri() . '/assets/css/backend/customization.css' );
    }

    public function enqueue() {
        $this->main_enqueue();
        $this->post_box_assets_enqueue();
        $this->menu_assets_enqueue();
        $this->post_hero_assets_enqueue();
        $this->single_post_assets_enqueue();
    }

    public function main_enqueue() {
        wp_enqueue_style( 'matinxblog-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'matinxblog-style', get_stylesheet_uri(), [ 'matinxblog-bootstrap-css' ], $this->version );

        wp_enqueue_script( 'matinxblog-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js' );
        wp_enqueue_script( 'matinxblog-script', get_template_directory_uri() . '/assets/js/script.js', [ 'matinxblog-bootstrap-js' ], $this->version, 'true' );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }

    public function post_box_assets_enqueue() {
        if( is_single() ) return;
        wp_enqueue_style( 'matinxblog-post_box_template-css', get_template_directory_uri() . '/assets/css/post-box.css' );
    }

    public function menu_assets_enqueue() {
        wp_enqueue_style( 'matinxblog-menu-css', get_template_directory_uri() . '/assets/css/menu.css' );

        wp_enqueue_script( 'matinxblog-menu-script', get_template_directory_uri() . '/assets/js/menu.js', [ 'matinxblog-bootstrap-js' ], $this->version, 'true' );
    }

    function post_hero_assets_enqueue() {
        if( is_single() ) return;
        wp_enqueue_style( 'matinxblog-post_hero-css', get_template_directory_uri() . '/assets/css/post-hero.css' );
    }

    public function single_post_assets_enqueue() {
        if( !is_single() ) return;
        wp_enqueue_style( 'matinxblog-single_post-css', get_template_directory_uri() . '/assets/css/single.css' );
    }

    public function theme_setup() {
        $this->load_langs_files();
        $this->add_theme_support_sections();
        $this->register_navs();
    }

    public function load_langs_files() {
        load_theme_textdomain( 'matinxblog', get_template_directory() . '/languages' );
    }

    public function add_theme_support_sections() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
        add_theme_support( 'customize-selective-refresh-widgets' );
        if( is_customize_preview() && ! current_theme_supports( 'widgets' ) ) add_theme_support( 'widgets' );
    }

    public function register_navs() {
        register_nav_menus( [ 'menu-1' => esc_html__( 'Primary', 'matinxblog' ) ] );
        register_nav_menus( [ 'footer-menu-1' => esc_html__( 'Footer 1', 'matinxblog' ) ] );
        register_nav_menus( [ 'footer-menu-2' => esc_html__( 'Footer 2', 'matinxblog' ) ] );
        register_nav_menus( [ 'footer-menu-3' => esc_html__( 'Footer 3', 'matinxblog' ) ] );
    }
}

new Init();
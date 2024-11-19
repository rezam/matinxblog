<?php

class Core
{
    public static function show_categories() {
        $categories_list = get_the_category();
        if(get_the_category()) {
            echo '<ul>';
            foreach(get_the_category() as $category) {
                echo '<li>' . '<a href=' . get_category_link($category->term_id) . '>' . $category->name . '</a></li>';
            }
            echo '</ul>';
        }
    }

    public static function is_elementor_active() {
        if ( ! function_exists( 'is_plugin_active' ) ) {
            require_once ABSPATH . 'wp-admin/includes/plugin.php';
        }

        if ( ! is_plugin_active( 'elementor/elementor.php' ) ) {
            return false;
        }

        return true;
    }
}
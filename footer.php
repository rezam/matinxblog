<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package matinxblog
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Check if a custom footer template is set
$custom_footer_template = get_option('matinx_custom_footer_template') && Core::is_elementor_active() && class_exists( 'Matinx_Custom_Header_Footer_Elementor' );
if ( !$custom_footer_template ) :
    get_template_part( 'template-parts/footer/footer', '1' );
endif;
?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

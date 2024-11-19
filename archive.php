<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package matinxblog
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <?php
                    the_archive_title( '<h1 class="page-title">', '</h1>' );
                    the_archive_description( '<div class="archive-description">', '</div>' );
                    ?>
                </header>
                <div class="d-flex flex-wrap posts-container">
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content/content', get_post_type() );
                    endwhile; ?>
                </div>
                <?php the_posts_navigation();

                else : ?>
                    <div class="d-flex flex-wrap posts-container">
                        <?php get_template_part( 'template-parts/content/content', 'none' ); ?>
                    </div>
            <?php endif; ?>
        </div>
    </div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();

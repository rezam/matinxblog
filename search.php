<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                    <h1 class="page-title">
                        <?php
                        printf( esc_html__( 'Search Results for: %s', 'matinxblog' ), '<span>' . get_search_query() . '</span>' );
                        ?>
                    </h1>
                </header>
                <div class="d-flex flex-wrap posts-container">
                    <?php while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content/content' );

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
</main>
<?php
get_footer();

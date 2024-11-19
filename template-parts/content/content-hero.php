<?php
/**
 * Template part for displaying post hero
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package matinxblog
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

$args  = [
    'posts_per_page'      => 1,
    'post__in'            => get_option( 'sticky_posts' ),
    'ignore_sticky_posts' => 1,
];
$query = new WP_Query( $args );
Global $post;
$user_id = $post->post_author;
?>
<article id="post-hero" class="post-hero">
    <div class="thumbnail-container">
        <?php echo get_the_post_thumbnail(get_the_ID(), [1920, 1080]); ?>
    </div>

    <div class="entry-main-content">
        <div class="post-cats">
            <?php core::show_categories(); ?>
        </div>
        <div class="entry-header">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;
            ?>
        </div>
        <div class="entry-content">
            <?php
            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'matinxblog' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div>
        <div class="d-flex justify-content-between align-items-center post-meta">
            <div class="d-flex align-items-center post-author">
                <div class="avatar-container">
                    <?php echo get_avatar( $user_id, 32, '', get_the_author_meta('display_name', $user_id) . ' Avatar', [ 'class' => 'rounded-circle' ] ) ?>
                </div>
                <span class="author-name ps-2">
                    <?php echo get_the_author_meta('display_name', $user_id ); ?>
                </span>
            </div>
            <div class="post-date">
                <?php echo get_the_date(); ?>
            </div>
        </div>
    </div>
</article>
<?php
wp_reset_postdata();
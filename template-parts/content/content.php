<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package matinxblog
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

?>
<div class="post-container">
    <article id="post-<?php the_ID(); ?>" <?php post_class( [ 'post-box' ] ); ?>>
        <div class="entry-thumbnail">
            <div class="thumbnail-container">
                <?php echo get_the_post_thumbnail(get_the_ID(), [500, 500]); ?>
            </div>
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
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32, '', get_the_author_meta('display_name') . ' Avatar', [ 'class' => 'rounded-circle' ] ) ?>
                    </div>
                    <span class="author-name ps-2">
                        <?php echo get_the_author_meta('display_name'); ?>
                    </span>
                </div>
                <div class="post-date">
                    <?php echo get_the_date(); ?>
                </div>
            </div>
        </div>

    </article>
</div>
<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
use matinx\app\CustomizerSettingsState;
$use_sidebar = CustomizerSettingsState::matinx_use_sidebar_on_single();
$content_classes = $use_sidebar ? 'col-12 col-md-9' : 'col-12';
?>
<div class="container">
    <div class="row">
        <div class="<?php echo $content_classes; ?>">
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-cats">
                    <?php core::show_categories(); ?>
                </div>

                <header class="d-flex align-items-center entry-header m-0">
                    <?php the_title( '<h1 class="entry-title m-0">', '</h1>' ); ?>
                </header>

                <div class="d-flex justify-content-start align-items-center post-meta mt-3 mb-4">
                    <div class="d-flex align-items-center post-author pe-4">
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

                <div class="thumbnail-container mb-4">
                    <?php echo get_the_post_thumbnail( get_the_ID(), [ 1920, 1080 ] ); ?>
                </div>

                <div class="entry-content">
                    <?php
                    the_content();

                    wp_link_pages(
                        [
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'matinxblog' ),
                            'after'  => '</div>',
                        ]
                    );
                    ?>
                </div>

                <?php if ( get_edit_post_link() ) : ?>
                    <footer class="entry-footer">
                        <?php
                        edit_post_link(
                            sprintf(
                                wp_kses(
                                    __( 'Edit <span class="screen-reader-text">%s</span>', 'matinxblog' ), [
                                        'span' => [ 'class' => [] ],
                                    ]
                                ),
                                wp_kses_post( get_the_title() )
                            ),
                            '<span class="edit-link">',
                            '</span>'
                        );
                        ?>
                    </footer>
                <?php endif; ?>
            </article>
        </div>
        <?php if( $use_sidebar ): ?>
            <div class="col-12 col-md-3">
                <div class="single-sidebar">

                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

use matinx\app\CustomizerSettingsState;
$class = CustomizerSettingsState::class;

?>
<footer class="site-footer">
    <div class="container">
        <div class="row main-footer">
            <?php if( $class::matinx_footer_col1_values() ): ?>
                <div class="col-12 col-md-5">
                <?php if( $class::matinx_footer_col1_heading() ): ?>
                    <h2 class="footer-col-headline">
                        <?php echo $class::matinx_footer_col1_heading(); ?>
                    </h2>
                <?php endif; ?>
                <div class="footer-col-content">
                    <?php if( $class::matinx_footer_col1_text() ): ?>
                        <p class="about-us"><?php echo $class::matinx_footer_col1_text(); ?></p>
                    <?php endif; ?>
                    <?php if( !empty( $class::matinx_footer_col1_field1_title() ) || !empty( $class::matinx_footer_col1_field1_value() ) || !empty( $class::matinx_footer_col1_field2_title() ) || !empty( $class::matinx_footer_col1_field2_value() ) ): ?>
                        <div class="footer-contact">
                            <ul>
                                <?php if( !empty( $class::matinx_footer_col1_field1_title() ) || !empty( $class::matinx_footer_col1_field1_value() ) ): ?>
                                <li>
                                    <?php if( $class::matinx_footer_col1_field1_title() ): ?>
                                        <span class="label">
                                            <?php echo $class::matinx_footer_col1_field1_title(); ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if( $class::matinx_footer_col1_field1_value() ): ?>
                                        <span class="value">
                                            <?php echo $class::matinx_footer_col1_field1_value(); ?>
                                        </span>
                                    <?php endif; ?>
                                </li>
                                <?php endif; ?>
                                <?php if( !empty( $class::matinx_footer_col1_field2_title() ) || !empty( $class::matinx_footer_col1_field2_value() ) ): ?>
                                    <li>
                                        <?php if( $class::matinx_footer_col1_field2_title() ): ?>
                                            <span class="label">
                                                <?php echo $class::matinx_footer_col1_field2_title(); ?>
                                            </span>
                                        <?php endif; ?>
                                        <?php if( $class::matinx_footer_col1_field2_value() ): ?>
                                            <span class="value">
                                                <?php echo $class::matinx_footer_col1_field2_value(); ?>
                                            </span>
                                        <?php endif; ?>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
            <?php if( $class::matinx_footer_col2_heading() && has_nav_menu( 'footer-menu-1' ) ): ?>
                <div class="col-12 col-md-2">
                    <?php if( $class::matinx_footer_col2_heading() ): ?>
                        <h2 class="footer-col-headline">
                            <?php echo $class::matinx_footer_col2_heading(); ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ( has_nav_menu( 'footer-menu-1' ) ): ?>
                        <div class="footer-col-content">
                            <?php wp_nav_menu( [ 'theme_location' => 'footer-menu-1' ] ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if( $class::matinx_footer_col3_heading() && has_nav_menu( 'footer-menu-2' ) ): ?>
                <div class="col-12 col-md-2">
                    <?php if( $class::matinx_footer_col3_heading() ): ?>
                        <h2 class="footer-col-headline">
                            <?php echo $class::matinx_footer_col3_heading(); ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ( has_nav_menu( 'footer-menu-2' ) ): ?>
                        <div class="footer-col-content">
                            <?php wp_nav_menu( [ 'theme_location' => 'footer-menu-2' ] ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if( $class::matinx_footer_col4_heading() && has_nav_menu( 'footer-menu-3' ) ): ?>
                <div class="col-12 col-md-3">
                    <?php if( $class::matinx_footer_col4_heading() ): ?>
                        <h2 class="footer-col-headline">
                            <?php echo $class::matinx_footer_col4_heading(); ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ( has_nav_menu( 'footer-menu-3' ) ): ?>
                        <div class="footer-col-content">
                            <?php wp_nav_menu( [ 'theme_location' => 'footer-menu-3' ] ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="row copyright">
            <div class="col-12">
                <p class="copyright-text text-center m-0">
                    All Rights Reserved for FlexyPress.com - 2024
                </p>
            </div>
        </div>
    </div>
</footer>
<?php
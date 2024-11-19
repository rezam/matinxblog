<?php
namespace matinx\app\customization;

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if( class_exists('WP_Customize_Control' ) )  {
    class Heading extends \WP_Customize_Control {
        public function __construct( $manager, $id, $args=[] )
        {
            parent::__construct( $manager, $id, $args );
            $this->_args = $args;
        }

        protected function render() {
            $id    = 'customize-control-' . str_replace( [ '[', ']' ], [ '-', '' ], $this->id );
            $class = 'matinx-heading-box-wrap customize-control customize-control-' . $this->type;

            printf( '<li id="%s" class="%s">', esc_attr( $id ), esc_attr( $class ) );
            $this->render_content();
            echo '</li>';
        }

        function render_content() {
            ?>
            <div class="matinx_customize_heading_box_wrapper <?php echo is_rtl() ? 'matinx_rtl_mode' : 'matinx_ltr_mode'; ?>">
                <div class="mx-heading">
                    <?php echo $this->label; ?>
                </div>
                <?php if( !empty( $this->description ) ):?>
                    <span class="matinx_cusomize_controller_description margin_top"><?php echo $this->description; ?></span>
                <?php endif; ?>
            </div>
            <?php
        }
    }
}
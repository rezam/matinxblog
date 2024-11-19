<header id="masthead" class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="logo">
                    <img src="http://themestate.com/demo/bloggers/starter-cards/wp-content/uploads/sites/6/2017/06/s-logo-1.png" alt="">
                </div>
            </div>
            <div class="col-9 d-flex align-items-center justify-content-end">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'menu-1',
                            'container' => false,
                            'menu_class' => 'navbar-nav me-auto mb-2 mb-md-0',
                            'fallback_cb' => '__return_false',
                            'depth' => 4,
                            'walker' => new BootstrapNavWalker(),
                        ]);
                        ?>
                    </div>
                </nav>
            </div>
            <!-- Mobile Menu -->
            <div class="mobile-nav">
                <button class="menu-toggle" id="menu-toggle">☰</button>
                <div id="side-menu" class="side-menu">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'menu-1',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        'depth' => 4,
                        'walker' => new BootstrapNavWalker(),
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>
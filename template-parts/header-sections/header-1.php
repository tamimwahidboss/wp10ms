<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<header class="header-wrap header-2">
    <div class="top-header d-none d-md-block">
        <div class="container-flud">
            <div class="row">
                <div class="col-md-7 pr-md-0 col-12">
                    <div class="header-cta">
                        <ul>
                            <?php
                            if ( isset( $options['v1-top-header-info-rep'] ) && is_array( $options['v1-top-header-info-rep'] ) ) {
                                foreach( $options['v1-top-header-info-rep'] as $repeater_box ) {
                                    if ( isset( $repeater_box['v1-top-header-info-link'] ) && isset( $repeater_box['v1-top-header-info-icon'] ) && isset( $repeater_box['v1-top-header-info-text'] ) ) {
                                        ?>
                                        <li>
                                          <a href="<?php echo esc_url( $repeater_box['v1-top-header-info-link'] ); ?>" target="_blank">
                                            <i class="<?php echo esc_attr( $repeater_box['v1-top-header-info-icon'] ); ?>"></i> 
                                            <?php echo esc_html( $repeater_box['v1-top-header-info-text'] ); ?>
                                          </a>
                                        </li>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-12">
                    <div class="header-right-cta d-flex justify-content-end">
                        <div class="social-profile mr-30">
                            <?php
                            if ( isset( $options['v1-top-header-social-rep'] ) && is_array( $options['v1-top-header-social-rep'] ) ) {
                                foreach( $options['v1-top-header-social-rep'] as $repeater_box ) {
                                    if ( isset( $repeater_box['v1-top-header-social-link'] ) && isset( $repeater_box['v1-top-header-social-icon'] ) ) {
                                        ?>
                                        <a href="<?php echo esc_url( $repeater_box['v1-top-header-social-link'] ); ?>" target="_blank">
                                            <i class="<?php echo esc_attr( $repeater_box['v1-top-header-social-icon'] ); ?>"></i>
                                        </a>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                        |
                        <div class="lan-select ml-30">
                            <form>
                                <select id="lan">
                                    <option>English</option>
                                    <option>China</option>
                                    <option>Bangla</option>
                                    <option>Hindi</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-wraper">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="header-logo">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php if ( isset( $options['v1-header-logo']['url'] ) ) : ?>
                                <img src="<?php echo esc_url( $options['v1-header-logo']['url'] ); ?>" alt="<?php esc_attr_e( 'Logo', 'text-domain' ); ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
                <div class="header-menu d-none d-xl-block">
                    <div class="main-menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'container'      => false,
                                'menu_class'     => 'main-menu-list',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="header-right d-flex align-items-center">
                    <div class="header-btn-cta">
                        <?php if ( isset( $options['v1-header-btn']['url'] ) && isset( $options['v1-header-btn']['text'] ) ) : ?>
                            <a href="<?php echo esc_url( $options['v1-header-btn']['url'] ); ?>" class="theme-btn">
                                <?php echo esc_html( $options['v1-header-btn']['text'] ); ?> 
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                        <div class="mobile-nav-wrap">
                            <div id="hamburger">
                                <i class="fal fa-bars"></i>
                            </div>
                            <!-- mobile menu - responsive menu  -->
                            <div class="mobile-nav">
                                <button type="button" class="close-nav">
                                    <i class="fal fa-times-circle"></i>
                                </button>
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'menu-1',
                                        'container'      => 'nav',
                                        'container_class'=> 'sidebar-nav',
                                        'items_wrap'     => '<ul class="metismenu" id="mobile-menu">%3$s</ul>',
                                    )
                                );
                                ?>
                                <div class="action-bar">
                                    <?php
                                    if ( isset( $options['top-header-info-rep'] ) && is_array( $options['top-header-info-rep'] ) ) {
                                        foreach( $options['top-header-info-rep'] as $repeater_top_info ) {
                                            if ( isset( $repeater_top_info['top-header-info-link'] ) && isset( $repeater_top_info['top-header-info-icon'] ) && isset( $repeater_top_info['top-header-info-text'] ) ) {
                                                ?>
                                                <a href="<?php echo esc_url( $repeater_top_info['top-header-info-link'] ); ?>">
                                                    <i class="<?php echo esc_attr( $repeater_top_info['top-header-info-icon'] ); ?>"></i>
                                                    <?php echo esc_html( $repeater_top_info['top-header-info-text'] ); ?>
                                                </a>
                                                <?php
                                            }
                                        }
                                    }
                                    ?>
                                    <?php if ( isset( $options['v1-header-btn']['url'] ) && isset( $options['v1-header-btn']['text'] ) ) : ?>
                                        <a href="<?php echo esc_url( $options['v1-header-btn']['url'] ); ?>" class="d-btn theme-btn black">
                                            <?php echo esc_html( $options['v1-header-btn']['text'] ); ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

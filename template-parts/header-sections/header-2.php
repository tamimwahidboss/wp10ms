<?php
$options = get_option( 'wp10ms_options' );

if(!empty($options['v2-head-off-logo']['url']) || !empty($options['v2-header-notice']) || !empty($options['v2-head-off-1h3']) ) :
?>

<div class="offset-menu show">

    <span id="offset-menu-close-btn"><i class="fal fa-plus"></i></span> <!-- /.offset-menu-close-btn -->
    <div class="offset-menu-wrapper text-white">
        <div class="offset-menu-header">
            <div class="offset-menu-logo">
                <a href="<?php echo esc_url(site_url()); ?>"><img src="<?php echo esc_url(isset($options['v2-head-off-logo']['url']) ? $options['v2-head-off-logo']['url'] : ''); ?>" alt="<?php esc_attr_e('logo', 'wp10ms'); ?>"></a>
            </div>
        </div> <!-- /.offset-menu-header -->
        <div class="offset-menu-section">
            <h3><?php echo esc_html(isset($options['v2-head-off-1h3']) ? $options['v2-head-off-1h3'] : ''); ?></h3>
            <p><?php echo esc_html(isset($options['v2-head-off-p']) ? $options['v2-head-off-p'] : ''); ?></p>
            <a href="<?php echo esc_url(isset($options['v2-head-off-btn']['url']) ? $options['v2-head-off-btn']['url'] : ''); ?>" class="theme-btn mt-30"><?php echo esc_html(isset($options['v2-head-off-btn']['text']) ? $options['v2-head-off-btn']['text'] : ''); ?> <i class="fas fa-arrow-right"></i></a>
        </div> <!-- /.offset-menu-section -->
        <div class="offset-menu-section">
            <h3><?php echo esc_html(isset($options['v2-head-off-2h3']) ? $options['v2-head-off-2h3'] : ''); ?></h3>
            <ul>
                <?php
                if (isset($options['v2-head-off-rep']) && is_array($options['v2-head-off-rep'])) {
                    foreach($options['v2-head-off-rep'] as $repeater_box) {
                        ?>
                        <li><span><i class="<?php echo esc_attr(isset($repeater_box['v2-head-off-info-icon']) ? $repeater_box['v2-head-off-info-icon'] : ''); ?>"></i></span><?php echo esc_html(isset($repeater_box['v2-head-off-info']) ? $repeater_box['v2-head-off-info'] : ''); ?></li>
                        <?php
                    }
                }
                ?>
            </ul>
        </div> <!-- /.offset-menu-section -->
        <div class="offset-menu-footer">
            <div class="offset-menu-social-icon">
                <?php
                if (isset($options['v2-top-header-social-rep']) && is_array($options['v2-top-header-social-rep'])) {
                    foreach($options['v2-top-header-social-rep'] as $repeater_box) {
                        ?>
                        <a href="<?php echo esc_url(isset($repeater_box['v2-top-header-social-link']) ? $repeater_box['v2-top-header-social-link'] : ''); ?>"><i class="<?php echo esc_attr(isset($repeater_box['v2-top-header-social-icon']) ? $repeater_box['v2-top-header-social-icon'] : ''); ?>"></i></a>
                        <?php
                    }
                }
                ?>
            </div>
        </div> <!-- /.offset-menu-footer -->
    </div> <!-- /.offset-menu-wrapper -->
</div>

<header class="header-wrap header-3">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <div class="welcome-text">
                        <p><?php echo esc_html(isset($options['v2-header-notice']) ? $options['v2-header-notice'] : ''); ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="middle-header-wraper">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-2 col-lg-4 col-6 align-items-center d-flex">
                    <div class="mobile-nav-bar mr-20">
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
                                        'theme_location'    => 'menu-1',
                                        'container'         => 'nav',
                                        'container_class'  => 'sidebar-nav',
                                        'items_wrap'        => '<ul class="metismenu" id="mobile-menu">%3$s</ul>',
                                    )
                                );
                                ?>

                                <div class="action-bar">
                                    <?php
                                    if (isset($options['top-header-info-rep']) && is_array($options['top-header-info-rep'])) {
                                        foreach($options['top-header-info-rep'] as $repeater_top_info) {
                                            ?>
                                            <a href="<?php echo esc_url(isset($repeater_top_info['top-header-info-link']['url']) ? $repeater_top_info['top-header-info-link']['url'] : ''); ?>"><i class="<?php echo esc_attr(isset($repeater_top_info['top-header-info-icon']) ? $repeater_top_info['top-header-info-icon'] : ''); ?>"></i><?php echo esc_html(isset($repeater_top_info['top-header-info-text']) ? $repeater_top_info['top-header-info-text'] : ''); ?></a>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <a href="contact.html" class="d-btn theme-btn black">Consultancy</a>
                                </div>
                            </div>
                        </div>
                        <div class="overlay"></div>
                    </div>

                    <div class="header-logo">
                        <div class="logo">
                            <a href="<?php echo esc_url(site_url()); ?>">
                                <img src="<?php echo esc_url(isset($options['v2-header-logo']['url']) ? $options['v2-header-logo']['url'] : ''); ?>" alt="<?php esc_attr_e('logo', 'wp10ms'); ?>">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 p-lg-0 header-menu-wrap">
                    <div class="header-menu-wrap">
                        <div class="menu-top-bar">
                            <div class="contact-info-grid">
                                <?php
                                if (isset($options['v2-main-header-info-rep']) && is_array($options['v2-main-header-info-rep'])) {
                                    foreach($options['v2-main-header-info-rep'] as $repeater_box) {
                                        ?>
                                        <div class="single-menu-box">
                                            <div class="icon">
                                                <i class="<?php echo esc_attr(isset($repeater_box['v2-main-header-info-icon']) ? $repeater_box['v2-main-header-info-icon'] : ''); ?>"></i>
                                            </div>
                                            <div class="content">
                                                <h3><?php echo esc_html(isset($repeater_box['v2-main-header-info-h3']) ? $repeater_box['v2-main-header-info-h3'] : ''); ?></h3>
                                                <span><?php echo esc_html(isset($repeater_box['v2-main-header-info-text']) ? $repeater_box['v2-main-header-info-text'] : ''); ?></span>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <div class="side-toggle-menu">
                                <i class="fal fa-bars"></i>
                            </div>
                        </div>

                        <div class="main-menu-wrapper d-flex justify-content-center">
                            <div class="main-menu">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'    => 'menu-1',
                                    )
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-6 pl-lg-0 text-right">
                    <div class="header-btn-cta">
                        <a href="<?php echo esc_url(isset($options['v2-header-btn']['url']) ? $options['v2-header-btn']['url'] : ''); ?>" class="theme-btn"><?php echo esc_html(isset($options['v2-header-btn']['text']) ? $options['v2-header-btn']['text'] : ''); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php endif; ?>
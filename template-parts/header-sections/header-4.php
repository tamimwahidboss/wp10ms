<?php
$options = get_option( 'wp10ms_options' );
?>

<!-- welcome content start from here -->
<header class="header-wrap header-5">
    <div class="top-header d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="header-cta">
                        <ul>
                            <?php
                            if (isset($options['top-header-info-rep']) && is_array($options['top-header-info-rep'])) {
                                foreach ($options['top-header-info-rep'] as $repeater_top_info) {
                                    ?>
                                    <li>
                                        <a href="<?php echo esc_url(isset($repeater_top_info['top-header-info-link']['url']) ? $repeater_top_info['top-header-info-link']['url'] : ''); ?>" target="_blank">
                                            <i class="<?php echo esc_attr(isset($repeater_top_info['top-header-info-icon']) ? $repeater_top_info['top-header-info-icon'] : ''); ?>"></i>
                                            <?php echo esc_html(isset($repeater_top_info['top-header-info-text']) ? $repeater_top_info['top-header-info-text'] : ''); ?>
                                        </a>
                                    </li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="header-right-cta d-flex justify-content-end">
                        <div class="social-profile">
                            <?php
                            if (isset($options['top-header-social-rep']) && is_array($options['top-header-social-rep'])) {
                                foreach ($options['top-header-social-rep'] as $repeater_top_icon) {
                                    ?>
                                    <a href="<?php echo esc_url(isset($repeater_top_icon['top-header-social-link']['url']) ? $repeater_top_icon['top-header-social-link']['url'] : ''); ?>" target="_blank">
                                        <i class="<?php echo esc_attr(isset($repeater_top_icon['top-header-social-icon']) ? $repeater_top_icon['top-header-social-icon'] : ''); ?>"></i>
                                    </a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        |
                        <div class="lan-select">
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
                        <a href="<?php echo esc_url(site_url()); ?>">
                            <img src="<?php echo esc_url(isset($options['header-logo']['url']) ? $options['header-logo']['url'] : ''); ?>" alt="<?php esc_attr_e('logo', 'wp10ms'); ?>">
                        </a>
                    </div>
                </div>
                <div class="header-menu d-none d-xl-block">
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
                <div class="header-right d-flex align-items-center">
                    <div class="header-btn-cta">
                        <div class="header-search">
                            <a class="search-toggle" data-selector=".header-search">
                                <span class="fas fa-search"></span>
                            </a>

                            <form class="search-box" action="#" method="get">
                                <div class="form-group d-flex align-items-center">
                                    <input type="search" name="s" value="<?php the_search_query(); ?>" class="search-input" id="search" placeholder="<?php esc_attr_e('Search', 'wp10ms'); ?>">
                                    <button type="submit" class="search-submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <a href="<?php echo esc_url(isset($options['header-btn']['url']) ? $options['header-btn']['url'] : ''); ?>" class="theme-btn">
                            <?php echo esc_html(isset($options['header-btn']['text']) ? $options['header-btn']['text'] : ''); ?> 
                            <i class="icon-arrow-right-1"></i>
                        </a>
                    </div>
                    <div class="mobile-nav-bar d-block ml-3 ml-sm-4 d-xl-none">
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
                                        foreach ($options['top-header-info-rep'] as $repeater_top_info) {
                                            ?>
                                            <a href="<?php echo esc_url(isset($repeater_top_info['top-header-info-link']['url']) ? $repeater_top_info['top-header-info-link']['url'] : ''); ?>">
                                                <i class="<?php echo esc_attr(isset($repeater_top_info['top-header-info-icon']) ? $repeater_top_info['top-header-info-icon'] : ''); ?>"></i>
                                                <?php echo esc_html(isset($repeater_top_info['top-header-info-text']) ? $repeater_top_info['top-header-info-text'] : ''); ?>
                                            </a>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <a href="<?php echo esc_url(isset($options['header-btn']['url']) ? $options['header-btn']['url'] : ''); ?>" class="d-btn theme-btn black">
                                        <?php echo esc_html(isset($options['header-btn']['text']) ? $options['header-btn']['text'] : ''); ?> 
                                        <i class="icon-arrow-right-1"></i>
                                    </a>
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

<div class="header-gutter"></div>

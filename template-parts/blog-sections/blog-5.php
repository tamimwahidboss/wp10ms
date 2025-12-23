<?php
$options = get_option( 'wp10ms_options' );

if(!empty($options['v5-blog-sec-h6']) || !empty($options['v5-blog-sec-h2']) || post_type_exists( 'post' )) :

?>
<section class="blog-section blog-wrapper section-padding-3 bg-cover bg-center" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/blog_bg_line.svg' ); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 col-md-6 offset-md-3 text-center">
                <div class="section-title section__title_3 mb-30" data-aos="fade-up" data-aos-delay="100">
                    <h6><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home5/bage.svg' ); ?>" alt><?php echo isset( $options['v5-blog-sec-h6'] ) ? wp_kses_post( $options['v5-blog-sec-h6'] ) : ''; ?></h6>
                    <h2><?php echo isset( $options['v5-blog-sec-h2'] ) ? wp_kses_post( $options['v5-blog-sec-h2'] ) : ''; ?></h2>
                </div>
            </div>
        </div>

        <div class="row">
        <?php
            $args = array(
                'post_type'             => 'post',
                'posts_per_page'        => 2,
                'orderby'               => 'comment_count',
                'order'                 => 'DESC',
                'ignore_sticky_posts'   => 1
            );

            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-xl-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="150">
                        <div class="single-blog-card style-3">
                            <!-- Blog Featured Thumbnail -->
                            <div class="blog-featured-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')"></div>

                            <div class="content">
                                <!-- Post Meta -->
                                <div class="post-top-meta d-flex flex-wrap align-items-center">
                                    <div class="post-date">
                                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"><i class="fal fa-calendar-alt"></i><?php echo wp_kses_post( get_the_date() ); ?></a>
                                    </div>
                                    <div class="post-comment">
                                        <a href="<?php echo esc_url( get_comments_link() ); ?>"><i class="icon-message"></i><?php echo wp_kses_post( get_comments_number() ); ?> Comments</a>
                                    </div>
                                </div>

                                <!-- Post Title -->
                                <h3><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo wp_kses_post( get_the_title() ); ?></a></h3>

                                <!-- Post Excerpt -->
                                <div class="excerpt">
                                    <p><?php echo get_the_excerpt(); ?></p>
                                </div>

                                <!-- Read More and Share Buttons -->
                                <div class="btn-link-share d-flex justify-content-between align-items-center">
                                    <a href="<?php echo esc_url( get_the_permalink() ); ?>">Read More <i class="icon-arrow-right-1"></i></a>
                                    <!-- Trigger Button -->
                                    <a href="#" id="share-btn" class="share-btn">
                                        <i class="fal fa-share-alt"></i>
                                    </a>

                                    <!-- Modal (hidden by default) -->
                                    <div id="share-popup" class="share-popup">
                                        <div class="popup-content">
                                            <span id="close-popup" class="close-btn">&times;</span>
                                            <h3>Share this post:</h3>
                                            <div class="social-links">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="fab fa-facebook-f"></i> Facebook
                                                </a>
                                                <a href="https://twitter.com/share?url=<?php echo esc_url( get_permalink() ); ?>&text=<?php echo wp_kses_post( get_the_title() ); ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="fab fa-twitter"></i> Twitter
                                                </a>
                                                <a href="https://api.whatsapp.com/send?text=<?php echo esc_url( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                                </a>
                                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_url( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                                                    <i class="fab fa-linkedin"></i> LinkedIn
                                                </a>
                                            </div>
                                        </div>
                                        <style>
                                        /* Popup container */
                                        .share-popup {
                                        display: none; /* Hidden by default */
                                        position: fixed; 
                                        z-index: 9999; 
                                        left: 0;
                                        top: 0;
                                        width: 100%;
                                        height: 100%;
                                        background-color: rgba(0, 0, 0, 0.6); /* Black background with opacity */
                                        }

                                        /* Popup content */
                                        .popup-content {
                                        background-color: white;
                                        margin: 15% auto;
                                        padding: 20px;
                                        border-radius: 8px;
                                        width: 300px;
                                        text-align: center;
                                        }

                                        /* Close button */
                                        .close-btn {
                                        float: right;
                                        font-size: 24px;
                                        font-weight: bold;
                                        cursor: pointer;
                                        }

                                        /* Social links */
                                        .social-links a {
                                        display: block;
                                        margin: 10px 0;
                                        text-decoration: none;
                                        color: #333;
                                        }
                                        .social-links a i {
                                        margin-right: 8px;
                                        }
                                        </style>
                                        <script>
                                        // Show the popup when the share button is clicked
                                        document.getElementById('share-btn').onclick = function() {
                                        document.getElementById('share-popup').style.display = 'block';
                                        }

                                        // Hide the popup when the close button is clicked
                                        document.getElementById('close-popup').onclick = function() {
                                        document.getElementById('share-popup').style.display = 'none';
                                        }

                                        // Hide the popup when clicking outside the popup content
                                        window.onclick = function(event) {
                                        if (event.target == document.getElementById('share-popup')) {
                                        document.getElementById('share-popup').style.display = 'none';
                                        }
                                        }
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <!-- Future Element for Category -->
                            <div class="future-elem">
                                <p>
                                    <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        // Display only the first category
                                        echo wp_kses_post( $categories[0]->name );
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
<?php endif; ?>


<!-- BLOG DETAILS PAGE -->

    <section class="blog-wrapper news-wrapper section-padding"> 
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-post-details border-wrap">
                        <div class="single-blog-post post-details">
                            <div class="post-content">
                                <div class="post-cat">
                                    <?php
                                    // Fetch all categories of the current post
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        foreach ( $categories as $category ) {
                                            // Get the URL for the category
                                            $category_link = get_category_link( $category->term_id );
                                            ?>
                                            <a href="<?php echo esc_url( $category_link ); ?>">
                                                <?php echo wp_kses_post( $category->name ); ?>
                                            </a>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <h2><?php echo wp_kses_post( get_the_title() ); ?></h2>
                                <div class="post-meta">
                                    <span><i class="fal fa-eye"></i>232 Views</span>
                                    <span><i class="fal fa-comments"></i><?php echo wp_kses_post( get_comments_number() ); ?> Comments</span>
                                    <span><i class="fal fa-calendar-alt"></i><?php echo wp_kses_post( get_the_date() ); ?></span>
                                </div>
                                <?php the_content(); ?>
                            </div>
                        </div>

                        <div class="row tag-share-wrap">
                            <div class="col-lg-8 col-12">
                                <?php if ( has_tag() ) : ?>
                                <h4>Related Tags</h4>
                                <div class="tagcloud">
                                    <?php
                                    $post_tags = get_the_tags();
                                    if ( $post_tags ) {
                                        foreach ( $post_tags as $tag ) {
                                            $tag_link = get_tag_link( $tag->term_id );
                                            echo '<a href="' . esc_url( $tag_link ) . '">' . wp_kses_post( $tag->name ) . '</a>';
                                        }
                                    }
                                    ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-4 col-12 text-lg-right">
                                <h4>Social Share</h4>
                                <div class="social-share">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://twitter.com/share?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <div class="related-post-wrap">
                            <h3>Related Posts</h3>

                            <div class="row">
                                <?php
                                $categories = wp_get_post_categories( get_the_ID() );

                                if ( ! empty( $categories ) ) {
                                    $args = array(
                                        'category__in'   => $categories,
                                        'post__not_in'   => array( get_the_ID() ),
                                        'posts_per_page' => 2,
                                    );

                                    $related_posts = new WP_Query( $args );

                                    if ( $related_posts->have_posts() ) :
                                        while ( $related_posts->have_posts() ) : $related_posts->the_post();
                                        ?>
                                        <div class="col-md-6 col-12">
                                            <div class="single-related-post">
                                                <div class="featured-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')"></div>
                                                <div class="post-content">
                                                    <div class="post-date">
                                                        <span><i class="fal fa-calendar-alt"></i><?php echo wp_kses_post( get_the_date() ); ?></span>
                                                    </div>
                                                    <h4><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo wp_kses_post( get_the_title() ); ?></a></h4>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                }
                                ?>
                            </div>
                        </div>

                        <!-- comments section wrap start -->
                        <div class="comments-section-wrap pt-40">
                            <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>
                            <div class="comments-heading">
                                <h3>03 Comments</h3>
                            </div>
                            <ul class="comments-item-list">
                                <li class="single-comment-item">
                                    <div class="author-img">
                                        <img src="assets/img/blog/author_img.jpg" alt="">
                                    </div>
                                    <div class="author-info-comment">
                                        <div class="info">
                                            <h5><a href="#">Rosalina Kelian</a></h5>
                                            <span>19th May 2018</span>
                                            <a href="#" class="theme-btn minimal-btn"><i class="fal fa-reply"></i>Reply</a>
                                        </div>
                                        <div class="comment-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Ut enim ad minim veniam, quis nostrud  laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-comment-item">
                                    <div class="author-img">
                                        <img src="assets/img/blog/author2.jpg" alt="">
                                    </div>
                                    <div class="author-info-comment">
                                        <div class="info">
                                            <h5><a href="#">Arista Williamson</a></h5>
                                            <span>21th Feb 2020</span>
                                            <a href="#" class="theme-btn minimal-btn"><i class="fal fa-reply"></i>Reply</a>
                                        </div>
                                        <div class="comment-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>

                                    <ul class="replay-comment">
                                        <li class="single-comment-item">
                                            <div class="author-img">
                                                <img src="assets/img/blog/author3.jpg" alt="">
                                            </div>
                                            <div class="author-info-comment">
                                                <div class="info">
                                                    <h5><a href="#">Salman Ahmed</a></h5>
                                                    <span>29th Jan 2021</span>
                                                    <a href="#" class="theme-btn minimal-btn"><i class="fal fa-reply"></i>Reply</a>
                                                </div>
                                                <div class="comment-text">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam..</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="comment-form-wrap mt-40">
                            <h3>Post Comment</h3>

                            <form action="#" class="comment-form">
                                <div class="single-form-input">
                                    <textarea placeholder="Type your comments...."></textarea>
                                </div>
                                <div class="single-form-input">
                                    <input type="text" placeholder="Type your name....">
                                </div>
                                <div class="single-form-input">
                                    <input type="email" placeholder="Type your email....">
                                </div>
                                <div class="single-form-input">
                                    <input type="text" placeholder="Type your website....">
                                </div>
                                <button class="submit-btn" type="submit"><i class="fal fa-comments"></i>Post Comment</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="main-sidebar">
                        <?php dynamic_sidebar( 'main-sidebar-1' ) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
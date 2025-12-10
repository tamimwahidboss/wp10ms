<?php
$meta = get_post_meta( get_the_ID(), 'wp10ms_metabox', true );
?>

<!-- PROJECT DETAILS -->
     <section class="case-study-post-wrapper section-padding">
        <div class="container">
            <div class="case-grid-photos">
                <?php
                $repeater_boxes = isset($meta['v6-project-img-rep']) && is_array($meta['v6-project-img-rep']) ? $meta['v6-project-img-rep'] : [];
                
                if ( ! empty( $repeater_boxes ) ) {
                    foreach( $repeater_boxes as $repeater_box ) {
                        if ( isset( $repeater_box['v6-project-img']['url'] ) ) {
                            ?>
                            <div class="single-photo-grid">
                                <img src="<?php echo esc_url( $repeater_box['v6-project-img']['url'] ); ?>" alt="">
                            </div>
                            <?php
                        }
                    }
                }
                ?>
            </div>
            <div class="case-contents-wrap">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="case-details-content mr-0 mr-lg-5">
                            <?php esc_html( the_content() ); ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="case-info-card">
                            <div class="case-head bg-cover" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                <h3>Project Details</h3>
                            </div>
                            <div class="project-data">
                                <div class="single-info-item">
                                    <div class="left-data">
                                        Clients
                                    </div>
                                    <div class="right-data">
                                        <?php echo esc_html( $meta['v6-project-data-1'] ); ?>
                                    </div>
                                </div>
                                <div class="single-info-item">
                                    <div class="left-data">
                                        Project
                                    </div>
                                    <div class="right-data">
                                        <?php echo esc_html( $meta['v6-project-data-2'] ); ?>
                                    </div>
                                </div>
                                <div class="single-info-item">
                                    <div class="left-data">
                                        Service
                                    </div>
                                    <div class="right-data">
                                        <?php echo esc_html( $meta['v6-project-data-3'] );?>
                                    </div>
                                </div>
                                <div class="single-info-item">
                                    <div class="left-data">
                                        Category
                                    </div>
                                    <div class="right-data">
                                        <?php
                                        $categories = get_the_terms( get_the_ID(), 'project-category' );
                                        foreach($categories as $category) {
                                            echo $category->name;
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="single-info-item">
                                    <div class="left-data">
                                        Date
                                    </div>
                                    <div class="right-data">
                                        <?php echo esc_html( $meta['v6-project-data-5'] ); ?>
                                    </div>
                                </div>
                                <div class="single-info-item">
                                    <div class="left-data">
                                        share
                                    </div>
                                    <div class="right-data">
                                        <div class="social-link">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="https://twitter.com/share?url=<?php echo urlencode( get_permalink() ); ?>&text=<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?text=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink() ); ?>" target="_blank" rel="noopener noreferrer">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
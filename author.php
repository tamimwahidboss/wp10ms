<?php
/**
 * The template for displaying Author Archive pages
 *
 * @package WordPress10MS
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// Get the author data
$author_id = get_queried_object_id();
$author_display_name = get_the_author_meta( 'display_name', $author_id );
$author_bio = get_the_author_meta( 'description', $author_id );
$author_email = get_the_author_meta( 'user_email', $author_id );
$author_url = get_the_author_meta( 'user_url', $author_id );
$author_posts_count = count_user_posts( $author_id, 'post' );

// Social media (stored in user meta)
$author_facebook = get_the_author_meta( 'facebook', $author_id );
$author_twitter = get_the_author_meta( 'twitter', $author_id );
$author_linkedin = get_the_author_meta( 'linkedin', $author_id );
$author_instagram = get_the_author_meta( 'instagram', $author_id );
$author_github = get_the_author_meta( 'github', $author_id );
$author_youtube = get_the_author_meta( 'youtube', $author_id );
$author_pinterest = get_the_author_meta( 'pinterest', $author_id );
?>

<!-- Author Hero Section -->
<section class="author-hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-particles"></div>
    
    <div class="container">
        <div class="row align-items-center min-vh-60">
            <div class="col-lg-8 mx-auto text-center">
                
                <!-- Author Avatar -->
                <div class="author-avatar-wrapper" data-aos="zoom-in">
                    <?php echo get_avatar( $author_id, 150, '', $author_display_name, array( 'class' => 'author-avatar' ) ); ?>
                    <div class="avatar-badge">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>
                
                <!-- Author Info -->
                <div class="author-info" data-aos="fade-up" data-aos-delay="100">
                    <span class="author-label">
                        <i class="fas fa-pen-fancy"></i>
                        <?php esc_html_e( 'Author', 'wp10ms' ); ?>
                    </span>
                    <h1 class="author-name"><?php echo esc_html( $author_display_name ); ?></h1>
                    
                    <?php if ( ! empty( $author_bio ) ) : ?>
                        <p class="author-bio"><?php echo wp_kses_post( $author_bio ); ?></p>
                    <?php endif; ?>
                    
                    <!-- Author Stats -->
                    <div class="author-stats">
                        <div class="stat-item">
                            <i class="fas fa-file-alt"></i>
                            <div class="stat-content">
                                <span class="stat-value"><?php echo number_format_i18n( $author_posts_count ); ?></span>
                                <span class="stat-label">
                                    <?php 
                                    printf( 
                                        _n( 'Article', 'Articles', $author_posts_count, 'wp10ms' ),
                                        number_format_i18n( $author_posts_count )
                                    );
                                    ?>
                                </span>
                            </div>
                        </div>
                        
                        <?php
                        // Get total views for author's posts
                        $total_views = 0;
                        $author_posts = get_posts( array(
                            'author'         => $author_id,
                            'posts_per_page' => -1,
                            'post_type'      => 'post',
                        ));
                        foreach ( $author_posts as $post ) {
                            $views = get_post_meta( $post->ID, 'post_views_count', true );
                            $total_views += intval( $views );
                        }
                        wp_reset_postdata();
                        
                        if ( $total_views > 0 ) :
                        ?>
                        <div class="stat-item">
                            <i class="fas fa-eye"></i>
                            <div class="stat-content">
                                <span class="stat-value"><?php echo number_format_i18n( $total_views ); ?></span>
                                <span class="stat-label"><?php esc_html_e( 'Total Views', 'wp10ms' ); ?></span>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <div class="stat-item">
                            <i class="fas fa-calendar-check"></i>
                            <div class="stat-content">
                                <span class="stat-value"><?php esc_html_e( 'Member Since', 'wp10ms' ); ?></span>
                                <span class="stat-label"><?php echo esc_html( date_i18n( 'M Y', strtotime( get_the_author_meta( 'user_registered', $author_id ) ) ) ); ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Author Social Links -->
                    <?php if ( $author_facebook || $author_twitter || $author_linkedin || $author_instagram || $author_url || $author_github ) : ?>
                        <div class="author-social" data-aos="fade-up" data-aos-delay="200">
                            <?php if ( $author_url ) : ?>
                                <a href="<?php echo esc_url( $author_url ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Website', 'wp10ms' ); ?>">
                                    <i class="fas fa-globe"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if ( $author_facebook ) : ?>
                                <a href="<?php echo esc_url( $author_facebook ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Facebook', 'wp10ms' ); ?>">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if ( $author_twitter ) : ?>
                                <a href="<?php echo esc_url( $author_twitter ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Twitter', 'wp10ms' ); ?>">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if ( $author_linkedin ) : ?>
                                <a href="<?php echo esc_url( $author_linkedin ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'LinkedIn', 'wp10ms' ); ?>">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if ( $author_instagram ) : ?>
                                <a href="<?php echo esc_url( $author_instagram ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'Instagram', 'wp10ms' ); ?>">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if ( $author_github ) : ?>
                                <a href="<?php echo esc_url( $author_github ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e( 'GitHub', 'wp10ms' ); ?>">
                                    <i class="fab fa-github"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
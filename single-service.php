<?php
/**
 * Template Name: Single Service - Modern Design
 * Template for displaying single service CPT
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// Get service meta data
$service_meta = get_post_meta( get_the_ID(), 'wp10ms_service_meta', true );

// Sanitize and validate data
$price            = isset( $service_meta['service_price'] ) ? esc_html( $service_meta['service_price'] ) : '';
$price_type       = isset( $service_meta['price_type'] ) ? esc_html( $service_meta['price_type'] ) : 'fixed';
$duration         = isset( $service_meta['service_duration'] ) ? esc_html( $service_meta['service_duration'] ) : '';
$show_pricing     = isset( $service_meta['show_pricing'] ) ? (bool) $service_meta['show_pricing'] : true;
$features         = isset( $service_meta['service_features'] ) ? $service_meta['service_features'] : array();
$process_steps    = isset( $service_meta['service_process'] ) ? $service_meta['service_process'] : array();
$deliverables     = isset( $service_meta['service_deliverables'] ) ? $service_meta['service_deliverables'] : array();
$faq              = isset( $service_meta['service_faq'] ) ? $service_meta['service_faq'] : array();
$enable_cta       = isset( $service_meta['enable_cta'] ) ? (bool) $service_meta['enable_cta'] : false;
$related_services = isset( $service_meta['related_services'] ) ? $service_meta['related_services'] : array();

// get_template_part( 'template-parts/global-elements/breadcrumb' );
?>

<!-- Modern Service Hero Section -->
<section class="modern-service-hero">
    <div class="hero-overlay"></div>
    <div class="hero-particles"></div>
    
    <div class="container">
        <div class="row align-items-center min-vh-70">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="hero-content">
                    <?php 
                    $terms = get_the_terms( get_the_ID(), 'service-category' );
                    if ( $terms && ! is_wp_error( $terms ) ) :
                    ?>
                        <div class="service-badge">
                            <i class="fas fa-crown"></i>
                            <?php echo esc_html( $terms[0]->name ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <h1 class="hero-title"><?php the_title(); ?></h1>
                    
                    <?php if ( has_excerpt() ) : ?>
                        <p class="hero-subtitle"><?php echo esc_html( get_the_excerpt() ); ?></p>
                    <?php endif; ?>
                    
                    <div class="hero-stats">
                        <?php if ( $show_pricing && ! empty( $price ) ) : ?>
                            <div class="stat-item">
                                <i class="fas fa-tag"></i>
                                <div class="stat-content">
                                    <span class="stat-label">Starting at</span>
                                    <span class="stat-value"><?php echo esc_html( $price ); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ( ! empty( $duration ) ) : ?>
                            <div class="stat-item">
                                <i class="fas fa-clock"></i>
                                <div class="stat-content">
                                    <span class="stat-label">Delivery</span>
                                    <span class="stat-value"><?php echo esc_html( $duration ); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <div class="stat-item">
                            <i class="fas fa-shield-alt"></i>
                            <div class="stat-content">
                                <span class="stat-label">Guarantee</span>
                                <span class="stat-value">100%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hero-actions">
                        <a href="#get-started" class="btn btn-hero-primary">
                            <i class="fas fa-rocket"></i>
                            Get Started Now
                        </a>
                        <a href="#service-details" class="btn btn-hero-outline">
                            <i class="fas fa-info-circle"></i>
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 pt-lg-0 pt-4" data-aos="fade-left" data-aos-delay="200">
                <div class="hero-image-wrapper">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="floating-card">
                            <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
                            <div class="card-glow"></div>
                        </div>
                    <?php else : ?>
                        <div class="hero-placeholder">
                            <i class="fas fa-briefcase"></i>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Floating elements -->
                    <div class="floating-element element-1">
                        <i class="fas fa-check-circle"></i>
                        <span>Trusted Service</span>
                    </div>
                    <div class="floating-element element-2">
                        <i class="fas fa-star"></i>
                        <span>5.0 Rating</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="scroll-indicator">
        <div class="mouse">
            <div class="wheel"></div>
        </div>
    </div>
</section>

<!-- Trust Badges Section -->
<section class="trust-badges">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="badges-wrapper" data-aos="fade-up">
                    <div class="badge-item">
                        <i class="fas fa-shield-check"></i>
                        <span>Secure Payment</span>
                    </div>
                    <div class="badge-item">
                        <i class="fas fa-headset"></i>
                        <span>24/7 Support</span>
                    </div>
                    <div class="badge-item">
                        <i class="fas fa-award"></i>
                        <span>Quality Guaranteed</span>
                    </div>
                    <div class="badge-item">
                        <i class="fas fa-redo"></i>
                        <span>Money Back</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section id="service-details" class="service-overview section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content-card" data-aos="fade-up">
                    <div class="section-header">
                        <span class="section-subtitle">What We Offer</span>
                        <h2 class="section-title">Service Overview</h2>
                    </div>
                    
                    <div class="service-content">
                        <?php 
                        if ( have_posts() ) :
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            
            <!-- Sticky Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-sidebar">
                    
                    <!-- Pricing Card -->
                    <?php if ( $show_pricing && ! empty( $price ) ) : ?>
                        <div class="pricing-card glass-card" data-aos="fade-left">
                            <div class="pricing-badge">Most Popular</div>
                            
                            <div class="pricing-header">
                                <h3>Get Started Today</h3>
                                <div class="price-wrapper">
                                    <span class="price-amount"><?php echo esc_html( $price ); ?></span>
                                    <span class="price-period">/ <?php echo esc_html( $price_type ); ?></span>
                                </div>
                            </div>
                            
                            <div class="pricing-features">
                                <div class="feature-item">
                                    <i class="fas fa-check"></i>
                                    <span>Professional Quality</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check"></i>
                                    <span>Fast Delivery</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check"></i>
                                    <span>Unlimited Revisions</span>
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check"></i>
                                    <span>Premium Support</span>
                                </div>
                            </div>
                            
                            <a href="#get-started" class="btn btn-pricing">
                                <i class="fas fa-shopping-cart"></i>
                                Order Now
                            </a>
                            
                            <div class="pricing-footer">
                                <i class="fas fa-lock"></i>
                                <span>100% Secure Checkout</span>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Contact Widget -->
                    <div class="contact-widget glass-card" data-aos="fade-left" data-aos-delay="100">
                        <div class="widget-icon">
                            <i class="fas fa-headphones-alt"></i>
                        </div>
                        <h4>Need Help?</h4>
                        <p>Our experts are here to assist you</p>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-contact">
                            <i class="fas fa-comments"></i>
                            Chat With Us
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Features with Modern Cards -->
<?php if ( ! empty( $features ) && is_array( $features ) ) : ?>
<section class="service-features section-padding bg-gradient">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <span class="section-subtitle" data-aos="fade-up">Why Choose Us</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Amazing Features</h2>
                <p class="section-description" data-aos="fade-up" data-aos-delay="200">
                    Everything you need to succeed
                </p>
            </div>
        </div>
        
        <div class="row features-grid">
            <?php 
            $delay = 0;
            foreach ( $features as $index => $feature ) : 
                $icon        = isset( $feature['feature_icon'] ) ? esc_attr( $feature['feature_icon'] ) : 'fa fa-check';
                $title       = isset( $feature['feature_title'] ) ? esc_html( $feature['feature_title'] ) : '';
                $description = isset( $feature['feature_description'] ) ? wp_kses_post( $feature['feature_description'] ) : '';
                $highlight   = isset( $feature['feature_highlight'] ) ? (bool) $feature['feature_highlight'] : false;
                $delay += 100;
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="modern-feature-card <?php echo $highlight ? 'featured' : ''; ?>" 
                         data-aos="fade-up" 
                         data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                        
                        <?php if ( $highlight ) : ?>
                            <div class="featured-badge">
                                <i class="fas fa-star"></i> Popular
                            </div>
                        <?php endif; ?>
                        
                        <div class="feature-icon-wrapper">
                            <div class="icon-bg"></div>
                            <i class="<?php echo esc_attr( $icon ); ?>"></i>
                        </div>
                        
                        <h4 class="feature-title"><?php echo esc_html( $title ); ?></h4>
                        
                        <?php if ( ! empty( $description ) ) : ?>
                            <p class="feature-description"><?php echo wp_kses_post( $description ); ?></p>
                        <?php endif; ?>
                        
                        <div class="feature-number"><?php echo sprintf( '%02d', $index + 1 ); ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Service Process - Timeline Style -->
<?php if ( ! empty( $process_steps ) && is_array( $process_steps ) ) : ?>
<section class="service-process section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <span class="section-subtitle" data-aos="fade-up">How It Works</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Our Process</h2>
                <p class="section-description" data-aos="fade-up" data-aos-delay="200">
                    Simple steps to get your project done
                </p>
            </div>
        </div>
        
        <div class="timeline-wrapper">
            <?php 
            $delay = 0;
            foreach ( $process_steps as $index => $step ) : 
                $step_num  = isset( $step['step_number'] ) ? absint( $step['step_number'] ) : ( $index + 1 );
                $step_title = isset( $step['step_title'] ) ? esc_html( $step['step_title'] ) : '';
                $step_desc  = isset( $step['step_description'] ) ? wp_kses_post( $step['step_description'] ) : '';
                $step_icon  = isset( $step['step_icon'] ) ? esc_attr( $step['step_icon'] ) : 'fa fa-cog';
                $delay += 150;
                $is_even = ( $index % 2 === 0 );
            ?>
                <div class="timeline-item <?php echo $is_even ? 'timeline-left' : 'timeline-right'; ?>" 
                     data-aos="fade-<?php echo $is_even ? 'right' : 'left'; ?>" 
                     data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                    
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <div class="step-badge">
                                <i class="<?php echo esc_attr( $step_icon ); ?>"></i>
                            </div>
                            
                            <div class="step-number-label">Step <?php echo esc_html( $step_num ); ?></div>
                            
                            <h4 class="step-title"><?php echo esc_html( $step_title ); ?></h4>
                            
                            <?php if ( ! empty( $step_desc ) ) : ?>
                                <div class="step-description">
                                    <?php echo wp_kses_post( $step_desc ); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="timeline-dot">
                        <div class="dot-inner"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Deliverables - Modern Grid -->
<?php if ( ! empty( $deliverables ) && is_array( $deliverables ) ) : ?>
<section class="service-deliverables section-padding bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <span class="section-subtitle" data-aos="fade-up">What You'll Get</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Deliverables</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="deliverables-grid">
                    <?php 
                    $delay = 0;
                    foreach ( $deliverables as $item ) : 
                        $deliverable = isset( $item['deliverable_item'] ) ? esc_html( $item['deliverable_item'] ) : '';
                        if ( empty( $deliverable ) ) continue;
                        $delay += 50;
                    ?>
                        <div class="deliverable-item" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                            <div class="deliverable-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <span class="deliverable-text"><?php echo esc_html( $deliverable ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- FAQ - Accordion Style -->
<?php if ( ! empty( $faq ) && is_array( $faq ) ) : ?>
<section class="service-faq section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="faq-sidebar">
                    <span class="section-subtitle">Got Questions?</span>
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <p class="faq-description">
                        Can't find the answer you're looking for? Feel free to contact our support team.
                    </p>
                    
                    <div class="faq-contact">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <span class="contact-label">Email Us</span>
                                <a href="mailto:support@example.com">support@example.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <span class="contact-label">Call Us</span>
                                <a href="tel:+1234567890">+123 456 7890</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="faq-accordion">
                    <?php 
                    $faq_index = 0;
                    foreach ( $faq as $faq_item ) : 
                        $question = isset( $faq_item['faq_question'] ) ? esc_html( $faq_item['faq_question'] ) : '';
                        $answer   = isset( $faq_item['faq_answer'] ) ? wp_kses_post( $faq_item['faq_answer'] ) : '';
                        
                        if ( empty( $question ) || empty( $answer ) ) continue;
                        $faq_index++;
                    ?>
                        <div class="faq-item <?php echo $faq_index === 1 ? 'active' : ''; ?>">
                            <div class="faq-question" onclick="toggleFaq(this)">
                                <h5><?php echo esc_html( $question ); ?></h5>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="faq-answer" style="<?php echo $faq_index === 1 ? 'display: block;' : ''; ?>">
                                <?php echo wp_kses_post( $answer ); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleFaq(element) {
    const faqItem = element.parentElement;
    const isActive = faqItem.classList.contains('active');
    
    // Close all items
    document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('active');
        item.querySelector('.faq-answer').style.display = 'none';
    });
    
    // Open clicked item if it wasn't active
    if (!isActive) {
        faqItem.classList.add('active');
        faqItem.querySelector('.faq-answer').style.display = 'block';
    }
}
</script>
<?php endif; ?>

<!-- Conversion-Focused CTA -->
<?php if ( $enable_cta ) : 
    $cta_title       = isset( $service_meta['cta_title'] ) ? esc_html( $service_meta['cta_title'] ) : 'Ready to Get Started?';
    $cta_description = isset( $service_meta['cta_description'] ) ? wp_kses_post( $service_meta['cta_description'] ) : '';
    $cta_btn_text    = isset( $service_meta['cta_button_text'] ) ? esc_html( $service_meta['cta_button_text'] ) : 'Get Started';
    $cta_btn_url     = isset( $service_meta['cta_button_url'] ) ? esc_url( $service_meta['cta_button_url'] ) : '#';
?>
<section id="get-started" class="conversion-cta">
    <div class="cta-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center" data-aos="zoom-in">
                <div class="cta-content">
                    <h2 class="cta-title"><?php echo esc_html( $cta_title ); ?></h2>
                    
                    <?php if ( ! empty( $cta_description ) ) : ?>
                        <p class="cta-description"><?php echo wp_kses_post( $cta_description ); ?></p>
                    <?php endif; ?>
                    
                    <div class="cta-buttons">
                        <a href="<?php echo esc_url( $cta_btn_url ); ?>" class="btn btn-cta-primary">
                            <i class="fas fa-rocket"></i>
                            <?php echo esc_html( $cta_btn_text ); ?>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-cta-outline">
                            <i class="fas fa-phone"></i>
                            Talk to Expert
                        </a>
                    </div>
                    
                    <div class="cta-trust">
                        <i class="fas fa-users"></i>
                        <span>Join 1,000+ satisfied customers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Related Services - Modern Cards -->
<?php if ( ! empty( $related_services ) && is_array( $related_services ) ) : ?>
<section class="related-services section-padding">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <span class="section-subtitle" data-aos="fade-up">Explore More</span>
                <h2 class="section-title" data-aos="fade-up" data-aos-delay="100">Related Services</h2>
            </div>
        </div>
        
        <div class="row">
            <?php 
            $related_query = new WP_Query( array(
                'post_type'      => 'service',
                'post__in'       => $related_services,
                'posts_per_page' => 3,
                'orderby'        => 'post__in',
            ));
            
            if ( $related_query->have_posts() ) :
                $delay = 0;
                while ( $related_query->have_posts() ) : $related_query->the_post();
                $delay += 100;
            ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="related-service-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="service-image">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium_large' ); ?>
                                    <div class="image-overlay">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="service-body">
                            <h4>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h4>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="service-link">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php 
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
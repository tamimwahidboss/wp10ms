<?php
/**
 * The template for displaying search results
 *
 * @package WordPress10MS
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// Get search query
$search_query = get_search_query();
$search_results_count = $wp_query->found_posts;

// Get filter parameters
$selected_category = isset( $_GET['category'] ) ? sanitize_text_field( $_GET['category'] ) : '';
$selected_date = isset( $_GET['date_filter'] ) ? sanitize_text_field( $_GET['date_filter'] ) : '';
$selected_orderby = isset( $_GET['orderby'] ) ? sanitize_text_field( $_GET['orderby'] ) : 'relevance';
?>

<!-- Search Hero Section -->
<section class="search-hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-particles"></div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                
                <!-- Search Header -->
                <div class="search-header text-center" data-aos="fade-up">
                    <span class="search-label">
                        <i class="fal fa-search"></i>
                        <?php esc_html_e( 'Search Results', 'wp10ms' ); ?>
                    </span>
                    
                    <?php if ( ! empty( $search_query ) ) : ?>
                        <h1 class="search-title">
                            <?php
                            printf(
                                /* translators: %s: search query */
                                esc_html__( 'Results for "%s"', 'wp10ms' ),
                                '<span class="search-query">' . esc_html( $search_query ) . '</span>'
                            );
                            ?>
                        </h1>
                        
                        <p class="search-count">
                            <?php
                            printf(
                                /* translators: %s: number of results */
                                _n( '%s result found', '%s results found', $search_results_count, 'wp10ms' ),
                                '<strong>' . number_format_i18n( $search_results_count ) . '</strong>'
                            );
                            ?>
                        </p>
                    <?php else : ?>
                        <h1 class="search-title"><?php esc_html_e( 'Search Our Site', 'wp10ms' ); ?></h1>
                        <p class="search-subtitle"><?php esc_html_e( 'Find exactly what you\'re looking for', 'wp10ms' ); ?></p>
                    <?php endif; ?>
                </div>
                
                <!-- Enhanced Search Form -->
                <div class="search-form-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <form role="search" method="get" class="enhanced-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="search-input-group">
                            <div class="search-icon">
                                <i class="fal fa-search"></i>
                            </div>
                            <input 
                                type="search" 
                                class="search-field" 
                                placeholder="<?php esc_attr_e( 'Search for articles, guides, and more...', 'wp10ms' ); ?>" 
                                value="<?php echo esc_attr( $search_query ); ?>" 
                                name="s" 
                                title="<?php esc_attr_e( 'Search for:', 'wp10ms' ); ?>"
                                autocomplete="off"
                            />
                            <button type="submit" class="search-submit">
                                <?php esc_html_e( 'Search', 'wp10ms' ); ?>
                                <i class="icon-arrow-right"></i>
                            </button>
                        </div>
                        
                        <!-- Advanced Filters Toggle -->
                        <button type="button" class="filters-toggle" id="filtersToggle">
                            <i class="fas fa-sliders-h"></i>
                            <?php esc_html_e( 'Advanced Filters', 'wp10ms' ); ?>
                            <i class="fas fa-angle-down"></i>
                        </button>
                        
                        <!-- Advanced Filters Panel -->
                        <div class="advanced-filters" id="advancedFilters">
                            <div class="filters-grid">
                                
                                <!-- Category Filter -->
                                <div class="filter-item">
                                    <label for="category-filter">
                                        <i class="fas fa-folder"></i>
                                        <?php esc_html_e( 'Category', 'wp10ms' ); ?>
                                    </label>
                                    <select name="category" id="category-filter" class="filter-select">
                                        <option value=""><?php esc_html_e( 'All Categories', 'wp10ms' ); ?></option>
                                        <?php
                                        $categories = get_categories( array(
                                            'orderby' => 'count',
                                            'order'   => 'DESC',
                                            'number'  => 20,
                                        ) );
                                        foreach ( $categories as $category ) :
                                        ?>
                                            <option value="<?php echo esc_attr( $category->slug ); ?>" <?php selected( $selected_category, $category->slug ); ?>>
                                                <?php echo esc_html( $category->name ); ?> (<?php echo absint( $category->count ); ?>)
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                                <!-- Date Filter -->
                                <div class="filter-item">
                                    <label for="date-filter">
                                        <i class="fas fa-calendar-alt"></i>
                                        <?php esc_html_e( 'Date Range', 'wp10ms' ); ?>
                                    </label>
                                    <select name="date_filter" id="date-filter" class="filter-select">
                                        <option value=""><?php esc_html_e( 'Any Time', 'wp10ms' ); ?></option>
                                        <option value="today" <?php selected( $selected_date, 'today' ); ?>><?php esc_html_e( 'Today', 'wp10ms' ); ?></option>
                                        <option value="week" <?php selected( $selected_date, 'week' ); ?>><?php esc_html_e( 'Past Week', 'wp10ms' ); ?></option>
                                        <option value="month" <?php selected( $selected_date, 'month' ); ?>><?php esc_html_e( 'Past Month', 'wp10ms' ); ?></option>
                                        <option value="year" <?php selected( $selected_date, 'year' ); ?>><?php esc_html_e( 'Past Year', 'wp10ms' ); ?></option>
                                    </select>
                                </div>
                                
                                <!-- Sort By Filter -->
                                <div class="filter-item">
                                    <label for="orderby-filter">
                                        <i class="fas fa-sort-amount-down"></i>
                                        <?php esc_html_e( 'Sort By', 'wp10ms' ); ?>
                                    </label>
                                    <select name="orderby" id="orderby-filter" class="filter-select">
                                        <option value="relevance" <?php selected( $selected_orderby, 'relevance' ); ?>><?php esc_html_e( 'Relevance', 'wp10ms' ); ?></option>
                                        <option value="date" <?php selected( $selected_orderby, 'date' ); ?>><?php esc_html_e( 'Latest', 'wp10ms' ); ?></option>
                                        <option value="popular" <?php selected( $selected_orderby, 'popular' ); ?>><?php esc_html_e( 'Most Popular', 'wp10ms' ); ?></option>
                                        <option value="title" <?php selected( $selected_orderby, 'title' ); ?>><?php esc_html_e( 'Alphabetical', 'wp10ms' ); ?></option>
                                    </select>
                                </div>
                                
                            </div>
                            
                            <div class="filters-actions">
                                <button type="submit" class="btn-apply-filters">
                                    <i class="fas fa-check"></i>
                                    <?php esc_html_e( 'Apply Filters', 'wp10ms' ); ?>
                                </button>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>?s=<?php echo esc_attr( $search_query ); ?>" class="btn-reset-filters">
                                    <i class="fas fa-redo"></i>
                                    <?php esc_html_e( 'Reset', 'wp10ms' ); ?>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                
                <!-- Active Filters Display -->
                <?php if ( $selected_category || $selected_date || $selected_orderby !== 'relevance' ) : ?>
                    <div class="active-filters" data-aos="fade-up" data-aos-delay="200">
                        <span class="active-filters-label">
                            <i class="fas fa-filter"></i>
                            <?php esc_html_e( 'Active Filters:', 'wp10ms' ); ?>
                        </span>
                        
                        <?php if ( $selected_category ) : 
                            $cat = get_category_by_slug( $selected_category );
                        ?>
                            <span class="filter-tag">
                                <?php echo esc_html( $cat->name ); ?>
                                <a href="<?php echo esc_url( remove_query_arg( 'category' ) ); ?>" class="remove-filter">×</a>
                            </span>
                        <?php endif; ?>
                        
                        <?php if ( $selected_date ) : ?>
                            <span class="filter-tag">
                                <?php echo esc_html( ucfirst( $selected_date ) ); ?>
                                <a href="<?php echo esc_url( remove_query_arg( 'date_filter' ) ); ?>" class="remove-filter">×</a>
                            </span>
                        <?php endif; ?>
                        
                        <?php if ( $selected_orderby !== 'relevance' ) : ?>
                            <span class="filter-tag">
                                <?php esc_html_e( 'Sorted:', 'wp10ms' ); ?> <?php echo esc_html( ucfirst( $selected_orderby ) ); ?>
                                <a href="<?php echo esc_url( remove_query_arg( 'orderby' ) ); ?>" class="remove-filter">×</a>
                            </span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</section>

<!-- Search Results Section -->
<section class="search-results-section section-padding">
    <div class="container">
        <div class="row">
            
            <!-- Main Content -->
            <?php
                echo '<section class="blog-wrapper news-wrapper section-padding">';
                echo '<div class="container"><div class="row">';

                echo '<div class="col-12 col-lg-8">';
                get_template_part( 'template-parts/global-elements/content' );
                echo '</div>';

                echo '<div class="col-12 col-lg-4">';
                echo '<div class="main-sidebar">';
                dynamic_sidebar( 'main-sidebar-1' );
                echo '</div></div>';

                echo '</div></div></section>';
            ?>
            
        </div>
    </div>
</section>

<!-- Search Page JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filters toggle functionality
    const filtersToggle = document.getElementById('filtersToggle');
    const advancedFilters = document.getElementById('advancedFilters');
    
    if (filtersToggle && advancedFilters) {
        filtersToggle.addEventListener('click', function() {
            advancedFilters.classList.toggle('active');
            filtersToggle.classList.toggle('active');
        });
    }
    
    // Auto-submit on filter change (optional)
    const filterSelects = document.querySelectorAll('.filter-select');
    filterSelects.forEach(function(select) {
        select.addEventListener('change', function() {
            // Uncomment to auto-submit on change
            // this.closest('form').submit();
        });
    });
});
</script>

<?php
get_footer();
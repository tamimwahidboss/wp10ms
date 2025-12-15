<?php
$options = get_option( 'wp10ms_options' );
$meta = get_post_meta( get_the_ID(), 'wp10ms_metabox', true );

if(!empty($options['v1-project-p']) || !empty($options['v1-project-h1']) || post_type_exists( 'project' ) ) :
?>

<section class="case-study-wrapper section-padding">
    <div class="container">
        <div class="row mb-50 align-items-center">
            <div class="col-12 col-md-5">
                <div class="section-title">
                    <p><?php echo isset($options['v1-project-p']) ? esc_attr($options['v1-project-p']) : ''; ?></p>
                    <h1><?php echo isset($options['v1-project-h1']) ? esc_html($options['v1-project-h1']) : ''; ?></h1>
                </div>
            </div>

            <div class="col-12 col-md-7 mt-4 mt-md-0 text-md-right">
                <div class="case-cat-filter">
                    <?php
                        $args = array(
                            'post_type'   => 'project',
                            'taxonomy'    => 'project-category',
                            'orderby'     => 'name',
                            'order'       => 'ASC',
                            'hide_empty'  => false,
                        );
                        $categories = get_categories($args);
                        $first = true; // Track the first button

                        foreach ( $categories as $category ) {
                            echo '<button data-filter=".' . esc_attr( $category->slug ) . '"' . ( $first ? ' class="active"' : '' ) . '>' . esc_html( $category->name ) . '</button>';
                            $first = false; // Only the first button gets the "active" class
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="row grid">
            <?php
            $args = array(
                'post_type'      => 'project',
                'posts_per_page' => 6,
                'orderby'        => 'name',
                'order'          => 'ASC',
            );
            $project_query = new WP_Query($args);

            if($project_query->have_posts()) :
                while($project_query->have_posts()) : $project_query->the_post();

                    // Get the terms (categories) for the custom post type 'project'
                    $categories = get_the_terms( get_the_ID(), 'project-category' );
                    $category_slugs = '';
                    $category_names = '';

                    if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
                        foreach ( $categories as $category ) {
                            $category_slugs .= ' ' . esc_attr( $category->slug ); // for grid-item class
                            $category_names .= esc_html( $category->name ) . ' '; // for displaying category names
                        }
                    }
            ?>
                <div class="col-xl-4 col-md-6 grid-item<?php echo esc_attr( $category_slugs ); ?>">
                    <div class="single-case-study">
                        <div class="features-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')"></div>
                        <div class="content">
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo esc_html( trim( $category_names ) ); ?></p> <!-- Display category names -->
                            <a href="<?php the_permalink(); ?>">Read more <i class="fas fa-arrow-right"></i></a>
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
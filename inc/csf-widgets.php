<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  // Create a Footer Widget 1
  CSF::createWidget( 'csf_footer_widget_1', array(
    'title'       => 'Footer Widget 1',
    'classname'   => 'wp10ms-csf-widget-1',
    'description' => 'A description for widget example 1',
    'fields'      => array(

      array(
        'id' => 'footer-logo',
        'type' => 'media',
        'title' => 'Footer Logo'
      ),

      array(
        'id' => 'ft-widget-des',
        'type' => 'textarea',
        'title' => 'Description',
      ),

      array(
        'id' => 'footer-social',
        'type' => 'repeater',
        'title' => 'Connect Social Media',
        'fields' => array(
          array(
            'id' => 'ft-social-icon',
            'type' => 'icon',
            'title' => 'Add Icon',
          ),
          array(
            'id' => 'ft-social-url',
            'type' => 'link',
            'title' => 'Add Your Social Link',
          ),
        ),
      ),

    )
  ) );

  //
  // Front-end display of widget example 1
  // Attention: This function named considering above widget base id.
  //
  if( ! function_exists( 'csf_footer_widget_1' ) ) {
    function csf_footer_widget_1( $args, $instance ) {

      echo $args['before_widget'];

      if ( ! empty( $instance['footer-logo'] ) ) {
        echo '<a href="' . site_url() . '">';
        echo '<img src="' . $instance['footer-logo']['url'] . '" alt="Footer Logo">';
        echo '</a>';
      }

      if ( ! empty( $instance['ft-widget-des'] ) ) {
        echo '<p class="mt-4">';
        echo $instance['ft-widget-des'];
        echo '</p>';
      }

      if ( ! empty( $instance['footer-social'] ) ) {
        echo '<div class="social-link mt-30">';
        $ft_social_links = $instance['footer-social'];
        foreach( $ft_social_links as $ft_social_link ) {
          echo '<a href="' . $ft_social_link['ft-social-url']['url'] . '" >';
          echo '<i class="' . $ft_social_link['ft-social-icon'] . '" ></i>';
          echo '</a>';
        }
          echo '</div>';
      }


      // var_dump( $args ); // Widget arguments
      // var_dump( $instance ); // Saved values from database
      // echo $instance['title'];

      echo $args['after_widget'];

    }
  }

  // Create a Footer Widget 2
  CSF::createWidget( 'csf_footer_widget_2', array(
    'title'       => 'Footer Widget 2',
    'classname'   => 'wp10ms-csf-widget-2',
    'description' => 'A description for widget example 2',
    'fields'      => array(
      array(
        'id' => 'ft-wdg2-title',
        'type' => 'text',
        'title' => 'Title',
      ),
    ),
  ));

  if ( ! function_exists( 'csf_footer_widget_2' ) ) {
    function csf_footer_widget_2( $args, $instance ) {
      echo $args['before_widget'];
      echo '<div class="wid-title"><h4>' . $instance['ft-wdg2-title'] . '</h4></div>';
      echo wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ) );
      echo $args['after_widget'];
    }
  }

  // Create a Footer Widget 3
  CSF::createWidget( 'csf_footer_widget_3', array(
    'title'       => 'Footer Widget 3',
    'classname'   => 'wp10ms-csf-widget-3',
    'description' => 'A description for widget example 3',
    'fields'      => array(
      array(
        'id' => 'ft-wdg3-title',
        'type' => 'text',
        'title' => 'Title',
      ),
    ),
  ));

  if ( ! function_exists( 'csf_footer_widget_3' ) ) {
    function csf_footer_widget_3( $args, $instance ) {
      echo $args['before_widget'];
      echo '<div class="wid-title"><h4>' . $instance['ft-wdg3-title'] . '</h4></div>';
      echo wp_nav_menu( array( 'theme_location' => 'footer-menu-3' ) );
      echo $args['after_widget'];
    }
  }

  // Create a Footer Widget 4
  CSF::createWidget( 'csf_footer_widget_4', array(
    'title'       => 'Footer Widget 4',
    'classname'   => 'wp10ms-csf-widget-4',
    'description' => 'A description for widget example 4',
    'fields'      => array(
      array(
        'id' => 'ft-wdg4-title',
        'type' => 'text',
        'title' => 'Title',
      ),
    ),
  ));

  if ( ! function_exists( 'csf_footer_widget_4' ) ) {
    function csf_footer_widget_4( $args, $instance ) {
      // Output before widget content
      echo $args['before_widget'];
      // Output widget title
      echo '<div class="wid-title"><h4>' . esc_html( $instance['ft-wdg4-title'] ) . '</h4></div>';
      // Start recent post list container
      echo '<div class="recent-post-list">';
      
      // Define WP_Query arguments
      $query_args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'orderby'        => 'comment_count',
        'order'          => 'DESC', // Changed to DESC to show most commented posts first
      );
  
      // Create a new WP_Query instance
      $the_query = new WP_Query( $query_args );
  
      // Loop through posts if available
      if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
          // Output individual post
          echo '<div class="single-recent-post">';
          // Output post thumbnail with URL
          echo '<div class="thumb bg-cover" style="background-image: url(' . esc_url( get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ) . ');"></div>';
          // Output post data
          echo '<div class="post-data">';
          echo '<span><i class="fal fa-calendar-alt"></i>' . get_the_date() . '</span>'; // Changed hardcoded date to dynamic
          echo '<h5><a href="' . esc_url( get_permalink() ) . '">' . get_the_title() . '</a></h5>';
          echo '</div>';
          echo '</div>';
        endwhile;
        // Restore original post data
        wp_reset_postdata();
      endif;
      // Close recent post list container
      echo '</div>';
      // Output after widget content
      echo $args['after_widget'];
    }
  }

  // Create a author box widegts
  CSF::createWidget( 'wp10ms_author_box_widget', array(
    'title'       => 'WP10MS Author Box',
    'classname'   => 'wp10ms-sidebar-author-box',
    'description' => 'A description for widget example 4',
    'fields'      => array(
      array(
        'id' => 'sidebar-author-box-h3',
        'type' => 'text',
        'title' => 'Widget Title',
        'default' => 'About Me',
      ),
      array(
        'id' => 'sidebar-author-img',
        'type' => 'media',
        'title' => 'Author Image',
      ),
      array(
        'id' => 'sidebar-author-box-h4',
        'type' => 'text',
        'title' => 'Author Name',
        'default' => 'Rosalina D. Willaimson',
      ),
      array(
        'id' => 'sidebar-author-box-p',
        'type' => 'text',
        'title' => 'Widget Title',
        'default' => 'Hello World!',
      ),
      array(
        'id' => 'sidebar-author-soc-rep',
        'type' => 'repeater',
        'title' => 'Add Author Link',
        'button_title' => 'Add More',
        'max' => 5,
        'fields' => array(
          array(
            'id' => 'sidebar-author-soc-link',
            'type' => 'link',
            'title' => 'Add Social Media Link',
          ),
          array(
            'id' => 'sidebar-author-soc-icon',
            'type' => 'icon',
            'title' => 'Social Icon',
            'default' => 'fab fa-facebook-f',
          ),
        ),
      ),
    ),
  ));

  if ( ! function_exists('wp10ms_author_box_widget') ) {
    function wp10ms_author_box_widget($args, $instance) {
    echo '<div class="single-sidebar-widget author-box-widegts">';
    echo '<div class="wid-title">';
    echo '<h3>' . $instance['sidebar-author-box-h3'] . '</h3>';
    echo '</div>';
    echo '<div class="author-info text-center">';
    echo '<div class="author-img" style="background-image: url(' . $instance['sidebar-author-img']['url'] . ');"></div>';
    echo '<h4>' . $instance['sidebar-author-box-h4'] . '</h4>';
    echo '<p>' . $instance['sidebar-author-box-p'] . '</p>';
    echo '<div class="social-profile">';
    foreach( $instance['sidebar-author-soc-rep'] as $author_link ) {
      echo '<a href="' . $author_link['sidebar-author-soc-link']['url'] . '"><i class="' . $author_link['sidebar-author-soc-icon'] . '"></i></a>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    }
  }

  // Create the widget using Codestar Framework
  CSF::createWidget( 'wp10ms_search_widget', array(
    'title'       => 'WP10MS Search Box',
    'classname'   => 'wp10ms-search-box',
    'description' => 'A description for the WP10MS search widget',
    'fields'      => array(
      array(
        'id'      => 'sidebar-search-box-h3',
        'type'    => 'text',
        'title'   => 'Widget Title',
        'default' => 'Search Objects',  // Fixing the typo, use 'default' instead of 'Default'
      ),
    ),
  ));

  if ( ! function_exists('wp10ms_search_widget') ) {
    function wp10ms_search_widget($args, $instance) {
      echo '<div class="single-sidebar-widget">';
      echo '<div class="wid-title">';
      echo '<h3>' . $instance['sidebar-search-box-h3'] . '</h3>';
      echo '</div>';
      echo '<div class="search_widget">';
      echo '<form action="/">';
      echo '<input type="text" name="s" placeholder="' . esc_attr_x( 'Search your keyword...', 'wp10ms' ) . '" value="' . get_search_query() . '" >';
      echo '<button type="'. esc_attr_x( 'Search', 'submit button' ) .'"><i class="fal fa-search"></i></button>';
      echo '</form>';
      echo '</div>';
      echo '</div>';
    }
  }

  // Create a popular feeds widget
  CSF::createWidget( 'wp10ms_feeds_widget', array(
    'title'       => 'WP10MS Popular Feeds',
    'classname'   => 'wp10ms-popular-feeds',
    'description' => 'A description for the WP10MS search widget',
    'fields'      => array(
      array(
        'id'      => 'sidebar-popular-feeds-h3',
        'type'    => 'text',
        'title'   => 'Widget Title',
        'default' => 'Popular Feeds',
      ),
    ),
  ));

  if ( ! function_exists('wp10ms_feeds_widget') ) {
    function wp10ms_feeds_widget( $args, $instance ) {
      echo '<div class="single-sidebar-widget">';
      echo '<div class="wid-title">';
      echo '<h3>'. $instance['sidebar-popular-feeds-h3'] .'</h3>';
      echo '</div>';
      echo '<div class="popular-posts">';
        $post_args = array(
          'post_type' => 'post',
          'posts_per_page' => '2',
          'status' => 'publish',
        );
        $the_query = new WP_Query( $post_args );
        if ( $the_query->have_posts() ) :
          while( $the_query->have_posts() ) : $the_query->the_post();
          echo '<div class="single-post-item">';
          echo '<div class="thumb bg-cover" style="background-image: url('.get_the_post_thumbnail_url().')"></div>';
          echo '<div class="post-content">';
          echo '<h5><a href="' . get_the_permalink(  ) . '">' . get_the_title() . '</a></h5>';
          echo '<div class="post-date"><i class="far fa-calendar-alt"></i>' . get_the_date() . '</div>';
          echo '</div>';
          echo '</div>';
          endwhile;
          wp_reset_postdata(  );
        endif;

      echo '</div>';
      echo '</div>';
    }
  }

  // Create a categories widget
  CSF::createWidget( 'wp10ms_side_cat_widget', array(
    'title'       => 'WP10MS Categories',
    'classname'   => 'wp10ms-side-cat-widget',
    'description' => 'A description for the WP10MS search widget',
    'fields'      => array(
      array(
        'id'      => 'sidebar-cat-widget-h3',
        'type'    => 'text',
        'title'   => 'Widget Title',
        'default' => 'Categories',
      ),
    ),
  ));

  if ( ! function_exists('wp10ms_side_cat_widget') ) {
    function wp10ms_side_cat_widget( $args, $instance ) {
      echo '<div class="single-sidebar-widget">';
      echo '<div class="wid-title">';
      echo '<h3>' . $instance['sidebar-cat-widget-h3'] . '</h3>';
      echo '</div>';
      echo '<div class="widget_categories">';
      echo '<ul>';
      foreach ( get_the_category() as $category ) {
        echo '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">';
        echo esc_html( $category->name ) . ' <span>' . esc_html( $category->count ) . '</span></a></li>';
      }
      echo '</ul>';
      echo '</div>';
      echo '</div>';
    }
  }

  // Create a social link widget
  CSF::createWidget( 'wp10ms_side_social_widget', array(
    'title'       => 'WP10MS Social Link',
    'classname'   => 'wp10ms-side-social-widget',
    'description' => 'A description for the WP10MS search widget',
    'fields'      => array(
      array(
        'id'      => 'sidebar-soc-wid-h3',
        'type'    => 'text',
        'title'   => 'Widget Title',
        'default' => 'Never Miss News',
      ),
      array(
        'id'      => 'sidebar-soc-wid-rep',
        'type'    => 'repeater',
        'title'   => 'Social Media',
        'button_title' => 'Add More',
        'max'     => '5',
        'fields'  => array(
          array(
            'id'      => 'sidebar-soc-wid-link',
            'type'    => 'link',
            'title'   => 'Social Link',
            'default' => '#',
          ),
          array(
            'id'      => 'sidebar-soc-wid-icon',
            'type'    => 'icon',
            'title'   => 'Social Icon',
            'default' => 'fab fa-facebook-f',
          ),
        ),
      ),
    ),
  ));
  if ( ! function_exists( 'wp10ms_side_social_widget' ) ) {
    function wp10ms_side_social_widget( $args, $instance ) {
        // Widget Title
        echo '<div class="single-sidebar-widget">';
        echo '<div class="wid-title">';

        // Check if the title exists and escape the output
        if ( ! empty( $instance['sidebar-soc-wid-h3'] ) ) {
            echo '<h3>' . esc_html( $instance['sidebar-soc-wid-h3'] ) . '</h3>';
        }

        echo '</div>';
        
            echo '<div class="social-link">';
            foreach ( $instance['sidebar-soc-wid-rep'] as $social ) {
                    echo '<a href="' . esc_url( $social['sidebar-soc-wid-link']['url'] ) . '">';
                    echo '<i class="' . esc_attr( $social['sidebar-soc-wid-icon'] ) . '"></i></a>';
            }
            echo '</div>';

        echo '</div>';
    }
  }

  // Create a social link widget
  CSF::createWidget( 'wp10ms_side_insta_widget', array(
    'title'       => 'WP10MS Insta Feeds',
    'classname'   => 'wp10ms-side-insta-widget',
    'description' => 'A description for the WP10MS search widget',
    'fields'      => array(
      array(
        'id'      => 'sidebar-insta-wid-h3',
        'type'    => 'text',
        'title'   => 'Widget Title',
        'default' => 'Instagram Feeds',
      ),
      array(
        'id'      => 'sidebar-insta-wid-shortCode',
        'type'    => 'text',
        'title'   => 'Short Code',
        'default' => '[instagram-feed feed=1]',
      ),
    ),
  ) );

  if ( ! function_exists( 'wp10ms_side_insta_widget' ) ) {
    function wp10ms_side_insta_widget( $args, $instance ) {
      echo '<div class="single-sidebar-widget instagram-widget">';
        echo '<div class="wid-title">';
          echo '<h3>'. esc_html( $instance['sidebar-insta-wid-h3'] ) .'</h3>';
        echo '</div>';
        echo '<div class="instagram-gallery">';
        // Corrected the shortcode usage
        echo do_shortcode( $instance['sidebar-insta-wid-shortCode'] );
        echo '</div>';
      echo '</div>';
    }
}



















}
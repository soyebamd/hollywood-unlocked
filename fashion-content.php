
<section id="top-stories">
  <div id="stories-content">
    <h2 class="heading">Fashion</h2>
    <div class="tab-content">
      <?php 


// WP_Query arguments


// WP_Query arguments
$args = array ( 'posts_per_page' => 1, 'category_name' => 'Fashion');


// The Query
$slider = new WP_Query( $args );



  
  if ($slider-> have_posts() ) : ?>
      <?php if ( is_home() && ! is_front_page() ) : ?>
      <?php endif; ?>
      <?php
      // Start the loop.
      while ( $slider->have_posts() ) : $slider->the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'slider', get_post_format() );

      // End the loop.
      endwhile;

     

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );

    endif;
    ?>
    </div>
    <!--end tab content-->
  </div>
</section>
<section id="post-container">
  <?php if ( have_posts() ) : ?>
  <?php if ( is_home() && ! is_front_page() ) : ?>
  <header>
    <h1 class="page-title screen-reader-text">
      <?php single_post_title(); ?>
    </h1>
  </header>
  <?php endif; ?>
  <?php
      // Start the loop.
      while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', get_post_format() );

      // End the loop.
      endwhile;

      // Previous/next page navigation.
      the_posts_pagination( array(
        'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
        'next_text'          => __( 'Next page', 'twentyfifteen' ),
        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
      ) );

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );

    endif;
    ?>
</section>
<?php  get_template_part(  'latest-post' ); ?>

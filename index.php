<?php get_header(); ?>

<div role="main" id="main">
  <div class="container">
    <div class="row">
      <div id="content-block" class="col-sm-8">
        <section id="top-stories">
          <div id="stories-content">
            <h2 class="heading">Top Stories</h2>
            <div class="tab-content">
              <?php 


// WP_Query arguments


// WP_Query arguments
$args = array ( 'posts_per_page' => 3, 'category_name' => 'Featured');


// The Query
$slider = new WP_Query( $args );



  
  if ($slider-> have_posts() ) : ?>
              <?php if ( is_home() && ! is_front_page() ) : ?>
              <header>
                <h1 class="page-title screen-reader-text">Meet the
                  <?php the_filed('celebrity_name'); ?>
                </h1>
              </header>
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
          <div id="story-thumbs" class="row" role="tablist">
            <?php 

// WP_Query arguments
$args = array ( 'posts_per_page' => 3, 'category_name' => 'Featured');

// The Query
$thumb = new WP_Query( $args );




  if ($thumb-> have_posts() ) : ?>
            <?php if ( is_home() && ! is_front_page() ) : ?>
            <header>
              <h1 class="page-title screen-reader-text">
                <?php single_post_title(); ?>
              </h1>
            </header>
            <?php endif; ?>
            <?php
      // Start the loop.
      while ($thumb-> have_posts() ) : $thumb->the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'thumb', get_post_format() );

      // End the loop.
      endwhile;

     

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );

    endif;
    ?>
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


           <?php if ( is_home() || is_front_page() ) {


           query_posts( 'cat=-4' );



           } ?>





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
        <section id="instagram-block">
          <h3 class="sidebar-heading">INSTAGRAM</h3>
          <iframe src="http://snapwidget.com/in/?u=aHdvb2R1bmxvY2tlZHxpbnwxMjV8NHwxfHxub3wwfG5vbmV8b25TdGFydHx5ZXN8eWVz&ve=090815" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%;"></iframe>
        </section>
        <section id="partner">
          <div class="title-cover">
            <h4 class="h4">FROM OUR PARTNERS</h4>
          </div>
          <div class="row text-center">
            <?php

$hu_interview = new WP_Query();
$hu_interview->query( 'posts_per_page=8&post_type=our-partners' );



while ( $hu_interview->have_posts() ) :
$hu_interview->the_post();


?>
            <article class="col-sm-3">
              <?php 
        //post thumbnail
        if(has_post_thumbnail()) {
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_url($image_id);
          ?>
              <img src="<?php echo $image_url; ?>" class="auto">
              <?php
        }
        ?>
              <h5 class="h5">
                <?php the_title(); ?>
              </h5>
              <p class="text-left">
                <?php the_content(); ?>
              </p>
            </article>
            <?php

endwhile;


?>
          </div>
        </section>
      </div>
      <!-- ############sidebar################ -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>

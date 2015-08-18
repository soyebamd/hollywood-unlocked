<?php get_header(); ?>

<div role="main" id="main">
  <div class="container">
    <div class="row">
      <div id="content-block" class="col-sm-8">
        <!-- <section id="top-stories">
          <div id="stories-content">
            <h2 class="heading">Top Stories</h2>
            

          </div>
 
        </section>
        <section id="post-container">

        -->
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
       get_template_part( 'content', 'page' );

      
      // End the loop.
      endwhile;


    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );

    endif;
    ?>
        </section>
      </div>
      <!-- ############sidebar################ -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php  get_template_part(  'latest-post' ); ?>
<?php get_footer(); ?>

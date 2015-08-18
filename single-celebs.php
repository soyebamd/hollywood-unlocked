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
        get_template_part( 'content', 'single', get_post_format() );

        
     

      // End the loop.
      endwhile;

      // Previous/next post navigation.





    else :
      get_template_part( 'content', 'none' );

    endif;
    ?>
        <?php



$celeb_name = get_the_title();


$celeb_real_name = str_replace(' ', '-', $celeb_name);


echo "<h3 class='sidebar-heading'> Related Post from ".$celeb_name."</h3> <br>";


if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
    } else if ( get_query_var('page') ) {
    $paged = get_query_var('page');
    } else {
    $paged = 1;
    }




//$celeb_posts->query( 'posts_per_page=1&tag=bobbi-kristina&paged='.$paged );



$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array('posts_per_page' => 10, 'paged' => $paged, 'post_type' =>'post',  'tag' => $celeb_real_name );


query_posts($args);

?>
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
        get_template_part( 'content', 'celeb', get_post_format() );

        
          // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
       // comments_template();
      endif;




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
      </div>
      <!-- ############sidebar################ -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php  get_template_part(  'latest-post' ); ?>
<?php get_footer(); ?>

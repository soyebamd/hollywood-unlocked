<?php

/*
Template Name: Archives
*/

?>


<?php get_header(); ?>


<div role="main" id="main">
<div class="container-fluid" style="padding:0;">
    <div>
      <div id="content-block">
        


<div class="filter-wrap  text-center">

<ul id="filter-tag" class="list-unstyled list-inline ">


<?php

 echo "<li><a href='#''  data-filter='*'>Show All</a></li>";
                   

// loop through the categries

  $cats = get_categories(); 
                foreach ($cats as $cat) {
                    // setup the cateogory ID
                    $cat_id= $cat->term_id;
                    // Make a header for the cateogry

                    echo "<li><a href='#''  data-filter=.".$cat->name.">".$cat->name."</a></li>";
                    // create a custom wordpress query
                }

?>



</ul></div>




        <section class="grid">


<div class="grid-sizer"></div>

  <div class="gutter-sizer"></div>



<?php
 // get all the categories from the database
            $cats = get_categories(); 
 
                // loop through the categries
                foreach ($cats as $cat) {
                    // setup the cateogory ID
                    $cat_id= $cat->term_id;

                  $cat =  $GLOBALS[$cat_id];
                   
                }

$latest_archives = new WP_Query();
$latest_archives->query( 'post_type=post&showposts=50&cat='.$cat.'&paged='.$paged );

?>


          <?php if ($latest_archives -> have_posts() ) : ?>


      <?php
      // Start the loop.
      while ( $latest_archives -> have_posts() ) : $latest_archives -> the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'content', 'archives', get_post_format() );

      // End the loop.
      endwhile;

    next_posts_link('&laquo; Older Entries');
previous_posts_link('Newer Entries &raquo;');

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


 <div class="archive-items archive-items--width2"></div>


          </section>
















      </div>





<!-- ############sidebar################ -->

<?php //get_sidebar(); ?>


    </div>
  </div>
</div>

<?php get_footer(); ?>


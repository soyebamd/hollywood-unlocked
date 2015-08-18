<?php

/*
Template Name: Video
*/

?>


<?php get_header(); ?>


<div role="main" id="main">
  <div class="container">

  	<h2 class="heading">Top Videos</h2>

  	<section class="video-container">

<div class="placeholder"></div>


<!-- 4:3 aspect ratio -->
<div id="video-block">

<?php

$latest_video = new WP_Query();
$latest_video->query( 'posts_per_page=1&post_type=videos' );

while ( $latest_video->have_posts() ) :
$latest_video->the_post();

?>

<div class="embed-responsive embed-responsive-16by9">
 


  <iframe class="embed-responsive-item" src="<?php the_field('video_link'); ?>?rel=0&showinfo=0"></iframe>

 
</div>

<?php 


endwhile;

?>


 <h2 class="top-stories-title"><span class="sprite left-sprite"></span><span class="center-block">  <?php the_title(); ?> </span><span class="sprite right-sprite"></span></h2>

</div>

<div class="video-text">

<?php the_content(); ?>

</div>

  	</section>


  

  </div>



<?php  get_template_part(  'content', 'video' ); ?>


</div>



<?php get_footer(); ?>
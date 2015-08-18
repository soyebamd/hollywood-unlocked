
<section id="video-thumb" class="container">
  <h3 class="h3">More Video</h3>
  <div class="row">
    <?php

$latest_video_thumb = new WP_Query();
$latest_video_thumb->query( 'posts_per_page=12&post_type=videos' );

while ( $latest_video_thumb->have_posts() ) :
$latest_video_thumb->the_post();

?>
    <article class="col-md-4">
      <div class="video-thumb"> <i class="fa fa-play"></i>
        <div class="video-thumb-img">
          <?php 
				//post thumbnail
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
          <a href="<?php the_permalink() ?>"  style="height:230px; width:100%; background:url('<?php echo $image_url; ?>') no-repeat; background-size:cover; " class="video-thumb-link"> </a>
          <?php
				}


				?>
        </div>
        <p>
          <?php the_title(); ?>
        </p>
      </div>
    </article>
    <?php 


endwhile;

?>
  </div>
</section>
<!-- latest loop -->
<section id="latest-post" class="container">
  <h2 class="heading">You may also like to unlock</h2>
  <?php

$latest_posts = new WP_Query();
$latest_posts->query( 'posts_per_page=4' );

while ( $latest_posts->have_posts() ) :
$latest_posts->the_post();

?>
  <article id="post-<?php the_ID(); ?>" class="col-sm-3">
    <?php 
if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
    <div class="latest-post-thumb" style="height:230px; width:100%; background:url('<?php echo $image_url; ?>') no-repeat; background-size:cover; "></div>
    <?php
				}
				?>
    <div class="latest-text">
      <h4 class="h4">
        <?php the_title(); ?>
      </h4>
      <p><a href="<?php the_permalink() ?>"  class="unlock-more-text" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"> UNLOCK MORE </a></p>
    </div>
  </article>
  <?php 


endwhile;

?>
</section>

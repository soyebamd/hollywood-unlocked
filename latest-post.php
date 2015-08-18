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

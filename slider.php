<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<article role="tabpanel" class="tab-pane fade in" id="post-<?php the_ID(); ?>">
  <?php 
        //post thumbnail
        if(has_post_thumbnail()) {
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_url($image_id);
          ?>
  
  <div class="img-holder" style="width:100%; height:375px; background:url('<?php echo $image_url; ?>') left top ; background-size:cover;">
    <?php if(is_category()){ ?>
    <?php

} else { ?>
    <h2 class="top-stories-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>celebs/<?php the_field('celebrity_name'); ?>"><span class="sprite left-sprite"></span><span class="center-block">
      <?php the_field('celebrity_name'); ?>
      </span><span class="sprite right-sprite"></span></a></h2>
    <?php } ?>
  </div>
  <?php
        }
        ?>
  <?php if(is_category()){ ?>
  <h3 class="h3">
    <?php the_title(); ?>
  </h3>
  <?php } ?>
  <p class="meta"><strong>By:
    <?php the_author() ?>
    </strong> <span>
    <?php the_time('F jS, Y') ?>
    </span></p>
  <?php if(is_category()){ ?>
  <?php //echo do_shortcode('[simple-social-share]'); ?>
  <?php } ?>
  <?php the_excerpt(); ?>
  </p>
</article>

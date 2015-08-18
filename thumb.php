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

<article class="col-xs-4" role="presentation"> <a href="#post-<?php the_ID(); ?>" aria-controls="tab1" role="tab" data-toggle="tab">
  <?php 
        //post thumbnail
        if(has_post_thumbnail()) {
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_url($image_id);
          ?>
  <div class="img-holder" style="width:100%; height:125px; background:url('<?php echo $image_url; ?>') left top ; background-size:cover;">
    <h2 class="top-stories-title"><span class="sprite left-sprite"></span><span class="center-block">

Featured


      <?php/*
foreach((get_the_category()) as $category) {
    echo $category->cat_name . ', ';
}
*/?>
      </span><span class="sprite right-sprite"></span></h2>
  </div>
  <?php
        }
        ?>
  <h3 class="h3">
    <?php the_title(); ?>
  </h3>

<div class="cat"><?php the_category(); ?></div>
  </a> </article>

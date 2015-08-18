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

<article id="post-<?php the_ID(); ?>" class="archive-items <?php $categories = get_the_category();
foreach ( $categories as $category ) { 
   echo $category->name. ' '; 
} ?>"> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
  <div class="archive-container">
    <?php 
				//post thumbnail
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
    <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/timthumb.php?src=<?php echo $image_url; ?>&w=300&h=auto&q=100" alt="<?php the_title();?>" >
    <?php
				}
				?>
    <i class="fa fa-location-arrow"></i> </div>
  <h2 class="h2">
    <?php the_title(); ?>
  </h2>
  </a> </article>
<!-- #post-## -->

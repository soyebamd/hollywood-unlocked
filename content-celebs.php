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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="row">
              <div class="col-md-6">
                <div class="text-wrapper">
                 

                 	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="h3">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="h3"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header><!-- .entry-header -->


 <p class="meta">	<?php twentyfifteen_entry_meta(); ?> </p>


               
                  
<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
		
		if ( is_single() ) :

			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

		else :

the_excerpt();
			endif;



			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->



                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="feature-img post-img">
                 

<?php if(is_category()){ ?>
                 
                  <?php

} else { ?>


           <h2 class="top-stories-title"><span class="sprite left-sprite"></span><span class="center-block">  <?php the_category(', ') ?> </span><span class="sprite right-sprite"></span></h2>
            

            <?php } ?>     

                 <?php 
				//post thumbnail
				if(has_post_thumbnail()) {
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($image_id);
					?>
                    
					<img class="img-responsive" src="<?php echo $image_url; ?>" alt="<?php the_title();?>" >
                    
					<?php
				}
				?> 
 </div>
              </div>
            </div>
        


	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>


	
	<footer class="entry-footer">
	
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

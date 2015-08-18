<?php


require_once 'inc/template-tags2.php';

//sidebar widget


	register_sidebar( array(
		'name'          => __( 'Top Adds', 'twentyfifteen' ),
		'id'            => 'top-adds',
		'description'   => __( 'Top Addvertisment Widgets.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );



	register_sidebar( array(
		'name'          => __( 'Twitter Feed', 'twentyfifteen' ),
		'id'            => 'twitter-feeds',
		'description'   => __( 'Top Addvertisment Widgets.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );




add_action( 'widgets_init', 'twentyfifteen_widgets_init' );


/*widget*/


/*

HU Exclusive Interviews

*/

class HU_EXCLUSIVE_INTERVIEWS extends WP_Widget {
         public function __construct() {
               // widget actual processes

         	parent::WP_Widget(false,'HU Exclusive Interviews','');


        }

        public function form( $instance ) {
               // outputs the options form on admin

echo "HU Exclusive Interviews Posts";

        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               // outputs the content of the widget

echo "<section id='hu-exclusive'>



<h3 class='sidebar-heading'>HU EXCLUSIVE INTERVIEWS</h3>

";

$hu_interview = new WP_Query();
$hu_interview->query( 'posts_per_page=3&post_type=celebs&category_name=hu-exclusive-interviews' );

while ( $hu_interview->have_posts() ) :
$hu_interview->the_post();



?>
<article  >
  <?php 
        //post thumbnail
        if(has_post_thumbnail()) {
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_url($image_id);
          ?>
  
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Interview Link to <?php the_title_attribute(); ?>" style="width:100%; height:165px; background:url('<?php echo $image_url; ?>') left top ; background-size:cover; display:block;">
  <h4 class="h4">
    <?php the_title(); ?>
  </h4>
  </a>
  <?php
        }
        ?>
  </article>
  <?php


endwhile;






echo "</section>";



        }

}
register_widget( 'HU_EXCLUSIVE_INTERVIEWS' );



/*Google ADD Widget*/



class google_ads1 extends WP_Widget {
         public function __construct() {
               // widget actual processes

         	parent::WP_Widget(false,'Google Add Widget 1','');


        }

        public function form( $instance ) {
               // outputs the options form on admin

echo "Google Add Widget Code";

        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               // outputs the content of the widget


echo'

<section class="nh-add">

<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<!-- 300x250 ATF2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-6705317214105861"
     data-ad-slot="4918253030"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</section>


';


        }

}
register_widget( 'google_ads1' );








/*Google ADD Widget 2*/



class google_ads2 extends WP_Widget {
         public function __construct() {
               // widget actual processes

          parent::WP_Widget(false,'Google Add Widget 2','');


        }

        public function form( $instance ) {
               // outputs the options form on admin

echo "Google Add Widget Code";

        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               // outputs the content of the widget


echo'


<section class="nh-add">
<script async src="//"></script>
<!-- 300x250 BTF2 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-6705317214105861"
     data-ad-slot="6394986231"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

</section>







';


        }

}
register_widget( 'google_ads2' );







/*Most Unlocked Celebrities*/





/*Google ADD Widget*/



class unlocked_celebrities extends WP_Widget {
         public function __construct() {
               // widget actual processes

          parent::WP_Widget(false,'Most Unlocked Celebrities','');


        }

        public function form( $instance ) {
               // outputs the options form on admin

echo "Most Unlocked Celebrities Posts";

        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               // outputs the content of the widget



echo "<section id='unlocked-celebrities'>



<h3 class='sidebar-heading'>MOST UNLOCKED CELEBRITIES</h3>

";

$hu_interview = new WP_Query();
$hu_interview->query( 'posts_per_page=10&post_type=celebs&category_name=most-unlocked-celebrities' );


$i = 0;



while ( $hu_interview->have_posts() ) :
$hu_interview->the_post();



$i++;


?>
  <article> <a href="<?php the_permalink() ?>" rel="bookmark" title="Interview Link to <?php the_title_attribute(); ?>">
    <div class="row">
      <div class="col-xs-5">
        <?php 
        //post thumbnail
        if(has_post_thumbnail()) {
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_url($image_id);
          ?>
        <div style="display:block; width:100%; height:110px; background:url('<?php echo $image_url; ?>') center top no-repeat; background-size:cover;"></div>
        <?php
        }
        ?>
      </div>
      <div class="col-xs-7">
        <h3 class="h3"><span><?php echo $i ; ?></span>
          <?php the_title(); ?>
          <i class="fa fa-angle-right"></i></h3>
      </div>
    </div>
    </a> </article>
  <?php


endwhile;






echo "</section>";;


        }

}
register_widget( 'unlocked_celebrities' );






/*twitter_feeds*/



class twitter_feeds extends WP_Widget {
         public function __construct() {
               // widget actual processes

          parent::WP_Widget(false,'Latest Twitter Feeds','');


        }

        public function form( $instance ) {
               // outputs the options form on admin

echo "Show Latest Twitter Feeds";

        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               // outputs the content of the widget



echo '

<section id="latest-tweets">


<h3 class="sidebar-heading">Latest Tweets</h3>


<div class="tweets-wrapper">


<div id="jstwitter"></div>  


</div>

</section>


';
        }

}
register_widget( 'twitter_feeds' );





/*facebook_login*/



class facebook_login extends WP_Widget {
         public function __construct() {
               // widget actual processes

          parent::WP_Widget(false,'Facebook Login','');


        }

        public function form( $instance ) {
               // outputs the options form on admin

echo "Facebook Login";

        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               // outputs the content of the widget


?>
  <section id="facebook-signup">
    <h3 class="sidebar-heading"> <a href="http://www.kingtidestaging.com/clients/hollywoodunlocked/wp-login.php?loginFacebook=1&redirect=http://www.kingtidestaging.com/clients/hollywoodunlocked" onclick="window.location = 'http://www.kingtidestaging.com/clients/hollywoodunlocked/wp-login.php?loginFacebook=1&redirect='+window.location.href; return false;">Sign up with facebook</a> </h3>
  </section>
  <?php


        }

}
register_widget( 'facebook_login' );










/*photos of the day*/



class photos_day extends WP_Widget {
         public function __construct() {
               // widget actual processes

          parent::WP_Widget(false,'Photos of the day','');


        }

        public function form( $instance ) {
               // outputs the options form on admin

echo "Photos of the day";

        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               // outputs the content of the widget


?>
  <section class="slider-block">
    <h3 class="sidebar-heading">PHOTOS OF THE DAY</h3>
    <div class="slides">
      <?php
// WP_Query arguments
$ph_day = array ( 'posts_per_page' => 3, 'post_type'=>'post', 'category_name' => 'photos-of-the-day');


// The Query
$ph_tday = new WP_Query( $ph_day );



  
  if ($ph_tday-> have_posts() ) : 



  while ( $ph_tday->have_posts() ) : $ph_tday->the_post();

      
       
?>
      <article>
        <?php 
        //post thumbnail
        if(has_post_thumbnail()) {
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_url($image_id);
          ?>
          
          
        <div class="img-holder" style="width:100%; height:375px; background:url('<?php echo $image_url; ?>') center top ; background-size:cover;"></div>
        <?php }
                ?>
        <h4 class="h4">
          <?php the_title(); ?>
        </h4>
        <?php the_excerpt(); ?>
      </article>
      <?php



      // End the loop.
      endwhile;

     

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );

    endif;
    ?>
    </div>
  </section>
  <?php


        }

}


register_widget( 'photos_day' );



























/*nightlife_unlocked*/



class nightlife_unlocked extends WP_Widget {
         public function __construct() {
               // widget actual processes

          parent::WP_Widget(false,'Nightlife Unlocked','');


        }

        public function form( $instance ) {
               // outputs the options form on admin

echo "Nightlife Unlocked";

        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               // outputs the content of the widget


?>
  <section class="slider-block">
    <h3 class="sidebar-heading">NIGHTLIFE UNLOCKED</h3>
    <div class="slides">
      <?php
// WP_Query arguments
$ph_day = array ( 'posts_per_page' => 3, 'post_type'=>'post', 'category_name' => 'nightlife-unlocked');


// The Query
$ph_tday = new WP_Query( $ph_day );



  
  if ($ph_tday-> have_posts() ) : 



  while ( $ph_tday->have_posts() ) : $ph_tday->the_post();

      
       
?>
      <article>
        <?php 
        //post thumbnail
        if(has_post_thumbnail()) {
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_url($image_id);
          ?>
        <div class="img-holder" style="width:100%; height:375px; background:url('<?php echo $image_url; ?>') center top ; background-size:cover;"></div>
        <?php }
                ?>
        <h4 class="h4">
          <?php the_title(); ?>
        </h4>
        <?php the_excerpt(); ?>
      </article>
      <?php



      // End the loop.
      endwhile;

     

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );

    endif;
    ?>
    </div>
  </section>
  <?php


        }

}


register_widget( 'nightlife_unlocked' );































/*Exclusive Videos*/



class exclusive_videos extends WP_Widget {
         public function __construct() {
               // widget actual processes

          parent::WP_Widget(false,'Exclusive Videos','');


        }

        public function form( $instance ) {
               // outputs the options form on admin

echo "Exclusive Videos";

        }

        public function update( $new_instance, $old_instance ) {
               // processes widget options to be saved
        }

        public function widget( $args, $instance ) {
               // outputs the content of the widget


?>
  <section id="exclusive-video">
    <h3 class="sidebar-heading">Exclusive Videos</h3>
    <div class="exc-video-posts">
      <?php
// WP_Query arguments
$videos = array ( 'posts_per_page' => 3, 'post_type'=>'post', 'category_name' => 'videos');


// The Query
$videos_post = new WP_Query( $videos );



  
  if ($videos_post-> have_posts() ) : 



  while ( $videos_post->have_posts() ) : $videos_post->the_post();

      
       
?>
      <article>
        <div class="row">
          <div class="col-sm-4 ">
            <?php 
        //post thumbnail
        if(has_post_thumbnail()) {
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_url($image_id);
          ?>
            <img src="<?php echo $image_url; ?>" class="img-circle img-responsive celebrity">
            <?php }
                ?>
          </div>
          <div class="col-sm-8">
            <h5 class="h5">
              <?php the_title(); ?>
            </h5>
          </div>
          <div class="col-md-12">
            <p>
              <?php
echo wp_trim_words( get_the_content(), 30, '...' );
?>
            </p>
            <p><a  href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="link">View Video <i class="fa fa-angle-right"></i> </a></p>
          </div>
        </div>
      </article>
      <?php



      // End the loop.
      endwhile;

     

    // If no content, include the "No posts found" template.
    else :
      get_template_part( 'content', 'none' );

    endif;
    ?>
      <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>videos">See All</a></p>
    </div>
  </section>
  <?php


        }

}


register_widget( 'exclusive_videos' );







?>
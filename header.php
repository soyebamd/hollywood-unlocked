<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7"<?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8"<?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- KTC -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.bxslider.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="http://thehollywoodunlocked.com/wp-content/uploads/2015/04/hu-logo-pink-initials.png">
</head>
<body>
<nav class="mob-menu-wp" id="mob-menu">
  <div class="cross" id="close-btn"><i class="fa fa-close"></i></div>
  <?php

$defaults = array(
  
  'menu'            => 'Main Menu',  
  'items_wrap'      => '<ul id="%1$s" class="list-unstyled">%3$s</ul>'

);

wp_nav_menu( $defaults );

?>
</nav>
<header role="banner" id="header">
  <section class="container" id="top-header">
    <div class="row">
      <article class="col-sm-4">
        <ul class="social-icon list-unstyled list-inline">
          <li><a href="https://www.facebook.com/hwoodunlocked" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="http://www.twitter.com/hwoodunlocked" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" target="_blank"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube" target="_blank"></i></a></li>
          <li><a href="#"><i class="fa fa-search" target="_blank"></i></a></li>
        </ul>
      </article>
      <article class="col-sm-4 text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" id="logo"></a></article>
      <article class="col-sm-4 text-right">
        <?php 

require_once 'searchform.php';


?>
      </article>
    </div>
    <div  class="row" id="mob-display" >
      <div id="deskbtn"> Menu <i class="fa fa-bars pull-right" id="open"></i> <i class="fa fa-close pull-right" id="close"></i> </div>
    </div>
    <div class="category-links">
      <?php

$defaults = array(
  
  'menu'            => 'Main Menu',  
  'items_wrap'      => '<ul id="%1$s" class="nav nav-justified">%3$s</ul>'

);

wp_nav_menu( $defaults );

?>
    </div>
  </section>
  <section id="menu-wrapper">
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header"> <a href="#"  id="drom-down" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><i class="fa fa-bars"></i></a> <a class="navbar-brand" href="#">Trending</a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li>
              <?php wp_tag_cloud('' ); ?>
            </li>
            <?php //For Post



$tag_archives = new WP_Query();
$tag_archives->query( 'post_type=post');

?>
            <?php if ($tag_archives->have_posts()) : ?>
            <?php while ($tag_archives->have_posts()) : $tag_archives->the_post(); // the loop ?>
            <?php // the_tags( '<li>', '</li><li>', '</li>' ); ?>
            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </section>
  <?php if ( is_active_sidebar( 'top-adds' ) ) : ?>
  <!--  <section class="addvertise-banner container text-center"><?php //dynamic_sidebar( 'top-adds' ); ?> -->
  <section class="addvertise-banner container text-center">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 728x90 BTF -->
    <ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6705317214105861"
     data-ad-slot="4200750234"></ins>
    <script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
  </section>
  <?php endif; ?>
</header>

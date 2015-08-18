<?php get_header(); ?>

<div role="main" id="main">
  <div class="container">
    <div class="row">
      <div id="content-block" class="col-sm-8">
        <?php  get_template_part(  'fashion-content' ); ?>
      </div>
      <!-- ############sidebar################ -->
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>

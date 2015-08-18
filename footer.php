<section class="addvertise-banner container text-center margin-20">
  <article>
    <script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 728x90px ATF -->
    
    <ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6705317214105861"
     data-ad-slot="6174660230"></ins>
    </article>
    </section>
    <footer role="contentinfo" id="footer">
      <div class="container">
        <div class="row">
          <article class="col-sm-4"><small>©2015 The Hollywood Unlocked. | <a href="#">Terms</a> | <a href="#">Advertising</a></small></article>
          <article class="col-sm-4 text-center">
            <ul class="social-icon list-unstyled list-inline">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-search"></i></a></li>
            </ul>
          </article>
          <article class="col-sm-4 text-right">
            <?php include ("searchform.php"); ?>
          </article>
        </div>
      </div>
    </footer>
    <!-- jQuery  -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!--  plugins  -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.js"></script>
    <!-- or -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.1/isotope.pkgd.js"></script>
    <!-- or -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.1/isotope.pkgd.min.js"></script>
    <script src="http://snapwidget.com/js/snapwidget.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/twitter-feeds/jquery.gridalicious.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/twitter-feeds/jquery.jstwitter.js"></script>
    <script type="text/javascript">
$(function () {
    // start jqtweet!
    JQTWEET.loadTweets();
});   
</script>
    <script>

$(function(){




    var $container = $('.grid');

    $container.isotope({
        itemSelector: '.archive-items',
        masonry: {
            
  // use outer width of grid-sizer for columnWidth
columnWidth: '.grid-sizer',
gutter: '.gutter-sizer',
// do not use .grid-sizer in layout
itemSelector: '.archive-items',
percentPosition: true

        }
    });

    $('#filter-tag').on('click', 'a', function() {
        var selector = $(this).data('filter');
        $container.isotope({
            filter: selector
        });


    return false;



    });






/*
$('#filter-tag a').click(

function(){

  var filterClass = $(this).attr('class');

  //alert(filterClass);

  if(filterClass == 'All'){

$('.archive-items').show();

  }


  else {

    $('.archive-items').hide();


       $('.archive-items.'+filterClass).show();

      }

      return false;


}


  );*/




});









</script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62684775-1', 'auto');
  ga('send', 'pageview');

</script>
    <script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </body></html>
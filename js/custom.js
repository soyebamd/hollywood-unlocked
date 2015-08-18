$(document).ready(function(){



//navbar


$('.navbar-brand').click(function(){
$('.navbar').toggleClass('hight-auto');
$(this).toggleClass('down-arrow');
return false;
            });
            
            
                //mob menu animation
               $('#deskbtn #close').hide();

              $('#deskbtn #open').click(function(){

              	
                              
                              
                              $('.mob-menu-wp').animate({left:'0'}, 1000);


                              $(this).hide();

                               $('#deskbtn #close').show();
                              
                              
                              });


               $('#deskbtn #close').click(function(){

              	
                               $(this).hide();

                               $('#deskbtn #open').show();
                              
                              
                              $('.mob-menu-wp').animate({left:'-80%'}, 1000);
                              
                              
                              });


              
                
              $('#close-btn').click(function(){
                              
                              $('#deskbtn #close').hide();
                               $('#deskbtn #open').show();


                              $('.mob-menu-wp').animate({left:'-80%'}, 1000);

                          })
                              
                         


  $('.slides').bxSlider({


  	start:'auto',
  	auto: true,
  	pager:false
  });



  //first slider active

$('.tab-content article:first').addClass('active');

$('ul.children').parent(['li']).find('a:first').removeAttr('href');

});
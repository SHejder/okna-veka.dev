<?php
/**
* @package   VeltheMe
* @author    http://velerbu.com
* @copyright Copyright (C) Velerbu
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get theme configuration
include($this['path']->path('layouts:theme.config.php'));

?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>"  data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>

    <head>
        <script src="/wp-content/themes/okna/js/jquery-1.11.1.min.js"></script>
        <script src="/wp-content/themes/okna/js/jquery-1.12.1.min.js"></script>
        <script src="/wp-content/themes/okna/js/script.js"></script>
        <script src="/wp-content/themes/okna/js/jquery.cookie.js"></script>
        <script src="/wp-content/themes/okna/js/jquery-ui.min.js"></script>
        <script src="/wp-content/themes/okna/js/fancySelect.js"></script>
        <script src="/wp-content/themes/okna/js/jquery.boutique.js"></script>
        <script src="/wp-content/themes/okna/js/jquery.prettyPhoto.js"></script>
        <script src="/wp-content/themes/okna/js/jquery.lockfixed.min.js"></script>
        <script src="/wp-content/themes/okna/js/jquery.inputmask.min.js"></script>
        <script src="/wp-content/themes/okna/js/lightslider.min.js"></script>
        <script src="/wp-content/themes/okna/js/jquery.countdown.js"></script>
        <script src="/wp-content/themes/okna/js/carousel.js"></script>
        <script src="/wp-content/themes/okna/js/jquery.scrollTo-min.js"></script>
        <?php echo $this['template']->render('head'); ?>
        <link rel="stylesheet" href="/wp-content/themes/okna/css/main.css">
        <link rel="stylesheet" href="/wp-content/themes/okna/css/animate.css">
        <link rel="stylesheet" href="/wp-content/themes/okna/css/boutique.css">
        <link rel="stylesheet" href="/wp-content/themes/okna/css/carousel.css">
        <link rel="stylesheet" href="/wp-content/themes/okna/css/carousel_wood.css">
        <link rel="stylesheet" href="/wp-content/themes/okna/css/countdown.css">
        <link rel="stylesheet" href="/wp-content/themes/okna/css/fancySelect.css">
        <link rel="stylesheet" href="/wp-content/themes/okna/css/jquery-ui.css">
        <link rel="stylesheet" href="/wp-content/themes/okna/css/lightslider.css">
        <link rel="stylesheet" href="/wp-content/themes/okna/css/livechat.css">
        <link rel="stylesheet" href="/wp-content/themes/okna/css/prettyPhoto.css">

    </head>

    <body class="<?php echo $this['config']->get('body_classes'); ?>">

        <?php if ($this['widgets']->count('toolbar-l + toolbar-r')) : ?>
        <div class="tm-toolbar uk-hidden-small">
            <div class="uk-container uk-container-center uk-clearfix">

                <?php if ($this['widgets']->count('toolbar-l')) : ?>
                <div class="uk-float-left"><?php echo $this['widgets']->render('toolbar-l'); ?></div>
                <?php endif; ?>

                <?php if ($this['widgets']->count('toolbar-r')) : ?>
                <div class="uk-float-right"><?php echo $this['widgets']->render('toolbar-r'); ?></div>
                <?php endif; ?>

            </div>
        </div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('logo + menu + search')) : ?>
        <nav class="tm-navbar uk-navbar">
            <div class="uk-container uk-container-center">

                <?php if ($this['widgets']->count('logo')) : ?>
                <div class="uk-text-center tm-logo uk-visible-large">
                    <a href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo'); ?></a>
                </div>
                <?php endif; ?>

                <div class="tm-nav uk-flex uk-flex-center uk-visible-large">

                    <?php if ($this['widgets']->count('menu')) : ?>
                           <?php echo $this['widgets']->render('menu'); ?>
                    <?php endif; ?>

                    <?php if ($this['widgets']->count('search')) : ?>
                    <div class="uk-visible-large">
                        <div class="uk-navbar-content tm-search"><?php echo $this['widgets']->render('search'); ?></div>
                    </div>
                    <?php endif; ?>

                </div>

                <?php if ($this['widgets']->count('offcanvas')) : ?>
                <a href="#offcanvas" class="uk-navbar-toggle uk-hidden-large" data-uk-offcanvas></a>
                <?php endif; ?>

                <?php if ($this['widgets']->count('logo-small')) : ?>
                <div class="tm-logo-small uk-navbar-content uk-navbar-center uk-hidden-large"><a href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo-small'); ?></a></div>
                <?php endif; ?>

            </div>
        </nav>
        <div class="tm-submenu uk-grid uk-flex-center"></div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('top-a')) : ?>
        <div class="<?php echo $block_classes['top-a']; ?>">
            <div class="uk-container uk-container-center">
                <section class="<?php echo $grid_classes['top-a']; echo $display_classes['top-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('top-a', array('layout'=>$this['config']->get('grid.top-a.layout'))); ?></section>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('top-b')) : ?>
        <div class="<?php echo $block_classes['top-b']; ?>">
            <div class="uk-container uk-container-center">
                <section class="<?php echo $grid_classes['top-b']; echo $display_classes['top-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('top-b', array('layout'=>$this['config']->get('grid.top-b.layout'))); ?></section>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('top-c')) : ?>
        <div class="<?php echo $block_classes['top-c']; ?>">
            <div class="uk-container uk-container-center">
                <section class="<?php echo $grid_classes['top-c']; echo $display_classes['top-c']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('top-c', array('layout'=>$this['config']->get('grid.top-c.layout'))); ?></section>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('main-top + main-bottom + sidebar-a + sidebar-b') || $this['config']->get('system_output', true)) : ?>
        <div class="<?php echo $block_classes['main']; ?>">

            <div class="uk-container uk-container-center">

                    <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>

                        <?php if ($this['widgets']->count('main-top + main-bottom') || $this['config']->get('system_output', true)) : ?>
                        <div class="<?php echo $columns['main']['class'] ?>">

                            <?php if ($this['widgets']->count('main-top')) : ?>
                            <section class="<?php echo $grid_classes['main-top']; echo $display_classes['main-top']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('main-top', array('layout'=>$this['config']->get('grid.main-top.layout'))); ?></section>
                            <?php endif; ?>

                            <?php if ($this['config']->get('system_output', true)) : ?>
                            <main class="tm-content">

                                <?php if ($this['widgets']->count('breadcrumbs')) : ?>
                                <?php echo $this['widgets']->render('breadcrumbs'); ?>
                                <?php endif; ?>

                                <?php echo $this['template']->render('content'); ?>

                            </main>
                            <?php endif; ?>

                            <?php if ($this['widgets']->count('main-bottom')) : ?>
                            <section class="<?php echo $grid_classes['main-bottom']; echo $display_classes['main-bottom']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('main-bottom', array('layout'=>$this['config']->get('grid.main-bottom.layout'))); ?></section>
                            <?php endif; ?>

                        </div>
                        <?php endif; ?>

                        <?php foreach($columns as $name => &$column) : ?>
                        <?php if ($name != 'main' && $this['widgets']->count($name)) : ?>
                        <aside class="<?php echo $column['class'] ?>"><?php echo $this['widgets']->render($name) ?></aside>
                        <?php endif ?>
                        <?php endforeach ?>

                    </div>

                </div>

            </div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('bottom-a')) : ?>
        <div class="<?php echo $block_classes['bottom-a']; ?>">
            <div class="uk-container uk-container-center">
                <section class="<?php echo $grid_classes['bottom-a']; echo $display_classes['bottom-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('bottom-a', array('layout'=>$this['config']->get('grid.bottom-a.layout'))); ?></section>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('bottom-b')) : ?>
        <div class="<?php echo $block_classes['bottom-b']; ?>">
            <div class="uk-container uk-container-center">
                <section class="<?php echo $grid_classes['bottom-b']; echo $display_classes['bottom-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('bottom-b', array('layout'=>$this['config']->get('grid.bottom-b.layout'))); ?></section>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('bottom-c')) : ?>
        <div class="<?php echo $block_classes['bottom-c']; ?>">
            <div class="uk-container uk-container-center">
                <section class="<?php echo $grid_classes['bottom-c']; echo $display_classes['bottom-c']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('bottom-c', array('layout'=>$this['config']->get('grid.bottom-c.layout'))); ?></section>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($this['widgets']->count('bottom-d')) : ?>
        <div class="<?php echo $block_classes['bottom-d']; ?>">
            <div class="uk-container uk-container-center">
                <section class="<?php echo $grid_classes['bottom-d']; echo $display_classes['bottom-d']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('bottom-d', array('layout'=>$this['config']->get('grid.bottom-d.layout'))); ?></section>
            </div>
        </div>
        <?php endif; ?>

        <div class="tm-block-footer">
            <div class="uk-container uk-container-center">

            <?php if ($this['widgets']->count('footer-top')) : ?>
                <section class="<?php echo $grid_classes['footer-top']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('footer-top', array('layout'=>$this['config']->get('grid.footer-top.layout'))); ?></section>
            <?php endif; ?>

            <?php if ($this['widgets']->count('footer + debug') || $this['config']->get('warp_branding', true) || $this['config']->get('totop_scroller', true)) : ?>
            <footer class="tm-footer tm-link-muted">
                <?php
                    echo $this['widgets']->render('footer');
                    $this->output('warp_branding');
                    echo $this['widgets']->render('debug');
                    ?>

            </footer>
            <?php endif; ?>

            </div>
        </div>

        <?php echo $this->render('footer'); ?>

        <?php if ($this['widgets']->count('offcanvas')) : ?>
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar"><?php echo $this['widgets']->render('offcanvas'); ?></div>
        </div>
        <?php endif; ?>


<!--Скрипт выбора окна и ручки-->
<script>
$(document).on('click', ".r_color .c_border",function(){ 
    $('.r_color .c_border').removeClass('selected');
    $(this).addClass('selected');
    var id=$(this).attr("id");
    if (id!="rc")
    {
        $(".okno .plastik").css("background","url('/wp-content/themes/okna/images/r_color/"+id+"_o.png') no-repeat scroll left center");
    }
    else
    {
        $(".okno .plastik").css("background",'none');
    }
    
})
$(document).on('click', ".r_thing .c_border",function(){ 
    $('.r_thing .c_border').removeClass('selected');
    $(this).addClass('selected');
    var id=$(this).attr("id");
    if (id!="rc")
    {
        $(".okno .ruchka").css("background","url('/wp-content/themes/okna/images/r_thing/"+id+"_o.png') no-repeat scroll left center");
    }
    else
    {
        $(".okno .ruchka").css("background",'none');
    }
    
})
</script>


<!--Скрипт графики-->
<script>
function grafic(){

var c1=2360;
var c2=2420;
var c3=2540;
var c4=2880;
var c5=3090;
var c6=3280;

var count = 0;
var intervalID1 = setInterval(
  function()
  {
      if (count<c1) 
      {count=count+5;
        $(".col1 .internal .numbers").html(count);
      }
      else
      {
          $(".col1 .internal .numbers").html(c1);
          clearInterval(intervalID1);

      }
  }, 1 // интервал в мс.
);
$(".col1 .internal").animate({bottom:"0px"},1000,function(){
        var count = 0;
        var intervalID2 = setInterval(
          function()
          {
              if (count<c2) 
              {count=count+5;
                $(".col2 .internal .numbers_y").html(count);
              }
              else
              {
                  $(".col2 .internal .numbers_y").html(c2);
                  clearInterval(intervalID2);

              }
          }, 1 // интервал в мс.
        );
    $(".col2 .internal").animate({bottom:"0px"},1000,function(){
        $('.s_grafic').fadeIn(300);
        var count = 0;
        var intervalID3 = setInterval(
          function()
          {
              if (count<c3) 
              {count=count+5;
                $(".col3 .internal .numbers").html(count);
              }
              else
              {
                  $(".col3 .internal .numbers").html(c3);
                  clearInterval(intervalID3);

              }
          }, 1 // интервал в мс.
        );
        $(".col3 .internal").animate({bottom:"0px"},1000,function(){
            var count = 0;
            var intervalID4 = setInterval(
              function()
              {
                  if (count<c4) 
                  {count=count+5;
                    $(".col4 .internal .numbers").html(count);
                  }
                  else
                  {
                      $(".col4 .internal .numbers").html(c4);
                      clearInterval(intervalID4);

                  }
              }, 1 // интервал в мс.
            );
            $(".col4 .internal").animate({bottom:"0px"},1000,function(){
                var count = 0;
                var intervalID5 = setInterval(
                  function()
                  {
                      if (count<c5) 
                      {count=count+5;
                        $(".col5 .internal .numbers").html(count);
                      }
                      else
                      {
                          $(".col5 .internal .numbers").html(c5);
                          clearInterval(intervalID5);

                      }
                  }, 1 // интервал в мс.
                );
                $(".col5 .internal").animate({bottom:"0px"},1000,function(){
                    var count = 0;
                    var intervalID6 = setInterval(
                      function()
                      {
                          if (count<c6) 
                          {count=count+5;
                            $(".col6 .internal .numbers").html(count);
                          }
                          else
                          {
                              $(".col6 .internal .numbers").html(c6);
                              clearInterval(intervalID6);

                          }
                      }, 1 // интервал в мс.
                    );
                    $(".col6 .internal").animate({bottom:"0px"},1000);
                })
            })
        })
    })
    
});
}

var ii=1;
$(window).scroll( function(){

    var blocks = $('.grafic');

    var  windowSize = $(window).height();
    var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = (viewportTop + windowSize);
    var offset=100;
    
     var elemTop =  Math.round(blocks.offset().top ) - offset ;
     var elemBottom = elemTop + (blocks.height());
    
    if ((elemTop < viewportBottom) && (elemBottom > viewportTop)){
        
        if (ii==1)
        {
            grafic();
            
        }
        ii=0;
    
    };
    

});
</script>   



<script>


$(function(){
    
    var note = $('#note'),
        ts = new Date(2015,11,26),
        newYear = true;
    
    if((new Date()) > ts){
        // The new year is here! Count towards something else.
        // Notice the *1000 at the end - time must be in milliseconds
        ts = (new Date()).getTime() + 10*24*60*60*1000;
        newYear = false;
    }
        
    $('#countdown1').countdown({
        timestamp   : ts,
        callback    : function(days, hours, minutes, seconds){
            
            var message = "";
            
        //  message += days + " day" + ( days==1 ? '':'s' ) + ", ";
            message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
            message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
            message += seconds + " second" + ( seconds==1 ? '':'s' ) + " <br />";
            
            if(newYear){
                message += "left until the new year!";
            }
            else {
                message += "left to 10 days from now!";
            }
            
            note.html(message);
        }
    });
    
});
</script>   



        <script type="text/javascript">$(document).ready(function() {
    $('#responsive').lightSlider({
        adaptiveHeight:true,
        item:1,
        slideMargin:0,
        loop:true
    });  
  });</script>
<script type="text/javascript">
 $(document).ready(function(){
                $('#otz_carousel').boutique({
                container_width:800,    
                front_img_width:164,
                hovergrowth:0,
                autoplay: true,
                autoplay_interval:5000,
                stop_autoplay_on_click: true,
                behind_topmargin:80,
                behind_opacity:1,
                behind_size:0.7,
                back_opacity:1,
                back_size:0.7,
                back_topmargin:120,
                });
            $('#otz_carousel .frame3 img').attr('src','/wp-content/themes/okna/images/otz/'+($('#otz_carousel .frame3 img').attr('id')+'.png'));       
            $('#otz_carousel .frame3 .otz_prof').removeClass('hide');   
            $('#otz_carousel .frame3 .otz_name').css('color','#000');
            $('.otz .otz1').removeClass('hide');      
            });
function pre_move_callback(anchor, instance, framenumber){
            //  alert('Callback example: Frame '+framenumber+', with the link "'+anchor+'", moved forward (in Boutique with an ID of "'+instance+'").');
                
                var len=$("#otz_carousel > li").length/2;
                
                for  (var i=1; i<=len; i++){
                    $('#otz_carousel .frame'+i+' img').attr('src','/wp-content/themes/okna/images/otz/'+($('#otz_carousel .frame'+i+' img').attr('id')+'_b.png'));
                    $('#otz_carousel .frame'+i+' .otz_prof').addClass('hide');
                    $('#otz_carousel .frame'+i+' .otz_name').css('color','#999');
                    $('.otz .otz'+i+'').addClass('hide');   
                }

            }           
function move_callback(anchor, instance, framenumber){
                $('#otz_carousel .frame3 img').attr('src','/wp-content/themes/okna/images/otz/'+($('#otz_carousel .frame3 img').attr('id')+'.png'));
                $('#otz_carousel .frame3 .otz_prof').removeClass('hide');
                $('.otz .'+$('#otz_carousel .frame3 img').attr('id')+'').removeClass('hide');
                $('#otz_carousel .frame3 .otz_name').css('color','#000');
            }                       
</script>       


<!--Балкон Остекленение: холодное, телое-->
<script>
  $(function() {
    $( ".bl_sw" ).slider({
        min:0, //hot
        max:1, //cold
        animate: "slow",
        change: function( event, ui ) {
            //alert ($(this).slider( "option", "value" ));
            if ($(this).slider( "option", "value" )=='0'){
                $(".features_cold").addClass('hide');
                $(".features_hot").removeClass('hide');
                
                $(".bl_cold").removeClass('active_');
                $(".bl_cold").addClass('inactive_');
                $(".bl_hot").removeClass('inactive_');
                $(".bl_hot").addClass('active_');
                
                $(".bal_bg").removeClass('cold_bg');
                
                
            }else{
                $(".features_cold").removeClass('hide');
                $(".features_hot").addClass('hide');

                $(".bl_hot").removeClass('active_');
                $(".bl_hot").addClass('inactive_');
                $(".bl_cold").removeClass('inactive_');
                $(".bl_cold").addClass('active_');
                                
                $(".bal_bg").addClass('cold_bg');               
            }
            
            
        }
    });
    
    $(".bl_cold").click(function(){
        $( ".bl_sw" ).slider( "value", 1 );
    })
    $(".bl_hot").click(function(){
        $( ".bl_sw" ).slider( "value", 0 );
    })  
    
  });
  </script>
  
<script>
$('.combo .combo_option .select').click(function(){ 
    $('.combo .combo_option').removeClass('active');
    $(this).parent().addClass('active');
    var id=$(this).attr('id');
    //alert(id);
    var n='gofra_';
    if (id=='select1'){
        n='gofra_';
    }else{
        n='sid_';
    }
    var e=$('.variants_gal .active').attr('id');
    $('.bal_left .bal_shell').css('background','url("/wp-content/themes/okna/images/bal_config/'+n+e+'.png") no-repeat left top');
})
$('.variants_gal div').click(function(){
    $('.variants_gal div').removeClass('active');
    $(this).addClass('active');
    var id=$('.combo .combo_option.active .select').attr('id');
    //`alert (id);
    var n='gofra_';
    if (id=='select1'){
        n='gofra_';
    }else{
        n='sid_';
    }
    var e=$('.variants_gal .active').attr('id');
    $('.bal_left .bal_shell').css('background','url("/wp-content/themes/okna/images/bal_config/'+n+e+'.png") no-repeat left top');
})
$(".hot_").click(function(){
    $(".sw_block .bl_hot").click();
})
$(".cold_").click(function(){
    $(".sw_block .bl_cold").click();
})
</script>



<script>
var roof='roof2';
var okno='okno2';
var shell='shell1';
var struct='struct1';
var otdelka='otdelka1';
var skaf='skaf1';
var floor='floor10';

var price = new Object();
//крыша
price['roof1']=0;
price['roof2']=2500;
price['roof3']=2500;
//остекление 
price['okno1']=2420;
price['okno2']=1850;
//обшивка
price['shell1']=0;
price['shell2']=600;
price['shell3']=800;
//кладка
price['struct1']=0;
price['struct2']=600;
//пвх вагонка
price['otdelka1']=600;
price['otdelka2']=600;
price['otdelka3']=600;
price['otdelka4']=600;
price['otdelka5']=600;
//пвх вагонка широкая
price['otdelka6']=800;
price['otdelka7']=800;
price['otdelka8']=800;
price['otdelka9']=800;
price['otdelka10']=800;
// вагонка
price['otdelka11']=400;
//Шкаф
price['skaf1']=2400;
price['skaf2']=2400;
price['skaf3']=2400;
price['skaf4']=1700;
//пол линолеум
price['floor1']=400;
price['floor2']=400;
price['floor3']=400;
price['floor4']=400;
price['floor5']=400;
//пол ламинат
price['floor6']=650;
price['floor7']=650;
price['floor8']=650;
price['floor9']=650;
//пол доска
price['floor10']=250;

var k=3; //коэффициент

function l_calc(){
    var itog=(price[roof]+price[okno]+price[shell]+price[struct]+price[otdelka]+price[skaf]+price[floor])*k;
    $('.l_price .price').html(itog);
    $('.l_price .rassr span').html(Math.floor(itog/12));
    
}

l_calc();   
</script>
<script>

$('.l_roof .vars div').click(function(){
    
    $('.l_roof div').removeClass('active');
    $(this).addClass('active');
    var id=$(this).attr('id');
    roof=id;
    if (okno=='okno2'){
        $('.l_center .maket_roof').css('background','url("/wp-content/themes/okna/images/l_config/roof/'+id+'_m.png") no-repeat');
    }else{
        $('.l_center .maket_roof').css('background','url("/wp-content/themes/okna/images/l_config/roof/'+id+'_mh.png") no-repeat');
    }
l_calc();   
    
})

$('.l_okno .vars div').click(function(){
    
    $('.l_okno div').removeClass('active');
    $(this).addClass('active');
    var id=$(this).attr('id');
    okno=id;
        $('.l_center .maket_okno').css('background','url("/wp-content/themes/okna/images/l_config/okno/'+id+'_m.png") no-repeat');
        if (okno=='okno2'){
        $('.l_center .maket_roof').css('background','url("/wp-content/themes/okna/images/l_config/roof/'+roof+'_m.png") no-repeat');
    }else{
        $('.l_center .maket_roof').css('background','url("/wp-content/themes/okna/images/l_config/roof/'+roof+'_mh.png") no-repeat');
    }
l_calc();   
})

$('.l_shell .vars div').click(function(){
    
    $('.l_shell div').removeClass('active');
    $(this).addClass('active');
    var id=$(this).attr('id');
    shell=id;
        $('.l_center .maket_shell').css('background','url("/wp-content/themes/okna/images/l_config/shell/'+id+'_m.png") no-repeat');
l_calc();
})

$('.l_struct .vars div').click(function(){
    
    $('.l_struct div').removeClass('active');
    $(this).addClass('active');
    var id=$(this).attr('id');
    struct=id;
        $('.l_center .maket_struct').css('background','url("/wp-content/themes/okna/images/l_config/struct/'+id+'_m.png") no-repeat');

l_calc();   
})

$('.l_otdelka .swich span').click(function(){
    
    $('.l_otdelka .swich span').removeClass('active');
    $(this).addClass('active');
    var id=$(this).attr('id');
    
    $('.l_otdelka .vars div').removeClass('hide');
    $('.l_otdelka .vars div').addClass('hide');
    $('.l_otdelka .vars div.'+id).removeClass('hide');
    $('.l_otdelka .vars div.'+id+' div').removeClass('hide');
})

$('.l_otdelka .vars div').click(function(){
    
    $('.l_otdelka div').removeClass('active');
    $(this).addClass('active');
    var id=$(this).attr('id');
    otdelka=id;
        $('.l_center .maket_otdelka').css('background','url("/wp-content/themes/okna/images/l_config/otdelka/'+id+'_m.png") no-repeat');

l_calc();   
})

$('.l_skaf .vars div').click(function(){
    
    $('.l_skaf div').removeClass('active');
    $(this).addClass('active');
    var id=$(this).attr('id');
    otdelka=id;
        $('.l_center .maket_skaf').css('background','url("/wp-content/themes/okna/images/l_config/skaf/'+id+'_m.png") no-repeat');

l_calc();   
})

$('.l_floor .swich span').click(function(){
    
    $('.l_floor .swich span').removeClass('active');
    $(this).addClass('active');
    var id=$(this).attr('id');
    
    $('.l_floor .vars div').removeClass('hide');
    $('.l_floor .vars div').addClass('hide');
    $('.l_floor .vars div.'+id).removeClass('hide');
    $('.l_floor .vars div.'+id+' div').removeClass('hide');
})

$('.l_floor .vars div').click(function(){
    
    $('.l_floor div').removeClass('active');
    $(this).addClass('active');
    var id=$(this).attr('id');
    otdelka=id;
        $('.l_center .maket_floor').css('background','url("/wp-content/themes/okna/images/l_config/floor/'+id+'_m.png") no-repeat');

l_calc();   
})

</script>


<!--Калькулятор 1-->

<script>
var  current_id="o2_1";
    $(".calc_menu li").click(function(){
        $(".calc_menu li").removeClass('active');
        var id=$(this).attr('id');
        $(".calc_sub").removeClass('hide');
        $(".calc_sub").addClass('hide');
        $(".calc_sub."+id).removeClass('hide');
        
    });
    $(".calc .calc_sub div").click(function(){
        var id=$(this).attr('class');
        //alert (id);
        current_id=$(this).attr('id');
        $(".calc .calc_sub").removeClass('hide');
        $(".calc .calc_sub").addClass('hide');
        $('#'+id).html('<img src="/wp-content/themes/okna/images/calc_okna/'+current_id+'.png">');
    //  $('.calc_main').css('background','url("/wp-content/themes/okna/images/calc_okna/'+current_id+'.jpg") no-repeat scroll center top rgba(0, 0, 0, 0)');
        
        //$('.calc_main').html('<img src="/wp-content/themes/okna/images/calc_okna/'+current_id+'.jpg">');
        $('.calc_main').html('<img style="background:none; padding-left:none;" src="/wp-content/themes/okna/images/height.png"><img src="/wp-content/themes/okna/images/calc_okna/'+current_id+'.jpg">');
        
        $('#'+id).addClass('active');
        oknaCalc();
    });
    

    $(".c_width").keyup(function(){
        if ($(".c_width").val()>300){$(".c_width").val(300)}
    //  if ($(".c_width").val()<80){$(".c_width").val(80)}
        $(".c_width").val(Math.floor($(".c_width").val()));
          


         
        if ($(".c_width").val()>=80 ){oknaCalc();}
        else {
            $(".itogi .itogo").html('0<img style="padding-left:20px;" src="/wp-content/themes/okna/images/itogi_rub.png">');
            }
        
    });
    
        $('.calc_width .counter_plus').click(function(){
        var m=$('.c_width').val();
        m++;
        if (m>300){m=300;}
        if (m<80){m=80;}
        $('.c_width').val(m);
        
        oknaCalc();
    });
    
        $('.calc_width .counter_minus').click(function(){
        var m=$('.c_width').val();
        m--;
        if (m<80){m=80;}
        if (m>300){m=300;}
        $('.c_width').val(m);
        oknaCalc();
        
    });
    

    
    $(".c_height").keyup(function(){
        if ($(".c_height").val()>220){$(".c_height").val(220)}
    //  if ($(".c_height").val()<80){$(".c_height").val(80)}
        $(".c_height").val(Math.floor($(".c_height").val()));

        if ($(".c_height").val()>=80 ){oknaCalc();}
        else {
            $(".itogi .itogo").html('0<img style="padding-left:20px;" src="/wp-content/themes/okna/images/itogi_rub.png">');

            }
    })  
    
    
        $('.calc_height .counter_plus').click(function(){
        var m=$('.c_height').val();
        m++;
        if (m>300){m=300;}
        if (m<80){m=80;}
        $('.c_height').val(m);
        
        oknaCalc();
    });
    
        $('.calc_height .counter_minus').click(function(){
        var m=$('.c_height').val();
        m--;
        if (m<80){m=80;}
        if (m>300){m=300;}
        $('.c_height').val(m);
        oknaCalc();
        
    }); 
    
    
    
    
    
    function oknaCalc(){
        
        var gluh=2798*0.8;
        var povorot=4845*0.8;
        var full=5128*0.8;
        
    //  current_id
        
        var c_width=$('.c_width').val();
        var c_height=$('.c_height').val();
        
        if (current_id=="o1_1"){var itog=c_width*c_height/10000*gluh;}
        if (current_id=="o1_2"){var itog=c_width*c_height/10000*povorot;}
        if (current_id=="o1_3"){var itog=c_width*c_height/10000*full;}
        
        if (current_id=="o2_1"){var itog=(c_width/2)*c_height/10000*gluh+(c_width/2)*c_height/10000*povorot;}
        if (current_id=="o2_2"){var itog=(c_width/2)*c_height/10000*gluh+(c_width/2)*c_height/10000*full;}
        if (current_id=="o2_3"){var itog=(c_width/2)*c_height/10000*povorot+(c_width/2)*c_height/10000*povorot;}
        if (current_id=="o2_4"){var itog=(c_width/2)*c_height/10000*povorot+(c_width/2)*c_height/10000*full;}
            
        if (current_id=="o3_1"){var itog=(c_width/3)*c_height/10000*gluh+(c_width/3)*c_height/10000*povorot+(c_width/3)*c_height/10000*gluh;}
        if (current_id=="o3_2"){var itog=(c_width/3)*c_height/10000*povorot+(c_width/3)*c_height/10000*gluh+(c_width/3)*c_height/10000*povorot;}
        if (current_id=="o3_3"){var itog=(c_width/3)*c_height/10000*povorot+(c_width/3)*c_height/10000*gluh+(c_width/3)*c_height/10000*full;}
        
        
        if (current_id=="o4_1"){var itog=c_width*c_height/10000*gluh;}
        if (current_id=="o4_2"){var itog=(c_width/2)*c_height/10000*gluh+(c_width/2)*c_height/10000*gluh;}
        
        var itogo=Math.floor(itog);
        
        
        $(".itogi .itogo").html(Math.floor(itogo)+'<img style="padding-left:20px;" src="/wp-content/themes/okna/images/itogi_rub.png">');
//      $(".itogi .i_montaz span").html(Math.floor(itogo*0.2)+' руб.');
//      $(".itogi .i_otd span").html(Math.floor(itogo*0.3)+' руб.');
//      $(".itogi .i_rassr span").html(Math.floor(itogo/12));
        
    }
    
$(function(){
    oknaCalc();
})  
</script> 

<!--Калькулятор 2-->

<script>
  $('.ar_right').click(function(){
    var c=parseInt($('.ul_menu_frame').css("margin-left")); 
  if (c==2)
  {
    $(".ul_menu_frame").animate({marginLeft:'-356px'}, 1500);             
  }
  if (c==-356)
  {
    $(".ul_menu_frame").animate({marginLeft:'-716px'}, 1500);             
  }
   
    
    
  }) 
  
  $('.ar_left').click(function(){
    var c=parseInt($('.ul_menu_frame').css("margin-left")); 
  //  alert (c); 
  if (c==(-716))
  {
    $(".ul_menu_frame").animate({marginLeft:'-356px'}, 1500);             
  }
  if (c==(-356))
  {
    $(".ul_menu_frame").animate({marginLeft:'2px'}, 1500);             
  }
  //  $('.ul_menu_frame').css("margin-left",c+387+'px');
  })
  
$(document).on('click', ".calc_menu_ li",function(){ 
//  $(".calc_menu_ li").click(function(){
    $(".calc_menu_ li").removeClass('active');
    $(this).addClass('active');
    var id=$(this).attr('id');
    //$(".calc_balkon .calc_main").css('background','url("/wp-content/themes/okna/images/calc_balkon2/'+id+'p.jpg") no-repeat left top');
    $('.calc_main').html('<img style="background:none; padding-left:none;" src="/wp-content/themes/okna/images/height_b.png"><img src="/wp-content/themes/okna/images/calc_balkon2/'+id+'p.jpg">');
  });

    $(".c_width").keyup(function(){
    if ($(".c_width").val()>700){$(".c_width").val(700)}
  //  if ($(".c_width").val()<80){$(".c_width").val(80)}
    $(".c_width").val(Math.floor($(".c_width").val()));
      


     
    if ($(".c_width").val()>=80 ){balkonCalc();}
    else {
      $(".itogi .itogo").html('0<img style="padding-left:20px;" src="/wp-content/themes/okna/images/itogi_rub.png">');
      }
    
  });
  
    $('.calc_width .counter_plus').click(function(){
    var m=$('.c_width').val();
    m++;
    if (m>700){m=700;}
    if (m<80){m=80;}
    $('.c_width').val(m);
    
    balkonCalc();
  });    
  
    $('.calc_width .counter_minus').click(function(){
    var m=$('.c_width').val();
    m--;
    if (m<80){m=80;}
    if (m>700){m=700;}
    $('.c_width').val(m);
    balkonCalc();
    
  });
  
  
  
  
  $(".c_height").keyup(function(){
    if ($(".c_height").val()>200){$(".c_height").val(200)}
  //  if (parseInt($(".c_height").val())<80 && (parseInt($(".c_height").val())/10)<8){$(".c_height").val(80)}
    $(".c_height").val(Math.floor($(".c_height").val()));

    if ($(".c_height").val()>=80 ){balkonCalc();}
    else {
      $(".itogi .itogo").html('0<img style="padding-left:20px;" src="/wp-content/themes/okna/images/itogi_rub.png">');

      }
  })  
  
  
    $('.calc_height .counter_plus').click(function(){
    var m=$('.c_height').val();
    m++;
    if (m>200){m=200;}
    if (m<80){m=80;}
    $('.c_height').val(m);
    
    balkonCalc();
  });
  
    $('.calc_height .counter_minus').click(function(){
    var m=$('.c_height').val();
    m--;
    if (m<80){m=80;}
    if (m>200){m=200;}
    $('.c_height').val(m);
    balkonCalc();
    
  }); 

  function balkonCalc(){
    var m2=3305*0.8;
    var c_width=$('.c_width').val();
    var c_height=$('.c_height').val();
    
    var itogo=c_width*c_height*m2/10000;
    
    $(".itogi .itogo").html(Math.floor(itogo)+'<img style="padding-left:20px;" src="/wp-content/themes/okna/images/itogi_rub.png">');

    
  }
  
$(function(){
  balkonCalc();
})  
</script> 


<script>
/************ p_banner ****************/

var b_last='banya';  // который был до клика
var b_id='besedka';// на который кликаем

$(document).on('click', ".p_banner .menu_item",function(){ 
  if ($(this).attr("id")!=b_id)
  {
    b_last=$(".p_banner .menu_item.active_block").attr("id");
    b_id=$(this).attr("id");
    banner_change(b_last,b_id);
  }
  
});

function banner_change(b_last,b_id)
{

  $(".p_banner #"+b_last).removeClass('active_block');
  $(".p_banner #"+b_id).addClass('active_block');

  $(".p_banner-items ."+b_id).animate({opacity: "show"}, 1000);
  $(".p_banner-items ."+b_last).animate({opacity: "hide"}, 1000);
}

</script>




    </body>
</html>

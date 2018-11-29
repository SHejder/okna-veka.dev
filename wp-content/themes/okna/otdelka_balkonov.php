<?php
/**
 * Template Name: Отделка лоджий
 *
 * Allow users to update their profiles from Frontend.
 *
 */
/* Get user info. */
?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <article class="uk-article">
        <?php the_content(''); ?>
    </article>

    <?php endwhile; ?>
<?php endif; ?>

            


    <div id="pozdr" class="pozdr" >
        <div id="btn-close" class="f-close"> </div>
        <div class="header black">АКЦИЯ -45%</div> 
        <div class="p1_msg black">
            <span style="font-family:officinaserifcregular;">До 10 сентября - В честь дня рождения компании!</span>
            <span style="font-family:officinaserifcbold;">Заполните простую форму и зафиксируйте стоимость изделий!</span>

        </div>
        <input class="pozdr_name" type="text" value='' placeholder="Ваше имя" >
        <input class="pozdr_tel" type="text" value='' placeholder="Телефон"  >
        <div  id="callback-pozdr" class="btn b_blue2 white">ОТПРАВИТЬ</div>
         <div class="sec">Окно закроется через <span id="sec">60</span> секунд</div>
    </div>      
    
    <div id="hide-layout" class="hide-layout" ></div>
        
      



        
    
<div class="section gal_okna">
            <div class="content">       
                <h1 class="white">Дополнительные возможности</h1>
                
                  <div class="carousel carousel_round"> 
                    <div class="carousel-button-left"><a href="#"></a></div> 
                    <div class="carousel-button-right"><a href="#"></a></div> 
                    <div class="carousel-wrapper"> 
                       <div class="carousel-items"> 
                          <div class="carousel-block">
                            <div class="c_border">
                               <img src="img/gal_balkon/d1.png">    
                               <p  class="white">Вынос остекления<br>
                                <span class="yellow bold">от 440 руб.</span></p>
                            </div>   
                          </div>
                          <div class="carousel-block">
                            <div class="c_border">
                               <img src="img/gal_balkon/d3.png">    
                               <p  class="white">Теплый пол<br>
                                <span class="yellow bold">от 420 руб.</span></p>
                            </div>   
                          </div>
                          <div class="carousel-block">
                            <div class="c_border">
                               <img src="img/gal_balkon/d5.png">    
                               <p  class="white">Утепление балкона<br>
                                <span class="yellow bold">от 385 руб.</span></p>
                            </div>   
                          </div>
                          <div class="carousel-block">
                            <div class="c_border">
                               <img src="img/gal_balkon/d4.png">    
                               <p  class="white">Объединение<br>с комнатой
                                </p>
                            </div>   
                          </div>
                          <div class="carousel-block">
                            <div class="c_border">
                               <img src="img/gal_balkon/d2.png">    
                               <p  class="white">Электрика
                               <br>
                                <span class="yellow bold">от 400 руб.</span>
                               </p>
                            </div>   
                          </div>

                  
                                              
                       </div>
                    </div>
               </div>
                
            </div>
        </div>  
        <div class="section config_area">
            <div class="content">

                <div class="config-after">
                    <div class="after1">
                        <img src="img/metr.jpg">
                    </div>
                    <div class="after2">
                    <p class="ph">Бесплатный замер</p>
                    <p>
                        Технолог нашей компании произведет точный замер и расчет стоимости заказа в удобное для Вас время. Возможно заключение договора на дому.
                    </p>
                    </div>
                    <div class="after3">
                        <img src="img/k.jpg">
                    </div>
                    <div class="after4">
                        <p class="ph">Рассрочка 0%</p>
                        <p>
                        Разместите заказ уже сейчас! Воспользуйтесь беспроцентной рассрочкой сроком до 3 месяцев  <font color="red"><strong>без первоначального взноса и переплаты</strong></font>.
                        </p>
                    </div>                  
                </div>
            </div>
        </div>  
        
<script>

/*
$(window).scroll( function(){

    var blocks = $('.config-after').children();

    var  windowSize = $(window).height();
    var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = (viewportTop + windowSize);
    var offset=100;
    
     var elemTop =  Math.round(blocks.offset().top ) - offset ;
     var elemBottom = elemTop + (blocks.height());
 
  //  blocks.addClass('hidden');
    
    if ((elemTop < viewportBottom) && (elemBottom > viewportTop)){
        var i = 0;
        animateCircle3(blocks);
    
    };
    

     function animateCircle3() {
           
            $(blocks[i]).addClass('visible animated lightSpeedIn');
            $(blocks[i]).removeClass('hidden');
      
        i++;
        if (i <= blocks.length) {
            startAnimation();
        }
    }
    
    function startAnimation() {
        setTimeout(function () {
            animateCircle3();}, 250);
    }

});
*/
</script>           
        <div class="section s6">
            <div class="content">   
                <h1 class="">Рассчитаем ваш заказ за 5 минут!</h1>  
                
                <div class="zakaz_vp"  id="callback3">
                    <input class="v_name" type="text" value="" placeholder="Ваше имя" >
                    <input class="v_tel" type="text" value="" placeholder="Телефон" >
                    <a  id="callback-send2" class="btn b_blue">Отправить заявку</a>

                </div>
            </div>          
        </div>
<script>
    $(".v_tel").inputmask("+7 (999) 999-99-99");
$('#callback-send2').click(function()
                {
                    var name=$('.v_name').val();
                    var tel=$('.v_tel').val();
                //Comagic.push(['addOfflineRequest', {name: name,  phone: tel, message: 'callback2' }]);
                    $.ajax({
                           type: "POST",
                           url: "/forms.php",
                           data: "name="+name+"&tel="+tel+'&f=callback2',
                           success: function(data){ 
                            if (data=='ok')
                            {
                            
                            //  alert ('Заявка успешно отправлена');
                                $('.s_name').val('');
                                $('.s_tel').val('');
                                $('#hide-layout').fadeIn(300);                              
                                $('#spasibo').fadeIn(300);                              
                                SendComagic(name,tel,'callback2','');
                            }
                            else
                            {
                                    alert ('Ошибка при отправлении. Возможно Вы неправильно заполнили поля.');
                            };
                                
                            } 
                     });
                
                
                }); 
</script>   
        <div class="section s25">
            <div class="content">
                <h1 class="black">
                    <span>Держим цены 2014 года</span>
                </h1>
                <div class="grafic">
                    <div class="col col1">
                        <div class="internal">
                            <div class="numbers">
                            2340
                            </div>
                            <div class="cell c1">
                            </div>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="internal">
                            <div class="numbers_y">
                            2420
                            </div>
                            <div class="cell c2">
                            </div>
                        </div>
                    </div>
                    <div class="col col3">
                        <div class="internal">
                            <div class="numbers">
                            2500
                            </div>
                            <div class="cell c3">
                            </div>
                        </div>
                    </div>
                    <div class="col col4">
                        <div class="internal">
                            <div class="numbers">
                            2840
                            </div>
                            <div class="cell c4">
                            </div>
                        </div>
                    </div>
                    <div class="col col5">
                        <div class="internal">
                            <div class="numbers">
                            3070
                            </div>
                            <div class="cell c5">
                            </div>
                        </div>
                    </div>
                    <div class="col col6">
                        <div class="internal">
                            <div class="numbers">
                            3220
                            </div>
                            <div class="cell c6">
                            </div>
                        </div>
                    </div>  
                    <div class="s_grafic">
                    Цены растут, а в компании «Окна Века» стоимость остается неизменной!
                    </div>
                </div>
                <div class="y_tel">
                        <p>Хотите сравнить?<br>
                        <span>Звоните: <a style="text-decoration:none;color:#333;" class="comagic_phone" href="tel:+74996539399">8 (499) 653-93-99</a></span> </p>
                    </div>
            </div>
        </div>


        <div class="section s30">
            <div class="content">   
                <div class="txt">
                    <h1>Окна без предоплаты</h1>
                    <ul>
                        <li>При заключении договора - ничего не оплачиваете</li>
                        <li>Первый этап оплаты - по факту доставки</li>
                        <li>Второй этап - после установки, когда все работы сданы</li>
                    </ul>
                
                </div>  

                
                    

                
            </div>          
        </div>


    
        <div class="section s5" >
            <div class="content">       
                <h1 class="black"><span>Отзывы наших заказчиков</span></h1>
                <div class="otzu">
                    <ul id="otz_carousel">
                        <li>
                            <img id="otz1" src="img/otz/otz1_b.png" />
                            <div class="otz_name">Юрий</div>
                            <div class="otz_prof hide">предприниматель</div>
                        </li>
                        <li>
                            <img id="otz2" src="img/otz/otz2_b.png"  />
                            <div class="otz_name">Евгения</div>
                            <div class="otz_prof hide">бухгалтер</div>              
                        </li>
                        <li>
                            <img id="otz3" src="img/otz/otz3_b.png" />
                            <div class="otz_name">Ольга</div>
                            <div class="otz_prof hide">журналист</div>              
                        </li>
                        <li>
                            <img id="otz4" src="img/otz/otz4_b.png" />
                            <div class="otz_name">Анна</div>
                            <div class="otz_prof hide">домохозяйка</div>                
                        </li>
                        <li>
                            <img id="otz5" src="img/otz/otz5_b.png"  />
                            <div class="otz_name">Леонид</div>
                            <div class="otz_prof hide">программист</div>                
                        </li>
                    </ul>
                </div>
                <div class="otz">
                    <div class="otz1 hide">
                        Специалисты «Окна Века» остеклили в нашей квартире балкон и лоджию. Когда мы с женой пришли в офис, то точно не знали, что именно хотим. Там нам объяснили, чем отличается теплое остекление от холодного, какая разница в стоимости. Мы решили, что теплое остекление нам подойдет больше, так как в лоджии давно запланировали сделать небольшое поме..
                    </div>
                    <div class="otz2 hide">
                        Решили с мужем сделать в доме зимний сад. Обзвонили несколько компаний, переговорили с их представителями, узнали условия сотрудничества. Выбор остановили на «Окна Века», они предлагали сделать зимний сад по наиболее приемлемой цене. После подписания договора, специалисты разработали проект, с учетом наших пожеланий и сделанных замеров..
                    </div>
                    <div class="otz3 hide">
                        Купили небольшой дачный домик. Сразу взялись за ремонт и замену окон. Посмотрели предложения и отзывы в интернете, сравнили несколько компаний и обратились в «Окна Века». Нам предложили не очень дорогие, но надежные окна с достойными характеристиками. Мы не раздумывали, сразу подписали договор. Через неделю окна в доме бы..
                    </div>
                    <div class="otz4 hide">
                        У нас квартира в хрущевке, балкон там был остеклен лет двадцать назад, а может и больше. Вид у него плачевный, иногда казалось, что рамы от ветра скоро рухнут вниз. Наконец-то я не выдержала и решила найти фирму, которая не очень дорого остеклит балкон. По совету знакомого обратилась в «Окна Века». Они мне действительно очень помогли! Подобрали ма..
                    </div>
                    <div class="otz5 hide">
                        Решили установить в квартире новые окна из профиля Rehau, предварительно прочитав о них много информации на разных форумах и сайтах. За помощью обратились в «Окна Века». Нам эту компанию посоветовали знакомые. Здесь нам очень помогли, подсказали, что и как лучше сделать, установили окна с энергосберегающими пакетами, еще и москитную сетку презентова.. 
                    </div>
                </div>
        
                <div class="otz_link"><a href="plastikovye_okna_otzyvy.html">ВСЕ ОТЗЫВЫ</a></div>
            </div>
        </div>
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
            $('#otz_carousel .frame3 img').attr('src','img/otz/'+($('#otz_carousel .frame3 img').attr('id')+'.png'));       
            $('#otz_carousel .frame3 .otz_prof').removeClass('hide');   
            $('#otz_carousel .frame3 .otz_name').css('color','#000');
            $('.otz .otz1').removeClass('hide');      
            });
function pre_move_callback(anchor, instance, framenumber){
            //  alert('Callback example: Frame '+framenumber+', with the link "'+anchor+'", moved forward (in Boutique with an ID of "'+instance+'").');
                
                var len=$("#otz_carousel > li").length/2;
                
                for  (var i=1; i<=len; i++){
                    $('#otz_carousel .frame'+i+' img').attr('src','img/otz/'+($('#otz_carousel .frame'+i+' img').attr('id')+'_b.png'));
                    $('#otz_carousel .frame'+i+' .otz_prof').addClass('hide');
                    $('#otz_carousel .frame'+i+' .otz_name').css('color','#999');
                    $('.otz .otz'+i+'').addClass('hide');   
                }

            }           
function move_callback(anchor, instance, framenumber){
                $('#otz_carousel .frame3 img').attr('src','img/otz/'+($('#otz_carousel .frame3 img').attr('id')+'.png'));
                $('#otz_carousel .frame3 .otz_prof').removeClass('hide');
                $('.otz .'+$('#otz_carousel .frame3 img').attr('id')+'').removeClass('hide');
                $('#otz_carousel .frame3 .otz_name').css('color','#000');
            }                       
</script>       
        <div class="section s4" >
            <div class="content">   
                
               <div class="carousel"> 
                  <div class="carousel-button-left"><a href="#"></a></div> 
                  <div class="carousel-button-right"><a href="#"></a></div> 
                    <div class="carousel-wrapper"> 
                       <div class="carousel-items"> 
                          <div class="carousel-block" rel="prettyPhoto">
                            <a href="img/pic_otdelka/otd1.jpg" title="Отделка балкона под ключ"><img alt="Стоимость: <span>23700 руб.</span>" src="img/pic_otdelka/small/otd1.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd14.jpg" title="Объединение лоджии с комнатой"><img alt="Стоимость: <span>23400 руб.</span>" src="img/pic_otdelka/small/otd14.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd3.jpg" title="Обшивка балкона панелями ПВХ. Отделка потолка"><img alt="Стоимость: <span>8500 руб.</span>" src="img/pic_otdelka/small/otd3.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd4.jpg" title="Остекление балкона Provedal. Наружная обшивка"><img alt="Стоимость: <span>28800 руб.</span>" src="img/pic_otdelka/small/otd4.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd5.jpg" title="Установка пластиковых окон на лоджию, утепление"><img alt="Стоимость: <span>31900 руб.</span>" src="img/pic_otdelka/small/otd5.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd6.jpg" title="Монтаж балконного блока"><img alt="Стоимость: <span>14300 руб.</span>" src="img/pic_otdelka/small/otd6.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd7.jpg" title="Отделка и утепление балкона"><img alt="Стоимость: <span>19200 руб.</span>" src="img/pic_otdelka/small/otd7.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                            <a href="img/pic_otdelka/otd2.jpg" title="Установка окон ПВХ на балкон. Внутренняя отделка"><img alt="Стоимость: <span>29900 руб.</span>" src="img/pic_otdelka/small/otd2.jpg"/></a>
                          </div>        
                          <!-- <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd9.jpg" title=""><img alt="" src="img/pic_otdelka/small/otd9.jpg"/></a>
                          </div> -->
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd10.jpg" title="Утепление и отделка балкона гипсокартоном под покраску"><img alt="Стоимость: <span>12200 руб.</span>" src="img/pic_otdelka/small/otd10.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd11.jpg" title="Изготовление шкафа для лоджии. Отделка ПВХ вагонкой"><img alt="Стоимость: <span>18300 руб.</span>" src="img/pic_otdelka/small/otd11.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd12.jpg" title="Отделка лоджии деревянной вагонкой"><img alt="Стоимость: <span>9600 руб.</span>" src="img/pic_otdelka/small/otd12.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd13.jpg" title="Совмещение балкона с гостиной"><img alt="Стоимость: <span>34800 руб.</span>" src="img/pic_otdelka/small/otd13.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd15.jpg" title="Расширение жилого пространства за счет лоджии"><img alt="Стоимость: <span>26200 руб.</span>" src="img/pic_otdelka/small/otd15.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_otdelka/otd8.jpg" title="Теплое остекление балкона. Внутренняя отделка"><img alt="Стоимость: <span>18700 руб.</span>" src="img/pic_otdelka/small/otd8.jpg"/></a>
                          </div>
                      </div>
                    </div>
               </div> 
            
            
            </div>
        </div>
        
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
      // $("a[rel^='prettyPhoto']").prettyPhoto();
        $("div[rel^='prettyPhoto'] a").click(function(){
            return false;
            
        })
      $("div[rel^='prettyPhoto'] a").prettyPhoto();
    });

    $(document).on('click','.carousel-button-left',function(){
        //$("a[rel^='prettyPhoto']").prettyPhoto();
        $("div[rel^='prettyPhoto'] a").prettyPhoto();
    }); 
    
    $(document).on('click','.carousel-button-right',function(){
        //$("a[rel^='prettyPhoto']").prettyPhoto();
        $("div[rel^='prettyPhoto'] a").prettyPhoto();
    });     
    
</script>   
        <div class="section s23">
            <div class="content">
                <div class="footer_menu">
                                            <div class="f_block fm1">
                            <a href="/">Пластиковые окна</a>
                        </div>
                                                                    <div class="f_block fm2">
                            <a href="/osteklenie_balkonov.html">Остекление балконов</a>
                        </div>
                                                                                    <div class="f_block fm4">
                            <a href="/osteklenie_kottedzha.html">Окна для коттеджа</a>
                        </div>  
                                                                    
                                        <div class="clr"></div>                 
                </div>
            </div>
        </div>  
        

            
        <div class="section s8">
            <div class="content">
                <div class="footer black center">
                    <div class="black d1">
                        Узнайте больше о скидках компании: <span class="comagic_phone">8 (499) 653-93-99</span>
                    </div>
                    <div class="black d2">
                        e-mail: zakaz@okna-veka.info





</div>


                    </div>
                    <div class="d3">
                        &copy; 1998—2017 Окна Века. Все права защищены.
                    <a href="http://clck.yandex.ru/redir/dtype=stred/pid=47/cid=2508/*https://market.yandex.ru/shop/380236/reviews"><img src="http://clck.yandex.ru/redir/dtype=stred/pid=47/cid=2505/*http://grade.market.yandex.ru/?id=380236&action=image&size=0" border="0" width="88" height="31"   /></a></div>
                </div>
            
                <div class="clr"></div>
            </div>
        </div>      





<script>

$(document).ready(function() {
    // $("body").css("overflow", "hidden");
    
var wblocks = $('.w_blocks').children();
    wblocks.addClass('hidden'); 

    var wblocks = $('.stroki').children();
    wblocks.addClass('hidden'); 
})

</script>


<script>
            $(function() {
        //  $('#popup1').hide();
        //  $('#hide-layout').hide();
            alignCenter($('#popup1'));
            alignCenter($('#spasibo'));
            alignCenter($('#pozdr'));
            $(window).resize(function() {
            alignCenter($('#popup1'));
            alignCenter($('#spasibo'));
            alignCenter($('#pozdr'));
            })
            

            
            //$('#btn-close, #hide-layout').click(function() {
            $('#hide-layout').click(function() {
                
            $('#hide-layout, #popup1').fadeOut(300);
            
            $('.pop_name').val('Ваше имя');
            $('.pop_tel').val('Телефон');
            })
            

            $('#callback-spasibo, #hide-layout').click(function() {
            $('#hide-layout, #spasibo').fadeOut(300);
            //$('.pop_name').css('color','#cccccc');
            //$('.pop_tel').css('color','#cccccc');         
            $('.pop_name').val('');
            $('.pop_tel').val('');
            })
            
            function alignCenter(elem) {
            elem.css({
            left: ($(window).width() - elem.width()) / 2 - 10 + 'px',
            top: 50 + 'px'   
            })
            } 
            })
</script>

<script>
            $(function() {
                $('#callback-send1').click(function()
                {
                
                    var name=$('.pop_name').val();
                    var tel=$('.pop_tel').val();
                    var type=$('.pop_type').val();
                    
                    //Comagic.push(['addOfflineRequest', {name: name,  phone: tel, message: type }]);
                    $.ajax({
                           type: "POST",
                           url: "/forms.php",
                           data: "name="+name+"&tel="+tel+'&f='+type,
                           success: function(data){ 
                            if (data=='ok')
                            {
                                
                                //alert ('Заявка успешно отправлена');
                                $('#popup1').fadeOut(300);
                                $('.pop_name').val('');
                                $('.pop_tel').val('');
                                $('#spasibo').fadeIn(300);
                                SendComagic(name,tel,type,'');
                                
                                Comagic.sitePhoneCall( {phone:tel}, function (){} );
                            //  alert (callback);
                            }
                            else
                            {
                                    alert ('Ошибка при отправлении. Возможно Вы неправильно заполнили поля.');
                            };
                                
                            } 
                     });
                
                
                });

                
                



$('#callback-pozdr').click(function()
                {
                
                    $.cookie('was', true, {  
                        expires: 1,  
                        path: '/'  
                      });       
                    var name=$('.pozdr_name').val();
                    var tel=$('.pozdr_tel').val();
                    
                    //Comagic.push(['addOfflineRequest', {name: name,  phone: tel, message: 'pozdr' }]);
                    $.ajax({
                           type: "POST",
                           url: "/forms.php",
                           data: "name="+name+"&tel="+tel+'&f=pozdr',
                           success: function(data){ 
                            if (data=='ok')
                            {
                                
                            //  alert ('Заявка успешно отправлена');
                                $('.pozdr_name').val('');
                                $('.pozdr_tel').val('');
                                $('#pozdr').fadeOut(300);                               
                                $('#spasibo').fadeIn(300);                              
                                SendComagic(name,tel,'pozdr','');
                            }
                            else
                            {
                                    alert ('Ошибка при отправлении. Возможно Вы неправильно заполнили поля.');
                            };
                                
                            } 
                     });
                
                
                }); 

                
            
        $('.pop_name').blur(function()  
        {
            if  ($('.pop_name').val()=='')
            {
                $('.pop_name').val('Ваше имя');
                
            }
        });
        $('.pop_tel').blur(function()   
        {
            if  ($('.pop_tel').val()=='')
            {
                $('.pop_tel').val('Телефон');
                
            }
        });              
            
        
    
        $('.v_name').blur(function()    
        {
            if  ($('.v_name').val()=='')
            {
                $('.v_name').val('Ваше имя');
            
            }
        });
        $('.v_tel').blur(function() 
        {
            if  ($('.v_tel').val()=='')
            {
                $('.v_tel').val('Телефон');
                
            }
        }); 

            
    });
</script>
<script>
    $(function(){
    if (!$.cookie('was'))
    {
        
        $( "#pozdr" ).delay( 30000 ).fadeIn( 400 );
        $( "#hide-layout" ).delay( 30000 ).fadeIn( 400 );
        

            setTimeout(timer,30000);

          
    }

    
})


function timer(){
 var obj=document.getElementById('sec');
 obj.innerHTML--;
  
 if(obj.innerHTML==0){$('.pozdr .f-close').click();}
 else{setTimeout(timer,1000);}
}

$('.pozdr .f-close').click(function(){
    $( "#pozdr" ).fadeOut( 400 );
        $( "#hide-layout" ).fadeOut( 400 );
     $.cookie('was', true, {  
            expires: 1,  
            path: '/'  
          });   
    
})

$('.popup1 .f-close').click(function(){
    $( "#popup1" ).fadeOut( 400 );
        $( "#hide-layout" ).fadeOut( 400 );
    
})


</script>




    
<script data-skip-moving="true">
        (function(w,d,u,b){
                s=d.createElement('script');r=1*new Date();s.async=1;s.src=u+'?'+r;
                h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.ru/b1751535/crm/site_button/loader_2_dhh0f2.js');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33881514 = new Ya.Metrika2({
                    id:33881514,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33881514" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php get_footer(); ?>
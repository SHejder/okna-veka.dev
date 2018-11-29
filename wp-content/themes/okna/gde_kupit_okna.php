<?php
/**
 * Template Name: Контакты
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
        
     
    <div class="resize_padd"></div>
<div class="section section_map">
        <div class="content">       
            <div style="margin:0 auto;width:100%;max-width:1000px;padding-bottom: 20px;">   
                <div class="contacts">
                    <div>
                        <p>
                            <span>Дежурный офис:</span><br>
                            Москва, Проспект Андропова, 22<br> 
                            5 минут пешком от метро Коломенская
                        </p>
                    </div>
                    <div>
                        <p>
                            <span>Часы работы:</span><br>
                            Ежедневно с 9:00 до 23:00
                        </p>
                    </div>
                    <div class="clr" style="float:none;"></div>
                </div>
                <div id="map"></div>
            </div>  
        </div>


        
<!-- Карта -->
<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap, 
        myPlacemark;
        

    function init(){ 
        myMap = new ymaps.Map("map", {
            center: [55.683773697081115,37.661077137416456],
            zoom: 14,
            controls: ['zoomControl'],
            
        }); 
        
        
        myPlacemark = new ymaps.Placemark([55.683773697081115,37.661077137416456], {
            hintContent: 'Окна Века',
            balloonContent: 'Окна Века - Дежурный офис'},
            {
            iconLayout: 'default#image',
            //iconImageHref: 'путь к картинке',
            // Размеры метки.
          // iconImageSize: [149, 117],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
           // iconImageOffset: [-70, -117]
            
            
        });
        
        myMap.geoObjects.add(myPlacemark);
        myMap.behaviors.disable("scrollZoom");
    }
</script>

        <div class="content">       
            <div style="margin:0 auto; width:100%;max-width:1000px;padding-bottom: 20px;">  
                    <div>
                      <p><span style="font-weight: bold">-&gt; Производство:</span> г. Фрязино, Окружной пр-д, стр.2 </p>
                      <p>График работы: с 9.00-21.00 (пнд-суб)                        </p>
                      <p>*Предварительная запись обязательна! </p>
                      <p>&nbsp;</p>
                      <p><span style="font-weight: bold">-&gt; Дилерский офис:</span> г. Москва, Каширское ш, д.1/12, ТЦ &quot;Каширский Двор №2&quot;                      </p>
                      <p> График работы: с 9.00-23.00 (Без выходных)</p>
                      <p>&nbsp; </p>
                      <p><span style="font-weight: bold">-&gt; Южный офис:</span> г. Москва, 1-ый Нагатинский проезд, д.2, стр.7                  </p>
                      <p>График работы: с 9.00-18.00 (Рабочие дни) </p>
                      <p>&nbsp;</p>
                      <p><span style="font-weight: bold">-&gt; Северный офис:</span> г. Москва, ул. Декабристов, д. 17                      </p>
                      <p>График работы: с 9.00-18.00 (Рабочие дни) </p>
                      </p>
                      <p>&nbsp;</p>
                      <p> <span style="font-weight: bold"> Доставка:</span> осуществялется по Москве и Московской области</p>
                      <p> Стоимость доставки:</p>
                      <p> В пределах МКАД: 1500 рублей</p>
                      <p> За пределы МКАД: 35 рублей/км</p>
                                            <p>&nbsp;</p>
                      <p>ООО &quot;Окна ВЕКА&quot;, ОГРН 1137746353172, ИНН 7724873362
                        
                      </p>
                    </div>
                    <div class="clr" style="float:none;"></div>
            </div>  
        </div>
    
        <div class="section s15">
            <div class="content">
                <h1 class="black">
                    <span>Преимущества заказа у нас</span>
                </h1>

                
            <div class="okno_mod w_blocks" style="min-height: 300px;">
                <div class="okno_b1 w_block">
                    <div class="hh">
                        Собственное производство
                    </div>
                    <div class="tt">
                        Современное производственное оборудование позволяет изготавливать до 20000 м<sup>2</sup> в месяц!
                    </div>
                    
                </div>
            
                <div class="okno_b2 w_block">
                    <div class="hh">
                        Самые низкие цены
                    </div>
                    <div class="tt">
                        Стоимость продукции и услуг в среднем на 12% ниже рыночной. Мы гарантируем низкие цены!
                    </div>
                
                </div>  

                <div class="okno_b3 w_block">
                    <div class="hh">
                        Кратчайшие сроки
                    </div>
                    <div class="tt">
                        Срок изготовления пластиковых окон снижен до 5 рабочих дней!
                    </div>
                
                </div>              
                
                <div class="okno_b4 w_block">
                    <div class="hh">
                        Гарантия 100%
                    </div>
                    <div class="tt">
                        Гарантия на окна и комплектующие, а также производимые работы достигает 10 лет!
                    </div>
                

                </div>      
                <div class="clr"></div>
            </div>

            </div>
        </div>

<script>
$(window).scroll( function(){

    var blocks = $('.w_blocks').children();

    var  windowSize = $(window).height();
    var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = (viewportTop + windowSize);
    var offset=100;
    
     var elemTop =  Math.round(blocks.offset().top ) - offset ;
     var elemBottom = elemTop + (blocks.height());
    
    if ((elemTop < viewportBottom) && (elemBottom > viewportTop)){
        var i = 0;
        animateCircle1(blocks);
    
    };
    
     function animateCircle1() {
            
            $(blocks[i]).addClass('visible animated fadeIn');
            $(blocks[i]).removeClass('hidden');
      
        i++;
        if (i <= blocks.length) {
            startAnimation();
        }
    }
    
    function startAnimation() {
        setTimeout(function () {
            animateCircle1();}, 450);
    }

});     
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
                <ul id="responsive">
                        <li>
                            <img id="otz1" src="img/otz/otz1_b.png" />
                            <div class="otz_name">Юрий</div>
                            <div class="otz_prof">предприниматель</div>
                            <p class="otzv-txt">
                                Специалисты «Окна Века» остеклили в нашей квартире балкон и лоджию. Когда мы с женой пришли в офис, то точно не знали, что именно хотим. Там нам объяснили, чем отличается теплое остекление от холодного, какая разница в стоимости. Мы решили, что теплое остекление нам подойдет больше, так как в лоджии давно запланировали сделать небольшое поме..
                            </p>
                        </li>
                        <li>
                            <img id="otz2" src="img/otz/otz2_b.png"  />
                            <div class="otz_name">Евгения</div>
                            <div class="otz_prof">бухгалтер</div>   
                            <p class="otzv-txt">
                                Решили с мужем сделать в доме зимний сад. Обзвонили несколько компаний, переговорили с их представителями, узнали условия сотрудничества. Выбор остановили на «Окна Века», они предлагали сделать зимний сад по наиболее приемлемой цене. После подписания договора, специалисты разработали проект, с учетом наших пожеланий и сделанных замеров..
                            </p>            
                        </li>
                        <li>
                            <img id="otz3" src="img/otz/otz3_b.png" />
                            <div class="otz_name">Ольга</div>
                            <div class="otz_prof">журналист</div>   
                            <p class="otzv-txt">
                                Купили небольшой дачный домик. Сразу взялись за ремонт и замену окон. Посмотрели предложения и отзывы в интернете, сравнили несколько компаний и обратились в «Окна Века». Нам предложили не очень дорогие, но надежные окна с достойными характеристиками. Мы не раздумывали, сразу подписали договор. Через неделю окна в доме бы..
                            </p>            
                        </li>
                        <li>
                            <img id="otz4" src="img/otz/otz4_b.png" />
                            <div class="otz_name">Анна</div>
                            <div class="otz_prof">домохозяйка</div> 
                            <p class="otzv-txt">
                                У нас квартира в хрущевке, балкон там был остеклен лет двадцать назад, а может и больше. Вид у него плачевный, иногда казалось, что рамы от ветра скоро рухнут вниз. Наконец-то я не выдержала и решила найти фирму, которая не очень дорого остеклит балкон. По совету знакомого обратилась в «Окна Века». Они мне действительно очень помогли! Подобрали ма..
                            </p>            
                        </li>
                        <li>
                            <img id="otz5" src="img/otz/otz5_b.png"  />
                            <div class="otz_name">Леонид</div>
                            <div class="otz_prof">программист</div> 
                            <p class="otzv-txt">
                                Решили установить в квартире новые окна из профиля Rehau, предварительно прочитав о них много информации на разных форумах и сайтах. За помощью обратились в «Окна Века». Нам эту компанию посоветовали знакомые. Здесь нам очень помогли, подсказали, что и как лучше сделать, установили окна с энергосберегающими пакетами, еще и москитную сетку презентова.. 
                            </p>            
                        </li>
                    </ul>
                <div class="otz_link"><a href="plastikovye_okna_otzyvy.html">ВСЕ ОТЗЫВЫ</a></div>
            </div>
        </div>

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
                            <a href="img/pic_okna/g1.jpg" title="Пластиковые окна в детскую" ><img alt="Стоимость: <span>8900 руб.</span>" src="img/pic_okna/small/p1.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                            <a href="img/pic_okna/g2.jpg" title="Входная группа из ПВХ"><img alt="Стоимость: <span>15100 руб.</span>" src="img/pic_okna/small/p2.jpg"/></a>
                          </div>                         
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_okna/g3.jpg" title="Эркерное остекление балкона" ><img alt="Стоимость: <span>31700 руб.</span>" src="img/pic_okna/small/p3.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_okna/g4.jpg" title="Окно ПВХ на кухне" ><img alt="Стоимость: <span>10100 руб.</span>" src="img/pic_okna/small/p4.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_okna/g5.jpg" title="Пластиковое окно с дверью"><img alt="Стоимость: <span>13900 руб.</span>" src="img/pic_okna/small/p5.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_okna/g6.jpg" title="Окна с двухкамерным стеклопакетом" ><img alt="Стоимость: <span>14800 руб.</span>" src="img/pic_okna/small/p6.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_okna/g7.jpg" title="Пластиковые окна в студии" ><img alt="Стоимость: <span>16800 руб.</span>" src="img/pic_okna/small/p7.jpg"/></a>
                          </div>
                          <div class="carousel-block" rel="prettyPhoto">
                             <a href="img/pic_okna/g8.jpg" title="Остекление и отделка лоджии. Объединение с комнатой" ><img alt="Стоимость: <span>39700 руб.</span>" src="img/pic_okna/small/p8.jpg"/></a>
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
                                                                <div class="f_block fm3">
                            <a href="/otdelka_balkonov.html">Отделка балконов</a>
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
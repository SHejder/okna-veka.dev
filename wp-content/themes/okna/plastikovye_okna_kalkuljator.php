<?php
/**
 * Template Name: Калькуль
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

            

    <div id="popup1" class="popup1" >
        <div id="btn-close" class="f-close"> </div>
        <div class="header white">ЗАКАЗАТЬ ЗВОНОК</div> 
        
        <input type="hidden" class="pop_type" value="">
        <input class="pop_name" type="text" placeholder='Ваше имя' value=''>
        <input class="pop_tel" type="text" placeholder='Телефон' value=''  >
        <div  id="callback-send1" class="b_yellow">ЖДУ ЗВОНКА</div>
         
    </div> 

    <div id="spasibo" class="spasibo" >
        <div class="header">СПАСИБО!</div> 
        <div class="p1_msg">
            Ваша заявка отправлена успешно.
        </div>

        <a  id="callback-spasibo" class="btn b_red">ЗАКРЫТЬ</a>
         
    </div>    

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
        
        <div class="section s-top">
            <div class="content">
                <div class="logo">
                  <p style="font-size: 34px"><a  style="color:#FFFFFF; text-decoration:none"  href="http://okna-veka.info">ОКНА ВЕКА                </a><a target="_blank" href="http://clck.yandex.ru/redir/dtype=stred/pid=47/cid=2508/*https://market.yandex.ru/shop/380236/reviews"><img src="http://clck.yandex.ru/redir/dtype=stred/pid=47/cid=2505/*http://grade.market.yandex.ru/?id=380236&action=image&size=0" border="0" width="88" height="31"   /></a></p>
                  <p style="font-size: 14px"><a style="color:#FFFFFF; text-decoration:none" href="http://okna-veka.info">Официальный сайт</a></p>
              </div>    
                <div class="vyzov">
                    <div class="st">    
                        <a href="plastikovye_okna_kalkuljator.html">Оперативный расчет</a>
                    </div>
                    <div class="zam">
                        <a href="#">Бесплатный замер</a>
                    </div>      
                </div>                  
                <div class="tel">
                    <p class="white"> <a style="text-decoration:none;" class="white comagic_phone" href="tel:+74996539399">8 (499) 653-93-99</a></p>
                    <div class="call">с 9 до 23 без выходных!</div>
                </div>
                <div class="s-top_menu">
                    <div class="button_menu">
                        <span>Цены</span>
                    </div>
                    <div class="top_menu">
                        <div class="logo">
                            <p style="font-size: 34px"><a  style="color:#FFFFFF; text-decoration:none"  href="http://okna-veka.info">ОКНА ВЕКА              </a><a target="_blank" href="http://clck.yandex.ru/redir/dtype=stred/pid=47/cid=2508/*https://market.yandex.ru/shop/380236/reviews"><img src="http://clck.yandex.ru/redir/dtype=stred/pid=47/cid=2505/*http://grade.market.yandex.ru/?id=380236&action=image&size=0" border="0" width="88" height="31" /></a></p>
                        </div>
                        <p style="font-size: 14px"><a style="color:#FFFFFF; text-decoration:none" href="http://okna-veka.info">Официальный сайт</a></p>
                        <div class="vyzov">
                            <div class="st">
                                <a href="plastikovye_okna_kalkuljator.html">Оперативный расчет</a>
                            </div>
                            <div class="zam">
                                <a href="#">Бесплатный замер</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>  
        <div class="section m_section">
            <div class="content">
                <a href="plastikovye_okna_kalkuljator.html" class="abest1"><div class="best1"></div></a>
                <ul class="menu">
                    <!-- <li  ><div><a href="/">Пластиковые окна</a></div> -->
                    <li class="sub " ><div><a href="/">Пластиковые окна</a></div>
                        <ul>
                            <li><a href="plastikovye_okna_kalkuljator.html">Цены на окна</a></li>
                            
                        </ul>
                    
                    </li>
                    <li ><a href="osteklenie_balkonov.html">Остекление балконов</a></li>
                    <li ><a href="otdelka_balkonov.html">Отделка лоджий</a></li>
                    <!-- <li ><a href="/osteklenie_kottedzha.html">Окна для коттеджа</a></li> -->
                    <li class="sub " ><div><a href="osteklenie_kottedzha.html">Окна для коттеджа</a></div>
                        <ul>
                            
                            <li><a href="svetoprozrachnye_konstrukcii.html">Остекление из ПВХ и AL</a></li>
                        </ul>
                    
                    </li>
            <!--        <li class="sub"><div><a href="#">Услуги</a></div>
                        <ul>
                            <li><a href="#">Ламинация и выкрас</a></li>
                            <li><a href="#">Установка откосов</a></li>
                            <li><a href="#">Нестандартные окна</a></li>
                        </ul>
                --> </li>
                    <li class="sub " ><div><a href="gde_kupit_okna.html">КОНТАКТЫ</a></div>
                        <ul>
                            
                            <li><a href="oplata.html">Оплата картой</a></li>
                        </ul>
                    
                    </li>
                    <li class="last "><a href="skidki_na_okna.html" style="color: #F80D11">% Акции и скидки</a></li>
                
                </ul>
                
            </div>
            <button class="cmn-toggle-switch cmn-toggle-switch__htx btn-tr" id="menu-trigger">
                    <span>toggle menu</span>
                </button>
        </div>

        
<div class="toptop">
<br>наверх
</div>
<script>
$('.tel .call').click(function(){
    $('.popup1 .pop_type').val('call');
    $('.popup1 .header').html('МЫ ПЕРЕЗВОНИМ ЧЕРЕЗ 10 СЕКУНД!');
    $('#hide-layout, #popup1').fadeIn(300);
})

$('.vyzov .zam a').click(function(){
    $('.popup1 .pop_type').val('zamer');
    $('.popup1 .header').html('ЗАПИСЬ НА <span class="yellow">БЕСПЛАТНЫЙ</span> ЗАМЕР!');
    $('#hide-layout, #popup1').fadeIn(300);
})
</script>       
        
<script>

    var a=0;
    
        $(window).scroll(function() {
            if (($(this).scrollTop() > 500) && ($(this).scrollTop() < $(document).height()-1000) ) {
            //if (($(this).scrollTop() > 500)) {
                if (a==0){
                $('.scroll').animate({right:15});
                a=1;
                }
            } else {
                if (a==1)
                {
                    $('.scroll').animate({right:-200});
                    a=0;
                }
            }
        });

var b=0;
    
        $(window).scroll(function() {
            if (($(this).scrollTop() > 500) && ($(this).scrollTop() < $(document).height()-1000) ) {
            //if (($(this).scrollTop() > 500)) {
                if (b==0){
                $('.toptop').animate({left:15});
                b=1;
                }
            } else {
                if (b==1)
                {
                    $('.toptop').animate({left:-200});
                    b=0;
                }
            }
        });     


$(".toptop").click(function () 
    {   
        $("body,html").animate({    
            scrollTop: 0    }, 100);    
            return false    
    });         
        
</script>
    <div class="resize_padd"></div>
        <div class="section s22" style="padding-top: 10px">
            <div class="content">
            <h1 class="" style="font-size:45px;">Онлайн калькулятор</h1>
                <div class="calc calc_okna calc2">
                    <div class="sw_block"  style="width: 350px;">
                        <div class="bl_ok inactive_">Окна</div>
                        <div class="blsw">
                            <div class="bl_sw ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0px;"></span>
                            </div>
                        </div>
                        <div class="bl_bal active_"><a style="color:#333; text-decoration:none; " href="osteklenie_balkonov_kalkuljator.html">Балконы</a></div>
                        <div class="clr"></div>
                        
                    </div>
                    <div class="c_left">
                        
                            <div class="calc_main">
                            <img style="background:none; padding-left:none;" src="img/height.png"><img src="img/calc_okna/o2_1.jpg">
                                
                            </div>
                        
                        
                        <div class="clr"></div>
                    </div>
                    <div class="c_right">
                        <div style="position: relative;">
                            <div class="sw_h">Выберите тип окна</div>
                            <div class="ul_menu">
                                <ul class="calc_menu">
                                    <li id="o1">
                                        <img src="img/calc_okna/o1_1.png">
                                    </li>
                                    <li id="o2" class="active">
                                        <img src="img/calc_okna/o2_1.png">
                                    </li>
                                    <li id="o3">
                                        <img src="img/calc_okna/o3_1.png">
                                    </li>
                                    <li id="o4">
                                        <img src="img/calc_okna/o4_1.png">
                                    </li>
                                                        
                                </ul>
                            </div>
                            
                            <div class="o1 calc_sub hide">
                                <div id="o1_1" class="o1">
                                    <img src="img/calc_okna/o1_1.png">
                                </div>
                                <div id="o1_2" class="o1">
                                    <img src="img/calc_okna/o1_2.png">
                                </div>
                                <div id="o1_3" class="o1">
                                    <img src="img/calc_okna/o1_3.png">
                                </div>
                            </div>
                            <div class="o2 calc_sub hide">
                                <div id="o2_1" class="o2">
                                    <img src="img/calc_okna/o2_1.png">
                                </div>
                                <div id="o2_2" class="o2">
                                    <img src="img/calc_okna/o2_2.png">
                                </div>
                                <div id="o2_3" class="o2">
                                    <img src="img/calc_okna/o2_3.png">
                                </div>
                                <div id="o2_4" class="o2">
                                    <img src="img/calc_okna/o2_4.png">
                                </div>
                            </div>                      
                            <div class="o3 calc_sub hide">
                                <div id="o3_1" class="o3">
                                    <img src="img/calc_okna/o3_1.png">
                                </div>
                                <div id="o3_2" class="o3">
                                    <img src="img/calc_okna/o3_2.png">
                                </div>
                                <div id="o3_3" class="o3">
                                    <img src="img/calc_okna/o3_3.png">
                                </div>
                            </div>  
                            <div class="o4 calc_sub hide">
                                <div id="o4_1" class="o4" style="margin-top: 5px">
                                    <img src="img/calc_okna/o4_1.png">
                                </div>
                                <div id="o4_2" class="o4">
                                    <img src="img/calc_okna/o4_2.png">
                                </div>
                            </div>                      
                            <div class="clr"></div>
                        </div>
                    
                    
                        <div class="sw">

                            <div class="sw_h" style="padding-bottom: 5px;" >
                                <span>Ширина, см</span>
                                <span style="margin-left: 114px;">Высота, см</span>
                            </div>
                            <div class="sw_block"  style="margin-top: 0px;">
                            
                                
                                <div class="counter_i_block calc_width">
                                    <input class="c_width" type="text" maxlength="3" value="120">
                                    <input class="counter_plus" type="button">
                                    <input class="counter_minus" type="button">
                                </div>
                                <div class="calc_x">X</div>
                                <div class="counter_i_block calc_height">
                                    <input class="c_height" type="text" maxlength="3" value="120">
                                    <input class="counter_plus" type="button">
                                    <input class="counter_minus" type="button">
                                </div>
                                
                            
                                
                                <div class="clr"></div>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="itogi">
                            <div class="i_txt1">
                                Стоимость сегодня:
                            </div>
                            <div class="ceny">
                                <div class="itogo">
                                    20999
                                </div>
                            </div>
                            <div class="clr"></div>
                            
                                
                            
                        </div>
                    </div>
                    <div class="clr"></div>
                    
                    
                    
                    <h1 class="" style="font-size:40px;padding-top:30px;"><img src="img/cz_ck.png"> Скидка 45%<span style="padding-left:50px;"> <img src="img/cz_ck.png"> Бесплатная доставка</span></h1>   
                
                <div class="calc_zakaz">
                    <input class="cz_name" type="text" value="" placeholder="Ваше имя" >
                    <input class="cz_tel" type="text" value="" placeholder="Телефон" >
                    
                                        
                    <a  id="calc_zakaz" class="b_yellow_cz">Купить по акции</a>

                </div>
                    
                
                    
                </div>
                    <div class="clr"></div>
            </div>
        </div>

<script>
    $(".cz_tel").inputmask("+7 (999) 999-99-99");
$('#calc_zakaz').click(function()
                {
                    var name=$('.cz_name').val();
                    var tel=$('.cz_tel').val();
                //Comagic.push(['addOfflineRequest', {name: name,  phone: tel, message: 'callback2' }]);
                    $.ajax({
                           type: "POST",
                           url: "/forms.php",
                           data: "name="+name+"&tel="+tel+'&f=calc_zakaz',
                           success: function(data){ 
                            if (data=='ok')
                            {
                            
                            //  alert ('Заявка успешно отправлена');
                                $('.cz_name').val('');
                                $('.cz_tel').val('');
                                $('#hide-layout').fadeIn(300);                              
                                $('#spasibo').fadeIn(300);                              
                                SendComagic(name,tel,'calc_zakaz','');
                            }
                            else
                            {
                                    alert ('Ошибка при отправлении. Возможно Вы неправильно заполнили поля.');
                            };
                                
                            } 
                     });
                
                
                }); 
</script>       
        
        
        
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
        $('#'+id).html('<img src="img/calc_okna/'+current_id+'.png">');
    //  $('.calc_main').css('background','url("img/calc_okna/'+current_id+'.jpg") no-repeat scroll center top rgba(0, 0, 0, 0)');
        
        //$('.calc_main').html('<img src="img/calc_okna/'+current_id+'.jpg">');
        $('.calc_main').html('<img style="background:none; padding-left:none;" src="img/height.png"><img src="img/calc_okna/'+current_id+'.jpg">');
        
        $('#'+id).addClass('active');
        oknaCalc();
    });
    

    $(".c_width").keyup(function(){
        if ($(".c_width").val()>300){$(".c_width").val(300)}
    //  if ($(".c_width").val()<80){$(".c_width").val(80)}
        $(".c_width").val(Math.floor($(".c_width").val()));
          


         
        if ($(".c_width").val()>=80 ){oknaCalc();}
        else {
            $(".itogi .itogo").html('0<img style="padding-left:20px;" src="img/itogi_rub.png">');
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
            $(".itogi .itogo").html('0<img style="padding-left:20px;" src="img/itogi_rub.png">');

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
        
        
        $(".itogi .itogo").html(Math.floor(itogo)+'<img style="padding-left:20px;" src="img/itogi_rub.png">');
//      $(".itogi .i_montaz span").html(Math.floor(itogo*0.2)+' руб.');
//      $(".itogi .i_otd span").html(Math.floor(itogo*0.3)+' руб.');
//      $(".itogi .i_rassr span").html(Math.floor(itogo/12));
        
    }
    
$(function(){
    oknaCalc();
})  
</script>   
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


    
        <div class="section s32" style="margin-bottom:20px;margin-top:40px;">
            <div class="content">   
            <h1 style="font-size: 45px;">Лучшие цены на пластиковые окна в Москве</h1>  
            <p class="p_text" style="font-size:24px;line-height:34px;">Онлайн калькулятор окон пвх при расчете стоимости учитывает следующие параметры: размер окна, конфигурацию створок и количество створок.
             Цены являются ознакомительными.<br> 
             Для уточнения параметров и получения детализации необходимо
            обратиться к своему персональному менеджеру по телефону <strong>8 (499) 653-93-99</strong>. </p>            
                
                
            </div>          
        </div>  
        <div class="section s39">
            <div class="content">
         
                <div class="ysk"><a href="skidki_na_okna.html"> День рождения компании! Скидки -45% до 10 сентября! </a></div>
                <div class="ooo">
                    <div class="ooo_block1">
                        <div class="l_block">
                            12194.-
                              <div class="d_line"></div>
                        </div>
                        <div class="r_block">
                            6700
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="ooo_block2">
                        <div class="l_block">
                            18564.-
                              <div class="d_line"></div>
                        </div>
                        <div class="r_block">
                            10200
                        </div>
                        <div class="clr"></div>
                    </div>
                    <div class="ooo_block3">
                        <div class="l_block">
                            22750.-
                              <div class="d_line"></div>
                        </div>
                        <div class="r_block">
                            12500
                      </div>
                        <div class="clr"></div>
                    </div>
    
                
                </div>
            
            </div>  
        </div>
        <div class="banner1">
                    <div class="inner_block">
                      <h1>Монтаж &quot;ИЛБРУК&quot; <br>в подарок!</h1>
                        <p>Правильная установка - это 90% успеха! </p>
                        <p>&nbsp;</p>
                        <p>Именно поэтому мы используем  монтаж с тремя контурами герметизации монтажного шва!</p>
                        <p style="color:#333;padding-top:20px;font-size:27px; font-weight:bold;">Гарантия на выполненные работы  10 лет!</p>
                    </div>
                
                </div>
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
        <div class="section s15">
            <div class="content">
                <h1 class="black">
                    <span>Преимущества заказа у нас</span>
                </h1>

                
            <div class="okno_mod w_blocks">
                <div class="okno_b1 w_block">
                    <div class="hh">
                        Собственное<br>производство
                    </div>
                    <div class="tt">
                        Современное производственное оборудование позволяет изготавливать до 20000 м<sup>2</sup> в месяц!
                    </div>
                    
                </div>
            
                <div class="okno_b2 w_block">
                    <div class="hh">
                        Самые<br>низкие цены
                    </div>
                    <div class="tt">
                        Стоимость продукции и услуг в среднем на 12% ниже рыночной. Мы гарантируем низкие цены!
                    </div>
                
                </div>  

                <div class="okno_b3 w_block">
                    <div class="hh">
                        Кратчайшие<br>сроки
                    </div>
                    <div class="tt">
                        Срок изготовления пластиковых окон снижен до 5 рабочих дней!
                    </div>
                
                </div>              
                
                <div class="okno_b4 w_block">
                    <div class="hh">
                        Гарантия<br>100%
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
                                            <div class="f_block fm1 f_block_four">
                            <a href="/">Пластиковые окна</a>
                        </div>
                                                                    <div class="f_block fm2 f_block_four">
                            <a href="/osteklenie_balkonov.html">Остекление балконов</a>
                        </div>
                                                                <div class="f_block fm3 f_block_four">
                            <a href="/otdelka_balkonov.html">Отделка балконов</a>
                        </div>
                                                                <div class="f_block fm4 f_block_four">
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

<?php get_footer(); ?>
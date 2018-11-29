<?php
/**
 * Template Name: Остекленение балконов
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
        


        
   
  


    
<div class="section gal_okna balkon sd231">
  
    
         
  
    
       
        <div class="section s23">
            <div class="content">
                <div class="footer_menu">
                                            <div class="f_block fm1">
                            <a href="/">Пластиковые окна</a>
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
<?php
/**
 * Template Name: Пластиковые Окна
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
//Форма отправки 2.0
$(function() {
    $("[name=send]").click(function (e) {
       var btn = $(this);
       var $form = $(this).closest('form');

        $(":input.error").removeClass('error');
        $(".allert").remove();

        var error;
        var ref = btn.closest('form').find('[required]');
        // var loc = ymaps.geolocation.city+', '+ymaps.geolocation.region+', '+ymaps.geolocation.country;

        $.get("http://ipinfo.io", function(response) {
          $('[name=city').val(response.city + ', ' + response.country)
        }, "jsonp");
        var msg = btn.closest('form').find('input, textarea, select');
        var send_btn = btn.closest('form').find('[name=send]');
        var send_adress = btn.closest('form').find('[name=send_adress]').val();
        var send_options = btn.closest('form').find('[name=campaign_token]');;
        var formType = btn.closest('form').find('[name=form_type]').val();
        var redirect = btn.closest('form').find('[name=redirect]').val();
        var goal = btn.closest('form').find('[name=goal]').val();
        var alertImage = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 286.1 286.1"><path d="M143 0C64 0 0 64 0 143c0 79 64 143 143 143 79 0 143-64 143-143C286.1 64 222 0 143 0zM143 259.2c-64.2 0-116.2-52-116.2-116.2S78.8 26.8 143 26.8s116.2 52 116.2 116.2S207.2 259.2 143 259.2zM143 62.7c-10.2 0-18 5.3-18 14v79.2c0 8.6 7.8 14 18 14 10 0 18-5.6 18-14V76.7C161 68.3 153 62.7 143 62.7zM143 187.7c-9.8 0-17.9 8-17.9 17.9 0 9.8 8 17.8 17.9 17.8s17.8-8 17.8-17.8C160.9 195.7 152.9 187.7 143 187.7z" fill="#E2574C"/></svg>';


        $(ref).each(function() {
            if ($(this).val() == '') {
                var errorfield = $(this);
                $(this).addClass('error').parent('.field').append('<div class="allert"><span>Заполните это поле</span>' + alertImage + '</div>');
                error = 1;
                $(":input.error:first").focus();
                return;
            } else {
                var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                if ($(this).attr("type") == 'email') {
                    if (!pattern.test($(this).val())) {
                        $("[name=email]").val('');
                        $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите коректный e-mail</span>' + alertImage + '</div>');
                        error = 1;
                        $(":input.error:first").focus();
                    }
                }
                var patterntel = /^()[- +()0-9]{9,18}/i;
                if ($(this).attr("type") == 'tel') {
                    if (!patterntel.test($(this).val())) {
                        $("[name=phone]").val('');
                        $(this).addClass('error').parent('.field').append('<div class="allert"><span>Укажите номер телефона в формате +3809999999</span>' + alertImage + '</div>');
                        error = 1;
                        $(":input.error:first").focus();
                    }
                }
            }
        });
        if (!(error == 1)) {
            
                // Send data from form to zohoCRM
        
            var form_data = $(this).closest('form').serializeArray();
            var form_data_bootcamp = {};

            $.each(form_data, function(i, v) {
                form_data_bootcamp[v.name] = v.value;
            });

                console.log(form_data_bootcamp);
                $.ajax({
                   type: 'POST',
                    url: '/registration/application.php',
                    data: {bootcamp: form_data_bootcamp, utm_source: form_data_bootcamp['utm_source'], google_id: form_data_bootcamp['google_id'], utm_campaign: form_data_bootcamp['utm_campaign'], utm_content: form_data_bootcamp['utm_content'], utm_medium: form_data_bootcamp['utm_medium'], utm_term: form_data_bootcamp['utm_term']},
                    success: function() {
                        //window.location.href = '/done/';
                    }   
                });
            
            $(send_btn).each(function() {
                $(this).attr('disabled', true);
            });

            $.ajax({
                type: 'POST',
                url: send_adress,
                data: msg,
                success: function() {
                    $('form').trigger("reset");
                    setTimeout(function() {
                        $("[name=send]").removeAttr("disabled");
                    }, 1000);
                        // Настройки модального окна после удачной отправки
                        dataLayer.push({
                            'form_type': formType,
                            'event': "form_submit"
                        });
                        yaCounter41024484.reachGoal(goal);
                    },
                    error: function(xhr, str) {
                        dataLayer.push({
                            'form_type': formType,
                            'event': "form_submit"
                        });
                        yaCounter41024484.reachGoal(goal);
                        $('div.md-show').removeClass('md-show');

                        // Отправка в базу данных
                       $.ajax({
                           type: 'POST',
                           url: 'db/registration.php',
                           dataType: 'json',
                           data: $form.serialize(),
                           success: function(response) {
                               console.info(response);
                               console.log($form.serialize());
                               if (response.status == 'success') {
                                    $('form').trigger("reset");
                                    window.location.href = 'http://allinsol.com/bootcamp/success/';
                             }
                         }
                     });
                    }
                });


            // var form_data = $(this).closest('form').serializeArray();
            // var form_data_registration = {};
            // $.each(form_data,
            //     function(i, v) {
            //         form_data_registration[v.name] = v.value;
            //     });

            // console.log(form_data_registration);
            // $.ajax({
            //    type: 'POST',
            //     url: '/registration/application.php',
            //     data: {registration: form_data_registration},
            //     success: function(response) {
            //         window.location.href = 'http://allinsol.com/bootcamp/success/';
            //     }
            // });
        }
        return false;
    })
});






 // Smooth scroll to anchor

 $('.scroll').click(function(){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 1000);
  return false;
});

//  INPUT TEL MASK

jQuery(function($){
 $("input[type='tel']").mask("+99 (999) 999-9999");
});



// Scroll BAR

$(window).scroll(function() {
  // calculate the percentage the user has scrolled down the page
  var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());

  $('.bar-long').css('width', scrollPercent +"%"  );

});

(function($) {
    $(function() {

        $('ul.tabs__caption').on('click', 'li:not(.active)',

        function() {

            $(this)
            .addClass('active').siblings().removeClass('active')
            .closest('.container').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
        });

    });
})(jQuery);

$( document ).ready(function() {
  $('#scrollup img').mouseover( function(){
    $( this ).animate({opacity: 0.65},100);
  }).mouseout( function(){
    $( this ).animate({opacity: 1},100);
  });

  $(window).scroll(function(){
    if ( $(document).scrollTop() > 0 ) {
      $('#scrollup').fadeIn('slow');
    } else {
      $('#scrollup').fadeOut('slow');
    }
  });

  $('#scrollup').click(function() {
    $('body,html').animate({scrollTop:0},1000);
  });

  $(window).scroll(function(){
    if ( $(document).scrollTop() > 200 ) {
      $('header').addClass('scrolled');
    } else {
      $('header').removeClass('scrolled');
    }
  });
});
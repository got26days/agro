function mobMenu($this){
    $this.classList.toggle('open');
    document.getElementById('js-main-menu').classList.toggle('open');
    var bodyTag = document.getElementsByTagName('body'),
        htmlTag = document.getElementsByTagName('html');
    bodyTag[0].classList.toggle('no-scroll');
    htmlTag[0].classList.toggle('no-scroll');
}
$(document).ready(function(){
    $('.js-accordion-btn').on('click', function(){
        $(this).fadeOut(250);
        $(this).closest('.js-accordion-item').siblings('.js-accordion-item').find('.js-accordion-hide').slideUp(250);
        $(this).closest('.js-accordion-item').siblings('.js-accordion-item').find('.js-accordion-btn').fadeIn(250);
        $(this).closest('.js-accordion-item').find('.js-accordion-hide').slideDown(250);
    });
    
    $('#js-team-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
            },{
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            },{
                breakpoint: 479,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    
    /*кнопка скролл*/
    $('.js-scroll').click(function(e){
        e.preventDefault();
        var anchor = $(this).attr("href");
        var scroll_el = $(anchor);
        if ($(scroll_el).length != 0) { 
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top - 50 }, 250); 
        }
        if($(window).width() < 768){
            mobMenu(document.querySelector('.mob-menu-btn'));
        }
    });
    
    /*popup*/ 
    function popupOpen(){
        $('#js-popup').fadeIn(250);
        var topPos = $(window).scrollTop();
        $(window).scroll(function(){
            $(this).scrollTop(topPos);
        });
    }
    function popupReadyOpen(){
        $('#js-popup-ready').fadeIn(250);
        var topPos = $(window).scrollTop();
        $(window).scroll(function(){
            $(this).scrollTop(topPos);
        });
        setTimeout(popupReadyClose, 800);
    }
    function popupClose(){
        $('#js-popup').fadeOut(250);
        $(window).unbind('scroll');
    }
    function popupReadyClose(){
        $('#js-popup-ready').fadeOut(250);
        $(window).unbind('scroll');
    }
    $('.js-order-btn').on('click', function(){
        var formTitle = $(this).attr('data-title'),
            formBtn = $(this).attr('data-btn');
        $('#js-form-title').html(formTitle);
        $('#js-input-title').val(formTitle);
        $('#js-popup-btn').html(formBtn);
        popupOpen()
    });

    $('.js-order-btn-two').on('click', function(){
        var formTitle = $(this).attr('data-titletwo'),
            formTitleTwo = $(this).attr('data-title'),
            formBtn = $(this).attr('data-btn');
        $('#js-form-title').html(formTitleTwo);
        $('#js-input-title').val(formTitle);
        $('#js-popup-btn').html(formBtn);
        popupOpen()
    });

    $('.js-popup-close').on('click', function(){
        popupClose();
    });
    $('.js-popup-ready-close').on('click', function(){
        popupReadyClose()
    });
    
    /*валидация на заполнение отправка формы и ответ*/
    $('.js-form-val').on('submit', function(e){
            e.preventDefault();
            $(':input[type="submit"]').prop('disabled', true);
            var form = $(this),
                fields = $(form).find('.js-val'),            
                valid = true;
    
            $.each($(fields), function(){
                if (!$.trim($(this).val())){
                    $(this).addClass('error');
                    valid = false;            
                } else {
                    $(this).removeClass('error');
                }
            });
    
            if (valid){
               $.ajax({
    				url: "/form",
    				type: "POST",
    				response: "HTML",
    				data: $(this).serialize(),    
                    success: function(data) {
                        $(':input[type="submit"]').prop('disabled', false);
    				    popupClose();               
    				    popupReadyOpen();               
                    },
    				error: function() {
                        $(':input[type="submit"]').prop('disabled', false);
    					console.log("Не возможно отправить");
    				}
    			});
            }
        });
    $('.js-val').on('keypress', function(){
        $(this).removeClass('error');
    });
    
    /*video popup*/
    if($('#js-video-vrapper').length){
        var iframe = $('#js-video-container');
        
        $('.js-blind').on('click', function(){
            var winHeight = $(window).height() / 2,
                blinPos = $(this).offset().top + ($(this).height() / 2),
                scrollPos = blinPos - winHeight;
            $('#js-video-vrapper').fadeIn(250).addClass('show');
            $('html, body').animate({ scrollTop: scrollPos}, 250);
            //$('html').add('body').addClass('no-scroll');
            
            
            var srcAttr = $(this).attr('data-href');
            
            
            var elem = $('<iframe>',{     
                src : srcAttr + "?autohide=1&amp;autoplay=1",
                frameborder : "0",
                allowfullscreen : ""});
            
            iframe.prepend(elem);
        });
        
        $('.js-video-close').on('click', function(){
            $('#js-video-vrapper').fadeOut(250).removeClass('show');
            iframe.find('iframe').remove();
        });
    }
    
});


$(function() {
    $('select').styler({
        selectSearch: true,
        onSelectOpened: function() {
            $(this).closest('.js-label').addClass('focus');
        },
        onSelectClosed	: function() {
            $(this).closest('.js-label').removeClass('focus');
            $('.hint').remove();
        },
        onFormStyled	: function() {
            $('.credit').hover(function(){
                var posTop = $(this).offset().top + 24;
                var posLeft = $(this).offset().left + $(this).width() + 80;
                $('body').append(
                    '<div class="hint">Текст про кредиты</div>'
                );
                $('.hint').css(
                    {
                        top: posTop + 'px',			
                        left: posLeft + 'px'			
                    }
                );

            }, function(){
                $('.hint').remove();
            });
            
            $('.susidia').hover(function(){
                var posTop = $(this).offset().top + 24;
                var posLeft = $(this).offset().left + $(this).width() + 80;
                $('body').append(
                    '<div class="hint">Текст про субсидии</div>'
                );
                $('.hint').css(
                    {
                        top: posTop + 'px',			
                        left: posLeft + 'px'			
                    }
                );

            }, function(){
                $('.hint').remove();
            });
            
            $('.grant').hover(function(){
                var posTop = $(this).offset().top + 24;
                var posLeft = $(this).offset().left + $(this).width() + 80;
                $('body').append(
                    '<div class="hint">Текст про граеты</div>'
                );
                $('.hint').css(
                    {
                        top: posTop + 'px',			
                        left: posLeft + 'px'			
                    }
                );

            }, function(){
                $('.hint').remove();
            });
            
            $('.project').hover(function(){
                var posTop = $(this).offset().top + 24;
                var posLeft = $(this).offset().left + $(this).width() + 80;
                $('body').append(
                    '<div class="hint">Текст про Проектное финансирование</div>'
                );
                $('.hint').css(
                    {
                        top: posTop + 'px',			
                        left: posLeft + 'px'			
                    }
                );

            }, function(){
                $('.hint').remove();
            });
        }
    });
});
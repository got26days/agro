$(document).ready(function(){
	/*team*/          
    $('#js-calc-team-slider').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      infinite: false,
      responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 3
              }
            },{
              breakpoint: 768,
              settings: {
                slidesToShow: 1
              }
            }
        ]
    });
	/*partners*/
	$('#js-calc-partners-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      infinite: false
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
	
 	/*кнопка скролл*/
    $('.js-scroll').click(function(e){
         e.preventDefault();
         var anchor = $(this).attr("href");
         var scroll_el = $(anchor);
         if ($(scroll_el).length != 0) { 
             $('html, body').animate({ scrollTop: $(scroll_el).offset().top}, 250); 
         }
    });
	
	/*menu*/
	$('.js-menu-btn').on('click', function(){
		$('#js-header-hide').add('#js-header-mob').toggleClass('open');
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
	$("select").change(function(){
		if($(this).val() !== 0){
			$(this).closest('.js-label').addClass('val');
		} else{
			$(this).closest('.js-label').removeClass('val');
		}
	});
	
	$(".js-input").focusin(function(){
		$(this).closest('.js-label').addClass('focus');
	});
	$(".js-input").focusout(function(){
		$(this).closest('.js-label').removeClass('focus');
	});	
	$(".js-input").change(function(){
		if($(this).val().trim()){
    		$(this).closest('.js-label').addClass('val');
		} else{
			$(this).closest('.js-label').removeClass('val');
		}
	});
	
	//поле ввода с выпадающем списком
	$(".js-input-drop").on('input', function(){
		if($(this).val().trim()){
			$(this).closest('.js-label').addClass('droped');
			$(this).addClass('droped').next('.js-droped-list').show();
		} else{
			$(this).closest('.js-label').removeClass('droped');
			$(this).removeClass('droped').next('.js-droped-list').hide();
		}
	});
	$(".js-droped-list ul li").on('click', function(){
		$(this).closest('.js-label').addClass('droped');
		var thisText = $(this).text();
		$(this).closest('.js-label').find('.js-input-drop').val(thisText);
		$('.js-input-drop').removeClass('droped').next('.js-droped-list').hide();
		$(this).closest('.js-label').removeClass('droped');
	});
	
	
	$( function() {
		function buildSlider(input, sliderContainer, min, max, value, step){
            var select = input;
            var slider = $( "<div id='slider'></div>" ).appendTo(sliderContainer).slider({
              min: min,
              max: max,
              range: "min",
              value: value,
              step: step,
              slide: function( event, ui ) {
                var valProp = ui.value;
                select.val(valProp);
				$(this).closest('.js-rang-slider').find('.js-slider-txt').html(valProp.toLocaleString('ru'));
				$('.js-min').closest('div').removeClass('error');
				$('.js-max').closest('div').removeClass('error');
              }
            });
            input.on( "change", function() {
				var inputValue = Number($(this).val().replace(/\s/g, ''));
                if(inputValue > max){
                    $(this).val(max);
                    $(this).closest('.js-rang-slider').find('.js-slider-txt').html(max.toLocaleString('ru'));
					$('.js-max').closest('div').addClass('error');
                } else if(inputValue < min){
                    $(this).val(min.toLocaleString('ru'));
					$(this).closest('.js-rang-slider').find('.js-slider-txt').html(min.toLocaleString('ru'));
					$('.js-min').closest('div').addClass('error');
                } else{
					$(this).val(inputValue);
					$(this).closest('.js-rang-slider').find('.js-slider-txt').html(inputValue.toLocaleString('ru'));
					$('.js-min').closest('div').removeClass('error');
					$('.js-max').closest('div').removeClass('error');
				}
				
				slider.slider( "value", inputValue );
            });
            input.closest('.js-rang-slider').find('.js-min').html(min.toLocaleString('ru'));
            input.closest('.js-rang-slider').find('.js-max').html(max.toLocaleString('ru'));
            input.closest('.js-rang-slider').find('.js-slider-txt').html(value.toLocaleString('ru'));
		}
		
		buildSlider($( "#amount-1" ), $( "#slider-range-manager" ), 100000, 3000000, 140000, 10000);
		buildSlider($( "#amount-2" ), $( "#slider-range-grant" ), 100000, 3000000, 400000, 100000);
		buildSlider($( "#amount-3" ), $( "#slider-range-subs" ), 500000, 35000000, 1000000, 500000);
		buildSlider($( "#amount-4" ), $( "#slider-range-credit" ), 1000000, 35000000, 5000000, 500000);
		buildSlider($( "#amount-5" ), $( "#slider-range-project" ), 35000000, 3000000000, 45000000, 10000000);
    });
	
	$('#js-check-toggler').on('click', function(){
		$('.js-rang-slider').toggleClass('disable');
	});
	
	$(window).on('scroll', function(){
		if($(window).scrollTop() > 7){
			$('#js-header').add('#js-header-hide').addClass('fix');
		} else{
			$('#js-header').add('#js-header-hide').removeClass('fix');
		}
		
		if( ($(window).scrollTop() + $(window).height()) > $('#js-form').offset().top ){
			$('#js-scroll-btn').addClass('hide');
		} else{
			$('#js-scroll-btn').removeClass('hide');
		}
	})
	
	
});

function Ftest (obj){
    if (this.ST) return; var ov = obj.value;
    var ovrl = ov.replace (/\d*\.?\d*/, '').length; 
    this.ST = true;
    if (ovrl > 0) {
        obj.value = obj.lang; 
        Fshowerror (obj); 
        return
    }
    obj.lang = obj.value; 
    this.ST = null;
}
function Fshowerror (obj){
    if (!this.OBJ){
        this.OBJ = obj; 
        obj.style.backgroundColor = 'pink'; 
        this.TIM = setTimeout (Fshowerror, 50);
    } else {
        this.OBJ.style.backgroundColor = ''; 
        clearTimeout (this.TIM); 
        this.ST = null; 
        Ftest (this.OBJ); 
        this.OBJ = null;
    }
}
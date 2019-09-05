jQuery(document).ready(function($){
	
	$('.group-start').each(function(){
		var context = $(this);
		$(this).nextUntil(".group-stop").addBack().wrapAll('<div class="group-inner"></div>');
		
		var classArr = $(this).attr('class').split(' ');
		classArr.map(function(item, i){
			if (classArr[i].indexOf("group-id") >= 0){
				var itemid = item.split('_')[1];
				context.closest('.group-inner').addClass(itemid);
			}
		});
	});
	
	$('.group-inner').each(function(){
		$(this).wrap('<div class="group-wrapper"></div>');
	});
	
	$('.be-section.bg-black').each(function(){
		$(this).closest('.group-wrapper').addClass('bg-black');	
	});
	
	$('.set-section-bg').each(function(){
		var src = $(this).find('img').attr('src');
		$(this).closest('.be-section').css({'background-image':'url("'+src+'")'});
	});
	
	$('.page-hero').each(function(){
		var context = $(this);
		$(this).parent().addClass('page-hero-wrapper');
		$(this).parent().parent().addClass('page-hero-wrapper-outer');
		
		var img = $(this).find('img').attr('src');
		$(this).css({'background-image': 'url("'+ img +'")'});
		$(this).append('<span class="scroll-down-arrow"></span>');
		
		$('.scroll-down-arrow').click(function(){
			$('html, body').animate({scrollTop: context.closest('.group-wrapper').next().offset().top}, 500, 'swing');	
		});
		
	});
	
	var social = $('#social .g-social').clone();
	$('#mobile-left').prepend('<h3>- Social:</h3><div class="mobile-social-links">' + social.html() + '</div>');
	$('#mobile-right.g-block').prepend('<h3>- Website:</h3>');
	
	$('.img-grid').each(function(){
		$(this).find('>div').each(function(){
			var src = $(this).find('img').attr('src');
			console.log(src);
			$(this).css({'background-image': 'url("'+src+'")'});
		});
	});
	
	$('.approach-header').each(function(){
		var src = $(this).find('img').attr('src');
		$(this).css({'background-image': 'url("'+ src +'")'});
	});
	
	var i = 0;
	$('body.approach').find('.uk-list').find('li').each(function(){
		i++;
		$(this).prepend('<span class="list-number">'+i+'</span>');
	});
	
	
	$('.industry-insights').find('.uk-panel').each(function(){
		
		var metadate = $(this).find('time');
		$(this).find('.uk-article-meta').html('').append(metadate);
		
		
		var str = $(this).find('.uk-margin').text();
		str = str.split(' ');
		newstr = "";
		for(var i = 0; i <= 9; i++ ){
			newstr += str[i] + " ";
		}
		$(this).find('.uk-margin').text(newstr + '...');
	});
	
	$('.wpcf7-select').each(function(){
		var context = $(this);
		$(this).parent().append('<div class="select-wrapper"><div class="selectlabel">'+context.find('option:first-child').html()+'</div><ul class="selectbox"></ul></div>');
		$(this).find('option').each(function(){
			context.parent().find('.selectbox').append('<li data-value="'+$(this).val()+'">'+$(this).html()+'</li>');
		});
		
		
		
		$(this).parent().find('.selectbox li').click(function(){
			context.parent().find('.selectlabel').html($(this).html());
			context.val($(this).data('value'));
			$(this).closest('.selectbox').slideUp('fast');
		});
	});
	
	$('.selectlabel').click(function(){
		$('.selectlabel').not($(this)).siblings('.selectbox').hide();
		$(this).parent().find('.selectbox').slideToggle('fast');	
	});
	
	
	scrollEvents();
	window.onscroll = function(){
		scrollEvents();
	};
	
	function scrollEvents(){
		if( window.pageYOffset >= $('#g-container-main').outerHeight() - 400){
			$('#g-aside').addClass('unpinned');
		}else{
			$('#g-aside').removeClass('unpinned');
		}
		
		$('.be-animate').each(function(){
			if( window.pageYOffset >= $(this).offset().top - $(window).height() + 100){
				if($(this).hasClass('animate-fade-left')){
					$(this).addClass('do-animate-fade-left');
				}
				if($(this).hasClass('animate-fade-right')){
					$(this).addClass('do-animate-fade-right');
				}
			}
			
		});
	}
	
});
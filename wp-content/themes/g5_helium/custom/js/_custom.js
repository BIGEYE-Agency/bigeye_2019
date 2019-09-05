jQuery(document).ready(function($){
	
	$('.group-start').each(function(){
		var context = $(this);
		$(this).nextUntil(".group-stop").addBack().wrapAll('<div class="group-wrapper"></div>');
		
		var classArr = $(this).attr('class').split(' ');
		classArr.map(function(item, i){
			if (classArr[i].indexOf("group-id") >= 0){
				context.closest('.group-wrapper').addClass(item.split('_')[1]);
			}
		});
	});
	
	$('.page-hero').each(function(){
		$(this).parent().addClass('page-hero-wrapper');
		
		var img = $(this).find('img').attr('src');
		$(this).css({'background-image': 'url("'+ img +'")'});
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
	$('body.our-approach').find('.uk-list').find('li').each(function(){
		i++;
		$(this).prepend('<span class="list-number">'+i+'</span>');
	});
	
	window.onscroll = function(){
		scrollEvents();
	};
	
	function scrollEvents(){
		if( window.pageYOffset >= $('#g-container-main').outerHeight() - 400){
			$('#g-aside').addClass('unpinned');
		}else{
			$('#g-aside').removeClass('unpinned');
		}
	}
	
});
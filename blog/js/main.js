$(function(){

	
	/* zaznaczanie aktywnego elementu w górnym menu */
	(function( items ){
		items
		.on({
			click: function( e ){
				$(this)
				.addClass('active')
				.siblings()
				.removeClass('active');
				
			},
			
		});
		
	})
	( $('#myNavbar > ul > li') );
	
	// autoskalowanie ekranu startowego
	$(window)
	.on({
		resize: function(){
			$('body #home header')
			.height(function(){
				return window.innerHeight - 100;
				
			});
			
		},
		
	});
	
	$(window).triggerHandler('resize');
	
	// chowanie facebooka
	$(window).scroll(function(){
		if($(this).scrollTop()>900){
			$('.facebook').fadeIn();
			
		}
		else{
			$('.facebook').fadeOut();
			
		}
		
	});
	
});

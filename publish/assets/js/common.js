jQuery(function($) {
	var w = jQuery(window);
	var date = new Date();
	date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
	jQuery(document).on('click', '.flag-wrap .flag-list li a', function() {
		var lang = jQuery(this).data('lang');
		var host = window.location.host;
		var locationHost = window.location.protocol + '//' + host;
		$.cookie(
			"language", 
			lang, 
			{
				path: "/", 
				domain: host,
				expires: date//,
				//secure: true
			}
		);
		location.reload();
		return false;
	});
	// Navbar hover dropdown
	function navbarDropdown() {
		function toggleDropdown (e) {
			const _d = $(e.target).closest('.dropdown'),
				_m = $('.dropdown-menu', _d);
			setTimeout(function(){
				const shouldOpen = e.type !== 'click' && _d.is(':hover');
				_m.toggleClass('show', shouldOpen);
				_d.toggleClass('show', shouldOpen);
				$('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen);
			}, e.type === 'mouseleave' ? 300 : 0);
		}
		$('body')
			.on('mouseenter mouseleave','.dropdown',toggleDropdown)
			.on('click', '.dropdown-menu a', toggleDropdown);
	}
	if(w.width() > 991) {
		navbarDropdown();
	}
	w.resize(function() {
		if(w.width() > 991) {
			navbarDropdown();
		}
	});
	// navbar fixed toggle
	var scTop = 0;
	function navFixedToggle() {
		scTop = jQuery(document).scrollTop();
		if(scTop > 40) {
			jQuery('.navbar').addClass('fixed');
		} else {
			jQuery('.navbar').removeClass('fixed');
		}
	}
	navFixedToggle();
	jQuery(document).scroll(function() {
		navFixedToggle();
	});
	// Navbar Active check
	jQuery('.navbar-nav .nav-item').eq(pageNo).siblings().removeClass('active');
	jQuery('.navbar-nav .nav-item').eq(pageNo).addClass('active');
	if(sPageChk == true) {
		jQuery('.navbar-nav .nav-item').eq(pageNo).find('.dropdown-menu .dropdown-item').each(function() {
			if(jQuery(this).data('navno') == sPageNo) {
				jQuery(this).addClass('active');
			}
		});
		//jQuery('.navbar-nav .nav-item').eq(pageNo).find('.dropdown-menu .dropdown-item').eq(sPageNo).addClass('active');
	}
});
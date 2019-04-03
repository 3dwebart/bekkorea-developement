jQuery(function($) {
	var date = new Date();
	date.setTime(date.getTime() + 24 * 60 * 60 * 1000);
	jQuery(document).on('click', '.flag-wrap .flag-list li a', function() {
		alert(11111);
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
});
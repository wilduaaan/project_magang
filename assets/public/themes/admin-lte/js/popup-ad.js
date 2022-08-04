(function($) {
	
	"use strict";
	
	// Cache Selectors
	var mainWindow		=$(window),
		popupAd			=$('#popup-ad');
	
	
	//Popup Ad
	mainWindow.on('load',function(){
		setTimeout(function(){
			popupAd.modal('show');
		}, 2500);
	});
			
})(jQuery);

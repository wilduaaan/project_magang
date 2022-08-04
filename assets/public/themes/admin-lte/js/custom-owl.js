(function($) {
	
	"use strict";
	
	// Cache Selectors
	var hotelOffers		=$("#owl-hotel-offers"),
		tourOffers		=$("#owl-tour-offers"),
		cruiseOffers	=$("#owl-cruise-offers"),
		carOffers		=$("#owl-car-offers"),
		holidayTours	=$(".owl-holidays"),
		testimonials	=$("#owl-testimonials"),
		team			=$("#owl-team"),
		companyLogo		=$("#owl-company-logo"),
		attractions		=$("#owl-attractions");
	
	// Owl Hotel Offers
	hotelOffers.owlCarousel({
		items : 3,
		itemsCustom : false,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [991,2],
		itemsTablet: [768,2],
		itemsTabletSmall: [600,1],
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
	 
		// Navigation
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		rewindNav : true,
		scrollPerPage : false,
	 
		//Pagination
		pagination : false,
		paginationNumbers: false,
	 
		// Responsive 
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,    
	});
	
	
	// Owl Tour Offers
	tourOffers.owlCarousel({
		items : 3,
		itemsCustom : false,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [991,2],
		itemsTablet: [768,2],
		itemsTabletSmall: [600,1],
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
	 
		// Navigation
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		rewindNav : true,
		scrollPerPage : false,
	 
		//Pagination
		pagination : false,
		paginationNumbers: false,
	 
		// Responsive 
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,    
	});
	
	
	// Owl Cruise Offers
	cruiseOffers.owlCarousel({
		items : 2,
		itemsCustom : false,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [991,2],
		itemsTablet: [768,2],
		itemsTabletSmall: [600,1],
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
	 
		// Navigation
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		rewindNav : true,
		scrollPerPage : false,
	 
		//Pagination
		pagination : false,
		paginationNumbers: false,
	 
		// Responsive 
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,    
	});
	
	
	// Owl Car Offers
	carOffers.owlCarousel({
		items : 3,
		itemsCustom : false,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [991,2],
		itemsTablet: [768,2],
		itemsTabletSmall: [767,1],
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
	 
		// Navigation
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		rewindNav : true,
		scrollPerPage : false,
	 
		//Pagination
		pagination : false,
		paginationNumbers: false,
	 
		// Responsive 
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,    
	});
	
	
	// Owl Holiday Tours
	holidayTours.owlCarousel({
		items : 3,
		itemsCustom : false,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [991,2],
		itemsTablet: [768,2],
		itemsTabletSmall: [767,1],
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
	 
		// Navigation
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		rewindNav : true,
		scrollPerPage : false,
	 
		//Pagination
		pagination : false,
		paginationNumbers: false,
	 
		// Responsive 
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,    
	});
	
	
	// Owl Testimonials
	testimonials.owlCarousel({
		items : 1,
		itemsCustom : false,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [991,1],
		itemsTablet: [768,1],
		itemsTabletSmall: [600,1],
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
	 
		// Navigation
		navigation : false,
		rewindNav : true,
		scrollPerPage : false,
	 
		//Pagination
		pagination : true,
		paginationNumbers: false,
	 
		// Responsive 
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,    
	});
	
	
	// Owl Team
	team.owlCarousel({
		items : 4,
		itemsCustom : false,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [991,2],
		itemsTablet: [768,2],
		itemsTabletSmall: [600,2],
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
	 
		// Navigation
		navigation : false,
		rewindNav : true,
		scrollPerPage : false,
	 
		//Pagination
		pagination : true,
		paginationNumbers: false,
	 
		// Responsive 
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,    
	});
	
	
	// Owl Company
	companyLogo.owlCarousel({
		items : 4,
		itemsCustom : false,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [991,2],
		itemsTablet: [767,3],
		itemsTabletSmall: [600,3],
		itemsMobile : [479,2],
		singleItem : false,
		itemsScaleUp : false,
	 
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
	 
		// Navigation
		navigation : false,
		navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		rewindNav : true,
		scrollPerPage : false,
	 
		//Pagination
		pagination : false,
		paginationNumbers: false,
	 
		// Responsive 
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,    
	});
	
	
	// Owl Attractions
	attractions.owlCarousel({
		items : 2,
		itemsCustom : false,
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [991,1],
		itemsTablet: [767,1],
		itemsTabletSmall: [600,1],
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
	 
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
	 
		// Navigation
		navigation : true,
		navigationText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		rewindNav : true,
		scrollPerPage : false,
	 
		//Pagination
		pagination : false,
		paginationNumbers: false,
	 
		// Responsive 
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,    
	});

})(jQuery);

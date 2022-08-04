

 $('.feature-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.feature-slider-nav',
  autoplay: true,
  autoplaySpeed: 4000,
  adaptiveHeight: true
});


/*$('.feature-slider-nav').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.feature-slider',
  dots: false,
  centerMode: true,
  focusOnSelect: true
});*/


$('.feature-slider-nav').slick({
  centerMode: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  focusOnSelect: true,
  asNavFor: '.feature-slider',
  autoplay: true,
  autoplaySpeed: 4000,
  adaptiveHeight: true,
  infinite:true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2
      }
    }
  ]
});

var wow = new WOW();
wow.init();

$( document ).ready(function() {


  //dropdown-zabolevaniya
// dropdown-metody
/*
$('.zabolevaniya-toggle').click(function(e) {

  console.log(1213);
  e.preventDefault();
  $('.dropdown-zabolevaniya').click();

});
*/


  let scrollbarWidth = $( document ).offsetWidth - $( document ).offsetWidth;

    $('.reviews__list').slick({
        lazyLoad: 'ondemand',
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        appendDots: $('.reviews__dots')
    });
    
    
    
      $('.results__list').slick({
        lazyLoad: 'ondemand',
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        appendDots: $('.results__dots'),
        responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
    });


});





var scrolled = false;

$(window).scroll(function() {
  
  var menuscroll = $('.header__top').outerHeight();

    if($(window).scrollTop() > menuscroll && scrolled == false){
         $('body').addClass('scrolled');
      scrolled = true;
    } else if($(window).scrollTop() < menuscroll) {
      scrolled = false;
      $('body').removeClass('scrolled');
    }
});



$(window).scroll(function() {

  var winScroll = $(window).scrollTop();

  var height = document.body.scrollHeight - $( window ).height();;


  var scrolled = (winScroll / height) * 100;

  
  $('.progress-bar').css('width', scrolled + '%');
});



$(".nav-item").each(function() {

  if('/'+$(this).children('.nav-link').attr('href') == $(location).attr("pathname")) {
    $(this).addClass('active');
  }


});


$('.dropdown-toggle').click(function() {

  if (window.matchMedia('all and (min-width: 992px)').matches) {
    $('.navbar').ready(function() {
      $('.dropdown').removeClass('show');
      $('.dropdown-menu').removeClass('show');
    });
    

  }

});

//dropdown-zabolevaniya
// dropdown-metody
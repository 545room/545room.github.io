$('.marquee').marquee({
    duration: 30000,
    startVisible: true,
    duplicated: true
});



AOS.init({
  offset: 300, // offset (in px) from the original trigger point
  duration: 2000, // values from 0 to 3000, with step 50ms
  once: true, // whether animation should happen only once - while scrolling down
});

var rellax = new Rellax('.first-scr__rellax', {
    speed: 2,
    center: true,
  });

var rellax = new Rellax('.second-scr__rellax', {
    speed: 3,
    center: true,
  });

$("body").on('click', '[href*="#"]', function(e){
  var fixed_offset = 10;
  $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 10);
  e.preventDefault();
});


$(document).ready(function(){
  $('.menu-tab').click(function(){
    $('.menu-hide').toggleClass('show');
    $('.menu-tab').toggleClass('active');
  });
  $('a').click(function(){
    $('.menu-hide').removeClass('show');
    $('.menu-tab').removeClass('active');
  });
});

$(document).ready(function(){
  $('.call-btn-tab').click(function(){
    $('.call-btn-tab__active').fadeToggle(400);
    $('.call-btn-tab__close').fadeToggle(400);
    $('.call-btn__block').fadeToggle(400);
  });
});

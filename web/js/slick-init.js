$(document).ready(function(){
  var time = 6;
  var $bar,
      $slick,
      isPause,
      tick,
      percentTime;
  
  $slick = $('.slider-oneVers__img-slides');
  $slick.slick({
    speed: 600,
    draggable: false,
    arrows: false,
    adaptiveHeight: false,
    mobileFirst: false,
    pauseOnDotsHover: true,
  });

  $slick = $('.slider-oneVers__content-slides');
  $slick.slick({
    speed: 800,   
    arrows: false, 
      draggable: false,
    asNavFor: ".slider-oneVers__img-slides",
    fade: true,
    dots: true,
  });

  
  $bar = $('.slider-progress .progress');
  
  $('.slider-oneVers__right-block').on({
    mouseenter: function() {
      isPause = true;
    },
    mouseleave: function() {
      isPause = false;
    }
  })
  
  function startProgressbar() {
    resetProgressbar();
    percentTime = 0;
    isPause = false;
    tick = setInterval(interval, 10);
  }
  
  function interval() {
    if(isPause === false) {
      percentTime += 1 / (time+0.1);
      $bar.css({
        width: percentTime+"%"
      });
      if(percentTime >= 100)
        {
          $slick.slick('slickNext');
          startProgressbar();
        }
    }
  }
  
  
  function resetProgressbar() {
    $bar.css({
     width: 0+'%' 
    });
    clearTimeout(tick);
  }
  
  startProgressbar();
  
});
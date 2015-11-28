var Main = (function ($) {
  return {
    moveLetters: function () {
      $('.letter').each(function() {
        numRand = Math.floor(Math.random() * 1001);
        tH = $(this).height();
        tW = $(this).width();
        origPos = $(this).position();
        offX = (Math.random() * ($(document).width() - tW)).toFixed();
        offY = (Math.random() * ($(document).height() - tH)).toFixed();
        
        $(this).offset({ top: offY, left: offX }).animate({
          'top': origPos.top, 
          'left': origPos.left
        }, 800);
      });
    },
    draggable: function () {
      setTimeout(function() {
        $('.letter').pep({
          velocityMultiplier: 1.7
        });
      }, 100);
    },
    initMain: function () {
      $(document).ready(function () {
        Main.moveLetters();
        Main.draggable();
      })
    }
  };
// Pass in jQuery.
})(jQuery);

Main.initMain();

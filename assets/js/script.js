(function(win, doc) {
  var ScrollPoint;
  var Scrollnum;

  $(function(){
    $(window).scroll(function () {
      Scrollnum = $(window).scrollTop()/15;
      ScrollPoint = Math.round(Scrollnum);
      if (ScrollPoint > 55) {
        $('#logo').css({'opacity':'100'});
      } else {
        $('#logo').css({'opacity':'100'});
      }
    });

    var DiffCounter = 1;
    setInterval(function(){
      if (DiffCounter < 2) {
        $('#top-back').css({'background':'url(/wp-content/themes/kadakada/assets/img/top-' + DiffCounter + '.jpg)','background-size':'cover'});
        DiffCounter++;
      } else {
          $('#top-back').css({'background':'url(/wp-content/themes/kadakada/assets/img/top-' + DiffCounter + '.jpg)','background-size':'cover'});
          DiffCounter = 0;
      }
    },4000);
  });

  var index = 0;

  $('.modal-pre').on('click', function(){

      var index = $('.modal-pre').index(this);
      $(".modal-pre").eq(index).attr('id', 'clicked');
      $(".close-btn").eq(index).attr('id', 'active');
      $('.close-btn').on('click', function(){
            event.stopPropagation();
            $(".modal-pre").eq(index).removeAttr('id', 'clicked');
            $(".close-btn").eq(index).removeAttr('id', 'active');
      });
});
})(this, document);　

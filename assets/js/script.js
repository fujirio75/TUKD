(function(win, doc) {

  function mypreload() {
    for(var i = 0; i< arguments.length; i++){
        $("<img>").attr("src", arguments[i]);
    }
  }
  //関数の呼び出し。引数には先読みしておく画像のパスを指定
  mypreload(wp_path + '/assets/img/top-0.jpg', wp_path + '/assets/img/top-1.jpg',wp_path + '/assets/img/top-2.jpg',wp_path + '/assets/img/top-3.jpg');


  var ScrollPoint;
  var Scrollnum;

  $(function(){
    $(window).scroll(function () {
      Scrollnum = $(window).scrollTop()/15;
      ScrollPoint = Math.round(Scrollnum);
      if (ScrollPoint > 23) {
        $("#logo").attr('class', 'header-logo header-logo-folded');
      } else {
        $("#logo").removeAttr('class', 'header-logo-folded');
        $("#logo").attr('class', 'header-logo');
      }
    });

    var DiffCounter = 1;
    setInterval(function(){
      if (DiffCounter < 3) {
        $('#top-back').css({'background':'url(' + wp_path + '/assets/img/top-' + DiffCounter + '.jpg)','background-size':'cover'});
        DiffCounter++;
      } else {
          $('#top-back').css({'background':'url(' + wp_path + '/assets/img/top-' + DiffCounter + '.jpg)','background-size':'cover'});
          DiffCounter = 0;
      }
    },6000);
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

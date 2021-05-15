jQuery(function(){
  var pagetop = $('#page_top');
  // ボタン非表示
  pagetop.hide();
  // 100px スクロールしたらボタン表示
  $(window).scroll(function () {
     if ($(this).scrollTop() > 100) {
          pagetop.fadeIn();
     } else {
          pagetop.fadeOut();
     }
  });
  pagetop.click(function () {
     $('body, html').animate({ scrollTop: 0 }, 500);
     return false;
  });
});

jQuery(function () {

  // aimation呼び出し
  if ($('.js-trigger').length) {
      scrollAnimation();
  }

  // aimation関数
  function scrollAnimation() {
      $(window).scroll(function () {
          $(".js-trigger").each(function () {
              let position = $(this).offset().top,
                  scroll = $(window).scrollTop(),
                  windowHeight = $(window).height();

              if (scroll > position - windowHeight + 100) {
                  $(this).addClass('is-active');
              }
          });
      });
  }
  $(window).trigger('scroll');

});

jQuery(function () {

  // aimation呼び出し
  if ($('.js-scrool-triger').length) {
      scrollAnimation();
  }

  // aimation関数
  function scrollAnimation() {
      $(window).scroll(function () {
          $(".js-scrool-triger").each(function () {
              let position = $(this).offset().top,
                  scroll = $(window).scrollTop(),
                  windowHeight = $(window).height();

              if (scroll > position - windowHeight + 100) {
                  $(this).addClass('is-active');
              }
          });
      });
  }
  $(window).trigger('scroll');

});

jQuery(document).ready(function(){

  $('.p-main-img__title').fadeIn(2000);
  
  });
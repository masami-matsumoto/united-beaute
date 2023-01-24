jQuery(function ($) {
  $(".openbtn").click(function () { //ボタンがクリックされたら
    $(this).toggleClass('active'); //ボタン自身に activeクラスを付与し
    $("#g-nav").toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与
  });

  $("#g-nav a").click(function () { //ナビゲーションのリンクがクリックされたら
    $(".openbtn").removeClass('active'); //ボタンの activeクラスを除去し
    $("#g-nav").removeClass('panelactive'); //ナビゲーションのpanelactiveクラスも除去
  });
});
// blurTriggerにblurというクラス名を付ける定義

function BlurTextAnimeControl() {
  $('.blurTrigger').each(function () { //blurTriggerというクラス名が
    var elemPos = $(this).offset().top - 50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('blur'); // 画面内に入ったらblurというクラス名を追記
    } else {
      $(this).removeClass('blur'); // 画面外に出たらblurというクラス名を外す
    }
  });
}

function fadeAnime() {

  //動きの指定
  $('.fadeInTrigger').each(function () { //fadeInTriggerというクラス名が
    var elemPos = $(this).offset().top - 50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('fadeIn'); // 画面内に入ったらfadeInというクラス名を追記
    } else {
      $(this).removeClass('fadeIn'); // 画面外に出たらfadeInというクラス名を外す
    }
  });

}
// TextRandomAnimeにappearRandomtextというクラス名を付ける定義
function TextRandomAnimeControl() {
  $('.TextRandomAnime').each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass("appearRandomtext");

    } else {
      $(this).removeClass("appearRandomtext");
    }
  });
}

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  BlurTextAnimeControl(); /* アニメーション用の関数を呼ぶ*/
  fadeAnime();
  //spanタグを追加する
  var element = $(".TextRandomAnime");
  element.each(function () {
    var text = $(this).text();
    var textbox = '';
    text.split('').forEach(function (t) {
      textbox += '<span>' + t + '</span>';
    });
    $(this).html(textbox);
  });

  TextRandomAnimeControl(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述


(function () {
  'use strict';
  /* flow01
  ------------------------------*/

  (function () {
    const mySwiper_main = new Swiper('.flow01 .swiper-main', {
      spaceBetween: 24,
      centeredSlides: true,
      grabCursor: true,
      navigation: {
        nextEl: '.flow01 .swiper-button-next',
        prevEl: '.flow01 .swiper-button-prev',
      },
      breakpoints: {
        1025: {
          spaceBetween: 80,
        }
      },
    });
  }());
})();

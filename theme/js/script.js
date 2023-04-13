$(function () {
  $(document).ready(function () {
    $('.banner-close').click(function () {
      $(this).parent().hide();
    });
  });
});
//3. 画像のモーダル
$(".gallery").modaal({
  type: 'image',
  overlay_close: true, //モーダル背景クリック時に閉じるか
  before_open: function () { // モーダルが開く前に行う動作
    $('html').css('overflow-y', 'hidden'); /*縦スクロールバーを出さない*/
  },
  after_close: function () { // モーダルが閉じた後に行う動作
    $('html').css('overflow-y', 'scroll'); /*縦スクロールバーを出す*/
  }
});
$('#page-link a[href*="#"]').click(function () { //全てのページ内リンクに適用させたい場合はa[href*="#"]のみでもOK
  var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
  var pos = $(elmHash).offset().top; //idの上部の距離を取得
  $('body,html').animate({
    scrollTop: pos
  }, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
  return false;
});
$(".openbtn").click(function () { //ボタンがクリックされたら
  $(this).toggleClass('active'); //ボタン自身に activeクラスを付与し
  $("#g-nav").toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与

});

$("#g-nav a").click(function () { //ナビゲーションのリンクがクリックされたら
  $(".openbtn").removeClass('active'); //ボタンの activeクラスを除去し
  $("#g-nav").removeClass('panelactive'); //ナビゲーションのpanelactiveクラスも除去
});


//スクロールした際の動きを関数でまとめる
function PageTopAnime() {
  var scroll = $(window).scrollTop();
  if (scroll >= 200) { //上から200pxスクロールしたら
    $('#page-top').removeClass('DownMove'); //#page-topについているDownMoveというクラス名を除く
    $('#page-top').addClass('UpMove'); //#page-topについているUpMoveというクラス名を付与
  } else {
    if ($('#page-top').hasClass('UpMove')) { //すでに#page-topにUpMoveというクラス名がついていたら
      $('#page-top').removeClass('UpMove'); //UpMoveというクラス名を除き
      $('#page-top').addClass('DownMove'); //DownMoveというクラス名を#page-topに付与
    }
  }
}
// #page-topをクリックした際の設定
$('#page-top a').click(function () {
  $('body,html').animate({
    scrollTop: 0 //ページトップまでスクロール
  }, 500); //ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false; //リンク自体の無効化
});

// 動きのきっかけの起点となるアニメーションの名前を定義
function fadeAnime() {
  // 4-1 ふわっ（その場で）
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

  // 4-4 ボンッ（拡大）
  $('.zoomOutTrigger').each(function () { //zoomOutTriggerというクラス名が
    var elemPos = $(this).offset().top; //要素上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      $(this).addClass('zoomOut'); // 画面内に入ったらzoomOutというクラス名を追記
    } else {
      $(this).removeClass('zoomOut'); // 画面外に出たらzoomOutというクラス名を外す
    }
  });

}

function slideAnime() {
  //====左に動くアニメーションここから===
  $('.leftAnime').each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      //左から右へ表示するクラスを付与
      //テキスト要素を挟む親要素（左側）とテキスト要素を元位置でアニメーションをおこなう
      $(this).addClass("slideAnimeLeftRight"); //要素を左枠外にへ移動しCSSアニメーションで左から元の位置に移動
      $(this).children(".leftAnimeInner").addClass("slideAnimeRightLeft"); //子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
    } else {
      //左から右へ表示するクラスを取り除く
      $(this).removeClass("slideAnimeLeftRight");
      $(this).children(".leftAnimeInner").removeClass("slideAnimeRightLeft");

    }
  });

}
// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  PageTopAnime(); /* スクロールした際の動きの関数を呼ぶ*/
  fadeAnime();
  slideAnime();
});

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  PageTopAnime();
  fadeAnime(); /* アニメーション用の関数を呼ぶ*/
  slideAnime();
}); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

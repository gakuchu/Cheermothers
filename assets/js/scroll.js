jQuery(function(){
  jQuery('a[href^="#"]').click(function() {// # クリック処理
    var speed = 700; //スクロール速度ミリ秒
    var href= jQuery(this).attr("href"); // アンカーの値取
    // 移動先を取得
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;// 移動先を数値で取得
    // スムーススクロール
    jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});
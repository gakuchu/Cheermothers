<?php

//jqueryを読み込む
function add_files() {
  // WordPress本体のjquery.jsを読み込まない
  wp_deregister_script('jquery');

  // jQueryの読み込み
  wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js' );
}
add_action( 'wp_enqueue_scripts', 'add_files' );

//デフォルトのcssを読み込む
function default_enqueue_scripts() {
//  wp_enqueue_style( 'default-style', get_stylesheet_uri() );
  wp_enqueue_style( 'default-style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/custom.css' );
  wp_enqueue_style( 'mobile-style', get_template_directory_uri() . '/assets/css/mobile.css' );
  wp_enqueue_style( 'img-style', get_template_directory_uri() . '/assets/css/img.css' );
  wp_enqueue_script( 'scroll-script', get_template_directory_uri() . '/assets/js/scroll.js' );
}
add_action( 'wp_enqueue_scripts', 'default_enqueue_scripts' );

// アイキャッチを有効化
add_theme_support( 'post-thumbnails' );

//カスタム投稿タイプを登録
function new_post_type() {
  register_post_type(
    'blog',//投稿タイプ名（識別子）
    array(
      'label' => 'ブログ',
      'labels' => array(
        'add_new_item' => '新規ブログを追加',
        'edit_item' => 'ブログ',
        'view_item' => 'ブログを表示',
        'search_items' => 'ブログを検索',
      ),
      'public' => true,// 管理画面に表示しサイト上にも表示する
      'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
      'has_archive' => true,//trueにすると投稿した記事のアーカイブページを生成
      'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
        'title',//タイトル
        'editor',//本文（の編集機能）
        'thumbnail',//アイキャッチ画像
        'custom-fields',
        'excerpt'//抜粋
      ),
      'menu_position' => 5//「投稿」の下に追加
    )
  );
  flush_rewrite_rules();
}
add_action('init', 'new_post_type');

//contact.phpにform.cssを読み込む
function form_styles() {
  if (is_page(array('contact'))) {
    wp_enqueue_style( 'form-css', get_template_directory_uri() . '/assets/css/form.css' );
  }
}
add_action('wp_print_styles', 'form_styles');

// body_classからblogクラスを削除
add_filter('body_class', 'remove_body_class', 20, 2);
function remove_body_class($wp_classes)
{
  foreach($wp_classes as $key => $value)
  {
    if ($value == 'blog') unset($wp_classes[$key]);
  } 
  return $wp_classes;
}
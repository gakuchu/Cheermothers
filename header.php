<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>チアーマザーズ株式会社</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700|Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>

  <body <?php body_class(); ?>>

    <header>
      <div id="nav_toggle">
        <div>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <nav class="menu">
        <ul>
          <li><a href="<?php echo esc_url( home_url() ); ?>"<?php if( is_front_page() ) echo ' class="current"'; ?>>HOME</a></li>
          <li><a href="<?php echo esc_url( home_url( '/service/' ) ); ?>"<?php if( is_page('service') ) echo ' class="current"'; ?>>SERVICE</a></li>
          <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"<?php if( !is_front_page() && get_post_type() === 'blog' ) echo ' class="current"'; ?>>BLOG</a></li>
          <li><a href="<?php echo esc_url( home_url( '/company/' ) ); ?>"<?php if( is_page('company') ) echo ' class="current"'; ?>>COMPANY</a></li>
          <li><a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>"<?php if( is_page('recruit') ) echo ' class="current"'; ?>>RECRUIT</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"<?php if( is_page('contact') ) echo ' class="current"'; ?>>CONTACT</a></li>
        </ul>
      </nav>
      <a href="<?php echo esc_url( home_url() ); ?>">
        <div class="logo"></div>
      </a>
      <?php wp_head(); ?>
      
      <script>
        $(function(){
          $('#nav_toggle').click(function(){
            $("header").toggleClass('open');
            $("nav").fadeToggle(500);
            $('html').toggleClass('scroll-prevent') // 追記
          });
        });
      </script>
    </header>
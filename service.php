<?php
/*
Template Name: Service
*/
?>
 
<?php get_header(); ?>
 
<main class="service">
  <div class="hero">
    <div class="dark">SERVICE</div>
    <a href="tel:0363624429"><div class="fuki"></div></a> 
  </div>
  <article class="links">
    <div class="block">
      <div class="block_detail">
        <a class="box" href="<?php echo esc_url( home_url( '/service_1/' ) ); ?>">
          <div class="box_detail">
            <h3>営業代行サービス「テレマザ」</h3>
            <p>新規開拓の中で最も労力のかかる「初期アプローチ」を成果報酬型で代行します。</p>
          </div>
          <div class="img"></div>
          <div class="readmore"></div>
        </a>
        <a class="box" href="<?php echo esc_url( home_url( '/service_2/' ) ); ?>">
          <div class="box_detail">
            <h3>事務代行サービス「サポマザ」</h3>
            <p>雑務として発生しやすい商品登録や数値収集・入力や手書き資料のデジタル化などを幅広くサポート。</p>
          </div>
          <div class="img"></div>
          <div class="readmore"></div>
        </a>
      </div>
    </div>
  </article>
</main>
  
<?php get_footer(); ?> 
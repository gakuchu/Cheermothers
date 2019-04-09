<?php
/*
Template Name: Service_2
*/
?>
 
<?php get_header(); ?>
 
<main class="service_2">
  <div class="hero">
    <div class="dark">SERVICE</div>
    <a href="tel:0363624429"><div class="fuki"></div></a> 
  </div>
  <article class="about">
    <h2>事務代行サービス「サポマザ」</h2>
    <div class="block">
      <h3>サポマザとは</h3>
      <p>
        社内で日々、雑務として発生しやすい商品登録や数値収集・入力や手書き資料のデジタル化などを幅広くサポート。<br>
        お母さんスタッフが、丁寧かつ質の高い事務代行を実現します！
      </p>
      <div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/service_2_1.jpeg" />
      </div>
      <h3>料金</h3>
      <div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/service_2_price.jpeg" />
      </div>
    </div>
  </article>
  <?php get_template_part('template-part/contact-link'); ?>
</main>
  
<?php get_footer(); ?> 
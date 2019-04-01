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
            <h3>アウトソーシング事業</h3>
            <p>弊社は”営業代行”「テレマザ」 と、”受電、事務業務”「サポマザ」の２つでお客様をサポートします！</p>
          </div>
          <div class="img"></div>
          <div class="readmore"></div>
        </a>
        <a class="box" href="<?php echo esc_url( home_url( '/service_2/' ) ); ?>">
          <div class="box_detail">
            <h3>保育事業</h3>
            <p>子供たちの「やりたい」「学びたい」を尊重し、「敏感期」という考え方に基づいて保育に取り組みます。</p>
          </div>
          <div class="img"></div>
          <div class="readmore"></div>
        </a>
      </div>
    </div>
  </article>
</main>
  
<?php get_footer(); ?> 
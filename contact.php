<?php
/*
Template Name: Contact
*/
?>
 
<?php get_header(); ?>
 
<main id="contact">
  <div class="hero">
    <p><span>お問い合わせ</span></p>
  </div>
  <article class="form_box">
    <?php if (have_posts()):
      while (have_posts()) :
        the_post();
        the_content();
      endwhile;
    endif; ?>
  </article>
</main>
  
<?php get_footer(); ?> 
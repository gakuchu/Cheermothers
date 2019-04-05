<?php
/*
Template Name: Hoiku
*/
?>
 
<?php get_header(); ?>
 
<main class="hoiku">
  <div class="hero">
    <div class="dark">にこにこキッズ保育園</div>
    <a href="tel:0363624429"><div class="fuki"></div></a> 
  </div>
  <article>
    <div class="block">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content();?>
      <?php endwhile; ?>
    </div>
  </article>
  <?php get_template_part('template-part/contact-link'); ?>
</main>
  
<?php get_footer(); ?> 
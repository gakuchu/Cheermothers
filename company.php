<?php
/*
Template Name: Company
*/
?>
 
<?php get_header(); ?>
 
<main class="company">
  <div class="hero">
    <div class="dark">COMPANY</div>
    <a href="tel:0363624429"><div class="fuki"></div></a> 
  </div>
  <article>
    <div class="block">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content();?>
      <?php endwhile; ?>
    </div>
  </article>
</main>
  
<?php get_footer(); ?> 
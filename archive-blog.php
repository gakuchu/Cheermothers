<?php
/*
Template Name: Archive-Blog
*/
?>
 
<?php get_header(); ?>
  
<main id="blog">
  <div class="hero">
    <div class="dark"></div>
    <p><span>BLOG</span></p>
    <a href=""><div class="fuki"></div></a> 
  </div>
  <?php if( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
  <a href="<?php the_permalink(); ?>">
    <article class="post-news">
      <p>
        <time class="time"><?php echo get_the_date(); ?></time>
        <b><?php the_title(); ?></b>
      </p>
      <?php the_excerpt(); ?>
    </article>
  </a>
  <?php endwhile; ?>
  <?php endif; ?>
</main>
  
<?php get_footer(); ?> 
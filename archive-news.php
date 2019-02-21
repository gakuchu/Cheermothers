<?php
/*
Template Name: Archive-News
*/
?>
 
<?php get_header(); ?>
  
<main id="news">
  <div class="hero">
    <p><span>お知らせ</span></p>
  </div>
  <?php if( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
  <a href="<?php the_permalink(); ?>">
    <article class="post-news">
      <p>
        <time class="time"><?php echo get_the_date(); ?></time>
        <b><?php the_title(); ?></b>
      </p>
    </article>
  </a>
  <?php endwhile; ?>
  <?php endif; ?>
</main>
  
<?php get_footer(); ?> 
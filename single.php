<?php get_header(); ?>

<main>
  <div class="hero">
    <p><span>NEWS</span></p>
  </div>
  <?php while( have_posts() ) : the_post(); ?>    
    <article class="post-news">
      <h2><?php the_title(); ?></h2>
      <time class="time"><?php echo get_the_date(); ?></time>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</main>


<?php get_footer(); ?>
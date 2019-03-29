<?php get_header(); ?>

<main>
  <div class="hero">
    <div class="dark"></div>
    <p><span>BLOG</span></p>
    <a href=""><div class="fuki"></div></a> 
  </div>
  <?php while( have_posts() ) : the_post(); ?>    
    <article class="post-news">
      <div class="bloginfo">
        <h2><?php the_title(); ?></h2>
        <div class="auther">
          <span class="auther_icon"><?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?></span>
          <span class="auther_name"><?php the_author(); ?></span>
        </div>
        <time class="time"><?php echo get_the_date(); ?></time>
      </div>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
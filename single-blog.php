<?php get_header(); ?>

<main class="single_blog">
  <div class="hero">
    <div class="dark">BLOG</div>
    <a href=""><div class="fuki"></div></a> 
  </div>
  <?php while( have_posts() ) : the_post(); ?>    
    <article>
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
    <nav>
      <?php
        previous_post_link('%link', '前の記事 : %title');
        next_post_link('%link', '次の記事 : %title');
      ?>
    </nav>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main class="single-recruit">
  <div class="hero">
    <div class="dark">RECRUIT</div>
    <a href="tel:0363624429"><div class="fuki"></div></a> 
  </div>

  <article class="about">
    <?php while ( have_posts() ) : the_post(); ?>
    <h2>
      <?php
      if(mb_strlen($post->post_title, 'UTF-8')>55){
        $title= mb_substr($post->post_title, 0, 55, 'UTF-8');
        echo $title.'...';
      }else{
        echo $post->post_title;
      }
      ?>
    </h2>
    <div class="block">
      <?php the_content();?>
    </div>
    <?php endwhile; ?>
  </article>

</main>

<?php get_footer(); ?> 
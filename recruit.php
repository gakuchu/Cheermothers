<?php
/*
Template Name: Recruit
*/
?>

<?php get_header(); ?>
 
<main class="recruit">
  <div class="hero">
    <div class="dark">RECRUIT</div>
    <a href="tel:0363624429"><div class="fuki"></div></a> 
  </div>
  
  <article class="about">
    <h2>子どもの近くで「働く」<br class="pc">託児所付きコールセンターコールスタッフ</h2>
    <div class="block">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content();?>
      <?php endwhile; ?>
    </div>
  </article>

 </main>
  
<?php get_footer(); ?> 
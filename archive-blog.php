<?php
/*
Template Name: Archive-Blog
*/
?>
 
<?php get_header(); ?>
  
<main class="archive_blog">
  <div class="hero">
    <div class="dark">BLOG</div>
    <a href="tel:0363624429"><div class="fuki"></div></a> 
  </div>
  
  <div class="block_detail">
    <?php
    $args = array(
      'numberposts' => 10,      //表示（取得）する記事の数
      'post_type' => 'blog'    //投稿タイプの指定
    );
    $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
    <a href="<?php the_permalink(); ?>">
      <article>
        <p>
          <time class="time"><?php echo get_the_date(); ?></time>
          <b><?php
            if(mb_strlen($post->post_title, 'UTF-8')>50){
              $title= mb_substr($post->post_title, 0, 50, 'UTF-8');
              echo $title.'...';
            }else{
              echo $post->post_title;
            }
            ?>
          </b>
          <?php the_excerpt(); ?>
        </p>
      </article>
    </a>
   
    <?php endforeach; ?>
    <?php the_posts_pagination( array(
  'prev_text' => __( '前へ', 'textdomain' ),
  'next_text' => __( '次へ', 'textdomain' ),
) ); ?>
    <?php else : ?>
    <p class="blogzero">現在サイトのメンテナンス中です。</p>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
  </div>
</main>
  
<?php get_footer(); ?> 
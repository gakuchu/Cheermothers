<?php get_header(); ?>

<main>
  <div class="hero">
    <div class="fuki"></div>
  </div>
  <article class="service">
    <div class="block">
      <div class="block_head">SERVICE</div>
      <div class="block_detail">
        <a class="box img"></a>
        <a class="box img"></a>
        <a class="box img"></a>
      </div>
    </div>
  </article>
  <article class="blog">
    <div class="block">
      <div class="block_head">BLOG</div>
      <div class="block_detail">
        <?php
        $args = array(
          'numberposts' => 6,      //表示（取得）する記事の数
          'post_type' => 'blog'    //投稿タイプの指定
          );
        $posts = get_posts( $args );
        if( $posts ) : foreach( $posts as $post ) : setup_postdata( $post ); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="box">
            <div class="blog_img img">
              <?php 
              if ( has_post_thumbnail() ) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
                the_post_thumbnail();
              } 
              ?>
            </div>
            <div class="blog_content">
              <time class="time"><?php echo get_the_date(); ?></time>
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?><div class="read_more">続きを読む</div>
            </div>
          </div>
        </a>
        <?php endforeach; ?>
        <?php else : ?>
        <p class="blogzero">ブログがないよ</p>
        <?php endif;
        wp_reset_postdata(); //クエリのリセット ?>
      </div>
    </div>
  </article>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main>
  <div class="hero">
    <a href="tel:0363624429"><div class="fuki"></div></a>
    <div class="message">
      <h1>
        女性の力を社会に活かし、<br>
        顧客満足の高い営業支援・保育事業を提供しています。
      </h1>
    </div>
  </div>
  <article class="service">
    <div class="block">
      <div class="block_head">SERVICE</div>
      <div class="block_detail">
        <a class="box" href="service_1/">
          <div class="box_detail">
            <h3>営業代行サービス「テレマザ」</h3>
            <p>新規開拓の中で最も労力のかかる「初期アプローチ」を成果報酬型で代行します。</p>
          </div>
          <div class="img"></div>
          <div class="readmore"></div>
        </a>
        <a class="box" href="service_2/">
          <div class="box_detail">
            <h3>事務代行サービス「サポマザ」</h3>
            <p>雑務として発生しやすい商品登録や数値収集・入力や手書き資料のデジタル化などを幅広くサポート。</p>
          </div>
          <div class="img"></div>
          <div class="readmore"></div>
        </a>
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
              <h3>
               <?php
                if(mb_strlen($post->post_title, 'UTF-8')>25){
                  $title= mb_substr($post->post_title, 0, 25, 'UTF-8');
                  echo $title.'...';
                }else{
                  echo $post->post_title;
                }
                ?>
              </h3>
              <?php the_excerpt(); ?><div class="read_more"></div>
            </div>
          </div>
        </a>
        <?php endforeach; ?>
        <?php else : ?>
        <p class="blogzero">現在サイトのメンテナンス中です。</p>
        <?php endif;
        wp_reset_postdata(); //クエリのリセット ?>
      </div>
    </div>
  </article>
</main>

<?php get_footer(); ?>
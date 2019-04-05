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
  
  <article class="contents">
    <h2></h2>
    <div class="block">
      <div class="links">
        <?php
        $args = array(
          'numberposts' => 999,      //表示（取得）する記事の数
          'post_type' => 'recruit'    //投稿タイプの指定
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
              <h3>
                <?php
                if(mb_strlen($post->post_title, 'UTF-8')>55){
                  $title= mb_substr($post->post_title, 0, 55, 'UTF-8');
                  echo $title.'...';
                }else{
                  echo $post->post_title;
                }
                ?>
              </h3>
              <div class="read_more"></div>
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
  <article class="form">
    <?php 
    $page_data = get_page_by_path('recruit'); $page = get_post($page_data);
    $content = $page -> post_content;

    // 本文を表示する
    echo $content;
    ?>
  </article>

 </main>
  
<?php get_footer(); ?> 
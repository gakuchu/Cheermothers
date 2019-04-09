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
    <h2>職種一覧</h2>
    <div class="block">
      <div class="links">
        <?php
        // WP_Queryのパラメータを指定
        $args = array(
          // 記事を3件表示
          'posts_per_page' => 999,
          // 指定したページのタイプを取得。post、pageなど
          'post_type'     => 'jobs'
        );
        // WP_Queryのオブジェクト（インスタンス）を作成
        $query = new WP_Query( $args );
        // ループ開始
        while ( $query->have_posts() ) :
        // カスタムクエリの投稿データをセット
        $query->the_post();
        $loopcounter++;
        ?>
        <a href="<?php the_permalink(); ?>">
          <div class="box">
            <div class="blog_img img img-<?php echo $loopcounter; ?>"></div>
            <div class="blog_content">　
              <h3><?php the_title(); ?></h3>
              <div class="read_more"></div>
            </div>
          </div>
        </a>
        <?php if ( has_post_thumbnail() ) : ?>
        <style>
          .img-<?php echo $loopcounter; ?> {
            background-image: url(<?php the_post_thumbnail_url(); ?>);
          }
        </style>
        <?php endif; ?>
        <?php
        // ループ終了
        endwhile;
        // メインクエリの投稿データに戻す
        wp_reset_postdata(); 
        ?>
      </div>
    </div>
  </article>
  <article class="contents">
    <h2>社内制度</h2>
    <div class="block">
      <div class="links">
        <?php
        // WP_Queryのパラメータを指定
        $args2 = array(
          // 記事を3件表示
          'posts_per_page' => 999,
          // 指定したページのタイプを取得。post、pageなど
          'post_type'     => 'welfare'
        );
        // WP_Queryのオブジェクト（インスタンス）を作成
        $query2 = new WP_Query( $args2 );
        // ループ開始
        while ( $query2->have_posts() ) :
        // カスタムクエリの投稿データをセット
        $query2->the_post();
        $loopcounter++;
        ?>
        <a href="<?php the_permalink(); ?>">
          <div class="box">
            <div class="blog_img img img-<?php echo $loopcounter; ?>"></div>
            <div class="blog_content">　
              <h3><?php the_title(); ?></h3>
              <div class="read_more"></div>
            </div>
          </div>
        </a>
        <?php if ( has_post_thumbnail() ) : ?>
        <style>
          .img-<?php echo $loopcounter; ?> {
            background-image: url(<?php the_post_thumbnail_url(); ?>);
          }
        </style>
        <?php endif; ?>
        <?php
        // ループ終了
        endwhile;
        // メインクエリの投稿データに戻す
        wp_reset_postdata(); 
        ?>
      </div>
    </div>
  </article>
  <?php get_template_part('template-part/recruit-form'); ?>

 </main>
  
<?php get_footer(); ?> 
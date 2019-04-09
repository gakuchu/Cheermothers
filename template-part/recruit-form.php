<article class="form">
  <?php 
  $page_data = get_page_by_path('recruit'); 
  $page = the_content($page_data);

  // 本文を表示する
  echo $page;
  ?>
</article>
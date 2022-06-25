<!-- 404.php -->
<?php get_header(); ?>
<div id="main">
  <h2>404 Not Found（ページが見つかりませんでした）</h2>
  <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
  <p class="error_url">URL :<span><?php echo get_pagenum_link(); ?></span></p>
  <p><a href="<?php echo home_url(); ?>">トップページへ</a></p>
</div>
<?php
get_footer();
<?php get_header(); ?>

<?php $locale = get_locale(); if($locale == 'ja'):?>
  <!-- デフォルト言語(日本語)の内容が入ります。 -->
<div id="container">
<section class="l-content-fixed section" id="news">
  <header class="section-header">
    <h2 class="section-title">404ページ</h2>
    <p class="section-subtitle">404 Page Not Found</p>
  </header>
  <h3 class="level3-heading-message">お探しのページは見つかりませんでした。</h3>
</section>




	
<?php else:?>
  <!-- 第二言語の内容が入ります。 -->
<div id="container">
<section class="l-content-fixed section" id="news">
  <header class="section-header">
    <h2 class="section-title">404ページ</h2>
    <p class="section-subtitle">404 Page Not Found</p>
  </header>
  <h3 class="level3-heading-message">The page you are looking for could not be found.</h3>
</section>



<?php endif;?>
<?php get_footer(); ?>

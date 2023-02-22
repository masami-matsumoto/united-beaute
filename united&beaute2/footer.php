<!-- フッター -->
<footer class="footer">
    <div class="footer-inner">
    <?php wp_nav_menu(
          array(
          'theme_location' => 'place_footer',
          'container' => false,
          'menu_class' => 'footer-menu',
          'add_li_class' => '', // liタグへclass追加
          'add_a_class' => '' // aタグへclass追加
          )
          );
		?>
      <!-- <ul class="footer-menu">
        <li><a href="http://shop.united-beaute.co.jp/view/guide" class="freight">ご利用ガイド</li>
        <li><a href="/company.php" class="freight">会社概要</li>
        <li><a href="https://www.makeshop.jp/ssl/enquete/" class="freight">お問い合わせ</li>
        <li><a href="http://shop.united-beaute.co.jp/view/contract" class="freight">特定商取引法に基づく表記</li>
        <li><a href="http://shop.united-beaute.co.jp/view/policy" class="freight">プライバシーポリシー</li>
      </ul> -->
      <div class="footer-copyrights">
        <p class="freight">Copyright © 12cosme All rights reserved.</p>
      </div>
    </div>
    <div class="footer-sns"> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.svg" alt=""/></div>
    <p id="page-top"><a href="#" class="freight">Top</a></p>
  </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
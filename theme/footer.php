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
    <div class="footer-sns"><a href="https://instagram.com/12cosme_jp?igshid=YmMyMTA2M2Y="> <img src="<?php echo get_template_directory_uri(); ?>/images/icon-instagram.svg" alt=""/></a></div>
    <p id="page-top"><a href="#" class="freight">Top</a></p>
  </footer>
  <div class="banner" id="banner">
    <button class="banner-close" type="button" aria-label="閉じる"></button>
    <a href="#publish">
    <div class="banner-item">
            <p class="banner-data"><span></span><span>ゆうゆう6月号に <br>
              掲載されました。</span></p>
            <div class="banner-img"><img src="<?php echo get_template_directory_uri(); ?>/images/S__111591427.jpg" alt=""/></div>
          </div>
    </a> </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script> 
<script>
	const swiper = new Swiper(".swiper", {
		speed: 1000,
		loop: true,
		autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
	});
	</script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
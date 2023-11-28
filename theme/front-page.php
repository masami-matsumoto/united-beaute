<?php get_header(); ?>

<?php $locale = get_locale(); if($locale == 'ja'):?>
  <!-- デフォルト言語(日本語)の内容が入ります。 -->
  <section class="mv-wrap">
    <p><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner freight">AGELESS SKIN, <br>
      FOREVER GRACEFULLY</span></span></p>
  </section>
  <section class="content-wrap sectionLead">
    <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner freight">AGELESS SKIN, FOREVER GRACEFULLY</span></span></h2>
    <p class="lead">美しさは時には支配されない。<br>
      止められない時間の中で<br>
      「美しさの期限」という概念を超えてゆく。</p>
      <a href="https://shop.united-beaute.co.jp/" class="btn btn-accent2 btntextchange"><span class="freight">About 12Cosme</span><span>12コスメの思い</span></a>
      <div class="sectionLead-banner swiper">
      <div class="swiper-wrapper" id="page-link">
        <div class="swiper-slide"> <a href="#publish">
          <div class="banner-item">
            <!-- <p class="banner-data"><span>美人百花2023年4月号 増刊</span><span>『大人百花Spring issue』<br>
              12cosmeが掲載されました。</span></p> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/sai_pc_popup.jpg" alt=""/>
          </div>
          </a> </div>
          <div class="swiper-slide"> <a href="#publish">
          <div class="banner-item">
            <!-- <p class="banner-data"><span></span><span>ゆうゆう6月号に <br>
              掲載されました。</span></p> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/yuuyuu_pc_popup.jpg" alt=""/>
          </div>
          </a> </div>
      </div>
    </div> 
  </section>
  <section class="content-wrap product">
    <h2 class="content-title"><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner"><span class="underline freight">Line up</span></span></span></h2>
    <div class="product-container">
      <article class="imgtext fadeInTrigger">
        <div class="imgtext-container">
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/item01.jpg" alt=""/></figure>
          <div class="imgtext-body">
            <h3 class="freight">NMN<br>
              Executive Key Serum<br>
              <span class="fot-tsukuaoldmin-pr6n">エグゼクティブ　キー　セラム</span></h3>
            <p>活き活きとした素肌作りと<br>
              バックエイジングに着目した<br>
              最先端美容液。</p>
            <a href="https://shop.united-beaute.co.jp/view/item/000000000001?category_page_id=all_items" class="btn btntextchange"><span class="freight">More ＆ Buy</span><span>商品ページへ</span></a> </div>
        </div>
      </article>
      <article class="imgtext fadeInTrigger">
        <div class="imgtext-container">
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/item02.jpg" alt=""/></figure>
          <div class="imgtext-body">
            <h3 class="freight">NMN<br>
              Executive Key Mask<br>
              <span class="fot-tsukuaoldmin-pr6n">エグゼクティブ　キー　マスク</span></h3>
            <p>美容液をまるごと1本分含ませた<br>
              フェイスマスク<br>
              NMN×菌活スキンケア。</p>
            <a href="https://shop.united-beaute.co.jp/view/item/000000000002?category_page_id=all_items" class="btn btntextchange"><span class="freight">More ＆ Buy</span><span>商品ページへ</span></a> </div>
        </div>
      </article>
      <!-- <article class="imgtext  fadeInTrigger">
        <div class="imgtext-container">
          <figure><img src="images/detail3.jpg" alt=""/></figure>
          <div class="imgtext-body">
            <h3>医薬部外品<br>
              <span class="boxText">薬用</span>Premium Cream<br>
              <span>プレミアムクリーム</span></h3>
            <p>「抗シワ」、「抗炎症」「美白」<br>
              3つの機能を備えた<br>
              高性能オールインワンゲル。</p>
            <a href="#" class="btn btntextchange"><span>More ＆ Buy</span><span>商品ページへ</span></a> </div>
        </div>
      </article> --> 
    </div>
  </section>
  <section class="content-wrap publish" id="publish">
    <h2 class="content-title"><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner"><span class="underline freight">Media</span></span></span></h2>
    <div class="swiper spPublish">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="<?php echo get_template_directory_uri(); ?>/images/S__64069636_kiji.jpg" class="gallery"><img src="<?php echo get_template_directory_uri(); ?>/images/0411_sai_banner_1.jpg" alt=""></a></div>
        <div class="swiper-slide"><a href="<?php echo get_template_directory_uri(); ?>/images/S__111591427_kiji.jpg" class="gallery"><img src="<?php echo get_template_directory_uri(); ?>/images/0506_yuuyuu_bannerol.jpg" alt=""></a></div>
      </div>
    </div>
    <div class="pcPublish">
      <div class="publish-container">
        <div class="publish-item"><a href="<?php echo get_template_directory_uri(); ?>/images/S__64069636_kiji.jpg" class="gallery"><img src="<?php echo get_template_directory_uri(); ?>/images/0411_sai_banner_1.jpg" alt=""/></a></div>
        <div class="publish-item"><a href="<?php echo get_template_directory_uri(); ?>/images/S__111591427_kiji.jpg" class="gallery"><img src="<?php echo get_template_directory_uri(); ?>/images/0506_yuuyuu_bannerol.jpg" alt=""/></a></div>
      </div>
    </div>
  </section>
  <section class="about section-border">
    <div class="content-wrap">
      <h2 class="content-title"><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner"><span class="underline freight">About us</span></span></span></h2>
      <div class="about-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""/></div>
      <p class="lead">ワンランク上の化粧品・サプリメントの<br>
        オリジナル商品開発なら</p>
      <p class="desc">私たちは美容業界にて化粧品・サプリメントのＯＥＭ商品企画・開発を中心にサービス展開をしております。大手企業様から個人店様まで様々なニーズに幅広くご対応させて頂きます。<br>
        弊社は主にエステティックサロン様向け、海外向け（特に中国向け）商品の実績が多数ございますので、流行・定番の売れ筋商品はもちろん、規制や法律面といった多角度のご提案・サービスをご提供致します。</p>
      <a href="<?php echo get_template_directory_uri(); ?>/company/" class="btn btn-accent freight">More</a> </div>
  </section>
  <section class="service">
    <div class="content-wrap">
      <h2 class="content-title"><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner"><span class="underline freight">Service</span></span></span></h2>
      <h3 class="lead">オリジナル商品（OEM）の<br>
        企画開発〜製造をワンストップで</h3>
      <div class="oem fadeInTrigger">
        <p class="desc">美容業界で経験豊富な実績とノウハウを活かし、開発から販売サポートまでワンストップでお承りしています。製品イメージが曖昧なスタートでも、しっかりと具体化できるよう過去に実績のある売れ筋・定番処方はもとより、最新原料や処方情報など様々な情報をご提供しながら、御社のご要望を反映した強みのある成分処方をご提案いたします。面倒で手間の多い申請手続や事前調査、商品理解のためのインナーサポートまで、製品の開発から完成した商品がお客様のお手元に届くまで御社とタッグを組んで伴走いたします。スポットでのサポート、小ロットご希望の方もお気軽にご相談ください。</p>
        <div class="oem-container">
          <ul class="circleArea grid-area">
            <li>売れる<br>
              商品開発</li>
            <li>丸投げOK</li>
            <li>パッケージ<br>
              デザイン</li>
            <li>資材調達</li>
          </ul>
          <figure class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/images/service01.jpg" alt=""/></figure>
        </div>
      </div>
      <h3 class="lead">海外向け商品開発</h3>
      <div class="flexContainer fadeInTrigger">
        <p class="desc">日本の化粧品を中国に輸出して販売する為に必要な化粧品NMPA取得も事前にご提案いたします。</p>
        <figure class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/images/service02.jpg" alt=""/></figure>
      </div>
      <h3 class="lead">人材育成・研修セミナー</h3>
      <div class="flexContainer fadeInTrigger">
        <p class="desc">化粧品メーカーでの長年にわたる人財育成経験を活かし、
          社員様教育・営業パーソン教育も実施。組織における長期的な人財育成を支援しています。</p>
        <figure class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/images/service03.jpg" alt=""/></figure>
      </div>
      <a href="<?php echo get_template_directory_uri(); ?>/service/" class="btn btn-accent2 freight">More</a> </div>
  </section>
  <section class="example">
    <div class="content-wrap">
      <h2 class="content-title"><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner"><span class="underline">よくあるご要望</span></span></span></h2>
      <p class="lead">すべて解決いたします。<br class="sp-only">
        私たちにおまかせください。</p>
      <div class="flexContainer">
        <div class="flexContent">
          <p class="example-text">Q.オリジナリティある商品をつくりたい</p>
          <p class="example-text">Q.そもそも何から始めればいい？</p>
          <p class="example-text">Q.薬機法に対してどう対策すればいい？</p>
          <p class="example-text">Q.商品をつくって海外に売りたい</p>
        </div>
        <div class="flexItem">
          <p class="example-text">Q.どこまでやってくれるの？</p>
          <p class="example-text">Q.処方に流行りやトレンドはある？</p>
          <p class="example-text">Q.商品の差別化をどうすればいい？</p>
          <p class="example-text">Q.天然成分をつかって商品をつくりたい</p>
          <p class="example-text">Q.医薬部外品をつくりたい</p>
          <p class="example-text">Q.安定した売上につながる商品にしたい</p>
        </div>
      </div>
      <a href="<?php echo get_template_directory_uri(); ?>/contact/" class="btn btn-accent2">資料請求・お問い合わせ</a>
      <p class="textTel"><a href="tel:03-6264-8471">TEL 03−6264-8471</a></p>
      <p class="textTime">受付時間：平日9:00～18:00</p>
      <div class="company-wrap">
        <p class="company-name">株式会社UNITED＆BEAUTE</p>
        <p class="company-address">〒103−0007<br>
        東京都中央区日本橋浜町2丁目30番1号 KVK日本橋浜町ビル5階B</p>
      </div>
    </div>
  </section>
  <?php else:?>
  <!-- 第二言語の内容が入ります。 -->
  <section class="mv-wrap">
    <p><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner freight">AGELESS SKIN, <br>
      FOREVER GRACEFULLY</span></span></p>
  </section>
  <section class="content-wrap sectionLead">
    <h2><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner freight">AGELESS SKIN, FOREVER GRACEFULLY</span></span></h2>
    <p class="lead">Beauty sometimes does not rule.<br>
    In unstoppable time, the concept of "beauty's<br>
    due date goes beyond the concept of "beauty's expiration date".</p>
    <a href="https://shop.united-beaute.co.jp/" class="btn btn-accent2 btntextchange"><span class="freight">About 12Cosme</span><span>12コスメの思い</span></a> </section>
  <section class="content-wrap product">
    <h2 class="content-title"><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner"><span class="underline freight">Line up</span></span></span></h2>
    <div class="product-container">
      <article class="imgtext fadeInTrigger">
        <div class="imgtext-container">
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/item01.jpg" alt=""/></figure>
          <div class="imgtext-body">
            <h3 class="freight">NMN<br>
              Executive Key Serum<br>
              <span class="fot-tsukuaoldmin-pr6n">エグゼクティブ　キー　セラム</span></h3>
            <p>活き活きとした素肌作りと<br>
              バックエイジングに着目した<br>
              最先端美容液。</p>
            <a href="https://shop.united-beaute.co.jp/view/item/000000000001?category_page_id=all_items" class="btn btntextchange"><span class="freight">More ＆ Buy</span><span>商品ページへ</span></a> </div>
        </div>
      </article>
      <article class="imgtext fadeInTrigger">
        <div class="imgtext-container">
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/item02.jpg" alt=""/></figure>
          <div class="imgtext-body">
            <h3 class="freight">NMN<br>
              Executive Key Mask<br>
              <span class="fot-tsukuaoldmin-pr6n">エグゼクティブ　キー　マスク</span></h3>
            <p>美容液をまるごと1本分含ませた<br>
              フェイスマスク<br>
              NMN×菌活スキンケア。</p>
            <a href="https://shop.united-beaute.co.jp/view/item/000000000002?category_page_id=all_items" class="btn btntextchange"><span class="freight">More ＆ Buy</span><span>商品ページへ</span></a> </div>
        </div>
      </article>
      <!-- <article class="imgtext  fadeInTrigger">
        <div class="imgtext-container">
          <figure><img src="images/detail3.jpg" alt=""/></figure>
          <div class="imgtext-body">
            <h3>医薬部外品<br>
              <span class="boxText">薬用</span>Premium Cream<br>
              <span>プレミアムクリーム</span></h3>
            <p>「抗シワ」、「抗炎症」「美白」<br>
              3つの機能を備えた<br>
              高性能オールインワンゲル。</p>
            <a href="#" class="btn btntextchange"><span>More ＆ Buy</span><span>商品ページへ</span></a> </div>
        </div>
      </article> --> 
    </div>
  </section>
  <section class="about section-border">
    <div class="content-wrap">
      <h2 class="content-title"><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner"><span class="underline freight">About us</span></span></span></h2>
      <div class="about-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""/></div>
      <p class="lead">For the development of cosmetics and supplements of a higher grade<br>
      If you are looking for original product development</p>
      <p class="desc">We provide OEM product planning and development services for cosmetics and supplements in the beauty industry. We can meet a wide range of needs from major companies to individual stores.<br>
      We have a lot of experience in the field of cosmetics for esthetic salons and products for overseas markets (especially for China), so we are able to offer proposals and services from various angles such as regulatory and legal aspects as well as popular and standard-selling products.</p>
      <a href="<?php echo get_template_directory_uri(); ?>/company_en/" class="btn btn-accent freight">More</a> </div>
  </section>
  <section class="service">
    <div class="content-wrap">
      <h2 class="content-title"><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner"><span class="underline freight">Service</span></span></span></h2>
      <h3 class="lead">Original Equipment Manufacturer (OEM)<br>
      One-stop service from planning and development to manufacturing</h3>
      <div class="oem fadeInTrigger">
        <p class="desc">We provide one-stop services from development to sales support, utilizing our wealth of experience and know-how in the beauty industry. Even if the product image is vague at the start, we will propose a strong ingredient formula that reflects your company's requirements while providing a variety of information, including the latest raw materials and formulation information, as well as proven best-selling and standard formulas from the past to help you materialize your product image. We will work with you from product development to delivery of the finished product to the customer, including the tedious and time-consuming application procedures, preliminary research, and inner support for understanding the product. Please feel free to contact us for spot support or small-lot orders.</p>
        <div class="oem-container">
          <ul class="circleArea grid-area">
            <li>Product<br>
            Development</li>
            <li>round throw OK</li>
            <li>Package<br>
            Design</li>
            <li>Material<br>Procurement</li>
          </ul>
          <figure class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/images/service01.jpg" alt=""/></figure>
        </div>
      </div>
      <h3 class="lead">Product development for overseas</h3>
      <div class="flexContainer fadeInTrigger">
        <p class="desc">We can also propose obtaining the NMPA for cosmetics in advance, which is necessary to export and sell Japanese cosmetics to China.</p>
        <figure class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/images/service02.jpg" alt=""/></figure>
      </div>
      <h3 class="lead">Human Resource Development and Training Seminars</h3>
      <div class="flexContainer fadeInTrigger">
        <p class="desc">Utilizing many years of experience in human resource development at a cosmetics manufacturer, we also provide employee and sales person training. We also provide training for employees and salespeople. We support the long-term development of human resources in organizations.</p>
        <figure class="service-img"><img src="<?php echo get_template_directory_uri(); ?>/images/service03.jpg" alt=""/></figure>
      </div>
      <a href="<?php echo get_template_directory_uri(); ?>/service_en/" class="btn btn-accent2 freight">More</a> </div>
  </section>
  <section class="example">
    <div class="content-wrap">
      <h2 class="content-title"><span class="slide-in leftAnime"><span class="slide-in_inner leftAnimeInner"><span class="underline">Frequently Asked Questions</span></span></span></h2>
      <p class="lead">We can solve all your problems.<br class="sp-only">
      Let us help you!</p>
      <div class="flexContainer">
        <div class="flexContent">
          <p class="example-text">Q.We want to create products with originality.</p>
          <p class="example-text">Q.Where do I start in the first place?</p>
          <p class="example-text">Q.How can we take action against the Pharmaceutical Affairs Law?</p>
          <p class="example-text">Q.I want to make products and sell them overseas.</p>
        </div>
        <div class="flexItem">
          <p class="example-text">Q.How far will you go?</p>
          <p class="example-text">Q.Are there any fads or trends in formulation?</p>
          <p class="example-text">Q.How can we differentiate our products?</p>
          <p class="example-text">Q.I want to create products using natural ingredients.</p>
          <p class="example-text">Q.I want to make quasi-drugs.</p>
          <p class="example-text">Q.We want to make products that lead to stable sales.</p>
        </div>
      </div>
      <a href="<?php echo get_template_directory_uri(); ?>/contact-2/" class="btn btn-accent2">Request for brochure / contact us</a>
      <p class="textTel"><a href="tel:03-6264-8471">+81-3-6264-8471</a></p>
      <p class="textTime">Reception Hours：weekday9:00～18:00</p>
      <div class="company-wrap">
        <p class="company-name">UNITED&BEAUTE Co., Ltd.</p>
        <p class="company-address">〒103−0007<br>
        #B KVKnihonbashi Bldg5F,2-30-1, Nihombashihamacho, Chuo-ku,Tokyo, 103-0007, Japan</p>
      </div>
    </div>
  </section>
  <?php endif;?>
  <?php get_footer(); ?>

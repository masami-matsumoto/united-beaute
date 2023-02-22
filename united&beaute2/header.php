<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="<?php bloginfo( 'description' );?>" />
<title><?php bloginfo( 'name' ); ?></title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/android-icon.png">
<script>
  (function(d) {
    var config = {
      kitId: 'ygk8rdm',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>	
</head>
<body>
<div id="wrapper"> 
  <!-- ヘッダー -->
  <header class="header">
    <div class="header-logo">
      <h1> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/12cosme_logo_mask.png" alt="12cosme"/></a> </h1>
    </div>
    <div class="openbtn"><span></span><span></span></div>
    <nav id="g-nav">
      <div class="spheader"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/12cosme_logo_mask.png" alt=""/></a></div>
      <?php wp_nav_menu(
      array(
      'theme_location' => 'place_global',
      'container' => false,
      'menu_class' => 'header-nav',
      'add_li_class' => '', // liタグへclass追加
      'add_a_class' => '' // aタグへclass追加
      )
      );
		  ?>
      <!-- <ul>
        <li><a href="http://shop.united-beaute.co.jp/" class="freight">12 Cosme</a></li>
        <li><a href="http://shop.united-beaute.co.jp/view/category/all_items" class="freight">All Item</a></li>
        <li><a href="/service.php" class="freight">Service</a></li>
        <li><a href="/company.php" class="freight">About</a></li>
        <li><a href="https://www.makeshop.jp/ssl/enquete/">商品に関するお問い合わせ</a></li>
        <li><a href="/contact.php">事業者の方はこちら</a></li>
      </ul> -->
    </nav>
  </header>
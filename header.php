<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body id="index">
  <header class="p-header">
    <div class="p-navi-menu">
        <button class="p-navi-menu__trigger" id="trigger">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <?php 
          wp_nav_menu( array( 
            'menu_class' => 'p-navi-menu__list',
            'menu_id' => 'hum-list',
            'container' => 'nav',
            'container_class' => 'p-navi-menu', 
            'theme_location' => 'main-menu',
          )); 
        ?>

      </div>
  </header>

  <div class="p-main-img">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/main-img.jpg" alt="トップ画像">
    <?php if(is_front_page()){ ?>
      <h1 class="p-main-img__title">
      「この人に仕事を任せたい！」<span class="c-br">そんな人材になれますように</span>
    </h1>
    <?php }else{ ?>
      <p class="p-main-img__title">
      「この人に仕事を任せたい！」<span class="c-br">そんな人材になれますように</span>
    </p>
    <?php } ?>
    
  </div>
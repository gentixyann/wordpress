<!DOCTYPE html>
<php lang="ja">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="utf-8">
    <title>豪州フットボーラーズ</title>
    <meta name="description" content="オーストラリアを拠点とするサッカーマネージメント会社、豪州ソリューションズが運営するブログです。日本人の活躍を中心に、オーストラリアサッカー界での出来事や、プロ契約、選手情報、サッカー留学、英語留学などについて、画像や動画を交えながら、世界へと発信しています。">
    <meta name="keywords" content="オーストラリア,サッカー,プロ,選手,契約,留学,支援,サポート,英語,豪州,ブログ">

    <!-- WP管理画面から入力 -->
    <meta property="og:description" content="OGディスクリプション">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://worldcaravan.org/">
    <meta property="og:site_name" content="HPの名前">
    <meta property="og:image" content="画像リンク">
    <meta name="twitter:card" content="summary_large_image">
    <!--[if lt IE 9]><script src="./src/js/respond.min.js"></script>
    <script src="./js/php5shiv.js"></script><![endif]-->

    <!-- css読み込み -->
     <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/src/css/common.css">
<?php if (is_home() && is_front_page()){ ?>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/src/css/top.css"/>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/src/css/top.css"/>
<?php }else{ ?>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/src/css/detail.css"/>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/src/css/news.css"/>
<?php } ?>

    <!-- fontawesome読み込み -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Googlefont読み込み -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23233103-8　Google Analyticsコード添付場所"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-00000000-0　コード添付');
    </script>

    <!-- favicons -->

<?php wp_head(); ?>

</head>


<?php if (is_home() && is_front_page()){ ?>

<body id="js_wrapper">
  <div class="topimg-pc">
       <?php if ( get_header_image() ) : ?>
          <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
          
        <?php endif; ?>

        <h1><?php bloginfo( 'name' ); ?></h1>
        <h6><?php bloginfo('description'); ?></h6>

  </div>

  <header class="header">
    <div class="header__title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="none_ovre768">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h6><?php bloginfo('description'); ?></h6>
      </a>
    </div>

    <!-- ハンバーガーメニュー -->
    <button id="js_menu_button" class="menu_button">
      <span class="menu_button_line top"></span>
      <span class="menu_button_line mid"></span>
      <span class="menu_button_line botm"></span>
    </button>

    <!-- メニューバー -->
    <div class="nav">
      <ul>
        <li class="none_ovre768"><a href="index.php">TOP</a></li>
        <li><a href="<?php echo home_url() ?>/news">NEWS</a></li>
        <li><a href="<?php echo home_url() ?>/category/PLAYERS">PLAYERS</a></li>
        <li><a href="<?php echo home_url() ?>/category/GAME">GAME</a></li>
        <li><a href="<?php echo home_url() ?>/category/COLUME">COLUME</a></li>
        <li><a href="<?php echo home_url() ?>/news/#about">ABOUT</a></li>
        <div class="nav__search">
          <!-- <link href="news" rel="stylesheet"> -->
           <link href="news">
          <form method="get" action="#" class="search_container">
            <input type="text" size="25" placeholder="Search">
            <input type="image" src="<?php echo get_template_directory_uri(); ?>/src/img/search.svg" alt="search">
          </form>
        </div>
      </ul>
    </div>
  </header>
<?php }else{ ?>
<body id="js_wrapper">
  <header class="header">
    <div class="header__title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h1><?php bloginfo('name'); ?></h1>
        <h6><?php bloginfo('description'); ?></h6>
      </a>
    </div>

    <!-- ハンバーガーメニュー -->
    <button id="js_menu_button" class="menu_button">
      <span class="menu_button_line top"></span>
      <span class="menu_button_line mid"></span>
      <span class="menu_button_line botm"></span>
    </button>

    <!-- メニューバー -->
    <div class="nav">
      <ul>
        <li class="none_ovre768"><a href="index.php">TOP</a></li>
        <li><a href="<?php echo home_url() ?>/news">NEWS</a></li>
        <li><a href="<?php echo home_url() ?>/category/PLAYERS">PLAYERS</a></li>
        <li><a href="<?php echo home_url() ?>/category/GAME">GAME</a></li>
        <li><a href="<?php echo home_url() ?>/category/COLUME">COLUME</a></li>
        <li><a href="<?php echo home_url() ?>/news/#about">ABOUT</a></li>
        <div class="nav__search">
          <!-- <link href="news" rel="stylesheet"> -->
          <link href="news">
          <form method="get" action="#" class="search_container">
            <input type="text" size="25" placeholder="Search">
            <input type="image" src="<?php echo get_template_directory_uri(); ?>/src/img/search.svg" alt="search">
          </form>
        </div>
      </ul>
    </div>
  </header>
<?php } ?>
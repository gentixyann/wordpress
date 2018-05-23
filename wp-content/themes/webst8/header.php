<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>
        <?php bloginfo( 'name' ); ?>
        <?php wp_title(); ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- ヘッダー -->
    <header>
        <div class="container">
            <div id="header_left">
                <!--   bloginfo( ‘name’ )を使って、WordPress管理画面の「設定」→「一般」で設定された「サイトのタイトル」を表示。 bloginfo( ‘description’ )を使って、WordPress管理画面の「設定」→「一般」で設定された「キャッチフレーズ」を表示。 wp_nav_menu( ‘theme_location=navigation’ )を使って、WordPress管理画面の「外観」→「メニュー」で設定したメニューを表示-->
                <h1>
                    <a href="<?php echo home_url(); ?>">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </h1>
                <p>
                    <?php bloginfo( 'description' ); ?>
                </p>
            </div>
            <div id="header_right">
                <nav>
                    <?php wp_nav_menu( 'theme_location=navigation' ); ?>
                </nav>
            </div>
            <div class="clearbox">
            </div>
        </div>
    </header>

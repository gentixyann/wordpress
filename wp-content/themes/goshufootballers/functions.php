<?php
function goshufootballers_setup() {
  //ここに関数の中身を記述します。
  add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
  add_theme_support( 'menus');  //メニュー機能をON
}
add_action( 'after_setup_theme', 'goshufootballers_setup' );
//最後に作成したafter_setup_themeアクションフック※に登録します。



<?php
 
// ウィジェット WordPress管理画面で「外観」→「ウィジェット」を表示させるための処理
register_sidebar();
 
// カスタムメニュー WordPress管理画面で「外観」→「メニュー」を表示させるための処理
register_nav_menu( 'navigation', 'ナビゲーション' );
 
// 概要（抜粋）の文字数
function my_length($length){
  return 70;
}
add_filter('excerpt_mblength','my_length');
 
// 概要（抜粋）の省略記号
function my_more($more) {
  return '・・・';
}

function add_files(){
   wp_enqueue_style( 'main_style', get_stylesheet_uri(). '/style.css');
}
add_action('wp_enqueue_scripts', 'add_files');


 
add_filter('excerpt_more','my_more');
 
// アイキャッチ画像。add_theme_support( ‘post-thumbnails’ );をfunctions.php内に記載することで、WordPressの記事投稿画面でアイキャッチ画像を設定できる
add_theme_support( 'post-thumbnails' );

//サイドバーを1つ設置する
register_sidebar(array(
			'name'=>'サイドバー',
			'before_widget'=>'<div class="sidebar-wrapper">',
			'after_widget'=>'</div>',
			'before_title' => '<h4 class="sidebar-title">',
			'after_title' => '</h4>'
));

?>
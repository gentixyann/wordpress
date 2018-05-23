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
wp_enqueue_style( 'main_style', get_stylesheet_uri());

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

/**
 * 投稿画面から不要な機能を削除します。
 */
//function remove_post_supports() {
//	unregister_taxonomy_for_object_type( 'category', 'post' ); // これはカテゴリを消してる
//}
//add_action( 'init', 'remove_post_supports' );
// 


function my_contact_enqueue_scripts(){
wp_deregister_script('contact-form-7');
wp_deregister_style('contact-form-7');
if (is_page('contact')) {
 if (function_exists( 'wpcf7_enqueue_scripts')) {
        wpcf7_enqueue_scripts();
 }
 if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
 wpcf7_enqueue_styles();
 }
}
}
add_action( 'wp_enqueue_scripts', 'my_contact_enqueue_scripts');


// Bootstrapの読み込み
function my_bootstrap_scripts() {
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
//wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/bootstrap/js/vendor/bootstrap.min.js', array(), '1.0.0', true );
}
 
add_action( 'wp_enqueue_scripts', 'my_bootstrap_scripts' );






?>
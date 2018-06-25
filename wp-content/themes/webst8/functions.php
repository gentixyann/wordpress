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
add_filter('excerpt_more','my_more');


//cssとjsの読み込み
function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/mystyle.css' );
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'hoge', get_template_directory_uri() . '/js/hoge.js');
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

// Bootstrapの読み込み
function my_bootstrap_scripts() {
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/bootstrap/js/vendor/bootstrap.min.js' ); 
}
 
add_action( 'wp_enqueue_scripts', 'my_bootstrap_scripts' );

 
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
//	unregister_taxonomy_for_object_type( 'category', 'post' ); // カテゴリ
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



/*
 * 投稿にアーカイブ(投稿一覧)を持たせるようにします。
 * ※ 記載後にパーマリンク設定で「変更を保存」してください。
 */
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'post-all'; // ページ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );



/**
 * トップページのみ表示する最大投稿数を変更します。
 */
function change_home_posts_per_page( $query ) {
	// 管理画面、またはメインのループでない場合中断
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}
	
	// トップページは表示件数を5件にする。ただしquery_posts($query_string .'&order=ASC');を無効にしないと効かない
	if ( $query->is_home() ) {
		$query->set( 'posts_per_page', 5);
		return;
	}
    
     if($query->is_category()){ // カテゴリーアーカイブ
      $query->set('posts_per_page',20); 
    }
}
add_action( 'pre_get_posts', 'change_home_posts_per_page' );








?>
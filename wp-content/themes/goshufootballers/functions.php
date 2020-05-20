<?php
function goshufootballers_setup() {
  //ここに関数の中身を記述します。
  add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
  add_theme_support( 'menus');  //メニュー機能をON
}
add_action( 'after_setup_theme', 'goshufootballers_setup' );
//最後に作成したafter_setup_themeアクションフック※に登録します。

function wphead_cb() {
  echo '<style type="text/css">';
  echo '.topimg-pc h1, .topimg-pc h6 { color: #'.get_header_textcolor().' }';
  echo '</style>';
}

// カスタムヘッダー
$custom_header = array(
'random-default' => false,
'width' => 1000,
'height' => 300,
'flex-height' => true,
'flex-width' => true,
'default-text-color' => '',
'header-text' => true,
'uploads' => true,
// ヘッダーテキストのデフォルトの色
  'default-text-color' => '000',
  'wp-head-callback' => 'wphead_cb',
'default-image' => get_bloginfo('template_url').'/src/img/top_img.jpg',
'admin-head-callback'    => '',      // 管理画面で、[外観 - カスタマイズ]をプレビューするためのコールバック
    'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $custom_header );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

  register_sidebar( array(
    'name' => 'レコメンド記事',
    'id' => 'recommend',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );



//カスタムフィールドの「post_views_count」にアクセス数を保存する
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}

//カスタムフィールドに保存されているアクセス数を取得する
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
    return $count.' Views';
}






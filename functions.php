<?php

function my_style(){
  wp_enqueue_style( 'css',get_template_directory_uri().'/scss/app.css');

  wp_enqueue_script( 'menu',get_template_directory_uri().'/js/humberger.js', array(), '1.0.0', true);
  wp_enqueue_script( 'scrool',get_template_directory_uri().'/js/scrool.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'my_style' );

function register_my_menus() { 
  register_nav_menus( array( //複数のナビゲーションメニューを登録する関数
  //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
    'main-menu' => 'Main Menu',
  ) );
}
add_action( 'after_setup_theme', 'register_my_menus' );

function codex_custom_init() {
  $labels = array(
    'name'               => 'Works',
    'singular_name'      => 'Work',
    'add_new'            => '実績を追加',
    'add_new_item'       => '新規実績を追加',
    'edit_item'          => '実績を編集',
    'new_item'           => '新規実績',
    'view_item'          => '実績を表示',
    'search_items'       => '実績を探す',
    'menu_name'          => '実績'
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'has_archive'        => true,
    'menu_position'      => 3,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );
 
  register_post_type( 'work', $args );
}
add_action( 'init', 'codex_custom_init' );

//アイキャッチ画像
add_theme_support( 'post-thumbnails' );

add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ){
    // width height を削除する
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    return $html;
}

add_theme_support( 'title-tag' );
<?php
add_theme_support( 'title-tag' );
add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );


function hamburger_theme_setup(){
  load_theme_textdomain( 'wpbeg', get_template_directory() . '/languages' );
  }
add_action( 'after_setup_theme', 'hamburger_theme_setup' );


function register_my_menus() {
    register_nav_menus( array(
      'burger-menu' => 'バーガー',
      'side-menu' => 'サイド',
      'drink-menu' => 'ドリンク',
      'footer-menu'  => 'フッターメニュー',
    ) );
  }
  add_action( 'after_setup_theme', 'register_my_menus' );

define("DIRE", get_template_directory_uri());



function Humburger_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'Humburger_title' );

//ブロックエディターに反映させるcssを読み込む
// function block_editor_style_setup() {
//     add_theme_support( 'editor-styles' );
//     add_editor_style( 'asset/css/block_style.css' );
//   }
//   add_action( 'after_setup_theme', 'block_editor_style_setup' );


function my_enqueue_script() {
    wp_enqueue_style('shortcut icon',DIRE.'/asset/images/favicon.ico') ;
    wp_enqueue_style('my_stylesheet',DIRE.'/asset/css/style.css') ;
    wp_enqueue_style('my_stylesheet',DIRE.'/asset/css/style.css') ;
    wp_enqueue_style('M PLUS 1p','//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&display=swap') ;
    wp_enqueue_style('Roboto','//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap') ;
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );
    wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',array(),'3.5.1') ;
    wp_enqueue_script('main js',DIRE.'/asset/js/main.js',array('jquery')) ;
    wp_enqueue_script('inview js',DIRE.'/asset/js/jquery.inview.min.js') ;
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_script' );


add_filter('template_include','search_template');
function search_template($template){
   if ( is_search() ){
    $templates[] = "archive-search.php";
    $templates[] = 'search.php';
      $template = get_query_template('search',$templates);
   }
    return $template;
}


?>
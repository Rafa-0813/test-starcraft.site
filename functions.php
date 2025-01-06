<?php
// 基本設定
add_theme_support('post-thumbnails'); // アイキャッチ画像の有効化
add_theme_support('title-tag'); // ページタイトルタグの有効化
add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']); // HTML5サポート

// CSS・JSの読み込み
function enqueue_theme_scripts() {
    // メインスタイルシート
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // カスタムCSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts'); // スクリプトの読み込みをフックに追加

// サムネイルサイズの定義
add_image_size('custom-thumb', 300, 200, true); // 幅300px、高さ200px、トリミングあり
?>
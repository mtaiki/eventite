
<?php
/**
* テーマのセットアップ
* 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
**/
function my_setup()
{
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
add_theme_support('title-tag'); // タイトルタグ自動生成
add_theme_support(
'html5',
array( //HTML5でマークアップ
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');

/**
* CSSとJavaScriptの読み込み
*
* @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
*/
function my_script_init()
{
wp_enqueue_style('my-reset.css', get_template_directory_uri() . '/css/reset.css',);
wp_enqueue_style( 'my-drawer.css', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css', array('my-style.css'), '3.2.2' );
wp_enqueue_style( 'my-wow.css', get_template_directory_uri() . '/css/animate.css',);
wp_enqueue_style('my-style.css', get_template_directory_uri() . '/css/style.css',);

wp_enqueue_script('my-script.js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script( 'my-scroll-js', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js', array( 'jquery' ), '5.1.3', true );
wp_enqueue_script('my-drawer.js', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js', array('my-scroll-js'), '3.2.2', true );
wp_enqueue_script('my-wow.js', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'my_script_init');


/**
 * メニューの登録
 * 
 */
function my_menu_init() {
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
            'drawer' => 'ドロワーメニュー',
        )
    );
}
add_action('init', 'my_menu_init');


//管理者メールアドレスを承認メールを送らないで変更する
remove_action( 'add_option_new_admin_email', 'update_option_new_admin_email' );
remove_action( 'update_option_new_admin_email', 'update_option_new_admin_email' );
function wpdocs_update_option_new_admin_email( $old_value, $value ) {
update_option( 'admin_email', $value );
}
add_action( 'add_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );
add_action( 'update_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );

/**
 * お問い合わせ送信後別ページに遷移させる
 */
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
	location = '/contact/page/1';
}, false );
</script>
EOD;
}

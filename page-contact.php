
<?php get_header(); ?>

<main>

<section class="page-top">
    <div class="container">
        <div class="top-title-wrap wow fadeInUp">
            <h1 class="top-title">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top-title-1.png" alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化　完全版ハーバーラタ">
            </h1>
            <div class="top-data">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top-title-2.png" alt="2020年7月4日〜7日なかのZERO大ホール">
            </div>
        </div>
        <div class="top-btn wow fadeInUp">
            <a href="" class="btn">チケット予約サイトへ</a>
        </div>
    </div>
</section>

<div class="page-home wow fadeInUp">
    <div class="container">
        <?php
        if ( function_exists( 'bcn_display' ) ) {
        bcn_display();
        }
        ?>
    </div>
</div>

<section class="single-inquiry wow fadeInUp">
    <div class="container">
        <h2 class="section-title">INQUIRY</h2>
        <div class="contact">
            <div class="schedule-bg"></div>
            <p class="contact-message">
                お問い合わせありがとうございました。<br>
                メッセージは正常に送信されました。
            </p>
        </div>
    </div>
</section>

<section class="news">
    <div class="container">
        <h2 class="section-title wow fadeInUp">LATEST NEWS</h2>
        <div class="news-content-wrap">

            <?php
                $args = array (
                    'category'       => '3', // カテゴリーID
                    'post_type'      => 'post', // 投稿タイプ
                    'posts_per_page' => 5, // 取得する投稿数
                );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ):
                setup_postdata($post); //　グローバル変数$postを書き換え
            ?>

                <a href="<?php the_permalink(); ?>" class="news-content wow fadeInUp">
                    <div class="news-img">
                        <?php 
                        if(has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                        }else {
                            echo '<img src="' . esc_url(get_template_directory_uri()) . '/image/bg-img.png" alt="">';
                        }
                        ?>
                    </div>
                    <div class="news-text">
                        <time class="news-data" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                        <h3 class="news-title">
                            <?php the_title(); ?>
                        </h3>
                    </div>
                </a>

            <?php
                endforeach;
                wp_reset_postdata(); // $postをグローバル変数に戻す
            ?>

        </div>
        <div class="news-btn wow fadeInUp">
            <a href="./page-news.html" class="btn">ニュース一覧</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
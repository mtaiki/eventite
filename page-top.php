

<?php get_header(); ?>

<section class="top wow fadeIn">
    <div class="top-inner">
        <h1 class="top-title">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top-title-1.png" alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化　完全版ハーバーラタ">
        </h1>
        <div class="top-message">
            <div class="top-data">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top-title-2.png" alt="2020年7月4日〜7日なかのZERO大ホール">
            </div>
            <div class="top-text">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="top-btn">
            <a href="#" class="btn">チケット予約サイトへ</a>
        </div>
    </div>
</section>

<main class="main">

    <section class="introduction">
        <div class="container wow fadeInUp">
            <div class="introduction-bg"></div>
            <div class="introduction-img"></div>
            <div class="introduction-inner">
                <h2 class="section-title">INTRODUCTION</h2>
                <?php 
                $introduction = SCF::get('introduction');
                foreach ($introduction as $fields) {
                ?>
                    <p class="introduction-title"><?php echo $fields['introduction_title']; ?></p>
                    <div class="introduction-text">
                        <p><?php echo $fields['introduction_text1']; ?></p>
                        <p><?php echo $fields['introduction_text2']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="news wow fadeInUp">
        <div class="container">
            <h2 class="section-title">NEWS</h2>

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

                        <a href="<?php the_permalink(); ?>" class="news-content">
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

            <div class="news-btn">
                <a href="/news/page/1" class="btn">ニュース一覧</a>
            </div>
        </div>
    </section>

    <section class="story">
        <div class="container wow fadeInUp">
            <h2 class="section-title">STORY</h2>

            <?php 
            $page_id = get_page_by_path('story');
            $story = SCF::get('story', $page_id);
            foreach ($story as $fields) {
            ?>

                <p class="story-text">
                    <?php echo $fields['textarea']; ?>
                </p>

            <?php } ?>
            <div class="story-btn">
                <a class="btn" href="/story/page/1">もっと詳しく</a>
            </div>
        </div>
    </section>

    <section class="comments">
        <div class="container">
            <h2 class="section-title wow fadeInUp">COMMENTS</h2>
            <p class="comments-text wow fadeInUp">
                舞台関係者のみならず各界著名人からコメントが届いています！
            </p>
            <div class="comments-content">
                <?php 
                $page_id = get_page_by_path('comments');
                $comments_top = SCF::get('comments_top', $page_id);
                foreach ($comments_top as $fields) {
                ?>
                    <h3 class="comments-content-title wow fadeInUp">
                        <?php echo $fields['sub-title']; ?>
                    </h3>
                    <p class="comments-content-text wow fadeInUp">
                        <?php echo $fields['textarea']; ?>
                    </p>
                <?php } ?>
                <div class="comments-btn">
                    <a href="/comments/page/1" class="btn wow fadeInUp">もっと見る</a>
                </div>
            </div>
        </div>
    </section>

    <section class="cast">
        <div class="cast-bg"></div>
        <div class="container">
            <h2 class="section-title wow fadeInUp">CAST</h2>
            <div class="cast-item-wrap">
                <?php 
                $page_id = get_page_by_path('cast');
                $cast = SCF::get('cast', $page_id);
                foreach ($cast as $fields) {
                ?>
                    <div class="cast-item wow fadeInUp">
                        <div class="cast-img">
                            <?php echo wp_get_attachment_image($fields['cast_img'], 'full'); ?>
                        </div>

                        <div class="cast-prf">
                            <p class="cast-data1"><?php echo $fields['cast_data1']; ?></p>

                            <p class="cast-data2"><?php echo $fields['cast_name']; ?></p>
                            <p class="cast-data3"><?php echo $fields['cast_data2']; ?></p>
                        </div>

                        <p class="cast-text">
                            <?php echo $fields['cast_prf']; ?>
                        </p>
                    </div>
                <?php } ?>
            </div>
            <div class="cast-btn wow fadeInUp">
                <a href="/cast/page/1">もっと見る</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
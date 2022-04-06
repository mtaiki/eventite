

<?php get_header(); ?>

    <main>

    <section class="page-top">
        <div class="container">
            <div class="top-title-wrap wow fadeIn">
                <h1 class="top-title">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top-title-1.png" alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化　完全版ハーバーラタ">
                </h1>
                <div class="top-data">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top-title-2.png" alt="2020年7月4日〜7日なかのZERO大ホール">
                </div>
            </div>
            <div class="top-btn wow fadeIn">
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

        <section class="page-news wow fadeInUp">
            <div class="container">
                <h2 class="section-title">NEWS</h2>

                <?php
                    $category   = get_category_by_slug('news'); // カテゴリーのスラッグ
                    $cat_id     = $category->term_id;           // カテゴリーIDを取得
                    // 予めカテゴリーIDが分かっているなら上2行は不要

                    $post_count = 9; // 表示する記事数

                    query_posts('showposts='.$post_count.'&cat='.$cat_id.'&paged='.$paged);
                    // カテゴリーIDを直に書く場合は '&cat='.$cat_id この部分を '&cat=カテゴリーID（半角英数）' に直す
                ?>

                <div class="news-contents">

                <?php while(have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="news-content">
                        <div class="news-img">
                            <?php 
                                if(has_post_thumbnail()) {
                                        the_post_thumbnail('large');
                                } else {
                                    echo '<img src="' . esc_uri(get_template_directory_uri()) .'/image/bg-img.png" alt="">';
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
                <?php endwhile; ?>

                </div>


                <div class="page-next-btn">
                    <?php
                        // ここからページ送り
                        $args = array(
                            'prev_text' => __('&lt;'),
                            'next_text' => __('&gt;'),
                            'mid_size'  => 5
                        );

                        echo paginate_links($args);
                        // ここまでページ送り
                    ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>

<?php get_footer(); ?>
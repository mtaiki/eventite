

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

        <section <?php post_class(array('single-news')) ?>>
            <div class="container">
                <h2 class="section-title wow fadeInUp">NEWS</h2>
                <div class="single-news-content wow fadeInUp">
                    <div class="news-img">
                        <?php 
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('large');
                        } else {
                            echo '<img src="' . esc_uri(get_template_directory_uri()) .'/image/bg-img.png" alt="">';
                        }
                        ?>
                    </div>
                    <div class="news-title">
                        <time class="news-data" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <div class="news-text-wrap">
                        <?php the_content(); ?>
                    </div>


                    <div class="pagenation">
                        <?php wp_pagenavi(); ?>
                        <div class="pagenatio-prev">
                            <?php 
                            previous_post_link('%link', '<img src="'. get_template_directory_uri().'/images/next-btn-1.png" alt="前のニュースへ" width="7"/>'); 
                            ?>
                            <div class="pagenatio-prev-text">
                                <?php 
                                previous_post_link('%link', '<time class="news-data">'.the_time('Y.n.j').'</time>'); 
                                ?>
                                <?php 
                                previous_post_link('%link', '%title'); 
                                ?>
                            </div>
                        </div>
                        <div class="pagenation-next">
                            <div class="pagenation-next-text">
                                <?php 
                                next_post_link('%link', '<time class="news-data">'.the_time('Y.n.j').'</time>'); 
                                ?>
                                <?php 
                                next_post_link('%link', '%title'); 
                                ?>
                            </div>
                            <?php 
                            next_post_link('%link', '<img src="'. get_template_directory_uri().'/images/next-btn-2.png" alt="次のニュースへ" width="7"/>'); 
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>

<?php get_footer(); ?>
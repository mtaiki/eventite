
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

        <section class="page-comments">
            <div class="container">
                <h2 class="section-title wow fadeInUp">COMMENTS</h2>
                <p class="comments-text wow fadeInUp">
                    舞台関係者のみならず各界著名人からコメントが届いています！
                </p>
                <div class="comments-content">
                    <?php
                    $comments_top = SCF::get('comments_top');
                    foreach ($comments_top as $fields ) {
                    ?>
                        <h3 class="comments-content-title wow fadeInUp">
                            <?php echo $fields['sub-title']; ?>
                        </h3>
                        <p class="comments-content-text wow fadeInUp">
                            <?php echo $fields['textarea']; ?>
                        </p>
                    <?php } ?>
                </div>
                <div class="comments-item-wrap">
                    <?php
                    $comments = SCF::get('comments');
                    foreach ($comments as $fields ) {
                    ?>
                        <div class="comments-item wow fadeInUp">
                            <p class="comments-item-name"><?php echo $fields['name']; ?></p>
                            <p class="comments-item-data"><?php echo $fields['data']; ?></p>
                            <p class="comments-item-text">
                                <?php echo $fields['prf']; ?>
                            </p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

<?php get_footer(); ?>
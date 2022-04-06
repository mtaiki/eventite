
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

<section class="inquiry wow fadeInUp">
    <div class="container">
        <h2 class="section-title">INQUIRY</h2>
        <div class="contact">
            <div class="schedule-bg"></div>
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
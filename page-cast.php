
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

        <section class="page-cast1">
            <div class="cast-bg"></div>
            <div class="container">
                <h2 class="section-title wow fadeInUp">CAST</h2>
                <div class="cast-item-wrap">
                    <?php 
                    $cast = SCF::get('cast');
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
            </div>
        </section>

        <div class="page-cast2">
            <div class="container">
                <div class="page-cast-item-wrap">
                    <?php 
                    $musician = SCF::get('musician');
                    foreach ($musician as $fields) {
                    ?>
                        <div class="page-cast-item wow fadeInUp">
                            <div class="page-cast-img">

                                <?php echo wp_get_attachment_image($fields['musician_img'], 'full'); ?>

                            </div>
                            <div class="page-cast-prf">

                                <p class="page-cast-data1"><?php echo $fields['musician_data1']; ?></p>

                                <p class="page-cast-data2"><?php echo $fields['musician_name']; ?></p>

                                <p class="page-cast-data3"><?php echo $fields['musician_data2']; ?></p>

                                <p class="page-cast-text">
                                    <?php echo $fields['musician_prf']; ?>
                                </p>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="page-cast3">
            <div class="container">
                <div class="page-cast-name-wrap">
                    <?php 
                    $staff = SCF::get('staff');
                    foreach ($staff as $fields) {
                    ?>
                        <div class="page-cast-name wow fadeInUp">

                            <p class="cast-data1"><?php echo $fields['staff_data1']; ?></p>

                            <p class="cast-data2"><?php echo $fields ['staff_name']; ?></p>

                            <p class="cast-data3"><?php echo $fields['staff_data2']; ?></p>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
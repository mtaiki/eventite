
<?php get_header(); ?>

    <div class="page-story-bg">
        <section class="page-story-top">
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
    
        <div class="page-story-home wow fadeInUp">
            <div class="container">
                <?php
                if ( function_exists( 'bcn_display' ) ) {
                bcn_display();
                }
                ?>
            </div>
        </div>
    
        <section <?php post_class(array('page-story')) ?>>
            <div class="container">
                <h2 class="section-title wow fadeInUp">STORY</h2>
                <div class="page-story-wrap wow fadeInUp">
                    <?php
                    $story = SCF::get('story');
                    foreach ($story as $fields ) {
                    ?>

                    <h3 class="page-story-title"><?php echo $fields['name']; ?></h3>

                    <p class="page-story-text">
                        <?php echo $fields['textarea']; ?>
                    </p>

                    <?php } ?>
                </div>
            </div>
        </section>
        
    </div>

    <div class="page-story-item item-1">
        <div class="container">
            <div class="story-item-text wow fadeInUp">
                <?php
                    $story_item1 = SCF::get('story_item1');
                    foreach ($story_item1 as $fields ) {
                    ?>

                    <?php echo $fields['item1-textarea']; ?>

                <?php } ?>
            </div>
        </div>
    </div>

    <div class="page-story-item item-2">
        <div class="container">
            <div class="story-item-text wow fadeInUp">
                <?php
                    $story_item2 = SCF::get('story_item2');
                    foreach ($story_item2 as $fields ) {
                    ?>

                    <?php echo $fields['item2-textarea']; ?>

                <?php } ?>
            </div>
        </div>
    </div>

    <div class="page-story-item item-3">
        <div class="container">
            <div class="story-item-text wow fadeInUp">
                <?php
                    $story_item3 = SCF::get('story_item3');
                    foreach ($story_item3 as $fields ) {
                    ?>

                    <?php echo $fields['item3-textarea']; ?>

                <?php } ?>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
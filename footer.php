
<section class="schedule wow fadeInUp">
    <div class="container">
        <div class="schedule-inner">
        <div class="schedule-bg"></div>
            <h2 class="section-title">SCHEDULE</h2>
            <div class="schedule-wrap">
                
                <?php 
                $page_id = get_page_by_path('top');
                $schedule = SCF::get('schedule', $page_id);
                foreach ($schedule as $fields) {
                ?>
    
                    <a href="" class="schedule-item">
                        <p class="data-1"><?php echo $fields['schedule_data1']; ?></p>
                        <p class="data-2"><?php echo $fields['schedule_data2']; ?></p>
                        <p class="data-3"><?php echo $fields['schedule_data3']; ?></p>
                        <p class="data-4"><?php echo $fields['schedule_url']; ?></p>
                    </a>
    
                <?php } ?>
                
            </div>
        </div>
        <div class="btn-wrap">
            <div class="contact-btn">
                <a href="/inquiry/page/1">お問い合わせはこちら</a>
            </div>
            <div class="schedule-btn">
                <a class="btn" href="">チケット予約サイトへ</a>
            </div>
        </div>
    </div>
</section>

</main>

<footer class="footer">
    <p class="copy-light">Copyright © 2019 完全版マハーバーラタ All Rights Reserved.</p>
</footer>

<?php wp_footer(); ?>
    
</body>
</html>
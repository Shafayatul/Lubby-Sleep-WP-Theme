<?php include(TEMPLATEPATH.'/header-generic.php');?>
<style>
.header-content {
    display: block;
    text-align: center;
    margin: 0 auto;
    padding-top: 5%;
    padding-bottom: 5%;
}
.section-title {
    text-align: center;
    color: #D1242B !important;
    margin-bottom: 50px;
    text-transform: uppercase;
}
</style>

<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="header-content">
                    <h5 class="section-title h1"><?php the_title(); ?></h5>
                </div>
                <div class="col-md-12 dynamic-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
        <?php endwhile; ?>

        <?php else : ?>

        <h3><?php _e('404 Error&#58; Not Found'); ?></h3>

        <?php endif; ?>
    </div>

    <div class="rightside-sticky-items dextop-view text-center">
        <ul>
            <li>
                <a href="<?php echo site_url();?>/book-a-sleep-test">
                    <div class="icon-box">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons2.png">
                    </div>
                    <span>Book a Sleep Test</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact-us');?>">
                    <div class="icon-box">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/askquestion-min.png">
                    </div>
                    <span>Ask a Question</span>
                </a>
            </li>
            <li>
                <a href="book-a-sleep-test">
                    <div class="icon-box">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app.png">
                    </div>
                    <span>Make an Appointment</span>
                </a>
            </li>
        </ul>
    </div>

    <?php include(TEMPLATEPATH.'/footer-custom.php');?>
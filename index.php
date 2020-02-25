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
/*pagination*/
.pager {
    padding-left: 0;
    margin: 20px 0;
    text-align: center;
    list-style: none;
}
.pager:before {
    display: table;
    content: " ";
}
.pager li {
    display: inline;
}
.pager li>a, .pager li>span {
    color: #D1242B ;
    text-decoration: none !important;
    display: inline-block ;
    padding: 5px 14px ;
    background-color: #fff ;
    border: 1px solid #ddd ;
    border-radius: 15px ;
}
.pager li>a:hover, .pager li>span {
    color: #fff;
    background-color: #D1242B;
}
.pager li{
    list-style: none;
}
</style>

<?php if(have_posts()) : ?>
    <?php while(have_posts())  : the_post(); ?>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="header-content">
                    <h5 class="section-title h1"><?php the_title(); ?></h5>
                </div>
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="pager">
                      <li><?php next_posts_link( 'Older posts' ); ?></li>
                      <li><?php previous_posts_link( 'Newer posts' ); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <?php else : ?>

    <h3><?php _e('404 Error&#58; Not Found'); ?></h3>

    <?php endif; ?>
</div>

    <?php include(TEMPLATEPATH.'/footer-custom.php');?>
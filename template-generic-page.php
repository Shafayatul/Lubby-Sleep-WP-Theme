<?php /* Template Name: Generic Page Template */ 
include(TEMPLATEPATH.'/header-generic.php');?>

<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
<!-- header-section-end	 -->
<div class="  clearfix" style="background: url(<?PHP ECHO get_the_post_thumbnail_url();?>);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 50vh;
    display: inline-block;">
    <div class="container text-center refreshed-container">
      
    </div>
  </div>
       <div  class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              

                <?php the_content(); ?>


            </div>
            <!-- <div class="col-lg-6 col-md-6 mb-6">       
              <h2 class="text-center">Sleep-related movement disorders summary </h2>
              <article><p>
              Sleep-related movement disorders are abnormal movements that occur during sleep or while falling asleep. These disorders can affect people of all ages and include everything from involuntary muscle twitches to Restless Leg Syndrome or disorders with long-term risks, like Bruxism (night-time teeth grinding), which can result in permanent damage to the teeth and jaw. Sleep-related movement disorders can greatly reduce quality of sleep and affect daily functioning and wellbeing. In many cases, constant fragmented or broken sleep leads to daytime fatigue can and can be disruptive to work or school productivity. Treatment of these disorders can restore sleep quality and improve overall wellbeing.
 
              </p></article>
              </div>
               <div class="col-lg-6 col-md-6 mb-6">
                   <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/x4w26iOhMqc"
                            allowfullscreen></iframe>                 
                    </div>
              </div> -->
       </div> 
       </div>
    <?php endwhile; ?>



<?php else : ?>

  <h3><?php _e('404 Error&#58; Not Found'); ?></h3>

<?php endif; ?>
   <div class="rightside-sticky-items dextop-view text-center">
        <ul>
            <li>
                <a href="#">
                    <div class="icon-box">
                         <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons2.png"> 
                    </div>
                   <span>Book a Sleep Test</span>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="icon-box">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/askquestion-min.png">
                    </div>
                    <span>Ask a Question</span>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="icon-box">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/app.png"> 
                    </div>
                    <span>Make an Appointment</span>
                </a>
            </li>
        </ul>
    </div>

<?php include(TEMPLATEPATH.'/footer-custom.php');?>

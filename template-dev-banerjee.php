<?php /* Template Name: Dev Banargee Template */ 
include(TEMPLATEPATH.'/header-generic.php');?>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/videocun.css">


<!-- header-section-end  -->
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


    <section class="therapists-single-section">
    	<div class="auto-container">
            <div class="row clearfix">
              <div class="col-md-6 dev-img">
                <div class="dev-div">
                 <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dev.png">
                 <span class="m-1">Via Video Consulting on computer or Smart Phone </span>
                </div> 
              </div>
               <div class="col-md-6">
                <div class="dev-div">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dev2.png" class="dev-img">
                   <span class="m-1">In person at our Clinics in Sydney & the Central coas</span>
                </div> 
               </div>

            </div>            
        	<div class="row clearfix">            	
                <!--Image Column-->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column ">
                    	<div class="image">
                        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dev-half.jpg" alt="">
                        </div>
                        
                    </div>
                </div>
                
                <!--Content Column-->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                	<h2>Dr DEV BANERJEE</h2>                
                    <div class="title">Sleep Physician</div><br>
                    <h4>MBChB BSs Hons MD FRCP(UK) FRACP</h4>
                    <div class="text">
                    	<p>Dr Dev Banerjee is an experienced Sleep Physician, and Medical Director at Lullaby Sleep. He also has an academic role in sleep research at the Woolcock Institute of Medical Research (WIMR).</p>       
                    </div>
                    <h3 class="professional">Professional Education</h3>
                    <div class="yearly-info">
                    	<!--Year Block-->
                        <div class="year-block">
                        	<div class="inner-box">
                            	<span class="year">2003</span>
                                <h4>Dr Dev graduated in Medicine from the University of Leeds</h4>
                                <div class="year-text">UK with extensive training in Sleep Medicine in the UK and Australia.
							                 	His training in Respiratory Medicine and Sleep Medicine took place in the West Midlands UK, followed by a 14 months Clinical and Research Fellow appointment at the Woolcock Institute and Royal Prince Alfred Hospital Sydney</div>
                            </div>
                        </div>
                        
                        <!--Year Block-->
                        <div class="year-block">
                        	<div class="inner-box">
                            	<span class="year">2009</span>
                                <h4>Senior Consultant Physician</h4>
                                <div class="year-text">Between 2004 and 2013, Dev was a Senior Consultant Physician in Sleep Medicine at the Birmingham Heartlands Hospital, and Senior Research Fellow at Aston University between 2009 and 2013,  and worked for University of Sydney and St. Vincent’s Hospital (Darlinghurst, Sydney).</div>
                            </div>
                        </div>
                        
                        <!--Year Block-->
                        <div class="year-block">
                        	<div class="inner-box">                            	
                                <h4>Other roles</h4>
                                <div class="year-text">Other roles include providing sleep advice regularly on TV and Radio and Newspapers, and assisting Court as a medicolegal expert in the field of Sleep Medicine.</div>
                            </div>
                        </div>
                     
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
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

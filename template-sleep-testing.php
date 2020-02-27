<?php /* Template Name: Sleep Testing Page Template */ 
include(TEMPLATEPATH.'/header-generic.php');?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/at-home-sleep-test.css">

	    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/cpap-3.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/at-home-sleep-test.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/contactfrom.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.mb.YTPlayer.min.css">

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

<div id="wrapper">

    <div class="myPlayer-content container">	
         <h4 class="myPlayer-content-top-heading">It is important to remember that a sleep test can help eliminate or illuminate problems or issues in your sleep.
         Both outcomes are positive.</h4>
         <div class="myPlayer-content-bottom">
         				 </div>
<h2>What happens in a sleep test?</h2>
			 
          

</div>
</div>
  <section id="demos">
           <div class="row">
           <div class="large-12 columns">
            <div class="owl-carousel owl-theme">
           	 <div class="testimonial_wr">
           	  	<p>A sleep study is a non-invasive set of tests that monitor you while you sleep to see what’s happening in your brain and body. A “complete” study once required staying overnight in a hospital or sleep center, but the marvels of technology and miniaturisation now allow home studies that collect almost all of the same information.</p>
           	 </div> 	 
           	  <div class="testimonial_wr">
           	  	<p>Doing your study in your own home and in your own bed also reduces anxiety levels, comfort levels and timing preferences of patients, meaning better studies.</p>
           	  </div>              	 
           	  <div class="testimonial_wr">
           	  	<p>As you sleep, an EEG monitors your sleep stages and the cycles of REM and non-REM sleep you go through during the night, to identify possible disruptions in your sleep patterns. A sleep study also measures things such as oxygen levels in your blood (through a finger sensor), heart and breathing rates, snoring, and some body movements. Enough information in fact, that our Home Studies meet the requirements for Bulk-Billing through Medicare.</p>
           	  </div>
           	  <div class="testimonial_wr">
           	  	<p>For most people without other health issues, a Home Study provides the data needed for diagnosis of disorders. In the unlikely event that questions do arise, you may need to do further tests.</p>
           	  </div>           
           	  	 <div class="testimonial_wr">
           	  	<p>From this information, and discussion with you, a qualified Sleep Physician will diagnose and tailor a treatment plan based on your needs and expectations.</p>
           	  </div>
           
           </div>           
         </div>
    </div>
</section>
 

		<div class="video-top">
			<div class="container">
				<div class="video-top-title">
					<h2>Our Bulk Billed Home Sleep Test Package Includes:</h2>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="icon-box">
						  <div class="icon-box-top">
						  	<span class="icon-background">
						  	<i class="fas fa-pencil-alt"></i>
						  	</span>		  		
						  </div>
						  <div class="video-icon-title">
						  	<h3 >Initial consultation with one of our Sleep Technicians</h3>
						  </div>
						 </div>
					</div>
					<div class="col-md-3">
						<div class="icon-box">
						  <div class="icon-box-top">
						  	<span class="icon-background">
						    	<i class="fas fa-home"></i>
						  	</span>		  		
						  </div>
						  <div class="video-icon-title">
						  	<h3 >Home Sleep Test</h3>
						  </div>
						 </div>
					</div>
		           <div class="col-md-3">
						<div class="icon-box">
						  <div class="icon-box-top">
						  	<span class="icon-background">
						   <i class="fas fa-chart-line"></i>
						  	</span>		  		
						  </div>
						  <div class="video-icon-title">
						  	<h3 >Data Analysis / Report</h3>
						  </div>
						 </div>
					</div>
		          <div class="col-md-3">
						<div class="icon-box">
						  <div class="icon-box-top">
						   <span class="icon-background">
						  	<i class="fas fa-mobile-alt"></i>
						  	</span>		  		
						  </div>
						  <div class="video-icon-title">
						  	<h3 >Initial consultation with one of our Sleep Physicians</h3>
						  </div>
						 </div>
					</div>


				</div>
			</div>
		</div>
	<!-- 	video/patient -->
		<div data-vide-bg="video/patient">
				<div class="center-container">
					<h1 class="header-w3ls">Appointment Form</h1>			
					<div class="content-top">
						<div class="content-w3ls">
							<div class="form-w3ls">
								<form action="#" method="post">
									<div class="content-wthree1">
										<div class="grid-agileits1">
											<div class="form-control"> 
												<label class="header">Name <span>*</span></label>
												<input type="text" id="name" name="name" placeholder="Name" title="Please enter your Full Name" required="">
											</div>
											<div class="form-control">	
												<label class="header">Email <span>*</span></label>
												<input type="email" id="email" name="email" placeholder="Mail@example.com" title="Please enter a Valid Email Address" required="">
											</div>
											<div class="form-control">	
												<label class="header">Phone Number <span>*</span></label>
												<input type="text" id="name" name="phone number" placeholder="Phone Number" title="Please enter your Phone Number" required="">
											</div>
										</div>
									</div>
							</div>
							<div class="form-w3ls-1">
								
										<div class="form-control"> 
											<label class="header">Address <span>*</span></label>
											<input type="text" id="name" name="name" placeholder="Address" title="Please enter your Address" required="">
											<input type="text" id="name" name="name" placeholder="Line" title="Please enter your Line" required="">
											<input type="text" id="name" name="name" placeholder="City" title="Please enter your City" required="">
											<input type="text" id="name" name="name" placeholder="Zip code" title="Please enter your Zip code" required="">
										</div>
										<div class="wthreesubmitaits">
											<input type="submit" name="submit" value="Submit">
										</div>
								</form>
									
							</div>
							<div class="clear"></div>
						</div>
						<div class="content-w3ls">
							<div class="form-w3ls">
									<div class="content-wthree2">
										<div class="grid-w3layouts1">
											<div class="w3-agile1">
												<label class="rating">Best time to call you <span>*</span></label>
												<ul>
													<li>
														<input type="radio" id="a-option" name="selector1">
														<label for="a-option">Morning </label>
														<div class="check"></div>
													</li>
													<li>
														<input type="radio" id="b-option" name="selector1">
														<label for="b-option">Afternoon</label>
														<div class="check"><div class="inside"></div></div>
													</li>
													<li>
														<input type="radio" id="c-option" name="selector1">
														<label for="c-option">Evening </label>
														<div class="check"><div class="inside"></div></div>
													</li>
												</ul>
											</div>	
										</div>
										
										<div class="clear"></div>
									</div>
							</div>
							<div class="form-w3ls-1">
								<div class="grid-w3layouts1">
									<div class="w3-agile1">
										<label class="rating">I would like to (choose one)<span>*</span></label>
											<ul>
												<li>
													<input type="radio" id="d-option" name="selector2">
													<label for="d-option">A new patient appointment</label>
													<div class="check"></div>
												</li>
												<li>
													<input type="radio" id="e-option" name="selector2">
													<label for="e-option">A routine checkup</label>
													<div class="check"><div class="inside"></div></div>
												</li>
												<li>
													<input type="radio" id="f-option" name="selector2">
													<label for="f-option">I just have some questions first </label>
													<div class="check"><div class="inside"></div></div>
												</li>
											</ul>
									</div>	
								</div>		
							</div>
							<div class="clear"></div>
						</div>
					</div>	
						
					
				</div>
			</div>
<!-- video/patient -->
  <!-- sidebar-page-container service-page -->
	<div class="sidebar-page-container service-page">
	    	<div class="auto-container container">
	        	<div class="row clearfix">
	            
	                <!--Content Side-->
	                <div class="content-side row">
	                  <div class="" >                  
	                   	<div class="inner-box">                            
	                            <div class="accordian-section">
	                            	<div class="row clearfix">                                	
	                                    <div class="column col-lg-6 col-md-6 col-sm-12 col-xs-12"> 
	                                          <div  class="faq">
	                                    	   	<h2 class="text-center">Sleep Test FAQ</h2>
	                                           </div>                              	
	                                        <!--Accordian Box-->
	                                        <ul class="accordion-box">
	                                            
	                                            <!--Block-->
	                                            <li class="accordion block active-block">
	                                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How long does it take to get results from a sleep study?</div>
	                                                <div class="acc-content" >
	                                                    <div class="content">
	                                                        <p>A sleep test can usually take about 1-2 weeks to be completed and ready to go. Some tests can be interpreted and ready sooner if there is an urgent need.</p>
	                                                    </div>
	                                                </div>
	                                            </li>
	                    
	                                            <!--Block-->
	                                            <li class="accordion block">
	                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Can you watch TV during a sleep study?</div>
	                                                <div class="acc-content" style="">
	                                                    <div class="content">
	                                                        <div class="text">
	                                                            <p>Once you have put the Sleep Test on, you can read, relax or even watch television before going to sleep. We encouraged you to follow your normal pre-bedtime sleep ritual then drift off as they would at home. We do ask that when you do goto sleep, you turn your tv off, or set a sleep timer on your tv to automatically turn off.</p>  
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </li>
	                                            
	                                            <!--Block-->
	                                            <li class="accordion block">
	                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What can I expect from a sleep apnea test?</div>
	                                                <div class="acc-content current" >
	                                                    <div class="content">
	                                                        <div class="text">
	                                                        	<p>Electrodes on wires are attached with paste to your head and body—the process is completely painless—to monitor your brain waves, rapid eye movements, oxygen levels, breathing patterns, respiratory efforts, snoring, muscle tone and leg movements, heart rate, and more.</p>                                                         
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </li>
	                                            
	                                            <!--Block-->
	                                            <li class="accordion block">
	                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Can I sleep on my side during a sleep study?</div>
	                                                <div class="acc-content" style="">
	                                                    <div class="content">
	                                                        <div class="text cmsmasters_toggle_inner">
	                                                        	<p>Our goal is to collect the best data we can about you while you sleep. To do this, we will want to see you sleep in your usual positions.</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </li>
	                                              <!--Block-->
	                                            <li class="accordion block">
	                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Why sleep test is done?</div>
	                                                <div class="acc-content" style="">
	                                                    <div class="content">
	                                                        <div class="text">
	                                                        	<p>If your doctor suggests you undergo a sleep test (or as it is called a polysomnography), you may be wondering what is involved in this test and what to expect. Sleep tests help doctors diagnose sleep disorders such as sleep apnea, periodic limb movement disorder, narcolepsy, restless legs syndrome, insomnia, and nighttime behaviors like sleepwalking and REM sleep behavior disorder. Often these disorders cannot be identified with a normal office visit—your doctor needs to gather more conclusive evidence while you’re asleep.</p><p>A sleep test is a non-invasive, overnight exam that allows doctors to monitor you while you sleep to see what’s happening in your brain and body. For this test, you take a kit home and set up the Sleep test leads on you and sleep in the comfort of your own bed.</p><p>The data from your sleep study will usually be taken by a technologist, and later evaluated by your doctor. This may take up to two weeks, when you’ll schedule a follow up to discuss the results.</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </li>
	                                              <!--Block-->
	                                             <li class="accordion block">
	                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Are home sleep studies accurate?</div>
	                                                <div class="acc-content" style="">
	                                                    <div class="content">
	                                                        <div class="text">
	                                                          <p>One of the biggest differences between home sleep tests and in-lab sleep tests is the location at which they take place.</p><p><strong>Home Sleep Tests</strong> are exactly what they sound like: sleep tests that are taken from the comfort of one’s own home. For a home sleep test, the user usually comes into the sleep clinic the day of the test to pick up the Sleep Test kit and is given a demonstration on how to use the machine properly before taking the equipment home. Testing is performed by the user, and the data stored on the equipment is uploaded the following day at the sleep clinic.</p><p>For an <strong>in-lab sleep test</strong>, the patient must come into the hospital or facility for an overnight study. Patients generally arrive between 8-9 p.m. to fill out paper work and be given an overview of the procedure by a polysomnographic technologist. Patients will have to spend the night in the facility as the test usually concludes around 6-7 a.m.</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </li>
	                                              <!--Block-->
	                                             <li class="accordion block">
	                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>How much does a sleep test cost?</div>
	                                                <div class="acc-content" style="">
	                                                    <div class="content">
	                                                        <div class="text">
	                                                        	<p>Sleep Tests at many Sleep Clinics can cost upwards of $400.</p><p>At Lullaby Sleep, if you meet the following criteria, you are eligible for a Bulked-Billed (no cost) Sleep Test.<br>
	                                                            To be eligible for a Bulked-Billed sleep test, you must be:</p><ul><li>18 years or over</li><li>Hold a current Australian Medicare or DVA card.</li><li>Not had a medicare claimed – home based sleep test in the last 12 months. (if you had a hospital sleep test, means you are still eligible for a home sleep test as well).</li></ul><p>We also provide Sleep Tests for people who are no eligable to claim a Medicare Bulk Billed test (e.g 14 years and over or already had a medicare sleep test within the last 12 months). These cost $285.</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </li>
	                                           <!--Block-->  
	                                        </ul>
	                                        
	                                    </div>
	                                    
	                                    <div class="column col-lg-6 col-md-6 col-sm-12 col-xs-12">
	                                        <div class="visit-box-top"> 
	                                        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/willsleeptest.jpg">
	                                        </div>	
	                                    	<div class="visit-box">
	                                        	<div class="inner-box">
	                                            	<h2>5 Reasons To Have A Home Study (with us)</h2>
	                                                <div class="text">
	                                                	<ul  class="reasons">
	                                            		<li class="reasons-line"><i class="fas fa-check-circle"></i> Lightweight, Comfortable &amp; Easy – Minimal wires or cords</li>
	                                            		<li class="reasons-line"><i class="fas fa-check-circle"></i> Convenient &amp; Anxiety Free – You do the test in Your Home and Bed</li>
	                                            		<li class="reasons-line"><i class="fas fa-check-circle"></i> Affordable – Your Sleep Study is Bulk billed</li>
	                                            		<li class="reasons-line"><i class="fas fa-check-circle"></i> Validated – Your Data is quickly analysed &amp; interpreted by our board-certified Sleep Physicians</li>
	                                            		<li class="reasons-line"><i class="fas fa-check-circle"></i> You Come First – If You Agree, where possible we use Video Conferencing to minimise travel and time disruptions to your day.</li>
	                                                	</ul>
	                                                </div>
	                                                <a href="/contact-us" class="theme-btn btn-style-six">Make Appointment</a>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    
	                                </div>
	                            </div>
	                        </div>	
	                  </div>
	                 
	                </div>
	                
	            </div>
	        </div>
	    </div>
<!-- sidebar-page-container service-page -->


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

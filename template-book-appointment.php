<?php /* Template Name: Book Appointment Page Template */ 
include(TEMPLATEPATH.'/header-generic.php');?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/videocun.css">

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
        
    <?php endwhile; ?>

<section class="appointment-section">
        <div class="container">
            <div class="row animatedParent animateOnce">            	  
                <div class="col-md-6 col-sm-6">
                    <div class="appointment-col">
                       <div class="row">
                            <form>
                                <div class="form-row">
                                    <div class="col-md-6">
                                       <div class="appointment-col">
                                           <input type="text" class="form-control" placeholder="Your Name">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="appointment-col">
                                           <input type="text" class="form-control" placeholder="Phone Numbar">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="appointment-col">
                                           <input type="email" class="form-control" id="inputEmail3" placeholder="Email Address">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="appointment-col">   
                                            <select class="form-control">
                                                <option>Where Are You</option>
                                                <option>NSW</option>
                                                <option>ACT</option>
                                                <option>QLD or Vic</option>
                                                <option>Other State</option>
                                                <option>Overseas</option>
                                            </select>
                                        </div>
                                    </div>
                                 
                                    <div class="col-md-6">
                                       <div class="appointment-col">
                                            <select class="form-control">
                                                <option>TO DO YOU WANT AN </option>
                                                <option>IN CLINIC CONSULTATION</option>
                                                <option>VIDEO CONSULTATION </option>
                                            </select>
                                       </div>
                                    </div>                                    
                                     <div class="col-md-6">
                                       <div class="appointment-col">
                                            <select class="form-control">
                                                <option>Best Contact Time</option>
                                                <option>Morning</option>
                                                <option>Noon</option>
                                                <option>Afternoon</option>
                                                <option>After Work</option>
                                                <option>Evening</option>
                                            </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="appointment-col">
                                            <select name="SleepProblem" class="form-control">
                                               <option value="What's The Issue">What's The Issue</option>
                                               <option value="Noisy Sleep">Noisy Sleep</option>
                                               <option value="Restless Sleep">Restless Sleep</option>
                                               <option value="Just Can't Sleep">Just Can't Sleep</option>
                                               <option value="Equipment">Equipment</option>
                                               <option value="Other">Other</option>
                                            </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="appointment-col">
                                            <select name="SleepProblem" class="form-control">
	                                              <option value="Do You Have A Referral?">Do You Have A Referral?</option>
	                                              <option value="Yes">Yes</option>
	                                              <option value="No">No</option>
	                                              <option value="To Be Arranged">To Be Arranged</option>
                                            </select>
                                       </div>
                                    </div>                                


                                    <div class="col-md-12">
                                        <div class="appointment-col">
                                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                            <button class="btn btn-default my-btn" type="submit">Make apointment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                       </div> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="appointment-col appointment-img animated fadeInRightShort slow go">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/doctor-2.png" alt="">
                    </div>
                </div>
             
            </div>
             <div class="row">
                    <div class="appointment-col appointment-img animated fadeInRightShort slow go">
                       <h2 class="text-center"> HOW DOES A VIDEO CONSULTATION WORK? </h2>
                    </div>
                    <div class="text-body">
                    	<div class="cmsmasters_text">
                    		<p><span class="body-pre"><strong>Why do we do video conferences?</strong><br>
							Video consults save you time, travel, money, and a lot of advanced planning around work and family responsibilities.<br>
							They are also more relaxing for everyone.</span></p><p><span class="body-pre"><strong>How do we make a video conference happen?</strong></span><br>
							<span class="body-pre">Video consultation is actually quite simple to do.<br>
							</span><br>
							<span class="body-pre">There are two easy methods to schedule a video consult . . .</span></p><ol><li><span class="body-pre">The “<strong>any time” method</strong>:&nbsp; we start with a phone call to make sure the time is convenient for you.Then we send an email to you with a link that you click, which opens up a video screen on your computer or tablet.</span><br>
							<span class="body-pre">(Mobile phones also work, but definitely not the preferred video method as the small screen can distort and be quite off-putting)</span></li><li><span class="body-pre">The “<strong>fixed time” method:</strong> between us we decide on a day and time for the consult. Beforehand we send an email with the link you need, and at the agreed time you click the link and we start consulting</span></li></ol><p><span class="body-pre"><strong>Where do we have our video conference?</strong></span><br>
							<span class="body-pre">For the most productive conversations, you need to be in a <strong>private</strong>, quiet area or room, and preferably without other people around.</span><br>
							<span class="body-pre">Consultations are easiest if you are sitting at a table or desk, and not having to hold the screen, tablet or laptop.</span><br>
							<span class="body-pre">Consults involving actual products need you to have the equipment on hand, and other necessities close by (power, machine etc)<br>
							We find that actually doing the process has a higher retention factor than just talking you through it.<br>
							</span><br>
							<span class="body-pre"><strong>What can we do on a video conference?<br>
							</strong>Almost anything you wish to discuss can be done by video conference, including equipment setups and training</span><br>
							<span class="body-pre">You are <em>virtually</em> sitting across the table from one of our highly trained staff, clinicians, doctors or sleep physicians, depending on what the discussion is about.</span><br>
							<span class="body-pre">Almost everything is possible, especially if the discussion is pre-planned, and any required equipment has been forwarded to you in advance.</span></p>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php else : ?>

  <h3><?php _e('404 Error&#58; Not Found'); ?></h3>

<?php endif; ?>

<?php include(TEMPLATEPATH.'/footer-custom.php');?>

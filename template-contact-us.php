<?php /* Template Name: Contact Us Template */ 
include(TEMPLATEPATH.'/header-generic.php');?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/contact.css">

<!-- banner -->
<!-- banner1 -->
	<div class="banner1 jarallax" style="
	min-height: 90vh;
    background: url(<?PHP ECHO get_the_post_thumbnail_url();?>) no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
	">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb text-center">
		<div class="container">
			<ul>
				<li><a href="<?php echo home_url();?>">Home</a><i>|</i></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
	<div class="banner-bottom" id="about">
		<div class="container">
			<h2 class="heade_tittle_contact">Contact Us</h2>
		    <p class="sub_t_agileits">Get in touch</p>

           <div class="contact-top-agileits">              
				<div class="col-md-4 contact-grid">
					<div class="contact-grid2 w3">
						<a class="nav-link" onclick="return gtag_report_conversion('tel:+1300 375 384');" href="tel:+1300 375 384">
						<i class="fa fa-phone mr-2" aria-hidden="true"></i>
						<div class="con-w3l-info">
						  <h4>Call Us</h4>
						   <p>1300<span> 375 384</span></p>
						</div>
						<div class="clearfix"></div>
					</a>
					</div>
				</div>
				 <div class="col-md-4 contact-grid ">				 	
					<div class="contact-grid1 agileits-w3layouts">
					<a href="mailto:sleep@lullabysleep.com.au">	
					  <i class="fa fa-envelope mr-2"></i>
						<div class="con-w3l-info">
						   <h4>Email Us</h4>
						  <p>sleep@lullabysleep.com.au</p>
						</div>
						<div class="clearfix"></div>
					</a>
					</div>
				</div>
				<div class="col-md-4 contact-grid">
				<a class="nav-link" onclick="return gtag_report_conversion('tel:+1300 375 384');" href="tel:+1300 375 384">
						<i class="fas fa-fax mr-2"></i>
						<div class="con-w3l-info">
						  <h4>Fax Us</h4>
						  <p>430<span>20620</span></p></div>
						  <div class="clearfix"></div>
					</a>
				</div>
				<div class="clearfix"></div>
				
			</div>
			<div class="contact-form-aits">
                   <div class="addr-div text-center m-2">
                   	   <h2>Head Office</h2>
                   	  <p>Erina Fair Shopping Centre, COM2 Terrigal Drive, Erina NSW 2250<br>
                     </p>
                     <div class="">
                   	  <button data-toggle="modal" data-target="#map1" class="btn btn-color pt-1 pb-1 mb-2">
                   	  	    <span>Erina</span>
                   	  	    <span class="location-map">
                   	  	      <i class="fas fa-map-marker-alt"></i>
                   	  	   </span>
                   	  </button>
                   <button data-toggle="modal" data-target="#map2" class="btn btn-color pt-1 pb-1 mb-2">
                   	  	  <span>Edgecliff Clinic</span>
                   	  	  <span class="location-map">
                   	  	      <i class="fas fa-map-marker-alt"></i>
                   	  	   </span>
                   </button>
                   </div>
                   </div>
                   
                   <div class="modal fade " id="map1" tabindex="-1" role="dialog" aria-labelledby="mapTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="mapTitle">Erina</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Erina Map.jpeg">
					      </div>					      
					    </div>
					  </div>
					</div>
					 <div class="modal fade " id="map2" tabindex="-1" role="dialog" aria-labelledby="mapTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="mapTitle"> Edgecliff Clinic</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/C002T000001-Map-Edgecliff Medical Center-Final Draft 01-02.jpg">
					      </div>					      
					    </div>
					  </div>
					</div>

			</div>	
			<div class="contact-form-aits">
				 <h2 class="text-center mb-4 mt-5">Send Us A Message</h2>
				 <form action="#" method="post">
					<input type="text" class="margin-right" name="Name" placeholder="Name" required="">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="text" class="margin-right" name="Phone Number" placeholder="Phone Number" required="">
					<input type="text" name="Subject" placeholder="Subject" required="">
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<div class="send-button agileits w3layouts">
						<button class="btn btn-primary">SEND MESSAGE</button>
					</div>
				  </form>
				   <ul class="agileits_social_list two">
				        <li class="fallow"> Follow Us :</li>
						<li><a href="https://www.facebook.com/LullabySleepAu/" class="w3_agile_facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fab fa-linkedin-in"></i></a></li>
					</ul>
				         
			</div>
	    </div>
	</div>

      

<?php include(TEMPLATEPATH.'/footer-custom.php');?>
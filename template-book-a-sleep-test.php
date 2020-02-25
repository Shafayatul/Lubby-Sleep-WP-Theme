<?php /* Template Name: Book A Sleep Test Template */ 
include(TEMPLATEPATH.'/header-generic.php');?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/contact.css">
<style>
.btn-color{
    font-size: 1rem;
}
</style>
<!-- banner -->
<!-- banner1 -->
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


	<div class="banner-bottom" id="about">
		<div class="container">
			<h2 class="heade_tittle_contact text-center">Book a Sleep Test</h2>


            <div class="row">
                <div class="col-md-12 mt-5 mb-5">
                    <h2>Step 1 – Arrange a referral to Lullaby Sleep</h2>
                    <p>If under 18 or wish to have a privately billed sleep test (non-medicare), please call us to arrange your appointment. </p>    
                </div>
                <div class="col-md-6">
                    <h5>Have your own regular family doctor (GP)</h5>
                    <p>Download referral to take to your Family Doctor (GP) to fill in.</p>
                    <p>
                        <button class="btn btn-color pt-1 pb-1 mb-2">
                            <span>Donwload your PDF referral form for your doctor to sign</span>
                        </button>
                    </p>
                </div>
                <div class="col-md-6">
                    <h5>Don’t have regular family doctor (GP) Don’t have time to see your own doctor.</h5>
                    <p>Visit SwiftDoc to have an online video consult with a GP who will arrange a Referral to us. SwiftDoc GP Consults Costs $45</p>
                    <p>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/swiftdoc.png" alt="">
                    </p>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 mt-5 mb-5">
                    <h2>Step 2 - Book your Appointment</h2>
                </div>
                <div class="col-md-12">
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

                </div>
            </div>



	    </div>
	</div>

      

<?php include(TEMPLATEPATH.'/footer-custom.php');?>
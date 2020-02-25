<?php /* Template Name: Faq Template */ 
include(TEMPLATEPATH.'/header-generic.php');?>

<style>
    .accordion-box li{
        list-style: none;
    }
    .icon-outer{
        padding-top: 13px;
    }
</style>

<!-- header-section-end	 -->
<!-- <div class="banar-section-faq">
	
</div> -->
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
<div class="sidebar-page-container service-page">
    	<div class="auto-container container">
        	<div class="row clearfix">
            	
                <!--Sidebar Side-->
                <!-- <div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
                	<aside class="sidebar default-sidebar">
					                       
                        <div class="sidebar-widget nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						  <a class="nav-link active" id="cpap2-tab" data-toggle="pill" href="#cpap2" role="tab" aria-controls="v-pills-home" aria-selected="true">What is a CPAP Therapy?</a>
						  
						  <a class="nav-link" id="-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">What is APAP Therapy?</a>
						
						
						  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">What is APAP  second Therapy?</a>
						 
						  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">What is a third Therapy?</a>
						</div>

                        
                    	<div class="sidebar-widget brochure-widget">
                        	<div class="brochure-box">
                            	<div class="inner">
                                	<span class="icon fa fa-file-pdf-o"></span>
                                	<div class="text">Download Brochure</div>
                                </div>
                                <a href="#" class="overlay-link"></a>
                            </div>
                        </div>
                    
                    	<div class="sidebar-widget list-widget">
                        	
                        </div>
                    
                    </aside>
                </div> -->
                
                <!--Content Side-->
                <div class="content-side col-lg-12">
                  <div class="" >                  
                   	<div class="inner-box">                            
                            <div class="accordian-section">
                            	<div class="row clearfix">                                	
                                    <div class="column col-lg-12 col-md-12 col-sm-12 col-xs-12">                               	
                                        <!--Accordian Box-->
                                        <ul class="accordion-box">
                                            
                                            <!--Block-->
                                            <li class="accordion block active-block">
                                                <div class="acc-btn active"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What is a sleep disorder?</div>
                                                <div class="acc-content  current" >
                                                    <div class="content">
                                                        <p class="text">A sleep disorder is any ongoing problem that disrupts and disturbs sleep, and by extension, the overall quality of your life.</p>
                                                    </div>
                                                </div>
                                            </li>
                    
                                            <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What are the most common sleep disorders?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                               <ul>
                                                                 <li><strong>Obstructive Sleep Apnea</strong>&nbsp;– in which breathing stops or gets very shallow during sleep, pausing for 10-20 seconds or more, 20 to 30 times an hour.</li>
                                                                 <li><strong>Insomnia –&nbsp;</strong>an umbrella term that includes difficulty falling asleep, difficulty staying asleep, waking up too early and/or poor quality of sleep.</li>
                                                                 <li><strong>Restless Legs Syndrome</strong>&nbsp;(RLS) – a strong, often uncontrollable urge to move your legs immediately before sleep, or other odd feelings like burning, prickling, itching or tingling.</li>
                                                                 <li><strong>Narcolepsy</strong>&nbsp;– in which a person falls asleep at unusual times and in awkward places.</li>
                                                               </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What is Obstructive Sleep Apnea (OSA)?</div>
                                                <div class="acc-content" >
                                                    <div class="content">
                                                        <div class="text">
                                                        	<p>When the flow of air slows during sleep (reduced by at least 30%) this is known as a hypopnea. When the flow of air stops completely during sleep (for at least 10 seconds), this is known as apnea. When these abnormal events (apnea and hypopnea) are due to obstructive, anatomic causes – often related to the collapse or blockage of the upper airway, a patient is considered to have Obstructive Sleep Apnea, or OSA.</p>
                                                          <p><img class="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/sleep-apnea.jpg" alt="" width="300" height="400"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What are the symptoms of sleep apnea and sleep disorders?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text cmsmasters_toggle_inner">
                                                        	<p>People with sleep apnea generally have the following symptoms:</p><ul><li>Loud, frequent snoring</li><li>Excessive daytime sleepiness/fatigue</li><li>Unrefreshing sleep and waking with feelings of grogginess, and dullness</li><li>Morning headaches</li><li>Severe dryness of the mouth</li><li>Frequent trips to the bathroom throughout the night</li></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                              <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What are the consequences of having a sleep disorder?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                        	<ul><li>Cognitive impairment and poor job performance</li><li>Emotional problems including anxiety and depression</li><li>Memory loss and (in extreme cases of sleep loss) dementia</li><li>Medical conditions including hypertension, cardiac disease and stroke</li><li>Impaired motor skills and coordination</li><li>Increased risk of traffic accidents</li><li>Marital stress</li></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                             <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Who is most likely to develop a sleep disorder?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                        <p>Sleep disorders affect people of all ages: children, teens, adults, and seniors. Common risk factors for sleep disorders include:</p>
                                                          <ul><li><strong>Age</strong>&nbsp;– more common in middle-aged and older adults.</li><li><strong>Gender</strong>&nbsp;– Men are more likely to develop sleep apnoea; women are more likely to suffer from insomnia.</li><li><strong>Weight</strong>&nbsp;– the more you weigh, the greater your risk for a sleep disorder.</li><li><strong>Anatomy</strong>&nbsp;– structural abnormalities in the sinuses, mouth, throat or elsewhere in the upper airway can contribute to sleep disorders.</li><li><strong>Drug or Alcohol Use</strong>&nbsp;– medications, alcohol and illegal drugs can interfere with normal sleep patterns.</li><li><strong>Underlying Medical Problems</strong>&nbsp;– People who suffer from high blood pressure or depression are also at higher risk of sleep disorders.</li></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                             <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What causes snoring?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                        	<p>In most people, snoring is caused by multiple factors, each playing some part in the snoring process. They include:</p>
                                                          <ul><li><strong>Narrowing or blockage of the upper airway passages</strong>&nbsp;due to anatomy or an injury.</li><li><strong>Factors contributing to congestion of the soft tissues of the airways</strong>, such as smoking, alcohol, acid reflux from the stomach affecting the throat tissues, obesity, ageing and hormonal factors.</li></ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                              <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Is snoring dangerous?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                        	<p>Snoring can contribute to fatigue and morning tiredness, which increases the risk of accidents on the road, at home, and in the workplace. There also appears to be an increased risk of high blood pressure and stroke in snoring patients. When snoring is accompanied by significant sleep apnea, additional health problems may develop.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                              <!--Block-->
                                           
                                             
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>Does snoring really affect relationships?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                        	<p>Snoring impacts both the person who snores and his/her bed partner. According to a U.S. study of 4900 couples, as many as 80% of snoring couples end up sleeping in separate bedrooms, while a study from the USA clinic showed that snoring also seems to be associated with reduced sexual satisfaction in men.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                             <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>When should I consult a sleep specialist?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                        	<p>It’s time to see a doctor specially trained in sleep disorders when you’ve had trouble sleeping or if you are tired during the day for unknown reasons.<br>
                                                          Our Sleep Doctor’s can conduct a sleep assessment to evaluate the severity of your condition and determine the best treatment protocol.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                             <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What is a sleep test/assessment?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                         	<p>A Sleep Test is simple, easy and can be done in the comfort and privacy of your own home. The Sleep test looks at your body systems while you sleep, such as your snoring, breathing pattern, heart rate, oxygen levels, if you are getting to the restful stages of sleep, heart function.
                                                        The Sleep Doctor’s then review the data from the Sleep Test and consult with you (either in person or online video consult) to discuss your results and if required, determine a treatment plan for you.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                             <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What are the treatments for a sleep disorder?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                        	<p>There are several effective treatments for snoring and sleep disorders. These include dental appliances, positional devices, breathing assistance devices (CPAP or “sleep” masks), and in the most extreme cases, surgery. After an initial consultation, we will assess your suitability for a range of sleep apnea and snoring treatments and recommend a customised solution which meets your needs. From the initial consultation through to monitoring and re-evaluation of patients, Lullaby Sleep will look after you all the way.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                             <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What is an oral appliance for snoring?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                        	<p>An oral appliance is an artificial (often plastic or acrylic) device similar in appearance to a sports mouth guard. It is worn at night during sleep. There are two types of devices:</p>
                                                          <ul>
                                                            <li><strong>Mandibular Advancement Devices (MAD)</strong>&nbsp;– By moving the lower jaw (mandible) forward, the appliance decreases the likelihood of the oral soft tissues collapsing and obstructing the airway.</li>
                                                            <li><strong>Tongue Retaining Device</strong>&nbsp;– applies suction to the tongue at night in order to keep it from falling back in the throat.</li>
                                                          </ul>
                                                          <p>
                                                            <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/how-mad-works.jpg" alt="" width="426" height="222"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                             <!--Block-->
                                            <li class="accordion block">
                                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>What operations can assist snoring & sleep apnoea?</div>
                                                <div class="acc-content" style="">
                                                    <div class="content">
                                                        <div class="text">
                                                       <p>Surgical assistance may include nasal, palatal or tongue and neck surgery however surgery for snoring and sleep apnoea is rarely used and only considered in cases of very severe snoring when other treatments have failed.</p>
                                                       <ul>
                                                        <li>Nasal surgery may include improving the nasal airway by straightening the nasal septum and/or shrinking the lining tissue of the nose.</li>
                                                        <li>Palatoplasty addresses the flapping of the soft palate.</li>
                                                        <li>Radiowaves can shrink the back of the tongue.</li>
                                                        <li>Other procedures bring the tongue tissues forward.</li>
                                                        </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                             <!--Block-->
                                          
                                            
                                            
                                        </ul>
                                        
                                    </div>
                                    
                                    <!-- <div class="column col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    	<div class="visit-box">
                                        	<div class="inner-box">
                                            	<h2>Visit Today</h2>
                                                <div class="text">You'll know the minute you arrive this is the place. We are here to surpass your desires.</div>
                                                <a href="contact.html" class="theme-btn btn-style-six">Make Appointment</a>
                                            </div>
                                        </div>
                                    </div> -->
                                    
                                </div>
                            </div>
                        </div>	
                  </div>
                 
                </div>
                
            </div>
        </div>
    </div>



<?php include(TEMPLATEPATH.'/footer-custom.php');?>
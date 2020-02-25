<?php /* Template Name: Quiz Template */ 
include(TEMPLATEPATH.'/header-generic.php');?>

<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/quiz.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/steps.css">
<style>
.wizard-content .wizard.wizard-circle>.steps .step {
    width: 36px;
    height: 33px;
    line-height: 27px;
    border: 3px solid #F3F3F3;
    font-size: 1.3rem;
    border-radius: 50%;
}
.btn-style-six{
  color: #D1242B !important;
}
</style>

<section class="quiz">
  <div class="container">
      <div class="row" id="validation">
              <div class="col-12">
                  <div class="card wizard-content">
                      <div class="card-body">
                          <h4 class="card-title text-center">Self-Assessment Quiz </h4>           
                                                                     
                          <div class="col-lg-12" id="form1">
                           <form action="#" class="validation-wizard wizard-circle "  >
                              <!-- Step 1 -->
                              <h6></h6>
                              <section>
                                  <div class="validation-wizard">
                                        <h3>Do you feel tired, fatigued or sleepy during the day?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio1" value="1" class="custom-control-input custom-control-input-1">
                                        <label class="custom-control-label" for="customRadio1">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio2" name="customRadio1" value="0" class="custom-control-input custom-control-input-1">
                                     <label class="custom-control-label" for="customRadio2">No</label>
                                      </div>     
                                   </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                    <h3> Do you wake up gasping for breath, or has someone noticed that you stop breathing in your sleep?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio2" value="2" class="custom-control-input custom-control-input-1">
                                        <label class="custom-control-label" for="customRadio3">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio4" name="customRadio2" value="0" class="custom-control-input custom-control-input-1">
                                     <label class="custom-control-label" for="customRadio4">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                        <h3>Do you currently have, or had in the past, High Blood Pressure?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio5" name="customRadio3" value="1" class="custom-control-input custom-control-input-1">
                                        <label class="custom-control-label" for="customRadio5">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio6" name="customRadio3" value="0" class="custom-control-input custom-control-input-1">
                                     <label class="custom-control-label" for="customRadio6">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                       <h3>Have you been told you snore?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio7" name="customRadio4" value="1" class="custom-control-input custom-control-input-1">
                                        <label class="custom-control-label" for="customRadio7">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio8" name="customRadio4" value="0" class="custom-control-input custom-control-input-1">
                                     <label class="custom-control-label" for="customRadio8">No</label>
                                      </div>     
                                   </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                        <h3>Do you wake up with a dry mouth?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio9" name="customRadio5" value="1" class="custom-control-input custom-control-input-1">
                                        <label class="custom-control-label" for="customRadio9">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadi1o" name="customRadio5" value="0" class="custom-control-input custom-control-input-1">
                                     <label class="custom-control-label" for="customRadi1o">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                        <h3>Do you wake up with headaches in the morning?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio11" name="customRadio6" value="1" class="custom-control-input custom-control-input-1">
                                        <label class="custom-control-label" for="customRadio11">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio12" name="customRadio6" value="0" class="custom-control-input custom-control-input-1">
                                     <label class="custom-control-label" for="customRadio12">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                        <h3> Do you experience heartburn or acid reflux, or take medication to treat it?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio13" name="customRadio7" value="1" class="custom-control-input custom-control-input-1">
                                        <label class="custom-control-label" for="customRadio13">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio14" name="customRadio7" value="0" class="custom-control-input custom-control-input-1">
                                     <label class="custom-control-label" for="customRadio14">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                          <h3>Are you aged 50 or more?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio15" name="customRadio8" value="0" class="custom-control-input custom-control-input-1">
                                        <label class="custom-control-label" for="customRadio15">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio16" name="customRadio8" class="custom-control-input custom-control-input-1">
                                     <label class="custom-control-label" for="customRadio16">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                       <h3>Is your neck size 41cm or more?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio17" name="customRadio9" value="0" class="custom-control-input custom-control-input-1">
                                        <label class="custom-control-label" for="customRadio17">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="customRadio18" name="customRadio9" value="0" class="custom-control-input custom-control-input-1">
                                     <label class="custom-control-label" for="customRadio18">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="validation-wizard">
                                        <h3> Do you sometimes feel that you have to move your legs to make 
                                         them feel comfortable?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="custom1" name="customa" value="1" class="custom-control-input custom-control-input-2">
                                        <label class="custom-control-label" for="custom1">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="custom2" name="customa" value="0" class="custom-control-input custom-control-input-2">
                                     <label class="custom-control-label" for="custom2">No</label>
                                      </div>     
                                   </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                    <h3>  Do you find it difficult to stay asleep through the night?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="custom3" name="customb" value="2" class="custom-control-input custom-control-input-2">
                                        <label class="custom-control-label" for="custom3">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="custom4" name="customb" value="0" class="custom-control-input custom-control-input-2">
                                     <label class="custom-control-label" for="custom4">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                        <h3>Do you find it difficult to fall asleep?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="custom5" name="customc" value="1" class="custom-control-input custom-control-input-2">
                                        <label class="custom-control-label" for="custom5">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="custom6" name="customc" value="0" class="custom-control-input custom-control-input-2">
                                     <label class="custom-control-label" for="custom6">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                 <div class="">
                                        <h3>  On average, how many hours of sleep do you get each night? </h3>
                                     <div class="custom-control custom-radio">
                                        <input type="radio" id="custom7" name="custome" value="1" class="custom-control-input custom-control-input-2">
                                        <label class="custom-control-label" for="custom7">Less than 5 hours</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                          <input type="radio" id="customRadi8" name="custome" value="0" class="custom-control-input custom-control-input-2">
                                         <label class="custom-control-label" for="customRadi8">5-7 hours</label>
                                      </div>
                                       <div class="custom-control custom-radio">
                                          <input type="radio" id="customRadi9" name="custome" value="0" class="custom-control-input custom-control-input-2">
                                         <label class="custom-control-label" for="customRadi9">7-9 hours</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                         <input type="radio" id="customRadi10" name="custome" value="1" class="custom-control-input custom-control-input-2">
                                         <label class="custom-control-label" for="customRadi10">more than 9 hours</label>
                                      </div>     
                                    </div>
                              </section>
                              <h6></h6>
                              <section>
                                    <div class="">
                                    <h3>Do you have troubled dreams or nightmares?</h3>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="custom11" name="customd" value="1" class="custom-control-input custom-control-input-2">
                                        <label class="custom-control-label" for="custom11">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="custom12" name="customd" value="0" class="custom-control-input custom-control-input-2">
                                     <label class="custom-control-label" for="custom12">No</label>
                                      </div>     
                                   </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                        <h3> Do you suffer from depression or mood disorder or are you 
                                        currently taking medication for your issue? </h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="custom100" name="customf" value="1" class="custom-control-input custom-control-input-2">
                                        <label class="custom-control-label" for="custom100">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="custom13" name="customf" value="0" class="custom-control-input custom-control-input-2">
                                     <label class="custom-control-label" for="custom13">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                        <h3> Do you experience heartburn or acid reflux, or take medication to treat it?</h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="custom14" name="customg" value="1" class="custom-control-input custom-control-input-2">
                                        <label class="custom-control-label" for="custom14">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="custom15" name="customg" value="0" class="custom-control-input custom-control-input-2">
                                     <label class="custom-control-label" for="custom15">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                          <h3> Do you wake up with an aching jaw, or have you been told that 
                                         you grind your teeth during sleep? </h3>
                                        <div class="custom-control custom-radio">
                                        <input type="radio" id="custom16" name="customh" value="0" class="custom-control-input custom-control-input-2">
                                        <label class="custom-control-label" for="custom16">Yes</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                      <input type="radio" id="custom17" name="customh" class="custom-control-input custom-control-input-2">
                                     <label class="custom-control-label" for="custom17">No</label>
                                      </div>     
                                    </div>
                                
                              </section>
                              <h6></h6>
                              <section>
                                  <div class="">
                                    <h3>How worried are you about your current sleep?</h3>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="custom18" name="de" value="1" class="custom-control-input custom-control-input-2">
                                        <label class="custom-control-label" for="custom18">A little worried </label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                          <input type="radio" id="custom19" name="cuffstomi" value="2" class="custom-control-input custom-control-input-2">
                                         <label class="custom-control-label" for="custom19">Somewhat worried </label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input type="radio" id="custom20" name="custdoddmi" value="3" class="custom-control-input custom-control-input-2">
                                        <label class="custom-control-label" for="custom20">Very Worried</label>
                                     </div>
                                     <div class="custom-control custom-radio">
                                          <input type="radio" id="custom21" name="cusddgtomi" value="0" class="custom-control-input custom-control-input-2">
                                         <label class="custom-control-label" for="custom22">Not worried, I sleep well</label>
                                      </div>      
                                    </div>
                                
                              </section>
                             </form>
                          </div>


                          <div class="row mt-5">

                          <div class="col-lg-6" style="display: none;" id="form1-result">
                            <div class="sleep-apoea mt-3" id="up1"></div>
                            <br>
                            <br>
                            <br>
                            <h4 id="form1-result-title"></h4>
                            <div class="sleep-apoea mt-4 mb-2">
                                <h5>What is Sleep Apnoea?</h5>                             
                                    <p>Sleep Apnoea is a sleep disorder that causes your body to stop breathing while
                                      you sleep. Air stops flowing to your lungs for 10 seconds or longer, which can
                                      happen repeatedly during the night. Left undiagnosed and untreated, it can have
                                      long-term effects on your health. A home sleep study will help determine if you
                                      have Sleep Apnoea. </p>
                                      <a class="btn btn-style-six" href="">Book Appointment</a> <a class="btn btn-style-six" href="">Learn More</a>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            
                            <div class="sleep-apoea mt-3" id="down1"></div>  
                          </div>



                    
                          <div class="col-lg-6" style="display: none;" id="form2-result">
                           <div class="sleep-apoea mt-4 mb-2" id="up2">

                           </div>
                           <br>
                            <h4 id="form2-result-title"></h4>
                           <div class="sleep-apoea mt-4 mb-2">
                               <h5>What is Sleep Disturbance?</h5>
                               <p>Sleep   disturbance   cover   disorders   of   initiating   and   maintaining   sleep   (e.g.
                                insomnias), disorders of excessive somnolence, disorders of sleep–wake schedule
                                and dysfunctions associated with sleep, i.e. sleep stages, or partial arousals
                                (parasomnias). I
                                t can make you feel drowsy during the day and effect memory,
                                concentration and learning. It can be caused by many factors, from Stress and
                                Anxiety to respiratory breathing issues while you sleep, such as Sleep Apnoea</p>
                               <a class="btn btn-style-six" href="">Book Appointment</a> <a class="btn btn-style-six" href="">Learn More</a>

                           </div>
                           <br>
                           <br>

                           <div class="sleep-apoea mt-4 " id="down2">

                           </div>
 
                          </div>

                          
                          </div>




                      </div>
                  </div>
              </div>
           </div>
     </div>
</section>

<div class="call-section">
 <div class="container">
          <a class="call" onclick="return gtag_report_conversion('tel:+1300 375 384');" href="tel:+1300 375 384">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/call.png">
      </a>
      
</div>
 </div>


<?php include(TEMPLATEPATH.'/footer-custom.php');?>
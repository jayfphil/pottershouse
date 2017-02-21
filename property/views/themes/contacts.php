<!DOCTYPE html>
<html lang="en-US">

  <body class="size-1140">

    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section-top-padding background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-20 text-size-30 text-line-height-1">Contact Us</h1>
          </div>  
        </header>
        <div class="section-small-padding background-white"> 

          <div class="line margin-bottom-60">
            <div class="margin">
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-location-pin icon3x text-primary"></i>
                  </div>
                <div class="margin-left-70 margin-s-left-0 margin-bottom">
                  <h3 class="margin-bottom-0">Church Address</h3>
                  <p>29 Mayon Street<br>
                     Barangay Malamig, Mandaluyong, City
                  </p>               
                </div>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-envelope icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0 margin-bottom">
                    <h3 class="margin-bottom-0">E-mail</h3>
                    <p>contact@sampledomain.com<br>
                       office@sampledomain.com
                    </p>              
                  </div>
                </div>
              </div>
              <div class="s-12 m-12 l-4 margin-m-bottom">
                <div class="padding-2x block-bordered border-radius">
                  <div class="float-left hide-s">
                    <i class="icon-sli-phone icon3x text-primary"></i>
                  </div>
                  <div class="margin-left-70 margin-s-left-0">
                    <h3 class="margin-bottom-0">Phone Numbers</h3>
                    <p><span class="text-primary">Office: (+63-2) 654-1782</span><!-- <br>
                       Office: 0450 5896 625 16<br>
                       Office 2: 0798 6546 465 15 -->
                    </p>             
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="line">
            <div class="margin">
              <!-- Contact Form -->

              <div class="s-12 m-12 l-4">
                <h2 class="margin-bottom-10">Schedule of Services</h2>
                <div class="s-6">
                  <p class="text-size-16">
                  Wednesday Evening<br>
                  Friday Discipleship<br>
                  Sunday School<br>
                  Sunday Morning<br>
                  Sunday Evening
                  </p>
                </div>
                <div class="s-6">
                  <p class="text-size-16 text-strong">
                  07:30 PM<br>
                  07:30 PM<br>
                  09:00 AM<br>
                  10:00 AM<br>
                  06:30 PM
                  </p>
                </div>
              </div>
              
              <div class="s-12 m-12 l-6">

               <?php if(!empty($admin_message)): ?> 
                  <!--  start message-green -->
                  <div id="message-green">
                      <table border="0" width="100%" height="25" cellpadding="0" cellspacing="0">
                      <tr>
                          <th class="green-left"><?php echo $admin_message; ?></th>
                          <th class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></th>
                      </tr>
                      </table>
                  </div>
                  <!--  end message-green -->
               <?php endif; ?> 

                <h2 class="margin-bottom-10">Leave Message</h2>
                <!-- <form name="contactForm" class="customform" method="post"> -->
                <?php echo form_open_multipart("church_control/postContact", array('class' => 'customform','name' => 'contactForm')); ?>
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" required/>
                        <p class="email-error form-error">Please enter your e-mail.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="name" class="name" placeholder="Your name" title="Your name" type="text" required/>
                        <p class="name-error form-error">Please enter your name.</p>
                      </div>
                    </div>
                  </div>
                  <div class="s-12"> 
                    <input name="subject" class="subject" placeholder="Subject" title="Subject" type="text" required/>
                    <p class="subject-error form-error">Please enter the subject.</p>
                  </div>
                  <div class="s-12">
                    <textarea name="message" class="required message" placeholder="Your message" rows="3" required></textarea>
                    <p class="message-error form-error">Please enter your message.</p>
                  </div>
                  <div class="s-12">
                    <?php echo form_submit('submit','Send', 'class="s-12 submit-form button background-primary text-white"'); ?>
                  </div>
                <?php echo form_close(); ?>
                <!-- </form> -->
              </div>

            </div>    
          </div>  

          <div class="line">
            <div class="margin">

              <div class="s-12 m-12 l-12 center">     
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.450569537657!2d121.0455697756516!3d14.57338290343976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8458db5a0c7%3A0x76f79991d6f0502a!2sThe+Potter&#39;s+House+Christian+Center!5e0!3m2!1sen!2sph!4v1480406648139" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>

            </div>
          </div>

        <hr class="break">

        </div> 
      </article>
    </main>
  
  </body>
</html>
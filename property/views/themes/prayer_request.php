<!DOCTYPE html>
<html lang="en-US">

  <body class="size-1140">

    <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="section-top-padding background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-20 text-size-30 text-line-height-1">Prayer Request</h1>
          </div>  
        </header>
        <div class="section-small-padding background-white"> 

       <?php if(!empty($admin_message)): ?> 
          <!--  start message-green -->
          <div id="message-green">
          <table border="0" width="100%" height="25" cellpadding="0" cellspacing="0">
          <tr>
              <td class="green-left"><?php echo $admin_message; ?>.</td>
              <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
          </tr>
          </table>
          </div>
          <!--  end message-green -->
       <?php endif; ?> 

          <?php echo form_open_multipart("church_control/postPrayer_request", array('class' => 'customform')); ?>
          <div class="line">
            <div class="margin">
              
              <div class="s-12">
                <h2 class="margin-bottom-10">We are pleased to join you in praying for specific needs. <?php // echo $this->uri->uri_string(); ?></h2>
                
                  <div class="s-12"> 
                    <input name="subject" class="subject" placeholder="Name" title="Name" type="text" />
                    <p class="subject-error form-error">Please enter your name.</p>
                  </div>
                  <div class="s-12">
                    <textarea name="message" class="required message" placeholder="Your prayer" rows="7"></textarea>
                    <p class="message-error form-error">Please pray for:</p>
                  </div>
                  <div class="s-12">
                    <?php echo form_submit('submit','Submit', 'class="s-12 submit-form button background-primary text-white"'); ?>
                  </div>
                
              </div>

            </div>    
          </div>  
          <?php echo form_close(); ?>

        <hr class="break">

        </div> 
      </article>
    </main>
  
  </body>
</html>
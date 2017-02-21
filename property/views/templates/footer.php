    

    <!-- FOOTER -->
    <footer>

    <!-- Begin of Extra Footer details -->

      <!-- Contact Us -->
<!--       <div class="background-primary padding text-center">
        <p class="text-strong">Contact Us: (02) 401 6487</p>       
      </div> -->
      
      <!-- Main Footer -->
      <!-- <section class="background-dark full-width"> -->
        <!-- Map -->
<!--         <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">  	  
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.450569537657!2d121.0455697756516!3d14.57338290343976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8458db5a0c7%3A0x76f79991d6f0502a!2sThe+Potter&#39;s+House+Christian+Center!5e0!3m2!1sen!2sph!4v1480406648139" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div> -->
        
        <!-- Collumn 2 -->
        <!-- <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">      -->         
<!--               <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Company Address</h3>
                  <p>Responsive Street 7<br>
                     London / United Kingdom / Europe
                  </p>               
                </div> -->
<!--                 <div class="float-left">
                  <i class="icon-sli-envelope text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">E-mail</h3>
                  <p>contact@sampledomain.com<br>
                     office@sampledomain.com
                  </p>              
                </div> -->
<!--                 <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Quicklinks</h3>

                </div> -->
      <!--       </div>
          </div>
        </div>  
      </section> -->

      <!-- End of Extra Footer details -->

         <div id="sidelink">
          <ul type="1">
              <li> 
                <p><a class="ql_expand" href="#" title="TEST"><strong>Quicklinks</strong></a></p>
              </li>
          </ul>
        </div>

      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Copyright 2016</p>
          <!-- <p class="text-size-12">All images is purchased from Bigstock. Do not use the images in your website.</p> -->
        </div>
        <div class="s-12 l-6">
          <a class="right text-size-12" href="#">The Potter's House Christian Center - Philippines</a>
        </div>
      </section>

      <div id="dialog-form" title="Quicklinks" style="display:none;">
        <ul>
              <?php
                if(count($quicklinks))
                  {
                    foreach($quicklinks as $quicklink)
                      {
              ?>
                        <li>
                          <a href="<?php echo $quicklink->url;?>"><?php echo $quicklink->title;?></a>
                        </li>
              <?php
                      } 
                  }
              ?>
        </ul>
      </div>

      <!-- <link rel="stylesheet" type="text/css" media="all" href="<?php // echo base_url();?>public/css/styles.css"> -->
      <?php if($this->router->fetch_method()=="index") { ?>

      <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>public/css/jquery.lightbox-0.5.css">
      <script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.10.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.lightbox-0.5.min.js"></script>

      <script type="text/javascript">
      $(function() {
          $('#thumbnails a:not(.tab-label)').lightBox();
      });
      </script>

      <?php } ?>

    </footer>
               <!-- header-box begin -->
               <div class="header-box-small">
                  <div class="inner">
                     <ul class="nav">
                     	<li><a href="<?php echo base_url(); ?>" <?php if($activeTab =="home"):?> class="current"<?php endif; ?>>Home page</a></li>
                        <li><a href="<?php echo base_url(); ?>home/services" <?php if($activeTab =="services"):?> class="current"<?php endif; ?>>Services</a></li>
                        <li><a href="<?php echo base_url(); ?>home/gallery" <?php if($activeTab =="gallery"):?> class="current"<?php endif; ?>>Gallery</a></li>
                        <li><a href="<?php echo base_url(); ?>home/restaurant" <?php if($activeTab =="restaurant"):?> class="current"<?php endif; ?>>Restaurant</a></li>
                        <li><a href="<?php echo base_url(); ?>home/testimonials" <?php if($activeTab =="testimonials"):?> class="current"<?php endif; ?>>Testimonials</a></li>
                        <li><a href="<?php echo base_url(); ?>home/booking" <?php if($activeTab =="booking"):?> class="current"<?php endif; ?>>Booking</a></li>
                     </ul>
                  </div>
               </div>
               <!-- header-box end -->

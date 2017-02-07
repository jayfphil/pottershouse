               <!-- header-box-small begin -->
               <div class="header-box-small">
                  <div class="inner">
                     <ul class="nav">
                        <?php
						  $role_id = $this->dx_auth->get_role_id();
						  if($role_id == 11):
						   $home_url = $this->dx_auth->administration_home_uri;
						  elseif($role_id == 9):
						   $home_url = $this->dx_auth->front_office_home_uri;
						  elseif($role_id == 7):
						   $home_url = $this->dx_auth->restaurant_home_uri;
						  elseif($role_id == 5):
						   $home_url = $this->dx_auth->account_home_uri;
						  elseif($role_id == 3):
						   $home_url = $this->dx_auth->store_management_home;
						  elseif($role_id == 1):
						   $home_url = $this->dx_auth->bakery_management_home_uri;
						  endif;
						 ?>
                     	<li><a href="<?php echo base_url().$home_url.'backend'; ?>" <?php if($activeTab =="home"):?> class="current"<?php endif; ?>>Home page</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="restaurant.html">Restaurant</a></li>
                        <li><a href="testimonials.html">Testimonials</a></li>
                        <li><a href="<?php echo base_url().$home_url.'backend/logout'; ?>">Log Out</a></li>
                     </ul>
                  </div>
               </div>
               <!-- header-box-small end -->

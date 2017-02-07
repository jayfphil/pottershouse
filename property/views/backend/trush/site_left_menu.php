                  	<h3>Menu</h3>
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
                     <ul class="list3">
                     	<li><a href="<?php echo base_url().$home_url.'hotel'; ?>">Hotel Name</a></li>
                     	<li><a href="<?php echo base_url().$home_url.'room_type'; ?>">Room Type</a></li>
                     	<li><a href="<?php echo base_url().$home_url.'room_no'; ?>">Room No</a></li>
                        <li><a href="<?php echo base_url().$home_url.'food_type'; ?>">Food Type</a></li>
                        <li><a href="<?php echo base_url().$home_url.'food_name'; ?>">Food Name</a></li>
                        <li><a href="#">Winery</a></li>
                        <li><a href="#">Dessert</a></li>
                        <li><a href="#">Italian</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">German</a></li>
                     </ul>

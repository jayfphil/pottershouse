<!--  start nav-outer -->
<div class="nav-outer"> 
		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<a href="<?php echo  base_url().$this->dx_auth->director_home_uri; ?>logout" id="logout"><img src="<?php echo base_url(); ?>public/images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		                    
		<ul <?php if($activeTab == "backend_home"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->director_home_uri; ?>"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>		
		<div class="nav-divider">&nbsp;</div>

		<ul <?php if($activeTab == "calendar"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->director_uri; ?>calendar"><b>Calendar</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		<ul <?php if($activeTab == "request_service"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->director_uri; ?>request_service/home"><b>Service</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
    			<li><a href="<?php echo base_url().$this->dx_auth->director_uri; ?>request_service/home">Service Home</a></li>  
                        <li><a href="<?php echo base_url().$this->dx_auth->director_uri; ?>request_service/add">Request Service</a></li>
			<li><a href="<?php echo base_url().$this->dx_auth->director_uri; ?>request_service/pending">Pending Services</a></li>
                        <li><a href="<?php echo base_url().$this->dx_auth->director_uri; ?>request_service/scheduled">Scheduled Services</a></li> 
                        <li><a href="<?php echo base_url().$this->dx_auth->director_uri; ?>request_service/completed">Completed Services</a></li> 		
		      </ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>		
		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "property_file"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->director_uri; ?>property_file"><b>Property File</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php  echo base_url().$this->dx_auth->director_uri; ?>property_file">Property File Home</a></li>
			        <li><a href="<?php  echo base_url().$this->dx_auth->director_uri; ?>property_file/add">Property File Entry</a></li>	
                    <li><a href="<?php  echo base_url().$this->dx_auth->director_uri; ?>property_file/search">Property File Search</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
		<ul <?php if($activeTab == "cavailability"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php  echo base_url().$this->dx_auth->director_uri; ?>cavailability"><b>Availability</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php  echo base_url().$this->dx_auth->director_uri; ?>cavailability">Availability Home</a></li>
				<li><a href="<?php  echo base_url().$this->dx_auth->director_uri; ?>cavailability/add">Set Availability</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
   		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "report"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php  echo base_url().$this->dx_auth->director_uri; ?>report"><b>Report</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

   		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "user"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php  echo base_url().$this->dx_auth->director_uri; ?>user"><b>Users</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$this->dx_auth->director_uri; ?>user">User List</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->director_uri; ?>user/registration">User Registration</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->

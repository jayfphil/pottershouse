<!--  start nav-outer -->
<div class="nav-outer"> 
		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<a href="<?php echo  base_url().$this->dx_auth->admin_home_uri; ?>logout" id="logout"><img src="<?php echo base_url(); ?>public/images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		                    
		<ul <?php if($activeTab == "backend_home"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->admin_home_uri; ?>"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>	

		<div class="nav-divider">&nbsp;</div>

		<ul <?php if($activeTab == "calendar"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>calendar"><b>Calendar View</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>

		<ul <?php if($activeTab == "churchdir"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>churchdir"><b>Churches</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

		<div class="nav-divider">&nbsp;</div>

		<ul <?php if($activeTab == "pastors"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>pastors"><b>Pastors</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

		<div class="nav-divider">&nbsp;</div>

		<ul <?php if($activeTab == "prayer_request"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>prayer_request"><b>Prayer Request</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>

		<div class="nav-divider">&nbsp;</div>
		<ul <?php if($activeTab == "events"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>events/home"><b>Events</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>events/add">Create Event</a></li>
    			<li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>events/home">Event List</a></li>  
                <!--<li><a href="<?php // echo base_url().$this->dx_auth->admin_uri; ?>events/scheduled">Scheduled</a></li> 
			    <li><a href="<?php // echo base_url().$this->dx_auth->admin_uri; ?>events/cancelled">Cancelled</a></li>
                <li><a href="<?php // echo base_url().$this->dx_auth->admin_uri; ?>events/completed">Completed</a></li> 
                <li><a href="<?php // echo base_url().$this->dx_auth->admin_uri; ?>events/search">Search Appointment</a></li> 	-->	
		      </ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>		
		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "testimonials"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>>
		<li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>testimonials"><b>Testimonials</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php  echo base_url().$this->dx_auth->admin_uri; ?>testimonials/add">Create New Testimonials</a></li>
				<li><a href="<?php  echo base_url().$this->dx_auth->admin_uri; ?>testimonials">Testimonials List</a></li>
			        	
                <!--<li><a href="<?php  echo base_url().$this->dx_auth->admin_uri; ?>testimonials/search">Testimonials Search</a></li>-->
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
   		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "announcements"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>>
		<li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>announcements"><b>Announcements</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php  echo base_url().$this->dx_auth->admin_uri; ?>announcements/add">Create New Announcements</a></li>
				<li><a href="<?php  echo base_url().$this->dx_auth->admin_uri; ?>announcements">Announcements List</a></li>
			        	
                <!--<li><a href="<?php  echo base_url().$this->dx_auth->admin_uri; ?>testimonials/search">Testimonials Search</a></li>-->
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
   		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "quicklinks"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>>
		<li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>quicklinks"><b>Quick Links</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php  echo base_url().$this->dx_auth->admin_uri; ?>quicklinks/add">Create New Quick Links</a></li>
				<li><a href="<?php  echo base_url().$this->dx_auth->admin_uri; ?>quicklinks">Quick Links List</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
   		<div class="nav-divider">&nbsp;</div>
		
		
		<ul <?php if($activeTab == "user"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php  echo base_url().$this->dx_auth->admin_uri; ?>user"><b>Users</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>user">User List</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>user/registration">User Registration</a></li>
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

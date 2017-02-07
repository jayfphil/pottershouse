<!--  start nav-outer -->
<div class="nav-outer"> 
		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<a href="<?php echo  base_url().$this->dx_auth->user_home_uri; ?>logout" id="logout"><img src="<?php echo base_url(); ?>public/images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		                    
		<ul <?php if($activeTab == "backend_home"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->user_home_uri; ?>"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>	

		<div class="nav-divider">&nbsp;</div>

		<ul <?php if($activeTab == "calendar"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>calendar"><b>Calendar</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		<ul <?php if($activeTab == "appointment"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>appointment/home"><b>Appointment</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
    			<li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>appointment/home">Appointment Home</a></li>  
                <li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>appointment/add">Add</a></li>
                <li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>appointment/scheduled">Scheduled</a></li> 
			    <li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>appointment/cancelled">Cancelled</a></li>
                <li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>appointment/completed">Completed</a></li> 
                <li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>appointment/search">Search Appointment</a></li> 		
		      </ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>		
		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "status_note"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>status_note"><b>Status Note</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php  echo base_url().$this->dx_auth->user_uri; ?>status_note">Status Note Home</a></li>
			        <li><a href="<?php  echo base_url().$this->dx_auth->user_uri; ?>status_note/add">Status Note Entry</a></li>	
                    <li><a href="<?php  echo base_url().$this->dx_auth->user_uri; ?>status_note/search">Status Note Search</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
   		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "report"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php  echo base_url().$this->dx_auth->user_uri; ?>report"><b>Report</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
   		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "configuration"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php  echo base_url().$this->dx_auth->user_uri; ?>company_name"><b>Configuration</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>company_name">Company</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->user_uri; ?>contact_person">Contact Person</a></li>
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

<!--  start nav-outer -->
<div class="nav-outer"> 
          <?php 
		  if($this->roleId == 7):
		   $menu_url      = $this->dx_auth->admin_uri;
		   $menu_home_url = $this->dx_auth->admin_home_uri;
		  elseif($this->roleId == 5):
		   $menu_url      = $this->dx_auth->director_uri;
		   $menu_home_url = $this->dx_auth->director_home_uri;
		  elseif($this->roleId == 3):
		   $menu_url      = $this->dx_auth->clerk_uri;
		   $menu_home_url = $this->dx_auth->clerk_home_uri;
		  elseif($this->roleId == 1):
		   $menu_url      = $this->dx_auth->client_uri;
		   $menu_home_url = $this->dx_auth->client_home_uri;
          endif;
		  ?>
		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<a href="<?php echo  base_url().$menu_home_url; ?>logout" id="logout"><img src="<?php echo base_url(); ?>public/images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		                    
		<ul <?php if($activeTab == "backend_home"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$menu_home_url; ?>"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>		
		<div class="nav-divider">&nbsp;</div>

		<ul <?php if($activeTab == "calendar"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$menu_url; ?>"><b>Calendar</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		<?php if($this->roleId != 3): ?>                  
		<ul <?php if($activeTab == "service"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$menu_url; ?>"><b>Service</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
    			<li><a href="<?php echo base_url().$menu_url; ?>">Pending Service Requests</a></li>                   
				<li><a href="<?php echo base_url().$menu_url; ?>">Request Service</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>		
		<div class="nav-divider">&nbsp;</div>
        <?php endif; ?>
		
		<ul <?php if($activeTab == "property_file"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$menu_url; ?>"><b>Property File</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$menu_url; ?>">Property File Home</a></li>
				<li><a href="<?php echo base_url().$menu_url; ?>">Property File Search</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<?php if($this->roleId != 1): ?> 
		<div class="nav-divider">&nbsp;</div>
		<ul <?php if($activeTab == "availability"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$menu_url; ?>"><b>Availability</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
        <?php endif; ?>
   		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "report"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$menu_url; ?>"><b>Report</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
     	<?php if($this->roleId == 7 || $this->roleId == 5): ?>      

   		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "user"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$menu_url; ?>user"><b>Users</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$menu_url; ?>">User Registration</a></li>
				<li><a href="<?php echo base_url().$menu_url; ?>">User List</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
        <?php endif; ?>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->

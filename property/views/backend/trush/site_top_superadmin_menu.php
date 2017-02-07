<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account"><img src="<?php echo base_url(); ?>public/images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="<?php echo  base_url().$this->dx_auth->superadmin_home_uri; ?>logout" id="logout"><img src="<?php echo base_url(); ?>public/images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="<?php echo base_url().$this->dx_auth->superadmin_home_uri; ?>profile" id="acc-settings">Settings</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="<?php echo base_url().$this->dx_auth->superadmin_home_uri; ?>change_password" id="acc-project">Password Change</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="<?php echo base_url().$this->dx_auth->superadmin_home_uri; ?>show_profile" id="acc-details">Personal details </a>
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		                    
		<ul <?php if($activeTab == "backend_home"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->superadmin_home_uri; ?>"><b>Home</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>		
		<div class="nav-divider">&nbsp;</div>

		<ul <?php if($activeTab == "stock"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>shop"><b>Stock</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>shop">Shop</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>stock_in">Stock In</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>stock_out">Stock Out</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>stock_in/report">Stock Report</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>stock_in/in_report">Stock In Report</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>stock_out/report">Stock Out Report</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>stock_transfer">Stock Transfer</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>stock_transfer/report">Stock Transfer Report</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul <?php if($activeTab == "product"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>product_category"><b>Products</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
    				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>product_category">Product Category</a></li>                   
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>product_type">Product Type</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>unit">Unit Type</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>product">Product</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>product/product_list">Product List</a></li>
				<!--<li><a href="<?php //echo base_url().$this->dx_auth->superadmin_uri; ?>product/report">Product Report</a></li>-->
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "sell"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>currency"><b>Sale</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>currency">Currency Type</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>point_of_sell">Point of Sale</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>point_of_sell/report">Point of Sale Report</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>point_of_sell/daily_sell_report">Daily Sale Report</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>point_of_sell/bar_generator">Barcode Generator</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "received_delivery"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>receive_delivery/report"><b>Delivery/Requisition</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>receive_delivery/report">Received Product Report</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>requisition/report">Requisition Report</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		<ul <?php if($activeTab == "sanck"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>snack_corner"><b>Snack Corner</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>snack_corner">Point of Sale</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>snack_corner/report">Point of Sale Report</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>snack_corner/daily_sell_report">Daily Sale Report</a></li>
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
        
   		<div class="nav-divider">&nbsp;</div>
		
		<ul <?php if($activeTab == "user"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>user"><b>Users</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>user/registration">Registration</a></li>
				<li><a href="<?php echo base_url().$this->dx_auth->superadmin_uri; ?>user">User List</a></li>
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

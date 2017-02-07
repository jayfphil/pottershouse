  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Potter's House Christian Center - Philippines</title>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/elegant/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>public/js/elegant/jquery-ui.min.js"></script> 
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/screen.css" type="text/css" media="screen" title="default" />
    <link rel="shortcut icon" href="<?php echo base_url();?>public/images/574x519.png" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>public/js/jsgrid/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>public/js/jsgrid/jsgrid-theme.min.css" />
    <script type="text/javascript" src="<?php echo base_url();?>public/js/jsgrid/jsgrid.min.js"></script>
  </head>


<div class="clear">&nbsp;</div>
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat">

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

    <ul <?php if($activeTab == "churchdir"): ?> class="current" <?php else: ?> class="select" <?php endif; ?>><li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>churchdir"><b>Church Directory</b><!--[if IE 7]><!--></a><!--<![endif]-->
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
                <!--<li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>events/scheduled">Scheduled</a></li> 
          <li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>events/cancelled">Cancelled</a></li>
                <li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>events/completed">Completed</a></li> 
                <li><a href="<?php echo base_url().$this->dx_auth->admin_uri; ?>events/search">Search Appointment</a></li>  --> 
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

</div>
<!--  start nav-outer-repeat................................................... END -->
 <div class="clear"></div>

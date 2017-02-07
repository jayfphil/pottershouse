  <script type="text/javascript" src="<?php echo base_url().'public/js/'; ?>jquery-1.4.4.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'public/js/'; ?>jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'public/js/'; ?>sexylightbox.v2.3.jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url().'public/css/'; ?>sexylightbox.css" type="text/css" media="all" />

  <script type="text/javascript">
    $(document).ready(function(){
      SexyLightbox.initialize({color:'black', dir: '<?php echo base_url().'public/sexyimages'; ?>'});
    });
  </script>




  <style>
  .alertbox
  {
    background  : no-repeat scroll left top;
    margin      : 0 10px;
    padding     : 0 0 5px 40px;
    font-family : Verdana;
    font-size   : 12px;
    text-align  : left;
  }
  .alertbox .buttons
  {
    text-align  : right;
  }
  </style>


	<!--  start page-heading -->
	<div id="page-heading">
		<h1><?php echo $windowTitle; ?></h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="<?php echo base_url(); ?>public/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="<?php echo base_url(); ?>public/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td align="center">
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		 <?php
		 $userNames = $this->Shows->getThisValue("id = '$this->userId'", 'users');
		 ?>
			<!--  start table-content  -->
			<div align="center" style="margin-top:10px; margin-bottom:40px;" >
            Dear <strong><?php if(count($userNames)): foreach($userNames as $userName): echo ucwords($userName->name_title).' '.ucwords($userName->first_name).' '.ucwords($userName->last_name); endforeach; endif; ?></strong>, Welcome To <?php echo $pageTitle; ?>		
			</div>
				<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center" width="130" onmouseover="style.backgroundColor='#CCCCCC';" onmouseout="style.backgroundColor='#FFFFFF'">
                    <a href="<?php echo base_url().'admin/calendar'; ?>"><img src="<?php echo base_url().'public/images/task/calendar.png'; ?>" alt="calendar" title="calendar" /></a>
                    </td>
					<td align="center" width="40">&nbsp;</td>
                    <td align="center" width="130" onmouseover="style.backgroundColor='#CCCCCC';" onmouseout="style.backgroundColor='#FFFFFF'">
                    <a href="<?php echo base_url().'admin/events'; ?>"><img src="<?php echo base_url().'public/images/task/service.png'; ?>" alt="Events" title="Events" /></a>
                     </td>
					<td align="center" width="40">&nbsp;</td>
                    <td align="center" width="130"  onmouseover="style.backgroundColor='#CCCCCC';" onmouseout="style.backgroundColor='#FFFFFF'">
                    <a href="<?php echo base_url().'admin/testimonials'; ?>"><img src="<?php echo base_url().'public/images/task/availability.png'; ?>" alt="Testimonials" title="Testimonials" /></a>
                     </td>
					<td align="center" width="40">&nbsp;</td>
					
					<td align="center" width="130"  onmouseover="style.backgroundColor='#CCCCCC';" onmouseout="style.backgroundColor='#FFFFFF'">
                    <a href="<?php echo base_url().'admin/announcements'; ?>"><img src="<?php echo base_url().'public/images/task/property_file.png'; ?>" alt="Announcements" title="Announcements" /></a>
                     </td>
					<td align="center" width="40">&nbsp;</td>

                    <!--
					<td align="center" width="40">&nbsp;</td>
					<td align="center" width="130" onmouseover="style.backgroundColor='#CCCCCC';" onmouseout="style.backgroundColor='#FFFFFF'">
                    <a href="<?php echo base_url().'admin/report'; ?>"><img src="<?php echo base_url().'public/images/task/availability.png'; ?>" alt="report" title="report" /></a>
                    </td>-->
				</tr>
				<tr>
					<td align="center"><a href="<?php echo base_url().'admin/calendar'; ?>">Calendar</a> </td>
					<td align="center" width="40">&nbsp;</td>
					<td align="center"><a href="<?php echo base_url().'admin/events'; ?>">Events</a></td>
					<td align="center" width="40">&nbsp;</td>
					<td align="center"><a href="<?php echo base_url().'admin/testmonials'; ?>">Testimonials</a> </td>
					<td align="center" width="40">&nbsp;</td>
					<td align="center"><a href="<?php echo base_url().'admin/announcements'; ?>">Announcements</a> </td>
					<td align="center" width="40">&nbsp;</td>
					
					<!--<td align="center" width="40">&nbsp;</td>
					<td align="center"><a href="<?php echo base_url().'admin/report'; ?>">Report</a> </td>-->
				</tr>
                <tr height="15"><td colspan="9" >&nbsp;</td></tr>
				<tr>
					<td align="center" width="130"  onmouseover="style.backgroundColor='#CCCCCC';" onmouseout="style.backgroundColor='#FFFFFF'">
                    <a href="<?php echo base_url().'admin/user'; ?>"><img src="<?php echo base_url().'public/images/task/user.png'; ?>" alt="users" title="users" /></a>
                    </td>

					<td align="center" width="40">&nbsp;</td>

					<td align="center" width="130" onmouseover="style.backgroundColor='#CCCCCC';" onmouseout="style.backgroundColor='#FFFFFF'">
                    <a href="<?php echo base_url().'admin/churchdir'; ?>"><img src="<?php echo base_url().'public/images/task/report.png'; ?>" alt="Church Directory" title="Church Directory" /></a>
                    </td>

                    <td align="center" width="40">&nbsp;</td>

					<td align="center" width="130" onmouseover="style.backgroundColor='#CCCCCC';" onmouseout="style.backgroundColor='#FFFFFF'">
                    <a href="<?php echo base_url().'admin/pastors'; ?>"><img src="<?php echo base_url().'public/images/task/pastor.png'; ?>" alt="Pastors" title="Pastors" /></a>
                    </td>

					<td align="center" width="40">&nbsp;</td>

					<td align="center" width="130" onmouseover="style.backgroundColor='#CCCCCC';" onmouseout="style.backgroundColor='#FFFFFF'">
                    <a href="<?php echo base_url().'admin/prayer_request'; ?>"><img src="<?php echo base_url().'public/images/task/prayer.png'; ?>" alt="Prayer Request" title="Prayer Request" /></a>
                    </td>

				</tr>
				<tr>
					<td align="center"><a href="<?php echo base_url().'admin/user'; ?>">Users</a> </td>
					<td align="center" width="40">&nbsp;</td>
					<td align="center"><a href="<?php echo base_url().'admin/churchdir'; ?>">Church Directory</a> </td>
					<td align="center" width="40">&nbsp;</td>
					<td align="center"><a href="<?php echo base_url().'admin/pastors'; ?>">Pastors</a> </td>
					<td align="center" width="40">&nbsp;</td>
					<td align="center"><a href="<?php echo base_url().'admin/prayer_request'; ?>">Prayer Request</a> </td>
					<td align="center" width="40">&nbsp;</td>
				</tr>
				</table> 
			<!--  end table-content  -->
	
			<div class="clear"></div>
		 
		</div>
        
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>
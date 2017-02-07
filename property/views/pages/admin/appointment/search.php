<?php
$start_date = array(
	'name'	=> 'start_date',
	'id'	=> 'start_date',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('start_date')
);

$end_date = array(
	'name'	=> 'end_date',
	'id'	=> 'end_date',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('end_date')
);

?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/public/css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"start_date",
			dateFormat:"%Y-%m-%d"
		});
		new JsDatePick({
			useMode:2,
			target:"end_date",
			dateFormat:"%Y-%m-%d"
		});
	};
</script>
<div id="page-heading"><h1><?php echo $windowTitle; ?></h1></div>

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
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
        <?php echo form_open($this->uri->uri_string()); ?>
        <?php echo ucwords($this->dx_auth->get_auth_error()); ?>
 
   
          <table border="0" width="70%" cellpadding="0" cellspacing="0"  id="id-form">
               <tr>
                    <th valign="top"><?php echo "Company Name"; ?><span class="markcolor"></span></th>
                    <td valign="top"><?php echo form_dropdown('company_id', $OptionCompany, set_value('company_id'), 'style="width:200px; height:35px;"'); ?>
                    <p>&nbsp;</p> 
                    <span class="markcolor"><?php echo ucwords(form_error('company_id')); ?></span>
                    
                    </td>
                    <td>&nbsp;</td>
                    <th valign="top"><?php echo "Service Type"; ?><span class="markcolor"></span></th>
                    <td valign="top"><?php echo form_dropdown('service_type_id', $OptionServiceType, set_value('service_type_id'), 'style="width:200px; height:35px;"'); ?>
                    <p>&nbsp;</p> 
                    <span class="markcolor"><?php echo ucwords(form_error('service_type_id')); ?></span>                    
                    </td>
                    <td>&nbsp;</td>
                </tr>
		<tr>
			<th valign="top"><?php echo "Start Date"; ?><span class="markcolor"></span></th>
			<td valign="top"><?php echo form_input($start_date); ?>
                        <p>&nbsp;</p>    
                        <span class="markcolor"><?php echo ucwords(form_error('start_date')); ?></span></td>                       
                        <td>&nbsp;</td>
                        <th valign="top"><?php echo "End Date"; ?><span class="markcolor"></span></th>
			            <td valign="top"><?php echo form_input($end_date); ?><p>&nbsp;</p> 
                           <span class="markcolor"><?php echo ucwords(form_error('end_date')); ?></span>
                        </td>
                        <td>&nbsp;</td>
		 </tr>
               <tr>
                    <th valign="top"><?php echo "Appointment By"; ?><span class="markcolor"></span></th>
                    <td valign="top"><?php echo form_dropdown('user_id', $OptionUser, set_value('user_id'), 'style="width:200px; height:35px;"'); ?>
                    <p>&nbsp;</p> 
                    <span class="markcolor"><?php echo ucwords(form_error('user_id')); ?></span>
                    
                    </td>
                    <td>&nbsp;</td>
                    <th valign="top"><?php echo "Appointment Status"; ?><span class="markcolor"></span></th>
                    <td valign="top"><?php echo form_dropdown('service_status', $OptionServiceStatus, set_value('service_status'), 'style="width:200px; height:35px;"'); ?>
                    <p>&nbsp;</p> 
                    <span class="markcolor"><?php echo ucwords(form_error('service_status')); ?></span>                    
                    </td>
                    <td>&nbsp;</td>
                </tr>
       
          <tr>
            <th colspan="2">&nbsp;</th>
            <td valign="top">
                <?php echo form_reset('reset', 'Reset', 'style="height:40px; width:60px;"'); ?>
                <?php echo form_submit('submit', 'Search', 'style="height:40px; width:60px;"'); ?>
            </td>
            <td></td>
        </tr>
	</table>
    <?php echo form_close(); ?>
	<!-- end id-form  -->

	</td>
	<td></td>
</tr>
<tr>
<td><img src="<?php echo base_url(); ?>public/images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
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

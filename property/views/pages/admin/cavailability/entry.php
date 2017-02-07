<?php

$not_avail_from_date = array(
	'name'	=> 'not_avail_from_date',
	'id'	=> 'not_avail_from_date',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('not_avail_from_date')
);

$not_avail_to_date = array(
	'name'	=> 'not_avail_to_date',
	'id'	=> 'not_avail_to_date',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('not_avail_to_date')
);
$reason = array(
	'name'	=> 'reason',
	'id'	=> 'reason',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('reason')
);
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/public/css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"not_avail_from_date",
			dateFormat:"%d-%m-%Y"
		});
		new JsDatePick({
			useMode:2,
			target:"not_avail_to_date",
			dateFormat:"%d-%m-%Y"
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
       <?php if(!empty($admin_message)): ?> 
        <!--  start message-green -->
        <div id="message-green">
        <table border="0" width="100%" height="25" cellpadding="0" cellspacing="0">
        <tr>
            <td class="green-left"><?php echo $admin_message; ?>.&nbsp;&nbsp;<a href="<?php echo base_url().$this->aadmin->Acavailability_home_uri; ?>">View all.</a></td>
            <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
        </tr>
        </table>
        </div>
        <!--  end message-green -->
       <?php endif; ?> 
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top"><?php echo "Clerk Name"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_dropdown('clerk_id', $OptionClerk, set_value('clerk_id'), 'style="width:200px; height:35px;"'); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('clerk_id')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Not Available From"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($not_avail_from_date); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('not_avail_from_date')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Time"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_dropdown('not_avail_from_time', $OptionTime, set_value('not_avail_from_time'), 'style="width:200px; height:35px;"'); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('not_avail_from_time')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Not Available To"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($not_avail_to_date); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('not_avail_to_date')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Time"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_dropdown('not_avail_to_time', $OptionTime, set_value('not_avail_to_time'), 'style="width:200px; height:35px;"'); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('not_avail_to_time')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Remark"; ?><span class="markcolor"></span></th>
			<td><?php echo form_input($reason); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('reason')); ?></div>
           </td>
		</tr>
        <tr>
            <th>&nbsp;</th>
            <td valign="top">
                <?php echo form_submit('submit', '', 'class="form-submit"'); ?>
                <?php echo form_reset('reset', '', 'class="form-reset"'); ?>
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

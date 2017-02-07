<?php
$contact_person_name = array(
	'name'	=> 'contact_person_name',
	'id'	=> 'contact_person_name',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('')
);
$designation = array(
	'name'	=> 'designation',
	'id'	=> 'designation',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('')
);
$contact_no = array(
	'name'	=> 'contact_no',
	'id'	=> 'contact_no',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('')
);

$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('')
	);

?>

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
		<?php echo form_open_multipart($this->uri->uri_string()); ?>
        <?php echo ucwords($this->dx_auth->get_auth_error()); ?>
       <?php if(!empty($admin_message)): ?> 
        <!--  start message-green -->
        <div id="message-green">
        <table border="0" width="100%" height="25" cellpadding="0" cellspacing="0">
        <tr>
            <td class="green-left"><?php echo $admin_message; ?>. <a href="<?php echo base_url().$this->aadmin->Acontact_person_home_uri; ?>">View all.</a></td>
            <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
        </tr>
        </table>
        </div>
        <!--  end message-green -->
       <?php endif; ?> 
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top"><?php echo "Company Name"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_dropdown('company_id', $OptionCompany, set_value('company_id'), 'style="width:200px; height:35px;"'); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('company_id')); ?></div>
           </td>
		</tr>
        <tr>
			<th valign="top"><?php echo "Contact Person"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($contact_person_name); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('contact_person_name')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Designation"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($designation); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('designation')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Contact Number"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($contact_no); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('contact_no')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Email Address"; ?><span class="markcolor"></span></th>
			<td><?php echo form_input($email); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('email')); ?></div>
           </td>
		</tr>
        <tr>
            <th>&nbsp;</th>
            <td valign="top">
                <?php 
				      echo form_submit('submit','', 'class="form-submit"');
				      echo form_reset('reset','', 'class="form-reset"');
				?>
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

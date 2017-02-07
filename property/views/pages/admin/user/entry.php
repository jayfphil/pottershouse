<?php

$name_title = array(
	'name'	=> 'name_title',
	'id'	=> 'name_title',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  @$_POST['name_title']
);

$first_name = array(
	'name'	=> 'first_name',
	'id'	=> 'first_name',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  @$_POST['first_name']
);
$last_name = array(
	'name'	=> 'last_name',
	'id'	=> 'last_name',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  @$_POST['last_name']
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  ''
);

$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  ''
);

$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  @$_POST['email']
	);
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/jquery.autocomplete.css" />
<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.autocomplete.js'></script>
<script type="text/javascript">
$().ready(function() {

    $("#company_name").attr("disabled", "disabled");
	$("#name_title").autocomplete('<?php echo base_url().'/public/name_title.php'; ?>', {
		width: 198,
		multiple: false,
		matchContains: true,
		scroll: true,
		scrollHeight: 120
	});
	
	$(".error").hide();
	$(".error-inner").each(function() {
		if($(this).text().length > 0)
		{
			$(this).parent().show();
		}
	});

});

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
            <td class="green-left"><?php echo $admin_message; ?>. <a href="<?php echo base_url().'admin/user/registration'; ?>">New Registration</a>&nbsp;&nbsp;<a href="<?php echo base_url().$this->aadmin->Auser_home_uri; ?>">View all.</a></td>
            <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
        </tr>
        </table>
        </div>
        <!--  end message-green -->
       <?php endif; ?> 
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
			<th valign="top"><?php echo "Title"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($name_title); ?></td>
			<td class="error">
	            <div class="error-left"></div>
				<div class="error-inner"><?php echo ucwords(form_error('name_title')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "First Name"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($first_name); ?></td>
			<td class="error">
	            <div class="error-left"></div>
				<div class="error-inner"><?php echo ucwords(form_error('first_name')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Last Name"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($last_name); ?></td>
			<td class="error">
	            <div class="error-left"></div>
				<div class="error-inner"><?php echo ucwords(form_error('last_name')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Email"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($email); ?></td>
			<td class="error">
	            <div class="error-left"></div>
				<div class="error-inner"><?php echo ucwords(form_error('email')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Password"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_password($password); ?></td>
			<td class="error">
	            <div class="error-left"></div>
				<div class="error-inner"><?php echo ucwords(form_error('password')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Confirm Password"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_password($confirm_password); ?></td>
			<td class="error">
	            <div class="error-left"></div>
				<div class="error-inner"><?php echo ucwords(form_error('confirm_password')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "User Type"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_dropdown('user_type', $OptionsUserType, set_value('user_type'), "style='width:200px; height:35px;'  onchange='getPerson(this.value)'"); ?></td>
			<td class="error">
	            <div class="error-left"></div>
				<div class="error-inner"><?php echo ucwords(form_error('user_type')); ?></div>
           </td>
		</tr>
        <tr>
            <th>&nbsp;</th>
            <td valign="top">
                <?php echo form_submit('submit', 'Add', 'class="myButton"'); ?>
                <?php echo form_reset('reset', 'Reset', 'class="myButtonsub"'); ?>
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

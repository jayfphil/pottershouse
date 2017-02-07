<?php
if(count($users)): foreach($users as $user): endforeach; endif;

$name_title = array(
	'name'	=> 'name_title',
	'id'	=> 'name_title',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $user->name_title
);

$first_name = array(
	'name'	=> 'first_name',
	'id'	=> 'first_name',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $user->first_name
);
$last_name = array(
	'name'	=> 'last_name',
	'id'	=> 'last_name',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $user->last_name
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $user->password
);

$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $user->password
);

$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $user->email
	);
	
$company_name = array(
	'name'	=> 'company_name',
	'id'	=> 'company_name',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $user->company_name
	);
	if(!empty($user->hidden_planner)):	
	$hidden_planner = array(
		'name'        => 'hidden_planner',
		'id'          => 'hidden_planner',
		'value'       => '1',
		'checked'     => TRUE,
		'style'       => 'margin:10px',
		);
	else:
	$hidden_planner = array(
		'name'        => 'hidden_planner',
		'id'          => 'hidden_planner',
		'value'       => '1',
		'checked'     => FALSE,
		'style'       => 'margin:10px',
		);
	endif;
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/jquery.autocomplete.css" />
<script type='text/javascript' src='<?php echo base_url(); ?>public/js/jquery.autocomplete.js'></script>
<script type="text/javascript">
$().ready(function() {

	$("#name_title").autocomplete('<?php echo base_url().'/public/name_title.php'; ?>', {
		width: 198,
		multiple: false,
		matchContains: true,
		scroll: true,
		scrollHeight: 120
	});
	
	$("#company_name").autocomplete('<?php echo base_url().'/public/company_name.php'; ?>', {
		width: 198,
		multiple: false,
		matchContains: true,
		scroll: true,
		scrollHeight: 120
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
            <td class="green-left"><?php echo $admin_message; ?>&nbsp;<a href="<?php echo base_url().$this->aadmin->Auser_home_uri; ?>">View all.</a></td>
            <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
        </tr>
        </table>
        </div>
        <!--  end message-green -->
       <?php endif; ?> 
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top"><?php echo "User Type"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_dropdown('role_id', $OptionAdminUserType, $user->role_id, 'class="styledselect_form_1"'); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('role_id')); ?></div>
           </td>
		</tr>
        <tr>
			<th valign="top"><?php echo "Title"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($name_title); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('name_title')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "First Name"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($first_name); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('first_name')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Last Name"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($last_name); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('last_name')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Email"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($email); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('email')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Password"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_password($password); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('password')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Conform Password"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_password($confirm_password); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('confirm_password')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Company Name"; ?><span class="markcolor"></span></th>
			<td><?php echo form_input($company_name); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('company_name')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Hidden in Planner"; ?><span class="markcolor"></span></th>
			<td><?php echo form_checkbox($hidden_planner); ?></td>
			<td>&nbsp;</td>
		</tr>
        <tr>
            <th>&nbsp;</th>
            <td valign="top">
               <?php echo form_hidden('id', $user->id); ?>
                <input type="submit" value="" class="form-submit" />
                <input type="reset" value="" class="form-reset"  />
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

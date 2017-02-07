<?php

$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'size' 	=> 50,
	'value' => set_value('old_password')
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'size'	=> 50
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'size' 	=> 50
);
?>
<h2>Admin Panel - Change Password Form</h2>
<p></p>
<?php if(!empty($admin_message)){echo "<div class='msg'>".$admin_message."</div>";} ?>
<?php echo form_open($this->uri->uri_string()); ?>
<?php echo ucwords($this->dx_auth->get_auth_error()); ?>
<fieldset>

   <table>
        <tr height="10"><td colspan="3"></td></tr>

        <tr>
        <td align="left" valign="top"><?php echo form_label('Old Password', $old_password['id']); ?><span class="markcolor">*</span></td>
        <td valign="top">:</td>
        <td  valign="top">
		    <?php echo form_password($old_password); ?>
            <span class="markcolor"><?php echo ucwords(form_error($old_password['name'])); ?></span>
        </td>
        </tr>
        <tr><td colspan="3"></td></tr>
        <tr>
        <td align="left" valign="top"><?php echo form_label('New Password', $new_password['id']); ?><span class="markcolor">*</span></td>
        <td valign="top">:</td>
        <td  valign="top">
		    <?php echo form_password($new_password); ?>
            <span class="markcolor"><?php echo ucwords(form_error($new_password['name'])); ?></span>
        </td>
        </tr>
        <tr><td colspan="3"></td></tr>
       
        <tr>
        <td align="left" valign="top"><?php echo form_label('Conform New Password', $confirm_new_password['id']); ?><span class="markcolor">*</span></td>
        <td valign="top">:</td>
        <td  valign="top">
		    <?php echo form_password($confirm_new_password); ?>
            <span class="markcolor"><?php echo ucwords(form_error($confirm_new_password['name'])); ?></span>
        </td>
        </tr>
        <tr><td colspan="3"></td></tr>
     
        <tr>
        <td colspan="2"></td>
        <td>
        <?php echo form_submit('change', 'Change Password', 'class="buttonBlue"'); ?>
        </td>
        </tr>
   </table>
 </fieldset>
<?php echo form_close(); ?>

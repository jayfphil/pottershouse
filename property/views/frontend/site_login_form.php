	<?php

$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'class'	=> 'login-inp',
	'value' => set_value('email'),
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'class'	=> 'login-inp',
	'value' => set_value('password')
);
$remember = array(
	'name'		=> 'remember',
	'id'		=> 'login-check',
	'class'	    => 'checkbox-size',
	'value'		=> 1,
	'checked'	=> set_value('remember'),
);
?>
<?php echo form_open($this->uri->uri_string()); ?>

<?php $sa = $this->dx_auth->get_auth_error(); if(!empty($sa)): ?><div  class="error_message"><?php echo ucwords($sa); ?></div><?php endif; ?>
        
        <table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo form_label('Email', 'email'); ?><span class="markcolor">*</span></th>
			<td>
	        <?php echo form_input($email); ?>
            <span class="markcolor"><?php echo ucwords(form_error($email['name'])); ?></span>
            </td>
		</tr>
		<tr>
			<th><?php echo form_label('Password', 'password'); ?><span class="markcolor">*</span></th>
			<td>
	        <?php echo form_password($password); ?>
            <span class="markcolor"><?php echo ucwords(form_error($password['name'])); ?></span>
            </td>
		</tr>
		<tr>
			<th></th>
			<td valign="top">
			<?php echo form_checkbox($remember); ?>
           <label for="login-check">Remember me</label>
            </td>
		</tr>
		<tr>
			<th></th>
			<td>
           <?php echo form_submit('login', 'Submit', 'class="submit-login"'); ?>
            </td>
		</tr>
		</table>
<?php echo form_close(); ?>
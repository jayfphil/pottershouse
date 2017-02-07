<?php

$client_name_number = array(
	'name'	=> 'client_name_number',
	'id'	=> 'client_name_number',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('client_name_number')
);

$street1 = array(
	'name'	=> 'street1',
	'id'	=> 'street1',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('street1')
);
$street2 = array(
	'name'	=> 'street2',
	'id'	=> 'street2',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('street2')
);
$town = array(
	'name'	=> 'town',
	'id'	=> 'town',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('town')
);

$post_code = array(
	'name'	=> 'post_code',
	'id'	=> 'post_code',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('post_code')
);

$county = array(
	'name'	=> 'county',
	'id'	=> 'county',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('county')
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
		<?php echo form_open($this->uri->uri_string()); ?>
        <?php echo ucwords($this->dx_auth->get_auth_error()); ?>
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top"><?php echo "Name / Number"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($client_name_number); ?></td>
			<td>
                       <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('client_name_number')); ?></div>
               </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Street"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($street1); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('street1')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "....."; ?><span class="markcolor"></span></th>
			<td><?php echo form_input($street2); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('street2')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Town"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($town); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('town')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Post Code"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($post_code); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('post_code')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "County"; ?><span class="markcolor"></span></th>
			<td><?php echo form_input($county); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('county')); ?></div>
           </td>
		</tr>
                <tr>
                    <th valign="top"><?php echo "Property Size"; ?><span class="markcolor">*</span></th>
                    <td><?php echo form_dropdown('property_size', $OptionPropertySize, set_value('property_size'), 'style="width:200px; height:35px;"'); ?></td>
                    <td>
                    <div class="error-left"></div>
                    <div class="error-inner"><?php echo ucwords(form_error('property_size')); ?></div>
                    </td>
                </tr>

		<tr>
			<th valign="top"><?php echo "Company Name"; ?><span class="markcolor"></span></th>
            <td><?php echo form_dropdown('company_name', $OptionCompanyName, set_value('company_name'), 'style="width:200px; height:35px;"'); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('company_name')); ?></div>
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

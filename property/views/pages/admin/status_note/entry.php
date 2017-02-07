<?php
$note = array(
	'name'	   => 'note',
	'id'	   => 'note',
	'rows'     => '4',
	'cols'     => '21',
	'style'    => 'padding: 6px 6px 0 6px;',
	'value'    => set_value('')
);

?>

<div id="page-heading"><h1><?php echo $windowTitle; ?></h1></div>
<script type="text/javascript">
	function getPerson(val)
	{
        document.getElementById("person_name").innerHTML='<img  alt="loading ..." src ="<?php echo base_url(); ?>public/images/progress.gif" border="0" />';
		url="<?php echo base_url(); ?>public/get_person.php?company_id="+val;
		try
		{// Firefox, Opera 8.0+, Safari, IE7
			xm=new XMLHttpRequest();
		}
		catch(e)
		{// Old IE
			try
			{
				xm=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e)
			{
				alert ("Your browser does not support XMLHTTP!");
				return;
			}
		}
		xm.open("GET",url,false);
		xm.send(null);
		msg=xm.responseText;		
		document.getElementById("person_name").innerHTML=msg;				
	}
	
</script>
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
            <td class="green-left"><?php echo $admin_message; ?>. <a href="<?php echo base_url().$this->aadmin->Astatus_note_home_uri; ?>">View all.</a></td>
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
			<td><?php echo form_dropdown('company_id', $OptionCompany, set_value('company_id'), "style='width:200px; height:35px;'  onchange='getPerson(this.value)'"); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('company_id')); ?></div>
           </td>
		</tr>
        <tr>
			<th valign="top"><?php echo "Contact Person"; ?><span class="markcolor">*</span></th>
			<td><div id="person_name" style="width:200px;"><?php echo form_dropdown('contact_person_id', $OptionContactPerson, set_value('contact_person_id'), 'style="width:200px; height:35px;"'); ?></div></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('contact_person_id')); ?></div>
           </td>
		</tr>
        <tr>
			<th valign="top"><?php echo "Service Type"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_dropdown('service_type_id', $OptionServiceType, set_value('service_type_id'), 'style="width:200px; height:35px;"'); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('service_type_id')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Service Note"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_textarea($note); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('note')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Level Status"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_dropdown('person_level_id', $OptionLevel, set_value('person_level_id'), 'style="width:200px; height:35px;"'); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('person_level_id')); ?></div>
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

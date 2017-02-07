<?php

$lastname = array(
	'name'	   => 'lastname',
	'id'	   => 'lastname',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => $pastorInfo->lastName
);

$firstname = array(
	'name'	   => 'firstname',
	'id'	   => 'firstname',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => $pastorInfo->firstName
);

$middlename = array(
	'name'	   => 'middlename',
	'id'	   => 'middlename',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => $pastorInfo->middleName
);

$wifename = array(
	'name'	   => 'wifename',
	'id'	   => 'wifename',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => $pastorInfo->pastorswife
);

$contacts = array(
	'name'	   => 'contacts',
	'id'	   => 'contacts',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => $pastorInfo->contacts
);

$emails = array(
	'name'	   => 'emails',
	'id'	   => 'emails',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => $pastorInfo->emails
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
            <td class="green-left"><?php echo $admin_message; ?>. <a href="<?php echo base_url().'admin/pastors/home/'; ?>">View all.</a></td>
            <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
        </tr>
        </table>
        </div>
        <!--  end message-green -->
       <?php endif; ?> 
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">

		<tr>
			<th valign="top"><?php echo "First Name"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($firstname); ?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('firstname')); ?></span>
           </td>
		</tr>
		
		<tr>
			<th valign="top"><?php echo "Middle Name"; ?></th>
			<td><?php echo form_input($middlename); ?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('middlename')); ?></span>
           </td>
		</tr>

		<tr>
			<th valign="top"><?php echo "Last Name"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($lastname); ?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('lastname')); ?></span>
           </td>
		</tr>

		<tr>
			<th valign="top"><?php echo "Wife's Full Name"; ?></th>
			<td><?php echo form_input($wifename); ?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('wifename')); ?></span>
           </td>
		</tr>

        <tr>
			<th valign="top"><?php echo "Upload Pastor's w/ Wife Photo"; ?></th>
			<td><input type="file" name="userfile" id="userfile" style="width: 280px; padding: 6px;"> <p>
			<?php if(!empty($pastorInfo->photo)){
				?>
				<img src="<?php echo base_url();?>public/photos/pastor/<?php echo $pastorInfo->photo?>" width="30%">
				<?php
				}?>
			</p>
			</td>
			<td>
            
           </td>
		</tr>

		<tr>
			<th valign="top"><?php echo "Contacts"; ?></th>
			<td><?php echo form_input($contacts); ?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('contacts')); ?></span>
           </td>
		</tr>

		<tr>
			<th valign="top"><?php echo "Emails"; ?></th>
			<td><?php echo form_input($emails); ?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('emails')); ?></span>
           </td>
		</tr>

        <tr>
            <th>&nbsp;</th>
            <td valign="top">
                <?php 
				      echo form_submit('submit','Save', 'class="myButton"');
				      echo "&nbsp;";
				      echo form_reset('reset','Reset', 'class="myButtonsub"');
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

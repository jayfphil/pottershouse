<?php
/* if(count($companyValues)):
    foreach($companyValues as $companyValue):
    $company_id    = $companyValue->id;
    $company_name  = $companyValue->company_name;
    $address       = $companyValue->address;
    $contact_no    = $companyValue->contact_no;
    $email         = $companyValue->email;
    endforeach;
endif;
if(!empty($company_id)): $company_id = $company_id; else: $company_id = set_value('company_id');  endif;
if(!empty($company_name)): $company_name = $company_name; else: $company_name = set_value('company_name'); endif;
if(!empty($address)): $address = $address; else: $address = set_value('company_address'); endif;
if(!empty($contact_no)): $contact_no = $contact_no; else: $contact_no = set_value('contact_no'); endif;
if(!empty($email)): $email = $email; else: $email = set_value('email'); endif; */



$body = array(
	'name'	    => 'body',
	'id'	    => 'body',
    'class'=>'ckeditor',
	'value' =>   set_value('body')
);

$title = array(
	'name'	    => 'title',
	'id'	    => 'title',
    'required' => true,  
	'style'     => 'height: 25px; padding: 6px 6px 6px 6px; width: 650px;',
	'value' =>   set_value('title')
);

$link = array(
	'name'	    => 'link',
	'id'	    => 'link',
    'required' => true,  
	'style'     => 'height: 25px; padding: 6px 6px 6px 6px; width: 650px;',
	'value' =>   set_value('link')
);

$date = array(
	'name'	=> 'date',
	'id'	=> 'date',
	'style' => 'height: 25px; padding: 6px 6px 6px 6px; width: 186px;',
	'placeholder'=>'Event Date',
	'required' => true,  
	'value' =>  set_value('date')
	);
	
$expiration_date = array(
	'name'	=> 'expiration_date',
	'id'	=> 'expiration_date',
	'style' => 'height: 25px; padding: 6px 6px 6px 6px; width: 186px;',
	'placeholder'=>'Event Expiration Date',
	'value' =>  set_value('expiration_date')
	);

?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/public/css/jsDatePick_ltr.min.css" />
<script src="<?php echo base_url(); ?>/public/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>/public/ckeditor/adapters/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"date",
			dateFormat:"%d-%m-%Y"
		});
		
		new JsDatePick({
			useMode:2,
			target:"expiration_date",
			dateFormat:"%d-%m-%Y"
		});
	};
</script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>
<div id="page-heading"><h1><?php echo $windowTitle; ?></h1></div>

  <?php echo ucwords($this->dx_auth->get_auth_error()); ?>
       <?php if(!empty($admin_message)): ?> 
        <!--  start message-green -->
        <div id="message-green">
        <table border="0" width="100%" height="25" cellpadding="0" cellspacing="0">
        <tr>
            <td class="green-left"><?php echo $admin_message; ?>&nbsp;&nbsp;<a href="<?php echo base_url().$this->aadmin->Events_home_uri; ?>">View all.</a></td>
            <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
        </tr>
        </table>
        </div>
        <!--  end message-green -->
       <?php endif; ?> 
 
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
    
 
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
       
     
        <table border="0" width="70%" cellpadding="0" cellspacing="0"  id="id-form">
		
		<tr>
			<th valign="top"><?php echo "Event Date"; ?><span class="markcolor"> *</span></th>
			<td valign="top"><?php echo form_input($date); ?>
			<p>&nbsp;</p> 
			<span class="markcolor"><?php echo ucwords(form_error('date')); ?></span>
		   </td>
		   <td>&nbsp;</td>
		   <th valign="top"><?php echo "Event Time"; ?><span class="markcolor">*</span></th>
		   <td valign="top"><?php echo form_dropdown('time', $OptionTime, set_value('time'), 'style="width:200px; height:35px;" required'); ?>
		   <p>&nbsp;</p> 
		   <span class="markcolor"><?php echo ucwords(form_error('time')); ?></span>                       
		   </td>
		   <td>&nbsp;</td>
	    </tr>
		   
		<tr>
				<th valign="top"><?php echo "Event Title"; ?><span class="markcolor">*</span></th>
				<td colspan="5"><?php echo form_input($title); ?><p>&nbsp;</p> 
					<span class="markcolor"><?php echo ucwords(form_error('title')); ?>
				</td>
				
		 </tr>
		 
		 <tr>
				<th valign="top"><?php echo "Event Description"; ?><span class="markcolor">*</span></th>
				<td colspan="5"><?php echo form_textarea($body); ?><p>&nbsp;</p> 
					<span class="markcolor"><?php echo ucwords(form_error('body')); ?>
				</td>
				
		 </tr>
		 
		 <tr>
				<th valign="top"><?php echo "Upload Event Image"; ?></th>
				<td colspan="5">
					<input type="file" name="userfile" id="userfile" style="padding: 6px;width: 650px">
				<p>&nbsp;</p> 
					<span class="markcolor"><?php echo ucwords(form_error('userfile')); ?>
				</td>
				
		 </tr>
		 <!--
		 <tr>
				<th valign="top"><?php echo "Upload Event Attachement file"; ?></th>
				<td colspan="5">
					<input type="file" name="userfile2" id="userfile2" style="padding: 6px;width: 650px">
				<p>&nbsp;</p> 
					<span class="markcolor"><?php echo ucwords(form_error('userfile2')); ?>
				</td>
				
		 </tr>-->
		 <tr>
				<th valign="top"><?php echo "Event URL"; ?></th>
				<td colspan="5">
					<?php echo form_input($link); ?>
				<p>&nbsp;</p> 
					<span class="markcolor"><?php echo ucwords(form_error('link')); ?>
				</td>
				
		 </tr>
		 
		 
		
		<tr>
			<th valign="top"><?php echo "Event Status"; ?><span class="markcolor"> *</span></th>
			<td valign="top">
				<select name="status" id="status" style="height: 38px; padding: 6px;width: 200px;" required>
					<option value="Approved">Approved</option>
					<option value="Rejected">Rejected</option>
				</select>
			<span class="markcolor"><?php echo ucwords(form_error('status')); ?></span>
		   </td>
		   <td>&nbsp;</td>
		   <th valign="top"><?php echo "Event Expiration Date"; ?><span class="markcolor">*</span></th>
		   <td valign="top"><?php echo form_input($expiration_date); ?>
		   <p>&nbsp;</p> 
		   <span class="markcolor"><?php echo ucwords(form_error('expiration_date')); ?></span>                       
		   </td>
		   <td>&nbsp;</td>
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

<?php

if(count($appointmentValues)):
    foreach($appointmentValues as $appointmentValue):
     endforeach;
endif;

$body = array(
	'name'	    => 'body',
	'id'	    => 'body',
    'class'=>'ckeditor',
	'value' =>  $appointmentValue->body
);

$title = array(
	'name'	    => 'title',
	'id'	    => 'title',
    'required' => true,  
	'style'     => 'height: 25px; padding: 6px 6px 6px 6px; width: 650px;',
	'value' =>   $appointmentValue->title
);

$link = array(
	'name'	    => 'link',
	'id'	    => 'link',
    'required' => true,  
	'style'     => 'height: 25px; padding: 6px 6px 6px 6px; width: 650px;',
	'value' =>   $appointmentValue->link
);

$date = array(
	'name'	=> 'date',
	'id'	=> 'date',
	'style' => 'height: 25px; padding: 6px 6px 6px 6px; width: 186px;',
	'placeholder'=>'Event Date',
	'required' => true,  
	'value' =>  date('d-m-Y',strtotime($appointmentValue->date))
	);
	
$expiration_date = array(
	'name'	=> 'expiration_date',
	'id'	=> 'expiration_date',
	'style' => 'height: 25px; padding: 6px 6px 6px 6px; width: 186px;',
	'placeholder'=>'Event Expiration Date',
	'value' =>  date('d-m-Y',strtotime($appointmentValue->expiration))
	);


?>
<script src="<?php echo base_url(); ?>/public/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>/public/ckeditor/adapters/jquery.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/public/css/jsDatePick_ltr.min.css" />

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
        <?php echo form_open_multipart($this->uri->uri_string()); ?>
        <?php echo ucwords($this->dx_auth->get_auth_error()); ?>
 
   
          <table border="0" width="70%" cellpadding="0" cellspacing="0"  id="id-form">

		
            <tr>
			<th valign="top"><?php echo "Event Date"; ?><span class="markcolor"> *</span></th>
			<td valign="top"><?php echo form_input($date); ?>
			<p>&nbsp;</p> 
			<span class="markcolor"><?php echo ucwords(form_error('date')); ?></span>
		   </td>
		   <td>&nbsp;</td>
		   <th valign="top"><?php echo "Event Time"; ?><span class="markcolor">*</span></th>
		   <td valign="top">
			<select name="time" id="time" style="width:200px; height:35px;">
		   <?php 
				$getOptionTime = getOptionTime();
				foreach($getOptionTime as $time){
				?>
				<option value="<?php echo $time?>" <?php if($appointmentValue->time==$time){echo "selected='selected'";}?>><?php echo $time?></option>
				<?php
				}
		   ?>
		   </select>
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
				<p><?php if(!empty($appointmentValue->image)){
				?>
					<img src="<?php echo base_url();?>public/photos/events/<?php echo $appointmentValue->image?>" width="30%">
				<?php
				}?></p> 
					<span class="markcolor"><?php echo ucwords(form_error('image')); ?>
				</td>
				
		 </tr>
		 <!--
		 <tr>
				<th valign="top"><?php echo "Upload Event Attachement file"; ?></th>
				<td colspan="5">
					<input type="file" name="event_attachement" id="event_attachement" style="padding: 6px;width: 650px">
				<p><?php if(!empty($appointmentValue->attachedment)){
				?>
					<a href="<?php echo base_url();?>public/photos/events/attachement/<?php echo $appointmentValue->attachedment;?>">Attachement File</a>
				<?php
				}?></p> 
					<span class="markcolor"><?php echo ucwords(form_error('event_attachement')); ?>
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
					<option value="Approved" <?php if($appointmentValue->approvalStatus=="Approved"){ echo "selected='selected'";}?>>Approved</option>
					<option value="Rejected" <?php if($appointmentValue->approvalStatus=="Rejected"){ echo "selected='selected'";}?>>Rejected</option>
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
                
                <?php echo form_hidden('id', $appointmentValue->id); ?>
                <?php echo form_submit('submit', 'Save', 'class="myButton"'); ?>
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

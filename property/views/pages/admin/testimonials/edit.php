<?php

$title = array(
	'name'	   => 'title',
	'id'	   => 'title',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => $testmonialsInfo->title
);
$videolinked = array(
	'name'	   => 'videolinked',
	'id'	   => 'videolinked',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => $testmonialsInfo->videolinked
);
$test_date = array(
	'name'	   => 'test_date',
	'id'	   => 'test_date',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => date("d-m-Y",strtotime($testmonialsInfo->date))
);
$description = array(
	'name'	    => 'description',
	'id'	    => 'description',
    'class'=>'ckeditor',
	'value' =>  $testmonialsInfo->body
);
$congregation_name = array(
	'name'	   => 'congregation_name',
	'id'	   => 'congregation_name',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => $testmonialsInfo->congregationName
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
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/public/css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"test_date",
			dateFormat:"%d-%m-%Y"
		});
		
		/* new JsDatePick({
			useMode:2,
			target:"expiration_date",
			dateFormat:"%d-%m-%Y"
		}); */
	};
</script>
<script src="<?php echo base_url(); ?>/public/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>/public/ckeditor/adapters/jquery.js"></script>
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
            <td class="green-left"><?php echo $admin_message; ?>. <a href="<?php echo base_url().$this->aadmin->Testimonials_home_uri; ?>">View all.</a></td>
            <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
        </tr>
        </table>
        </div>
        <!--  end message-green -->
       <?php endif; ?> 
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top"><?php echo "Testmonials Title"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($title); ?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('title')); ?></span>
           </td>
		</tr>
		
		<tr>
			<th valign="top"><?php echo "Testmonials Date"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($test_date); ?></td>
			<td>
           <span class="markcolor"><?php echo ucwords(form_error('test_date')); ?></span>
           </td>
		</tr>
		
		<tr>
			<th valign="top"><?php echo "Select Pastor"; ?><span class="markcolor">*</span></th>
			<td>
				<select name="teacher_id" id="teacher_id" style="width: 295px;padding: 6px;">
					<option value="">Select</option>
				<?php 
					foreach($TeacherInfo as $teacher_info){
				?>
					<option value="<?php echo $teacher_info->id;?>" <?php if($testmonialsInfo->pastorID == $teacher_info->id){ echo "selected='selected'";}?>><?php echo $teacher_info->firstName." ".$teacher_info->middleName." ".$teacher_info->lastName;?></option>
				<?php
					}
				?>
				</select>
			</td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('teacher_id')); ?></span>
           </td>
		</tr>

		<tr>
			<th valign="top"><?php echo "Congregation Name"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($congregation_name); ?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('congregation_name')); ?></span>
           </td>
		</tr>
		
        <tr>
			<th valign="top"><?php echo "Upload Testmonials Image"; ?><span class="markcolor"></span></th>
			<td><input type="file" name="userfile" id="userfile" style="width: 280px; padding: 6px;"> <p>
			<?php if(!empty($testmonialsInfo->image)){
				?>
				<img src="<?php echo base_url();?>public/photos/testimonials/<?php echo $testmonialsInfo->image?>" width="75">
				<?php
				}?>
			</p>
			</td>
			<td>
            
           </td>
		</tr>
        <tr>
			<th valign="top"><?php echo "Testmonials Description"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_textarea($description);?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('description')); ?></span>
           </td>
		</tr>

		<tr>
			<th valign="top"><?php echo "Testmonials Video Linked"; ?></th>
			<td><?php echo form_input($videolinked); ?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('videolinked')); ?></span>
           </td>
		</tr>
		

		<tr>
			<th valign="top"><?php echo "Approval Status"; ?><span class="markcolor">*</span></th>
			<td>
				<select name="status" id="status" style="width: 295px;padding: 6px;">
					<option value="Approved" <?php if($testmonialsInfo->approvalStatus=="Approved"){ echo "selected='selected'";}?>>Approved</option>
					<option value="Rejected" <?php if($testmonialsInfo->approvalStatus=="Rejected"){ echo "selected='selected'";}?>>Rejected</option>
				</select>
			</td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('status')); ?></span>
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

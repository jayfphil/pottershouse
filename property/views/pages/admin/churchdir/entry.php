<?php
$address = array(
	'name'	   => 'address',
	'id'	   => 'address',
	'rows'     => '4',
	'cols'     => '21',
	'style'    => 'padding: 6px 6px 0 6px;',
	'value'    => set_value('address')
);

$churchname = array(
	'name'	   => 'churchname',
	'id'	   => 'churchname',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => set_value('churchname')
);

$schedule = array(
	'name'	   => 'schedule',
	'id'	   => 'schedule',
	'style'    => 'padding: 6px; width:280px;',
	'value'    => set_value('schedule')
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
            <td class="green-left"><?php echo $admin_message; ?>. <a href="<?php echo base_url()."admin/churchdir/home/"; ?>">View all.</a></td>
            <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
        </tr>
        </table>
        </div>
        <!--  end message-green -->
       <?php endif; ?> 
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top"><?php echo "Church Name"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($churchname); ?></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('churchname')); ?></span>
           </td>
		</tr>
		

		<tr>
			<th valign="top"><?php echo "Select Pastor"; ?><span class="markcolor">*</span></th>
			<td>
				<select name="pastor_id" id="pastor_id" style="width: 295px;padding: 6px;">
					<option value="">Select</option>
				<?php 
					foreach($PastorInfo as $PastorInfos){
				?>
					<option value="<?php echo $PastorInfos->id;?>"><?php echo $PastorInfos->firstName." ".$PastorInfos->middleName." ".$PastorInfos->lastName;?></option>
				<?php
					}
				?>
				</select>
			</td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('pastor_id')); ?></span>
           </td>
		</tr>

		<tr>
			<th valign="top"><?php echo "Select Region"; ?></th>
			<td>
				<select name="region_id" id="region_id" style="width: 295px;padding: 6px;">
					<option value="">Select</option>
				<?php 
					foreach($RegionInfo as $RegionInfos){
				?>
					<option value="<?php echo $RegionInfos->id;?>"><?php echo $RegionInfos->regDesc;?></option>
				<?php
					}
				?>
				</select>
			</td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('region_id')); ?></span>
           </td>
		</tr>
		
		<tr>
			<th valign="top"><?php echo "Select Province"; ?></th>
			<td>
				<select name="province_id" id="province_id" style="width: 295px;padding: 6px;">
					<option value="">Select</option>
				<?php 
					foreach($ProvinceInfo as $Provinceinfos){
				?>
					<option value="<?php echo $Provinceinfos->id;?>"><?php echo $Provinceinfos->provDesc;?></option>
				<?php
					}
				?>
				</select>
			</td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('province_id')); ?></span>
           </td>
		</tr>

		<tr>
			<th valign="top"><?php echo "Select City"; ?></th>
			<td>
				<select name="city_id" id="city_id" style="width: 295px;padding: 6px;">
					<option value="">Select</option>
				<?php 
					foreach($CityInfo as $Cityinfos){
				?>
					<option value="<?php echo $Cityinfos->id;?>"><?php echo $Cityinfos->citymunDesc;?></option>
				<?php
					}
				?>
				</select>
			</td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('city_id')); ?></span>
           </td>
		</tr>

		<tr>
			<th valign="top"><?php echo "Select Barangay"; ?></th>
			<td>
				<select name="barangay_id" id="barangay_id" style="width: 295px;padding: 6px;">
					<option value="">Select</option>
				<?php 
					foreach($BarangayInfo as $BarangayInfos){
				?>
					<option value="<?php echo $BarangayInfos->id;?>"><?php echo $BarangayInfos->brgyDesc;?></option>
				<?php
					}
				?>
				</select>
			</td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('barangay_id')); ?></span>
           </td>
		</tr>
		
        <tr>
			<th valign="top"><?php echo "Upload Church Image/Map"; ?><span class="markcolor"></span></th>
			<td><input type="file" name="userfile" id="userfile" style="width: 280px; padding: 6px;"></td>
			<td>
            &nbsp;
           </td>
		</tr>

        <tr>
			<th valign="top"><?php echo "Church Schedule"; ?><span class="markcolor">*</span></th>
			<td><textarea name="schedule" class="ckeditor" id="schedule"><?php echo @$_POST['schedule']?></textarea></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('schedule')); ?></span>
           </td>
		</tr>

        <tr>
			<th valign="top"><?php echo "Address"; ?><span class="markcolor">*</span></th>
			<td><textarea name="address" class="ckeditor" id="address"><?php echo @$_POST['address']?></textarea></td>
			<td>
            <span class="markcolor"><?php echo ucwords(form_error('address')); ?></span>
           </td>
		</tr>
		
        <tr>
            <th>&nbsp;</th>
            <td valign="top">
                <?php 
				      echo form_submit('submit','Add', 'class="myButton"');
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

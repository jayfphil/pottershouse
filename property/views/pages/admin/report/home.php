<?php

$start_date = array(
	'name'	=> 'start_date',
	'id'	=> 'start_date',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('start_date')
);

$end_date = array(
	'name'	=> 'end_date',
	'id'	=> 'end_date',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('end_date')
);

$data1 = array(
    'name'        => 'range',
    'value'       => 'today',
	'onclick'     => 'javascript:disableField()',    
    'checked'     => TRUE    
	);
$data2 = array(
    'name'        => 'range',
    'value'       => 'date_range',
	'onclick'     => 'javascript:enableField()'    
    );


?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/public/css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jsDatePick.min.1.3.js"></script>
<script language="javascript">
	window.onload = function(){	
     document.form1.start_date.disabled=true;
     document.form1.end_date.disabled=true;
		new JsDatePick({
				useMode:2,
				target:"start_date",
				dateFormat:"%d-%m-%Y"
			});
		
		new JsDatePick({
				useMode:2,
				target:"end_date",
				dateFormat:"%d-%m-%Y"
			});
	};

	function enableField()
	{
	 document.form1.start_date.disabled=false;
	 document.form1.end_date.disabled=false;
	}
	
	function disableField()
	{
     document.form1.start_date.disabled=true;
     document.form1.end_date.disabled=true;
	}
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
		<?php echo form_open($this->uri->uri_string(), "name = form1 id = form1"); ?>
        <?php echo ucwords($this->dx_auth->get_auth_error()); ?>
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top"><?php echo "Range"; ?><span class="markcolor"></span></th>
			<td>
                      <?php echo form_radio($data1).nbs(2)."Today"; ?><br/><br/>
                      <?php echo form_radio($data2).nbs(2)."Date Range"; ?>            
            </td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<th valign="top"><?php echo "Start Date:"; ?><span class="markcolor"></span></th>
			<td><?php echo form_input($start_date); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('start_date')); ?></div>
           </td>
		</tr>
		<tr>
			<th valign="top"><?php echo "End Date:"; ?><span class="markcolor"></span></th>
			<td><?php echo form_input($end_date); ?></td>
			<td>
            <div class="error-left"></div>
			<div class="error-inner"><?php echo ucwords(form_error('end_date')); ?></div>
           </td>
		</tr>
        <tr>
            <th valign="top"><?php echo "Employee Name"; ?><span class="markcolor"></span></th>
            <td><?php echo form_dropdown('user_id', $OptionUser, set_value('user_id'), 'style="width:200px; height:35px;"'); ?></td>
            <td>
            <div class="error-left"></div>
            <div class="error-inner"><?php echo ucwords(form_error('user_id')); ?></div>
            </td>
        </tr>
          <tr>
            <th>&nbsp;</th>
            <td valign="top">
                <?php echo form_submit('submit', 'Search', 'style="height:30px;"'); ?>
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

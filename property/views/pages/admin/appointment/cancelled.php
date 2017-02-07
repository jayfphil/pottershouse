	<script language="javascript">
		function confirmSubmit() {
		var agree=confirm("Are you sure to delete this record?");
		if (agree)
			 return true;
		else
			 return false;
		}
	</script>

	<!--  start page-heading -->
	<div id="page-heading">
		<h1><?php echo $windowTitle; ?></h1>
	</div>
	<!-- end page-heading -->

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
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
                <?php   date_default_timezone_set("Asia/Dhaka"); ?>
                <?php echo form_open($this->uri->uri_string(),'id="mainform"');	?>
                <?php if(count($appointmentValues)): ?>
				<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="margin-bottom:5px;">
                    <tr>
                     <td colspan="2" align="left">
                     <?php echo form_submit('deleted', 'Delete', 'onclick="return confirmSubmit()"'); ?>  
                   </td>
                    </tr>
				</table>

				<!--  start user-table ..................................................................................... -->
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a> </th>
					<th class="table-header-repeat line-left"><a href="">SL</a></th>
                    <th class="table-header-repeat line-left"><a href="">Created</a></th>
					<th class="table-header-repeat line-left"><a href="">Service</a></th>				                         
					<th class="table-header-repeat line-left"><a href="">Company</a></th>
                    <th class="table-header-repeat line-left"><a href="">Note</a></th>	
                    <th class="table-header-repeat line-left"><a href="">Date</a></th>  
					<th class="table-header-repeat line-left"><a href="">User</a></th>
					<th class="table-header-repeat line-left"><a href="">Status</a></th>
                    </tr>
                <?php $i= (int) $this->uri->segment(4) + 1; foreach($appointmentValues as $appointmentValue): ?>
				<tr <?php if($i %2 == 0): ?> class="alternate-row" <?php endif;?>>
					<td><?php echo form_checkbox('checkbox_'.$appointmentValue->id, $appointmentValue->id); ?></td>
					<td><?php echo $i; ?></td>
                    <td><?php echo date('M d, Y H:i:s', strtotime($appointmentValue->created)); ?></td>
                    <td><?php echo ucwords($appointmentValue->service_type); ?></td>
					<td><?php echo ucwords($appointmentValue->company_name); ?></td>
                    <td><?php echo $appointmentValue->notes; ?></td>
                    <td><?php echo date('d-m-Y', strtotime($appointmentValue->service_date)).' '.$appointmentValue->service_time; ?></td>
					<td><?php echo ucwords($appointmentValue->full_name); ?></td>
				    <td><?php echo ucwords($appointmentValue->service_status); ?></td>
                 </tr>
                <?php $i = $i + 1; endforeach; ?>
				</table> 
				<!--  end user-table................................... --> 
                 <?php  else: ?>
				<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="margin-bottom:5px;">
				<tr height="40"><div id="message-red"><td colspan="9"  class="red-left">No Appointment Available...</td></div></tr>
				</table>
                <?php endif; ?>
				<?php echo form_close(); ?>
			</div>
			<!--  end content-table  -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr><td colspan="9"><?php if(!empty($pagination)){ echo $pagination.br(3); } ?></td></tr>
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
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

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
                <?php if(count($propertyValues)): ?>
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
					<th class="table-header-repeat line-left"><a href="">SL No</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Aproperty_file_sort_uri.'filename'; ?>">File Name</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Aproperty_file_sort_uri.'company_name'; ?>">Company</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Aproperty_file_sort_uri.'size_name'; ?>">Property Size</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Aproperty_file_sort_uri.'created'; ?>">Uploaded At</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Aproperty_file_sort_uri.'uname'; ?>">Uploaded By</a></th>
				</tr>
                <?php $i= (int) $this->uri->segment(4) + 1; foreach($propertyValues as $propertyValue):	 ?>
				<tr <?php if($i %2 == 0): ?> class="alternate-row" <?php endif;?>>
					<td><?php echo form_checkbox('checkbox_'.$propertyValue->id, $propertyValue->id); ?></td>
					<td><?php echo $i; ?></td>
					<td><a href="<?php echo base_url().'admin/property_file/edit/'.$propertyValue->id; ?>"><?php echo $propertyValue->client_name_number.' '.$propertyValue->street1.' '.$propertyValue->street2.' '.$propertyValue->town.' '.$propertyValue->post_code.' '.$propertyValue->county; ?></a></td>
					<td><?php echo ucwords($propertyValue->company_name); ?></td>
					<td><?php echo ucwords($propertyValue->size_name); ?></td>
					<td><?php echo date('M d, Y H:i:s', strtotime($propertyValue->created)); ?></td>
					<td><?php echo ucwords($propertyValue->full_name); ?></a></td>
				</tr>
                <?php $i = $i + 1; endforeach; ?>
				</table> 
				<!--  end user-table................................... --> 
                 <?php  else: ?>
				<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="margin-bottom:5px;">
				<tr height="40"><div id="message-red"><td colspan="10"  class="red-left">No Property Available...</td></div></tr>
				</table>
                <?php endif; ?>
				<?php echo form_close(); ?>
			</div>
			<!--  end content-table  -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr><td colspan="10"><?php if(!empty($pagination)){ echo $pagination.br(3); } ?></td></tr>
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

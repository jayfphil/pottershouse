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
                

				<!--  start user-table ..................................................................................... -->
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                <?php if(count($propertyValues)): ?>
				<tr>
					<th class="table-header-repeat line-left"><a href="">SL</a></th>
					<th class="table-header-repeat line-left"><a href="">File Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Service</a></th>
					<th class="table-header-repeat line-left"><a href="">Company</a></th>
					<th class="table-header-repeat line-left"><a href="">Uploaded At</a></th>
					<th class="table-header-repeat line-left"><a href="">Uploaded By</a></th>
					<th class="table-header-repeat line-left"><a href="">View & Download</a></th>
				</tr>
                <?php $i= (int) $this->uri->segment(4) + 1; foreach($propertyValues as $propertyValue):	
				       $user_id = $propertyValue->user_id;
                                       $property_size = $propertyValue->property_size;
				       $userValues = $this->Shows->getThisValue("id = '$user_id'", 'users');
                                       $propertySizeValues = $this->Shows->getThisValue("id = '$property_size'", 'property_size');
				 ?>
				<tr <?php if($i %2 == 0): ?> class="alternate-row" <?php endif;?>>
					<td><?php echo $i; ?></td>
					<td><a href="<?php echo base_url().'admin/request_service/edit/'.$propertyValue->id; ?>"><?php echo $propertyValue->client_name_number.' '.$propertyValue->street1.' '.$propertyValue->street2.' '.$propertyValue->town.' '.$propertyValue->post_code.' '.$propertyValue->county; ?></a></td>
					<td><?php echo ucwords($propertyValue->service_type); ?></td>
                    <td><?php echo ucwords($propertyValue->company_name); ?></td>
					<td><?php echo date('M d, Y H:i:s', strtotime($propertyValue->created)); ?></td>
					<td><?php if(count($userValues)): foreach($userValues as $userValue): echo ucwords($userValue->full_name); endforeach; endif; ?></a></td>
					<td>
					<?php if(!empty($propertyValue->document_url_link)): ?><a href="<?php echo $propertyValue->document_url_link; ?>" target="_blank"><img src="<?php echo base_url()."public/images/boxnet_icon.png"; ?>" height="30" alt="boxnet" /></a><?php endif; ?>
					<?php if(!empty($propertyValue->amendment_link_path)): ?><a href="<?php echo $propertyValue->amendment_link_path; ?>" target="_blank"><img src="<?php echo base_url()."public/images/edit.png"; ?>" height="30" alt="boxnet" /></a><?php endif; ?>
                    </td>
				</tr>
                <?php $i = $i + 1; endforeach; else: ?>
				<tr><div id="message-red"><td colspan="10" class="red-left">No Property Found. <a href="<?php echo base_url().'admin/property_file/search'?>"> Search Again..</a></td></div></tr>
                <?php endif; ?>
				</table> 
				<!--  end user-table................................... --> 
				<?php echo form_close(); ?>
			</div>
			<!--  end content-table  -->
			
			
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

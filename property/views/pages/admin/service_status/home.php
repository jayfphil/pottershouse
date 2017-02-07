
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

				<script language="javascript">
                function confirmSubmit() {
                var agree=confirm("Are you sure to delete this record?");
                if (agree)
                     return true;
                else
                     return false;
                }
                </script>
                <?php echo form_open($this->uri->uri_string(),'id="mainform"');	?>
                <?php if(count($serviceStatusValues)): ?>
				<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="margin-bottom:5px;">
                    <tr>
                     <td colspan="2" align="left">
                     <a href="<?php echo base_url().$this->aadmin->Aservice_status_entry_uri; ?>"><img src="<?php echo base_url(); ?>public/images/add.gif" alt="<?php echo "#"; ?>" border="0" align="absmiddle"/></a>
                     <?php echo nbs(2).form_submit('delete_all', 'Delete All', 'class = "form-delete"'); ?>  
                   </td>
                    </tr>
				</table>

				<!--  start product-table ..................................................................................... -->
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a> </th>
					<th class="table-header-repeat line-left"><a href="">SL No</a></th>
					<th class="table-header-repeat line-left"><a href="">Status Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Created</a></th>
					<th class="table-header-repeat line-left"><a href="">Modified</a></th>
					<th class="table-header-options line-left"><a href="">Options</a></th>
				</tr>
                <?php $i = (int) $this->uri->segment(4) + 1; foreach($serviceStatusValues as $serviceStatusValue): 
				 ?>
                
				<tr <?php if($i %2 == 0): ?> class="alternate-row" <?php endif;?>>
					<td><?php echo form_checkbox('checkbox_'.$serviceStatusValue->id, $serviceStatusValue->id); ?></td>
					<td><?php echo $i; ?></td>
			        <td><?php echo ucwords($serviceStatusValue->status_name); ?></td>
                    <td><?php echo date('M d, Y', strtotime($serviceStatusValue->created)); ?></td>
                    <td><?php echo date('M d, Y', strtotime($serviceStatusValue->modified)); ?></td>
					<td class="options-width">
					<a href="<?php echo base_url().$this->aadmin->Aservice_status_edit_uri.$serviceStatusValue->id; ?>" title="Edit" class="icon-1 info-tooltip"></a>
					<a onclick="return confirmSubmit()" href="<?php echo base_url().$this->aadmin->Aservice_status_delete_uri.$serviceStatusValue->id; ?>" title="Delete" class="icon-2 info-tooltip"></a>
					</td>
				</tr>
                <?php $i = $i + 1; endforeach; ?>
				</table> 
				<!--  end product-table................................... --> 
                 <?php  else: ?>
				<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="margin-bottom:5px;">
				<tr height="40"><div id="message-red"><td colspan="6"  class="red-left">No Service Status Available Yet .. <a href="<?php echo base_url().$this->aadmin->Aservice_status_entry_uri; ?>">Add Service Status Now</a></td></div></tr>
				</table>
                <?php endif; ?>
				<?php echo form_close(); ?>
			</div>
			<!--  end content-table  -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr><td colspan="6"><?php if(!empty($pagination)){ echo $pagination.br(3); } ?></td></tr>
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

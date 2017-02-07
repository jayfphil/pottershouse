
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
                <?php if(count($prayersValue)): ?>

				<!--  start product-table ..................................................................................... -->
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-repeat line-left"><a href="">ID</a></th>
					<th class="table-header-repeat line-left"><a href="">Sender Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Prayer Request</a></th>
					<th class="table-header-repeat line-left"><a href="">Date</a></th>
				</tr>
                <?php $i = (int) $this->uri->segment(4) + 1; foreach($prayersValue as $prayers): ?>
                
				<tr <?php if($i %2 == 0): ?> class="alternate-row" <?php endif;?>>
					<td><?php echo $prayers->prID; ?></td>
			        <td><?php echo $prayers->pr_name; ?></td>
			        <td><?php echo $prayers->pr_bodycontent; ?></td>
			        <td><?php echo $prayers->pr_date; ?></td>
				</tr>
                <?php $i = $i + 1; endforeach; ?>
				</table> 
				<!--  end product-table................................... --> 
                 <?php  else: ?>
				<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="margin-bottom:5px;">
				<tr height="40"><div id="message-red"><td colspan="9"  class="red-left">No Prayer Request Submitted Yet .. </td></div></tr>
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

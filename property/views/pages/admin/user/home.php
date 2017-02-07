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
                
				<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="margin-bottom:5px;">
                    <tr>
                     <td colspan="2" align="left">
                     <?php echo form_submit('unban', 'Activate User', 'class="myButton"'); ?>
                     <?php echo nbs(1).form_submit('ban', 'Ban User', 'class="myButtonsub"'); ?>  
                     <?php echo nbs(1).form_submit('deleted', 'Delete User', 'class="myButtonsub" onclick="return confirmSubmit()"'); ?>  
                   </td>
                    </tr>
				</table>

				<!--  start user-table ..................................................................................... -->
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                <?php if(count($users)): ?>
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a> </th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Auser_sort_uri.'title'; ?>">Title</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Auser_sort_uri.'fname'; ?>">First Name</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Auser_sort_uri.'lname'; ?>">Name</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Auser_sort_uri.'email'; ?>">Email</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Auser_sort_uri.'utype'; ?>">Type</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Auser_sort_uri.'banned'; ?>">Banned</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Auser_sort_uri.'llogin'; ?>">Last Login</a></th>
					<th class="table-header-repeat line-left"><a href="<?php echo base_url().$this->aadmin->Auser_sort_uri.'created'; ?>">Created</a></th>
				</tr>
                <?php $i=1; foreach($users as $user):				
					  if($user->banned == 1){$banned = 'Yes'; $id = "style='color:#990000;'";}
					  else{$banned = 'No'; $id = "style='color:#006633;'";}					
				 ?>
				<tr <?php if($i %2 == 0): ?> class="alternate-row" <?php endif;?>>
					<td><?php echo form_checkbox('checkbox_'.$user->id, $user->id); ?></td>
					<td><a href="<?php echo base_url().'admin/user/edit/'.$user->id; ?>"><?php echo ucwords($user->name_title); ?></a></td>
					<td><a href="<?php echo base_url().'admin/user/edit/'.$user->id; ?>"><?php echo ucwords($user->first_name); ?></a></td>
					<td><a href="<?php echo base_url().'admin/user/edit/'.$user->id; ?>"><?php echo ucwords($user->last_name); ?></a></td>
					<td><a href="<?php echo base_url().'admin/user/edit/'.$user->id; ?>"><?php echo $user->email; ?></a></td>
					<td><a href="<?php echo base_url().'admin/user/edit/'.$user->id; ?>"><?php echo ucwords($user->role_name); ?></a></td>
                    <td <?php echo $id; ?>><?php echo $banned; ?></td>
					<td><?php echo date('M d, Y', strtotime($user->last_login)); ?></td>
					<td><?php echo date('M d, Y', strtotime($user->created)); ?></td>
				</tr>
                <?php $i = $i + 1; endforeach; else: ?>
				<tr><div id="message-red"><td colspan="8" class="red-left">No User Available.</td></div></tr>
                <?php endif; ?>
				</table> 
				<!--  end user-table................................... --> 
				<?php echo form_close(); ?>
			</div>
			<!--  end content-table  -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr><td colspan="8"><?php if(!empty($pagination)){ echo $pagination.br(3); } ?></td></tr>
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

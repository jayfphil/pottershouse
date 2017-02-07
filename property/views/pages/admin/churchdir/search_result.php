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
                

				<!--  start product-table ..................................................................................... -->
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                <?php if(count($statusNoteValues)): ?>
                <tr>
					<th class="table-header-repeat line-left"><a href="">SL No</a></th>
					<th class="table-header-repeat line-left"><a href="">Company Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Person Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Service</a></th>
					<th class="table-header-repeat line-left"><a href="">Note</a></th>
					<th class="table-header-repeat line-left"><a href="">Level</a></th>
					<th class="table-header-repeat line-left"><a href="">Date</a></th>
					<th class="table-header-repeat line-left"><a href="">User</a></th>
				</tr>
                <?php $i = 1; foreach($statusNoteValues as $statusNoteValue): 
				      $company_id = $statusNoteValue->company_id;
					  $companys = $this->Shows->getThisValue("id = '$company_id'", 'client_company');	
				      $contact_person_id = $statusNoteValue->contact_person_id;
					  $cpersons = $this->Shows->getThisValue("id = '$contact_person_id'", 'contact_person');
				      $service_type_id = $statusNoteValue->service_type_id;
					  $services = $this->Shows->getThisValue("id = '$service_type_id'", 'service_type');	
				      $user_id = $statusNoteValue->user_id;
					  $users = $this->Shows->getThisValue("id = '$user_id'", 'users');		
				      $person_level_id = $statusNoteValue->person_level_id;
					  $levels = $this->Shows->getThisValue("id = '$person_level_id'", 'person_level');				
				 ?>
                
				<tr <?php if($i %2 == 0): ?> class="alternate-row" <?php endif;?>>
					<td><?php echo $i; ?></td>
			        <td><?php if(count($companys)): foreach($companys as $company): echo ucwords($company->company_name); endforeach; endif; ?></td>
			        <td><?php if(count($cpersons)): foreach($cpersons as $cperson): echo ucwords($cperson->contact_person_name); endforeach; endif; ?></td>
			        <td><?php if(count($services)): foreach($services as $service): echo ucwords($service->type_name); endforeach; endif; ?></td>
                    <td><?php echo $statusNoteValue->note; ?></td>
                    <td><?php if(count($levels)): foreach($levels as $level): echo $level->level_name;  endforeach; endif; ?></td>
                    <td><?php echo date("F-d-Y", strtotime($statusNoteValue->created)); ?></td>
                    <td><?php if(count($users)): foreach($users as $user): echo ucwords($user->full_name);  endforeach; endif; ?></td>
				</tr>
                <?php $i = $i + 1; endforeach; ?>
                 <?php  else: ?>
				<tr height="40"><div id="message-red"><td colspan="9"  class="red-left">No Status Note Available Yet ..</td></div></tr>
                <?php endif; ?>
				</table> 
				<!--  end product-table................................... --> 
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

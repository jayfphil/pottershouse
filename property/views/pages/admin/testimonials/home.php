
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
                <?php if(count($testimonialsValue)): ?>
				<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="margin-bottom:5px;">
                    <tr>
                     <td colspan="2" align="left">
                     <a href="<?php echo base_url().$this->aadmin->Testimonials_entry_uri; ?>" class="myButton">Add New</a>
                     <?php echo nbs(2).form_submit('delete_all', 'Delete All', 'class = "myButtonsub"'); ?>  
                   </td>
                    </tr>
				</table>

				<!--  start product-table ..................................................................................... -->
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a> </th>
					<th class="table-header-repeat line-left" width="10%"><a href="">Photo</a></th>
					<th class="table-header-repeat line-left"><a href="">Testmonial Date</a></th>
					<th class="table-header-repeat line-left"><a href="">Title</a></th>
					<th class="table-header-repeat line-left"><a href="">Student Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Teacher Name</a></th>
					<th class="table-header-repeat line-left"><a href="">Created By</a></th>
					<th class="table-header-repeat line-left"><a href="">Status</a></th>
					<th class="table-header-repeat line-left"><a href="">Modified Date</a></th>
					<th class="table-header-repeat line-left"><a href="">Options</a></th>
				</tr>
                <?php $i = (int) $this->uri->segment(4) + 1; foreach($testimonialsValue as $testmonials): 
				      // $congregationID = $testmonials->congregationID;
				      $pastorID = $testmonials->pastorID;
				      $created_id = $testmonials->createdBy;
					  
					  $teacher = $this->Shows->getThisValue_tle("id = '$pastorID'", 'pastors',$limit = '', $order = 'id ASC');
					  // $student = $this->Shows->getThisValue_tle("id = '$congregationID'", 'congregation',$limit = '', $order = 'id ASC');
					  $user_id = $this->Shows->getThisValue_tle("id = '$created_id'", 'users',$limit = '', $order = 'id ASC');
					  
				      			
				 ?>
                
				<tr <?php if($i %2 == 0): ?> class="alternate-row" <?php endif;?>>
					<td><?php echo form_checkbox('checkbox_'.$testmonials->id, $testmonials->id); ?></td>
					<td><img src="<?php echo base_url();?>public/photos/testimonials/<?php echo $testmonials->image; ?>" style="width:80%;height:auto;"></td>
					<td><?php echo date("F-d-Y", strtotime($testmonials->date)); ?></td>
					<td><?php echo $testmonials->title; ?></td>
			        <td><?php echo $testmonials->congregationName; // if(count($student)): foreach($student as $students): echo ucwords($students->completeName); endforeach; endif; ?></td>
			        <td><?php if(count($teacher)): foreach($teacher as $teachers): echo ucwords($teachers->firstName." ".$teachers->middleName." ".$teachers->lastName); endforeach; endif; ?></td>
			        <td><?php if(count($user_id)): foreach($user_id as $users): echo ucwords($users->full_name); endforeach; endif; ?></td>
			        <td><?php echo $testmonials->approvalStatus; ?></td>
			        <td><?php echo date("d-m-Y",strtotime($testmonials->dateModified)); ?></td>
                    <td>
					<a href="<?php echo base_url().$this->aadmin->Testimonials_edit_uri.$testmonials->id; ?>" title="Edit" class="icon-1 info-tooltip"></a>
					<a onclick="return confirmSubmit()" href="<?php echo base_url().$this->aadmin->Testimonials_delete_uri.$testmonials->id; ?>" title="Delete" class="icon-2 info-tooltip"></a>
					</td>
				</tr>
                <?php $i = $i + 1; endforeach; ?>
				</table> 
				<!--  end product-table................................... --> 
                 <?php  else: ?>
				<table border="0" width="100%" cellpadding="0" cellspacing="0"  style="margin-bottom:5px;">
				<tr height="40"><div id="message-red"><td colspan="9"  class="red-left">No Testimonial Available Yet .. <a href="<?php echo base_url().$this->aadmin->Testimonials_entry_uri; ?>">Create New Testimonials</a></td></div></tr>
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

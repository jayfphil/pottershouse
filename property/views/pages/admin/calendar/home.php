
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>/public/fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>/public/fullcalendar/fullcalendar.print.css' media='print' />
<script type='text/javascript' src='<?php echo base_url(); ?>/public/fullcalendar/fullcalendar.min.js'></script>
<script type='text/javascript'>

	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			selectable: false,
			selectHelper: true,
			select: function(start, end, allDay) {
				var title = prompt('Event Title:');
				if (title) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
				calendar.fullCalendar('unselect');
			},
			editable: true,
			events: [
			<?php
			foreach($calendarValues as $data):
			
			$link_url = "events/edit/".$data->id;
			$service_date = $data->date;
			$start_sp   = @split('-',$service_date);
			$service_time = $data->time;
			$start_time   = @split(':',$service_time);
			/* $address       = $data->company_address;
			$company_name  = $data->company_name; */
			$title  = $data->title;
			/* $service_type_id = $data->service_type_id;
			$service_date  = date("F d Y", strtotime($data->service_date));
			$user_id        = $data->user_id; */
			$service_status = $data->approvalStatus;
			//$notes         = $data->notes;
			
			/* $this->data['sTypeValues'] = $this->Shows->getThisValue("id = '$service_type_id'", 'service_type'); 
			$this->data['userValues']  = $this->Shows->getThisValue("id = '$user_id'", 'users'); 
            if(count($this->data['sTypeValues'])): foreach($this->data['sTypeValues'] as $sTypeValues): $type_name = $sTypeValues->type_name; endforeach; else: $type_name = ""; endif;
			if(count($this->data['userValues'])): foreach($this->data['userValues'] as $userValues): $user_name = $userValues->name_title.' '.$userValues->full_name; endforeach; else: $user_name = ""; endif; */
			 $total_text = "Event Time: ".$service_time.", Status: ".$service_status;           
			?>
				{
					title: '<?php echo $title; ?>',
					start: new Date(<?php echo $start_sp[0]; ?>, <?php echo $start_sp[1] - 1; ?>, <?php echo $start_sp[2]; ?>, <?php echo $start_time[0]; ?>, <?php echo $start_time[1]; ?>),
					url: '<?php echo $link_url; ?>',
					linkTitle: '<?php echo $total_text; ?>',
					allDay: false
				},
			<?php  endforeach; ?>	
			]
		});
		
	});

</script>
<style type='text/css'>
	#calendar {
		width: 900px;
		margin: 0 auto;
		}

</style>
<?php
/* if(!empty($user_id2)):
$this->data['userValues2'] = $this->Shows->getThisValue("id = '$user_id2'", 'users'); 
endif; */
?>
<div id="page-heading"><h1><?php //echo $windowTitle;	if(!empty($this->data['userValues2'])): foreach($this->data['userValues2'] as $userValues2): $user_name = $userValues2->name_title.' '.$userValues2->full_name; echo " of ".$user_name; endforeach; endif; ?></h1></div>

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
	<?php echo ucwords($this->dx_auth->get_auth_error()); ?>
		
    <div id='calendar'></div>
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

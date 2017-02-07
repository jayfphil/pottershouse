     <script type="text/javascript" src="<?php echo base_url(); ?>public/js/jquery.jqprint.0.3.js"></script>     
    <script>
        $(function(){
            $("#print_button").click( function() {
                $("#ptable").jqprint();
            });
        });
    
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
              <p align="right" style="margin-right:80px;"><input type="image" id="print_button" src="<?php echo base_url().'public/images/print.png'; ?>" alt="print report" title="Print Report"  /></p>
           <div id="ptable">
				<table border="0" width="90%" cellpadding="0" cellspacing="0"  style="margin-bottom:5px;">
                    <tr>
                     <td align="left">
                      <h2><?php echo $windowTitle; ?></h2>
                     <?php 
					 $data['userValues'] = $this->Shows->getThisValue("id = '$user_id'", 'users');
					 foreach($data['userValues'] as $userValues): $clk_name = $userValues->name_title.' '.$userValues->full_name; echo ucwords($clk_name).br(1); endforeach;
					 echo $today = date('d/m/Y', time()).br(1);
					 echo anchor('http://www.syntehbd.com', 'www.syntehbd.com');
					 ?>  
                     </td>
                     <td align="right">
                     <img src="<?php echo base_url(); ?>public/images/shared/logo.png" height="80" alt="" align="middle" style="position:relative; left:120px;" /> 
                     </td>
                    </tr>
                    <tr>
                    <td colspan="2">&nbsp;</td>
                    </tr>
				</table>
                <?php 
				if(!empty($start_date) && !empty($end_date)):
				while($start_date <= $end_date)
				{
				  $data['calValues'] = $this->Shows->getThisValue("service_date = '$start_date' && user_id = '$user_id'", 'appointment'); 
				  
				 if(count($data['calValues'])): ?>
                 <h2> <?php echo date("l jS F", strtotime($start_date)); ?></h2>
				<!--  start user-table ..................................................................................... -->
				<table border="1" width="90%" cellpadding="0" cellspacing="0" >
                <tr>
                <th width="15%">Time</th>
                <th width="85%">Details</th>
                </tr>
                <?php foreach($data['calValues'] as $reportValue):	
				      $service_type_id = $reportValue->service_type_id;
			          $this->data['sTypeValues'] = $this->Shows->getThisValue("id = '$service_type_id'", 'service_type'); 
				 ?>
				<tr>
					<td align="center" valign="middle"><strong><?php echo $reportValue->service_time; ?></strong></td>
					<td><p style="margin-left:10px; margin-bottom:5px;">
                    <strong><?php echo $reportValue->company_address; ?></strong><br /><br />
                    <strong>Company :</strong><?php echo ucwords($reportValue->company_name); ?><br />
                    <strong>Service :</strong><?php if(count($this->data['sTypeValues'])): foreach($this->data['sTypeValues'] as $sTypeValues): echo $type_name = $sTypeValues->type_name; endforeach; endif; ?><br />
                    <strong>Service Status :</strong><?php echo ucwords($reportValue->service_status); ?><br />
                    <strong>Contact Number:</strong><?php echo $reportValue->contact_no; ?><br />
                    <strong>Email :</strong><?php echo $reportValue->email; ?><br />
                    <strong>Notes :</strong><?php echo $reportValue->notes; ?><br />
                    </p>
                    </td>
                </tr>
                <?php endforeach; ?>
				</table> <br />
				<!--  end user-table................................... --> 
                <?php 
				   endif;
                  $start_date = strftime("%Y-%m-%d", strtotime("$start_date +1 day"));
				  
				  }
				  
				 else:
				 
                 $today = date('Y-m-d', time());
				  $data['calValues'] = $this->Shows->getThisValue("service_date = '$today' && user_id = '$user_id'", 'appointment'); 
				
				 if(count($data['calValues'])): ?>
                 <h2> <?php echo date("l jS F", strtotime($today)); ?></h2>
				<!--  start user-table ..................................................................................... -->
				<table border="1" width="90%" cellpadding="0" cellspacing="0" >
                <tr>
                <th width="15%">Time</th>
                <th width="85%">Details</th>
                </tr>
                <?php foreach($data['calValues'] as $reportValue):
				      $service_type_id = $reportValue->service_type_id;
			          $this->data['sTypeValues'] = $this->Shows->getThisValue("id = '$service_type_id'", 'service_type'); 
					 ?>
				<tr>
					<td align="center" valign="middle"><strong><?php echo $reportValue->service_time; ?></strong></td>
					<td><p style="margin-left:10px; margin-bottom:5px;">
                    <strong><?php echo $reportValue->company_address; ?></strong><br /><br />
                    <strong>Company :</strong><?php echo ucwords($reportValue->company_name); ?><br />
                    <strong>Service :</strong><?php if(count($this->data['sTypeValues'])): foreach($this->data['sTypeValues'] as $sTypeValues): echo $type_name = $sTypeValues->type_name; endforeach; endif; ?><br />
                    <strong>Service Status :</strong><?php echo ucwords($reportValue->service_status); ?><br />
                    <strong>Contact Number:</strong><?php echo $reportValue->contact_no; ?><br />
                    <strong>Email :</strong><?php echo $reportValue->email; ?><br />
                    <strong>Notes :</strong><?php echo $reportValue->notes; ?><br />
                    </p>
                    </td>
                </tr>
                <?php endforeach; ?>
				</table> 
				<!--  end user-table................................... --> 
                <?php 
				 else: ?>
				<div id="message-red"><div class="red-left" style="height:30px; margin-top:5px;">There are no Calendar Entries for today / between the dates specified!</div></div>
                <?php endif;  endif; ?>
              </div>   
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

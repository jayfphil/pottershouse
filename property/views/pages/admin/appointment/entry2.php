<?php
if(count($companyValues)):
    foreach($companyValues as $companyValue):
    $company_id    = $companyValue->id;
    $company_name  = $companyValue->company_name;
    $address       = $companyValue->address;
    $contact_no    = $companyValue->contact_no;
    $email         = $companyValue->email;
    endforeach;
endif;
if(!empty($company_id)): $company_id = $company_id; else: $company_id = set_value('');  endif;
if(!empty($company_name)): $company_name = $company_name; else: $company_name = set_value(''); endif;
if(!empty($address)): $address = $address; else: $address = set_value(''); endif;
if(!empty($contact_no)): $contact_no = $contact_no; else: $contact_no = set_value(''); endif;
if(!empty($email)): $email = $email; else: $email = set_value(''); endif;


$company_name = array(
	'name'	   => 'company_name',
	'id'	   => 'company_name',
    'readonly' => 'readonly',
	'style'    => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value'    =>  $company_name
);
$company_address = array(
	'name'	   => 'company_address',
	'id'	   => 'company_address',
    'readonly' => 'readonly',  
	'style'    => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value'    =>  $address
);
$contact_no = array(
	'name'	    => 'contact_no',
	'id'	    => 'contact_no',
     'readonly' => 'readonly',  
	'style'     => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $contact_no
);
$email = array(
	'name'	    => 'email',
	'id'	    => 'email',
     'readonly' => 'readonly',  
	'style'     => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $email
);

$service_date = array(
	'name'	=> 'service_date',
	'id'	=> 'service_date',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('')
	);
	
$notes = array(
	'name'	=> 'notes',
	'id'	=> 'notes',
	'rows'  => '4',
    'cols'  => '27',
	'value' =>  set_value('')
	);

?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/public/css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"service_date",
			dateFormat:"%d-%m-%Y"
		});
	};
</script>

<div id="page-heading"><h1><?php echo $windowTitle; ?></h1></div>

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
        <?php echo form_open($this->uri->uri_string()); ?>
        <?php echo ucwords($this->dx_auth->get_auth_error()); ?>
       <?php if(!empty($admin_message)): ?> 
        <!--  start message-green -->
        <div id="message-green">
        <table border="0" width="100%" height="25" cellpadding="0" cellspacing="0">
        <tr>
            <td class="green-left"><?php echo $admin_message; ?>&nbsp;&nbsp;<a href="<?php echo base_url().$this->aadmin->Aappointment_home_uri; ?>">View all.</a></td>
            <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
        </tr>
        </table>
        </div>
        <!--  end message-green -->
       <?php endif; ?> 
 
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <?php if(empty($company_id)): ?>
		<tr>
			<th valign="top"><?php echo "Select Company"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_dropdown('company_id', $OptionCompany, $company_id, 'style="width:200px; height:35px;"'); ?></td>
             <td><?php echo nbs(2).form_submit('search', 'Search', 'style="height:40px; width:60px;"'); ?></td>        
		 </tr>
        <?php else:
             echo form_hidden('company_id', $company_id);
		 endif; ?>
         </table>
     
          <table border="0" width="70%" cellpadding="0" cellspacing="0"  id="id-form">

		<tr>
            <th valign="top"><?php echo "Company Name"; ?><span class="markcolor">*</span></th>
            <td valign="top"><?php echo form_input($company_name); ?><p>&nbsp;</p> 
               <span class="markcolor"><?php echo ucwords(form_error('company_name')); ?></span>
            </td>
            <td>&nbsp;</td>
			<th valign="top"><?php echo "Address"; ?><span class="markcolor">*</span></th>
			<td valign="top"><?php echo form_input($company_address); ?>
            <p>&nbsp;</p>    
            <span class="markcolor"><?php echo ucwords(form_error('company_address')); ?></span></td>                       
            <td>&nbsp;</td>            
		 </tr>
		<tr>
			<th valign="top"><?php echo "Contact Number"; ?><span class="markcolor">*</span></th>
			<td valign="top"><?php echo form_input($contact_no); ?><p>&nbsp;</p>
            <span class="markcolor"><?php echo ucwords(form_error('contact_no')); ?></span>			
           </td>
            <td>&nbsp;</td>
            <th valign="top"><?php echo "Email Address"; ?><span class="markcolor"></span></th>
            <td valign="top"><?php echo form_input($email); ?>
                <p>&nbsp;</p> 
                <span class="markcolor"><?php echo ucwords(form_error('email')); ?></span>
            </td>
             <td>&nbsp;</td>
		</tr>
              <tr>
			<th valign="top"><?php echo "Date"; ?><span class="markcolor"></span></th>
			<td valign="top"><?php echo form_input($service_date); ?>
                        <p>&nbsp;</p> 
                        <span class="markcolor"><?php echo ucwords(form_error('service_date')); ?></span>
                       </td>
                       <td>&nbsp;</td>
                       <th valign="top"><?php echo "Time"; ?><span class="markcolor">*</span></th>
                       <td valign="top"><?php echo form_dropdown('service_time', $OptionTime, set_value(''), 'style="width:200px; height:35px;"'); ?>
                       <p>&nbsp;</p> 
                       <span class="markcolor"><?php echo ucwords(form_error('service_time')); ?></span>                       
                       </td>
                       <td>&nbsp;</td>
	       </tr>
              <tr>
               <th valign="top"><?php echo "Service Type"; ?><span class="markcolor"></span></th>
               <td valign="top"><?php echo form_dropdown('service_type_id', $OptionServiceType, set_value(''), 'style="width:200px; height:35px;"'); ?>
               <p>&nbsp;</p> 
               <span class="markcolor"><?php echo ucwords(form_error('service_type_id')); ?></span>                       
               </td>
                <td>&nbsp;</td>                    
                <th valign="top"><?php echo "Status"; ?><span class="markcolor">*</span></th>
                <td valign="top"><?php echo form_dropdown('service_status', $OptionServiceStatus, set_value(''), 'style="width:200px; height:35px;"'); ?>
                <p>&nbsp;</p> 
                <span class="markcolor"><?php echo ucwords(form_error('service_status')); ?></span>                    
                </td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <th valign="top"><?php echo "Notes"; ?><span class="markcolor"></span></th>
                <td valign="top" colspan="4"><?php echo form_textarea($notes); ?></td>
                <td>&nbsp;</td>
              </tr>
          <tr>
            <th>&nbsp;</th>
            <td valign="top">
                <?php echo form_submit('submit', '', 'class="form-submit"'); ?>
                <?php echo form_reset('reset', '', 'class="form-reset"'); ?>
            </td>
            <td></td>
        </tr>
	</table>
    <?php echo form_close(); ?>
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

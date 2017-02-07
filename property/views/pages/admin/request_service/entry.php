<?php
if(count($propertyValues)):
    foreach($propertyValues as $propertyValue):
    $address      = $propertyValue->client_name_number.' '.$propertyValue->street1.' '.$propertyValue->street2.' '.$propertyValue->town.' '.$propertyValue->post_code.' '.$propertyValue->county;
    $property_s = $propertyValue->property_size;
    $propertySizeValues = $this->Shows->getThisValue("id = '$property_s'", 'property_size');
    $company_name  = $propertyValue->company_name;
    $company_name2  = $propertyValue->company_name;
    endforeach;
endif;
if(!empty($propertySizeValues)): foreach($propertySizeValues as $propertySizeValue): $property_size = ucwords($propertySizeValue->size_name); endforeach; endif;
if(!empty($address)): $address = $address; else: $address = set_value('address');  endif;
if(!empty($property_size)): $property_size = $property_size; else: $property_size = set_value('property_size'); endif;
if(!empty($company_name)): $company_name = $company_name; else: $company_name = set_value('company_name'); endif;
if(!empty($company_name2)): $company_name2 = $company_name2; else: $company_name2 = ""; endif;

$client_name_number = array(
	'name'	=> 'client_name_number',
	'id'	=> 'client_name_number',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('client_name_number')
);


$post_code = array(
	'name'	=> 'post_code',
	'id'	=> 'post_code',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('post_code')
);

$address = array(
	'name'	   => 'address',
	'id'	   => 'address',
        'readonly' => 'readonly',
	'style'    => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value'    =>  $address
);
$company_name = array(
	'name'	=> 'company_name',
	'id'	=> 'company_name',
        'readonly' => 'readonly',  
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $company_name
);
$property_size = array(
	'name'	=> 'property_size',
	'id'	=> 'property_size',
        'readonly' => 'readonly',  
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  $property_size
);

$service_date = array(
	'name'	=> 'service_date',
	'id'	=> 'service_date',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('service_date')
	);
	
$keys_afterword_to = array(
	'name'	=> 'keys_afterword_to',
	'id'	=> 'keys_afterword_to',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('keys_afterword_to')
	);

$data1 = array(
    'name'        => 'tenant_to_attend',
    'value'       => 'yes',
    'onclick'     => 'javascript:enableField()' 
    );
$data2 = array(
    'name'        => 'tenant_to_attend',
    'style'       => '',
    'value'       => 'no',
    'onclick'     => 'javascript:disableField()', 
    'checked'     => TRUE
    
    );

$tenant_name = array(
	'name'	=> 'tenant_name',
	'id'	=> 'tenant_name',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('tenant_name')
	);
$tenant_contact_number = array(
	'name'	=> 'tenant_contact_number',
	'id'	=> 'tenant_contact_number',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('tenant_contact_number')
	);
	
$notes = array(
	'name'	=> 'notes',
	'id'	=> 'notes',
	'rows'  => '4',
    'cols'  => '27',
	'value' =>  set_value('notes')
	);
$document_url_link = array(
	'name'	=> 'document_url_link',
	'id'	=> 'document_url_link',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('document_url_link')
	);
$amendment_link_path = array(
	'name'	=> 'amendment_link_path',
	'id'	=> 'amendment_link_path',
	'style' => 'height: 25px; padding: 6px 6px 0 6px; width: 186px;',
	'value' =>  set_value('amendment_link_path')
	);

?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>/public/css/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="<?php echo base_url(); ?>/public/js/jsDatePick.min.1.3.js"></script>
 <link href="<?php echo base_url().'public/css/facebox.css'; ?>" media="screen" rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url().'public/js/facebox.js'; ?>" type="text/javascript"></script>
  
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : '<?php echo base_url().'public/images/loading.gif'; ?>',
        closeImage   : '<?php echo base_url().'public/images/closelabel.png'; ?>'
      })
    })
  </script>
<script type="text/javascript">
	window.onload = function(){
     document.form1.tenant_name.disabled=true;
     document.form1.tenant_contact_number.disabled=true;
		new JsDatePick({
			useMode:2,
			target:"service_date",
			dateFormat:"%d-%m-%Y"
		});
	};
	
	function enableField()
	{
	 document.form1.tenant_name.disabled=false;
	 document.form1.tenant_contact_number.disabled=false;
	}
	
	function disableField()
	{
     document.form1.tenant_name.disabled=true;
     document.form1.tenant_contact_number.disabled=true;
	}
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
      <?php if(!empty($available_message)): ?><div  class="error_message"><?php echo $available_message; ?></div><?php endif; ?>
       <?php if(!empty($admin_message)): ?> 
        <!--  start message-green -->
        <div id="message-green">
        <table border="0" width="100%" height="25" cellpadding="0" cellspacing="0">
        <tr>
            <td class="green-left"><?php echo $admin_message; ?>&nbsp;&nbsp;<a href="<?php echo base_url().$this->aadmin->Arequest_service_home_uri; ?>">View all.</a></td>
            <td class="green-right"><a class="close-green"><img src="<?php echo base_url(); ?>public/images/table/icon_close_green.gif"   alt="" /></a></td>
        </tr>
        </table>
        </div>
        <!--  end message-green -->
       <?php endif; ?> 
        <?php echo form_open($this->uri->uri_string(), "name = form1 id = form1"); ?>
        <?php echo ucwords($this->dx_auth->get_auth_error()); ?>
 
		<!-- start id-form -->
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <?php 
		if(!empty($cl_number) && empty($company_name2)):
		
		 ?>
        
         <tr><td colspan="6" align="center"><div  class="error_message">The property you are searching for has not been found in the database. Please click <a href="<?php echo base_url(); ?>admin/property_file2/add" rel="facebox">here</a> to add the property to the database for future reference.</div></td></tr>
         <tr><td colspan="6">&nbsp;</td></tr>
        <?php else: ?>
		<tr>
			<th valign="top"><?php echo "Name / Number"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($client_name_number); ?></td>
                        <td>&nbsp;</td>
                        <th valign="top"><?php echo "Post Code"; ?><span class="markcolor">*</span></th>
			<td><?php echo form_input($post_code); ?></td>
                        <td><?php echo nbs(2).form_submit('search', 'Search'); ?></td>        
		     </tr>
                     <tr><td colspan="6">&nbsp;</td></tr>
        <?php endif; ?>
         </table>
     
          <table border="0" width="70%" cellpadding="0" cellspacing="0"  id="id-form">

		<tr>
			<th valign="top"><?php echo "Address"; ?><span class="markcolor"></span></th>
			<td valign="top"><?php echo form_input($address); ?>
                        <p>&nbsp;</p>    
                        <span class="markcolor"><?php echo ucwords(form_error('address')); ?></span></td>                       
                        <td>&nbsp;</td>
                        <th valign="top"><?php echo "Company"; ?><span class="markcolor"></span></th>
			<td valign="top"><?php echo form_input($company_name); ?><p>&nbsp;</p> 
                           <span class="markcolor"><?php echo ucwords(form_error('company_name')); ?></span>
                        </td>
                        <td>&nbsp;</td>
		 </tr>
		<tr>
			<th valign="top"><?php echo "Property Size"; ?><span class="markcolor"></span></th>
			<td valign="top"><?php echo form_input($property_size); ?><p>&nbsp;</p>
                        <span class="markcolor"><?php echo ucwords(form_error('property_size')); ?></span>			
                       </td>
                        <td>&nbsp;</td>
                        <th valign="top"><?php echo "Service"; ?><span class="markcolor">*</span></th>
                        <td valign="top"><?php echo form_dropdown('service_type', $OptionServiceType, set_value('service_type'), 'style="width:200px; height:35px;"'); ?>
                            <p>&nbsp;</p> 
                            <span class="markcolor"><?php echo ucwords(form_error('service_type')); ?></span>
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
                       <td valign="top"><?php echo form_dropdown('service_time', $OptionTime, set_value('service_time'), 'style="width:200px; height:35px;"'); ?>
                       <p>&nbsp;</p> 
                       <span class="markcolor"><?php echo ucwords(form_error('service_time')); ?></span>                       
                       </td>
                       <td>&nbsp;</td>
	       </tr>
               <tr>
                    <th valign="top"><?php echo "Duration"; ?><span class="markcolor">*</span></th>
                    <td valign="top"><?php echo form_dropdown('service_duration', $OptionServiceDuration, set_value('service_duration'), 'style="width:200px; height:35px;"'); ?>
                    <p>&nbsp;</p> 
                    <span class="markcolor"><?php echo ucwords(form_error('service_duration')); ?></span>
                    
                    </td>
                    <td>&nbsp;</td>
                    <th valign="top"><?php echo "Clerk"; ?><span class="markcolor">*</span></th>
                    <td valign="top"><?php echo form_dropdown('clerk_id', $OptionClerk, set_value('clerk_id'), 'style="width:200px; height:35px;"'); ?>
                    <p>&nbsp;</p> 
                    <span class="markcolor"><?php echo ucwords(form_error('clerk_id')); ?></span>                    
                    </td>
                    <td>&nbsp;</td>
                </tr>
              	<tr>
			     <th valign="top"><?php echo "Keys Afterword To"; ?><span class="markcolor">*</span></th>
			    <td valign="top"><?php echo form_input($keys_afterword_to); ?>
                        <p>&nbsp;</p>                        
                        <span class="markcolor"><?php echo ucwords(form_error('keys_afterword_to')); ?></span>        
			    </td>
                <td>&nbsp;</td>
                  <th valign="top"><?php echo "Tenant To Attend ?"; ?><span class="markcolor"></span></th>
                  <td valign="top">
                  <?php echo form_radio($data1)." Yes"; ?><br/><br/>
                  <?php echo form_radio($data2)." No"; ?>
                    <p>&nbsp;</p> 
                     <span class="markcolor"><?php echo ucwords(form_error('tenant_to_attend')); ?></span>
                   </td>
                   <td>&nbsp;</td>
          </tr>
		<tr>
                  
			<th valign="top"><?php echo "Tenant Name"; ?><span class="markcolor"></span></th>
			<td valign="top"><?php echo form_input($tenant_name); ?>
                        <p>&nbsp;</p> 
                        <span class="markcolor"><?php echo ucwords(form_error('tenant_name')); ?></span>
			
              </td>
              <td>&nbsp;</td>
                <th valign="top"><?php echo "Contact Number"; ?><span class="markcolor"></span></th>
               <td valign="top"><?php echo form_input($tenant_contact_number); ?>
                <p>&nbsp;</p> 
               <span class="markcolor"><?php echo ucwords(form_error('tenant_contact_number')); ?></span>
    
               </td>
               <td>&nbsp;</td> 
     	       </tr>
              <tr>
                <th valign="top"><?php echo "Notes"; ?><span class="markcolor"></span></th>
                <td valign="top" colspan="4"><?php echo form_textarea($notes); ?></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
               <th valign="top"><?php echo "Document Link Path"; ?><span class="markcolor"></span></th>
               <td valign="top"><?php echo form_input($document_url_link).nbs(3); ?><img src="<?php echo base_url().'public/images/boxnet_icon.png'; ?>" height="24" width="24" alt="#" align="absmiddle" />
                <p>&nbsp;</p> 
                <span class="markcolor"><?php echo ucwords(form_error('document_url_link')); ?></span>			
                </td>
                <td>&nbsp;</td>                    
                <th valign="top"><?php echo "Status"; ?><span class="markcolor">*</span></th>
                <td valign="top"><?php echo form_dropdown('service_status', $OptionServiceStatus, set_value('service_status'), 'style="width:200px; height:35px;"'); ?>
                <p>&nbsp;</p> 
                <span class="markcolor"><?php echo ucwords(form_error('service_status')); ?></span>                    
                </td>
                <td>&nbsp;</td>
              </tr>
            
              <tr>
               <th valign="top"><?php echo "Amendment Link Path"; ?><span class="markcolor"></span></th>
               <td valign="top"><?php echo form_input($amendment_link_path).nbs(3); ?><img src="<?php echo base_url().'public/images/edit.png'; ?>" alt="#" align="absmiddle" />
                <p>&nbsp;</p> 
                <span class="markcolor"><?php echo ucwords(form_error('amendment_link_path')); ?></span>			
                </td>
                <td colspan="4">&nbsp;</td>                    
              </tr>
         
          <tr>
            <th>&nbsp;</th>
            <td valign="top">
               <?php
               foreach($propertyValues as $propertyValue):
			     $client_name_number1 = $propertyValue->client_name_number;
			     $street1    = $propertyValue->street1;
			     $street2    = $propertyValue->street2;
			     $town       = $propertyValue->town;
			     $post_code1 = $propertyValue->post_code;
			     $county     = $propertyValue->county;
                 $client_id     = $propertyValue->client_id;
			    endforeach;
				 if(!empty($client_name_number1)): $client_name_number1 = $client_name_number1; else: $client_name_number1 = ""; endif;
				 if(!empty($street1)): $street1 = $street1; else: $street1 = ""; endif;
				 if(!empty($street2)): $street2 = $street2; else: $street2 = ""; endif;
				 if(!empty($town)): $town = $town; else: $town = ""; endif;
				 if(!empty($post_code1)): $post_code1 = $post_code1; else: $post_code1 = ""; endif;
				 if(!empty($county)): $county = $county; else: $county = ""; endif;
                 if(!empty($client_id)): $client_id = $client_id; else: $client_id = ""; endif;
    			 ?>
                <?php echo form_hidden('client_id', $client_id).form_hidden('client_name_number1', $client_name_number1).form_hidden('street1', $street1).form_hidden('street2', $street2).form_hidden('town', $town).form_hidden('post_code1', $post_code1).form_hidden('county', $county); ?>
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

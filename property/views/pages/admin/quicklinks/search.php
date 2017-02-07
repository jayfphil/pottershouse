
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
 
   
          <table border="0" width="70%" cellpadding="0" cellspacing="0"  id="id-form">
               <tr>
                    <th valign="top"><?php echo "Company Name"; ?><span class="markcolor"></span></th>
                    <td valign="top"><?php echo form_dropdown('company_id', $OptionCompany, set_value('company_id'), 'style="width:200px; height:35px;"'); ?>
                    <p>&nbsp;</p> 
                    <span class="markcolor"><?php echo ucwords(form_error('company_id')); ?></span>
                    
                    </td>
                    <td>&nbsp;</td>
                    <th valign="top"><?php echo "Service Type"; ?><span class="markcolor"></span></th>
                    <td valign="top"><?php echo form_dropdown('service_type_id', $OptionServiceType, set_value('service_type_id'), 'style="width:200px; height:35px;"'); ?>
                    <p>&nbsp;</p> 
                    <span class="markcolor"><?php echo ucwords(form_error('service_type_id')); ?></span>                    
                    </td>
                    <td>&nbsp;</td>
                    <td valign="top">
                        <?php echo form_submit('submit', 'Search', 'style="height:40px; width:60px;"'); ?>
                    </td>
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

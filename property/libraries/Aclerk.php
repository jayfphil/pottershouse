<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Aclerk
{	
	function Aclerk()
	{
		$this->ci =& get_instance();
		$this->ci->load->config('clerk_config');	
		$this->aclerk_var_init();
	}

	function aclerk_var_init()
	{	
	 // Clerk Availability initialization	
		$this->Ccavailability_model_uri	   = $this->ci->config->item('DX_Ccavailability_model');
		
		$this->Ccavailability_home_uri	   = $this->ci->config->item('DX_Ccavailability_home_uri');	
		$this->Ccavailability_entry_uri	   = $this->ci->config->item('DX_Ccavailability_entry_uri');	
		$this->Ccavailability_edit_uri	   = $this->ci->config->item('DX_Ccavailability_edit_uri');	
		$this->Ccavailability_delete_uri   = $this->ci->config->item('DX_Ccavailability_delete_uri');	
		$this->Ccavailability_sort_uri     = $this->ci->config->item('DX_Ccavailability_sort_uri');	

		// cavailability Views
		$this->Ccavailability_home_view    = $this->ci->config->item('DX_Ccavailability_home_view');
		$this->Ccavailability_entry_view   = $this->ci->config->item('DX_Ccavailability_entry_view');	
		$this->Ccavailability_edit_view	   = $this->ci->config->item('DX_Ccavailability_edit_view');
	
	 // Property File initialization	
		$this->Cproperty_file_model_uri	   = $this->ci->config->item('DX_Cproperty_file_model');
		
		$this->Cproperty_file_home_uri	   = $this->ci->config->item('DX_Cproperty_file_home_uri');	
		$this->Cproperty_file_entry_uri	   = $this->ci->config->item('DX_Cproperty_file_entry_uri');	
		$this->Cproperty_file_edit_uri	   = $this->ci->config->item('DX_Cproperty_file_edit_uri');	
		$this->Cproperty_file_delete_uri   = $this->ci->config->item('DX_Cproperty_file_delete_uri');	
		$this->Cproperty_file_sort_uri     = $this->ci->config->item('DX_Cproperty_file_sort_uri');	

		// cavailability Views
		$this->Cproperty_file_home_view    = $this->ci->config->item('DX_Cproperty_file_home_view');
		$this->Cproperty_file_entry_view   = $this->ci->config->item('DX_Cproperty_file_entry_view');	
		$this->Cproperty_file_edit_view	   = $this->ci->config->item('DX_Cproperty_file_edit_view');	
	
	 // Report initialization	
		$this->Creport_model_uri	   = $this->ci->config->item('DX_Creport_model');
		
		$this->Creport_home_uri	       = $this->ci->config->item('DX_Creport_home_uri');	
		$this->Creport_entry_uri	   = $this->ci->config->item('DX_Creport_entry_uri');	
		$this->Creport_edit_uri	       = $this->ci->config->item('DX_Creport_edit_uri');	
		$this->Creport_delete_uri      = $this->ci->config->item('DX_Creport_delete_uri');	
		
		$this->Creport_home_view      = $this->ci->config->item('DX_Creport_home_view');
		$this->Creport_search_view    = $this->ci->config->item('DX_Creport_search_view');	
		$this->Creport_edit_view	  = $this->ci->config->item('DX_Creport_edit_view');
	
	 // Calendar initialization	
		$this->Ccalendar_model_uri	   = $this->ci->config->item('DX_Ccalendar_model');
		
		$this->Ccalendar_home_uri	   = $this->ci->config->item('DX_Ccalendar_home_uri');	
		$this->Ccalendar_entry_uri	   = $this->ci->config->item('DX_Ccalendar_entry_uri');	
		$this->Ccalendar_edit_uri	   = $this->ci->config->item('DX_Ccalendar_edit_uri');	
		$this->Ccalendar_delete_uri    = $this->ci->config->item('DX_Ccalendar_delete_uri');	
		
		$this->Ccalendar_home_view     = $this->ci->config->item('DX_Ccalendar_home_view');
		$this->Ccalendar_search_view   = $this->ci->config->item('DX_Ccalendar_search_view');	
		$this->Ccalendar_edit_view	   = $this->ci->config->item('DX_Ccalendar_edit_view');	
      
	     // Service initialization	
		$this->Crequest_service_model_uri     = $this->ci->config->item('DX_Crequest_service_model');
		
		$this->Crequest_service_home_uri      = $this->ci->config->item('DX_Crequest_service_home_uri');	
		$this->Crequest_service_entry_uri     = $this->ci->config->item('DX_Crequest_service_entry_uri');	
		$this->Crequest_service_edit_uri      = $this->ci->config->item('DX_Crequest_service_edit_uri');	
		$this->Crequest_service_delete_uri    = $this->ci->config->item('DX_Crequest_service_delete_uri');	
                $this->Crequest_service_pending_uri   = $this->ci->config->item('DX_Crequest_service_pending_uri');	
		$this->Crequest_service_scheduled_uri = $this->ci->config->item('DX_Crequest_service_scheduled_uri');	
		$this->Crequest_service_completed_uri = $this->ci->config->item('DX_Crequest_service_completed_uri');	
		$this->Crequest_service_sort_uri      = $this->ci->config->item('DX_Crequest_service_sort_uri');	
		$this->Crequest_service_pending_sort_uri   = $this->ci->config->item('DX_Crequest_service_pending_sort_uri');	
		$this->Crequest_service_scheduled_sort_uri = $this->ci->config->item('DX_Crequest_service_scheduled_sort_uri');	
		$this->Crequest_service_completed_sort_uri = $this->ci->config->item('DX_Crequest_service_completed_sort_uri');	

		// cavailability Views
		$this->Crequest_service_home_view      = $this->ci->config->item('DX_Crequest_service_home_view');
		$this->Crequest_service_entry_view     = $this->ci->config->item('DX_Crequest_service_entry_view');	
		$this->Crequest_service_edit_view      = $this->ci->config->item('DX_Crequest_service_edit_view');	
                $this->Crequest_service_pending_view   = $this->ci->config->item('DX_Crequest_service_pending_view');
		$this->Crequest_service_scheduled_view = $this->ci->config->item('DX_Crequest_service_scheduled_view');	
		$this->Crequest_service_completed_view = $this->ci->config->item('DX_Crequest_service_completed_view');	
		
	}
}
?>
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Adirector
{	
	function Adirector()
	{
		$this->ci =& get_instance();
		$this->ci->load->config('director_config');	
		$this->adirector_var_init();
	}

	function adirector_var_init()
	{	
	
	 // User initialization	
		$this->Duser_model_uri		   = $this->ci->config->item('DX_Duser_model');
		
		$this->Duser_home_uri		   = $this->ci->config->item('DX_Duser_home_uri');	
		$this->Duser_entry_uri		   = $this->ci->config->item('DX_Duser_entry_uri');	
		$this->Duser_edit_uri		   = $this->ci->config->item('DX_Duser_edit_uri');	
		$this->Duser_delete_uri	       = $this->ci->config->item('DX_Duser_delete_uri');	
		$this->Duser_sort_uri	       = $this->ci->config->item('DX_Duser_sort_uri');	

		// User Views
		$this->Duser_home_view 	       = $this->ci->config->item('DX_Duser_home_view');
		$this->Duser_entry_view	       = $this->ci->config->item('DX_Duser_entry_view');	
		$this->Duser_edit_view		   = $this->ci->config->item('DX_Duser_edit_view');	
		
	 // Clerk Availability initialization	
		$this->Dcavailability_model_uri	   = $this->ci->config->item('DX_Dcavailability_model');
		
		$this->Dcavailability_home_uri	   = $this->ci->config->item('DX_Dcavailability_home_uri');	
		$this->Dcavailability_entry_uri	   = $this->ci->config->item('DX_Dcavailability_entry_uri');	
		$this->Dcavailability_edit_uri	   = $this->ci->config->item('DX_Dcavailability_edit_uri');	
		$this->Dcavailability_delete_uri   = $this->ci->config->item('DX_Dcavailability_delete_uri');	
		$this->Dcavailability_sort_uri     = $this->ci->config->item('DX_Dcavailability_sort_uri');	

		// cavailability Views
		$this->Dcavailability_home_view    = $this->ci->config->item('DX_Dcavailability_home_view');
		$this->Dcavailability_entry_view   = $this->ci->config->item('DX_Dcavailability_entry_view');	
		$this->Dcavailability_edit_view	   = $this->ci->config->item('DX_Dcavailability_edit_view');
                
  	 // Property File initialization	
		$this->Dproperty_file_model_uri	   = $this->ci->config->item('DX_Dproperty_file_model');
		
		$this->Dproperty_file_home_uri	   = $this->ci->config->item('DX_Dproperty_file_home_uri');	
		$this->Dproperty_file_entry_uri	   = $this->ci->config->item('DX_Dproperty_file_entry_uri');	
		$this->Dproperty_file_edit_uri	   = $this->ci->config->item('DX_Dproperty_file_edit_uri');	
		$this->Dproperty_file_delete_uri   = $this->ci->config->item('DX_Dproperty_file_delete_uri');	
		$this->Dproperty_file_sort_uri     = $this->ci->config->item('DX_Dproperty_file_sort_uri');	

		// cavailability Views
		$this->Dproperty_file_home_view    = $this->ci->config->item('DX_Dproperty_file_home_view');
		$this->Dproperty_file_entry_view   = $this->ci->config->item('DX_Dproperty_file_entry_view');	
		$this->Dproperty_file_edit_view	   = $this->ci->config->item('DX_Dproperty_file_edit_view');	
       	
         // Service initialization	
		$this->Drequest_service_model_uri     = $this->ci->config->item('DX_Drequest_service_model');
		
		$this->Drequest_service_home_uri      = $this->ci->config->item('DX_Drequest_service_home_uri');	
		$this->Drequest_service_entry_uri     = $this->ci->config->item('DX_Drequest_service_entry_uri');	
		$this->Drequest_service_edit_uri      = $this->ci->config->item('DX_Drequest_service_edit_uri');	
		$this->Drequest_service_delete_uri    = $this->ci->config->item('DX_Drequest_service_delete_uri');	
        $this->Drequest_service_pending_uri   = $this->ci->config->item('DX_Drequest_service_pending_uri');	
		$this->Drequest_service_scheduled_uri = $this->ci->config->item('DX_Drequest_service_scheduled_uri');	
		$this->Drequest_service_completed_uri = $this->ci->config->item('DX_Drequest_service_completed_uri');	
		$this->Drequest_service_sort_uri      = $this->ci->config->item('DX_Drequest_service_sort_uri');	
		$this->Drequest_service_pending_sort_uri   = $this->ci->config->item('DX_Drequest_service_pending_sort_uri');	
		$this->Drequest_service_scheduled_sort_uri = $this->ci->config->item('DX_Drequest_service_scheduled_sort_uri');	
		$this->Drequest_service_completed_sort_uri = $this->ci->config->item('DX_Drequest_service_completed_sort_uri');	

		// cavailability Views
		$this->Drequest_service_home_view      = $this->ci->config->item('DX_Drequest_service_home_view');
		$this->Drequest_service_entry_view     = $this->ci->config->item('DX_Drequest_service_entry_view');	
		$this->Drequest_service_edit_view      = $this->ci->config->item('DX_Drequest_service_edit_view');	
        $this->Drequest_service_pending_view   = $this->ci->config->item('DX_Drequest_service_pending_view');
		$this->Drequest_service_scheduled_view = $this->ci->config->item('DX_Drequest_service_scheduled_view');	
		$this->Drequest_service_completed_view = $this->ci->config->item('DX_Drequest_service_completed_view');	
		
	 // Report initialization	
		$this->Dreport_model_uri	   = $this->ci->config->item('DX_Dreport_model');
		
		$this->Dreport_home_uri	       = $this->ci->config->item('DX_Dreport_home_uri');	
		$this->Dreport_entry_uri	   = $this->ci->config->item('DX_Dreport_entry_uri');	
		$this->Dreport_edit_uri	       = $this->ci->config->item('DX_Dreport_edit_uri');	
		$this->Dreport_delete_uri      = $this->ci->config->item('DX_Dreport_delete_uri');	
		
		$this->Dreport_home_view       = $this->ci->config->item('DX_Dreport_home_view');
		$this->Dreport_search_view     = $this->ci->config->item('DX_Dreport_search_view');	
		$this->Dreport_edit_view	   = $this->ci->config->item('DX_Dreport_edit_view');	
	
	 // Calendar initialization	
		$this->Dcalendar_model_uri	   = $this->ci->config->item('DX_Dcalendar_model');
		
		$this->Dcalendar_home_uri	   = $this->ci->config->item('DX_Dcalendar_home_uri');	
		$this->Dcalendar_entry_uri	   = $this->ci->config->item('DX_Dcalendar_entry_uri');	
		$this->Dcalendar_edit_uri	   = $this->ci->config->item('DX_Dcalendar_edit_uri');	
		$this->Dcalendar_delete_uri    = $this->ci->config->item('DX_Dcalendar_delete_uri');	
		
		$this->Dcalendar_home_view     = $this->ci->config->item('DX_Dcalendar_home_view');
		$this->Dcalendar_search_view   = $this->ci->config->item('DX_Dcalendar_search_view');	
		$this->Dcalendar_edit_view	   = $this->ci->config->item('DX_Dcalendar_edit_view');	
	}
}
?>
<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Aclient
{	
	function Aclient()
	{
		$this->ci =& get_instance();
		$this->ci->load->config('client_config');	
		$this->aclient_var_init();
	}

	function aclient_var_init()
	{	
	
	 // Property File initialization	
		$this->Clproperty_file_model_uri	= $this->ci->config->item('DX_Clproperty_file_model');
		
		$this->Clproperty_file_home_uri	    = $this->ci->config->item('DX_Clproperty_file_home_uri');	
		$this->Clproperty_file_entry_uri	= $this->ci->config->item('DX_Clproperty_file_entry_uri');	
		$this->Clproperty_file_edit_uri	    = $this->ci->config->item('DX_Clproperty_file_edit_uri');	
		$this->Clproperty_file_delete_uri   = $this->ci->config->item('DX_Clproperty_file_delete_uri');	
		$this->Clproperty_file_sort_uri     = $this->ci->config->item('DX_Clproperty_file_sort_uri');	

		// cavailability Views
		$this->Clproperty_file_home_view    = $this->ci->config->item('DX_Clproperty_file_home_view');
		$this->Clproperty_file_entry_view   = $this->ci->config->item('DX_Clproperty_file_entry_view');	
		$this->Clproperty_file_edit_view	= $this->ci->config->item('DX_Clproperty_file_edit_view');	
	
	 // Report initialization	
		$this->Clreport_model_uri	    = $this->ci->config->item('DX_Clreport_model');
		
		$this->Clreport_home_uri	    = $this->ci->config->item('DX_Clreport_home_uri');	
		$this->Clreport_entry_uri	    = $this->ci->config->item('DX_Clreport_entry_uri');	
		$this->Clreport_edit_uri	    = $this->ci->config->item('DX_Clreport_edit_uri');	
		$this->Clreport_delete_uri      = $this->ci->config->item('DX_Clreport_delete_uri');	
		
		$this->Clreport_home_view      = $this->ci->config->item('DX_Clreport_home_view');
		$this->Clreport_search_view    = $this->ci->config->item('DX_Clreport_search_view');	
		$this->Clreport_edit_view	   = $this->ci->config->item('DX_Clreport_edit_view');	
		
         // Property File initialization	
		$this->Clrequest_service_model_uri     = $this->ci->config->item('DX_Clrequest_service_model');
		
		$this->Clrequest_service_home_uri      = $this->ci->config->item('DX_Clrequest_service_home_uri');	
		$this->Clrequest_service_entry_uri     = $this->ci->config->item('DX_Clrequest_service_entry_uri');	
		$this->Clrequest_service_edit_uri      = $this->ci->config->item('DX_Clrequest_service_edit_uri');	
		$this->Clrequest_service_delete_uri    = $this->ci->config->item('DX_Clrequest_service_delete_uri');	
        $this->Clrequest_service_pending_uri   = $this->ci->config->item('DX_Clrequest_service_pending_uri');	
		$this->Clrequest_service_scheduled_uri = $this->ci->config->item('DX_Clrequest_service_scheduled_uri');	
		$this->Clrequest_service_completed_uri = $this->ci->config->item('DX_Clrequest_service_completed_uri');	
		$this->Clrequest_service_sort_uri      = $this->ci->config->item('DX_Clrequest_service_sort_uri');	
		$this->Clrequest_service_pending_sort_uri   = $this->ci->config->item('DX_Clrequest_service_pending_sort_uri');	
		$this->Clrequest_service_scheduled_sort_uri = $this->ci->config->item('DX_Clrequest_service_scheduled_sort_uri');	
		$this->Clrequest_service_completed_sort_uri = $this->ci->config->item('DX_Clrequest_service_completed_sort_uri');	

		// cavailability Views
		$this->Clrequest_service_home_view      = $this->ci->config->item('DX_Clrequest_service_home_view');
		$this->Clrequest_service_entry_view     = $this->ci->config->item('DX_Clrequest_service_entry_view');	
		$this->Clrequest_service_edit_view      = $this->ci->config->item('DX_Clrequest_service_edit_view');	
        $this->Clrequest_service_pending_view   = $this->ci->config->item('DX_Clrequest_service_pending_view');
		$this->Clrequest_service_scheduled_view = $this->ci->config->item('DX_Clrequest_service_scheduled_view');	
		$this->Clrequest_service_completed_view = $this->ci->config->item('DX_Clrequest_service_completed_view');	
	
	 // Calendar initialization	
		$this->Clcalendar_model_uri	   = $this->ci->config->item('DX_Clcalendar_model');
		
		$this->Clcalendar_home_uri	   = $this->ci->config->item('DX_Clcalendar_home_uri');	
		$this->Clcalendar_entry_uri	   = $this->ci->config->item('DX_Clcalendar_entry_uri');	
		$this->Clcalendar_edit_uri	   = $this->ci->config->item('DX_Clcalendar_edit_uri');	
		$this->Clcalendar_delete_uri    = $this->ci->config->item('DX_Clcalendar_delete_uri');	
		
		$this->Clcalendar_home_view     = $this->ci->config->item('DX_Clcalendar_home_view');
		$this->Clcalendar_search_view   = $this->ci->config->item('DX_Clcalendar_search_view');	
		$this->Clcalendar_edit_view	   = $this->ci->config->item('DX_Clcalendar_edit_view');	
		
	}
}
?>
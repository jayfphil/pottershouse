<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Aadmin
{	
	function Aadmin()
	{
		$this->ci =& get_instance();
		$this->ci->load->config('admin_config');	
		$this->aadmin_var_init();
	}
	
	function limit_words($string, $word_limit)
	{
		$words = explode(" ",$string);
		return implode(" ",array_splice($words,0,$word_limit));
	}

	function aadmin_var_init()
	{	
	 // company type initialization	
		$this->Acompany_model_uri		= $this->ci->config->item('DX_Acompany_model');
		
		$this->Acompany_home_uri		= $this->ci->config->item('DX_Acompany_home_uri');	
		$this->Acompany_entry_uri		= $this->ci->config->item('DX_Acompany_entry_uri');	
		$this->Acompany_edit_uri		= $this->ci->config->item('DX_Acompany_edit_uri');	
		$this->Acompany_delete_uri	    = $this->ci->config->item('DX_Acompany_delete_uri');	

		// company type Views
		$this->Acompany_home_view 	    = $this->ci->config->item('DX_Acompany_home_view');
		$this->Acompany_entry_view	    = $this->ci->config->item('DX_Acompany_entry_view');	
		$this->Acompany_edit_view		= $this->ci->config->item('DX_Acompany_edit_view');	

		//Contact Person Level configuration
		$this->Acp_level_home_uri    	   = $this->ci->config->item('DX_Acp_level_home_uri');
		$this->Acp_level_entry_uri	       = $this->ci->config->item('DX_Acp_level_entry_uri');
		$this->Acp_level_edit_uri	       = $this->ci->config->item('DX_Acp_level_edit_uri');
		$this->Acp_level_delete_uri	       = $this->ci->config->item('DX_Acp_level_delete_uri');
		// Admin Model URI....
		$this->Acp_level_model_uri         = $this->ci->config->item('DX_Acp_level_model');
		// Event Manager View
		$this->Acp_level_home_view         = $this->ci->config->item('DX_Acp_level_home_view');
		$this->Acp_level_entry_view	       = $this->ci->config->item('DX_Acp_level_entry_view');
		$this->Acp_level_edit_view	       = $this->ci->config->item('DX_Acp_level_edit_view');
		//-------------------------------
		
		//Contact Person  configuration
		$this->Acontact_person_home_uri	   = $this->ci->config->item('DX_Acontact_person_home_uri');
		$this->Acontact_person_entry_uri   = $this->ci->config->item('DX_Acontact_person_entry_uri');
		$this->Acontact_person_edit_uri	   = $this->ci->config->item('DX_Acontact_person_edit_uri');
		$this->Acontact_person_delete_uri  = $this->ci->config->item('DX_Acontact_person_delete_uri');
		// Admin Model URI....
		$this->Acontact_person_model_uri   = $this->ci->config->item('DX_Acontact_person_model');
		// Event Manager View
		$this->Acontact_person_home_view   = $this->ci->config->item('DX_Acontact_person_home_view');
		$this->Acontact_person_entry_view  = $this->ci->config->item('DX_Acontact_person_entry_view');
		$this->Acontact_person_edit_view   = $this->ci->config->item('DX_Acontact_person_edit_view');
		//-------------------------------
		
		//Service Type  configuration
		$this->Aservice_type_home_uri	   = $this->ci->config->item('DX_Aservice_type_home_uri');
		$this->Aservice_type_entry_uri	   = $this->ci->config->item('DX_Aservice_type_entry_uri');
		$this->Aservice_type_edit_uri	   = $this->ci->config->item('DX_Aservice_type_edit_uri');
		$this->Aservice_type_delete_uri    = $this->ci->config->item('DX_Aservice_type_delete_uri');
		// Admin Model URI....
		$this->Aservice_type_model_uri     = $this->ci->config->item('DX_Aservice_type_model');
		// Event Manager View
		$this->Aservice_type_home_view     = $this->ci->config->item('DX_Aservice_type_home_view');
		$this->Aservice_type_entry_view    = $this->ci->config->item('DX_Aservice_type_entry_view');
		$this->Aservice_type_edit_view	   = $this->ci->config->item('DX_Aservice_type_edit_view');
		//-------------------------------
		
		//Service Status  configuration
		$this->Aservice_status_home_uri	   = $this->ci->config->item('DX_Aservice_status_home_uri');
		$this->Aservice_status_entry_uri   = $this->ci->config->item('DX_Aservice_status_entry_uri');
		$this->Aservice_status_edit_uri	   = $this->ci->config->item('DX_Aservice_status_edit_uri');
		$this->Aservice_status_delete_uri  = $this->ci->config->item('DX_Aservice_status_delete_uri');
		// Admin Model URI....
		$this->Aservice_status_model_uri   = $this->ci->config->item('DX_Aservice_status_model');
		// Event Manager View
		$this->Aservice_status_home_view   = $this->ci->config->item('DX_Aservice_status_home_view');
		$this->Aservice_status_entry_view  = $this->ci->config->item('DX_Aservice_status_entry_view');
		$this->Aservice_status_edit_view   = $this->ci->config->item('DX_Aservice_status_edit_view');
		//-------------------------------
	
		//Status Note  configuration
		$this->Astatus_note_home_uri	   = $this->ci->config->item('DX_Astatus_note_home_uri');
		$this->Astatus_note_entry_uri      = $this->ci->config->item('DX_Astatus_note_entry_uri');
		$this->Astatus_note_edit_uri	   = $this->ci->config->item('DX_Astatus_note_edit_uri');
		$this->Astatus_note_delete_uri     = $this->ci->config->item('DX_Astatus_note_delete_uri');
		// Admin Model URI....
		$this->Astatus_note_model_uri      = $this->ci->config->item('DX_Astatus_note_model');
		// Event Manager View
		$this->Astatus_note_home_view      = $this->ci->config->item('DX_Astatus_note_home_view');
		$this->Astatus_note_entry_view     = $this->ci->config->item('DX_Astatus_note_entry_view');
		$this->Astatus_note_edit_view      = $this->ci->config->item('DX_Astatus_note_edit_view');
		//-------------------------------
		
		//Testimonials  configuration
		$this->Testimonials_home_uri	   = $this->ci->config->item('DX_Testimonials_home_uri');
		$this->Testimonials_entry_uri      = $this->ci->config->item('DX_Testimonials_entry_uri');
		$this->Testimonials_edit_uri	   = $this->ci->config->item('DX_Testimonials_edit_uri');
		$this->Testimonials_delete_uri     = $this->ci->config->item('DX_Testimonials_delete_uri');
		// Admin Model URI....
		$this->Testimonials_model_uri      = $this->ci->config->item('DX_Testimonials_model');
		// Event Manager View
		$this->Testimonials_home_view      = $this->ci->config->item('DX_Testimonials_home_view');
		$this->Testimonials_entry_view     = $this->ci->config->item('DX_Testimonials_entry_view');
		$this->Testimonials_edit_view      = $this->ci->config->item('DX_Testimonials_edit_view');
		//-------------------------------
		
		
		//Announcements  configuration
		$this->Announcements_home_uri	   = $this->ci->config->item('DX_Announcements_home_uri');
		$this->Announcements_entry_uri      = $this->ci->config->item('DX_Announcements_entry_uri');
		$this->Announcements_edit_uri	   = $this->ci->config->item('DX_Announcements_edit_uri');
		$this->Announcements_delete_uri     = $this->ci->config->item('DX_Announcements_delete_uri');
		// Admin Model URI....
		$this->Announcements_model_uri      = $this->ci->config->item('DX_Announcements_model');
		// Event Manager View
		$this->Announcements_home_view      = $this->ci->config->item('DX_Announcements_home_view');
		$this->Announcements_entry_view     = $this->ci->config->item('DX_Announcements_entry_view');
		$this->Announcements_edit_view      = $this->ci->config->item('DX_Announcements_edit_view');
		//-------------------------------
		
		//Quicklinks  configuration
		$this->Quicklinks_home_uri	   = $this->ci->config->item('DX_Quicklinks_home_uri');
		$this->Quicklinks_entry_uri      = $this->ci->config->item('DX_Quicklinks_entry_uri');
		$this->Quicklinks_edit_uri	   = $this->ci->config->item('DX_Quicklinks_edit_uri');
		$this->Quicklinks_delete_uri     = $this->ci->config->item('DX_Quicklinks_delete_uri');
		// Admin Model URI....
		$this->Quicklinks_model_uri      = $this->ci->config->item('DX_Quicklinks_model');
		// Event Manager View
		$this->Quicklinks_home_view      = $this->ci->config->item('DX_Quicklinks_home_view');
		$this->Quicklinks_entry_view     = $this->ci->config->item('DX_Quicklinks_entry_view');
		$this->Quicklinks_edit_view      = $this->ci->config->item('DX_Quicklinks_edit_view');
		//-------------------------------
		
		
         // Property File initialization	
		$this->Aappointment_model_uri     = $this->ci->config->item('DX_Aappointment_model');
		
		$this->Aappointment_home_uri      = $this->ci->config->item('DX_Aappointment_home_uri');	
		$this->Aappointment_entry_uri     = $this->ci->config->item('DX_Aappointment_entry_uri');	
		$this->Aappointment_edit_uri      = $this->ci->config->item('DX_Aappointment_edit_uri');	
		$this->Aappointment_delete_uri    = $this->ci->config->item('DX_Aappointment_delete_uri');	
        $this->Aappointment_cancelled_uri = $this->ci->config->item('DX_Aappointment_cancelled_uri');	
		$this->Aappointment_scheduled_uri = $this->ci->config->item('DX_Aappointment_scheduled_uri');	
		$this->Aappointment_completed_uri = $this->ci->config->item('DX_Aappointment_completed_uri');	
		$this->Aappointment_sort_uri      = $this->ci->config->item('DX_Aappointment_sort_uri');	
		$this->Aappointment_cancelled_sort_uri = $this->ci->config->item('DX_Aappointment_cancelled_sort_uri');	
		$this->Aappointment_scheduled_sort_uri = $this->ci->config->item('DX_Aappointment_scheduled_sort_uri');	
		$this->Aappointment_completed_sort_uri = $this->ci->config->item('DX_Aappointment_completed_sort_uri');	

		// cavailability Views
		$this->Aappointment_home_view      = $this->ci->config->item('DX_Aappointment_home_view');
		$this->Aappointment_entry_view     = $this->ci->config->item('DX_Aappointment_entry_view');	
		$this->Aappointment_edit_view      = $this->ci->config->item('DX_Aappointment_edit_view');	
        $this->Aappointment_cancelled_view = $this->ci->config->item('DX_Aappointment_cancelled_view');
		$this->Aappointment_scheduled_view = $this->ci->config->item('DX_Aappointment_scheduled_view');	
		$this->Aappointment_completed_view = $this->ci->config->item('DX_Aappointment_completed_view');	


		// Property File initialization	for Events
		$this->Events_model_uri     = $this->ci->config->item('DX_Events_model');
		
		$this->Events_home_uri      = $this->ci->config->item('DX_Events_home_uri');	
		$this->Events_entry_uri     = $this->ci->config->item('DX_Events_entry_uri');	
		$this->Events_edit_uri      = $this->ci->config->item('DX_Events_edit_uri');	
		$this->Events_delete_uri    = $this->ci->config->item('DX_Events_delete_uri');	
        $this->Events_cancelled_uri = $this->ci->config->item('DX_Events_cancelled_uri');	
		$this->Events_scheduled_uri = $this->ci->config->item('DX_Events_scheduled_uri');	
		$this->Events_completed_uri = $this->ci->config->item('DX_Events_completed_uri');	
		$this->Events_sort_uri      = $this->ci->config->item('DX_Events_sort_uri');	
		$this->Events_cancelled_sort_uri = $this->ci->config->item('DX_Events_cancelled_sort_uri');	
		$this->Events_scheduled_sort_uri = $this->ci->config->item('DX_Events_scheduled_sort_uri');	
		$this->Events_completed_sort_uri = $this->ci->config->item('DX_Events_completed_sort_uri');	

		// cavailability Views
		$this->Events_home_view      = $this->ci->config->item('DX_Events_home_view');
		$this->Events_entry_view     = $this->ci->config->item('DX_Events_entry_view');	
		$this->Events_edit_view      = $this->ci->config->item('DX_Events_edit_view');	
        $this->Events_cancelled_view = $this->ci->config->item('DX_Events_cancelled_view');
		$this->Events_scheduled_view = $this->ci->config->item('DX_Events_scheduled_view');	
		$this->Events_completed_view = $this->ci->config->item('DX_Events_completed_view');	
	
	 // User initialization	
		$this->Auser_model_uri		   = $this->ci->config->item('DX_Auser_model');
		
		$this->Auser_home_uri		   = $this->ci->config->item('DX_Auser_home_uri');	
		$this->Auser_entry_uri		   = $this->ci->config->item('DX_Auser_entry_uri');	
		$this->Auser_edit_uri		   = $this->ci->config->item('DX_Auser_edit_uri');	
		$this->Auser_delete_uri	       = $this->ci->config->item('DX_Auser_delete_uri');	
		$this->Auser_sort_uri	       = $this->ci->config->item('DX_Auser_sort_uri');	

		// User Views
		$this->Auser_home_view 	       = $this->ci->config->item('DX_Auser_home_view');
		$this->Auser_entry_view	       = $this->ci->config->item('DX_Auser_entry_view');	
		$this->Auser_edit_view		   = $this->ci->config->item('DX_Auser_edit_view');	
		
	 // Clerk Availability initialization	
		$this->Acavailability_model_uri	   = $this->ci->config->item('DX_Acavailability_model');
		
		$this->Acavailability_home_uri	   = $this->ci->config->item('DX_Acavailability_home_uri');	
		$this->Acavailability_entry_uri	   = $this->ci->config->item('DX_Acavailability_entry_uri');	
		$this->Acavailability_edit_uri	   = $this->ci->config->item('DX_Acavailability_edit_uri');	
		$this->Acavailability_delete_uri   = $this->ci->config->item('DX_Acavailability_delete_uri');	
		$this->Acavailability_sort_uri     = $this->ci->config->item('DX_Acavailability_sort_uri');	
		
		// cavailability Views
		$this->Acavailability_home_view    = $this->ci->config->item('DX_Acavailability_home_view');
		$this->Acavailability_entry_view   = $this->ci->config->item('DX_Acavailability_entry_view');	
		$this->Acavailability_edit_view	   = $this->ci->config->item('DX_Acavailability_edit_view');
		
	 // Property File initialization	
		$this->Aproperty_file_model_uri	   = $this->ci->config->item('DX_Aproperty_file_model');
		
		$this->Aproperty_file_home_uri	   = $this->ci->config->item('DX_Aproperty_file_home_uri');	
		$this->Aproperty_file_entry_uri	   = $this->ci->config->item('DX_Aproperty_file_entry_uri');	
		$this->Aproperty_file_edit_uri	   = $this->ci->config->item('DX_Aproperty_file_edit_uri');	
		$this->Aproperty_file_delete_uri   = $this->ci->config->item('DX_Aproperty_file_delete_uri');	
		$this->Aproperty_file_sort_uri     = $this->ci->config->item('DX_Aproperty_file_sort_uri');	

		// cavailability Views
		$this->Aproperty_file_home_view    = $this->ci->config->item('DX_Aproperty_file_home_view');
		$this->Aproperty_file_entry_view   = $this->ci->config->item('DX_Aproperty_file_entry_view');	
		$this->Aproperty_file_edit_view	   = $this->ci->config->item('DX_Aproperty_file_edit_view');	
       	
         // Property File initialization	
		$this->Arequest_service_model_uri     = $this->ci->config->item('DX_Arequest_service_model');
		
		$this->Arequest_service_home_uri      = $this->ci->config->item('DX_Arequest_service_home_uri');	
		$this->Arequest_service_entry_uri     = $this->ci->config->item('DX_Arequest_service_entry_uri');	
		$this->Arequest_service_edit_uri      = $this->ci->config->item('DX_Arequest_service_edit_uri');	
		$this->Arequest_service_delete_uri    = $this->ci->config->item('DX_Arequest_service_delete_uri');	
                $this->Arequest_service_pending_uri   = $this->ci->config->item('DX_Arequest_service_pending_uri');	
		$this->Arequest_service_scheduled_uri = $this->ci->config->item('DX_Arequest_service_scheduled_uri');	
		$this->Arequest_service_completed_uri = $this->ci->config->item('DX_Arequest_service_completed_uri');	
		$this->Arequest_service_sort_uri      = $this->ci->config->item('DX_Arequest_service_sort_uri');	
		$this->Arequest_service_pending_sort_uri   = $this->ci->config->item('DX_Arequest_service_pending_sort_uri');	
		$this->Arequest_service_scheduled_sort_uri = $this->ci->config->item('DX_Arequest_service_scheduled_sort_uri');	
		$this->Arequest_service_completed_sort_uri = $this->ci->config->item('DX_Arequest_service_completed_sort_uri');	

		// cavailability Views
		$this->Arequest_service_home_view      = $this->ci->config->item('DX_Arequest_service_home_view');
		$this->Arequest_service_entry_view     = $this->ci->config->item('DX_Arequest_service_entry_view');	
		$this->Arequest_service_edit_view      = $this->ci->config->item('DX_Arequest_service_edit_view');	
                $this->Arequest_service_pending_view   = $this->ci->config->item('DX_Arequest_service_pending_view');
		$this->Arequest_service_scheduled_view = $this->ci->config->item('DX_Arequest_service_scheduled_view');	
		$this->Arequest_service_completed_view = $this->ci->config->item('DX_Arequest_service_completed_view');	
	
	 // Report initialization	
		$this->Areport_model_uri	   = $this->ci->config->item('DX_Areport_model');
		
		$this->Areport_home_uri	       = $this->ci->config->item('DX_Areport_home_uri');	
		$this->Areport_entry_uri	   = $this->ci->config->item('DX_Areport_entry_uri');	
		$this->Areport_edit_uri	       = $this->ci->config->item('DX_Areport_edit_uri');	
		$this->Areport_delete_uri      = $this->ci->config->item('DX_Areport_delete_uri');	
		
		$this->Areport_home_view      = $this->ci->config->item('DX_Areport_home_view');
		$this->Areport_search_view    = $this->ci->config->item('DX_Areport_search_view');	
		$this->Areport_edit_view	  = $this->ci->config->item('DX_Areport_edit_view');	
	 
	 // Report initialization	
		$this->Acalendar_model_uri	   = $this->ci->config->item('DX_Acalendar_model');
		
		$this->Acalendar_home_uri	   = $this->ci->config->item('DX_Acalendar_home_uri');	
		$this->Acalendar_entry_uri	   = $this->ci->config->item('DX_Acalendar_entry_uri');	
		$this->Acalendar_edit_uri	   = $this->ci->config->item('DX_Acalendar_edit_uri');	
		$this->Acalendar_delete_uri    = $this->ci->config->item('DX_Acalendar_delete_uri');	
		
		$this->Acalendar_home_view     = $this->ci->config->item('DX_Acalendar_home_view');
		$this->Acalendar_search_view   = $this->ci->config->item('DX_Acalendar_search_view');	
		$this->Acalendar_edit_view	   = $this->ci->config->item('DX_Acalendar_edit_view');	
	}
}
?>
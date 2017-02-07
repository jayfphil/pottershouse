<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//Company configuration
$config['DX_Acompany_home_uri']		= 'user/company_name/home/';
$config['DX_Acompany_entry_uri']	= 'user/company_name/add/';
$config['DX_Acompany_edit_uri']		= 'user/company_name/edit/';
$config['DX_Acompany_delete_uri']	= 'user/company_name/delete/';

// Table name
$config['DX_Acompany_table']  	    = 'client_company';
// user Model URI....
$config['DX_Acompany_model']  	    = 'user/company_names';

// Event Manager View
$config['DX_Acompany_home_view']    = 'pages/user/company_name/home';
$config['DX_Acompany_entry_view']	= 'pages/user/company_name/entry';
$config['DX_Acompany_edit_view']	= 'pages/user/company_name/edit';
//-------------------------------

//Contact Person Level configuration
$config['DX_Acp_level_home_uri']	= 'user/cp_level/home/';
$config['DX_Acp_level_entry_uri']	= 'user/cp_level/add/';
$config['DX_Acp_level_edit_uri']	= 'user/cp_level/edit/';
$config['DX_Acp_level_delete_uri']	= 'user/cp_level/delete/';
// Table name
$config['DX_Acp_level_table']  	    = 'person_level';
// user Model URI....
$config['DX_Acp_level_model']  	    = 'user/cp_levels';
// Event Manager View
$config['DX_Acp_level_home_view']   = 'pages/user/cp_level/home';
$config['DX_Acp_level_entry_view']	= 'pages/user/cp_level/entry';
$config['DX_Acp_level_edit_view']	= 'pages/user/cp_level/edit';
//-------------------------------

//Contact Person  configuration
$config['DX_Acontact_person_home_uri']	  = 'user/contact_person/home/';
$config['DX_Acontact_person_entry_uri']	  = 'user/contact_person/add/';
$config['DX_Acontact_person_edit_uri']	  = 'user/contact_person/edit/';
$config['DX_Acontact_person_delete_uri']  = 'user/contact_person/delete/';
// Table name
$config['DX_Acontact_person_table']  	  = 'contact_person';
// user Model URI....
$config['DX_Acontact_person_model']  	  = 'user/contact_persons';
// Event Manager View
$config['DX_Acontact_person_home_view']   = 'pages/user/contact_person/home';
$config['DX_Acontact_person_entry_view']  = 'pages/user/contact_person/entry';
$config['DX_Acontact_person_edit_view']	  = 'pages/user/contact_person/edit';
//-------------------------------

//Service Type  configuration
$config['DX_Aservice_type_home_uri']	  = 'user/service_type/home/';
$config['DX_Aservice_type_entry_uri']	  = 'user/service_type/add/';
$config['DX_Aservice_type_edit_uri']	  = 'user/service_type/edit/';
$config['DX_Aservice_type_delete_uri']    = 'user/service_type/delete/';
// Table name
$config['DX_Aservice_type_table']  	      = 'service_type';
// user Model URI....
$config['DX_Aservice_type_model']  	      = 'user/service_types';
// Event Manager View
$config['DX_Aservice_type_home_view']     = 'pages/user/service_type/home';
$config['DX_Aservice_type_entry_view']    = 'pages/user/service_type/entry';
$config['DX_Aservice_type_edit_view']	  = 'pages/user/service_type/edit';
//-------------------------------

//Service Status  configuration
$config['DX_Aservice_status_home_uri']	  = 'user/service_status/home/';
$config['DX_Aservice_status_entry_uri']	  = 'user/service_status/add/';
$config['DX_Aservice_status_edit_uri']	  = 'user/service_status/edit/';
$config['DX_Aservice_status_delete_uri']  = 'user/service_status/delete/';
// Table name
$config['DX_Aservice_status_table']  	  = 'service_status';
// user Model URI....
$config['DX_Aservice_status_model']  	  = 'user/service_statuss';
// Event Manager View
$config['DX_Aservice_status_home_view']   = 'pages/user/service_status/home';
$config['DX_Aservice_status_entry_view']  = 'pages/user/service_status/entry';
$config['DX_Aservice_status_edit_view']	  = 'pages/user/service_status/edit';
//-------------------------------

//Status Note  configuration
$config['DX_Astatus_note_home_uri']	     = 'user/status_note/home/';
$config['DX_Astatus_note_entry_uri']	 = 'user/status_note/add/';
$config['DX_Astatus_note_edit_uri']	     = 'user/status_note/edit/';
$config['DX_Astatus_note_delete_uri']    = 'user/status_note/delete/';
// Table name
$config['DX_Astatus_note_table']  	     = 'status_note';
// user Model URI....
$config['DX_Astatus_note_model']  	     = 'user/status_notes';
// Event Manager View
$config['DX_Astatus_note_home_view']     = 'pages/user/status_note/home';
$config['DX_Astatus_note_entry_view']    = 'pages/user/status_note/entry';
$config['DX_Astatus_note_edit_view']	 = 'pages/user/status_note/edit';

//Appointment Scheduled  configuration
$config['DX_Aappointment_home_uri']	      = 'user/appointment/home/';
$config['DX_Aappointment_entry_uri']	  = 'user/appointment/add/';
$config['DX_Aappointment_edit_uri']	      = 'user/appointment/edit/';
$config['DX_Aappointment_delete_uri']     = 'user/appointment/delete/';
$config['DX_Aappointment_cancelled_uri']  = 'user/appointment/cancelled/';
$config['DX_Aappointment_scheduled_uri']  = 'user/appointment/scheduled/';
$config['DX_Aappointment_completed_uri']  = 'user/appointment/completed/';
$config['DX_Aappointment_sort_uri']           = 'user/appointment/sortby/';
$config['DX_Aappointment_cancelled_sort_uri'] = 'user/appointment/cancelled_sortby/';
$config['DX_Aappointment_scheduled_sort_uri'] = 'user/appointment/scheduled_sortby/';
$config['DX_Aappointment_completed_sort_uri'] = 'user/appointment/completed_sortby/';

// Table name
$config['DX_Aappointment_table']  	      = 'appointment';
// user Model URI....
$config['DX_Aappointment_model']  	      = 'user/appointments';
// Event Manager View
$config['DX_Aappointment_home_view']      = 'pages/user/appointment/home';
$config['DX_Aappointment_entry_view']     = 'pages/user/appointment/entry';
$config['DX_Aappointment_edit_view']	  = 'pages/user/appointment/edit';
$config['DX_Aappointment_cancelled_view'] = 'pages/user/appointment/cancelled';
$config['DX_Aappointment_scheduled_view'] = 'pages/user/appointment/scheduled';
$config['DX_Aappointment_completed_view'] = 'pages/user/appointment/completed';
//-------------------------------

//User Registration configuration
$config['DX_Auser_home_uri']	 = 'user/user/home/';
$config['DX_Auser_entry_uri']	 = 'user/user/add/';
$config['DX_Auser_edit_uri']	 = 'user/user/edit/';
$config['DX_Auser_delete_uri']	 = 'user/user/delete/';
$config['DX_Auser_sort_uri']	 = 'user/user/sortby/';

// Table name
$config['DX_Auser_table']  	     = 'users';
// user Model URI....
$config['DX_Auser_model']  	     = 'user/users';

// Event Manager View
$config['DX_Auser_home_view']    = 'pages/user/user/home';
$config['DX_Auser_entry_view']	 = 'pages/user/user/entry';
$config['DX_Auser_edit_view']	 = 'pages/user/user/edit';
//-------------------------------

//Clerk availabiliry configuration
$config['DX_Acavailability_home_uri']	 = 'user/cavailability/home/';
$config['DX_Acavailability_entry_uri']	 = 'user/cavailability/add/';
$config['DX_Acavailability_edit_uri']	 = 'user/cavailability/edit/';
$config['DX_Acavailability_delete_uri']	 = 'user/cavailability/delete/';
$config['DX_Acavailability_sort_uri']	 = 'user/cavailability/sortby/';

// Table name
$config['DX_Acavailability_table']  	 = 'clerk_availability';
// user Model URI....
$config['DX_Acavailability_model']  	 = 'user/cavailabilitys';

// Event Manager View
$config['DX_Acavailability_home_view']   = 'pages/user/cavailability/home';
$config['DX_Acavailability_entry_view']	 = 'pages/user/cavailability/entry';
$config['DX_Acavailability_edit_view']	 = 'pages/user/cavailability/edit';
//-------------------------------

//property file configuration
$config['DX_Aproperty_file_home_uri']	 = 'user/property_file/home/';
$config['DX_Aproperty_file_entry_uri']	 = 'user/property_file/add/';
$config['DX_Aproperty_file_edit_uri']	 = 'user/property_file/edit/';
$config['DX_Aproperty_file_delete_uri']	 = 'user/property_file/delete/';
$config['DX_Aproperty_file_sort_uri']	 = 'user/property_file/sortby/';

// Table name
$config['DX_Aproperty_file_table']  	 = 'client_property';
// user Model URI....
$config['DX_Aproperty_file_model']  	 = 'user/property_files';

// Event Manager View
$config['DX_Aproperty_file_home_view']   = 'pages/user/property_file/home';
$config['DX_Aproperty_file_entry_view']	 = 'pages/user/property_file/entry';
$config['DX_Aproperty_file_edit_view']	 = 'pages/user/property_file/edit';
//-------------------------------

//property file configuration
$config['DX_Arequest_service_home_uri']	    = 'user/request_service/home/';
$config['DX_Arequest_service_entry_uri']    = 'user/request_service/add/';
$config['DX_Arequest_service_edit_uri']	    = 'user/request_service/edit/';
$config['DX_Arequest_service_delete_uri']   = 'user/request_service/delete/';
$config['DX_Arequest_service_pending_uri']  = 'user/request_service/pending/';
$config['DX_Arequest_service_scheduled_uri']= 'user/request_service/scheduled/';
$config['DX_Arequest_service_completed_uri']= 'user/request_service/completed/';
$config['DX_Arequest_service_sort_uri']     = 'user/request_service/sortby/';
$config['DX_Arequest_service_pending_sort_uri']   = 'user/request_service/pending_sortby/';
$config['DX_Arequest_service_scheduled_sort_uri'] = 'user/request_service/scheduled_sortby/';
$config['DX_Arequest_service_completed_sort_uri'] = 'user/request_service/completed_sortby/';

// Table name
$config['DX_Arequest_service_table']  	 = 'service';
// user Model URI....
$config['DX_Arequest_service_model']  	 = 'user/request_services';

// Event Manager View
$config['DX_Arequest_service_home_view']      = 'pages/user/request_service/home';
$config['DX_Arequest_service_entry_view']     = 'pages/user/request_service/entry';
$config['DX_Arequest_service_edit_view']      = 'pages/user/request_service/edit';
$config['DX_Arequest_service_pending_view']   = 'pages/user/request_service/pending';
$config['DX_Arequest_service_scheduled_view'] = 'pages/user/request_service/scheduled';
$config['DX_Arequest_service_completed_view'] = 'pages/user/request_service/completed';

//report configuration
$config['DX_Areport_home_uri']	  = 'user/report/home/';
$config['DX_Areport_entry_uri']	  = 'user/report/add/';
$config['DX_Areport_edit_uri']	  = 'user/report/edit/';
$config['DX_Areport_delete_uri']  = 'user/report/delete/';

// Table name
$config['DX_Areport_table']  	  = 'service';
// user Model URI....
$config['DX_Areport_model']  	  = 'user/reports';

// Event Manager View
$config['DX_Areport_home_view']   = 'pages/user/report/home';
$config['DX_Areport_search_view'] = 'pages/user/report/search';
$config['DX_Areport_edit_view']	  = 'pages/user/report/edit';
//-------------------------------

//calendar configuration
$config['DX_Acalendar_home_uri']   = 'user/calendar/home/';
$config['DX_Acalendar_entry_uri']  = 'user/calendar/add/';
$config['DX_Acalendar_edit_uri']   = 'user/calendar/edit/';
$config['DX_Acalendar_delete_uri'] = 'user/calendar/delete/';

// Table name
$config['DX_Acalendar_table']  	   = 'service';
// user Model URI....
$config['DX_Acalendar_model']  	   = 'user/request_services';

// Event Manager View
$config['DX_Acalendar_home_view']   = 'pages/user/calendar/home';
$config['DX_Acalendar_search_view'] = 'pages/user/calendar/search';
$config['DX_Acalendar_edit_view']	= 'pages/user/calendar/edit';
//-------------------------------

?>
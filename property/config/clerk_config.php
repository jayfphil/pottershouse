<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

//Clerk availabiliry configuration
$config['DX_Ccavailability_home_uri']	 = 'clerk/cavailability/home/';
$config['DX_Ccavailability_entry_uri']	 = 'clerk/cavailability/add/';
$config['DX_Ccavailability_edit_uri']	 = 'clerk/cavailability/edit/';
$config['DX_Ccavailability_delete_uri']	 = 'clerk/cavailability/delete/';
$config['DX_Ccavailability_sort_uri']	 = 'clerk/cavailability/sortby/';

// Table name
$config['DX_Ccavailability_table']  	 = 'clerk_availability';
// clerk Model URI....
$config['DX_Ccavailability_model']  	 = 'clerk/cavailabilitys';

// Event Manager View
$config['DX_Ccavailability_home_view']   = 'pages/clerk/cavailability/home';
$config['DX_Ccavailability_entry_view']	 = 'pages/clerk/cavailability/entry';
$config['DX_Ccavailability_edit_view']	 = 'pages/clerk/cavailability/edit';

//property file configuration
$config['DX_Cproperty_file_home_uri']	 = 'clerk/property_file/home/';
$config['DX_Cproperty_file_entry_uri']	 = 'clerk/property_file/add/';
$config['DX_Cproperty_file_edit_uri']	 = 'clerk/property_file/edit/';
$config['DX_Cproperty_file_delete_uri']	 = 'clerk/property_file/delete/';
$config['DX_Cproperty_file_sort_uri']	 = 'clerk/property_file/sortby/';

// Table name
$config['DX_Cproperty_file_table']  	 = 'client_property';
// clerk Model URI....
$config['DX_Cproperty_file_model']  	 = 'clerk/property_files';

// Event Manager View
$config['DX_Cproperty_file_home_view']   = 'pages/clerk/property_file/home';
$config['DX_Cproperty_file_entry_view']	 = 'pages/clerk/property_file/entry';
$config['DX_Cproperty_file_edit_view']	 = 'pages/clerk/property_file/edit';

//report configuration
$config['DX_Creport_home_uri']	  = 'clerk/report/home/';
$config['DX_Creport_entry_uri']	  = 'clerk/report/add/';
$config['DX_Creport_edit_uri']	  = 'clerk/report/edit/';
$config['DX_Creport_delete_uri']  = 'clerk/report/delete/';

// Table name
$config['DX_Creport_table']  	  = 'service';
// clerk Model URI....
$config['DX_Creport_model']  	  = 'clerk/reports';

// Event Manager View
$config['DX_Creport_home_view']   = 'pages/clerk/report/home';
$config['DX_Creport_search_view'] = 'pages/clerk/report/search';
$config['DX_Creport_edit_view']	  = 'pages/clerk/report/edit';

//calendar configuration
$config['DX_Ccalendar_home_uri']   = 'clerk/calendar/home/';
$config['DX_Ccalendar_entry_uri']  = 'clerk/calendar/add/';
$config['DX_Ccalendar_edit_uri']   = 'clerk/calendar/edit/';
$config['DX_Ccalendar_delete_uri'] = 'clerk/calendar/delete/';

// Table name
$config['DX_Ccalendar_table']  	   = 'service';
// clerk Model URI....
$config['DX_Ccalendar_model']  	   = 'clerk/request_services';

// Event Manager View
$config['DX_Ccalendar_home_view']   = 'pages/clerk/calendar/home';
$config['DX_Ccalendar_search_view'] = 'pages/clerk/calendar/search';
$config['DX_Ccalendar_edit_view']	= 'pages/clerk/calendar/edit';
//-------------------------------
//request service configuration
$config['DX_Crequest_service_home_uri']	    = 'clerk/request_service/home/';
$config['DX_Crequest_service_entry_uri']    = 'clerk/request_service/add/';
$config['DX_Crequest_service_edit_uri']	    = 'clerk/request_service/edit/';
$config['DX_Crequest_service_delete_uri']   = 'clerk/request_service/delete/';
$config['DX_Crequest_service_pending_uri']  = 'clerk/request_service/pending/';
$config['DX_Crequest_service_scheduled_uri']= 'clerk/request_service/scheduled/';
$config['DX_Crequest_service_completed_uri']= 'clerk/request_service/completed/';
$config['DX_Crequest_service_sort_uri']     = 'clerk/request_service/sortby/';
$config['DX_Crequest_service_pending_sort_uri']   = 'clerk/request_service/pending_sortby/';
$config['DX_Crequest_service_scheduled_sort_uri'] = 'clerk/request_service/scheduled_sortby/';
$config['DX_Crequest_service_completed_sort_uri'] = 'clerk/request_service/completed_sortby/';

// Table name
$config['DX_Crequest_service_table']  	 = 'service';
// clerk Model URI....
$config['DX_Crequest_service_model']  	 = 'clerk/request_services';

// Event Manager View
$config['DX_Crequest_service_home_view']      = 'pages/clerk/request_service/home';
$config['DX_Crequest_service_entry_view']     = 'pages/clerk/request_service/entry';
$config['DX_Crequest_service_edit_view']      = 'pages/clerk/request_service/edit';
$config['DX_Crequest_service_pending_view']   = 'pages/clerk/request_service/pending';
$config['DX_Crequest_service_scheduled_view'] = 'pages/clerk/request_service/scheduled';
$config['DX_Crequest_service_completed_view'] = 'pages/clerk/request_service/completed';

//-------------------------------
?>
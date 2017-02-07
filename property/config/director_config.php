<?php if(!defined('BASEPATH')) exit('No direct script access allowed');


//User Registration configuration
$config['DX_Duser_home_uri']	 = 'director/user/home/';
$config['DX_Duser_entry_uri']	 = 'director/user/add/';
$config['DX_Duser_edit_uri']	 = 'director/user/edit/';
$config['DX_Duser_delete_uri']	 = 'director/user/delete/';
$config['DX_Duser_sort_uri']	 = 'director/user/sortby/';

// Table name
$config['DX_Duser_table']  	     = 'users';
// director Model URI....
$config['DX_Duser_model']  	     = 'director/users';

// Event Manager View
$config['DX_Duser_home_view']    = 'pages/director/user/home';
$config['DX_Duser_entry_view']	 = 'pages/director/user/entry';
$config['DX_Duser_edit_view']	 = 'pages/director/user/edit';
//-------------------------------

//Clerk availabiliry configuration
$config['DX_Dcavailability_home_uri']	 = 'director/cavailability/home/';
$config['DX_Dcavailability_entry_uri']	 = 'director/cavailability/add/';
$config['DX_Dcavailability_edit_uri']	 = 'director/cavailability/edit/';
$config['DX_Dcavailability_delete_uri']	 = 'director/cavailability/delete/';
$config['DX_Dcavailability_sort_uri']	 = 'director/cavailability/sortby/';

// Table name
$config['DX_Dcavailability_table']  	 = 'clerk_availability';
// director Model URI....
$config['DX_Dcavailability_model']  	 = 'director/cavailabilitys';

// Event Manager View
$config['DX_Dcavailability_home_view']   = 'pages/director/cavailability/home';
$config['DX_Dcavailability_entry_view']	 = 'pages/director/cavailability/entry';
$config['DX_Dcavailability_edit_view']	 = 'pages/director/cavailability/edit';
//-------------------------------
//property file configuration
$config['DX_Dproperty_file_home_uri']	 = 'director/property_file/home/';
$config['DX_Dproperty_file_entry_uri']	 = 'director/property_file/add/';
$config['DX_Dproperty_file_edit_uri']	 = 'director/property_file/edit/';
$config['DX_Dproperty_file_delete_uri']	 = 'director/property_file/delete/';
$config['DX_Dproperty_file_sort_uri']	 = 'director/property_file/sortby/';

// Table name
$config['DX_Dproperty_file_table']  	 = 'client_property';
// director Model URI....
$config['DX_Dproperty_file_model']  	 = 'director/property_files';

// Event Manager View
$config['DX_Dproperty_file_home_view']   = 'pages/director/property_file/home';
$config['DX_Dproperty_file_entry_view']	 = 'pages/director/property_file/entry';
$config['DX_Dproperty_file_edit_view']	 = 'pages/director/property_file/edit';
//-------------------------------

//property file configuration
$config['DX_Drequest_service_home_uri']	    = 'director/request_service/home/';
$config['DX_Drequest_service_entry_uri']    = 'director/request_service/add/';
$config['DX_Drequest_service_edit_uri']	    = 'director/request_service/edit/';
$config['DX_Drequest_service_delete_uri']   = 'director/request_service/delete/';
$config['DX_Drequest_service_pending_uri']  = 'director/request_service/pending/';
$config['DX_Drequest_service_scheduled_uri']= 'director/request_service/scheduled/';
$config['DX_Drequest_service_completed_uri']= 'director/request_service/completed/';
$config['DX_Drequest_service_sort_uri']     = 'director/request_service/sortby/';
$config['DX_Drequest_service_pending_sort_uri']   = 'director/request_service/pending_sortby/';
$config['DX_Drequest_service_scheduled_sort_uri'] = 'director/request_service/scheduled_sortby/';
$config['DX_Drequest_service_completed_sort_uri'] = 'director/request_service/completed_sortby/';

// Table name
$config['DX_Drequest_service_table']  	 = 'service';
// director Model URI....
$config['DX_Drequest_service_model']  	 = 'director/request_services';

// Event Manager View
$config['DX_Drequest_service_home_view']      = 'pages/director/request_service/home';
$config['DX_Drequest_service_entry_view']     = 'pages/director/request_service/entry';
$config['DX_Drequest_service_edit_view']      = 'pages/director/request_service/edit';
$config['DX_Drequest_service_pending_view']   = 'pages/director/request_service/pending';
$config['DX_Drequest_service_scheduled_view'] = 'pages/director/request_service/scheduled';
$config['DX_Drequest_service_completed_view'] = 'pages/director/request_service/completed';

//report configuration
$config['DX_Dreport_home_uri']	  = 'director/report/home/';
$config['DX_Dreport_entry_uri']	  = 'director/report/add/';
$config['DX_Dreport_edit_uri']	  = 'director/report/edit/';
$config['DX_Dreport_delete_uri']  = 'director/report/delete/';

// Table name
$config['DX_Dreport_table']  	  = 'service';
// director Model URI....
$config['DX_Dreport_model']  	  = 'director/reports';

// Event Manager View
$config['DX_Dreport_home_view']   = 'pages/director/report/home';
$config['DX_Dreport_search_view'] = 'pages/director/report/search';
$config['DX_Dreport_edit_view']	  = 'pages/director/report/edit';
//-------------------------------

//calendar configuration
$config['DX_Dcalendar_home_uri']   = 'director/calendar/home/';
$config['DX_Dcalendar_entry_uri']  = 'director/calendar/add/';
$config['DX_Dcalendar_edit_uri']   = 'director/calendar/edit/';
$config['DX_Dcalendar_delete_uri'] = 'director/calendar/delete/';

// Table name
$config['DX_Dcalendar_table']  	   = 'service';
// director Model URI....
$config['DX_Dcalendar_model']  	   = 'director/request_services';

// Event Manager View
$config['DX_Dcalendar_home_view']   = 'pages/director/calendar/home';
$config['DX_Dcalendar_search_view'] = 'pages/director/calendar/search';
$config['DX_Dcalendar_edit_view']	= 'pages/director/calendar/edit';
//-------------------------------

?>
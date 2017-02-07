<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/

//$route['default_controller'] = "home";
$route['default_controller'] = "church_control";
$route['scaffolding_trigger'] = "";

$route['index'] = 'church_control/index';
$route['churchdirectory'] = 'church_control/churchdirectory';
$route['getfilteredChurches'] = 'church_control/getfilteredChurches';
$route['postPrayer_request'] = 'church_control/postPrayer_request';
$route['postContact'] = 'church_control/postContact';
$route['churchdirectory_sub/(:any)'] = 'church_control/churchdirectory_sub/$1';
$route['events'] = 'church_control/events';
$route['announcements'] = 'church_control/announcements';
$route['testimonials'] = 'church_control/testimonials';
$route['prayer_request'] = 'church_control/prayer_request';
$route['staffleadership'] = 'church_control/staffleadership';
$route['whatwebelieve'] = 'church_control/whatwebelieve';
$route['contacts'] = 'church_control/contacts';

$route['page/(:any)'] = "article/page/$1";
$route['info/(:any)'] = "search/results/$1";
$route['cat/(:any)/(:any)'] = "article/subcategory/$2";
$route['cat/(:any)'] = "article/category/$1";
$route['topic/(:any)'] = "article/view/$1";

/* End of file routes.php */
/* Location: ./system/application/config/routes.php */
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the "Database Connection"
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the "default" group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = "default";
$active_record = TRUE;

$db['default']['hostname'] = "localhost"; // mysql6.wsiph2.com
$db['default']['username'] = "root"; // potters_admin
$db['default']['password'] = ""; // p0tt3rs1991
$db['default']['database'] = "potters_db";
$db['default']['dbdriver'] = "mysql";
$db['default']['dbprefix'] = "";
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = "";
$db['default']['char_set'] = "utf8";
$db['default']['dbcollat'] = "utf8_general_ci";

/* End of file database.php */
/* Location: ./system/application/config/database.php */

/* Change Logs As for February 08, 2017 */
// property/view/themes/main.php - Added dynamic retrieve of images on gallery
//								- Added folder "gallery" on images
// 								- Added condition on testimonials, events and announcement if no records to display
// property/view/themes/testimonials.php - Changed No records found warning.
// property/view/themes/churchdirectory.php - Added pagesize of grid to 10.
// property/view/themes/churchdirectory_sub.php - Added google map api
// property/models/testimonial_model.php - Added googleMapLocation field to getLastChurch query.
// property/view/pages/admin/welcome.php - Added pastors and prayer request icon on admin welcome page.
// property/view/pages/admin/churchdir/edit.php - Added google map api field
// property/view/pages/admin/churchdir/entry.php - Added google map api field
// property/controller/admin/churchdir.php - Added google map api field


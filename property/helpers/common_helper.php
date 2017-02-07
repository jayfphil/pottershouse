<?php
function getOptionUser() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionUser();
}

function getOptionAdminUserType() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionAdminUserType();
}

function getOptionDirectorUserType() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionDirectorUserType();
}
function getOptionDirector() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionDirector();
}
function getOptionTime($withTitle = false){
	$ci = &get_instance ();

	$array = array (
        '' => '----- Select -----', 
		'08:00'   =>   '08:00',
		'08:30'   =>   '08:30',
		'09:00'   =>   '09:00',
		'09:30'   =>   '09:30',
		'10:00'   =>   '10:00',
		'10:30'   =>   '10:30',
		'11:00'   =>   '11:00',
		'11:30'   =>   '11:30',
		'12:00'   =>   '12:00',
		'12:30'   =>   '12:30',
		'13:00'   =>   '13:00',
		'13:30'   =>   '13:30',
		'14:00'   =>   '14:00',
		'14:30'   =>   '14:30',
		'15:00'   =>   '15:00',
		'15:30'   =>   '15:30',
		'16:00'   =>   '16:00',
		'16:30'   =>   '16:30',
		'17:00'   =>   '17:00',
		'17:30'   =>   '17:30',
		'18:00'   =>   '18:00',
		'18:30'   =>   '18:30',
		'19:00'   =>   '19:00',
		'19:30'   =>   '19:30',
		'20:00'   =>   '20:00',
		'20:30'   =>   '20:30',
		'21:00'   =>   '21:00',
		'21:30'   =>   '21:30',
		'22:00'   =>   '22:00'
	);
	return $array;
}

function getOptionClerk() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionClerk();
}
function getOptionClient() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionClient();
}

function getOptionDirectorClerk() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionDirectorClerk();
}

function getOptionDirectorClient() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionDirectorClient();
}
function getOptionDirectorCompanyName() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionDirectorCompanyName();
}
function getOptionPropertySize() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionPropertySize();
}
function getOptionPropertySize2() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionPropertySize2();
}
function getOptionServiceType() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionServiceType();
}
function getOptionServiceDuration() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionServiceDuration();
}
function getOptionServiceStatus() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionServiceStatus();
}

function getOptionCompanyName() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionCompanyName();
}

function getCongregationInfo() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listCongregationInfo();
}

function getPastorInfo() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listPastorInfo();
}

function getProvinceInfo() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listProvinceInfo();
}

function getBarangayInfo() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listBarangayInfo();
}

function getCityInfo() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listCityInfo();
}

function getRegionInfo() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listRegionInfo();
}
function getOptionContactPerson() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionContactPerson();
}
function getOptionLevel() {
	$ci = &get_instance();
	$ci->load->model('Common_Tasks');
	return $ci->Common_Tasks->listOptionLevel();
}
/// Provide Insert Status Options
function getOptionsStatus($withTitle = false){
	$ci = &get_instance ();

	$array = array (
		'active'   	=>   'Active',
		'inactive'  =>   'Inactive'
	);
	return $array;
}

/// Provide Insert Status Options
function getOptionsUserType($withTitle = false){
	$ci = &get_instance ();

	$array = array (
	    ''   => '----- Select User Type -----', 
		'7'  =>   'Admin',
		'1'  =>   'User'
	);
	return $array;
}

function get_this_value($tableName = NULL, $field = NULL, $cond = NULL)
{
	if(!empty($tableName) && !empty($tableName) && !empty($tableName))
	{
		$ci	 =  &get_instance();	  
		$ci->load->model('Shows');
		$values = $ci->Shows->getThisValue($tableName, $field, $cond);
		foreach($values as $value):
		endforeach;
		$value = $value->$field;
	}
	else{$value = '';}
	return $value;
}

function getOptionsTimeZone($withTitle = false) // not currently used
{
	$array = array();
	
	$timezoneIdentifiers = DateTimeZone::listIdentifiers();
	
	$array = array_combine($timezoneIdentifiers, $timezoneIdentifiers);
	
	return $array;

}

function getIsItMeStatus($userId){
	$ci = &get_instance();
	
	if($ci->dx_auth->is_logged_in ()){
		$return = ($ci->dx_auth->get_user_id () == $userId) ? 'me' : 'notMe';
	} else{
		$return = 'register';
	}
	
	return $return;
}

function getFriendStatus($userId) {
	$ci = &get_instance ();
	
	if($ci->dx_auth->is_logged_in ()) {
		$ci->load->model('FriendComn');
		
		$return = ($friendStatus = $ci->FriendComn->isFriend ( $userId )) ? $friendStatus : 'notFriend';
	} else{
		$return = 'register';
	}
	
	return $return;
}

function getVisitorStatus($userId) {
	$ci = &get_instance ();
	
	if ($ci->dx_auth->is_logged_in ()) {
		if ($ci->dx_auth->get_role_name () == 'Admin') {
			$return = 'admin';
		} else {
			$ci->load->model ( 'FriendComn' );
			
			if ($ci->FriendComn->isFriend ( $userId ) === 'accepted') {
				$return = 'friend';
			} else {
				$return = 'member';
			}
		}
	} else {
		$return = 'notLoggedIn';
	}
	
	return $return;
}

function limitCharacter($string, $limit, $suffix = ' . . .'){
	$string = strip_tags ($string);
	if(strlen ($string) > $limit){
		$str2 = substr ($suffix, 0, $limit);
		$str2Length = strlen ($str2);
		
		$str1 = substr ($string, 0, ($limit - $str2Length));
		return $str1 . $str2;
	} else {
		return $string;
	}
}

function genrtCacheName($isItMeStatus, $visitorStatus, $name) {
	$ci = &get_instance ();
	
	if ($isItMeStatus == 'me' || $visitorStatus == 'admin') {
		$name = false;
	} elseif ($visitorStatus == 'friend') {
		$name = "{$ci->siteLang['name']}:friend:$name";
	} else {
		$name = "{$ci->siteLang['name']}:all:$name";
	}
	
	return $name;
}

function delUserPageCaches($name) {
	$ci = &get_instance ();
	
	$siteLangArrays = $ci->config->item ( 'siteLanguages' );
	
	$siteLangs = array ();
	foreach ( $siteLangArrays as $siteLangArray ) {
		$siteLangs [] = $siteLangArray ['name'];
	}
	
	$visitors = array ('friend', 'all' );
	
	$cacheNames = array ();
	foreach ( $siteLangs as $siteLang ) {
		foreach ( $visitors as $visitor ) {
			$cacheNames [] = "$siteLang:$visitor:$name";
		}
	}
	
	foreach ( $cacheNames as $cacheName ) {
		if (! $ci->khcache->delete ( $cacheName )) {
			return false;
		}
	}
	
	return true;
}

function delUserAllCaches($id, $byUserId = false) {
	if (delUserProfCaches ( $id, $byUserId ) and delUserFriendCaches ( $id, $byUserId ) and delUserPhotoCaches ( $id, $byUserId )) {
		return true;
	} else {
		return false;
	}
}

function setLangCookie($value) {
	$cookie = array ('name' => 'site_lang', 'value' => $value, 'expire' => '86500' );
	set_cookie ( $cookie );
}

function isAlphaDashSpace($str) {
	return (!preg_match ( "/^([-a-z0-9 _-])+$/i", $str )) ? FALSE : TRUE;
}

function cmpHitCount($a, $b) {
	if ($a ['hitCount'] == $b ['hitCount']) {
		return 0;
	}
	return ($a > $b) ? - 1 : 1;
}
function extractZip($zipFile = '', $dirFromZip = '') {
	define ( DIRECTORY_SEPARATOR, '/' );
	
	$zipDir = getcwd () . DIRECTORY_SEPARATOR;
	$zip = zip_open ( $zipDir . $zipFile );
	
	if ($zip) {
		while ( $zip_entry = zip_read ( $zip ) ) {
			$completePath = $zipDir . dirname ( zip_entry_name ( $zip_entry ) );
			$completeName = $zipDir . zip_entry_name ( $zip_entry );
			
			// Walk through path to create non existing directories
			// This won't apply to empty directories ! They are created further below
			if (! file_exists ( $completePath ) && preg_match ( '#^' . $dirFromZip . '.*#', dirname ( zip_entry_name ( $zip_entry ) ) )) {
				$tmp = '';
				foreach ( explode ( '/', $completePath ) as $k ) {
					$tmp .= $k . '/';
					if (! file_exists ( $tmp )) {
						@mkdir ( $tmp, 0777 );
					}
				}
			}
			
			if (zip_entry_open ( $zip, $zip_entry, "r" )) {
				if (preg_match ( '#^' . $dirFromZip . '.*#', dirname ( zip_entry_name ( $zip_entry ) ) )) {
					if ($fd = @fopen ( $completeName, 'w+' )) {
						fwrite ( $fd, zip_entry_read ( $zip_entry, zip_entry_filesize ( $zip_entry ) ) );
						fclose ( $fd );
					} else {
						// We think this was an empty directory
						mkdir ( $completeName, 0777 );
					}
					zip_entry_close ( $zip_entry );
				}
			}
		}
		zip_close ( $zip );
	}
	return true;
}
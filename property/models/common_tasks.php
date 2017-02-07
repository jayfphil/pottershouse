<?php
class Common_Tasks extends Model 
{
	function Common_Tasks()
	{
		parent::Model();
		$this->_prefix 	= $this->config->item('DX_table_prefix');
	}
	
	// General function	
    function listOptionAdminUserType(){
		$this->db->from($this->_prefix.'roles');
		return $this->db->generateList("id != 7", 'id', 0, NULL, 'id', 'name');		
	}

	// General function	
    function listOptionUser(){
		$this->db->from($this->_prefix.'users');
		return $this->db->generateList(NULL, 'id', 0, NULL, 'id', 'full_name');		
	}
	
	// General function	
    function listOptionLevel(){
		$this->db->from($this->_prefix.'person_level');
		return $this->db->generateList(NULL, 'id', 0, NULL, 'id', 'level_name');		
	}
	// General function	
    function listOptionContactPerson(){
		$this->db->from($this->_prefix.'contact_person');
		return $this->db->generateList(NULL, 'id', 0, NULL, 'id', 'contact_person_name');		
	}
	// General function	
    function listOptionDirectorUserType(){
		$this->db->from($this->_prefix.'roles');
		return $this->db->generateList("id != 7 && id != 5", 'id', 0, NULL, 'id', 'name');		
	}
    function listOptionDirector(){
		$this->db->from($this->_prefix.'users');
		return $this->db->generateList("role_id = 5", 'id', 0, NULL, 'id', 'full_name');		
	}
   function listOptionClerk(){
		$this->db->from($this->_prefix.'users');
		return $this->db->generateList("role_id = 3", 'id', 0, NULL, 'id', 'full_name');		
	}
   function listOptionClient(){
		$this->db->from($this->_prefix.'users');
		return $this->db->generateList("role_id = 1", 'id', 0, NULL, 'id', 'full_name');		
	}
   function listOptionDirectorClerk(){
		$this->db->from($this->_prefix.'users');
		return $this->db->generateList("role_id = 3 && user_id = '$this->userId'", 'id', 0, NULL, 'id', 'full_name');		
	}
   function listOptionDirectorClient(){
		$this->db->from($this->_prefix.'users');
		return $this->db->generateList("role_id = 1 && user_id = '$this->userId'", 'id', 0, NULL, 'id', 'full_name');		
	}
	
	function listOptionDirectorCompanyName(){
		$this->db->from($this->_prefix.'client_company');
		return $this->db->generateList(NULL, 'company_name', 0, NULL, 'company_name', 'company_name');		
	}
	
   function listOptionPropertySize(){
		$this->db->from($this->_prefix.'property_size');
		return $this->db->generateList(NULL, 'id', 0, NULL, 'id', 'size_name');		
	}
	
   function listOptionPropertySize2(){
		$this->db->from($this->_prefix.'property_size');
		return $this->db->generateList(NULL, 'size_name', 0, NULL, 'size_name', 'size_name');		
	}

   function listOptionServiceType(){
		$this->db->from($this->_prefix.'service_type');
		return $this->db->generateList(NULL, 'id', 0, NULL, 'id', 'type_name');		
	}

    function listOptionServiceDuration(){
		$this->db->from($this->_prefix.'service_duration');
		return $this->db->generateList(NULL, 'duration_name', 0, NULL, 'duration_name', 'duration_name');		
	}
    function listOptionServiceStatus(){
		$this->db->from($this->_prefix.'service_status');
		return $this->db->generateList(NULL, 'status_name', 0, NULL, 'status_name', 'status_name');		
	}


	function listOptionCompanyName(){
		$this->db->from($this->_prefix.'client_company');
		return $this->db->generateList(NULL, 'id', 0, NULL, 'id', 'company_name');		
	}
	
	
	function listCountry(){
		$this->db->from($this->_prefix.'overseas_country');
		return $this->db->generateList(NULL, 'oc_country', 0, NULL, 'oc_country', 'oc_country');		
	}
	
	function listUserName(){
		$this->db->from($this->_prefix.$this->config->item('DX_users_table'));
		return $this->db->generateList("role_id = 1", 'username', 0, NULL, 'username', 'username');		
	}
	
	////////////////////////////
	function listOfBranch(){
		$this->db->from($this->_prefix.$this->config->item('DX_branch_table'));
		return $this->db->generateList("branch_code != 'NA'", 'branch_name', 0, NULL, 'branch_code', 'branch_name');		
	}

	function listOfCourseName(){
		$this->db->from($this->_prefix.$this->config->item('DX_course_name_table'));
		return $this->db->generateList(NULL, 'course_name', 0, NULL, 'course_name', 'course_name');		
	}

	function listOfCourseType(){
		$this->db->from($this->_prefix.$this->config->item('DX_course_type_table'));
		return $this->db->generateList(NULL, 'course_type', 0, NULL, 'course_type', 'course_type');		
	}

	function listOfBatchNo(){
		$this->db->from($this->_prefix.$this->config->item('DX_batch_table'));
		return $this->db->generateList("branch_code = '".$this->dx_auth->get_branch_code()."'", 'batch_name', 0, NULL, 'batch_name', 'batch_name');		
	}

	function listOfBatchDay(){
		$this->db->from($this->_prefix.$this->config->item('DX_batch_day_table'));
		return $this->db->generateList(NULL, 'batch_day', 0, NULL, 'batch_day', 'batch_day');		
	}

	function listOfBatchType(){
		$this->db->from($this->_prefix.$this->config->item('DX_batch_type_table'));
		return $this->db->generateList(NULL, 'batch_type', 0, NULL, 'batch_type', 'batch_type');		
	}

	function listOfMtType(){
		$this->db->from($this->_prefix.$this->config->item('DX_mt_type_table'));
		return $this->db->generateList(NULL, 'mt_type', 0, NULL, 'mt_type', 'mt_type');
	}

	function listOfAdType(){
		$this->db->from($this->_prefix.$this->config->item('DX_ad_type_table'));
		return $this->db->generateList(NULL, 'ad_type', 0, NULL, 'ad_type', 'ad_type');
	}

	function listOfNtType(){
		$this->db->from($this->_prefix.$this->config->item('DX_nt_type_table'));
		return $this->db->generateList(NULL, 'nt_type', 0, NULL, 'nt_type', 'nt_type');
	}

	function listOfNeType(){
		$this->db->from($this->_prefix.$this->config->item('DX_ne_type_table'));
		return $this->db->generateList(NULL, 'ne_type', 0, NULL, 'ne_type', 'ne_type');
	}

	function listOfSfType(){
		$this->db->from($this->_prefix.$this->config->item('DX_sf_type_table'));
		return $this->db->generateList(NULL, 'sf_type', 0, NULL, 'sf_type', 'sf_type');
	}

	function listOfAcType(){
		$this->db->from($this->_prefix.$this->config->item('DX_ac_type_table'));
		return $this->db->generateList(NULL, 'ac_type', 0, NULL, 'ac_type', 'ac_type');
	}
	
	function listOfConcernType(){
		$this->db->from($this->_prefix.$this->config->item('DX_concern_type_table'));
		return $this->db->generateList(NULL, 'concern_type', 0, NULL, 'concern_type', 'concern_type');		
	}
	
	function listOfVisaTipsType(){
		$this->db->from($this->_prefix.$this->config->item('DX_visa_tips_type_table'));
		return $this->db->generateList(NULL, 'vt_type', 0, NULL, 'vt_type', 'vt_type');		
	}
	
	function listOfJobType(){
		$this->db->from($this->_prefix.$this->config->item('DX_job_type_table'));
		return $this->db->generateList(NULL, 'job_type', 0, NULL, 'job_type', 'job_type');		
	}
	
	function listSwType(){
		$this->db->from($this->_prefix.$this->config->item('DX_sw_type_table'));
		return $this->db->generateList(NULL, 'sw_type', 0, NULL, 'sw_type', 'sw_type');		
	}
	
	function listOfOccupation(){
		$this->db->from($this->_prefix.$this->config->item('DX_occupation_table'));
		return $this->db->generateList(NULL, 'occupation', 0, NULL, 'occupation', 'occupation');		
	}
	
	function listOfReference(){
		$this->db->from($this->_prefix.$this->config->item('DX_reference_table'));
		return $this->db->generateList(NULL, 'reference', 0, NULL, 'reference', 'reference');		
	}

	function listOfMediaType(){
		$this->db->from($this->_prefix.$this->config->item('DX_sm_type_table'));
		return $this->db->generateList(NULL, 'media_type', 0, NULL, 'media_type', 'media_type');		
	}

	function listOfTestType(){
		$this->db->from($this->_prefix.$this->config->item('DX_test_type_table'));
		return $this->db->generateList(NULL, 'test_type', 0, NULL, 'test_type', 'test_type');		
	}

	function listDepartment(){
		$this->db->from($this->_prefix.$this->config->item('DX_department_table'));
		return $this->db->generateList(NULL, 'department_name', 0, NULL, 'department_name', 'department_name');		
	}

	function listOfTipsType(){
		$this->db->from($this->_prefix.$this->config->item('DX_tips_type_table'));
		return $this->db->generateList(NULL, 'tips_type', 0, NULL, 'tips_type', 'tips_type');		
	}

	function listDivisionName(){
		$this->db->from($this->_prefix.$this->config->item('DX_division_table'));
		return $this->db->generateList(NULL, 'division_name', 0, NULL, 'division_name', 'division_name');		
	}

	function listBookCategory(){
		$this->db->from($this->_prefix.$this->config->item('DX_book_category_table'));
		return $this->db->generateList(NULL, 'book_category', 0, NULL, 'book_category', 'book_category');		
	}
	
	function listCongregationInfo(){
		$result = $this->db->order_by('completeName','ASC')->get($this->_prefix.'congregation')->result();
		return $result;	
	}

	function listPastorInfo(){
		$result = $this->db->order_by('firstName','ASC')->get($this->_prefix.'pastors')->result();
		return $result;	
	}

	function listRegionInfo(){
		$result = $this->db->order_by('regDesc','ASC')->get($this->_prefix.'ph_region')->result();
		return $result;	
	}

	function listBarangayInfo(){
		$result = $this->db->order_by('brgyDesc','ASC')->get($this->_prefix.'ph_brgy')->result();
		return $result;	
	}

	function listProvinceInfo(){
		$result = $this->db->order_by('provDesc','ASC')->get($this->_prefix.'ph_province')->result();
		return $result;	
	}

	function listCityInfo(){
		$result = $this->db->order_by('citymunDesc','ASC')->get($this->_prefix.'ph_citymun')->result();
		return $result;	
	}

}
?>
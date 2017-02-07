<?php
include_once 'BaseController.php';

class Backend extends BaseController {
	// Used for registering and changing password form validation
	var $min_username = 4;
	var $max_username = 20;
	var $min_password = 4;
	var $max_password = 20;

	function Backend()
	{
		parent::__construct ();
		$this->dx_auth->check_uri_permissions();
		
		if ($this->dx_auth->is_logged_in ()) {
			if ($this->dx_auth->get_role_name () != 'Admin') {
				$this->session->set_flashdata ( 'status_message', "You Have no permission to go there" );
				redirect ( '' );
			}
		} else {
			$this->session->set_flashdata ( 'status_message', "You have to login first" );
			$this->session->set_userdata ( array ('backToUrl' => uri_string () ) );
			redirect ( '' );
		       }
	}
	
	function index()
	{
		$this->data['activeTab'] 	=  'backend_home';
		$this->data['windowTitle'] 	= $this->siteTitle.'Admin Panel Home';
		$this->data['pageTitle'] 	= 'Admin Panel Home';
		$this->data['dynamicView'] 	= 'pages/admin/welcome';
		$this->_commonPageLayout('backend_viewer');
	}
	/* Callback function */

	function username_check($username){
		$result = $this->dx_auth->is_username_available($username);
		if(!$result)
		{
		$this->form_validation->set_message('username_check', 'Username already exist. Please choose another username.');
		}
    	return $result;
	}
	
	function email_check($email)
	{
	 $result = $this->dx_auth->is_email_available($email);
		if(!$result){
			$this->form_validation->set_message('email_check', 'Email is already used by another user. Please choose another email address.');
		}
		return $result;
	}

	function logout()
	{
		$this->dx_auth->logout();
		$this->data['activeTab'] 	= 'logout';		
		$this->data['admin_message'] = "You Have Been Logged Out.";	
		$this->data['windowTitle'] 	= $this->siteTitle.'User Logout Confirmation';
		$this->data['dynamicView'] 	= 'frontend/general_message';
        redirect('home');
		$this->_commonPageLayout('frontend_viewer');
	}
	
	
	function change_password()
	{
		$this->data['activeTab'] 	= 'configuration';
		// Check if user logged in or not
		if($this->dx_auth->is_logged_in())
		{			
			$val = $this->form_validation;
			$this->data['windowTitle'] = $this->siteTitle.'Change User Password';
			
			// Set form validation
			$val->set_rules('old_password', 'Old Password', 'trim|required|xss_clean|min_length['.$this->min_password.']|max_length['.$this->max_password.']');
			$val->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length['.$this->min_password.']|max_length['.$this->max_password.']|matches[confirm_new_password]');
			$val->set_rules('confirm_new_password', 'Confirm New Password', 'trim|required|xss_clean');
			
			// Validate rules and change password
			if(isset($_POST))
			{
				if($val->run() AND $this->dx_auth->change_password($val->set_value('old_password'), $val->set_value('new_password')))
				{
					$this->data['admin_message'] = 'Password Changed Successfully !!!';
					//$this->data['dynamicView'] 	 = $this->dx_auth->admin_notifier;
				}
			}
			$this->data['dynamicView'] 	= 'pages/admin/change_password';
			$this->_commonPageLayout('backend_viewer');
		}
		else
		{
			// Redirect to login page
			$this->dx_auth->deny_access('login');
		}
	}	
		
   public function profile()
    {
              // Load view
        $this->data['activeTab']        = 'profile';
        $this->data['windowTitle'] 	    = $this->siteTitle.'User Profile Info Edit';      
        $this->data['OptionsGender']    = getOptionsGender();
        $this->data['OptionsReligion']  = getOptionsReligion();

        // Load Model
        $this->load->model('admin/user_profile', 'uProfiles');  
		$this->data['userProfiles']  = $this->uProfiles->get_profile($this->userId);
		$this->data['dynamicView'] 	 = 'pages/admin/user-profile';
        
       
       // Run form validation and check whether post var is empty or not
        if(count($_POST))
        {
            $val = $this->form_validation;

            $val->set_rules('father_name', 'Father Name', 'trim|xss_clean');
            $val->set_rules('mother_name', 'Mother Name', 'trim|xss_clean');
            $val->set_rules('date_of_birth', 'Date of Birth', 'trim|xss_clean');
            $val->set_rules('gender', 'Gender', 'trim|xss_clean');
            $val->set_rules('religion', 'Religion', 'trim|xss_clean');
            $val->set_rules('blood_group', 'Blood Group', 'trim|xss_clean');
            $val->set_rules('pre_address', 'Present Address', 'trim|xss_clean');
            $val->set_rules('per_address', 'Permanent Address', 'trim|xss_clean');
            $val->set_rules('current_location', 'Current Location', 'trim|xss_clean');
            $val->set_rules('mobile', 'Contact Number', 'trim|xss_clean');

            if($val->run())
            {
						$profileData = array(
		                    'user_id'         =>     $this->input->post('user_id'),
		                    'father_name'     =>     $this->input->post('father_name'),
		                    'mother_name'     =>     $this->input->post('mother_name'),
		                    'date_of_birth'   =>     $this->input->post('date_of_birth'),
		                    'gender'          =>     $this->input->post('gender'),
		                    'religion'        =>     $this->input->post('religion'),
		                    'blood_group'     =>     $this->input->post('blood_group'),
		                    'pre_address'     =>     $this->input->post('pre_address'),
		                    'per_address'     =>     $this->input->post('per_address'),
		                    'current_location'=>     $this->input->post('current_location'),
		                    'mobile'          =>     $this->input->post('mobile')
						);
						
					 if($_FILES['photo']['size']>0)
						{
							if($this->now_upload())
							{
								$fileData = array(
									'photo'	 => 	$this->upload_data['file_name']
								);
							   $profileData = array_merge($profileData, $fileData);
							 }
						 }

                $this->data['userProfiles']   = $this->uProfiles->set_profile($profileData['user_id'], $profileData);
                $this->data['admin_message']  = "Profile Updated successfully! !!";
                $this->data['userProfiles']   = $this->uProfiles->get_profile($profileData['user_id']);
                $this->data['dynamicView']    = 'pages/admin/user-profile';  
              
             }
          $this->data['windowTitle']   = $this->siteTitle.' Profile Information Viewer';    
        }
        // Load view
       $this->_commonPageLayout('backend_viewer');     
    }
   
   protected function now_upload()
	{
		$setConfig['upload_path'] 		= './public/photos/user/';
		$setConfig['allowed_types'] 	= 'GIF|JPG|PNG|JPEG|gif|jpg|png|jpeg';
		$setConfig['encrypt_name']  	=  TRUE;
		$setConfig['max_size']			= '450';
		$setConfig['max_width']  		= '300';
		$setConfig['max_height']  		= '300';		
		
		$this->load->library('upload', $setConfig);
	
		if(!$this->upload->do_upload('photo'))
		{
			$this->data['admin_message'] = $this->upload->display_errors("<p style='color:#FF0000; font-weight:bold;'>", "</p>");
			return FALSE;
		}	
		else
		{
			$this->upload_data = $this->upload->data();
			return TRUE;
		}
	}	    
   
	public function show_profile()
    {
              // Load view
        $this->data['activeTab']      = 'profile';
        $this->data['windowTitle'] 	  = $this->siteTitle.'Show Profile Information';      
   		
        // Load Model
        $this->load->model('admin/user_profile', 'uProfiles');        
        $this->data['userProfiles']  = $this->uProfiles->get_profile($this->userId);		
		$this->data['dynamicView'] 	 = 'pages/admin/show-profile';
    	$this->_commonPageLayout('backend_viewer');
	}	

	protected function _commonPageLayout($viewName, $cacheIt = FALSE){

		$view = $this->layout->view($viewName, $this->data, TRUE);

		$replaces = array( 
						   '{BACKEND_TOP_HEADER}' 	  => $this->load->view('backend/site_top_header', $this->data, TRUE), 
						   '{BACKEND_TOP_MENU}' 	  => $this->load->view('backend/site_top_admin_menu',  NULL, TRUE), 
						   '{BACKEND_MIDDLE_CONTENT}' => $this->load->view($this->data['dynamicView'],  NULL, TRUE), 
						   '{BACKEND_FOOTER}' 		  => $this->load->view('backend/site_footer', NULL, TRUE)
						 );
						  
		$this->load->view('view', array('view' => $view, 'replaces' => $replaces));
	}	
}
?>
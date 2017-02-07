<?php
include_once 'BaseController.php';

class User extends BaseController
{
	// Used for registering and changing password form validation
	var $min_password = 4;
	
   function User()
	{
		parent::__construct ();
		$this->dx_auth->check_uri_permissions();
		$this->load->library('Aadmin');
		
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
	
	public function index()
	{
		$this->home();
	}
	
	/* Callback function */

	
	function email_check($email)
	{
	 $result = $this->dx_auth->is_email_available($email);
		if(!$result){
			$this->form_validation->set_message('email_check', 'Email is already used by another user..');
		}
		return $result;
	}

	public function home()
	{
		$this->data['activeTab'] 	=  'user';
		// Load Model
		$this->load->model($this->aadmin->Auser_model_uri, 'US');
		// Search checkbox in post array
		foreach($_POST as $key => $value)
		{
			// If checkbox found
			if(substr($key, 0, 9) == 'checkbox_')
			{
				// If ban button pressed
				if(isset($_POST['ban']))
				{
					// Ban user based on checkbox value (id)
					$this->US->ban_user($value);
				}
				// If unban button pressed
				elseif(isset($_POST['unban']))
				{
					// Unban user
					$this->US->unban_user($value);
				}
				// If unban button pressed
				elseif(isset($_POST['deleted']))
				{
					// Unban user
					$this->US->delete_user($value);
				}
			}				
		}
		
		$offset = (int) $this->uri->segment(4);
		// Number of record showing per page
		$row_count = $this->config->item('DX_per_page');
		
		// Get all users
		$this->data['users'] = $this->US->get_all($offset, $row_count)->result();
		
		// Pagination config
		$this->p_config['base_url']    .= $this->aadmin->Auser_home_uri;
		$this->p_config['uri_segment'] 	= 4;
		$this->p_config['num_links'] 	= 2;
		$this->p_config['total_rows'] 	= $this->US->get_all()->num_rows();
		$this->p_config['per_page'] 	= $row_count;
				
		// Init pagination
		$this->pagination->initialize($this->p_config);		
		// Create pagination links
		$this->data['pagination'] 	= $this->pagination->create_links();
				
		// Load view
		$this->data['windowTitle'] 	= $this->siteTitle.'Manage All Users';
		$this->data['dynamicView'] 	= $this->aadmin->Auser_home_view;
		$this->_commonPageLayout('backend_viewer');
		
	}
	
	public function sortby($contentId = NULL)
	{
		$this->data['activeTab'] 	=  'user';
		// Load Model
		$this->load->model($this->aadmin->Auser_model_uri, 'US');
		// Search checkbox in post array
		foreach($_POST as $key => $value)
		{
			// If checkbox found
			if(substr($key, 0, 9) == 'checkbox_')
			{
				// If ban button pressed
				if(isset($_POST['ban']))
				{
					// Ban user based on checkbox value (id)
					$this->US->ban_user($value);
				}
				// If unban button pressed
				elseif(isset($_POST['unban']))
				{
					// Unban user
					$this->US->unban_user($value);
				}
				// If unban button pressed
				elseif(isset($_POST['deleted']))
				{
					// Unban user
					$this->US->delete_user($value);
				}
			}				
		}
		
		$offset = (int) $this->uri->segment(5);
		// Number of record showing per page
		$row_count = $this->config->item('DX_per_page');
		
		$order = "";
		if($contentId == 'title'): $order = "name_title ASC";
		elseif($contentId == 'fname'): $order = "first_name ASC";
		elseif($contentId == 'lname'): $order = "last_name ASC";
		elseif($contentId == 'email'): $order = "email ASC";
		elseif($contentId == 'utype'): $order = "role_name ASC";
		elseif($contentId == 'company'): $order = "company_name ASC";
		elseif($contentId == 'banned'): $order = "banned ASC";
		elseif($contentId == 'ealert'): $order = "email_alert ASC";
		elseif($contentId == 'llogin'): $order = "last_login ASC";
		elseif($contentId == 'created'): $order = "created ASC";
		endif;
		// Get all users
		$this->data['users'] = $this->US->get_all($offset, $row_count, '', $order)->result();
		
		// Pagination config
		$this->p_config['base_url']    .= $this->aadmin->Auser_sort_uri.$contentId.'/';
		$this->p_config['uri_segment'] 	= 5;
		$this->p_config['num_links'] 	= 3;
		$this->p_config['total_rows'] 	= $this->US->get_all()->num_rows();
		$this->p_config['per_page'] 	= $row_count;
				
		// Init pagination
		$this->pagination->initialize($this->p_config);		
		// Create pagination links
		$this->data['pagination'] 	= $this->pagination->create_links();
				
		// Load view
		$this->data['windowTitle'] 	= $this->siteTitle.'Manage All Users';
		$this->data['dynamicView'] 	= $this->aadmin->Auser_home_view;
		$this->_commonPageLayout('backend_viewer');
		
	}

	public function registration()
	{
	
		$this->data['activeTab'] 	         =  'user';
		$this->data['OptionsUserType'] 	     =  getOptionsUserType();
		// Load view
		$this->data['windowTitle'] 	= $this->siteTitle.'User Registration';
		$this->data['dynamicView'] 	= $this->aadmin->Auser_entry_view;

		if(count($_POST))
		{
			$val = $this->form_validation;
			$val->set_rules('name_title', 'Title', 'trim|required|xss_clean');
			$val->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
			$val->set_rules('user_type', 'User Type', 'trim|required|xss_clean');
			$val->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
			$val->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email|callback_email_check');
			$val->set_rules('password', 'Password', 'trim|required|xss_clean|min_length['.$this->min_password.']|matches[confirm_password]');
			$val->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean');

			// Run form validation and register user if it's pass the validation
			if($val->run())
			{	
				$this->dx_auth->register($val->set_value('user_type'), $val->set_value('name_title'), $val->set_value('first_name'), $val->set_value('last_name'), $val->set_value('password'), $val->set_value('email'), $this->userId);
				$this->data['admin_message'] = "User Registration Completed Successfully !!.";
				$this->data['dynamicView']   = $this->aadmin->Auser_entry_view;
			}
		   else{
		  		$this->data['windowTitle'] 	= $this->siteTitle.'User Registration';
		        $this->data['dynamicView'] 	= $this->aadmin->Auser_entry_view;
		     }
          }
		$this->_commonPageLayout('view');

	}
	
	public function edit($contentId = NULL)
	{	
		$this->data['activeTab'] 	         =  'user';
		$this->data['OptionsUserType'] 	     =  getOptionsUserType();
		// Load Model
		$this->load->model($this->aadmin->Auser_model_uri, 'Users');
		$this->load->model('admin/name_titles', 'nameTitles');

		// Load view
		$this->data['windowTitle'] 	= $this->siteTitle.'Modify User Registration';
		$this->data['users']    	= $this->Shows->getThisValue("id = '$contentId'", 'users');
		$this->data['dynamicView'] 	= $this->aadmin->Auser_edit_view;
		

		if(count($_POST))
		{
			$val = $this->form_validation;
			$val->set_rules('name_title', 'Title', 'trim|required|xss_clean');
			$val->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
			$val->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
			$val->set_rules('user_type', 'User Type', 'trim|required|xss_clean');
			$val->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
			$val->set_rules('password', 'Password', 'trim|required|xss_clean|min_length['.$this->min_password.']|matches[confirm_password]');
			$val->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean');

			if($val->run())
			{
			    $id           =	$this->input->post('id');
			    $name_title   = $this->input->post('name_title');
                
				$password     = $this->input->post('password');
				$passwds = $this->Shows->getThisValue("id = '$id'",'users');
				foreach($passwds as $passwd): $password_old = $passwd->password; endforeach;
				if($password == $password_old): $password2 = $password; else: $password2 = crypt($this->dx_auth->_encode($password)); endif;
				
				$vUserData = array(
					'id'                  => 	$this->input->post('id'),
					'name_title'          => 	$name_title,
					'first_name'          => 	$this->input->post('first_name'),
					'last_name'           => 	$this->input->post('last_name'),
					'full_name'           => 	$this->input->post('first_name').' '.$this->input->post('last_name'),	
					'email'               => 	$this->input->post('email'),
					'role_id'             => 	$this->input->post('user_type'),
					'password'            => 	$password2,
					'user_id'             =>    $this->userId
			 		);
						
					$nTitle = $this->nameTitles->getNameInfo($name_title);
					  
					  if(empty($nTitle)):
						$nData = array('name_title' => $name_title);
						$this->nameTitles->saveNameInfo($nData);
					  endif;

                	if(!empty($vUserData['id'])){
							$this->Users->set_user($vUserData['id'], $vUserData);
							$this->data['windowTitle'] 	 = $this->siteTitle.'Modify User Registration';
							$this->data['admin_message'] = 'User Registration Modified Successfully'; 
		                    $this->data['users']    	 = $this->Shows->getThisValue("id = '$contentId'", 'users');
		                    $this->data['dynamicView'] 	 = $this->aadmin->Auser_edit_view;
						}
						
						else{return false;}				
			}
		}		
		// Load view
		$this->_commonPageLayout('backend_viewer');

	}
  

	public function delete($contentId = NULL)
	{
		$this->load->model($this->aadmin->Auser_model_uri, 'Product_G');
		$this->data['products']  = $this->Product_G->deleteProduct_Info($contentId);
        redirect('superadmin/product');
		$this->_commonPageLayout('backend_viewer');
	}
	
	public function show($contentId = NULL)
	{
		$this->data['activeTab'] 	=  'product';
		$this->data['windowTitle'] 	= $this->siteTitle.'Product Info';
		$this->load->model($this->aadmin->Auser_model_uri, 'Product_G');
		$this->data['products']     = $this->Product_G->showProduct_Info($contentId);
		$this->data['dynamicView'] 	= $this->aadmin->Auser_show_view;
		$this->_commonPageLayout('backend_viewer');
		}

	protected function _commonPageLayout($viewName, $cacheIt = FALSE)
	{
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
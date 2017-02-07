<?php
include_once 'BaseController.php';

class Events extends BaseController
{
   function Events()
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
	
	public function home()
	{

		$this->data['activeTab'] 	=  'events';
		// Load Model
		$this->load->model($this->aadmin->Events_model_uri, 'B_I');
		
		// Search checkbox in post array
		foreach($_POST as $key => $value)
		{
			// If checkbox found
			if(substr($key, 0, 9) == 'checkbox_')
			{
				// If Unactivate button pressed
				if(isset($_POST['deleted']))
				{
                              // Unactivate Content based on checkbox value (id)
		             $this->B_I->deleteAppointmentInfo($value);
				}
			}				
		}
	
		// Get offset and limit for page viewing
		$start = (int) $this->uri->segment(4);
               
		// Number of record showing per page
		$perPage = $this->config->item('DX_per_page');	
		// Get all users
		$this->data['appointmentValues'] = $this->B_I->get_all($start, $perPage)->result();
		
		// Pagination config
		$this->p_config['base_url']    .= $this->aadmin->Events_home_uri;
		$this->p_config['uri_segment'] 	= 4;
		$this->p_config['num_links'] 	= 2;
		$this->p_config['total_rows'] 	= $this->B_I->get_all()->num_rows();
		$this->p_config['per_page'] 	= $perPage;

		
		// Init pagination
		$this->pagination->initialize($this->p_config);	
		// Create pagination links
		$this->data['pagination'] = $this->pagination->create_links();
		// Load view

		$this->data['windowTitle'] 	= $this->siteTitle.'Events List';

		$this->data['dynamicView'] 	= $this->aadmin->Events_home_view;
		$this->_commonPageLayout('view');

	}


	public function add()
	{
		$this->data['activeTab'] 	     	 =  'events';
		
		$this->data['OptionTime'] 	         =  getOptionTime();
		
 
		// Load Model
		$this->load->model($this->aadmin->Events_model_uri, 'B_I');
		$this->data['companyValues'] = array(); 
		// Load view
		$this->data['windowTitle'] 	= 'Create Events Meetings Conferences';
		$this->data['dynamicView'] 	= $this->aadmin->Events_entry_view;
		if(count($_POST))
		{
				$company_id      =  $this->input->post('company_id');							
				$company_name    =  $this->input->post('company_name');
				
		  if(empty($company_name) && !empty($company_id)):
				$this->data['windowTitle'] 	 = 'Create Events Meetings Conferences';
				$this->data['companyValues'] = $this->Shows->getThisValue("id = '$company_id'", 'client_company');
				$this->data['dynamicView'] 	 = $this->aadmin->Events_entry_view;
		  else: 
                    
			$val = $this->form_validation;
		    $val->set_rules('title', 'Event Title', 'trim|required|xss_clean');
			$val->set_rules('body', 'Event Description', 'trim|required');
			$val->set_rules('date', 'Event Date', 'trim|required|xss_clean');
			$val->set_rules('time', 'Event Time', 'trim|required|xss_clean');
			$val->set_rules('link', 'Event URL', 'trim|xss_clean');
			$val->set_rules('status', 'Status', 'trim|required|xss_clean');
			$val->set_rules('event_attachement', 'Expiration Date', 'trim|xss_clean');


			if($val->run())
			{
				$date      =  date("Y-m-d", strtotime($this->input->post('date')));
				$expiration_date      =  date("Y-m-d", strtotime($this->input->post('expiration_date')));
				

				$appointmentData = array(
					'date'      =>  $date,
					'time'      =>  $this->input->post('time'),
					'title'      =>  $this->input->post('title'),
					'body'      =>  $this->input->post('body'),
					'link'      =>  $this->input->post('link'),
					'approvalStatus'             =>  $this->input->post('status'),
					'attachedment'             =>  $this->input->post('event_attachement'),
					'expiration'             =>  $expiration_date
                    //'created'    =>  date("Y-m-d H:i:s") 
				);
				
				if($_FILES['userfile']['name'] !=""){
					$config['upload_path'] = "./public/photos/events/";
						
					$config['allowed_types'] = 'jpg|png|gif|jpeg';
					
					$config['max_size'] = '10072';
					
					$config['file_name'] = $_FILES['userfile']['name'];
					
					$this->load->library('upload', $config);
					
					if(!$this->upload->do_upload()){
					
						$error = array('error'=>$this->upload->display_errors());
						
						if($error !="")
						{
							
							$this->data['windowTitle'] 	 = 'Create Events Meetings Conferences';
							$this->data['admin_message'] = 'Image does not uploaded.'; 
							$this->data['dynamicView'] 	 = $this->aadmin->Events_entry_view;
						}
					}else{
						
						$file_data = $this->upload->data();
							
						$photo_name = $file_data['file_name'];
						
						$fileData = array(
								'image' => $photo_name
							);
						$appointmentData = array_merge($appointmentData, $fileData);
						
					}
				} else {
					$fileData = array(
								'image' => "default.png"
							);
					$appointmentData = array_merge($appointmentData, $fileData);
				}
				
				
					
					if($this->B_I->saveAppointmentInfo($appointmentData)){
						$this->data['windowTitle'] 	 = 'Create Events Meetings Conferences';
						$this->data['admin_message'] = 'Event information has been saved successfully! !!'; 
						$this->data['dynamicView'] 	 = $this->aadmin->Events_entry_view;	
					}else{return false;}
				                  
				}
               endif;
		      }
		
		// Load view
		$this->_commonPageLayout('view');
	}


	public function edit($contentId = NULL)

	{
		$this->data['activeTab'] 	     =  'events';
		
		$this->data['OptionTime'] 	         =  getOptionTime();
		     
 
		 // Load Model
		$this->load->model($this->aadmin->Events_model_uri, 'B_I');
		$this->data['appointmentValues'] = $this->B_I->getAppointmentInfo($contentId);
		$this->data['windowTitle'] 	     = $this->siteTitle.'Update Events Information';
		$this->data['dynamicView'] 	     = $this->aadmin->Events_edit_view;
		
		if(count($_POST))
		{

			$val = $this->form_validation;
		    $val->set_rules('title', 'Event Title', 'trim|required|xss_clean');
			$val->set_rules('body', 'Event Description', 'trim|required');
			$val->set_rules('date', 'Event Date', 'trim|required|xss_clean');
			$val->set_rules('time', 'Event Time', 'trim|required|xss_clean');
			$val->set_rules('link', 'Event URL', 'trim|xss_clean');
			$val->set_rules('status', 'Status', 'trim|required|xss_clean');
			$val->set_rules('event_attachement', 'Expiration Date', 'trim|xss_clean');


			if($val->run())
			{
				$id = $this->input->post('id');
				$details = $this->B_I->getAppointmentInfo($id);
				
				$date      			=  date("Y-m-d", strtotime($this->input->post('date')));
				$expiration_date      =  date("Y-m-d", strtotime($this->input->post('expiration_date')));
				

				$appointmentData = array(
					'date'      =>  $date,
					'time'      =>  $this->input->post('time'),
					'title'      =>  $this->input->post('title'),
					'body'      =>  $this->input->post('body'),
					'link'      =>  $this->input->post('link'),
					'approvalStatus'             =>  $this->input->post('status'),
					'attachedment'             =>  $this->input->post('event_attachement'),
					'expiration'             =>  $expiration_date
                    //'created'    =>  date("Y-m-d H:i:s") 
				);
				
				if($_FILES['userfile']['name'] !=""){
					
					@unlink("./public/photos/events/".$details->image);
					
					$config['upload_path'] = "./public/photos/events/";
						
					$config['allowed_types'] = 'jpg|png|gif|jpeg';
					
					$config['max_size'] = '10072';
					
					$config['file_name'] = $_FILES['userfile']['name'];
					
					$this->load->library('upload', $config);
					
					if(!$this->upload->do_upload()){
					
						$error = array('error'=>$this->upload->display_errors());
						
						if($error !="")
						{
							
							$this->data['windowTitle'] 	 = 'Update Events Information';
							$this->data['admin_message'] = 'Image does not uploaded.'; 
							$this->data['dynamicView'] 	 = $this->aadmin->Events_entry_view;
						}
					}else{
						
						$file_data = $this->upload->data();
							
						$photo_name = $file_data['file_name'];
						
						$fileData = array(
								'image' => $photo_name
							);
						$appointmentData = array_merge($appointmentData, $fileData);
						
					}
				}
                               
				if(!empty($id)){
						if($this->B_I->modifyAppointmentInfo($appointmentData, $id)){
							$this->data['windowTitle'] 	     = 'Update Events Information';
							$this->data['admin_message']     = 'Events Information has been modified successfully! !!'; //$this->lang->text('JN_COMMON_TEXT_MODIFIED');
							$this->data['appointmentValues'] = $this->B_I->getAppointmentInfo($id);
							$this->data['dynamicView'] 	     = $this->aadmin->Events_edit_view;
						}else{return false;}

					}
				
			}

		}	
		// Load view
		$this->_commonPageLayout('view');

	}
	
	
protected function _commonPageLayout($viewName, $cacheIt = FALSE)
	{
		$view = $this->layout->view($viewName, $this->data, TRUE);
		$replaces = array( 
						   '{BACKEND_TOP_HEADER}'     => $this->load->view('backend/site_top_header', $this->data, TRUE), 
						   '{BACKEND_TOP_MENU}'       => $this->load->view('backend/site_top_admin_menu',  NULL, TRUE), 
						   '{BACKEND_MIDDLE_CONTENT}' => $this->load->view($this->data['dynamicView'],  NULL, TRUE), 
						   '{BACKEND_FOOTER}' 	      => $this->load->view('backend/site_footer', NULL, TRUE)
						 );					  

		$this->load->view('view', array('view' => $view, 'replaces' => $replaces));
	}	

}

?>
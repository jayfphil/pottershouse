<?php
include_once 'BaseController.php';

class Testimonials extends BaseController
{
   function Testimonials()
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

		$this->data['activeTab'] 	=  'testimonials';
		// Load Model
		$this->load->model($this->aadmin->Testimonials_model_uri, 'B_I');
		
		// Search checkbox in post array
		foreach($_POST as $key => $value)
		{
			// If checkbox found
			if(substr($key, 0, 9) == 'checkbox_')
			{
				// If Unactivate button pressed
				if(isset($_POST['delete_all']))
				{
					// Unactivate Content based on checkbox value (id)
		             $this->B_I->deleteTestimonialsInfo($value);
				}
			}				
		}
	
		// Get offset and limit for page viewing
		$start = (int) $this->uri->segment(4);
        $cond = "";
		// Number of record showing per page
		$perPage = $this->config->item('DX_per_page');	
		// Get all users
		$this->data['testimonialsValue'] = $this->B_I->get_all($start, $perPage, $cond)->result();
		
		// Pagination config
		$this->p_config['base_url']    .= $this->aadmin->Testimonials_home_uri;
		$this->p_config['uri_segment'] 	= 4;
		$this->p_config['num_links'] 	= 2;
		$this->p_config['total_rows'] 	= $this->B_I->get_all(0, 0, $cond)->num_rows();
		$this->p_config['per_page'] 	= $perPage;

		
		// Init pagination
		$this->pagination->initialize($this->p_config);	
		// Create pagination links
		$this->data['pagination'] = $this->pagination->create_links();
		// Load view

		$this->data['windowTitle'] 	= $this->siteTitle.'Testimonials List';

		$this->data['dynamicView'] 	= $this->aadmin->Testimonials_home_view;
		$this->_commonPageLayout('view');

	}


	public function add()
	{
		$this->data['activeTab'] 		   =  'testimonials';
		$this->data['StudentInfo'] 		   =  getCongregationInfo();
		$this->data['TeacherInfo'] 		   =  getPastorInfo();
		// Load Model
		$this->load->model($this->aadmin->Testimonials_model_uri, 'B_I');

		// Load view
		$this->data['windowTitle'] 	= 'Create Testimonials';
		$this->data['dynamicView'] 	= $this->aadmin->Testimonials_entry_view;
		
		if(count($_POST))
		{
			$val = $this->form_validation;
			$val->set_rules('title', 'Testimonials Title', 'trim|required|xss_clean');
			$val->set_rules('test_date', 'Testimonials Date', 'trim|required|xss_clean');
			$val->set_rules('congregation_name', 'Congregation Name', 'trim|required|xss_clean');
			$val->set_rules('teacher_id', 'Pastor Name', 'trim|required|xss_clean');
			$val->set_rules('description', 'Description', 'trim|required|xss_clean');
			$val->set_rules('status', 'Approval Status', 'trim|required|xss_clean');
			

			if($val->run())
			{
			

				$testimonialsData = array(
				    'date'     =>  date("Y-m-d",strtotime($this->input->post('test_date'))),
					'congregationName'        =>  $this->input->post('congregation_name'),
					'pastorID'        =>  $this->input->post('teacher_id'),
					'title'    =>  $this->input->post('title'),
					'videolinked'    =>  $this->input->post('videolinked'),
					'body'     =>  $this->input->post('description'),
				    'createdBy' =>  $this->userId,
					'approvalStatus'   =>  $this->input->post('status'),
				);
				
				if($_FILES['userfile']['name'] !=""){
					$config['upload_path'] = "./public/photos/testimonials/";
						
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
							$this->data['dynamicView'] 	 = $this->aadmin->Testimonials_entry_view;
						}
					}else{
						
						$file_data = $this->upload->data();
							
						$photo_name = $file_data['file_name'];
						
						$fileData = array(
								'image' => $photo_name
							);
						$testimonialsData = array_merge($testimonialsData, $fileData);
						
					}
				} else {
					$fileData = array(
								'image' => "default.png"
							);
					$testimonialsData = array_merge($testimonialsData, $fileData);
				}
						
					
						if($this->B_I->saveTestmonialsInfo($testimonialsData)){
							$this->data['windowTitle'] 	 	= 'Create Testimonials';
							$this->data['admin_message'] 	= 'Testmonials has been created successfully! !!'.nbs(5).anchor($this->aadmin->Testimonials_entry_uri, 'Add New'); 
							$this->data['dynamicView'] 	 	= $this->aadmin->Testimonials_entry_view;	
						}else{return false;}
					 
				}	
		      }
		
		// Load view
		$this->_commonPageLayout('view');
	}
	
	public function edit($contentId = NULL)

	{
		$this->data['activeTab'] 		   =  'testimonials';
		$this->data['StudentInfo'] 		   =  getCongregationInfo();
		$this->data['TeacherInfo'] 		   =  getPastorInfo();
		// Load Model
		$this->load->model($this->aadmin->Testimonials_model_uri, 'B_I');
		
			$this->data['testmonialsInfo'] = $this->B_I->gettestimonialsInfos($contentId);
			$this->data['windowTitle'] 	 = 'Update Testimonials Information';
			$this->data['dynamicView'] 	 = $this->aadmin->Testimonials_edit_view;

		// Run form validation and check whether post var is empty or not

		if(count($_POST))

		{
			$details = $this->B_I->gettestimonialsInfos($contentId);
			
			$val = $this->form_validation;
			$val->set_rules('title', 'Testimonials Title', 'trim|required|xss_clean');
			$val->set_rules('test_date', 'Testimonials Date', 'trim|required|xss_clean');
			$val->set_rules('congregation_name', 'Congregation Name', 'trim|required|xss_clean');
			$val->set_rules('teacher_id', 'Pastor Name', 'trim|required|xss_clean');
			$val->set_rules('description', 'Description', 'trim|required|xss_clean');
			$val->set_rules('status', 'Approval Status', 'trim|required|xss_clean');

			if($val->run())
			{
			

				$testimonialsData = array(
				    'date'     =>  date("Y-m-d",strtotime($this->input->post('test_date'))),
					'congregationName'        =>  $this->input->post('congregation_name'),
					'pastorID'        =>  $this->input->post('teacher_id'),
					'title'    =>  $this->input->post('title'),
					'videolinked'    =>  $this->input->post('videolinked'),
					'body'     =>  $this->input->post('description'),
				    'createdBy' =>  $this->userId,
					'approvalStatus'   =>  $this->input->post('status'),
					'dateModified'   =>  date("Y-m-d"),
				);
				
				if($_FILES['userfile']['name'] !=""){
					
					@unlink("./public/photos/testimonials/".$details->image);
					
					$config['upload_path'] = "./public/photos/testimonials/";
						
					$config['allowed_types'] = 'jpg|png|gif|jpeg';
					
					$config['max_size'] = '10072';
					
					$config['file_name'] = $_FILES['userfile']['name'];
					
					$this->load->library('upload', $config);
					
					if(!$this->upload->do_upload()){
					
						$error = array('error'=>$this->upload->display_errors());
						
						if($error !="")
						{
							$this->data['admin_message'] = 'Image does not uploaded.'; 
							$this->data['testmonialsInfo'] = $this->B_I->gettestimonialsInfos($contentId);
							$this->data['windowTitle'] 	 = 'Update Testimonials Information';
							$this->data['dynamicView'] 	 = $this->aadmin->Testimonials_edit_view;
						}
					}else{
						
						$file_data = $this->upload->data();
							
						$photo_name = $file_data['file_name'];
						
						$fileData = array(
								'image' => $photo_name
							);
						$testimonialsData = array_merge($testimonialsData, $fileData);
						
					}
				}
				
				
						if($this->B_I->modifyTestmonialsInfo($testimonialsData, $contentId)){
							$this->data['windowTitle'] 	  	  = 'Update Testimonials Information';
							$this->data['admin_message']      = 'Testimonials has been modified successfully! !!'; //$this->lang->text('JN_COMMON_TEXT_MODIFIED');
							$this->data['testmonialsInfo']   = $this->B_I->gettestimonialsInfos($contentId);
							$this->data['dynamicView'] 	  	  = $this->aadmin->Testimonials_edit_view;
						}else{return false;}

			
			}

		}	
		// Load view
		$this->_commonPageLayout('view');

	}
	public function search()

	{
			$this->data['activeTab'] 	     =  'testimonials';
			$this->data['OptionCompany'] 	 =  getOptionCompanyName();
			$this->data['OptionServiceType'] =  getOptionServiceType();

		     // Load Model
			$this->data['windowTitle'] 	  = $this->siteTitle.'Search Status Note Info';
			$this->data['dynamicView'] 	  = 'pages/admin/testimonials/search';

		// Run form validation and check whether post var is empty or not

		if(count($_POST))

		{

			$val = $this->form_validation;
			$val->set_rules('company_id', 'Company Name', 'trim|required|xss_clean');
			$val->set_rules('service_type_id', 'Service Type', 'trim|xss_clean');

			if($val->run())
			{
				    $cond = "";
					$company_id      =  $this->input->post('company_id');
					$service_type_id =  $this->input->post('service_type_id');
              
			     if(!empty($cond) && !empty($company_id)): $cond .= " && company_id = '$company_id'"; elseif(empty($cond) && !empty($company_id)): $cond .= "company_id = '$company_id'"; endif; 
			     if(!empty($cond) && !empty($service_type_id)): $cond .= " && service_type_id = '$service_type_id'"; elseif(empty($cond) && !empty($service_type_id)): $cond .= "service_type_id = '$service_type_id'"; endif; 

				$this->data['windowTitle'] 	  	  = $this->siteTitle.'Status Note Search Result';
				$this->data['statusNoteValues']   = $this->Shows->getThisValue($cond, 'status_note');
				$this->data['dynamicView'] 	  	  = 'pages/admin/status_note/search_result';


			}

		}	
		// Load view
		$this->_commonPageLayout('view');

	}
    public function delete($contentId = NULL)
	{
		$this->data['activeTab'] 	=  'testimonials';
		// Load Model
		$this->load->model($this->aadmin->Testimonials_model_uri, 'B_I');
        $this->data['areaNames']      = $this->B_I->deleteTestimonialsInfo($contentId);
		$this->data['admin_message']  = 'Testimonials has been deleted successfully! !!'; //$this->lang->text('JN_COMMON_TEXT_DELETED');
		redirect($this->aadmin->Testimonials_home_uri);
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
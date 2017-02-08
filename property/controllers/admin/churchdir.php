<?php
include_once 'BaseController.php';

class Churchdir extends BaseController
{
   function Churchdir()
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

		$this->data['activeTab'] 	=  'churchdir';
		// Load Model
		$this->load->model('admin/churches_model', 'B_I');
		// $this->load->model('testimonial_model');
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
		             $this->B_I->deleteChurchInfo($value);
				}
			}				
		}
	
		// Get offset and limit for page viewing
		$start = (int) $this->uri->segment(4);
        $cond = "";
		// Number of record showing per page
		$perPage = $this->config->item('DX_per_page');	
		// Get all users
		$this->data['churchesValue'] = $this->B_I->get_all($start, $perPage, $cond)->result();
		
		// Pagination config
		$this->p_config['base_url']    .= "admin/churchdir/home/";
		$this->p_config['uri_segment'] 	= 4;
		$this->p_config['num_links'] 	= 2;
		$this->p_config['total_rows'] 	= $this->B_I->get_all(0, 0, $cond)->num_rows();
		$this->p_config['per_page'] 	= $perPage;

		
		// Init pagination
		$this->pagination->initialize($this->p_config);	
		// Create pagination links
		$this->data['pagination'] = $this->pagination->create_links();
		// Load view

		$this->data['windowTitle'] 	= $this->siteTitle.'Church Directory List';
		// $this->data['churches'] = $this->testimonial_model->getChurches();
		$this->data['dynamicView'] 	= "pages/admin/churchdir/home";
		
		// $this->load->view('templates/headeradmin',$this->data);
		// $this->load->view('pages/admin/churchdir/home',$this->data);
		// $this->load->view('templates/footer',$this->data);

		$this->_commonPageLayout('view');

	}


	public function add()
	{
		$this->data['activeTab'] 		   =  'churchdir';
		$this->data['PastorInfo'] 		   =  getPastorInfo();
		$this->data['RegionInfo'] 		   =  getRegionInfo();
		$this->data['BarangayInfo'] 	   =  getBarangayInfo();
		$this->data['CityInfo'] 	       =  getCityInfo();
		$this->data['ProvinceInfo'] 	   =  getProvinceInfo();

		// Load Model
		$this->load->model('admin/churches_model', 'B_I');

		// Load view
		$this->data['windowTitle'] 	= 'Create Church';
		$this->data['dynamicView'] 	= 'pages/admin/churchdir/entry';
		
		if(count($_POST))
		{
			$val = $this->form_validation;
			$val->set_rules('churchname', 'Church Name', 'trim|required|xss_clean');
			$val->set_rules('address', 'Address', 'trim|required|xss_clean');
			$val->set_rules('pastor_id', 'Pastor', 'trim|required|xss_clean');
			

			if($val->run())
			{
			
				$churchesData = array(
					'church_Name'        =>  $this->input->post('churchname'),
					'googleMapLocation'        =>  $this->input->post('googleapimap'),
					'schedule'        =>  $this->input->post('schedule'),
					'address'        =>  $this->input->post('address'),
					'region_Id'        =>  $this->input->post('region_id'),
					'pastor_Id'        =>  $this->input->post('pastor_id'),
					'brgy_Id'    =>  $this->input->post('barangay_id'),
					'province_Id'     =>  $this->input->post('province_id'),
					'city_Id'     =>  $this->input->post('city_id'),
				    'created_By' =>  $this->userId,
					'create_Date'   =>  date("Y-m-d"),
					'modified_By' =>  $this->userId,
					'modified_Date'   =>  date("Y-m-d"),
				);
				
				if($_FILES['userfile']['name'] !=""){
					$config['upload_path'] = "./public/photos/church/";
						
					$config['allowed_types'] = 'jpg|png|gif|jpeg';
					
					$config['max_size'] = '10072';
					
					$config['file_name'] = $_FILES['userfile']['name'];
					
					$this->load->library('upload', $config);
					
					if(!$this->upload->do_upload()){
					
						$error = array('error'=>$this->upload->display_errors());
						
						if($error !="")
						{
							
							$this->data['windowTitle'] 	 	= 'Create Church';
							$this->data['admin_message'] = 'Image does not uploaded.'; 
							$this->data['dynamicView'] 	 = 'pages/admin/churchdir/entry';
						}
					}else{
						
						$file_data = $this->upload->data();
							
						$photo_name = $file_data['file_name'];
						
						$fileData = array(
								'picture' => $photo_name
							);
						$churchesData = array_merge($churchesData, $fileData);
						
					}
				} else {
					$fileData = array(
								'picture' => "default.png"
							);
					$churchesData = array_merge($churchesData, $fileData);
				}
						
					
						if($this->B_I->saveChurchInfo($churchesData)){

						// Get offset and limit for page viewing
								$start = (int) $this->uri->segment(4);
						        $cond = "";
								// Number of record showing per page
								$perPage = $this->config->item('DX_per_page');	
								// Get all users
								$this->data['churchesValue'] = $this->B_I->get_all($start, $perPage, $cond)->result();

							$this->data['windowTitle'] 	 	= 'Create Church';
							$this->data['admin_message'] 	= 'Church has been created successfully! !!'.nbs(5).anchor('pages/admin/churchdir/entry', 'Add New'); 
							$this->data['dynamicView'] 	 	= 'pages/admin/churchdir/entry';	
						}else{return false;}
					 
				}	
		      }
		
		// Load view
		$this->_commonPageLayout('view');
	}
	
	public function edit($contentId = NULL)

	{
		$this->data['activeTab'] 		   =  'churchdir';
		$this->data['PastorInfo'] 		   =  getPastorInfo();
		$this->data['RegionInfo'] 		   =  getRegionInfo();
		$this->data['BarangayInfo'] 	   =  getBarangayInfo();
		$this->data['CityInfo'] 	       =  getCityInfo();
		$this->data['ProvinceInfo'] 	   =  getProvinceInfo();
		// Load Model
		$this->load->model('admin/churches_model', 'B_I');
		
			$this->data['churchInfo'] = $this->B_I->getchurchesInfos($contentId);
			$this->data['windowTitle'] 	 = 'Update Church Information';
			$this->data['dynamicView'] 	 = 'pages/admin/churchdir/edit';

		// Run form validation and check whether post var is empty or not

		if(count($_POST))

		{
			$details = $this->B_I->getchurchesInfos($contentId);
			
			$val = $this->form_validation;
			$val->set_rules('churchname', 'Church Name', 'trim|required|xss_clean');
			$val->set_rules('address', 'Address', 'trim|required|xss_clean');
			$val->set_rules('pastor_id', 'Pastor', 'trim|required|xss_clean');

			if($val->run())
			{
			
				
				$churchesData = array(
					'church_Name'        =>  $this->input->post('churchname'),
					'googleMapLocation'        =>  $this->input->post('googleapimap'),
					'schedule'        =>  $this->input->post('schedule'),
					'address'        =>  $this->input->post('address'),
					'region_Id'        =>  $this->input->post('region_id'),
					'pastor_Id'        =>  $this->input->post('pastor_id'),
					'brgy_Id'    =>  $this->input->post('barangay_id'),
					'province_Id'     =>  $this->input->post('province_id'),
					'city_Id'     =>  $this->input->post('city_id'),
					'modified_By' =>  $this->userId,
					'modified_Date'   =>  date("Y-m-d"),
				);

				if($_FILES['userfile']['name'] !=""){
					
					@unlink("./public/photos/church/".$details->image);
					
					$config['upload_path'] = "./public/photos/church/";
						
					$config['allowed_types'] = 'jpg|png|gif|jpeg';
					
					$config['max_size'] = '10072';
					
					$config['file_name'] = $_FILES['userfile']['name'];
					
					$this->load->library('upload', $config);
					
					if(!$this->upload->do_upload()){
					
						$error = array('error'=>$this->upload->display_errors());
						
						if($error !="")
						{
							$this->data['admin_message'] = 'Image does not uploaded.'; 
							$this->data['churchInfo'] = $this->B_I->getchurchesInfos($contentId);
							$this->data['windowTitle'] 	 = 'Update Church Information';
							$this->data['dynamicView'] 	 = 'pages/admin/churchdir/edit';
						}
					}else{
						
						$file_data = $this->upload->data();
							
						$photo_name = $file_data['file_name'];
						
						$fileData = array(
								'picture' => $photo_name
							);
						$churchesData = array_merge($churchesData, $fileData);
						
					}
				}
				
				
						if($this->B_I->modifyChurchInfo($churchesData, $contentId)){
							$this->data['windowTitle'] 	  	  = 'Update Church Information';
							$this->data['admin_message']      = 'Church has been modified successfully! !!'; //$this->lang->text('JN_COMMON_TEXT_MODIFIED');
							$this->data['churchInfo']   = $this->B_I->getchurchesInfos($contentId);
							$this->data['dynamicView'] 	  	  = 'pages/admin/churchdir/edit';
						}else{return false;}

			
			}

		}	
		// Load view
		$this->_commonPageLayout('view');

	}
	public function search()

	{
			$this->data['activeTab'] 	     =  'churchdir';
			$this->data['OptionCompany'] 	 =  getOptionCompanyName();
			$this->data['OptionServiceType'] =  getOptionServiceType();

		     // Load Model
			$this->data['windowTitle'] 	  = $this->siteTitle.'Search Status Note Info';
			$this->data['dynamicView'] 	  = 'pages/admin/churchdir/search';

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
		$this->data['activeTab'] 	=  'churchdir';
		// Load Model
		$this->load->model('admin/churches_model', 'B_I');
        $this->data['areaNames']      = $this->B_I->deleteChurchInfo($contentId);
		$this->data['admin_message']  = 'Church has been deleted successfully! !!'; //$this->lang->text('JN_COMMON_TEXT_DELETED');
		redirect("admin/churchdir/home/");
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
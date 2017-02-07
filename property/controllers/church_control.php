<?php
//include_once 'BaseController.php';

class Church_control extends Controller {


	 public function __construct(){
		parent::__construct ();
		$this->siteTitle = 'CRUD | ';
		$this->load->model('testimonial_model');
		$this->data['quicklinks']  = $this->testimonial_model->getQuicklinks();
	 }
	 
	public function index()
	{
		$this->data['events']  = $this->testimonial_model->getLastEvents();
		$this->data['announcement']  = $this->testimonial_model->getLastAnnouncement();
		$this->data['testimonial']  = $this->testimonial_model->getLastTestimonial();
		
		$this->load->view('templates/header',$this->data);
		$this->load->view('themes/main',$this->data);
		$this->load->view('templates/footer',$this->data);
	
	}

	public function churchdirectory()
	{
		$this->data['churches'] = $this->testimonial_model->getChurches();
		// $this->data['regions'] = $this->testimonial_model->getRegions();
		// $this->data['cities'] = $this->testimonial_model->getCities();
		// $this->data['barangays'] = $this->testimonial_model->getBarangays();
		// $this->data['provinces'] = $this->testimonial_model->getProvinces();
		$this->load->view('templates/header',$this->data);
		$this->load->view('themes/churchdirectory',$this->data);
		$this->load->view('templates/footer',$this->data);
	}
	
	public function getfilteredChurches()
	{
		$return_churches = $this->testimonial_model->getChurches();
		echo json_encode($return_churches);
		exit();	
	}

	public function postPrayer_request()
	{
		// print_r($_POST);
		// $this->data['activeTab'] 		   =  'quicklinks';
		
		// Load Model
		$this->load->model('prayerNcontact_model');

		// Load view
		// $this->data['windowTitle'] 	= 'Create Quicklinks';
		// $this->data['dynamicView'] 	= $this->aadmin->Quicklinks_entry_view;
		
		if(count($_POST))
		{
			$val = $this->form_validation;
			$val->set_rules('subject', 'Message Sender', 'trim|required|xss_clean');
			$val->set_rules('message', 'Message Content', 'trim|required|xss_clean');

			if($val->run())
			{
			
				$prayer_requestData = array(
					'pr_name'    			=>  $this->input->post('subject'),
					'pr_bodycontent'     	=>  $this->input->post('message'),
					'pr_date'     	=>  date("Y-m-d h:i:sa")
				);
						
				if($this->prayerNcontact_model->savePrayerRequestInfo($prayer_requestData)){
					// $this->data['windowTitle'] 	 	= 'Create Quicklinks';
					$this->data['admin_message'] 	= 'Prayer Request has been created successfully!'; 
					// $this->data['dynamicView'] 	 	= "/church_control/prayer_request";	
				}else{return false;}
					 
				}	
		      }
		
		// Load view
		redirect('church_control/prayer_request');

		exit();
	}

	public function churchdirectory_sub($cId)
	{
		$this->data['thisChurch'] = current($this->testimonial_model->getLastChurch($cId));
		$this->load->view('templates/header',$this->data);
		$this->load->view('themes/churchdirectory_sub',$this->data);
		$this->load->view('templates/footer',$this->data);
	}

	public function events()
	{
		$this->data['events']  = $this->testimonial_model->getEvents();
		$this->load->view('templates/header',$this->data);
		$this->load->view('themes/events',$this->data);
		$this->load->view('templates/footer',$this->data);
	}

	public function announcements()
	{
		$this->data['announcement']  = $this->testimonial_model->getAnnouncements();
		$this->load->view('templates/header',$this->data);
		$this->load->view('themes/announcements',$this->data);
		$this->load->view('templates/footer',$this->data);
	}

	public function testimonials()
	{
		$this->data['testimonial']  = $this->testimonial_model->getTestimonials();
		$this->load->view('templates/header',$this->data);
		$this->load->view('themes/testimonials',$this->data);
		$this->load->view('templates/footer',$this->data);
	}

	public function prayer_request()
	{
		$this->load->view('templates/header',$this->data);
		$this->load->view('themes/prayer_request',$this->data);
		$this->load->view('templates/footer',$this->data);
	}

	public function staffleadership()
	{
		$this->load->view('templates/header',$this->data);
		$this->load->view('themes/staffleadership',$this->data);
		$this->load->view('templates/footer',$this->data);
	}

	public function whatwebelieve()
	{
		$this->load->view('templates/header',$this->data);
		$this->load->view('themes/whatwebelieve',$this->data);
		$this->load->view('templates/footer',$this->data);
	}

	public function contacts()
	{
		$this->load->view('templates/header',$this->data);
		$this->load->view('themes/contacts',$this->data);
		$this->load->view('templates/footer',$this->data);
	}

}
?>
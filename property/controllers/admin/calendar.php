<?php
include_once 'BaseController.php';

class Calendar extends BaseController
{
   function Calendar()
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

		$this->data['activeTab'] 	=  'calendar';
		
		$this->data['OptionUser'] 		  =  getOptionUser();
        $this->data['user_id2'] 	      = "";
 		$this->data['calendarValues'] = $this->Shows->getThisValues("time != ''", 'events');
		// Load view
		$this->data['windowTitle'] 	= 'Events View of Calendar Wise';
		$this->data['dynamicView'] 	= $this->aadmin->Acalendar_home_view;
		
		if(count($_POST))
		{
			$val = $this->form_validation;
			$val->set_rules('user_id', 'Appointment By', 'trim|required|xss_clean');

			if($val->run())
			{
				   
				$user_id   =  $this->input->post('user_id');				  
				$this->data['user_id2'] 	  = $user_id;
				
				$this->data['windowTitle'] 	  = 'Events View';
		        $this->data['calendarValues'] = $this->Shows->getThisValues("user_id = '$user_id' && service_time != ''", 'appointment');
				$this->data['dynamicView'] 	  = $this->aadmin->Acalendar_home_view;	
			}	
		}
		$this->_commonPageLayout('view');

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
<?php
include_once 'BaseController.php';

class Home extends BaseController {
	 public function __construct(){
		parent::__construct ();
		$this->siteTitle = 'The Potters House Christian Center Philippines';
	 }
	 
	public function index()
	{
		$this->login();
	
	}

	function recaptcha_check()
	{
		$result = $this->dx_auth->is_recaptcha_match();		
		if(!$result)
		{
			$this->form_validation->set_message('recaptcha_check', 'Your confirmation code does not match the one in the image. Try again.');
		}
		
		return $result;
	}

	function login()
	{
		$this->data['activeTab'] 	= 'login';
		if(!$this->dx_auth->is_logged_in())
		{
			$val = $this->form_validation;
			
			// Set form validation rules
			$val->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
			$val->set_rules('password', 'Password', 'trim|required|xss_clean');
			$val->set_rules('remember', 'Remember me', 'integer');

				
			if($val->run() AND $this->dx_auth->login($val->set_value('email'), $val->set_value('password'), $val->set_value('remember')))
			{
				//$role_name = $this->dx_auth->get_role_name();
				if($this->dx_auth->is_user()){
					// Redirect to User homepage
					$redir_loc = $this->dx_auth->user_home_uri;
				}
				elseif($this->dx_auth->is_clerk()){
					// Redirect to Admin homepage
					$redir_loc = $this->dx_auth->clerk_home_uri;
				}
				elseif($this->dx_auth->is_director()){
					// Redirect to Super Admin homepage
					$redir_loc = $this->dx_auth->director_home_uri;
				}
				elseif($this->dx_auth->is_admin()){
					// Redirect to Super Admin homepage
					$redir_loc = $this->dx_auth->admin_home_uri;
				}
				redirect($redir_loc);
			}
			else
			{
				// Check if the user is failed logged in because user is banned user or not
				if($this->dx_auth->is_banned())
				{
					// Redirect to banned uri
					$this->dx_auth->deny_access('banned');
				}
				else
				{						
					// Default is we don't show captcha until max login attempts eceeded
					$this->data['show_captcha'] = FALSE;
				
					// Show captcha if login attempts exceed max attempts in config
					if($this->dx_auth->is_max_login_attempts_exceeded())
					{
						// Create catpcha						
						$this->dx_auth->captcha();
						
						// Set view data to show captcha on view file
						$this->data['show_captcha'] = TRUE;
					}
					
					// Load login page view
					$this->data['windowTitle'] 	= $this->siteTitle.'Login Panel';
					$this->data['activeTab'] 	= 'login';
					$this->data['dynamicView'] 	= 'frontend/site_login_form';
				}
			}
		}
		else
		{
		  if($this->dx_auth->is_user()):
			$this->data['auth_message'] = "You Are Already Logged In.".nbs(2). anchor($this->dx_auth->user_home_uri, 'Go to Your Panel Home');
		  elseif($this->dx_auth->is_clerk()):
			$this->data['auth_message'] = "You Are Already Logged In.".nbs(2). anchor($this->dx_auth->admin_home_uri, 'Go to Your Panel Home');
		  elseif($this->dx_auth->is_director()):
			$this->data['auth_message'] = "You Are Already Logged In.".nbs(2). anchor($this->dx_auth->director_home_uri, 'Go to Panel Home');
		  elseif($this->dx_auth->is_admin()):
			$this->data['auth_message'] = "You Are Already Logged In.".nbs(2). anchor($this->dx_auth->admin_home_uri, 'Go to Panel Home');
		  endif;	
			$this->data['windowTitle'] 	= $this->siteTitle.'User Login Confirmation';
			$this->data['dynamicView'] 	= 'frontend/general_message';
		}
		
		$this->_commonPageLayout('view');
	}
	
	function banned($what = '')
	{
		$this->data['activeTab'] 	= empty($what) ? 'banned' : 'deny';
		$this->data['auth_message'] = empty($what) ? "<div class='error_message'>Sorry, You Have Been Banned By The Admin!!".nbs(2). anchor($this->dx_auth->login_uri, 'Back to Login Panel')."</div>" : "Sorry, You Have Been Denied By Login Manager! !!";
		$this->data['windowTitle'] 	= empty($what) ? $this->siteTitle.'User Banned Notification' : $this->siteTitle.'User Denied Notification';
		$this->data['dynamicView'] 	= 'frontend/general_message';
		$this->_commonPageLayout('view');

	}
	
	/// Notify User Deny
	function deny()
	{
		$this->banned('deny');
	}

	 protected function _commonPageLayout($viewName, $cacheIt = FALSE)
	 {
		$view = $this->layout->view($viewName, $this->data, TRUE);

		$replaces = array( 
						   '{SITE_LOGIN_LOGO}' 		  => $this->load->view('frontend/site_login_logo', $this->data, TRUE), 
						   '{SITE_LOGIN_FORM}' 	      => $this->load->view($this->data['dynamicView'],  NULL, TRUE)
						 );
						  
		$this->load->view('view', array('view' => $view, 'replaces' => $replaces));
	}	
}
?>
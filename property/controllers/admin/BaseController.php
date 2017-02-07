<?php 
/**
 * Base Controller
 * Common tasks of all controllers are done here
 * Must be inherited, no direct instance allowed (abstract)   
*/


abstract class BaseController extends Controller
{	
	protected $data     = array();

	function __construct()
	{
		parent::Controller();
		
		$this->load->library('layout');
		$this->layout->setLayout('backend');
        $this->load->helper('common');
		$this->p_config['base_url'] = base_url();
		$this->siteTitle = 'Admin Control Panel - ';
		$this->userId    = $this->dx_auth->get_user_id ();
		$this->roleId    = $this->dx_auth->get_role_id ();
		$this->userName  = $this->dx_auth->get_username();
        date_default_timezone_set("Asia/Dhaka");
	}
	
    protected function _setupFirePHP()
    {
        $this->load->config('fireignition');
        if ($this->config->item('fireignition_enabled'))
        {
            if (floor(phpversion()) < 5)
            {
                log_message('error', 'PHP 5 is required to run fireignition');
            } else {
                $this->load->library('firephp');
            }
        }
        else 
        {
            $this->load->library('firephp_fake');
            $this->firephp =& $this->firephp_fake;
        }
    }
}
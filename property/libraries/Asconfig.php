<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Asconfig
{	
	function Asconfig()
	{
		$this->ci =& get_instance();
		$this->ci->load->config('sec_config');	
		$this->asconfig_var_init();
	}

	function asconfig_var_init()
	{	
		$this->Asconfig_model_uri		= $this->ci->config->item('DX_Asconfig_model');
		
		$this->Asconfig_home_uri		= $this->ci->config->item('DX_Asconfig_home_uri');	
		$this->Asconfig_entry_uri		= $this->ci->config->item('DX_Asconfig_entry_uri');	
		$this->Asconfig_edit_uri		= $this->ci->config->item('DX_Asconfig_edit_uri');	
		$this->Asconfig_delete_uri	    = $this->ci->config->item('DX_Asconfig_delete_uri');	
		$this->Asconfig_active_uri	    = $this->ci->config->item('DX_Asconfig_active_uri');	
		$this->Asconfig_inactive_uri	= $this->ci->config->item('DX_Asconfig_inactive_uri');

		// News-Event Views
		$this->Asconfig_home_view 	    = $this->ci->config->item('DX_Asconfig_home_view');
		$this->Asconfig_entry_view	    = $this->ci->config->item('DX_Asconfig_entry_view');	
		$this->Asconfig_edit_view		= $this->ci->config->item('DX_Asconfig_edit_view');	
	}
}
?>
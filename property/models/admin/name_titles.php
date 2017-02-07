<?php

class Name_Titles extends Model 
{
	function Name_Titles()
	{
		parent::Model();

		////Set Local Time Zone
		//date_default_timezone_set("Asia/Dhaka");

		// Other stuff
		$this->_prefix 		= $this->config->item('DX_table_prefix');
		$this->_table 		= $this->_prefix.$this->config->item('DX_user_temp_table');	
	}
	
	// General function
	function getNameInfo($username)
	{
		$this->db->where('email', $username);
		return $this->db->get($this->_table);
	}


}
?>
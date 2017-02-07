<?php

class Sec_Configs extends Model 
{
	function Sec_Configs()
	{
		parent::Model();

		// Other stuff
		$this->_prefix 	= $this->config->item('DX_table_prefix');
		$this->_table 	= $this->_prefix.$this->config->item('DX_Asconfig_table');
	}

	// General function
	function get_all($start = 0, $perPage = 0, $cond = '')
	{
		if($start >= 0 AND $perPage > 0)
		{
			$this->db->select($this->_table.'.*', FALSE);
			($cond != '') ? $this->db->where($cond) : '';
			$this->db->order_by($this->_table.'.id', 'ASC');
			
			$query = $this->db->get($this->_table, $perPage, $start); 
		}
		else
		{
			if($cond != ''){
				$query = $this->db->where($cond)->get($this->_table);
			}else{
				$query = $this->db->get($this->_table);
			}
		}
		
		return $query;
	}
	

	function getConfigurationInfo($contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->get($this->_table)->result();
	}
	
   function deleteConfigurationInfo($contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->delete($this->_table);
	}

	function saveConfigurationInfo($data)
	{
		$data['created'] = date('Y-m-d  H:i:s', time());
		return $this->db->insert($this->_table, $data);
	}
	
	function modifyConfigurationInfo($data, $contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->update($this->_table, $data);
	}
	
}
?>
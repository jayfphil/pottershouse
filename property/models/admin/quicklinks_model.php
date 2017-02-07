<?php

class Quicklinks_model extends Model 
{
	function Quicklinks_model()
	{
		parent::Model();

		// Other stuff
		$this->_prefix 	= $this->config->item('DX_table_prefix');
		$this->_table 	= $this->_prefix.$this->config->item('DX_Quicklinks_table');
	}

	// General function
	function get_all($start = 0, $perPage = 0, $cond = '')
	{
		if($start >= 0 AND $perPage > 0)
		{
			$this->db->select($this->_table.'.*', FALSE);
			($cond != '') ? $this->db->where($cond) : '';
			$this->db->order_by($this->_table.'.id', 'DESC');
			
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
	

	function getQuicklinksInfo($contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->get($this->_table)->result();
	}
	
	function getquicklinksInfos($contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->get($this->_table)->row();
	}
	
   function deleteQuicklinksInfo($contentId)
	{
		$data = $this->getquicklinksInfos($contentId);
		//@unlink('./public/photos/uploads/'.$data->image);
		
		$this->db->where('id', $contentId);
		return $this->db->delete($this->_table);
	}

	function saveQuicklinksInfo($data)
	{
        
		return $this->db->insert($this->_table, $data);
	}
	
	function modifyQuicklinksInfo($data, $contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->update($this->_table, $data);
	}
	
}
?>
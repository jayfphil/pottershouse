<?php

class Churches_Model extends Model 
{
	function Churches_Model()
	{
		parent::Model();

		// Other stuff
		$this->_prefix 	= $this->config->item('DX_table_prefix');
		$this->_table 	= 'churches';
	}

	// General function
	function get_all($start = 0, $perPage = 0, $cond = '')
	{
		if($start >= 0 AND $perPage > 0)
		{
			$this->db->select($this->_table.'.*', FALSE);
			($cond != '') ? $this->db->where($cond) : '';
			$this->db->order_by($this->_table.'.church_Id', 'DESC');
			
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
	

	function getChurchInfo($contentId)
	{
		$this->db->where('church_Id', $contentId);
		return $this->db->get($this->_table)->result();
	}
	
	function getchurchesInfos($contentId)
	{
		$this->db->where('church_Id', $contentId);
		return $this->db->get($this->_table)->row();
	}
	
   function deleteChurchInfo($contentId)
	{
		$data = $this->getchurchesInfos($contentId);
		@unlink('./public/photos/church/'.$data->image);
		
		$this->db->where('church_Id', $contentId);
		return $this->db->delete($this->_table);
	}

	function saveChurchInfo($data)
	{
		return $this->db->insert($this->_table, $data);
	}
	
	function modifyChurchInfo($data, $contentId)
	{
		$this->db->where('church_Id', $contentId);
		return $this->db->update($this->_table, $data);
	}
	
}
?>
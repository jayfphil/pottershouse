<?php

class PrayerNcontact_model extends Model 
{
	function PrayerNcontact_model()
	{
		parent::Model();

		// Other stuff
		// $this->_prefix 	= $this->config->item('DX_table_prefix');
		$this->_table 	= "prayer_request";
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
	
	function getPrayerRequestInfo($contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->get($this->_table)->result();
	}
	
	function getPrayerRequestInfos($contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->get($this->_table)->row();
	}
	
   function deletePrayerRequestInfo($contentId)
	{
		$data = $this->getPrayerRequestInfos($contentId);
		//@unlink('./public/photos/uploads/'.$data->image);
		
		$this->db->where('id', $contentId);
		return $this->db->delete($this->_table);
	}

	function savePrayerRequestInfo($data)
	{
		return $this->db->insert($this->_table, $data);
	}
	
	function modifyPrayerRequestInfo($data, $contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->update($this->_table, $data);
	}
	
}
?>
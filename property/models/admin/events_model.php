<?php

class Events_Model extends Model 
{
	function Events_Model()
	{
		parent::Model();

		// Other stuff
		$this->_prefix 	= $this->config->item('DX_table_prefix');
		$this->_table 	= $this->_prefix.$this->config->item('DX_Events_table');
		$this->_userTable = $this->_prefix.'users';
		$this->_serviceTypeTable = $this->_prefix.'service_type';
	}

	// General function
	function get_all($start = 0, $perPage = 0, $cond = '', $order = '')
	{
		if($start >= 0 AND $perPage > 0)
		{
			$this->db->select($this->_table.'.*', FALSE);
			//$this->db->select("$this->_userTable.full_name AS full_name", FALSE);
			//$this->db->select("$this->_serviceTypeTable.type_name AS service_type", FALSE);
			//$this->db->join($this->_userTable, "$this->_userTable.id = $this->_table.user_id");
			//$this->db->join($this->_serviceTypeTable, "$this->_serviceTypeTable.id = $this->_table.service_type_id");
			//($cond != '') ? $this->db->where($cond) : '';
			//($order != '') ? $this->db->order_by($order) : $this->db->order_by("id", "DESC");
			$this->db->order_by("id", "DESC");
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
	

	function getAppointmentInfo($contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->get($this->_table)->result();
	}
	
	function getAppointmentInfos($contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->get($this->_table)->row();
	}
	
   function deleteAppointmentInfo($contentId)
	{
		$data = $this->getAppointmentInfos($contentId);
		@unlink("./public/photos/events/".$data->image);
		
		$this->db->where('id', $contentId);
		return $this->db->delete($this->_table);
	}

	function saveAppointmentInfo($data)
	{
        date_default_timezone_set("Asia/Dhaka");
		$data['created'] = date('Y-m-d  H:i:s', time());
		return $this->db->insert($this->_table, $data);
	}
	
	function modifyAppointmentInfo($data, $contentId)
	{
		$this->db->where('id', $contentId);
		return $this->db->update($this->_table, $data);
	}
	
}
?>
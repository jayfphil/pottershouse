<?php

class Shows extends Model 
{
	function Shows()
	{
		parent::Model();
		$this->_prefix 	= $this->config->item('DX_table_prefix');
		$this->_branch_table = $this->_prefix.$this->config->item('DX_branch_table');	
	}
	
    function get_all($cond = '', $tableName = '', $start = 0, $perPage = 0)
	{
		if($start >= 0 AND $perPage > 0)
		{
			$this->db->select($tableName.'.*', FALSE);
			($cond != '') ? $this->db->where($cond) : '';
			$this->db->order_by($tableName.'.id', 'ASC');
			
			$query = $this->db->get($tableName, $perPage, $start); 
		}
		else
		{
			if($cond != ''){
				$query = $this->db->where($cond)->get($tableName);
			}else{
				$query = $this->db->get($tableName);
			}
		}
		
		return $query;
	}

	function getFaq()
	{
		$this->tableName = 'faq';
		$this->db->select("{$this->tableName}.*", FALSE);
		$this->db->group_by("{$this->tableName}.faq_category");
		$this->db->where("{$this->tableName}.status", 'active');
		return $this->db->get($this->tableName)->result();
	}


	// General function
	function getInfo($tableName = FALSE, $cond = FALSE, $need = FALSE, $limit = '', $start = '')
	{
		$this->db->select("$tableName.*", FALSE);
		if($cond)
		{
			$this->db->where($cond);
		}
		if(!empty($this->data['code']))
		{
			$this->db->where("{$tableName1}.branch_code", $this->data['code']);
		}
		if($need)
		{
			$this->db->select("{$this->_branch_table}.branch_name", FALSE);
			$this->db->join($this->_branch_table, "{$this->_branch_table}.branch_code = {$tableName}.branch_code", 'left');
			$this->db->where("{$this->_branch_table}.status", "active");
		}
		$this->db->where("{$tableName}.status", 'active');
		return $this->db->get($tableName, $limit, $start)->result();
	}

	function getItemList($tableName1 = FALSE, $tableName2 = FALSE, $fields = FALSE, $cond = FALSE, $join = FALSE, $need = FALSE, $code = FALSE, $asc = FALSE)
	{
		$this->db->select($fields, FALSE);
		$this->db->where("{$tableName1}.status", 'active');
		if($cond)
		{
			$this->db->where($cond);
		}
		if(!empty($code) && $need)
		{
			$this->db->where("{$tableName1}.branch_code", $code);
		}
		if($join)
		{
			$this->db->join($tableName2, $join, 'left');
		}
		if($need)
		{
			$this->db->select("{$this->_branch_table}.branch_name", FALSE);
			$this->db->join($this->_branch_table, "{$this->_branch_table}.branch_code = {$tableName1}.branch_code", 'left');
			$this->db->where("{$this->_branch_table}.status", "active");
		}
		if($asc)
		{
			$this->db->order_by("{$tableName1}.id ASC");
		}
		else
		{
			$this->db->order_by("{$tableName1}.id DESC");
		}
		return $this->db->get($tableName1)->result();
	}

	function getBranchName($code)
	{
		$this->db->select("{$this->_branch_table}.branch_name", FALSE);
		$this->db->where("{$this->_branch_table}.branch_code", $code);
		return $this->db->get($this->_branch_table)->result();
	}

	function getThisValue($cond = FALSE, $tableName = '', $limit = '', $order = 'id ASC')
	{
		$tableName = $this->_prefix.$tableName;	
		$this->db->select(" * ", FALSE);
		if($cond)
		{
			$this->db->where($cond);
		}
        $this->db->order_by($order); 
		return $this->db->get($tableName, $limit)->result();
	}
	
	function getThisValue_tle($cond = FALSE, $tableName = '', $limit = '', $order = '')
	{
		$tableName = $this->_prefix.$tableName;	
		$this->db->select(" * ", FALSE);
		if($cond)
		{
			$this->db->where($cond);
		}
        $this->db->order_by($order); 
		return $this->db->get($tableName, $limit)->result();
	}
	
	function getThisValues($cond = FALSE, $tableName = '', $limit = '', $order = 'id ASC')
	{
		$tableName = $this->_prefix.$tableName;	
		$this->db->select(" * ", FALSE);
		if($cond)
		{
			$this->db->where($cond);
		}
        $this->db->order_by($order); 
		return $this->db->get($tableName, $limit)->result();
	}
	function saveThisValue($tableName = '', $data)
	{
		//$data['created'] = date('Y-m-d  H:i:s', time());
		return $this->db->insert($tableName, $data);
	}
	
    function modifyThisValue($tableName = '', $data, $contentId = NULL)
	{
		$this->db->where('id', $contentId);
		return $this->db->update($tableName, $data);
	}

    function deleteThisValue($cond = FALSE, $tableName = '')
	{
		if($cond)
		{
			$this->db->where($cond);
		}
		return $this->db->delete($tableName);
	}
}
?>
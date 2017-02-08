<?php
class Testimonial_Model extends Model 
{
	function Testimonial_Model()
	{
		parent::Model();
		//$this->_prefix 	= $this->config->item('DX_table_prefix');
	}
	
	function getTestimonials(){
		$result = $this->db->query("select * from testimonial a inner join pastors b on a.pastorID=b.id where a.approvalStatus='Approved' ORDER BY a.dateModified DESC")->result();
		return $result;
	}
	
	function getLastTestimonial(){
		$result = $this->db->query("select * from testimonial a inner join pastors b on a.pastorID=b.id where a.approvalStatus='Approved' ORDER BY RAND() limit 4")->result();
		//$result = $this->db->where('approvalStatus','Approved')->order_by('Testmony_ID','DESC')->get('testimonial')->result();
		return $result;
	}
	
	function getLastAnnouncement(){
		$result = $this->db->query("select * from announcement where approvalStatus='Approved' && expirationDate > CURDATE() ORDER BY RAND() limit 3")->result();
			return $result;
		/* $result = $this->db->query("select * from announcement where approvalStatus='Approved' and dateCreated = '".date('Y-m-d')."' limit 5")->result();
		
		if(count($result)>0)
		{
			return $result;
		}else{ */
			
		/* } */
		
		
	}
	
	function getAnnouncements(){
		$result = $this->db->query("select * from announcement where approvalStatus='Approved' && expirationDate > CURDATE() ORDER BY dateCreated DESC")->result();
			return $result;
	}

	function getLastQuicklinks(){
		$result = $this->db->query("select * from quick_links where approvalStatus='Approved' limit 10")->result();
		return $result;
	}
	
	function getQuicklinks(){
		$result = $this->db->query("select * from quick_links where approvalStatus='Approved' ORDER BY title ASC")->result();
		return $result;
	}

	function getLastEvents(){
		$result = $this->db->query("select * from events where approvalStatus='Approved' && expiration > CURDATE() order by id limit 3")->result();
		return $result;
	}
	
	function getEvents(){
		$result = $this->db->query("select * from events where approvalStatus='Approved' && expiration > CURDATE() order by date DESC, time DESC")->result();
		return $result;
	}	

	function getChurches(){
		$result = $this->db->query("SELECT a.`church_Id`,a.`modified_Date`,a.`create_Date`,a.`picture`,a.`address`, a.`church_Name`, b.`full_name` AS 'CreatedBy',c.`regDesc` AS `Region`,d.`citymunDesc` AS `City`,e.`brgyDesc` AS `Barangay`,f.`provDesc` AS `Province`,CONCAT(g.`firstName`,' ',g.`lastName`) AS 'Pastor',h.`full_name` AS 'ModifiedBy' FROM `churches` a left join `users` b ON b.`id`=a.`created_By` left join `ph_region` c ON c.`id`=a.`region_Id` left join `ph_citymun` d ON d.`id`=a.`city_Id` left join `ph_brgy` e ON e.`id`=a.`brgy_Id` left join `ph_province` f ON f.`id`=a.`province_Id` left join `pastors` g ON g.`id`=a.`pastor_Id` left join `users` h ON h.`id`=a.`modified_By` order by create_Date DESC, modified_Date DESC")->result();
		return $result;
	}	

	function getLastChurch($cId){
		$result = $this->db->query("SELECT a.`googleMapLocation`,g.`pastorswife`,a.`schedule`,g.`emails`,g.`contacts`,g.`photo` AS 'PastorPhoto',a.`picture` AS 'ChurchPhoto',a.`address`, a.`church_Name`, c.`regDesc` AS `Region`,d.`citymunDesc` AS `City`,e.`brgyDesc` AS `Barangay`,f.`provDesc` AS `Province`,CONCAT(g.`firstName`,' ',g.`lastName`) AS 'Pastor' FROM `churches` a left join `users` b ON b.`id`=a.`created_By` left join `ph_region` c ON c.`id`=a.`region_Id` left join `ph_citymun` d ON d.`id`=a.`city_Id` left join `ph_brgy` e ON e.`id`=a.`brgy_Id` left join `ph_province` f ON f.`id`=a.`province_Id` left join `pastors` g ON g.`id`=a.`pastor_Id` left join `users` h ON h.`id`=a.`modified_By` WHERE a.`church_Id`=$cId ")->result();
		return $result;
	}		
	
	// function getBarangays(){
	// 	$result = $this->db->query("select id,brgyDesc from ph_brgy order by brgyDesc ASC")->result();
	// 	return $result;
	// }	

	// function getRegions(){
	// 	$result = $this->db->query("select id,regDesc from ph_region order by regDesc ASC")->result();
	// 	return $result;
	// }	

	// function getCities(){
	// 	$result = $this->db->query("select id,citymunDesc from ph_citymun order by citymunDesc ASC")->result();
	// 	return $result;
	// }	

	// function getProvinces(){
	// 	$result = $this->db->query("select id,provDesc from ph_province order by provDesc ASC")->result();
	// 	return $result;
	// }	

}
?>
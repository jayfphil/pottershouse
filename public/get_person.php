<?php
mysql_connect("localhost","root","");
mysql_select_db("syntech_crm");

$company_id = $_GET['company_id'];

if(!empty($company_id)){
	$ad_sc = mysql_query("select * from contact_person WHERE company_id = '$company_id' ORDER BY contact_person_name ASC");
	$data = '<option value="">----- Select -----</option>';
	while($row_sc  = @mysql_fetch_array($ad_sc)){
		$id        = $row_sc['id'];
		$contact_person_name = $row_sc['contact_person_name'];
		$data = $data . '<option value="'.$id.'">'.$contact_person_name.'</option>';	
	}
	if(mysql_num_rows($ad_sc) > 0):
		echo '
		<select name="contact_person_id" id="contact_person_id"  style="border:1px solid #CCC; width:200px; height:35px;">
		  '.$data.'
		</select>';
        else:
		echo '
		<select name="contact_person_id" id="contact_person_id" style="border:1px solid #CCC; width:200px; height:35px;">
		  <option value="">--- No Person Found ---</option>
		</select>';
       endif;	
  }  
else
{
echo "";
}
?>
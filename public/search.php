<?php

$q = strtolower($_GET["q"]);
if (!$q) return;
mysql_connect("localhost","root","");
//mysql_connect("localhost","website_property","sanchoy");
mysql_select_db("website_ukproperty");
$ad_sc = mysql_query("select * from client_company");
	
	while($row_sc = mysql_fetch_array($ad_sc)){
		$company_name = $row_sc['company_name'];
		if (strpos(strtolower($company_name), $q) !== false) {
			echo "$company_name\n";
		}
	}

?>
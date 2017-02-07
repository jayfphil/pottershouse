<?php

$q = strtolower($_GET["q"]);
if (!$q) return;
mysql_connect("localhost","root","");
//mysql_connect("localhost","website_property","sanchoy");
mysql_select_db("website_ukproperty");
$ad_sc = mysql_query("select * from countries");
	
	while($row_sc = mysql_fetch_array($ad_sc)){
		$country_name = $row_sc['country_name'];
		if (strpos(strtolower($country_name), $q) !== false) {
			echo "$country_name\n";
		}
	}

?>
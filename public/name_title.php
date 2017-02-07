<?php

$q = strtolower($_GET["q"]);
if (!$q) return;
mysql_connect("localhost","root","");
//mysql_connect("localhost","website_property","sanchoy");
mysql_select_db("pottershouse");
$ad_sc = mysql_query("select * from users");
	
	while($row_sc = mysql_fetch_array($ad_sc)){
		$name_title = $row_sc['name_title'];
		if (strpos(strtolower($name_title), $q) !== false) {
			echo "$name_title\n";
		}
	}

?>

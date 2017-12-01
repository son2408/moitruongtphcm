<?php
include("config.inc.php");



$thoigian= pg_query($link, "SELECT DISTINCT thoigian 
	from wqi_hcm_2014_thang WHERE tentram =  "."'".$_POST['station_name']."'" );

$arr = pg_fetch_all($thoigian);
	echo json_encode($arr);
?>
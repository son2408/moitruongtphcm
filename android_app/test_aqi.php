<?php
include("config.inc.php");

$thoigian= pg_query($link, "select thoigian from aqi_hcm_thang3_2011");
$mang =array();

while($row = pg_fetch_row($ketqua)){
	$aqi 		= 	$row[0];
	$thoigian 	= 	$row[1];

$arr = pg_fetch_all($ketqua);
	echo json_encode($arr);
?>
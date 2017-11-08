<?php
include("config.inc.php");

$thoigian= pg_query($link, "select thoigian from aqi_hcm_thang3_2011");
$mang =array();

$arr = pg_fetch_all($ketqua);
	echo json_encode($arr);
?>
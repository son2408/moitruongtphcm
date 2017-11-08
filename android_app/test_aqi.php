<?php
include("config.inc.php");

$thoigian= pg_query($link, "SELECT DISTINCT thoigian, tentram from aqi_hcm_thang3_2011_ngay");
$arr = pg_fetch_all($thoigian);
	echo json_encode($arr);
?>
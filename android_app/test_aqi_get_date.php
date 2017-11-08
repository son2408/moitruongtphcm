<?php
include("config.inc.php");

$tentram = $_POST["station_name"]

$thoigian= pg_query($link, "SELECT DISTINCT thoigian from aqi_hcm_thang3_2011_ngay WHERE tentram = ".$tentram  );
$arr = pg_fetch_all($thoigian);
	echo json_encode($arr);
?>
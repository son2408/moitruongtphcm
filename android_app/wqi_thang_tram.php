<?php
include("config.inc.php");


$tentram = $_POST['station_name'];
$thoigian = $_POST['time'];

$wqi= pg_query($link, "SELECT x, y, wqi_tram
						from wqi_hcm_2014_thang
						WHERE tentram = "."'".$tentram."'".
						" and thoigian = "."'".$thoigian."'");
$arr = pg_fetch_all($wqi);
	echo json_encode($arr);
?>
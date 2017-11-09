<?php
include("config.inc.php");


$tentram = $_POST['station_name'];
$thoigian = $_POST['time'];

$aqi= pg_query($link, "SELECT  aqi_ngay_tram from aqi_hcm_thang3_2011_ngay WHERE
	tentram = "."'"."An Sương"."'"." and thoigian = "."'"."2011-03-02"."'");
$arr = pg_fetch_all($aqi);
	echo json_encode($arr);
?>
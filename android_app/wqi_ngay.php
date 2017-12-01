<?php
include("config.inc.php");
$tentram = 'Cát Lái';//$_POST['station_name'];
$month = 9;//$_POST['month'];
$year = 2014;//$_POST['year'];

$aqi= pg_query($link, "SELECT * from wqi_hcm_2014 where tentram = "."'".$tentram."'"." and Extract(month from thoigian) = ".$month." and Extract(year from thoigian) = ".$year );

$arr = pg_fetch_all($aqi);
	echo json_encode($arr);
?>
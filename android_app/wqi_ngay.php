<?php
include("config.inc.php");
// $tentram = $_POST['station_name'];
// $month = $_POST['month'];
// $year = $_POST['year'];

$aqi= pg_query($link, "SELECT * from wqi_hcm_2014 where Extract(month from thoigian) = 9 and Extract(year from thoigian) = 2014 ");


$arr = pg_fetch_all($aqi);
	echo json_encode($arr);
?>
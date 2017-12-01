<?php
include("config.inc.php");

$tentram= pg_query($link, "SELECT DISTINCT tentram from wqi_hcm_2014_thang");
$arr = pg_fetch_all($tentram);
	echo json_encode($arr);
?>
<?php
include("config.inc.php");


$sql = "select * from anh"; 



$ketqua= pg_query($link, $sql);
$mang = array();
while($row = pg_fetch_row($ketqua)){
	$link = $row[1];
	$ngay = $row[2];
	
	array_push ($mang, new Anh ($link, $ngay));
	
}
	echo json_encode($mang);
	
	class Anh {
	var $link;
	
	var $ngay;
		Function Anh ($l, $n){
			$this->link = $l;
			$this->ngay = $n;
		
		}	
	}

	
?> 

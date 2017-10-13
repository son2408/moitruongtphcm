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
	echo str_replace('\n','', (json_encode($mang, JSON_UNESCAPED_SLASHES )));
	
	class Anh {
	var $link;
	
	var $ngay;
		Function Anh ($l, $n){
			$this->link = $l;
			$this->ngay = $n;
		
		}	
	}

	
?> 

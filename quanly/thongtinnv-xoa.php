<?php
$tentk = '';
if(isset($_GET['tentaikhoan'])){
	$tentk = $_GET['tentaikhoan'];
}
require("../conn.php");
$delete_data= " DELETE from taikhoan where tentaikhoan='$tentk'";
$result =pg_query($conn,"$delete_data");
if($result== true){
	echo "<h3>Bạn đã xóa dữ liệu thành công, bấm vào"."<a href=\"dashboard.php?username=admin&active=thongtinnv\"> đây </a>". "để quay lại !</h3>";
}
 
?>

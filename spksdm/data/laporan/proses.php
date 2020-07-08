<?php
include"../../../appConfig/conn.php";	
	
$t=$_POST['2019'];
if($_POST['op_lap']=='semua' ){
	
	 
   header('location:cetak1.php?thn=$_POST[2019]');
	
}elseif($_POST['op_lap']=='hasil' and $_POST['tahun'] )  {
	 header('location:cetak2.php?thn=$t');
}else{
}
?>



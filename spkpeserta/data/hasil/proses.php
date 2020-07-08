<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	include"../../../appConfig/upFile.php";
	$loadPage= $_GET['load'];
	$action =$_GET['action'];
	
	
	
	 
	 
	 
	 
	 
	 
	if($loadPage=="hasil" AND $action=="hapusData"){
		
		mysqli_query($koneksi,"DELETE FROM hasil WHERE id_calon='$_GET[id]'")or die (mysqli_error());
		
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?load=member')
	</script>
	";
		
		
		
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?load=member')
		</script>
		
		";
		}
<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	include"../../../appConfig/upFile.php";
	
$cariData =mysqli_query($koneksi,"SELECT * FROM tpengguna WHERE emailPengguna='$_POST[txtemail]'");
$ketemu=mysqli_num_rows($cariData);
if($ketemu > 0){
	echo"
	<script language='javascript'>
		window.alert('Email : $_POST[txtemail] Sudah Terdaftar !! Silahkan Hubungi Bagian Administrasi');
		window.location=('../../frame.php?load=pengguna')
		</script>
	";
	
	
	}else{

		$tgl=date("Ymd");
		 $addres_file = $_FILES['upPhoto']['tmp_name'];
		  $tipe_file   = $_FILES['upPhoto']['type'];
		  $filename    = $_FILES['upPhoto']['name'];
		  $enkrip	   = $filename;
		  $filenameenkrip =$filename;
		  
		
		 $tgl=date('Y');
	  if(empty($addres_file)){
		  $SQL="INSERT INTO tpengguna (kdPengguna,username,password,nmPengguna,foto,emailPengguna,alamatPengguna,kontak,aktif,level) 
		VALUES ('$_POST[idp]','$_POST[txtuser]','$_POST[txtpass]','$_POST[txtNmLengkap]','$filename','$_POST[txtemail]','$_POST[txtAlamat]','$_POST[txtKontak]','Y','$_POST[level] ')";
	mysqli_query($koneksi,$SQL) or die (mysql_error());
	
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=pengguna')
	</script>
	";
	 }else{
		   if($tipe_file !="image/jpg" AND $tipe_file != "image/jpeg"){
	
	echo"
				  <script language='javascript'>
				  window.alert('Upload Gambar Gagal Pastikan File Bertipe JPEG');
	window.location=('../../frame.php?load=pengguna')
	</script>
	";
	
		   }else{
		
				 upAvatar($filename);
					mysqli_query($koneksi,"INSERT INTO tpengguna (kdPengguna,username,password,nmPengguna,foto,emailPengguna,alamatPengguna,kontak,aktif,level) 
		VALUES ('$_POST[idp]','$_POST[txtuser]','$_POST[txtpass]','$_POST[txtNmLengkap]','$filename','$_POST[txtemail]','$_POST[txtAlamat]','$_POST[txtKontak]','Y','$_POST[level]')")or die(mysql_error());
							
		
	echo"
		<script language='javascript'>
		window.alert('Data Berhasil Disimpan');
		window.location=('../../frame.php?load=pengguna')
		</script>
		";
				  }
									  
		  
		  
	
	 }
		}
}




?>
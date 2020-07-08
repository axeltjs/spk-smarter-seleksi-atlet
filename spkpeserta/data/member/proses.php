<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	include"../../../appConfig/upFile.php";
	$loadPage= $_GET['load'];
	$action =$_GET['action'];
	$tgl=date('Y');
	
	
	
	
	 
	 
	 
	 
	 
	 
	if($loadPage=="member" AND $action=="simpanData"){
	
	
	
	$SQL="INSERT INTO peserta (id_calon,nama,tgl_lhr,tempat_lhr,jenkel,alamat,no_hp,tgl_input,jpendidikan,usia,pengalaman,nilaites,wawancara,kesehatan) 
		VALUES ('$_POST[idp]','$_POST[txtNmLengkap]','$_POST[txttgllhr]','$_POST[txttmptlhr]','$_POST[jk]','$_POST[txtAlamat]','$_POST[txtKontak]','$tgl','$_POST[txtjp]','$_POST[txtusia] ','$_POST[pengalaman]','$_POST[txtnilaites]','$_POST[txtwawancara]','$_POST[txtmcu]')";
	mysqli_query($koneksi,$SQL) or die (mysql_error());
	$SQL2="INSERT INTO perhitungan (id_calon,nama,status,jpendidikan,usia,pengalaman,nilaites,wawancara,kesehatan) 
		VALUES ('$_POST[idp]','$_POST[txtNmLengkap]','BELUM DIPROSES','$_POST[txtjp]','$_POST[txtusia]','$_POST[pengalaman]','$_POST[txtnilaites]','$_POST[txtwawancara]','$_POST[txtmcu]')";
	mysqli_query($koneksi,$SQL2) or die (mysql_error());
	
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
	}elseif($loadPage=="member" AND $action=="hapusData"){
		
		mysqli_query($koneksi,"DELETE FROM peserta WHERE id_calon='$_GET[id]'")or die (mysql_error());
		mysqli_query($koneksi,"DELETE FROM perhitungan WHERE id_calon='$_GET[id]'")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?load=member')
	</script>
	";
		
		
		
	}elseif($loadPage=="member" AND $action=="aktif"){
	
	
		
		
		$SQL5="UPDATE peserta SET aktif='Y' where id_calon='$_GET[id]'";
	mysqli_query($koneksi,$SQL5) or die (mysql_error());
	
	
	echo"
	<script language='javascript'>
	window.alert('Akun Berhasil Di aktifkan');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
		
			
		}
		elseif($loadPage=="member" AND $action=="tidak"){
	
	
		
		
		$SQL5="UPDATE peserta SET aktif='N' where id_calon='$_GET[id]'";
	mysqli_query($koneksi,$SQL5) or die (mysql_error());
	
	
	echo"
	<script language='javascript'>
	window.alert('Akun Berhasil Di Non aktifkan');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
		
			
		}
	elseif($loadPage=="member" AND $action=="ubahData"){
	
	
		  
		
		 
		  
		 
		 
		
		 
		  
		  $addres_file2 = $_FILES['upPhoto2']['tmp_name'];
		  $tipe_file2   = $_FILES['upPhoto2']['type'];
		  $filename2    = $_FILES['upPhoto2']['name'];
		  
		  
		  $addres_file5 = $_FILES['upPhoto5']['tmp_name'];
		  $tipe_file5   = $_FILES['upPhoto5']['type'];
		  $filename5    = $_FILES['upPhoto5']['name'];
		  
		 $addres_file6 = $_FILES['upPhoto6']['tmp_name'];
		  $tipe_file6   = $_FILES['upPhoto6']['type'];
		  $filename6    = $_FILES['upPhoto6']['name'];
		  
		 $addres_file9 = $_FILES['upPhoto9']['tmp_name'];
		  $tipe_file9   = $_FILES['upPhoto9']['type'];
		  $filename9    = $_FILES['upPhoto9']['name'];
		  
		  
		   $addres_file44 = $_FILES['upPhoto44']['tmp_name'];
		  $tipe_file44   = $_FILES['upPhoto44']['type'];
		  $filename44    = $_FILES['upPhoto44']['name'];
		  
		  
		  
		  $addres_file = $_FILES['upPhoto']['tmp_name'];
		  $tipe_file   = $_FILES['upPhoto']['type'];
		  $filename    = $_FILES['upPhoto']['name'];
		 
	
		
		  $addres_file1 = $_FILES['upPhoto1']['tmp_name'];
		  $tipe_file1   = $_FILES['upPhoto1']['type'];
		  $filename1    = $_FILES['upPhoto1']['name'];
		
		$addres_fileblm = $_FILES['upPhotoblm']['tmp_name'];
		  $tipe_fileblm   = $_FILES['upPhotoblm']['type'];
		  $filenameblm    = $_FILES['upPhotoblm']['name'];
		  
		  
		  
		  $tgllhr= $_POST['txttgllhr'];
	      $rubah = date_format(date_create($tgllhr),'Y');
		  $thn_skrg = date('Y');
		  $usia = $thn_skrg - $rubah;
		
	
		if(empty($_POST['upPhoto2'])){
				 $SQL="UPDATE peserta SET 
					skck='$filename6',
					   transkrip='$filename44 ',
					   
						buktip='nofoto.jpg',
						
                           		nama='$_POST[txtNmLengkap]',
								  
								  tgl_lhr='$_POST[txttgllhr]',
								  tempat_lhr='$_POST[txttmptlhr]',
								  jenkel='$_POST[jk]',
								 
								  alamat='$_POST[txtAlamat]',
								  no_hp='$_POST[txtkontak]',
								  jpendidikan='$_POST[txtjp]',
								  usia='$usia',
								  validasi ='SIAP',
								  pengalaman='$_POST[pengalaman]'
								  
		  WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=dashboard')
	</script>
	";
				  }
	else{
				upLapangan4($filename6);
				upLapangan2($filename44);
				
				upLapangan3($filename2);
				
					$SQL="UPDATE peserta SET 
					skck='$filename6',
					   transkrip='$filename44 ',
					   
						buktip='$filename2',
						
                           		nama='$_POST[txtNmLengkap]',
								  
								  tgl_lhr='$_POST[txttgllhr]',
								  tempat_lhr='$_POST[txttmptlhr]',
								  jenkel='$_POST[jk]',
								 
								  alamat='$_POST[txtAlamat]',
								  no_hp='$_POST[txtkontak]',
								  jpendidikan='$_POST[txtjp]',
								  usia='$usia',
								  validasi ='SIAP',
								  pengalaman='$_POST[pengalaman]'
								  
		  WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=dashboard')
	</script>
	";
	
	}
		
		
				
				 
				
				 if($tipe_file6 !="image/jpg" AND $tipe_file44 != "image/jpeg"AND $tipe_file2 != "image/JPG"AND $tipe_file5 != "image/JPG"){
				  echo"
				  <script language='javascript'>
				  window.alert('Upload Gambar Gagal Pastikan File Bertipe JPEG');
				  window.location=('../../frame.php?load=member&action=edit&id=$_POST[id]')
				  </script>
				  ";
				  }
	else{
				upLapangan4($filename6);
				upLapangan2($filename44);
				
				upLapangan3($filename2);
				
					$SQL="UPDATE peserta SET 
					skck='$filename6',
					   transkrip='$filename44 ',
					   
						buktip='$filename2',
						
                           		nama='$_POST[txtNmLengkap]',
								  
								  tgl_lhr='$_POST[txttgllhr]',
								  tempat_lhr='$_POST[txttmptlhr]',
								  jenkel='$_POST[jk]',
								 
								  alamat='$_POST[txtAlamat]',
								  no_hp='$_POST[txtkontak]',
								  jpendidikan='$_POST[txtjp]',
								  usia='$usia',
								  validasi ='SIAP',
								  pengalaman='$_POST[pengalaman]'
								  
		  WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=dashboard')
	</script>
	";
	
	}
				 if($tipe_file5 !="image/jpg" AND $tipe_file5 != "image/jpeg"AND $tipe_file5 != "image/JPG"){
				  echo"
				  <script language='javascript'>
				  window.alert('Upload Gambar Gagal Pastikan File Bertipe JPEG');
				  window.location=('../../frame.php?load=member&action=edit&id=$_POST[id]')
				  </script>
				  ";
				  }
	else{
				upLapangan5($filename5);
				upLapangan1($filename);
				upLapanganblm($filenameblm);
					$SQL="UPDATE peserta SET  
					ktp='$filename5',
                    cv='$filename',  
                     blm_nikah='$filenameblm',    					
                           		nama='$_POST[txtNmLengkap]',
								  
								  tgl_lhr='$_POST[txttgllhr]',
								  tempat_lhr='$_POST[txttmptlhr]',
								  jenkel='$_POST[jk]',
								 
								  alamat='$_POST[txtAlamat]',
								  no_hp='$_POST[txtkontak]',
								  jpendidikan='$_POST[txtjp]',
								  usia='$usia',
								   validasi ='SIAP',
								  pengalaman='$_POST[pengalaman]'
								  
		  WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=dashboard')
	</script>
	";
	
	
	} if($tipe_file9 !="image/jpg" AND $tipe_file9 != "image/jpeg" AND $tipe_file9 != "image/JPG"){
				  echo"
				  <script language='javascript'>
				  window.alert('Upload Gambar Gagal Pastikan File Bertipe JPEG');
				  window.location=('../../frame.php?load=member&action=edit&id=$_POST[id]')
				  </script>
				  ";
				  }else{
					  
				upLapangan6($filename9);
				upLapangan($filename1);
					$SQL="UPDATE peserta SET 
                      suratkesehatan='$filename9',
                      ijazah='$filename1', 					  
                           		nama='$_POST[txtNmLengkap]',
								  
								  tgl_lhr='$_POST[txttgllhr]',
								  tempat_lhr='$_POST[txttmptlhr]',
								  jenkel='$_POST[jk]',
								 
								  alamat='$_POST[txtAlamat]',
								  no_hp='$_POST[txtkontak]',
								  jpendidikan='$_POST[txtjp]',
								  usia='$usia',
								   validasi ='SIAP',
								  pengalaman='$_POST[pengalaman]'
								  
		  WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=dashboard')
	</script>
	";
	
	}

	
	}
}

		
	else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?load=member')
		</script>
		
		";
		}
		
?>
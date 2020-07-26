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
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
	$SQL2="INSERT INTO perhitungan (id_calon,nama,status,jpendidikan,usia,pengalaman,nilaites,wawancara,kesehatan) 
		VALUES ('$_POST[idp]','$_POST[txtNmLengkap]','BELUM DIPROSES','$_POST[txtjp]','$_POST[txtusia]','$_POST[pengalaman]','$_POST[txtnilaites]','$_POST[txtwawancara]','$_POST[txtmcu]')";
	mysqli_query($koneksi,$SQL2) or die (mysqli_error($koneksi));
	
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
	}elseif($loadPage=="member" AND $action=="hapusData"){
		
		mysqli_query($koneksi,"DELETE FROM peserta WHERE id_calon='$_GET[id]'")or die (mysqli_error($koneksi));
		mysqli_query($koneksi,"DELETE FROM perhitungan WHERE id_calon='$_GET[id]'")or die (mysqli_error($koneksi));
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?load=member')
	</script>
	";
		
		
		
	}elseif($loadPage=="member" AND $action=="aktif"){
	
	
		
		
		$SQL5="UPDATE peserta SET aktif='Y' where id_calon='$_GET[id]'";
	mysqli_query($koneksi,$SQL5) or die (mysqli_error($koneksi));
	
	
	echo"
	<script language='javascript'>
	window.alert('Akun Berhasil Di aktifkan');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
		
			
		}
		elseif($loadPage=="member" AND $action=="tidak"){
	
	
		
		
		$SQL5="UPDATE peserta SET aktif='N' where id_calon='$_GET[id]'";
	mysqli_query($koneksi,$SQL5) or die (mysqli_error($koneksi));
	
	
	echo"
	<script language='javascript'>
	window.alert('Akun Berhasil Di Non aktifkan');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
		
			
		}
	elseif($loadPage=="member" AND $action=="ubahData"){
	
		  $addres_kk 	= $_FILES['kk']['tmp_name'];
		  $tipe_kk   	= $_FILES['kk']['type'];
		  $filename_kk  = $_FILES['kk']['name'];
		  
		  $addres_file5 = $_FILES['upPhoto5']['tmp_name'];
		  $tipe_file5   = $_FILES['upPhoto5']['type'];
		  $filename5    = $_FILES['upPhoto5']['name'];
		  
		 $addres_file9 = $_FILES['upPhoto9']['tmp_name'];
		  $tipe_file9   = $_FILES['upPhoto9']['type'];
		  $filename9    = $_FILES['upPhoto9']['name'];
		  
		  $addres_file = $_FILES['upPhoto']['tmp_name'];
		  $tipe_file   = $_FILES['upPhoto']['type'];
		  $filename    = $_FILES['upPhoto']['name'];
		 
		  $addres_file1 = $_FILES['upPhoto1']['tmp_name'];
		  $tipe_file1   = $_FILES['upPhoto1']['type'];
		  $filename1    = $_FILES['upPhoto1']['name'];
		  
		  $tgllhr= $_POST['txttgllhr'];
	      $rubah = date_format(date_create($tgllhr),'Y');
		  $thn_skrg = date('Y');
		  $usia = $thn_skrg - $rubah;
		
		  //   if($tipe_kk != "image/jpg" AND $tipe_kk != "image/jpeg"){
		// 	echo"
		// 		<script language='javascript'>
		// 		window.alert('Upload Gambar KK Gagal Pastikan File Bertipe JPEG atau JPG');
		// 		window.location=('../../frame.php?load=member&action=edit&id=$_POST[id]')
		// 		</script>
		// 	";
		// 	}


		if(isset($filename_kk)){
			upLapangan4($filename_kk);
		}

		  $SQL="UPDATE peserta SET 
		  		agama = '$_POST[agama]',
		 		kk ='$filename_kk' 
		  WHERE id_calon='$_POST[id]'";	
		  mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));

	
		if(empty($_POST['upPhoto2'])){
				 $SQL="UPDATE peserta SET 					   
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
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=dashboard')
	</script>
	";
				  }
	else{				
				
					$SQL="UPDATE peserta SET 
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
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
		 
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
				
					$SQL="UPDATE peserta SET 
					   
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
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
		 
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
				if(isset($filename5)){
					upLapangan5($filename5);
				}

				if(isset($filename)){
					upLapangan1($filename);
				}
					$SQL="UPDATE peserta SET  
					ktp='$filename5',
                    cv='$filename',  
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
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
		 
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
				if(isset($filename9)){
					upLapangan6($filename9);
				}
				if(isset($filename1)){
					upLapangan($filename1);
				}

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
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
		 
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
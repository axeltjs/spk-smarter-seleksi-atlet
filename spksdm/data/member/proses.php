<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	include"../../../appConfig/upFile.php";
	$loadPage= $_GET['load'];
	$action =$_GET['action'];
	$tgl=date('Y');
	
	
	
	 
	 
	 
	 
	 
	if($loadPage=="member" AND $action=="simpanData" ){
	
	
	$SQL="INSERT INTO peserta (id_calon,nama,tgl_lhr,tempat_lhr,jenkel,alamat,no_hp,tgl_input,jpendidikan,usia,pengalaman,nilaites,wawancara,kesehatan) 
		VALUES ('$_POST[idp]','$_POST[txtNmLengkap]','$_POST[txttgllhr]','$_POST[txttmptlhr]','$_POST[jk]','$_POST[txtAlamat]','$_POST[txtKontak]','$tgl','$_POST[txtjp]','$_POST[txtusia] ','$_POST[pengalaman]','$_POST[txtnilaites]','$_POST[txtwawancara]','$_POST[txtmcu]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
	$SQL2="INSERT INTO perhitungan (id_calon,nama,status,jpendidikan,usia,pengalaman,nilaites,wawancara,kesehatan) 
		VALUES ('$_POST[idp]','$_POST[txtNmLengkap]','BELUM DIPROSES','$_POST[txtjp]','$_POST[txtusia]','$_POST[pengalaman]','$_POST[txtnilaites]','$_POST[txtwawancara]','$_POST[txtmcu]')";
	mysqli_query($koneksi,$SQL2) or die (mysqli_error());
	
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
	
	
   
	
	}
	elseif($loadPage=="member" AND $action=="hapusData"){
		
		mysqli_query($koneksi,"DELETE FROM peserta WHERE id_calon='$_GET[id]'")or die (mysqli_error());
		mysqli_query($koneksi,"DELETE FROM perhitungan WHERE id_calon='$_GET[id]'")or die (mysqli_error());
		mysqli_query($koneksi,"DELETE FROM hasil WHERE id_calon='$_GET[id]'")or die (mysqli_error());
		mysqli_query($koneksi,"DELETE FROM utility WHERE id_calon='$_GET[id]'")or die (mysqli_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?load=member')
	</script>
	";
		
		
		
	}elseif($loadPage=="member" AND $action=="aktif"){
	
	
		
		
		$SQL5="UPDATE peserta SET aktif='Y' where id_calon='$_GET[id]'";
	mysqli_query($koneksi,$SQL5) or die (mysqli_error());
	
	
	echo"
	<script language='javascript'>
	window.alert('Akun Berhasil Di aktifkan');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
		
			
		}
		elseif($loadPage=="member" AND $action=="tidak"){
	
	
		
		
		$SQL5="UPDATE peserta SET aktif='N' where id_calon='$_GET[id]'";
	mysqli_query($koneksi,$SQL5) or die (mysqli_error());
	
	
	echo"
	<script language='javascript'>
	window.alert('Akun Berhasil Di Non aktifkan');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
		
			
		}elseif($loadPage=="member" AND $action=="ubahData" AND $_POST['txtnilaites'] < 60 ){
			
			echo"
	<script language='javascript'>
	window.alert('Nilai tes tidak boleh kurang dari 60');
	window.location=('../../frame.php?load=member')
	</script>
	";
		}
	elseif($loadPage=="member" AND $action=="ubahData" AND $_POST['txtwawancara'] =='Sangat Komunikatif' ){
	
	
		
		$SQL1="UPDATE peserta SET 
		validasi1='ACC',
		validasi='SIAP1',
                            		nama='$_POST[txtNmLengkap]',
								  
								  tgl_lhr='$_POST[txttgllhr]',
								  tempat_lhr='$_POST[txttmptlhr]',
								  jenkel='$_POST[jk]',
								 
								  alamat='$_POST[txtAlamat]',
								  no_hp='$_POST[txtkontak]',
								  jpendidikan='$_POST[txtjp]',
								  usia='$_POST[txtusia]',
								  pengalaman='$_POST[pengalaman]',
								  nilaites='$_POST[txtnilaites]',
								 wawancara='$_POST[txtwawancara]',
								  kesehatan='$_POST[txtmcu]',
								  n1='$_POST[txtn1]',
								  n2='$_POST[txtn2]',
								  n3='$_POST[txtn3]',
								    n4='90'
								  
			WHERE id_calon='$_POST[id]'";
	mysqli_query($koneksi,$SQL1) or die (mysqli_error());
	
	$SQL3="UPDATE perhitungan SET nama='$_POST[txtNmLengkap]',
								
								  status='BELUM DIPROSES',

								  jpendidikan='$_POST[txtjp]',
								  usia='$_POST[txtusia]',
								  pengalaman='$_POST[pengalaman]',
								  nilaites='$_POST[txtnilaites]',
								 wawancara='$_POST[txtwawancara]',
								  kesehatan='$_POST[txtmcu]'
			WHERE id_calon='$_POST[id]'";
	mysqli_query($koneksi,$SQL3) or die (mysqli_error());
	
	
		
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Divalidasi');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
		
			
		}
elseif($loadPage=="member" AND $action=="ubahData" AND $_POST['txtnilaites'] < 60 ){
			
			echo"
	<script language='javascript'>
	window.alert('Nilai tes tidak boleh kurang dari 60');
	window.location=('../../frame.php?load=member')
	</script>
	";
		}
	elseif($loadPage=="member" AND $action=="ubahData" AND $_POST['txtwawancara'] =='Komunikatif' ){
	
	
		
		$SQL1="UPDATE peserta SET 
		validasi1='ACC',
		validasi='SIAP1',
                            		nama='$_POST[txtNmLengkap]',
								  
								  tgl_lhr='$_POST[txttgllhr]',
								  tempat_lhr='$_POST[txttmptlhr]',
								  jenkel='$_POST[jk]',
								 
								  alamat='$_POST[txtAlamat]',
								  no_hp='$_POST[txtkontak]',
								  jpendidikan='$_POST[txtjp]',
								  usia='$_POST[txtusia]',
								  pengalaman='$_POST[pengalaman]',
								  nilaites='$_POST[txtnilaites]',
								 wawancara='$_POST[txtwawancara]',
								  kesehatan='$_POST[txtmcu]',
								  n1='$_POST[txtn1]',
								  n2='$_POST[txtn2]',
								   n3='$_POST[txtn3]',
								    n4='80'
								  
			WHERE id_calon='$_POST[id]'";
	mysqli_query($koneksi,$SQL1) or die (mysqli_error());
	
	$SQL3="UPDATE perhitungan SET nama='$_POST[txtNmLengkap]',
								
								  status='BELUM DIPROSES',

								  jpendidikan='$_POST[txtjp]',
								  usia='$_POST[txtusia]',
								  pengalaman='$_POST[pengalaman]',
								  nilaites='$_POST[txtnilaites]',
								 wawancara='$_POST[txtwawancara]',
								  kesehatan='$_POST[txtmcu]'
			WHERE id_calon='$_POST[id]'";
	mysqli_query($koneksi,$SQL3) or die (mysqli_error());
	
	
		
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Divalidasi');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
		
			
		}	
elseif($loadPage=="member" AND $action=="ubahData" AND $_POST['txtnilaites'] < 60 ){
			
			echo"
	<script language='javascript'>
	window.alert('Nilai tes tidak boleh kurang dari 60');
	window.location=('../../frame.php?load=member')
	</script>
	";
		}
	elseif($loadPage=="member" AND $action=="ubahData" AND $_POST['txtwawancara'] =='Tidak Komunikatif' ){
	
	
		
		$SQL1="UPDATE peserta SET 
		validasi1='ACC',
		validasi='SIAP1',
                            		nama='$_POST[txtNmLengkap]',
								  
								  tgl_lhr='$_POST[txttgllhr]',
								  tempat_lhr='$_POST[txttmptlhr]',
								  jenkel='$_POST[jk]',
								 
								  alamat='$_POST[txtAlamat]',
								  no_hp='$_POST[txtkontak]',
								  jpendidikan='$_POST[txtjp]',
								  usia='$_POST[txtusia]',
								  pengalaman='$_POST[pengalaman]',
								  nilaites='$_POST[txtnilaites]',
								 wawancara='$_POST[txtwawancara]',
								  kesehatan='$_POST[txtmcu]',
								  n1='$_POST[txtn1]',
								  n2='$_POST[txtn2]',
								   n3='$_POST[txtn3]',
								    n4='70'
								  
			WHERE id_calon='$_POST[id]'";
	mysqli_query($koneksi,$SQL1) or die (mysqli_error());
	
	$SQL3="UPDATE perhitungan SET nama='$_POST[txtNmLengkap]',
								
								  status='BELUM DIPROSES',

								  jpendidikan='$_POST[txtjp]',
								  usia='$_POST[txtusia]',
								  pengalaman='$_POST[pengalaman]',
								  nilaites='$_POST[txtnilaites]',
								 wawancara='$_POST[txtwawancara]',
								  kesehatan='$_POST[txtmcu]'
			WHERE id_calon='$_POST[id]'";
	mysqli_query($koneksi,$SQL3) or die (mysqli_error());
	
	
		
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Divalidasi');
	window.location=('../../frame.php?load=member')
	</script>
	";
	
		
			
		}		
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?load=member')
		</script>
		
		";
		}
?>
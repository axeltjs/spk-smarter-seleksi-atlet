<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	$loadPage= $_GET['load'];
	$action =$_GET['action'];
	
	
	$n1=$_POST['n1'];
	$n2=$_POST['n2'];
	$n3=$_POST['n3'];
	$n4=$_POST['n4'];

	// Declare the floats;
	$bobot_keminatan 		= 0.0;
	$bobot_usia 			= 0.0;
	$bobot_nilai_tes 		= 0.0;
	$bobot_kelengkapan 		= 0.0;
	$bobot_keterampilan 	= 0.0;
	$sub_bobot_keminatan 	= 0.0;
	$sub_bobot_usia 		= 0.0;
	$sub_bobot_nilai_tes 	= 0.0;
	$sub_bobot_kelengkapan 	= 0.0;
	$sub_bobot_keterampilan = 0.0;
	$utility_keminatan 		= 0.0;
	$utility_usia 			= 0.0;
	$utility_nilai_tes 		= 0.0;
	$utility_kelengkapan 	= 0.0;
	$utility_keterampilan 	= 0.0;
	$hasil_keminatan 		= 0.0;
	$hasil_usia 			= 0.0;
	$hasil_nilai_tes 		= 0.0;
	$hasil_kelengkapan 		= 0.0;
	$hasil_keterampilan 	= 0.0;
	
	$nama1				= $_POST['txtnama'];
	
	// nilai
	$nilai_keminatan 	= floatval($_POST['nilai_keminatan']);
	$nilai_usia			= floatval($_POST['nilai_usia']);
	$nilai_tes			= floatval($_POST['nilai_tes']);
	$nilai_kelengkapan	= floatval($_POST['nilai_kelengkapan']);
	$nilai_keterampilan	= floatval($_POST['nilai_keterampilan']);

	// bobot kriteria
	$bobot_keminatan 	= floatval($_POST['bobot_keminatan']);
	$bobot_usia			= floatval($_POST['bobot_usia']);
	$bobot_nilai_tes	= floatval($_POST['bobot_nilai_tes']);
	$bobot_kelengkapan	= floatval($_POST['bobot_kelengkapan']);
	$bobot_keterampilan	= floatval($_POST['bobot_keterampilan']);
	
	// bobot sub kriteria
	$sub_bobot_keminatan 	= floatval($_POST['sub_bobot_keminatan']);
	$sub_bobot_usia			= floatval($_POST['sub_bobot_usia']);
	$sub_bobot_nilai_tes	= floatval($_POST['sub_bobot_nilai_tes']);
	$sub_bobot_kelengkapan	= floatval($_POST['sub_bobot_kelengkapan']);
	$sub_bobot_keterampilan	= floatval($_POST['sub_bobot_keterampilan']);
	
	// utility
	$utility_keminatan   	= $bobot_keminatan * $sub_bobot_keminatan;
	$utility_usia 		 	= $bobot_usia * $sub_bobot_usia;
	$utility_nilai_tes 	 	= $bobot_nilai_tes * $sub_bobot_nilai_tes;
	$utility_kelengkapan 	= $bobot_kelengkapan * $sub_bobot_kelengkapan;
	$utility_keterampilan 	= $bobot_keterampilan * $sub_bobot_keterampilan;
	// hasil
	$hasil_keminatan 	= $utility_keminatan * 100;
	$hasil_usia 		= $utility_usia * 100;
	$hasil_nilai_tes 	= $utility_nilai_tes * 100;
	$hasil_kelengkapan 	= $utility_kelengkapan * 100;
	$hasil_keterampilan = $utility_keterampilan * 100;

	// ranking
	$rank = $hasil_keminatan + $hasil_usia + $hasil_nilai_tes + $hasil_kelengkapan + $hasil_keterampilan;

	$tgl=date('Y');
	
	if($loadPage=="hitung" AND $action=="prosesData" ){	
    $SQL="INSERT INTO utility (id_calon,nama,hasil) 
	VALUES 	('$_POST[id]', '$nama1', '$rank')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
	
	$SQL2="INSERT INTO hasil (id_calon,nama,usia,nilaites,thn_hitung,nreal,rank,ket,n1,n2,n3,n4,n5,k1,k2,k3,k4,k5,sk1,sk2,sk3,sk4,sk5,u1,u2,u3,u4,u5,h1,h2,h3,h4,h5) 
	VALUES 	('$_POST[id]',
	'$nama1',
	'$nilai_usia',
	'$nilai_tes',
	'$tgl',
	'100',
	'$rank',
	'PILIH KEPUTUSAN',
	'$nilai_keminatan',
	'$nilai_usia',
	'$nilai_tes',
	'$nilai_kelengkapan',
	'$nilai_keterampilan',
	'$bobot_keminatan',
	'$bobot_usia',
	'$bobot_nilai_tes',
	'$bobot_kelengkapan',
	'$bobot_keterampilan',
	'$sub_bobot_keminatan',
	'$sub_bobot_usia',
	'$sub_bobot_nilai_tes',
	'$sub_bobot_kelengkapan',
	'$sub_bobot_keterampilan',
	'$utility_keminatan',
	'$utility_usia',
	'$utility_nilai_tes',
	'$utility_kelengkapan',
	'$utility_keterampilan',
	'$hasil_keminatan',
	'$hasil_usia',
	'$hasil_nilai_tes',
	'$hasil_kelengkapan',
	'$hasil_keterampilan')";

	mysqli_query($koneksi,$SQL2) or die (mysqli_error($koneksi));
	
	$SQL="UPDATE peserta SET nama='$nama1',
							 status='SUDAH DIPROSES'
		                     WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
	
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihitung! ');
	window.location=('../../frame.php?load=hitung')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="ubahData"){
		  
	$SQL="UPDATE utility SET nama='$nama1',
							 hasil='$rank'
		                     WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}	
	}else{
		
		echo"
		<script language='javascript'>
		window.alert('Maaf Anda Tidak Dapat Melakukan Operasi CRUD');
		window.location=('../../frame.php?load=jadwal')
		</script>
		
		";
		}
?>
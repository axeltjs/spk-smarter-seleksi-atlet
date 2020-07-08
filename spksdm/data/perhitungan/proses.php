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
	
	
	$nama1	= $_POST['txtnama'];
	$kriteria1		=$_POST['jp'];
	$kriteria2	=$_POST['txtusia'];
	$kriteria3	=$_POST['pn'];
	$kriteria4	=$_POST['txtnilai'];
	$kriteria5	=$_POST['kb'];
	$kriteria6	=$_POST['kesehatan'];
	
	$bobotk1	=$_POST['k1'];
	$bobots1	=$_POST['s1'];
	$real1     =$_POST['r1'];
	
	
	$bobotk2	=$_POST['k2'];
	$bobots2	=$_POST['s2'];
	$real2     =$_POST['r2'];
	
	
	
	$bobotk3	=$_POST['k3'];
	$bobots3	=$_POST['sk1'];
	$real3    =$_POST['r3'];
	
	$bobotk4	=$_POST['k4'];
	$bobots4	=$_POST['sk4'];
	$real4    =$_POST['r4'];
	
	
	$bobotk5	=$_POST['k5'];
	$bobots5	=$_POST['sk7'];
	$real5    =$_POST['r5'];
	
	
	$bobotk6	=$_POST['k6'];
	$bobots6	=$_POST['sk10'];
	$real6    =$_POST['r6'];
	
	
					 
	$utilityjp1=$bobotk1*$bobots1;
	$u1=round($utilityjp1,2);
	$hasiljp3=$u1*$real1;
	
	
	
	
	$utilityusia1=$bobotk2*$bobots2;
	$u2=round($utilityusia1,2);
	$hasilusia4=$u2*$real3;
	
	$utilitypengalaman1=$bobotk3*$bobots3;
	$u3=round($utilitypengalaman1,2);
	$hasilpengalaman4=$u3*$real3;
	
	
	$utilitynilaites1=$bobotk4*$bobots4;
	$u4=round($utilitynilaites1,2);
	$hasilnilaites4=$u4*$real4;
	
	
	$utilitywawancara1=$bobotk5*$bobots5;
	$u5=round($utilitywawancara1,2);
	$hasilwawancara4=$u5*$real5;
	
	$utilitykesehatan1=$bobotk6*$bobots6;
	$u6=round($utilitykesehatan1,2);
	$hasilkesehatan4=$u6*$real6;
	
	
	
	
	
	
	
	
	
	$rank=$hasiljp3 + $hasilusia4 + $hasilpengalaman4 + $hasilnilaites4+$hasilwawancara4+$hasilkesehatan4;
	
	$tgl=date('Y');
	
	
	if($loadPage=="hitung" AND $action=="prosesData" ){	
    $SQL="INSERT INTO utility (id_calon,nama,hasil) 
	VALUES 	('$_POST[id]','$nama1','$rank')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
	
	$SQL2="INSERT INTO hasil (id_calon,nama,thn_hitung,jpendidikan,usia,pengalaman,nilaites,wawancara,kesehatan,nreal,rank,n1,n2,n3,n4,h1,h2,h3,h4,h5,h6,ket,u1,u2,u3,u4,u5,u6) 
	VALUES 	('$_POST[id]','$nama1','$tgl','$kriteria1','$kriteria2','$kriteria3','$kriteria4','$kriteria5','$kriteria6','100','$rank','$n1','$n2','$n3','$n4','$hasiljp3','$hasilusia4','$hasilpengalaman4','$hasilnilaites4',' $hasilwawancara4','$hasilkesehatan4','PILIH KEPUTUSAN','$u1','$u2','$u3','$u4','$u5','$u6')";
	mysqli_query($koneksi,$SQL2) or die (mysqli_error());
	
	$SQL="UPDATE peserta SET nama='$nama1',
	                             status='SUDAH DIPROSES',
								
							  jpendidikan='$kriteria1',
							 usia='$kriteria2',
							 pengalaman='$kriteria3',
							 nilaites='$kriteria4',
							 wawancara='$kriteria5',
							 kesehatan='$kriteria6'
							
		                     WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
	
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihitung $hasiljp3  $hasilusia4 $hasilpengalaman4  $hasilnilaites4   $hasilwawancara4 $hasilkesehatan4 ');
	window.location=('../../frame.php?load=hitung')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="ubahData"){
		  
	$SQL="UPDATE utility SET nama='$nama1',
							 hasil='$rank'
							 
							 
		                     WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
		 
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
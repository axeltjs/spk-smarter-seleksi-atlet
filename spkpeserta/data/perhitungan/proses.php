<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	$loadPage= $_GET['load'];
	$action =$_GET['action'];
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
	$bobots2	=$_POST['ss'];
	$real2     =$_POST['r2'];
	
	$bobotk2	=$_POST['k2'];
	$bobots3	=$_POST['s2'];
	$real3     =$_POST['r3'];
	$bobots4	=$_POST['ss1'];
	$real4    =$_POST['rr1'];
	$bobots5	=$_POST['ss2'];
	$real5    =$_POST['rr2'];
	
	$bobotk3	=$_POST['k3'];
	$bobots6	=$_POST['sk1'];
	$real6    =$_POST['rr3'];
	$bobots7	=$_POST['sk2'];
	$real7    =$_POST['rr4'];
	$bobots8	=$_POST['sk3'];
	$real8    =$_POST['rr5'];
	
	$bobotk4	=$_POST['k4'];
	$bobots9	=$_POST['sk4'];
	$real9    =$_POST['r4'];
	$bobots10	=$_POST['sk5'];
	$real10    =$_POST['rrr4'];
	$bobots11	=$_POST['sk6'];
	$real11    =$_POST['rrr5'];
	
	$bobotk5	=$_POST['k5'];
	$bobots12	=$_POST['sk7'];
	$real12    =$_POST['rrr6'];
	$bobots13	=$_POST['sk8'];
	$real13    =$_POST['rrr7'];
	$bobots14	=$_POST['sk9'];
	$real14    =$_POST['rrr8'];
	
	$bobotk6	=$_POST['k6'];
	$bobots15	=$_POST['sk10'];
	$real15    =$_POST['rrr9'];
	$bobots16	=$_POST['sk11'];
	$real16    =$_POST['rrr10'];
	$bobots17	=$_POST['sk12'];
	$real17    =$_POST['rrr11'];
	
					 
	$utilityjp1=$bobotk1*$bobots1;
	$utilityjp2= $bobotk1*$bobots2;
	$hasiljp1=$utilityjp1*$real1;
	$hasiljp2=$utilityjp2*$real2;
	$hasiljp3=$hasiljp1+$hasiljp2;
	
	
	$utilityusia1=$bobotk2*$bobots3;
	$utilityusia2= $bobotk2*$bobots4;
	$utilityusia3= $bobotk2*$bobots5;
	$hasilusia1=$utilityusia1*$real3;
	$hasilusia2=$utilityusia2*$real4;
	$hasilusia3=$utilityusia3*$real5;
	$hasilusia4=$hasilusia1+ $hasilusia2+$hasilusia3;
	
	$utilitypengalaman1=$bobotk3*$bobots6;
	$utilitypengalaman2= $bobotk3*$bobots7;
	$utilitypengalaman3= $bobotk3*$bobots8;
	$hasilpengalaman1=$utilitypengalaman1*$real6;
	$hasilpengalaman2=$utilitypengalaman2*$real7;
	$hasilpengalaman3=$utilitypengalaman3*$real8;
	$hasilpengalaman4=$hasilpengalaman1 + $hasilpengalaman2+$hasilpengalaman3;
	
	$utilitynilaites1=$bobotk4*$bobots9;
	$utilitynilaites2= $bobotk4*$bobots10;
	$utilitynilaites3= $bobotk4*$bobots11;
	$hasilnilaites1=$utilitynilaites1*$real9;
	$hasilnilaites2=$utilitynilaites2*$real10;
	$hasilnilaites3=$utilitynilaites3*$real11;
	$hasilnilaites4=$hasilnilaites1 + $hasilnilaites2+$hasilnilaites3;
	
	$utilitywawancara1=$bobotk5*$bobots12;
	$utilitywawancara2= $bobotk5*$bobots13;
	$utilitywawancara3= $bobotk5*$bobots14;
	$hasilwawancara1=$utilitywawancara1*$real12;
	$hasilwawancara2=$utilitywawancara2*$real13;
	$hasilwawancara3=$utilitywawancara3*$real14;
	$hasilwawancara4=$hasilwawancara1 + $hasilwawancara2+$hasilwawancara3;
	
	$utilitykesehatan1=$bobotk6*$bobots15;
	$utilitykesehatan2= $bobotk6*$bobots16;
	$utilitykesehatan3= $bobotk6*$bobots17;
	$hasilkesehatan1=$utilitykesehatan1*$real15;
	$hasilkesehatan2=$utilitykesehatan2*$real16;
	$hasilkesehatan3=$utilitykesehatan3*$real17;
	$hasilkesehatan4=$hasilkesehatan1 + $hasilkesehatan2+$hasilkesehatan3;
	
	
	$rank=$hasiljp3 + $hasilusia4 + $hasilpengalaman4 + $hasilnilaites4+$hasilwawancara4+$hasilkesehatan4;
	
	$tgl=date('Y');
	
	
	if($loadPage=="hitung" AND $action=="prosesData" ){	
    $SQL="INSERT INTO utility (id_calon,nama,hasil) 
	VALUES 	('$_POST[id]','$nama1','$rank')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
	
	$SQL2="INSERT INTO hasil (id_calon,nama,thn_hitung,jpendidikan,usia,pengalaman,nilaites,wawancara,kesehatan,nreal,rank) 
	VALUES 	('$_POST[id]','$nama1','$tgl','$kriteria1','$kriteria2','$kriteria3','$kriteria4','$kriteria5','$kriteria6','100','$rank')";
	mysqli_query($koneksi,$SQL2) or die (mysqli_error($koneksi));
	
	$SQL="UPDATE perhitungan SET nama='$nama1',
	                             status='SUDAH DIPROSES',
							  jpendidikan='$kriteria1',
							 usia='$kriteria2',
							 pengalaman='$kriteria3',
							 nilaites='$kriteria4',
							 wawancara='$kriteria5',
							 kesehatan='$kriteria6'
							
		                     WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
	
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan $hasiljp3  $hasilusia4 $hasilpengalaman4  $hasilnilaites4   $hasilwawancara4 $hasilkesehatan4 ');
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
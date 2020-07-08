<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	$loadPage= $_GET['load'];
	$action =$_GET['action'];
	$prioritas		=$_POST['txtpr'];
	$kriteria	=$_POST['kriteria'];
	
	$subjenjang=1/1+1/2;
	$hasilsub1=$subjenjang/2;					 
	
$subdiploma=1/2 ;	
	$hasilsub2=$subdiploma/2;	

$subusia1=1/1+1/2+1/3 ;	
	$hasilsubusia1=$subusia1/3;	
	
$subusia2=1/2+1/3 ;	
	$hasilsubusia2=$subusia2/3;	
	
	$subusia3=1/3 ;	
	$hasilsubusia3=$subusia3/3;	
	
$subpengalaman1= 1/1+1/2+1/3 ;	
	$hasilpengalaman1=$subpengalaman1/3;	
	
	$subpengalaman2= 1/2+1/3 ;	
	$hasilpengalaman2=$subpengalaman2/3;	
	
	$subpengalaman3= 1/3 ;	
	$hasilpengalaman3=$subpengalaman3/3;	
	
	$subtes1= 1/1+1/2+1/3 ;	
	$hasiltes1=$subtes1/3;	
	
	$subtes2= 1/2+1/3 ;	
	$hasiltes2=$subtes2/3;	
	
	$subtes3= 1/3 ;	
	$hasiltes3=$subtes3/3;	
	
	$subwawancara1= 1/1+1/2+1/3 ;	
	$hasilwawancara1=$subwawancara1/3;	
	
	$subwawancara2= 1/2+1/3 ;	
	$hasilwawancara2=$subwawancara2/3;	
	
	$subwawancara3= 1/3 ;	
	$hasilwawancara3=$subwawancara3/3;	
	
	$subkesehatan1= 1/1+1/2+1/3 ;	
	$hasilkesehatan1=$subkesehatan1/3;	
	
	$subkesehatan2= 1/2+1/3 ;	
	$hasilkesehatan2=$subkesehatan2/3;	
	
	$subkesehatan3= 1/3 ;	
	$hasilkesehatan3=$subkesehatan3/3;	
		
	
	if($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 1 AND $kriteria=="JENJANG PENDIDIKAN"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilsub1','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan $kriteria');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 2 AND $kriteria=="JENJANG PENDIDIKAN"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilsub2','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 1  AND $kriteria=="USIA"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilsubusia1','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 2  AND $kriteria=="USIA"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilsubusia2','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 3  AND $kriteria=="USIA"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilsubusia3','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 1  AND $kriteria=="PENGALAMAN KERJA"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilpengalaman1','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 2  AND $kriteria=="PENGALAMAN KERJA"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilpengalaman2','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 3  AND $kriteria=="PENGALAMAN KERJA"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilpengalaman3','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 1  AND $kriteria=="NILAI TES"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasiltes1','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 2  AND $kriteria=="NILAI TES"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasiltes2','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 3  AND $kriteria=="NILAI TES"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasiltes3','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 1  AND $kriteria=="KEMAMPUAN BERKOMUNIKASI"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilwawancara1','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 2  AND $kriteria=="KEMAMPUAN BERKOMUNIKASI"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilwawancara2','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}
	elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 3  AND $kriteria=="KEMAMPUAN BERKOMUNIKASI"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilwawancara3','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 1  AND $kriteria=="KESEHATAN"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilkesehatan1','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 2  AND $kriteria=="KESEHATAN"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilkesehatan2','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}elseif($loadPage=="sub" AND $action=="simpanData" AND $prioritas == 3  AND $kriteria=="KESEHATAN"){	
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
	VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$hasilkesehatan3','$_POST[kriteria]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error());
   echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=sub')
	</script>
	";
	
	}
	elseif($loadPage=="sub" AND $action=="hapusData"){
		
	mysqli_query($koneksi,"DELETE FROM sub_kriteria WHERE id_sub='$_GET[id_sub]'")or die (mysqli_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?load=sub')
	</script>
	";
		
		
		
	}elseif($loadPage=="sub" AND $action=="ubahData"){
		  
	$SQL="UPDATE sub_kriteria SET nama_sub='$_POST[txtsub]',
							 prioritas='$_POST[txtpr]',
							 nama_kriteria='$_POST[kriteria]'
							 
		                     WHERE id_sub='$_POST[id]'";	
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
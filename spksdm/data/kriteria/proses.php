<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	$loadPage= $_GET['load'];
	$action =$_GET['action'];
	$prioritas		=$_POST['txtp'];
	
	$kriteria1=1/1 + 1/2+1/3+1/4+1/5+1/6 ;
	$hasilkriteria1=$kriteria1/6;	
	
	$kriteria2= 1/2+1/3+1/4+1/5+1/6 ;
	$hasilkriteria2=$kriteria2/6;	
	
	$kriteria3=1/3+1/4+1/5+1/6 ;
	$hasilkriteria3=$kriteria3/6;	
	
	$kriteria4=1/4+1/5+1/6 ;
	$hasilkriteria4=$kriteria4/6;	
	
	$kriteria5=1/5+1/6 ;
	$hasilkriteria5=$kriteria5/6;	
	
	$kriteria6=1/6 ;
	$hasilkriteria6=$kriteria6/6;	
	
	if($loadPage=="k" AND $action=="simpanData"AND $prioritas==1){
	
	
	$SQL="INSERT INTO kriteria (id_kriteria,nama_kriteria,prioritas,
								bobot) 
		VALUES ('$_POST[txtid]','$_POST[txtnamasub]',
				'$_POST[txtp]','$hasilkriteria1')";
	mysqli_query($koneksi,$SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=k')
	</script>
	";
	
	}if($loadPage=="k" AND $action=="simpanData"AND $prioritas==2){
	
	
	$SQL="INSERT INTO kriteria (id_kriteria,nama_kriteria,prioritas,
								bobot) 
		VALUES ('$_POST[txtid]','$_POST[txtnamasub]',
				'$_POST[txtp]','$hasilkriteria2')";
	mysqli_query($koneksi,$SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=k')
	</script>
	";
	
	}if($loadPage=="k" AND $action=="simpanData"AND $prioritas==3){
	
	
	$SQL="INSERT INTO kriteria (id_kriteria,nama_kriteria,prioritas,
								bobot) 
		VALUES ('$_POST[txtid]','$_POST[txtnamasub]',
				'$_POST[txtp]','$hasilkriteria3')";
	mysqli_query($koneksi,$SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=k')
	</script>
	";
	
	}if($loadPage=="k" AND $action=="simpanData"AND $prioritas==4){
	
	
	$SQL="INSERT INTO kriteria (id_kriteria,nama_kriteria,prioritas,
								bobot) 
		VALUES ('$_POST[txtid]','$_POST[txtnamasub]',
				'$_POST[txtp]','$hasilkriteria4')";
	mysqli_query($koneksi,$SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=k')
	</script>
	";
	
	}if($loadPage=="k" AND $action=="simpanData"AND $prioritas==5){
	
	
	$SQL="INSERT INTO kriteria (id_kriteria,nama_kriteria,prioritas,
								bobot) 
		VALUES ('$_POST[txtid]','$_POST[txtnamasub]',
				'$_POST[txtp]','$hasilkriteria5')";
	mysqli_query($koneksi,$SQL) or die (mysql_error());
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('../../frame.php?load=k')
	</script>
	";
	

	
	}
	elseif($loadPage=="sub" AND $action=="hapusData"){
		
	mysqli_query($koneksi,"DELETE FROM sub_kriteria WHERE id_sub='$_GET[id_sub]'")or die (mysql_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?load=sub')
	</script>
	";
		
		
		
	}elseif($loadPage=="k" AND $action=="ubahData"){
		  
	$SQL="UPDATE kriteria SET nama_kriteria ='$_POST[kriteria]',
							 prioritas='$_POST[txtp]'
							 
							 
		                     WHERE id_kriteria='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysql_error());
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('../../frame.php?load=k')
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
<?php

if(isset($_SESSION['username']) AND isset ($_SESSION['password'])){
	if($_GET['load']=="dashboard"){
		include"dashboard.php";
	}elseif($_GET['load']=="sub"){
		include"data/sub/subkriteria.php";
	}elseif($_GET['load']=="subinput"){
		include"data/sub/input-data.php";
	}elseif($_GET['load']=="subedit"){
		include"data/sub/edit-data.php";
	}elseif($_GET['load']=="hitung"){
		include"data/perhitungan/perhitungan.php";
		}elseif($_GET['load']=="member"){
		include"data/member/member.php";
		}elseif($_GET['load']=="laporan"){
		include"data/laporan/laporan.php";
		}elseif($_GET['load']=="k"){
		include"data/kriteria/kriteria.php";
		}elseif($_GET['load']=="kinput"){
			include"data/kriteria/input-data.php";
		}elseif($_GET['load']=="kedit"){
			include"data/kriteria/edit-data.php";
		}elseif($_GET['load']=="hasil"){
		include"data/hasil/hasil.php";
		}elseif($_GET['load']=="rekap"){
		include"data/rekap/view.php";
		}



}else{

	 echo "<script type=http://localhost/spkbri/spkadmin/frame.php?load=jadwal&action=input'text/javascript'>
	window.alert('Maaf, Anda Tidak Dapat Mengakses Halaman Ini, Silahkan Login Terlebih Dahulu'); 
	window.location =('index.php')</script>";
}

?>
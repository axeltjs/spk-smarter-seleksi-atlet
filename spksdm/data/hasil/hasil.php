<?php 
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	$loadModule="data/hasil/proses.php";
	switch($_GET[action]){
		default:
		include"view.php";
		break;
		case"input":
		include"input-data.php";
		break;
		case"edit":
		include"edit-data.php";
		break;
		case"tampil":
		include"view1.php";
		break;
		case"t":
		include"proses2.php";
		break;
		case"d":
		include"view2.php";
		break;
		}
	
	}else{
		echo"
		<script language='javascript'>
		window.alert('Anda Tidak Dapat Mengakses laman ini');
		window.location=('frame.php?load=hasil')
		</script>
		";
		}

?>
 <?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
	include"../../../appConfig/conn.php";	
	$action =$_GET['action'];
	
 
 IF ( $action=="hapusData"){
		
		mysqli_query($koneksi,"DELETE FROM tpengguna WHERE kdPengguna='$_GET[id]'")or die (mysqli_error());
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('../../frame.php?load=pengguna')
	</script>
	";
					 }
				  ELSE {

echo"";
				  }
}
				  
				  ?>
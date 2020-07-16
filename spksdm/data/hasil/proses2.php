<?php
include"../../../appConfig/conn.php";	

$angka=count($_POST['ket']);

for ($i=1; $i<=$angka; $i++){
	$kd=$_POST['idc'];
$kt=$_POST['ket'];

$query="update hasil set ket='".$kt[$i]."' where id_calon='".$kd[$i]."'";
mysqli_query($koneksi,$query) or die(mysqli_error($koneksi));

echo"
<script language='javascript'>
window.alert('data berhasil disimpan $angka');
window.location=('?load=hasil&action=hasil')

</script>

";
}

?>
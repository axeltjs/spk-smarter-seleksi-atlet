<?php 
	include"../../../appConfig/conn.php";	

    mysqli_query($koneksi,"DELETE FROM sub_kriteria WHERE id_sub='$_GET[id]'")or die (mysqli_error($koneksi));
		
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Dihapus');
	window.location=('/spkpimpinan/frame.php?load=sub')
	</script>
	";
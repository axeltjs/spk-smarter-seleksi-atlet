<title>BERKAS </title>

<body onLoad="window.print();">

      
	  
	 
	
      <?php
	  
include"conn.php";

$id =$_GET['id'];
$tampil = mysqli_query($koneksi,"SELECT * FROM peserta WHERE id_calon='$_GET[id]'") or die(mysql_error());
$data = mysqli_fetch_array($tampil);

$berkas=$data['ijazah'];


echo" $berkas";

?>
    
   
</body>


<?php
include"appConfig/conn.php";
include"appConfig/upFile.php";
$cariData =mysqli_query($koneksi,"SELECT * FROM peserta WHERE email='$_POST[txtEmail]'or no_hp='$_POST[txtKontak]'");
$ketemu=mysqli_num_rows($cariData);
if($ketemu > 0){
	echo"
	<script language='javascript'>
		window.alert('Email : $_POST[txtEmail] Sudah Terdaftar !! Silahkan Hubungi Bagian Administrasi');
		window.location=('index.php')
		</script>
	";
	
	
	}else{

		$tgl=date("Ymd");
		
		 $addres_file = $_FILES['upPhoto']['tmp_name'];
		  $tipe_file   = $_FILES['upPhoto']['type'];
		  $filename    = $_FILES['upPhoto']['name'];
		  $enkrip	   = $filename;
		  $filenameenkrip =$filename;
		  
		  $hp=$_POST['txtKontak'];
		  
		  $pass =$_POST['txtPassMember'];
		 $tgl=date('Y');
	  if(empty($addres_file)){	   
				mysqli_query($koneksi,"INSERT INTO peserta (id_calon,username,pass,aktif,nama,no_hp,email,alamat,tgl_input)
							VALUES ('$_POST[idp]','$_POST[txtUsername]','$pass','N','$_POST[txtNmLengkap]','$hp','$_POST[txtEmail]','$_POST[txtAlamat]','$tgl')")or die(mysqli_error());
							
							echo"
		<script language='javascript'>
		window.alert('Data Berhasil Disimpan ');
		window.location=('index.php')
		</script>
		";
	  }else{
		   if($tipe_file !="image/jpg" AND $tipe_file != "image/jpeg"){
				  echo"
				  <script language='javascript'>
				  window.alert('Upload Gambar Gagal Pastikan File Bertipe JPEG');
				  window.location=('index.php')
				  </script>
				  ";
				  }else{
				$pass = $_POST['txtPassMember'];
				 upMemberLaman($filenameenkrip);	 
					mysqli_query($koneksi,"INSERT INTO peserta (id_calon,username,pass,foto,aktif,status,validasi,validasi1,nama,no_hp,email,alamat,tgl_input)
							VALUES ('$_POST[idp]','$_POST[txtUsername]','$pass','$filenameenkrip','N','BELUM DIPROSES','OF','CEK','$_POST[txtNmLengkap]','$hp','$_POST[txtEmail]','$_POST[txtAlamat]','$tgl')")or die(mysqli_error());
							
		
	echo"
		<script language='javascript'>
		window.alert('Data Berhasil Disimpan ');
		window.location=('index.php')
		</script>
		";
				  }
		  
		  
		  
		  }
		  }

?>
<?php
include "../appConfig/conn.php";
function antiinjection($data){
  include "../appConfig/conn.php";
  $filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$username 	= $_POST['txtUsername'];
$pass     	= $_POST['txtPassword'];

$waktu = time()+25200;
$expired=60;

$query=mysqli_query($koneksi,"SELECT * FROM peserta WHERE username='$username' 
				 AND pass='$pass' AND aktif='Y'");
$in=mysqli_num_rows($query);
$r=mysqli_fetch_array($query);

if ($in > 0){
  session_start();
  
  $_SESSION['id_calon']   	  = $r['id_calon'];
  $_SESSION['username']    		  = $r['username'];
  $_SESSION['email']         = $r['email'];
  $_SESSION['password']      	  = $r['pass'];
  $_SESSION['nmLengkap']  		  = $r['nama'];
  $_SESSION['foto']      		  = $r['foto'];
  
  $_SESSION['timeout']		= $waktu+$expired;
  $waktulog= time();												
										
  header('location:frame.php?load=dashboard');
}
else{
    echo "<script type='text/javascript'>
	window.alert('Username Atau Password Anda Salah'); 
	window.location =('index.php')</script>";
}
?>

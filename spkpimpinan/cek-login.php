<?php
include "../appConfig/conn.php";
function antiinjection($data){
  include "../appConfig/conn.php";
  $filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$username 	= antiinjection($_POST['txtUsername']);
$pass     	= antiinjection($_POST['txtPassword']);
$email		= antiinjection($_POST['txtUsername']);
$level		= antiinjection($_POST['level']);

$waktu = time()+25200;
$expired=60;

$query=mysqli_query($koneksi,"SELECT * FROM tpengguna WHERE username='$username' AND password='$pass' AND level ='$level' AND aktif='Y'");
$in=mysqli_num_rows($query);
$r=mysqli_fetch_array($query);

if ($in == 1){
  session_start();
  
  $_SESSION['kdPengguna']   	  = $r['kdPengguna'];
  $_SESSION['username']    		  = $r['username'];
  $_SESSION['password']      	  = $r['password'];
  $_SESSION['foto']      	  = $r['foto'];
  $_SESSION['timeout']		= $waktu+$expired;
  $waktulog= time();												
}if ($r['username'] == $username AND $r['password'] == $pass AND $r['level'] == $level  AND $r['aktif'] == 'Y' ){									
  header('location:frame.php?load=dashboard');
}
else{
    echo "<script type='text/javascript'>
	window.alert('Username Atau Password Anda Salah'); 
	window.location =('index.php')</script>";
}

?>

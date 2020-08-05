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

if($level === 'admin' || $level === 'pelatih'){
  $query=mysqli_query($koneksi,"SELECT * FROM tpengguna WHERE username='$username' AND password='$pass' AND aktif='Y' AND level='$level' ");
}elseif($level === 'peserta'){
  $query=mysqli_query($koneksi,"SELECT * FROM peserta WHERE username='$username' 
  AND pass='$pass' AND aktif='Y'");
  // echo 'saya peserta';
  // return 'ew';
}
$in=mysqli_num_rows($query);
$r=mysqli_fetch_array($query);
// echo var_dump($in);

if ($in == 1){
  session_start();
  $waktulog= time();												
  $_SESSION['timeout']		= $waktu+$expired;
  $_SESSION['foto']      	  = $r['foto'];
  $_SESSION['username']    		  = $r['username'];

  if($level === 'admin'){
    $_SESSION['kdPengguna']   	  = $r['kdPengguna'];
    $_SESSION['nmPengguna']  		  = $r['nmPengguna'];
    $_SESSION['password']      	  = $r['password'];
  }elseif($level === 'pelatih'){
    $_SESSION['kdPengguna']   	  = $r['kdPengguna'];
    $_SESSION['password']      	  = $r['password'];
  }else{
    $_SESSION['id_calon']   	  = $r['id_calon'];
    $_SESSION['email']         = $r['email'];
    $_SESSION['password']      	  = $r['pass'];
    $_SESSION['nmLengkap']  		  = $r['nama'];
  }
}

if($level === 'admin'){
  if ($r['username']== $username AND $r['password'] == $pass AND $r['aktif']=='Y' ){	
    header('location:frame.php?load=dashboard');
  }else{
    echo "<script type='text/javascript'>
    window.alert('Username Atau Password Anda Salah'); 
    window.location =('index.php')</script>";
  }
}elseif($level === 'pelatih'){
  if ($r['username']== $username AND $r['password'] == $pass AND $r['aktif']=='Y' ){	
    header('location:/spkpimpinan/frame.php?load=dashboard');
  }else{
    echo "<script type='text/javascript'>
    window.alert('Username Atau Password Anda Salah'); 
    window.location =('index.php')</script>";
  }
}else{
  if ($r['username']== $username AND $r['pass'] == $pass AND $r['aktif']=='Y' ){	
    header('location:/spkpeserta/frame.php?load=dashboard');
  }else{
    echo "<script type='text/javascript'>
    window.alert('Username Atau Password Anda Salah'); 
    window.location =('index.php')</script>";
  }
}								


?>

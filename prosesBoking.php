<?php
session_start();
if(isset($_SESSION['username']) AND isset($_SESSION['password'])){
$p=$_GET['p'];
$action=$_GET['action'];
include"appConfig/conn.php";

if($p=="boking" AND $action=="tambah-boking"){
	
	$validasi = mysqli_query($koneksi,"SELECT * FROM tboking_temp WHERE idSession='$_SESSION[username]'");
	$ketemu=mysqli_num_rows($validasi);
	if($ketemu > 0){
		echo"
		<script language='javascript'>
	window.alert('Maaf, Anda Hanya Dapat Melakukan 1 Kali Boking Lapangan ');
	window.location=('frame.php?p=keranjang-boking')
	</script>
		
		";
				
		}else{
			
				$jadwal=mysqli_query($koneksi,"SELECT * FROM tjadwal,tlapangan,tjam WHERE
						 tjadwal.kdLapangan=tlapangan.kdLapangan AND
						 tjadwal.kdJam=tjam.kdJam AND tjadwal.kdJadwal='$_GET[id]'")or die(mysql_error());
							$_data=mysqli_fetch_array($jadwal);
							$subtotal=$_data['harga'] *1;
	$SQL="INSERT INTO tboking_temp (kdJadwal,nomorLapangan,tglBokingTemp,
									jamBokingTemp,hargaTemp,subTotalTemp,idSession)
		VALUES('$_data[kdJadwal]','$_data[noLapangan]','$_data[tglJadwal]','$_data[jam]','$_data[harga]',
		'$subtotal','$_SESSION[username]')";
	mysqli_query($koneksi,$SQL) or die(mysql_error());
	
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('frame.php?p=keranjang-boking')
	</script>
	";
			
			
			}
	
	
	
	}elseif($p=="boking" AND $action=="hapusData"){
		mysqli_query($koneksi,"DELETE FROM tboking_temp WHERE idSession='$_SESSION[username]'");
		echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('index.php')
	</script>
	";
		
	}elseif($p=="boking" AND $action=="selesai-boking"){
$cekkeranjang = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tboking_temp WHERE idSession='$_SESSION[username]'"));
if ($cekkeranjang == 0){
	echo "<script>window.alert('Maaf Transaksi Tidak Dapat Di Proses !!!');
        window.location=('index.php')</script>";  
}else{
function isi_keranjang(){
	$isikeranjang = array();
	$sid = $_SESSION["username"];
	$sql = mysqli_query($koneksi,"SELECT * FROM tboking_temp WHERE idSession='$sid'");
	
	
	while ($r=mysqli_fetch_array($sql)) {
		$isikeranjang[] = $r;
	}
	return $isikeranjang;
}
$tahun=date("Y");
$tgl_skrg = date("Ymd");

$query=mysqli_query($koneksi,"SELECT MAX(noInvoice) As nomorOrder FROM tboking");
							$kode=mysqli_fetch_array($query);
							$kodeJadi=$kode["nomorOrder"];
							$noOrder=(int)substr($kodeJadi,4,6);
							$noOrder++;
							$char = "INV-";
							$newID = $char . sprintf("%06s", $noOrder);
$lunas="B";
$tot=mysqli_query($koneksi,"SELECT SUM(subTotalTemp) AS total FROM tboking_temp WHERE idSession='$_SESSION[username]'");
$t=mysqli_fetch_array($tot);

mysqli_query($koneksi,"INSERT INTO tboking(noInvoice,tglInvoice,usernameBoking,an,alamat,email,kontak,totalBayar,statusBayar)
			VALUES ('$newID','$tgl_skrg','$_SESSION[username]','$_POST[txtNmLengkap]',
					'$_POST[txtAlamat]','$_POST[txtEmail]','$_POST[txtKontak]','$t[total]','$lunas')");
  
$id_orders=mysql_insert_id();
$isikeranjang = isi_keranjang();
$jml          = count($isikeranjang);

for ($i = 0; $i < $jml; $i++){
  mysqli_query($koneksi,"INSERT INTO trincian_boking(kdBoking,kdJadwal,noLapangan,tglBoking,jamBoking,hargaBoking,subTotal) 
               VALUES('$id_orders','{$isikeranjang[$i]['kdJadwal']}','{$isikeranjang[$i]['nomorLapangan']}', '{$isikeranjang[$i]['tglBokingTemp']}','{$isikeranjang[$i]['jamBokingTemp']}','{$isikeranjang[$i]['hargaTemp']}',
'{$isikeranjang[$i]['subTotalTemp']}')") or die(mysql_error());

mysqli_query($koneksi,"UPDATE tjadwal SET statusBoking='B' WHERE kdJadwal='{$isikeranjang[$i]['kdJadwal']}'");
}

  mysqli_query($koneksi,"DELETE FROM tboking_temp
	  	         WHERE idSession = '$_SESSION[username]'");
 
header('location:frame.php?p=rincian-transaksi'); 

}
		
		}
	
	
	}else{
		echo"
	<script language='javascript'>
	window.alert('Anda Tidak Dapat Melakukan Pembokingan Online,Silahkan Login Terlebih Dahulu');
	window.location=('?p=login')
	</script>
	";
		}


?>
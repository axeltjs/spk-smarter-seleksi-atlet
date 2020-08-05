<title>Cetak Laporan </title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style4 {font-size: 12px}
-->
</style>






<body onLoad="window.print();">
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><img src="/images/kop-fcsi.png" width="957" height="auto"> </p>
<p align="center" class="style1">LAPORAN DATA REKAP NILAI PESERTA PER PARIODE TAHUN</p>
<p align="center" class="style1">&nbsp;</p>
<div align="center">
  <div align="center">
    <table width="957" height="69" border="1">
      <tr>
        
         <th><div align="center">No</span></th>
       <th><div align="center">NAMA</span></th>
	   <th><div align="center">USIA</span></th>
      <th><div align="center">NILAI KEMINATAN</span></th>
      <th><div align="center">NILAI KETERAMPILAN</span></th>
       <th><div align="center">NILAI TES</span></th>
	   <th><div align="center">NILAI KELENGKAPAN BERKAS</span></th>
      <?php
include"conn.php";
$tgl1= $_POST['tahun'];
$limit = $_POST['limit'];
$no=1;
if($limit > 0){
  $tampil = mysqli_query($koneksi,"SELECT * FROM peserta where  tgl_input ='$tgl1' AND validasi='SIAP1' order by id_calon DESC limit $limit") or die(mysqli_error($koneksi));
}else{
$tampil = mysqli_query($koneksi,"SELECT * FROM peserta where  tgl_input ='$tgl1' AND validasi='SIAP1' order by id_calon DESC") or die(mysqli_error($koneksi));
}
while($data = mysqli_fetch_array($tampil)){
?>
    
    <tr>
      <td> <div align="center"><?php echo $no; ?></div></td>
     
      <td> <div align="center"><?php echo $data ['nama']; ?></div></td>
      <td> <div align="center"><?php echo $data ['usia']; ?></div></td>
      <td> <div align="center"><?php echo $data ['keminatan']; ?></div></td>
      <td> <div align="center"><?php echo $data ['keterampilan']; ?></div></td>
      <td> <div align="center"><?php echo $data ['nilaites']; ?></div></td>
      <td> <div align="center"><?php echo $data ['kelengkapan']; ?></div></td>
      </tr>
      <?php
	$no++;
}
?>

      </table>
  </div>
<p>&nbsp;</p>
  <p>&nbsp;</p>
<table width="985">
    <tr>
      <td width="55">&nbsp;</td>
      <td width="229">&nbsp;</td>
      <td width="386">&nbsp;</td>
      <td width="295"><div align="center"><strong>FEDERASI CHEERLEADING SELURUH INDONESIA (FSCI) SAMARINDA</strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">
        <div align="center"><span class="style4">SAMARINDA, <?php echo date("Y-m-d");?></span></div>
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>.</td>
  </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
    </tr>
     <tr>
      <td width="55" height="40">&nbsp;</td>
      <td width="229">&nbsp;</td>
      <td width="386">&nbsp;</td>
      <td><div align="center">
        <p>&nbsp;</p>
        </div>
        <div align="center"></div>
        <div align="center"></div>
        <div align="center"></div>
        <div align="center"></div>
       <div align="center"></div>       <div align="center"></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center"><strong><u> Siti Fatiyah</u></strong></div></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">Ketua FCSI Provinsi Kalimantan Timur</div></td>
    </tr>
  </table>
</body>
</div>



<title>Cetak Laporan </title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style4 {font-size: 12px}
-->
</style>

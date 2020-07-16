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

<?php
include"conn.php";
$tgl1= $_POST['tahun'];
?>




<body onLoad="window.print();">
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><img src="KOPBARU1.PNG" width="957" height="134"> </p>
<p align="center" class="style1">LAPORAN DATA PENDAFTAR PER PERIODE TAHUN <?php echo $tgl1 ?> </p>
<p align="center" class="style1">&nbsp;</p>
<div align="center">
  <div align="center">
    <table width="957" height="69" border="1">
      <tr>
        
         <th><div align="center">No</span></th>
      
      <th><div align="center">NAMA</span></th>
      <th><div align="center">KONTAK</span></th>
	   <th><div align="center"> JENIS KELAMIN</span></th>
       
      <th><div align="center">TEMPAT LAHIR</span></th>
      <th><div align="center">TGL LAHIR</span></th>
       <th><div align="center">ALAMAT</span></th>
      
       
      
	  
	 
	
      <?php
include"conn.php";
$tgl1= $_POST['tahun'];

$no=1;
$tampil = mysqli_query($koneksi,"SELECT * FROM peserta where  tgl_input ='$tgl1' AND validasi='SIAP1' order by id_calon DESC") or die(mysqli_error($koneksi));
while($data = mysqli_fetch_array($tampil)){
?>
    
    <tr>
      <td> <div align="center"><?php echo $no; ?></div></td>
     
      <td> <div align="center"><?php echo $data ['nama']; ?></div></td>
      <td> <div align="center"><?php echo $data ['no_hp']; ?></div></td>
      <td> <div align="center"><?php echo $data ['jenkel']; ?></div></td>
	  <td> <div align="center"><?php echo $data ['tempat_lhr']; ?></div></td>
      <td> <div align="center"><?php echo $data ['tgl_lhr']; ?></div></td>
	  <td> <div align="center"><?php echo $data ['alamat']; ?></div></td>
	 
      
      
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
      <td width="295"><div align="center"><strong>PT. BANK RAKYAT INDONESIA (PERSERO) Tbk KANTOR CABANG</strong></div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">
        <div align="center"><span class="style4">SAMARINDA , <?php echo date("Y-m-d");?></span></div>
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
      <td><div align="center"><strong><u> Rainhard r marpaung</u></strong></div></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><div align="center">Pemimpin Cabang</div></td>
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


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
$tgl1=$_POST['tahun'];
?>
<body onLoad="window.print();">
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><img src="KOPBARU1.PNG" width="1016" height="118"></p>
<p align="center" class="style1">LAPORAN DATA Hasil Perhitungan Per Periode <?php echo $tgl1 ?> </p>
<p align="center" class="style1">&nbsp;</p>
<div align="center">
  <div align="center">
    <table width="957" height="69" border="1">
      <tr>
        
         <th><div align="center">No</span></th>
      
      <th><div align="center">NAMA</span></th>
      <th><div align="center">Jenjang Pendidikan</span></th>
	   <th><div align="center"> Usia</span></th>
       
      <th><div align="center">Pengalaman Kerja</span></th>
      <th><div align="center">Nilai Tes</span></th>
       <th><div align="center">Kemampuan Berkomunikasi</span></th>
       <th><div align="center">Kesehatan(MCU)</span></th>
       <th><div align="center">Rank</span></th>
       
       
      
	  
	 
	
      <?php
include"conn.php";
$tgl1= $_POST['tahun'];


$no=1;
$tampil = mysqli_query($koneksi,"SELECT * FROM hasil where  thn_hitung ='$tgl1' order by id_calon DESC") or die(mysqli_error());
while($data = mysqli_fetch_array($tampil)){
?>
    
    <tr>
      <td> <div align="center"><?php echo $no; ?></div></td>
     
      <td> <div align="center"><?php echo $data ['nama']; ?></div></td>
      <td> <div align="center"><?php echo $data ['jpendidikan']; ?></div></td>
      <td> <div align="center"><?php echo $data ['usia']; ?></div></td>
	  <td> <div align="center"><?php echo $data ['pengalaman']; ?></div></td>
      <td> <div align="center"><?php echo $data ['nilaites']; ?></div></td>
	  <td> <div align="center"><?php echo $data ['wawancara']; ?></div></td>
	  <td> <div align="center"><?php echo $data ['kesehatan']; ?></div></td>
      <td> <div align="center"><?php echo $data ['rank']; ?></div></td>
      
      
      
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
      <td width="55">&nbsp;</td>
      <td width="229">&nbsp;</td>
      <td width="386">&nbsp;</td>
      <td rowspan="3"><div align="center"><strong><u>Rainhard r marpaung</u></strong></div>
        <div align="center"></div>
        <div align="center"></div>
        <div align="center"></div>
       <div align="center"></div>       
       <div align="center">Pemimpin Cabang</div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</body>
</div>



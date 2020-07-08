<?php
$SQL1=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='jenjang pendidikan'");
$_data1=mysqli_fetch_array($SQL1);
?>
<?php
$SQL2=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='usia'");
$_data2=mysqli_fetch_array($SQL2);
?>
<?php
$SQL3=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='PENGALAMAN KERJA'");
$_data3=mysqli_fetch_array($SQL3);
?>
<?php
$SQL4=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='NILAI TES'");
$_data4=mysqli_fetch_array($SQL4);
?>
<?php
$SQL5=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='KEMAMPUAN BERKOMUNIKASI'");
$_data5=mysqli_fetch_array($SQL5);
?>
<?php
$SQL6=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='KEsehatan'");
$_data6=mysqli_fetch_array($SQL6);
?>
<?php
$SQL7=mysqli_query($koneksi,"SELECT * FROM sub_kriteria where nama_kriteria='jenjang pendidikan'");
$_data7=mysqli_fetch_array($SQL7);

$SQL8=mysqli_query($koneksi,"SELECT * FROM sub_kriteria where nama_sub='diploma'");
$_data8=mysqli_fetch_array($SQL8);

$SQL9=mysqli_query($koneksi,"SELECT * FROM sub_kriteria where nama_sub='20 - 25 TAHUN'");
$_data9=mysqli_fetch_array($SQL9);

$SQL10=mysqli_query($koneksi,"SELECT * FROM sub_kriteria where nama_sub='26 - 30 TAHUN'");
$_data10=mysqli_fetch_array($SQL10);

$SQL11=mysqli_query($koneksi,"SELECT * FROM sub_kriteria where nama_sub='> 30 TAHUN'");
$_data11=mysqli_fetch_array($SQL11);


$SQL=mysqli_query($koneksi,"SELECT * FROM hasil WHERE id_calon='$_GET[id]'");
$_data=mysqli_fetch_array($SQL);

?>
<div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=hitung" class="current">Module SMARTER</a> </div>
    <h1>Proses Perhitungan SMARTER</h1>
  </div>


<div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Proses Perhitungan</h5>
          </div>
          <div class="widget-content nopadding">
		 
            <table width="122%" class="table table-bordered data-table">
             
                <tr>
                 <th width="14%">Nama</th>
    <th width="15%">Kriteria </th>
	<th width="15%"> </th>
	
    <th width="10%">Bobot Kriteria</th>
	<th width="20%">Sub Kriteria</th>
	<th width="10%">Bobot Sub Kriteria</th>
    <th width="10%">Nilai Utility</th>
    
    <th width="10%">Rank</th>
                </tr>
             
              <tbody>
              
              <?php
			  
			  echo"
			  
				   <tr class='$class'>
				   <td> <input type='hidden' name='id' value='$_data[id_calon]'> $_data[nama]</td>
                  <td>JENJANG PENDIDIKAN : </td>
				  <td><b><div class='alert alert-success'>$_data[jpendidikan]</div></b></td>
    <td>$_data1[bobot]</td>
    <td>SARJANA</td>
    <td>$_data7[bobot]</td>
    <td>0,30625</td>
    <td><b><div class='alert alert-success'>$_data[rank]</div></b></td>
                </tr> 
				<tr>
    <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
    <th>&nbsp;</th>
	 <th>&nbsp;</th>
     <td>DIPLOMA</td>
     <td>$_data8[bobot]</td>
    <td>0,102083333</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>USIA :  </td>
	<td><b><div class='alert alert-success'>$_data[usia]</div></b> </td>
    <td>$_data2[bobot]</td>
    <td>20 - 25 TAHUN</td>
    <td>$_data9[bobot]</td>
    <td>0,147685185</td>
    <th>&nbsp;</th>
  </tr>
 
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <tD>26 - 30 TAHUN</tD>
    <tD>$_data10[bobot]</tD>
    <td>0,06712963</td>
    <th>&nbsp;</th>
  </tr>
  
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tD>&gt; 30 TAHUN</tD>
    <tD> $_data11[bobot]</tD>
    <td>0,026851852</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>PENGALAMAN KERJA : </td>
				    <td><b><div class='alert alert-success'> $_data[pengalaman]</div></b></td>
    <td>$_data3[bobot]</td>
    <td>&gt; 2 TAHUN</td>
    <td>$_data9[bobot]</td>
    <td>0,096759259</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td>&lt; 2 TAHUN</td>
    <td>$_data10[bobot]</td>
    <td>0,043981481</td>
    <th>&nbsp;</th>
  </tr>
  
  <tr>
  <th>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td>BELUM PERNAH</td>
    <td>$_data11[bobot]</td>
    <td>0,017592593</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>NILAI TES :  </td>
	<td><b><div class='alert alert-success'>$_data[nilaites] </div></b></td>
    <td>$_data4[bobot]</td>
    <td>NILAI &gt; 80</td>
    <td>$_data9[bobot]</td>
    <td>0,062808642</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	 <tH>&nbsp;</tH>
    <tH></tH>
    <td>71 - 80</td>
    <td>$_data10[bobot]</td>
    <td>0,028549383</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td>60 - 70</td>
    <td>$_data11[bobot]</td>
    <td>0,011419753</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <th></th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>KEMAMPUAN BERKOMUNIKASI : </td>
				<td><b><div class='alert alert-success'>$_data[wawancara]</div></b></td>
    <td>$_data5[bobot]</td>
    <td>SANGAT KOMUNIKATIF</td>
    <td>$_data9[bobot]</td>
    <td>0,037345679</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td>KOMUNIKATIF</td>
    <td>$_data10[bobot]</td>
    <td>0,016975309</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td>TIDAK KOMUNIKATIF</td>
    <td>$_data11[bobot]</td>
    <td>0,006790123</td>
    <tH>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <th></th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>KESEHATAN :  </td>
				 <td> <b><div class='alert alert-success'>$_data[kesehatan]</div></b></td>
				
    <td>$_data6[bobot]</td>
    <td>TIDAK ADA</td>
    <td>$_data9[bobot]</td>
    <td>0,016975309</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH></tH>
    <td>MEMILIKI PENYAKIT PENDENGARAN DAN PENGLIHATAN</td>
    <td>$_data10[bobot]</td>
    <td>0,007716049</td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td>MEMILIKI PENYAKIT DALAM</td>
    <td>$_data11[bobot]</td>
    <td>0,00308642</td>
    <th>&nbsp;</th>
  </tr>
              </tbody>
            </table>
		  ";
		  ?>
		 
        </div>
      </div>
    </div>
  </div>
   </div>
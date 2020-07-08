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

$SQL9=mysqli_query($koneksi,"SELECT * FROM sub_kriteria where nama_sub='SANGAT KOMUNIKATIF'");
$_data9=mysqli_fetch_array($SQL9);

$SQL10=mysqli_query($koneksi,"SELECT * FROM sub_kriteria where nama_sub='KOMUNIKATIF'");
$_data10=mysqli_fetch_array($SQL10);

$SQL11=mysqli_query($koneksi,"SELECT * FROM sub_kriteria where nama_sub='TIDAK KOMUNIKATIF'");
$_data11=mysqli_fetch_array($SQL11);



$SQL=mysqli_query($koneksi,"SELECT * FROM hasil WHERE id_calon='$_GET[id]'");
$_data=mysqli_fetch_array($SQL);

?>
<div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=hitung" class="current">Module SMARTER</a> </div>
    <h1>Detail Proses Perhitungan SMARTER</h1>
  </div>


<div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Proses Perhitungan</h5>
          </div>
          <div style="overflow-x:auto;">
          <div class="widget-content nopadding">
		 
            <table width="122%" class="table table-bordered data-table">
             
                <tr>
                 <th width="11%">Nama</th>
    <th width="12%">Kriteria </th>
	<th width="20%">Sub Kriteria Yang Terpilih </th>
	
    <th width="8%">Bobot Kriteria</th>
	
	<th width="9%">Bobot Sub Kriteria</th>
    <th width="8%">Nilai Utility</th>
    
    <th width="7%">Nilai Real</th>
    <th width="8%">Hasil</th>
    <th width="9%">Hasil Akhir</th>
                </tr>
             
              <tbody>
      
        <?php
		
		 $bobot1=round($_data1['bobot'],2);
			   $bobot7=round($_data7['bobot'],2);
			   $bobot8=round($_data8['bobot'],2);
			   $bobot2=round($_data2['bobot'],2);
			   $bobot3=round($_data3['bobot'],2);
			   $bobot9=round($_data9['bobot'],2);
			   $bobot10=round($_data10['bobot'],2);
			   $bobot11=round($_data11['bobot'],2);
			   $bobot4=round($_data4['bobot'],2);
			    $bobot5=round($_data5['bobot'],2);
			   $bobot6=round($_data6['bobot'],2);
               
               $u1=round($_data['u1'],2);
               $u2=round($_data['u2'],2);
               $u3=round($_data['u3'],2);
               $u4=round($_data['u4'],2);
               $u5=round($_data['u5'],2);
               $u6=round($_data['u6'],2);
			   $rank=round($_data['rank'],2);
		  echo"
			  
				   <tr class='$class'>
				   <td> <input type='hidden' name='id' value='$_data[id_calon]'> $_data[nama]</td>
                  <td>JENJANG PENDIDIKAN : </td>
				  <td><b><div class='alert alert-success'>$_data[jpendidikan]</div></b></td>
    <td>$bobot1</td>
    
    <td>";
				if(($_data['jpendidikan'] == 'SARJANA' )){
echo"<input type='text' class='span10'  name='s1' readonly value=' $bobot7'/>";
				}elseif(($_data['jpendidikan'] == 'DIPLOMA' )){
				echo"<input type='text' class='span10'  name='s1'readonly value='$bobot8' required />";
				}
			echo"</td>
    <td>$u1</td>
    <td>100</td>
    <td><b><span class='alert alert-success'>$_data[h1]</span></b></td>
    <td><b><div class='alert alert-success'>$rank</div></b></td>
                </tr> 
				<tr>
    <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
    <th>&nbsp;</th>
	 <th>&nbsp;</th>
     <th></th>
     <th></th>
    <th></th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>USIA :  </td>
	<td><b><div class='alert alert-success'>$_data[usia]</div></b> </td>
    <td>$bobot2</td>
    
    <td>";
				if(($_data['usia'] >=20 && $_data['usia'] <=25 )){
	
	echo"<input type='number' class='span10'  name='s2' value='$bobot7' readonly />";
				}
	
	elseif (($_data['usia'] >=26 && $_data['usia'] <=30)){
						
						echo"<input type='number' class='span10'  name='s2'value='$bobot8'  readonly />";
				}
	echo"</td>
    <td>$u2</td>
    <td>100</td>
    <td><b><span class='alert alert-success'>$_data[h2]</span></b></td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <th></th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th></th>
    
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>PENGALAMAN KERJA : </td>
				    <td><b><div class='alert alert-success'> $_data[pengalaman]</div></b></td>
    <td>$bobot3</td>
    
    <td>";
				if(($_data['pengalaman']== 'Lebih Dari Samadengan 2 Tahun' )){
	
	echo"<input type='number' class='span10'  name='sk1'value='$bobot9' readonly />";
				}else if(($_data['pengalaman']== 'Kurang Dari 2 Tahun' )){
	echo"<input type='number' class='span10'  name='sk1'value='$bobot10' readonly />";
				}else if(($_data['pengalaman']== 'Belum Pernah' )){
					echo"<input type='number' class='span10'  name='sk1' value='$bobot11'readonly />";
				}
				echo"</td>
    <td>$u3</td>
    <td>100</td>
    <td><b><span class='alert alert-success'>$_data[h3]</span></b></td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <th></th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th></th>
    
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>NILAI TES :  </td>
	<td><b><div class='alert alert-success'>$_data[nilaites] </div></b></td>
    <td>$bobot4</td>
   
    <td>";
				if(($_data['nilaites'] > 80 )){
	
	echo"<input type='number' class='span10'  name='sk4'value='$bobot9' readonly />";
				}else if(($_data['nilaites'] >=71 && $_data['nilaites'] <=80 )){
	echo"<input type='number' class='span10'  name='sk4'value='$bobot10' readonly />";
				}else if(($_data['nilaites'] >=60 && $_data['nilaites'] <=70 )){
					echo"<input type='number' class='span10'  name='sk4'value='$bobot11' readonly />";
				}
				echo"</td>
    <td>$u4</td>
    <td>100</td>
    <td><b><span class='alert alert-success'>$_data[h4]</span></b></td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <th></th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th></th>
    
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>KEMAMPUAN BERKOMUNIKASI : </td>
				<td><b><div class='alert alert-success'>$_data[wawancara]</div></b></td>
    <td>$bobot5</td>
    
    <td>";
				if(($_data['wawancara']== 'Sangat Komunikatif' )){
	
	echo"<input type='number' class='span10'  name='sk7' value='$bobot9' readonly />";
				}else if(($_data['wawancara']== 'Komunikatif' )){
					echo"<input type='number' class='span10'  name='sk7' value='$bobot10' readonly />";
				}else if(($_data['wawancara']== 'Tidak Komunikatif' )){
	echo"<input type='number' class='span10'  name='sk7' value='$bobot11' readonly />";
				}
				echo"</td>
    <td>$u5</td>
    <td>100</td>
    <td><b><span class='alert alert-success'>$_data[h5]</span></b></td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <th></th>
    <th>&nbsp;</th>
	<th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th></th>
    
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>KESEHATAN :  </td>
				 <td> <b><div class='alert alert-success'>$_data[kesehatan]</div></b></td>
				
    <td>$bobot6</td>
    
    <td>";
				if(($_data['kesehatan']== 'Tidak ADA(sehat,bebas narkoba, tidak buta warna)' )){
	echo"<input type='number' class='span10'  name='sk10' value='$bobot9'readonly />";
				}else if(($_data['kesehatan']== 'Memili Penyakit yang berhubungan dengan pendengaran dan penglihatan' )){
	echo"<input type='number' class='span10'  name='sk10' value='$bobot10'readonly />";
				}else if(($_data['kesehatan']== 'Memiliki Penyakit Dalam' )){
	echo"<input type='number' class='span10'  name='sk10' value='$bobot11'readonly />";
				}
				echo"</td>
    <td>$u6</td>
    <td>$_data[nreal]</td>
    <td><b><span class='alert alert-success'>$_data[h6]</span></b></td>
    <th>&nbsp;</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
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
   </div>
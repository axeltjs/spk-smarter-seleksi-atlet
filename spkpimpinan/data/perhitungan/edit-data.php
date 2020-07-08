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


$SQL=mysqli_query($koneksi,"SELECT * FROM peserta WHERE id_calon='$_GET[id]'");
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
		 
            <table class="table table-bordered data-table">
             
                <tr>
                 <th width="3%">Nama</th>
    <th width="2%">Kriteria </th>
	<th width="4%"> </th>
	
    <th width="4%">Bobot Kriteria</th>
	<th width="4%">Bobot Sub Kriteria</th>
    <th width="1%">Sub Kriteria</th>
    
    <th width="2%">Nilai Real</th>
                </tr>
             
              <tbody>
               <?php
			   
			   
				   
				   
				   echo"
				   <form action='$loadModule?load=hitung&action=prosesData' method='POST' class='form-horizontal' enctype='multipart/form-data'>
				  <tr class='$class'>
				   <td> <input type='hidden' name='id' value='$_data[id_calon]'> <input type='text' class='span15'  name='txtnama' value='$_data[nama]'readonly  /></td>
                  <td>JENJANG PENDIDIKAN : </td>
				  <td><input type='text' class='span15'  name='jp' value='$_data[jpendidikan]' readonly /></td>
    <td><input type='text' class='span15' readonly name='k1' value='$_data1[bobot]' required /></td>
    <td><input type='text' class='span15'  name='s1' readonly value='$_data7[bobot]'/> 
				</td>
    <td>SARJANA</td>
    <td><input type='number' class='span10'  name='r1' placeholder='0'  /></td>
    
                </tr> 
				<tr>
    <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
    <th>&nbsp;</th>
	 <th>&nbsp;</th>
    <td><input type='text' class='span15'  name='ss'readonly value='$_data8[bobot]'required /> </td>
    <td>DIPLOMA</td>
    <td><input type='number' class='span10'  name='r2' placeholder='0'  /> </td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>USIA :  </td>
	<td><input type='text' class='span15'  name='txtusia' value='$_data[usia] TAHUN' readonly /> </td>
    <td><input type='number' class='span15'  name='k2' value='$_data2[bobot]' readonly /></td>
    <td><input type='number' class='span15'  name='s2' value='$_data9[bobot]' readonly /></td>
    <td>20 - 25 TAHUN</td>
    <td><input type='number' class='span10'  name='r3'  placeholder='0' /></td>
  </tr>
 
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <tD><input type='number' class='span15'  name='ss1'value='$_data10[bobot]' readonly /></tD>
    <td>26 - 30 TAHUN</td>
    <td><input type='number' class='span10'  name='rr1'  placeholder='0'  /></td>
  </tr>
  
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tD> <input type='number' class='span15'  name='ss2' value='$_data11[bobot]'readonly /></tD>
    <td>> 30 TAHUN</td>
    <td><input type='number' class='span10'  name='rr2' placeholder='0'   /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>PENGALAMAN KERJA : </td>
				    <td> <select name='pn' class='span15' readonly >
				
                  <option  >$_data[pengalaman]</option>
				  
				  <option value='> 2 Tahun'> > 2 Tahun</option>
													<option value='< 2 Tahun'> < 2 Tahun</option>
													<option value='Belum Pernah'> Belum Pernah</option>
				 
					
                </select></td>
    <td><input type='number' class='span15'  name='k3' value='$_data3[bobot]' readonly /></td>
    <td> <input type='number' class='span15'  name='sk1'value='$_data9[bobot]' readonly /></td>
    <td>> 2 TAHUN</td>
    <td><input type='number' class='span10'  name='rr3'  placeholder='0'  /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td><input type='number' class='span15'  name='sk2'value='$_data10[bobot]' readonly /></td>
    <td>< 2 TAHUN</td>
    <td><input type='number' class='span10'  name='rr4'  placeholder='0' /></td>
  </tr>
  
  <tr>
  <th>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td><input type='number' class='span15'  name='sk3' value='$_data11[bobot]'readonly /></td>
    <td>BELUM PERNAH</td>
    <td><input type='number' class='span10'  name='rr5' placeholder='0'  /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>NILAI TES :  </td>
	<td> <input type='number' class='span15'  name='txtnilai' value='$_data[nilaites]' readonly /> </td>
    <td><input type='number' class='span15'  name='k4' value='$_data4[bobot]' readonly /></td>
    <td><input type='number' class='span15'  name='sk4'value='$_data9[bobot]' readonly /> </td>
    <td>> 80</td>
    <td><input type='number' class='span10'  name='r4'  placeholder='0' /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	 <tH>&nbsp;</tH>
    <tH></tH>
    <td> <input type='number' class='span15'  name='sk5'value='$_data10[bobot]' readonly /></td>
    <td>71 - 80</td>
    <td><input type='number' class='span10'  name='rrr4'  placeholder='0' /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td><input type='number' class='span15'  name='sk6'value='$_data11[bobot]' readonly /></td>
    <td>60 - 70</td>
    <td><input type='number' class='span10'  name='rrr5' placeholder='0'  /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>KEMAMPUAN BERKOMUNIKASI : </td>
				<td><select name='kb' class='span15' readonly >
				
                  <option  >$_data[wawancara]</option>
				  
				  <option value='Sangat Komunikatif'> Sangat Komunikatif</option>
					<option value='Komunikaif'> Komunikaif</option>
					<option value='Tidak Komunikatif'> Tidak Komunikatif</option>
				 
					
                </select></td>
    <td><input type='number' class='span15'  name='k5' value='$_data5[bobot]' readonly /></td>
    <td><input type='number' class='span15'  name='sk7' value='$_data9[bobot]' readonly /></td>
    <td>SANGAT KOMUNIKATIF</td>
    <td><input type='number' class='span10'  name='rrr6' placeholder='0'  /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td><input type='number' class='span15'  name='sk8' value='$_data10[bobot]' readonly /></td>
    <td>KOMUNIKATIF</td>
    <td><input type='number' class='span10'  name='rrr7' placeholder='0'  /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td><input type='number' class='span15'  name='sk9' value='$_data11[bobot]' readonly/></td>
    <td>TIDAK KOMUNIKATIF</td>
    <td><input type='number' class='span10'  name='rrr8'  placeholder='0' /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td></td>
    <td>&nbsp;</td>
	<td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>KESEHATAN (MCU) :  </td>
				 <td> <select name='kesehatan' class='span15' readonly >
				
                  <option >$_data[kesehatan]</option>
				  
				  
				<option value='Tidak ADA(sehat,bebas narkoba, tidak buta warna)'> Tidak ADA(sehat,bebas narkoba, tidak buta warna)</option>
				<option value='Memili Penyakit yang berhubungan dengan pendengaran dan penglihatan'> Memili Penyakit yang berhubungan dengan pendengaran dan penglihatan</option>
				<option value='Memiliki Penyakit Dalam'> Memiliki Penyakit Dalam</option>
                                         
					
                </select></td>
				
    <td><input type='number' class='span15'  name='k6' value='$_data6[bobot]' readonly /></td>
    <td><input type='number' class='span15'  name='sk10' value='$_data9[bobot]'readonly /></td>
    <td>TIDAK ADA</td>
    <td><input type='number' class='span10'  name='rrr9' placeholder='0'  /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH></tH>
    <td><input type='number' class='span15'  name='sk11' value='$_data10[bobot]'readonly /></td>
    <td>MEMILIKI PENYAKIT PENDENGARAN DAN PENGLIHATAN</td>
    <td><input type='number' class='span10'  name='rrr10' placeholder='0'  /></td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <td><input type='number' class='span15'  name='sk12' value='$_data11[bobot]'readonly /></td>
    <td>MEMILIKI PENYAKIT DALAM</td>
    <td>
	
	
	<input type='number' class='span10'  name='rrr11' placeholder='0' /></td>
  </tr>
		
  
  ";
				   
				   
				 
			   ?>
               
                
              </tbody>
            </table>
			<div class='form-actions'>
              <button type='submit' class='btn btn-success'>Proses Data</button>
            </div>
          </div>
		  
		  </form>
        </div>
      </div>
    </div>
  </div>
     



<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>





				

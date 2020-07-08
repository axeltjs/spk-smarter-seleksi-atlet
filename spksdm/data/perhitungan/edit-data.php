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


$SQL=mysqli_query($koneksi,"SELECT * FROM peserta WHERE id_calon='$_GET[id]'");
$_data=mysqli_fetch_array($SQL);

?>
 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=hitung" class="current">Module SMARTER</a> </div>
    <h1>Proses Perhitungan SMARTER</h1>
  </div>
  <HR>
<div class="alert alert-success">
			<?php
			
			
			
						echo"<center><b>  NILAI REAL 100 ADALAH MEMPRESENTASEKAN KEMUTLAKAN DARI KRITERIA DAN SUB KRITERIA YANG TERPILIH !!!.</b></center>
				";
				
				?>		
          </div>
<div class="container-fluid">
   
    <div class="row-fluid">
      <div class="span12">
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Proses Perhitungan</h5>
          </div>
		  
		  
		   <div style="overflow-x:auto;">
          <div class="widget-content nopadding">
		 
            <table class="table table-bordered data-table">
             
                <tr>
                 <th width="5%">Nama</th>
    <th width="2%">Kriteria </th>
	<th width="10%">Sub Kriteria Yang Terpilih </th>
	
    <th width="2%">Bobot Kriteria</th>
	<th width="2%">Bobot Sub Kriteria</th>
    
    
    <th width="2%">Nilai Real</th>
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
			   
				   
				   
				   echo"
				   <form action='$loadModule?load=hitung&action=prosesData' method='POST' class='form-horizontal' enctype='multipart/form-data'>
				  <tr class='$class'>
				   <td> <input type='hidden' name='id' value='$_data[id_calon]'> <input type='text' class='span15'  name='txtnama' value='$_data[nama]'readonly  /></td>
                  <td>JENJANG PENDIDIKAN : </td>
				  <td><input type='text' class='span15'  name='jp' value='$_data[jpendidikan]' readonly /></td>
    <td><input type='text' class='span10' readonly name='k1' value='$bobot1 ' required /></td>
    <td>
";
				if(($_data['jpendidikan'] == 'SARJANA' )){
echo"<input type='text' class='span10'  name='s1' readonly value=' $bobot7'/>";
				}elseif(($_data['jpendidikan'] == 'DIPLOMA' )){
				echo"<input type='text' class='span10'  name='s1'readonly value='$bobot8' required />";
				}
			echo"	</td>
    
    <td>
	<select name='r1' class='span10' readonly >
				
                  
				  
				  <option value='100' > 100</option>
                </select>	</td>
                </tr> 
				<tr>
    <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
    <th>&nbsp;</th>
	 <th>&nbsp;</th>
    <th> </th>
    
    <th>		</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>USIA :  </td>
	<td><input type='text' class='span15'  name='txtusia' value='$_data[usia]' readonly /> </td>
    <td>
	<input type='number' class='span10'  name='k2' value='$bobot2' readonly />	</td>
    <td>
	";
				if(($_data['usia'] >=20 && $_data['usia'] <=25 )){
	
	echo"<input type='number' class='span10'  name='s2' value='$bobot7' readonly />";
				}
	
	elseif (($_data['usia'] >=26 && $_data['usia'] <=30)){
						
						echo"<input type='number' class='span10'  name='s2'value='$bobot8'  readonly />";
				}
	echo"	</td>
    
    <td>
	<select name='r2' class='span10' readonly >
				
                 
				  
				  <option value='100' > 100</option>
                </select>	</td>
  </tr>
 
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <th></th>
    
    <th>		</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>PENGALAMAN KERJA : </td>
				    <td> <select name='pn' class='span19' readonly >
				
                  <option  >$_data[pengalaman]</option>
				  
				  <option value='Lebih Dari Samadengan 2 Tahun'> Lebih Dari Samadengan 2 Tahun</option>
													<option value='Kurang Dari 2 Tahun'> Kurang Dari 2 Tahun</option>
													<option value='Belum Pernah'> Belum Pernah</option>
				 
					
                </select></td>
    <td><input type='number' class='span10'  name='k3' value='$bobot3' readonly /></td>
    <td> 
	";
				if(($_data['pengalaman']== 'Lebih Dari Samadengan 2 Tahun' )){
	
	echo"<input type='number' class='span10'  name='sk1'value='$bobot9' readonly />";
				}else if(($_data['pengalaman']== 'Kurang Dari 2 Tahun' )){
	echo"<input type='number' class='span10'  name='sk1'value='$bobot10' readonly />";
				}else if(($_data['pengalaman']== 'Belum Pernah' )){
					echo"<input type='number' class='span10'  name='sk1' value='$bobot11'readonly />";
				}
				echo"	</td>
   
    <td>
	
	<select name='r3' class='span10' readonly >
				
                 
				  
				  <option value='100' > 100</option>
                </select>	</td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <th></th>
   
    <th>		</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>NILAI TES :  </td>
	<td> <input type='number' class='span15'  name='txtnilai' value='$_data[nilaites]' readonly /> </td>
    <td><input type='number' class='span10'  name='k4' value='$bobot4' readonly /></td>
    <td>
	";
				if(($_data['nilaites'] > 80 )){
	
	echo"<input type='number' class='span10'  name='sk4'value='$bobot9' readonly />";
				}else if(($_data['nilaites'] >=71 && $_data['nilaites'] <=80 )){
	echo"<input type='number' class='span10'  name='sk4'value='$bobot10' readonly />";
				}else if(($_data['nilaites'] >=60 && $_data['nilaites'] <=70 )){
					echo"<input type='number' class='span10'  name='sk4'value='$bobot11' readonly />";
				}
				echo"	</td>
    
    <td>
	<select name='r4' class='span10' readonly >
				
                 
				  
				  <option value='100' > 100</option>
                </select>	</td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	 <tH>&nbsp;</tH>
    <tH></tH>
    <th> </th>
    
    <th>		</th>
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
    <td><input type='number' class='span10'  name='k5' value='$bobot5' readonly /></td>
    <td>
	";
				if(($_data['wawancara']== 'Sangat Komunikatif' )){
	
	echo"<input type='number' class='span10'  name='sk7' value='$bobot9' readonly />";
				}else if(($_data['wawancara']== 'Komunikatif' )){
					echo"<input type='number' class='span10'  name='sk7' value='$bobot10' readonly />";
				}else if(($_data['wawancara']== 'Tidak Komunikatif' )){
	echo"<input type='number' class='span10'  name='sk7' value='$bobot11' readonly />";
				}
				echo"	</td>
   
    <td>
	<select name='r5' class='span10'readonly >
				
                 
				  
				  <option value='100' > 100</option>
                </select>	</td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH>&nbsp;</tH>
    <th></th>
    
    <th>		</th>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <td>KESEHATAN :  </td>
				 <td> <select name='kesehatan' class='span15' readonly >
				
                  <option >$_data[kesehatan]</option>
				  
				  
				<option value='Tidak ADA(sehat,bebas narkoba, tidak buta warna)'> Tidak ADA(sehat,bebas narkoba, tidak buta warna)</option>
				<option value='Memili Penyakit yang berhubungan dengan pendengaran dan penglihatan'> Memili Penyakit yang berhubungan dengan pendengaran dan penglihatan</option>
				<option value='Memiliki Penyakit Dalam'> Memiliki Penyakit Dalam</option>
                                         
					
                </select></td>
				
    <td><input type='number' class='span10'  name='k6' value='$bobot6' readonly /></td>
    <td>
	";
				if(($_data['kesehatan']== 'Tidak ADA(sehat,bebas narkoba, tidak buta warna)' )){
	echo"<input type='number' class='span10'  name='sk10' value='$bobot9'readonly />";
				}else if(($_data['kesehatan']== 'Memili Penyakit yang berhubungan dengan pendengaran dan penglihatan' )){
	echo"<input type='number' class='span10'  name='sk10' value='$bobot10'readonly />";
				}else if(($_data['kesehatan']== 'Memiliki Penyakit Dalam' )){
	echo"<input type='number' class='span10'  name='sk10' value='$bobot11'readonly />";
				}
				echo"	</td>
    
    <td>
	<select name='r6' class='span10'readonly >
				
                  
				  
				  <option value='100' > 100</option>
                </select>	</td>
  </tr>
  <tr>
  <th rowspan>&nbsp;</th>
    <tH>&nbsp;</tH>
	<tH>&nbsp;</tH>
    <tH></tH>
    <th></th>
   
    <th>
		</th>
  </tr>
		
  <input type='hidden' name='n1' value='$_data[n1]'> <input type='hidden' name='n2' value='$_data[n2]'> <input type='hidden' name='n3' value='$_data[n3]'> 
  <input type='hidden' name='n4' value='$_data[n4]'> 
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





				

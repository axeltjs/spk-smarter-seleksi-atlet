<?php
$SQL1=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='KEMINATAN'");
$_data1=mysqli_fetch_array($SQL1);

$SQL2=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='usia'");
$_data2=mysqli_fetch_array($SQL2);

$SQL3=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='KETERAMPILAN'");
$_data3=mysqli_fetch_array($SQL3);

$SQL4=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='NILAI TES'");
$_data4=mysqli_fetch_array($SQL4);

$SQL5=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='KEMAMPUAN BERKOMUNIKASI'");
$_data5=mysqli_fetch_array($SQL5);

$SQL6=mysqli_query($koneksi,"SELECT * FROM kriteria where nama_kriteria='KELENGKAPAN BERKAS'");
$_data6=mysqli_fetch_array($SQL6);

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
				   echo"
				   <form action='$loadModule?load=hitung&action=prosesData' method='POST' class='form-horizontal' enctype='multipart/form-data'>
				  <tr class='$class'>
           <td> <input type='hidden' name='id' value='$_data[id_calon]'> 
           <input type='text' class='span15'  name='txtnama' value='$_data[nama]'readonly  /></td>
           <td>NILAI TES :  </td>
           <td> <input type='number' class='span15'  name='nilai_tes' value='$_data[nilaites]' readonly /> </td>
             <td><input type='number' class='span10'  name='bobot_nilai_tes' value='$bobot1' readonly /></td>
             <td>
             ";
             if($_data['nilaites'] > 80){
               echo "<input type='text' class='span10' readonly name='sub_bobot_nilai_tes' value='0.611' required />";
             }elseif($_data['nilaites'] > 70){
               echo "<input type='text' class='span10' readonly name='sub_bobot_nilai_tes' value='0.278' required />";
             }else{
               echo "<input type='text' class='span10' readonly name='sub_bobot_nilai_tes' value='0.111' required />";
             }
             echo "
             </td>
    
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
    
  <td>KEMINATAN : </td>
  <td><input type='text' class='span15'  name='nilai_keminatan' value='$_data[keminatan]' readonly /></td>
<td>
<input type='text' class='span10' readonly name='bobot_keminatan' value='$bobot1 ' required />
</td>
<td>
";
if($_data['keminatan'] == 90){
echo "<input type='text' class='span10' readonly name='sub_bobot_keminatan' value='0.611' required />";
}elseif($_data['keminatan'] == 80){
echo "<input type='text' class='span10' readonly name='sub_bobot_keminatan' value='0.278' required />";
}else{
echo "<input type='text' class='span10' readonly name='sub_bobot_keminatan' value='0.111' required />";
}
echo "
</td>
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
    <td>KETERAMPILAN : </td>
				    <td> <select name='nilai_keterampilan' class='span19' readonly >
                  <option  >$_data[keterampilan]</option>
                </select></td>
    <td><input type='number' class='span10'  name='bobot_keterampilan' value='$bobot3' readonly /></td>
    <td> 
    ";
      if($_data['keterampilan'] == 90){
        echo "<input type='text' class='span10' readonly name='sub_bobot_keterampilan' value='0.611' required />";
      }elseif($_data['keterampilan'] == 80){
        echo "<input type='text' class='span10' readonly name='sub_bobot_keterampilan' value='0.278' required />";
      }else{
        echo "<input type='text' class='span10' readonly name='sub_bobot_keterampilan' value='0.111' required />";
      }
      echo "
    </td>
   
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
    
  <td>USIA :  </td>
	<td><input type='text' class='span15'  name='nilai_usia' value='$_data[usia]' readonly /> </td>
    <td>
	<input type='number' class='span10'  name='bobot_usia' value='$bobot2' readonly />	</td>
    <td>
    ";
  if($_data['usia'] <= 15){
    echo "<input type='text' class='span10' readonly name='sub_bobot_usia' value='0.611' required />";
  }elseif($_data['usia'] >= 16 && $_data['usia'] <= 20){
    echo "<input type='text' class='span10' readonly name='sub_bobot_usia' value='0.278' required />";
  }else{
    echo "<input type='text' class='span10' readonly name='sub_bobot_usia' value='0.111' required />";
  }
  echo "
	</td>
    
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
    <td>KELENGKAPAN BERKAS : </td>
				<td><select name='nilai_kelengkapan' class='span15' readonly >
				
                  <option  >$_data[kelengkapan]</option>
					
                </select></td>
    <td><input type='number' class='span10'  name='bobot_kelengkapan' value='$bobot6' readonly /></td>
    <td>
    ";
    if($_data['kelengkapan'] == 90){
      echo "<input type='text' class='span10' readonly name='sub_bobot_kelengkapan' value='0.611' required />";
    }elseif($_data['kelengkapan'] == 80){
      echo "<input type='text' class='span10' readonly name='sub_bobot_kelengkapan' value='0.278' required />";
    }else{
      echo "<input type='text' class='span10' readonly name='sub_bobot_kelengkapan' value='0.111' required />";
    }
    echo "
</td>
   
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
		
  <input type='hidden' name='n1' value='$_data[n1]'> 
  <input type='hidden' name='n2' value='$_data[n2]'> 
  <input type='hidden' name='n3' value='$_data[n3]'> 
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





				

 
 
 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=jadwal" class="current">Module Perhitungan</a> </div>
    <h1>Daftar Data Hasil Perhitungan SMARTER</h1>
  </div>
  
  <div class="container-fluid">
    <hr>
	<div class="alert alert-success">
			<?php
			$SQL2=mysqli_query($koneksi,"SELECT * FROM hasil order by rank DESC");
			  
			   $_data2=mysqli_fetch_array($SQL2);
			
			
						echo"<center><b> Hasil perhitungan dengan nilai tertinggi Pertama Yaitu: $_data2[rank] .Atas Nama : $_data2[nama]. </b></center>
				";
				
				?>	
 </div>	
	
    <div class="row-fluid">
      <div class="span12">
	      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data Perhitungan</h5>
          </div>
		   <form action='?load=hasil&action=t'  method='POST' class='form-horizontal' enctype='multipart/form-data'>
         
		  <div style="overflow-x:auto;">
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="5%" height="58">No</th>
				  <th width="5%" height="58">Rangking</th>
				  <th >kode</th>
                  <th width="14%">Nama</th>
				    <th width="5%">Usia</th>
					 <th width="13%">Keminatan</th>
					  <th width="13%">Nilai Tes</th>
					   <th width="13%">Keterampilan</th>
					    <th width="15%">Kelengkapan Berkas</th>
                  <th width="13%">Hasil Akhir</th>
				   <th width="20%">Keterangan</th>
					
                 
                </tr>
              </thead>
              <tbody>
			  
			  <?php
			
			   
			   echo"<input type='text' name='hh'  value='$_POST[jml] 'readonly>";
				   ?>
				   <?php
			   $angka=$_POST['jml'];
			   
			   $SQL=mysqli_query($koneksi,"SELECT * FROM hasil order by rank DESC");
			   $no=1;
			   while($_data=mysqli_fetch_array($SQL)){
				 if ($no >= 1 && $no <= $angka ){
									$keputusan = 'LULUS';
								}
								else{
									$keputusan = 'TIDAK LULUS';
								}
		
				 	mysqli_query($koneksi, "UPDATE hasil SET ket = '$keputusan' WHERE id_calon = '$_data[id_calon]'");
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$no </td>
				 <td><input type='text'name='idc[]' value='$_data[id_calon]' readonly></td>
				  <td>$_data[nama] </td>
				  <td>$_data[usia] </td>
				  <td>$_data[n1] </td>
				  <td>$_data[nilaites] </td>
				  <td>$_data[n5] </td>
				  <td>$_data[n4] </td>
					<td>$_data[rank] </td>
					<td><div class='alert alert-danger'><input type='text' name='ket[]'  value='$keputusan 'readonly></div></td>
				  
                  
				  
                  
                </tr> 
			  
				   ";
				$no++; }
			   ?>
              </tbody>
            </table>
						
          </div>
          </div>
        </div>
		
			 </form>  
			 
			
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



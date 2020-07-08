 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=jadwal" class="current">Module Perhitungan</a> </div>
    <h1>Daftar Data Pengumuman Peserta</h1>
  </div>
  <div class="container-fluid">
    <hr>
	
	
	
	<div class="alert alert-success">
			<?php
			$SQL=mysqli_query($koneksi,"SELECT * FROM hasil where id_calon='$_SESSION[id_calon]'  order by rank DESC");
			   $no=1;
			   $_data=mysqli_fetch_array($SQL);
				 
				  if ($_data['ket']== 'LULUS' ){
									$keputusan = '<span style="color:green">LULUS</span>';
								}else IF($_data['ket']== 'TIDAK LULUS' ){
									$keputusan = '<span style="color:red">TIDAK LULUS </span>';
								}else{
									$keputusan = '<span style="color:yellow">??? </span>';
								}
			
			
						echo"<center><H1><b>ANDA : $keputusan </b></H1></center>
				";
				
				?>	
 </div>	
 
 
 
	
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data Perhitungan</h5>
          </div>
		  <div style="overflow-x:auto;">
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="2%" height="58">No</th>
				  <th width="5%" height="58">ID Peserta</th>
                  <th width="14%">Nama</th>
                  
                  
				  <th width="13%">Keterangan</th>
					
                 
                </tr>
              </thead>
              <tbody>
               <?php
			   
			   $SQL=mysqli_query($koneksi,"SELECT * FROM hasil where id_calon='$_SESSION[id_calon]' order by rank DESC");
			   $no=1;
			   while($_data=mysqli_fetch_array($SQL)){
				 
				  if ($_data['ket']== 'LULUS' ){
									$keputusan = '<span style="color:green">LULUS</span>';
								}else{
									$keputusan = '<span style="color:red">TIDAK LULUS</span>';
								}
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$_data[id_calon] </td>
				  <td>$_data[nama] </td>
				  
					
					
					
					<td>$keputusan </td>
				   
                  
				  
                  
                </tr> 
				   
				   ";
				   
				   
				  $no++; }
			   ?>
               
                
              </tbody>
            </table>
			
		   </div>
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



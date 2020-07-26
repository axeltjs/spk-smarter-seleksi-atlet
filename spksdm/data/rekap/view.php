<div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=member" class="current">Module Pimpinan</a> </div>
    <h1>Daftar Data Rekap Nilai</h1>
  </div>
  
  
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Laporan Yang Ingin Dicetak</h5>
        </div>
        <div class="widget-content nopadding">
		
		
          <form action="data/rekap/cetak1.php" target="_blank" method="POST" class="form-horizontal" enctype="multipart/form-data">
           <div class="control-group">
              <label class="control-label">Periode Tahun</label>
              <div class="controls">
               <select  name="tahun">
                 
                 <?php
				 for($i=2017;$i<=date('Y')+2;$i++){
		echo '<option'.($i==date('Y')?' selected':'').' value="'.$i.'">'.$i.'</option>';
	}
				 ?>
                </select>
              </div>
            </div>
         
			<div class="control-group">
              <label class="control-label">Cetak Laporan</label>
              <div class="controls">
               <ul style="list-style:none;margin:10px 0 0">
	<li><input id="op_semua" checked type="radio" class="" name="op_lap" value="hasil"/><label for="op_s">&nbsp; Rekap Nilai</label></li>
	</ul>
              </div>
            </div>
                
            <div class="form-actions">
             
			  <button type="submit" class="btn btn-success" > Cetak</button>

            </div>
          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
  
  <div class="container-fluid">
    <hr>
	
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data Rekap Nilai Peserta</h5>
          </div>
		 <div style="overflow-x:auto;">
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table ">
			
              <thead>
                <tr>
                  <th width="2%">No</th>
                  <th width="2%">Nama </th>
                  <th th width="2%">Usia</th>
				  <th th width="2%">Nilai Keminatan</th>
				  <th th width="2%">Nilai Keterampilan</th>
				  <th width="2%">Nilai Tes</th>
				  <th th width="2%">Nilai Kelengkapan Berkas</th>
                  <th width="1%">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysqli_query($koneksi,"SELECT * FROM peserta WHERE validasi='SIAP1' order by id_calon DESC");
			   $no=1;
			   while($_data=mysqli_fetch_array($SQL)){
				  
				   
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$_data[nama]</td>
				  <td>$_data[usia]</td>
				  <td>$_data[keminatan]</td>
				  <td>$_data[keterampilan]</td>
				  <td>$_data[nilaites]</td> 
				  <td>$_data[kelengkapan]</td> 
				  
                  <td class='center'> 
         				  
           <a href='data/rekap/cetak2.php?id=$_data[id_calon]'><button class='btn btn-primary'> <i class='icon-print'></i> &nbsp; Cetak</button></a>
             
					
            
           </td>
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
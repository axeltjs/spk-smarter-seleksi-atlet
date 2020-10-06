 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=jadwal" class="current">Module Perhitungan</a> </div>
    <h1>Daftar Data Nilai Pendaftar</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data Nilai</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="1%">No</th>
				  <th width="2%">Nama</th>
				 <th width="2%">Jenjang Pendidikan</th>
				 <th width="2%">Usia</th>
				 <th width="2%">Pengalaman Kerja</th>
				 <th width="2%">Keterampilan</th>
				 <th width="1%">Kemampuan Berkomunikasi</th>
				 <th width="5%">Kesehatan(MCU)</th>
                  
                 
                </tr>
              </thead>
              <tbody>
               <?php
			   
			   $SQL=mysqli_query($koneksi,"SELECT * FROM peserta WHERE validasi ='SIAP'  order by id_calon asc");
			   $no=1;
			   while($_data=mysqli_fetch_array($SQL)){
				 
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$_data[nama] </td>
				   <td>$_data[jpendidikan] </td>
				    <td>$_data[usia] </td>
					<td>$_data[pengalaman] </td>
					<td>$_data[nilaites] </td>
					<td>$_data[wawancara] </td>
					<td>$_data[kesehatan] </td>
				   
				  
                 
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



<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>



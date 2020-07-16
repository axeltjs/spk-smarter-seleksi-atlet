 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=jadwal" class="current">Module Sub Kriteria</a> </div>
    <h1>Daftar Data Sub Kriteria</h1>
  </div>
  <div class="container-fluid">
  <a href="frame.php?load=subinput" class="btn btn-primary">Tambah Sub Kriteria</a>
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data Sub Kriteria</h5>
          </div>
		   <div style="overflow-x:auto;">
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="1%">No</th>
				  <th width="5%">Kriteria</th>
                  <th width="10%">Sub Kriteria</th>
                  <th width="5%">Prioritas</th>
                  <th width="5%">Bobot</th>
                  <th width="5%">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysqli_query($koneksi,"SELECT * FROM sub_kriteria order by id_sub asc");
			   $no=1;
			   while($_data=mysqli_fetch_array($SQL)){
				   
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				   <td>$_data[nama_kriteria] </td>
                  <td>$_data[nama_sub]</td>
                  <td>$_data[prioritas] </td>
				  <td>$_data[bobot] </td>
          <td><a class='btn btn-warning' href='frame.php?load=subedit&id=".$_data[id_sub]."'> Edit</a> 
          <a class='btn btn-danger' onclick='return confirm(".'"Anda yakin ingin menghapus data ini?"'.")' href='/spkpimpinan/data/sub/hapus.php?id=".$_data[id_sub]."'> Hapus</a></td>
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
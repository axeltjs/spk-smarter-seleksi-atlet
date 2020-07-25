 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=pengguna" class="current">DATA KRITERIA</a> </div>
    <h1>Data Grup</h1>
  </div>
  <div class="container-fluid">
  <a href="frame.php?load=kategori-input" class="btn btn-primary">Tambah Grup</a>
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data</h5>
          </div>
		   <div style="overflow-x:auto;">
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="1%">No</th>
                  <th width="15%">NAMA Grup</th>
                  <th width="3%">AKSI</th>
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysqli_query($koneksi,"SELECT * FROM kategori order by nama asc");
			   $no=1;
			   while($_data=mysqli_fetch_array($SQL)){
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$_data[nama]</td>
           <td><a class='btn btn-warning' href='frame.php?load=kategori-edit&id=".$_data[id]."'> Edit</a> 
           <a class='btn btn-danger' onclick='return confirm(".'"Anda yakin ingin menghapus data ini?"'.")' href='/spkpimpinan/data/kategori/hapus.php?id=".$_data[id]."'> Hapus</a></td>
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
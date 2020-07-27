<?php 
    $id = $_GET['id'];
    $sql_kat = mysqli_query($koneksi,"SELECT * FROM kategori where id = $id ");
    $data_kat = mysqli_fetch_array($sql_kat);
?>
<div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=pengguna" class="current">DATA KRITERIA</a> </div>
    <h1>Data Grup</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data <?php echo $data_kat['nama'] ?></h5>
          </div>
		   <div style="overflow-x:auto;">
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="1%">No</th>
                  <th width="19%">KODE PESERTA</th>
                  <th width="80%">NAMA PESERTA</th>
                </tr>
              </thead>
              <tbody>
               <?php

			   $SQL=mysqli_query($koneksi,"SELECT * FROM peserta where kategori = '$data_kat[nama]' order by id_calon asc");
			   $no=1;
			   while($_data=mysqli_fetch_array($SQL)){
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$_data[id_calon]</td>
				  <td>$_data[nama]</td>
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
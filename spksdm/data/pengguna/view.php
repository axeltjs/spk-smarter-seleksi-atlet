 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=member" class="current">Module Pengguna</a> </div>
    <h1>Daftar Pengguna</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       <a href="?load=pengguna&action=input"><button class="btn btn-success"><i class="icon-plus"></i> &nbsp; Tambah Data</button></a>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data Peserta</h5>
          </div>
		   <div style="overflow-x:auto;">
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="2%">No</th>
                
                  <th>Nama Lengkap</th>
                  
				  <th>Alamat</th>
                  <th th width="2%">Kontak</th>
				   
                  <th width="20%">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysqli_query($koneksi,"SELECT * FROM tpengguna ORDER BY nmpengguna ASC");
			   $no=1;
			   while($_data=mysqli_fetch_array($SQL)){
				  
				   
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$_data[nmPengguna]</td>
				  <td>$_data[alamatPengguna]</td>
				  <td>$_data[kontak]</td> 
				  
				   
				
                  <td class='center'> 
          			 <a href='?load=pengguna&action=edit&id=$_data[kdPengguna]'><button class='btn btn-success'><i class='icon-eye-open'></i> &nbsp; Lihat</button></a>
				 	  
             
					 <a href='data/pengguna/hps.php?load=pengguna&action=hapusData&id=$_data[kdPengguna]'><button class='btn btn-danger'><i class='icon-trash'></i> &nbsp; Hapus</button></a>
				 
			 
            
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
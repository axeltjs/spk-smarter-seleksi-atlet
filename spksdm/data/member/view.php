 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=member" class="current">Module Peserta</a> </div>
    <h1>Daftar Peserta</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
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
				   <th width="2%">Akun</th>
				  <th width="2%">STATUS</th>
                  <th width="2%">Validasi</th>
                  <th width="40%">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysqli_query($koneksi,"SELECT * FROM peserta ORDER BY id_calon ASC");
			   $no=1;
			   while($_data=mysqli_fetch_array($SQL)){
				  
				   
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$_data[nama]</td>
				  <td>$_data[alamat]</td>
				  <td>$_data[no_hp]</td> 
				  
				   <td>$_data[aktif]</td> 
				   <td>$_data[status]</td> 
				   <td>$_data[validasi1]</td> 
				  
				  
				
                  <td class='center'> 
 <a href='$loadModule?load=member&action=aktif&id=$_data[id_calon]'><button class='btn btn-primary'> <i class='icon-ok'></i> &nbsp; ON</button></a>
  <a href='$loadModule?load=member&action=tidak&id=$_data[id_calon]'><button class='btn btn-warning'> <i class='icon-remove'></i> &nbsp;OF</button></a>
           				  
           <a href='?load=member&action=edit&id=$_data[id_calon]'><button class='btn btn-primary'> <i class='icon-pencil'></i> &nbsp; Validasi</button></a>
             
					 <a href='$loadModule?load=member&action=hapusData&id=$_data[id_calon]'><button class='btn btn-danger'><i class='icon-trash'></i> &nbsp; Hapus</button></a>
				 
			 
            
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
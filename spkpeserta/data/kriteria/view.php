 <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=pengguna" class="current">DATA KRITERIA</a> </div>
    <h1>Data Kriteria</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       <a href="?load=k&action=input"><button  class="btn btn-success" disabled ><i class="icon-plus"></i> &nbsp; Tambah Data</button></a>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Semua Data pengguna</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th width="1%">No</th>
                  <th width="15%">NAMA KRITERIA</th>
                  <th width="2%">PRIORITAS</th>
                  <th width="2%">BOBOT</th>
                 
                  <th width="2%">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
			   $SQL=mysqli_query($koneksi,"SELECT * FROM kriteria order by prioritas asc");
			   $no=1;
			   while($_data=mysqli_fetch_array($SQL)){
				  
				   
				   
				   echo"
				  <tr class='$class'>
                  <td>$no</td>
				  <td>$_data[nama_kriteria]</td>
				  <td>$_data[prioritas]</td>
				   <td>$_data[bobot]</td>
				  
				  
				
                  <td class='center'>  
           <a href='?load=k&action=edit&id=$_data[id_kriteria]'><button class='btn btn-primary'> <i class='icon-pencil'></i> &nbsp; Edit</button></a>
             
					
            
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



<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
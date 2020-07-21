  <div id="content-header">
    <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
         
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
	  <br>
	  
	  
         <li class="bg_lb"> <a href="?load=dashboard"> <i class=""></i> <span class="">
		
        
		<h1 class="text-primary">SELAMAT DATANG DI APLIKASI SISTEM PENDUKUNG KEPUTUSAN (SPK) SELEKSI ATLET PADA FEDERASI CHEERLEADING SELURUH INDONESIA (FSCI)</h1>
 
        
      </ul>
	  
    </div>
	</div>
	
<!--End-Action boxes-->    

<!--Chart-box-->    
    
<!--End-Chart-box--> 
    <hr/>
    
	
	
	
			<?php
			$s=$_SESSION['id_calon'];
			$SQL=mysqli_query($koneksi,"SELECT * FROM peserta where id_calon='$s'");
			 
			   $_data=mysqli_fetch_array($SQL);
				 $k= $_data['jenkel'];
				
				   if (($k == '' AND $k == '')) {
		echo" <div class='alert alert-danger'><P><b>Silahkan Isi dan Lengkapi Data Anda !.</b></P></div>";
				   
					
				 
				}else {
						echo" <div class='alert alert-success'><P><b>APABILA DATA SUDAH LENGKAP. PENDAFTAR YANG LOLOS DALAM SELEKSI BERKAS MAKA AKAN DIHUBUNGI OLEH PIHAK FSCI UNTUK MELAKUKAN SELEKSI TAHAP SELANJUTNYA!</b></P></div>";
			
						}	
				?>		
        
  
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>

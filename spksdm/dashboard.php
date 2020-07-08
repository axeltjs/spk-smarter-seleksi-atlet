  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
	  <br>
	  
	  
         <li class="bg_lb"> <a href="?load=dashboard"> <i class=""></i> <span class="">
		
        
		<h1 class="text-primary">SELAMAT DATANG DI APLIKASI SISTEM PENDUKUNG KEPUTUSAN (SPK) PENERIMAAN TELLER PADA BANK BRI CABANG SAMARINDA</h1>
 
        
      </ul>
	  
    </div>
	</div>

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
	  <br>
	 
         <li class="bg_lo"> <a href="?load=member"> <i class="icon-th-list"></i> <span class="label label-important">
		
        <?php
		$totInvoice=mysqli_query($koneksi,"SELECT * FROM peserta");
		$tot=mysqli_num_rows($totInvoice);
		echo"$tot";
        ?>
		</span>Jumlah Data Pendaftar</a> </li>
        <li class="bg_ls"> <a href="?load=member"> <i class="icon-tint"></i><span class="label label-important">
		<?php
        $totJadwal1=mysqli_query($koneksi,"SELECT * FROM peserta WHERE validasi='SIAP' ");
		$totJ1=mysqli_num_rows($totJadwal1);
		echo"$totJ1";
		?>
        </span>Validasi Data Peserta/Pendaftar</a> </li>
        <li class="bg_lb"> <a href="?load=k"> <i class="icon-pencil"></i><span class="label label-important">
        <?php
		$totInvoiceB=mysqli_query($koneksi,"SELECT * FROM kriteria ");
		$totB=mysqli_num_rows($totInvoiceB);
		echo"$totB";
        ?>
        </span>Jumlah Kriteria</a> </li>
        <li class="bg_lg"> <a href="?load=sub"> <i class="icon-calendar"></i><span class="label label-important">
        <?php
		$totMember=mysqli_query($koneksi,"SELECT * FROM sub_kriteria ");
		$totM=mysqli_num_rows($totMember);
		echo"$totM";
        ?>
        </span> Jumlah Sub Kriteria</a> </li>
        <li class="bg_lr"> <a href="?load=member"> <i class="icon-info-sign"></i> <span class="label label-important">
        <?php
		$tgl=date("Ymd");
		$totJadwal=mysqli_query($koneksi,"SELECT * FROM peserta WHERE aktif='N' ");
		$totJ=mysqli_num_rows($totJadwal);
		echo"$totJ";
        ?>
        </span>Validasi Akun Pendaftar</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    
<!--End-Chart-box--> 
    <hr/>
    
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

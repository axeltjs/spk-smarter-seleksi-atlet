<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=laporan" class="tip-bottom">Module Laporan</a> <a href="?load=pengguna&action=input" class="current">Cetak Laporan</a> </div>
  <h1></h1>
</div>

<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Pilih Laporan Yang Ingin Dicetak</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="data/laporan/cetak1.php" method="get" class="form-horizontal" enctype="multipart/form-data">
           <div class="control-group">
              <label class="control-label">Periode Tahun</label>
              <div class="controls">
               <select class="form-control" style="width:80px !important" name="tahun" id="tahun">
                 
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
	<li><input id="op_semua" checked type="radio" class="" name="op_lap" value="semua"/><label for="op_s">&nbsp; Semua Pendaftar</label></li>
	<li><input id="op_layak" type="radio" class="" name="op_lap" value="hasil"/><label for="op_layak">&nbsp; Hasil Perhitungan</label></li>
	</ul>
              </div>
            </div>
                
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Cetak</button>
            </div>
          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
	 

            
     
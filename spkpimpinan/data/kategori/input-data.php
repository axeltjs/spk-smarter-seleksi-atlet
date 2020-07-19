<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=KRITERIA" class="tip-bottom">Module Kriteria</a> <a href="?load=pengguna&action=input" class="current">Input Data Kriteria</a> </div>
  <h1></h1>
</div>
<?php
include"../../../appConfig/conn.php";

  if(isset($_POST['txtnama'])){
    $SQL="INSERT INTO kategori (nama) 
		VALUES ('$_POST[txtnama]')";
	  mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('/spkpimpinan/frame.php?load=kategori')
	</script>
	";
  }
 
 ?>  
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Isi Data Dengan Lengkap</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
     
          <div class="control-group">
              <label class="control-label">Nama Kategori</label>
              <div class="controls">
                <input type="text" class="span2"  name="txtnama" required />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
     
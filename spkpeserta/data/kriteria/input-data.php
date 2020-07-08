<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=KRITERIA" class="tip-bottom">Module Kriteria</a> <a href="?load=pengguna&action=input" class="current">Input Data Kriteria</a> </div>
  <h1></h1>
</div>
<?php
include"../../../appConfig/conn.php";

		
		//membaca kode barang terbesar
	$sql = "SELECT max(id_KRITERIA) FROM KRITERIA";
	$query = mysqli_query($koneksi,$sql) or die (mysql_error());
 
	$nip = mysqli_fetch_array($query);
 
	if($nip){
		$nilai = substr($nip[0], 1);
		$kode = (int) $nilai;
 
		//tambahkan sebanyak + 1
		$kode = $kode + 1;
		$auto_kode = "K" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
	} else {
		$auto_kode = "K0001";
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
          <form action="data/kriteria/proses.php?load=k&action=simpanData" method="POST" class="form-horizontal" enctype="multipart/form-data">
           <div class="control-group">
              <label class="control-label">ID KRITERIA</label>
              <div class="controls">
                <input type="text" class="span4"  name="txtid" value="<?php echo $auto_kode;?>" readonly="readonly"required />
              </div>
            </div>
          <div class="control-group">
              <label class="control-label">Nama Kriteria</label>
              <div class="controls">
                <input type="text" class="span2"  name="txtnamasub" required />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Prioritas</label>
              <div class="controls">
                <input type="number" class="span1"  name="txtp" required />
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
     
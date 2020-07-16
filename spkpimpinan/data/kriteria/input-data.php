<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=KRITERIA" class="tip-bottom">Module Kriteria</a> <a href="?load=pengguna&action=input" class="current">Input Data Kriteria</a> </div>
  <h1></h1>
</div>
<?php
include"../../../appConfig/conn.php";

		
		//membaca kode barang terbesar
	$sql = "SELECT max(id_KRITERIA) FROM KRITERIA";
	$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
 
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

  if(isset($_POST['txtid'])){
    $SQL="INSERT INTO kriteria (id_kriteria,nama_kriteria,prioritas,
								bobot) 
		VALUES ('$_POST[txtid]','$_POST[txtnamasub]',
				'$_POST[txtp]','$_POST[txtbobot]')";
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
    echo"
	<script language='javascript'>
	window.alert('Data Berhasil Disimpan');
	window.location=('/spkpimpinan/frame.php?load=k')
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
            <div class="control-group">
              <label class="control-label">Bobot</label>
              <div class="controls">
                <input type="number" class="span1"  name="txtbobot" required />
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
     
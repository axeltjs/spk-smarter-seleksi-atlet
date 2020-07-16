<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=lapangan" class="tip-bottom">Module Sub Kriteria</a> <a href="?load=lapangan&action=input" class="current">Input Sub Kriteria</a> </div>
  <h1></h1>
</div>
<?php
include"../../../appConfig/conn.php";

		
		//membaca kode barang terbesar
	$sql = "SELECT max(id_SUB) FROM SUB_KRITERIA";
	$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
 
	$nip = mysqli_fetch_array($query);
 
	if($nip){
		$nilai = substr($nip[0], 1);
		$kode = (int) $nilai;
 
		//tambahkan sebanyak + 1
		$kode = $kode + 1;
		$auto_kode = "S" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
	} else {
		$auto_kode = "S0001";
	}

  if(isset($_POST['txtid'])){
    $SQL="INSERT INTO sub_kriteria (id_sub,nama_sub,prioritas,bobot,nama_kriteria) 
    VALUES 	('$_POST[txtid]','$_POST[txtnamasub]','$_POST[txtpr]','$_POST[txtbobot]','$_POST[kriteria]')";
    mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
    echo"
    <script language='javascript'>
    window.alert('Data Berhasil Disimpan');
    window.location=('/spkpimpinan/frame.php?load=sub')
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
          <form method="POST" class="form-horizontal" enctype="multipart/form-data">
           <div class="control-group">
              <label class="control-label">ID SUB KRITERIA</label>
              <div class="controls">
                <input type="text" class="span4"  name="txtid" value="<?php echo $auto_kode;?>" readonly="readonly"required />
              </div>
            </div>
          <div class="control-group">
              <label class="control-label">Nama Sub Kriteria</label>
              <div class="controls">
                <input type="text" class="span2"  name="txtnamasub" required />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Prioritas</label>
              <div class="controls">
                <input type="number" class="span1"  name="txtpr" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Bobot</label>
              <div class="controls">
                <input type="number" class="span1"  name="txtbobot" required />
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Kriteria</label>
              <div class="controls">
                <select name="kriteria"required >
                  <option>-- Pilih Kriteria--</option>
                 <?php
				 $jam=mysqli_query($koneksi,"SELECT * FROM kriteria ORDER BY prioritas ASC");
				 while($j=mysqli_fetch_array($jam)){
					 echo"<option value='$j[nama_kriteria]'>$j[nama_kriteria]</option>";
					 }
				 ?>
                </select>
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
 
<div id="content-header">
  <div id="breadcrumb"> <a href="?load=dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?load=member" class="tip-bottom">Module Peserta</a> <a href="?load=member&action=input" class="current">Input Data peserta</a> </div>
  <h1></h1>
  <?php
include"../../../appConfig/conn.php";

		
		//membaca kode barang terbesar
	$sql = "SELECT max(id_calon) FROM peserta";
	$query = mysqli_query($koneksi,$sql) or die (mysqli_error());
 
	$nip = mysqli_fetch_array($query);
 
	if($nip){
		$nilai = substr($nip[0], 1);
		$kode = (int) $nilai;
 
		//tambahkan sebanyak + 1
		$kode = $kode + 1;
		$auto_kode = "A" .str_pad($kode, 4, "0",  STR_PAD_LEFT);
	} else {
		$auto_kode = "A0001";
	}

 
 ?>  
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Isi Data Dengan Lengkap</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="data/member/proses.php?load=member&action=simpanData" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              <label class="control-label">ID Peserta:</label>
              <div class="controls">
                <input type="text" class="span6"  name="idp"value="<?php echo $auto_kode;?>" readonly="readonly" />
              </div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Nama Lengkap:</label>
              <div class="controls">
                <input type="text" class="span6" placeholder="Nama Lengkap" name="txtNmLengkap" required />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Tgl Lahir:</label>
              <div class="controls">
                <input type="date" class="span6" placeholder="Tgl Lahir" name="txttgllhr"required />
              </div>
			  </div>
			  <div class="control-group">
              <label class="control-label">Tempat lahir:</label>
              <div class="controls">
                <input type="text" class="span6" placeholder="Tempat lahir" name="txttmptlhr"required />
              </div>
            </div>
           <div class="control-group">
              <label class="control-label">Jenis Kelamin</label>
			  <div class="controls">
              <select class="form-control"name="jk" required>
                                               <option value="">Pilih</option>
													<option value="Laki-laki">Laki-laki</option>
													<option value="Perempuan">Perempuan</option>
                                            </select>
											</div>
            </div>
			<div class="control-group">
              <label class="control-label">Alamat :</label>
              <div class="controls">
                <input type="textarea" class="span5" placeholder="Jl.Example" name="txtAlamat" required />
              </div>
            </div>
              <div class="control-group">
              <label class="control-label">Kontak:</label>
              <div class="controls">
                <input type="number" class="span3" placeholder="0890-000-000" name="txtKontak" required />
              </div>
            </div>
            
			<div class="control-group">
              <label class="control-label">Jenjang Pendidikan</label>
			  <div class="controls">
              <select class="form-control"name="txtjp" required>
                                               <option value="">Pilih</option>
													<option value="SARJANA">SARJANA</option>
													<option value="DIPLOMA">DIPLOMA</option>
                                            </select>
											</div>
            </div>
            
            <div class="control-group">
              <label class="control-label">Usia:</label>
              <div class="controls">
                <input type="number" class="span1" name="txtusia" required />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Pengalaman:</label>
              <div class="controls">
              <select class="form-control"name="pengalaman" required>
                                               <option value="">Pilih</option>
													<option value="> 2 Tahun"> > 2 Tahun</option>
													<option value="< 2 Tahun"> < 2 Tahun</option>
													<option value="Belum Pernah"> Belum Pernah</option>
                                            </select>
											</div>
            </div>
			<div class="control-group">
              <label class="control-label">Nilai Tes:</label>
              <div class="controls">
                <input type="number" class="span2" name="txtnilaites" required />
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Kemampuan Berkomunikasi:</label>
              <div class="controls">
              <select class="form-control"name="txtwawancara" required>
                                               <option value="">Pilih</option>
													<option value="Sangat Komunikatif"> Sangat Komunikatif</option>
													<option value="Komunikatif"> Komunikatif</option>
													<option value="Tidak Komunikatif"> Tidak Komunikatif</option>
                                            </select>
											</div>
            </div>
			
						<div class="control-group">
              <label class="control-label">Kesehatan:</label>
              <div class="controls">
              <select class="form-control"name="txtmcu" required>
                                               <option value="">Pilih</option>
													<option value="Tidak ADA(sehat,bebas narkoba, tidak buta warna)"> Tidak ADA(sehat,bebas narkoba, tidak buta warna)</option>
													<option value="Memili Penyakit yang berhubungan dengan pendengaran dan penglihatan"> Memili Penyakit yang berhubungan dengan pendengaran dan penglihatan</option>
													<option value="Memiliki Penyakit Dalam"> Memiliki Penyakit Dalam</option>
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
     
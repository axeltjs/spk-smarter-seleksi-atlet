
<div class="parallax cover overlay cover-image-full home">
        <div style="width:80%; margin:auto; height:auto;">
            <h2 style="text-align:center; border-bottom:1px solid #999; padding-bottom:20px; margin-bottom:20px;">Sejarah Singkat FCSI</h2>
            <p style="text-align:justify; font-size:15px;">
            Federasi Cheerleading Seluruh Indonesia (FCSI) adalah organisasi yang menaungi olah raga Cheerleading di Indonesia, yang telah berdiri sejak tanggal 25 Februari 2005, dan telah menjadi anggota dari International Federation of Cheerleading (IFC).  <br><br>
            Beberapa program kerja utama FCSI antara lain Kejuaraan Nasional, Sertifikasi Pelatih dan Juri berstandar Internasional, Seminar Penjurian, Seminar Pelatih, serta beberapa kegiatan lainnya dengan standar dari International Federation of Cheerleading (IFC). Sejak 14 tahun silam, Federasi Cheerleading Seluruh Indonesia (FCSI) resmi didirikan. Organisasi tersebut bergerak menaungi olah raga cheerleading yang kerap dipandang biasa. Kendati demikian, FCSI terus bergerak konsisten dan semakin melebarkan sayap ke berbagai daerah di Tanah Air. 
            </p>
        </div>
        
        <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-speed="8" data-opacity="true">
            
        </div>
    </div>
 <?php
include"../../../appConfig/conn.php";

		
		//membaca kode barang terbesar
	$sql = "SELECT max(id_calon) FROM peserta";
	$query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
 
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
    <div class="modal grow modal-overlay modal-backdrop-body fade" id="modal-overlay-signup">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-dialog">
            <div class="v-cell">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="wizard-container wizard-1" id="wizard-demo-1">
                            <div data-scrollable-h>
                                <ul class="wiz-progress">
                                    <li class="active">Mulai Akun</li>
                                    <li>Rincian</li>
                                    <li>Informasi Kontak</li>
                                </ul>
                            </div>
                            <form action="simpan-member.php" method="POST" data-toggle="wizard" class="max-width-500 h-center" enctype="multipart/form-data">
                                <fieldset class="step relative paper-shadow form-horizontal" data-z="2">
                                  <div class="page-section-heading">
                                        <h2 class="text-h3 margin-v-0">Mulai Membuat Akun Anda</h2>
                                        <h3 class="text-h4 margin-v-10 text-grey-400">Silahkan Isi Dan Klik Selanjutnya Untuk Melanjutkan</h3>
                                    </div>
                                  
                                   
                                    <div class="text-right">
                                        <button type="button" class="wiz-next btn btn-primary">Selanjutnya</button>
                                    </div>
                                </fieldset>
                                <fieldset class="step relative paper-shadow" data-z="2">
                                    <div class="page-section-heading">
                                        <h2 class="text-h3 margin-v-0">LENGKAPI DATA AKUN ANDA</h2>
                                        <h3 class="text-h4 margin-v-10 text-grey-400">Klik Baris Untuk Mengisi Data</h3>
                                    </div>
									<div class="controls">
                <input type="hidden" class="span6"  name="idp"value="<?php echo $auto_kode;?>" readonly="readonly" />
              </div>
                                        <div class="form-group form-control-material">
                                        <input class="form-control" type="text" id="wiz-lusername" name="txtUsername" placeholder="Username" required />
                                   
                                    </div>
                                       <div class="form-group form-control-material">
                                        <input class="form-control" type="password" id="wiz-lpass" name="txtPassMember" placeholder="Password" required />
                                        
                                    </div>
                                     
                                       <div class="form-group form-control-material">
                                        <input class="form-control" type="text" id="wiz-lname" name="txtNmLengkap" placeholder="Nama Lengkap" required />
                                        
                                           </div>  
                                      
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <button type="button" class="wiz-prev btn btn-default">Sebelumnya</button>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <button type="button" class="wiz-next btn btn-primary">Selanjutnya</button>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="step relative paper-shadow" data-z="2">
                                    <div class="page-section-heading">
                                        <h2 class="text-h3 margin-v-0">Informasi Kontak</h2>
                                        <h3 class="text-h4 margin-v-10 text-grey-400">Klik Baris Untuk Mengisi Data</h3>
                                    </div>
                                     
                                       <div class="form-group form-control-material">
                                        <textarea name="txtAlamat" rows="5" class="form-control" id="wiz-address" placeholder="Alamat"></textarea>
                                      
                                    </div>             
                                    <div class="form-group form-control-material">
                                        <input name="txtEmail" class="form-control" type="email" id="wiz-email" placeholder="Email" />
                                        
                                    </div>
                                    
                                    <div class="form-group form-control-material">
                                        <input name="txtKontak" class="form-control" type="text" id="wiz-nohp1" placeholder="Nomor HP/ Telpon" />
                                        
                                    </div>
                                    
                                  
                                     <div class="form-group form-control-material">
                                    
                                        <label for="wiz-photo">Unggah Foto:</label>
                                    </div>
                                    <div class="form-group form-control-material">
                                        <input class="form-control" type="file" id="wiz-photo"  name="upPhoto" />
                                      
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <button type="button" class="wiz-prev btn btn-default">Sebelumnya</button>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <button type="submit" class="btn btn-primary">Daftar</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
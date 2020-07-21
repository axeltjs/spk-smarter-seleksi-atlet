<?php
$SQL=mysqli_query($koneksi,"SELECT * FROM peserta WHERE id_calon='$_GET[id]'");
$_data=mysqli_fetch_array($SQL);
echo"
<div id='content-header'>
  <div id='breadcrumb'> <a href='?load=dashboard' title='Go to Home' class='tip-bottom'><i class='icon-home'></i> Home</a> <a href='#' class='tip-bottom'>Module Input</a> <a href='#' class='current'>Input Persyaratan</a> </div>
  <h1></h1>
</div>
<div class='container-fluid'>
  <hr>
  <div class='alert alert-danger'><P><b>*Lengkapi Data Anda Dengan Benar Karna Data yang Telah tersimpan Tidak Dapat Dirubah dan Bila Tidak Memiliki Pengalaman Kerja Kosongkan Bagian Bukti Pengalaman Kerja*.</b></P></div>

  <div class='row-fluid'>
    <div class='span12'>
      <div class='widget-box'>
        <div class='widget-title'> <span class='icon'> <i class='icon-align-justify'></i> </span>
          <h5>Isi Data Dengan Lengkap</h5>
        </div>
        <div class='widget-content nopadding'>
          <form action='$loadModule?load=member&action=ubahData' method='POST' class='form-horizontal' enctype='multipart/form-data'>
		  <input type='hidden' name='id' value='$_data[id_calon]'>
            <div class='control-group'>
              <label class='control-label'>Nama Lengkap:</label>
              <div class='controls'>
                <input type='text' class='span6' placeholder='nama lengkap' name='txtNmLengkap' value='$_data[nama]' readonly />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Tgl Lahir:</label>
              <div class='controls'>
               ";
				if(($_data['tgl_lhr']== '')){
					echo"<input type='date' class='span6' placeholder='Tgl Lahir' name='txttgllhr' value='$_data[tgl_lhr]'/>";
					
					
					}
					elseif (($_data['tgl_lhr']== $_data['tgl_lhr'])){
						
						echo"<input type='date' class='span6' placeholder='Tgl Lahir' name='txttgllhr' value='$_data[tgl_lhr]' readonly />";
					
						}
				
				
				echo" 
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Tempat lahir:</label>
              <div class='controls'>
                  ";
				if(($_data['tempat_lhr']== '')){
					echo"<input type='text' class='span6' placeholder='Tempat lahir' name='txttmptlhr' value='$_data[tempat_lhr]' />
           ";
					
					
					}
					elseif (($_data['tempat_lhr']== $_data['tempat_lhr'])){
						
						echo"<input type='text' class='span6' placeholder='Tempat lahir' name='txttmptlhr' value='$_data[tempat_lhr]' readonly />";
					
						}
				
				
				echo" 
			 </div>
            </div>
			<div class='control-group'>
              <label class='control-label'>Jenis Kelamin</label>
              <div class='controls'>
               
				
				 ";
				if(($_data['jenkel']== '')){
					echo" <select name='jk'  >
				
                  <option  >$_data[jenkel]</option>
				  
				 
					<option value='Laki-laki''$_data[jenkel]'=='Laki-laki'selected >Laki-laki</option>
					 
					 <option value='Perempuan''$_data[jenkel]'=='Perempuan'selected>Perempuan</option>
					 
                </select>";
					
					
					}
					elseif (($_data['jenkel']== $_data['jenkel'])){
						
						echo" <select name='jk' readonly >
				
                  <option  >$_data[jenkel]</option>
				  
				 
					<option value='Laki-laki''$_data[jenkel]'=='Laki-laki'selected >Laki-laki</option>
					 
					 <option value='Perempuan''$_data[jenkel]'=='Perempuan'selected>Perempuan</option>
					 
                </select>
				";
					
						}
				
				
				echo" 
              </div>
            </div>
			
													
			
			
            <div class='control-group'>
              <label class='control-label'>Alamat :</label>
              <div class='controls'>
               ";
				if(($_data['alamat']== '')){
					echo" <input type='text' class='span7' placeholder='Jl.Example' name='txtAlamat' value='$_data[alamat]' />";
					
					
					}
					elseif (($_data['alamat']== $_data['alamat'])){
						
						echo" <input type='text' class='span7' placeholder='Jl.Example' name='txtAlamat' value='$_data[alamat]' readonly />";
					
						}
				
				
				echo" 
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Kontak:</label>
              <div class='controls'>
               ";
				if(($_data['no_hp']== '')){
					echo"                 <input type='number' class='span6'  name='txtkontak' value='$_data[no_hp]' />";
					
					
					}
					elseif (($_data['no_hp']== $_data['no_hp'])){
						
						echo" <input type='number' class='span6'  name='txtkontak' value='$_data[no_hp]'  readonly />";
					
						}
				
				
				echo" 
              </div>
			</div>
			<div class='control-group'>
              <label class='control-label'>Agama:</label>
			  <div class='controls'>
			  "; 
			  	if(isset($_data['agama'])){
					echo "<select name='agama' readonly>
						<option value='$_data[agama]'>$_data[agama]</option>
					";
				}else{
					echo "<select name='agama'>";
				}
				echo "
					<option > Pilih Agama</option>
				  <option value='Islam'>Islam</option>
				  <option value='Kristen Protestan'>Kristen Protestan</option>
				  <option value='Kristen Katolik'>Kristen Katolik</option>
				  <option value='Budha'>Budha</option>
				  <option value='Hindu'>Hindu</option>
				  <option value='Kong Hu Chu'>Kong Hu Chu</option>
                </select>
              </div>
            </div>
			
			                <div class='control-group'>
              <label class='control-label'>Upload Gambar Ijazah :</label>
              <div class='controls'>
                <input type='file' class='span12'  name='upPhoto1'  />
				";
				if(strlen($_data['ijazah']) > 1){
					echo"<a href ='../gambar/lapangan_img/height/$_small_$_data[ijazah]' class='besar'print><img src='../gambar/lapangan_img/height/$_small_$_data[ijazah]' width='118' heigh='37'></a>";
					
					
					}
					else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo" 
				
				
              </div>
            </div>

			 <div class='control-group'>
              <label class='control-label'> KTP/Kartu Pelajar :</label>
              <div class='controls'>
                <input type='file' class='span12' name='upPhoto5'  />
				";
				if(strlen($_data['ktp']) > 1){
					echo"<a href ='../gambar/lapangan_img/height/$_small_$_data[ktp]' class='besar'print><img src='../gambar/lapangan_img/height/$_small_$_data[ktp]' width='118' heigh='37'></a>";
					
					
					}
					else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo" 
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'> SURAT KESEHATAN :</label>
              <div class='controls'>
                <input type='file' class='span12' name='upPhoto9'  />
				";
				if(strlen($_data['suratkesehatan']) > 1){
					echo"<a href ='../gambar/lapangan_img/height/$_small_$_data[suratkesehatan]' class='besar'print><img src='../gambar/lapangan_img/height/$_small_$_data[suratkesehatan]' width='118' heigh='37'></a>";
					
					
					}
					else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo" 
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'> Daftar Riwayat Hidup (CV) :</label>
              <div class='controls'>
                <input type='file' class='span12'  name='upPhoto'  />
				";
				if(strlen($_data['cv']) > 1){
					echo"<a href ='../gambar/lapangan_img/height/$_small_$_data[cv]' class='besar'print><img src='../gambar/lapangan_img/height/$_small_$_data[cv]' width='118' heigh='37'></a>";
					
					
					}
					else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo" 
              </div>
			</div>
			<div class='control-group'>
              <label class='control-label'> Kartu Keluarga (KK) :</label>
              <div class='controls'>
                <input type='file' class='span12' name='kk'/>
				";
				if(strlen($_data['kk']) > 1){
					echo"<a href ='../gambar/lapangan_img/height/$_small_$_data[kk]' class='besar'print><img src='../gambar/lapangan_img/height/$_small_$_data[kk]' width='118' heigh='37'></a>";
					}
					else{
						echo"Tidak Ada Gambar";
						}
				echo" 
              </div>
            </div>
            <div class='form-actions'>
             
			  ";
				if(($_data['cv']== '' AND $_data['blm_nikah']== ''AND $_data['Ijazah']== '' AND $_data['buktip']== '' AND $_data['tgl_lhr']== '' AND $_data['jenkel']== '' AND $_data['pengalaman']== ''AND $_data['tempat_lhr']== '' AND $_data['jpendidikan']== '')){
					echo" <button type='submit' class='btn btn-success' >Simpan Data</button>";
					
					
					}
					elseif (($_data['cv']== $_data['cv'])){
						
						echo"<button type='submit' class='btn btn-success' disabled >Simpan Data</button> ";
					
						}
				
				
				echo" 
            </div>
          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
     


";
?>
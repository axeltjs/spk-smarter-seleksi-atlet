<style>
.span6{
  width:400px !important;
}
.span7{
  width:400px !important;
}
</style>
<?php
$SQL=mysqli_query($koneksi,"SELECT * FROM peserta WHERE id_calon='$_GET[id]'");
$_data=mysqli_fetch_array($SQL);
echo"
<div id='content-header'>
  <div id='breadcrumb'> <a href='?load=dashboard' title='Go to Home' class='tip-bottom'><i class='icon-home'></i> Home</a> <a href='?load=member' class='tip-bottom'>Module validasi</a> <a href='?load=member&action=edit&id=$_GET[id_calon]' class='current'>validasi Data Peserta / Pendaftar</a> </div>
  <h1></h1>
</div>
<div class='container-fluid'>
  <hr>
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
              <label class='control-label'>Foto :</label>
              <div class='controls'>
                ";
				if(strlen($_data['foto']) > 1){
					echo"<a href ='../gambar/member_img/height/$_small_$_data[foto]' class='besar'print><img src='../gambar/member_img/height/$_small_$_data[foto]' width='118' heigh='37'></a>";
					}
					else{
						echo"Tidak Ada Gambar";
						}
				echo" 
              </div>
            </div>	
            <div class='control-group'>
              <label class='control-label'>Nama Lengkap:</label>
              <div class='controls'>
                <input type='text' class='span6' placeholder='nama lengkap' name='txtNmLengkap' value='$_data[nama]' readonly />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Tgl Lahir:</label>
              <div class='controls'>
                <input type='date' class='span6' placeholder='Tgl Lahir' name='txttgllhr' value='$_data[tgl_lhr]' readonly />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Tempat lahir:</label>
              <div class='controls'>
                <input type='text' class='span6' placeholder='Tempat lahir' name='txttmptlhr' value='$_data[tempat_lhr]' readonly />
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'>Jenis Kelamin</label>
              <div class='controls'>
                <select name='jk' readonly  class='span6'>
				
                  <option  >$_data[jenkel]</option>
				  
				 
					<option value='Laki-laki''$_data[jenkel]'=='Laki-laki'selected >Laki-laki</option>
					 
					 <option value='Perempuan''$_data[jenkel]'=='Perempuan'selected>Perempuan</option>
					 
                </select>
              </div>
            </div>
			
													
			
			
            <div class='control-group'>
              <label class='control-label'>Alamat :</label>
              <div class='controls'>
                <input type='text' class='span7' placeholder='Jl.Example' name='txtAlamat' value='$_data[alamat]' readonly />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Kontak:</label>
              <div class='controls'>
                <input type='number' class='span6'  name='txtkontak' value='$_data[no_hp]' readonly />
              </div>
            </div>
			 <div class='control-group'>
              <label class='control-label'>Email:</label>
              <div class='controls'>
                <input type='text' class='span6'  name='txtemail' value='$_data[email]' readonly />
              </div>
            </div>
			
            <div class='control-group'>
              <label class='control-label'>Keminatan</label>
              <div class='controls'>
        ";

        if($_data[keminatan] >= 80){
          $text_keminatan = $_data[keminatan].' (Berminat)';
        }elseif($_data[keminatan] >= 70){
          $text_keminatan = $_data[keminatan].' (Cukup Berminat)';
        }elseif($_data[keminatan] >= 60 || $_data[keminatan] > 1){
          $text_keminatan = $_data[keminatan].' (Kurang Berminat)';
        }else{
          $text_keminatan = "Belum ada nilai";
        }
        echo "<input type='text' class='span6' value='$text_keminatan' readonly>";
        echo "<input type='hidden' class='span6' name='keminatan' readonly value='$_data[keminatan]'>";

				echo" 
              </div>
            </div>
				<div class='control-group'>
              <label class='control-label'>Gambar Ijazah :</label>
              <div class='controls'>
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
              <label class='control-label'>Usia:</label>
              <div class='controls'>
                <input type='text' class='span2'  name='txtusia' value='$_data[usia]' readonly />
				 <input name='txtn2' type='hidden' value='".$_data[n2]."'>	
              </div>
            </div>
<div class='control-group'>
              <label class='control-label'>Daftar Riwayat Hidup (CV) :</label>
              <div class='controls'>
                ";
				if(strlen($_data['skck']) > 1){
					
					echo"<a href ='../gambar/lapangan_img/height/$_small_$_data[skck]'width='210' heigh='297' class='besar2'> <img src='../gambar/lapangan_img/height/$_data[skck]'width='118' heigh='37'></a>";
					
					
					
					}
					else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo"
              </div>
            </div>	
<div class='control-group'>
              <label class='control-label'>KTP/Kartu Pelajar :</label>
              <div class='controls'>
                ";
				if(strlen($_data['ktp']) > 1){
					
					echo"<a href ='../gambar/lapangan_img/height/$_small_$_data[ktp]'width='210' heigh='297' class='besar2'> <img src='../gambar/lapangan_img/height/$_data[ktp]'width='118' heigh='37'></a>";
					
					
					
					}
					else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo"
              </div>
            </div>				
			<div class='control-group'>
              <label class='control-label'>Gambar CV :</label>
              <div class='controls'>
                ";
				if(strlen($_data['cv']) > 1){
					echo"<a href ='../gambar/lapangan_img/height/$_small_$_data[cv]'width='210' heigh='297' class='besar2'><img src='../gambar/lapangan_img/height/$_small_$_data[cv]'width='118' heigh='37'></a>";
					
					
					}
					else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo"
              </div>
            </div>
            
			<div class='control-group'>
      <label class='control-label'>Kedisiplinan</label>
      <div class='controls'>";
      if($_data[keterampilan] >= 80){
        $txt_disiplin = $_data[keterampilan].' (Disiplin)';
      }elseif($_data[keterampilan] >= 70){
        $txt_disiplin = $_data[keterampilan].' (Cukup Disiplin)';
      }elseif($_data[keterampilan] >= 60 || $_data[keterampilan] > 1){
        $txt_disiplin = $_data[keterampilan].' (Kurang Disiplin)';
      }else{
        $txt_disiplin = "Belum ada nilai";
      }
      echo "
        <input type='hidden' class='span2'  name='keterampilan' value='$_data[keterampilan]' readonly />
        <input type='text' class='span2' value='$txt_disiplin' readonly/>
      </div>
			<div class='control-group'>
              <label class='control-label'>Keterampilan</label>
              <div class='controls'>
              <input type='hidden' class='span2'  name='txtnilaites' value='$_data[nilaites]' readonly />
              ";

              if($_data[nilaites] >= 80){
                $text_keterampilan = $_data[nilaites].' (Terampil)';
              }elseif($_data[nilaites] >= 70){
                $text_keterampilan = $_data[nilaites].' (Cukup Terampil)';
              }elseif($_data[nilaites] >= 60 || $_data[nilaites] > 1){
                $text_keterampilan = $_data[nilaites].' (Kurang Terampil)';
              }else{
                $text_keterampilan = "Belum ada nilai";
              }

              echo "
              <input type='text' value='$text_keterampilan' readonly />
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'>SURAT KESEHATAN :</label>
              <div class='controls'>
                ";
				if(strlen($_data['suratkesehatan']) > 1){
					
					echo"<a href ='../gambar/lapangan_img/height/$_small_$_data[suratkesehatan]'width='210' heigh='297' class='besar2'> <img src='../gambar/lapangan_img/height/$_small_$_data[suratkesehatan]'width='118' heigh='37'></a>";
					
					
					
					}
					else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo"
              </div>
            </div>	
<div class='control-group'>
              <label class='control-label'>Kartu Keluarga :</label>
              <div class='controls'>
                ";
				if(strlen($_data['kk']) > 1){
					echo"<a href ='../gambar/lapangan_img/height/$_small_$_data[kk]'width='210' heigh='297' class='besar2'> <img src='../gambar/lapangan_img/height/$_small_$_data[kk]'width='118' heigh='37'></a>";
					}
					else{
						echo"Tidak Ada Gambar";
						}
				echo"
              </div>
            </div>				
		
			<div class='control-group'>
              <label class='control-label'>Kelengkapan Berkas</label>
              <div class='controls'>
              
                <select name='kelengkapan' disabled required>
				  <option readonly value='90'".($_data[kelengkapan] == 90 ? 'selected' : '')."> Lengkap</option>
					<option readonly value='80' ".($_data[kelengkapan] == 80 ? 'selected' : '')."> Cukup Lengkap</option>
					<option readonly value='70'".($_data[kelengkapan] == 70 ? 'selected' : '')." > Kurang Lengkap</option>
                </select>
              </div>
            </div>
			
            <div class='form-actions'>
              ";
			  if (($_data['tgl_lhr']== '' AND $_data['jenkel']== '' AND $_data['usia']== '' AND $_data['pengalaman']== '' AND $_data['tempat_lhr']== '' )){
						
						echo"<button type='submit' class='btn btn-success' disabled >Validasi</button> ";
					
						}
				elseif(($_data['kesehatan']== '' AND $_data['wawancara']== ''AND $_data['nilaites']== 0)){
					echo" <button type='submit' class='btn btn-success' >Validasi</button>";
					
					
					}elseif (($_data['tgl_lhr']== $_data['tgl_lhr'] AND $_data['jenkel']== $_data['jenkel'] AND $_data['jpendidikan']== $_data['jpendidikan'] AND $_data['usia']== $_data['usia'] AND $_data['pengalaman']== $_data['pengalaman'] )){
						
						echo"<button type='submit' class='btn btn-success' disabled>Validasi</button> ";
					
						}
					elseif (($_data['kesehatan']== $_data['kesehatan'] AND $_data['wawancara']== $_data['wawancara'] AND $_data['nilaites']== $_data['nilaites'] )){
						
						echo"<button type='submit' class='btn btn-success' disabled >Validasi</button> ";
					
						}
				
				
				echo"     </div>
          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
     


";
?>
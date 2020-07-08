<?php
$SQL=mysqli_query($koneksi,"SELECT * FROM peserta WHERE id_calon='$_GET[id]'");
$_data=mysqli_fetch_array($SQL);
echo"
<div id='content-header'>
  <div id='breadcrumb'> <a href='?load=dashboard' title='Go to Home' class='tip-bottom'><i class='icon-home'></i> Home</a> <a href='?load=member' class='tip-bottom'>Module member</a> <a href='?load=member&action=edit&id=$_GET[kdMember]' class='current'>Edit Data Member</a> </div>
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
              <label class='control-label'>Nama Lengkap:</label>
              <div class='controls'>
                <input type='text' class='span6' placeholder='nama lengkap' name='txtNmLengkap' value='$_data[nama]' />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Tgl Lahir:</label>
              <div class='controls'>
                <input type='date' class='span6' placeholder='Tgl Lahir' name='txttgllhr' value='$_data[tgl_lhr]' />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Tempat lahir:</label>
              <div class='controls'>
                <input type='text' class='span6' placeholder='Tempat lahir' name='txttmptlhr' value='$_data[tempat_lhr]' />
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'>Jenis Kelamin</label>
              <div class='controls'>
                <select name='jk'  >
				
                  <option  >$_data[jenkel]</option>
				  
				 
					<option value='Laki-laki''$_data[jenkel]'=='Laki-laki'selected >Laki-laki</option>
					 
					 <option value='Perempuan''$_data[jenkel]'=='Perempuan'selected>Perempuan</option>
					 
                </select>
              </div>
            </div>
			
													
			
			
            <div class='control-group'>
              <label class='control-label'>Alamat :</label>
              <div class='controls'>
                <input type='text' class='span7' placeholder='Jl.Example' name='txtAlamat' value='$_data[alamat]' />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Kontak:</label>
              <div class='controls'>
                <input type='number' class='span6'  name='txtkontak' value='$_data[no_hp]' />
              </div>
            </div>
			
            <div class='control-group'>
              <label class='control-label'>Jenjang Pendidikan</label>
              <div class='controls'>
                <select name='txtjp'  >
				
                  <option  >$_data[jpendidikan]</option>
				  
				 
					<option value='SARJANA''$_data[jpendidikan]'=='SARJANA'selected >SARJANA</option>
					 
					 <option value='DIPLOMA''$_data[jpendidikan]'=='diploma'selected>DIPLOMA</option>
					 
                </select>
              </div>
            </div>
				<div class='control-group'>
              <label class='control-label'>Gambar Berkas :</label>
              <div class='controls'>
                ";
				if(isset($_data['ijazah'])){
					echo"<a href ='../images/$_small_$_data[ijazah]' class='besar'print><img src='../images/$_small_$_data[ijazah]' width='118' heigh='37'></a>";
					
					
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
                <input type='number' class='span2'  name='txtusia' value='$_data[usia]' />
              </div>
            </div>
			
			<div class='control-group'>
              <label class='control-label'>Pengalaman Kerja</label>
              <div class='controls'>
                <select name='pengalaman'  >
				
                  <option  >$_data[pengalaman]</option>
				  
				  <option value='> 2 Tahun'> > 2 Tahun</option>
													<option value='< 2 Tahun'> < 2 Tahun</option>
													<option value='Belum Pernah'> Belum Pernah</option>
				 
					
                </select>
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'>Gambar Berkas :</label>
              <div class='controls'>
                ";
				if(isset($_data['buktip'])){
					
					echo"<a href ='../images/$_small_$_data[buktip]'width='210' heigh='297' class='besar2'> <img src='../images/$_data[buktip]'width='118' heigh='37'></a>";
					
					
					
					}
					else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo"
              </div>
            </div>		
			<div class='control-group'>
              <label class='control-label'>Gambar Berkas :</label>
              <div class='controls'>
                ";
				if(isset($_data['cv'])){
					echo"<a href ='../images/$_small_$_data[cv]'width='210' heigh='297' class='besar2'><img src='../images/$_data[cv]'width='118' heigh='37'></a>";
					
					
					}
					else{
						
						echo"Tidak Ada Gambar";
						}
				
				
				echo"
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Nilai Tes:</label>
              <div class='controls'>
                <input type='number' class='span2'  name='txtnilaites' value='$_data[nilaites]' />
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'>Kemampuan Berkomunikasi</label>
              <div class='controls'>
                <select name='txtwawancara'  >
				
                  <option  >$_data[wawancara]</option>
				  
				  <option value='Sangat Komunikatif'> Sangat Komunikatif</option>
					<option value='Komunikaif'> Komunikaif</option>
					<option value='Tidak Komunikatif'> Tidak Komunikatif</option>
				 
					
                </select>
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'>Kesehatan</label>
              <div class='controls'>
                <select name='txtmcu'  >
				
                  <option >$_data[kesehatan]</option>
				  
				  
				<option value='Tidak ADA(sehat,bebas narkoba, tidak buta warna)'> Tidak ADA(sehat,bebas narkoba, tidak buta warna)</option>
				<option value='Memili Penyakit yang berhubungan dengan pendengaran dan penglihatan'> Memili Penyakit yang berhubungan dengan pendengaran dan penglihatan</option>
				<option value='Memiliki Penyakit Dalam'> Memiliki Penyakit Dalam</option>
                                         
					
                </select>
              </div>
            </div>
            <div class='form-actions'>
              <button type='submit' class='btn btn-success'>Ubah Data</button>
            </div>
          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
     


";
?>
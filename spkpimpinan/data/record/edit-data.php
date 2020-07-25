<?php

$SQL=mysqli_query($koneksi,"SELECT * FROM peserta WHERE id_calon='$_GET[id]'");
$_data=mysqli_fetch_array($SQL);

$sql_kategori =  mysqli_query($koneksi, "SELECT * FROM kategori");

if(isset($_POST['id'])){

  $nilai = 0;
  $nilai = $_POST['disiplin'] + $_POST['kehandalan'] + $_POST['kerjasama'] + $_POST['tanggungjawab'];
  $nilai = $nilai / 4;

  $SQL="UPDATE peserta SET nilaites ='$nilai',
                          disiplin ='$_POST[disiplin]',
                          kehandalan ='$_POST[kehandalan]',
                          kerjasama ='$_POST[kerjasama]',
                          tanggungjawab ='$_POST[tanggungjawab]',
                          kategori = '$_POST[kategori]'
                         WHERE id_calon='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('/spkpimpinan/frame.php?load=record')
	</script>
	";
	
}
echo"
<div id='content-header'>
  <div id='breadcrumb'> <a href='?load=dashboard' title='Go to Home' class='tip-bottom'><i class='icon-home'></i> Home</a> <a href='?load=k' class='tip-bottom'>Module Kriteria</a> <a href='?load=k&action=edit&id=$_GET[id_kriteria]' class='current'>Edit Data Kriteria</a> </div>
  <h1></h1>
</div>
<div class='container-fluid'>
  <hr>
  <div class='row-fluid'>
    <div class='span12'>
      <div class='widget-box'>
        <div class='widget-title'> <span class='icon'> <i class='icon-align-justify'></i> </span>
          <h5>Isi Penilaian Record</h5>
        </div>
        <div class='widget-content nopadding'>
          <form method='POST' class='form-horizontal' enctype='multipart/form-data'>
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
                    <select name='jk' readonly >
            
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
                  <label class='control-label'>Nilai Kehandalan:</label>
                  <div class='controls'>
                    <select name='kehandalan' id='kehandalan'>
                    <option>Pilih Nilai</option>
                    "; 
                    for($i = 90; $i >= 60; $i--):
                      echo "<option ".($_data[kehandalan] == $i ? 'selected' : '')." value='".$i."'>".$i."</option>";
                    endfor;
                    echo "
                    </select>
                  </div>
                </div>

                <div class='control-group'>
                  <label class='control-label'>Nilai Bertanggung Jawab:</label>
                  <div class='controls'>
                  <select name='tanggungjawab' id='tanggungjawab'>
                    <option>Pilih Nilai</option>
                    "; 
                    for($i = 90; $i >= 60; $i--):
                      echo "<option ".($_data[tanggungjawab] == $i ? 'selected' : '')." value='".$i."'>".$i."</option>";
                    endfor;
                    echo "
                    </select>
                  </div>
                </div>

                <div class='control-group'>
                  <label class='control-label'>Nilai Kerjasama:</label>
                  <div class='controls'>
                  <select name='kerjasama' id='kerjasama'>
                    <option>Pilih Nilai</option>
                    "; 
                    for($i = 90; $i >= 60; $i--):
                      echo "<option ".($_data[kerjasama] == $i ? 'selected' : '')." value='".$i."'>".$i."</option>";
                    endfor;
                    echo "
                    </select>
                  </div>
                </div>

                <div class='control-group'>
                  <label class='control-label'>Nilai Disiplin:</label>
                  <div class='controls'>
                  <select name='disiplin' id='disiplin'>
                    <option>Pilih Nilai</option>
                    "; 
                    for($i = 90; $i >= 60; $i--):
                      echo "<option ".($_data[disiplin] == $i ? 'selected' : '')." value='".$i."'>".$i."</option>";
                    endfor;
                    echo "
                    </select>
                  </div>
                </div>

                <div class='control-group'>
                  <label class='control-label'>Kategori:</label>
                  <div class='controls'>
                  <select name='kategori' id='kategori'>
                    <option>Pilih Kategori</option>
                    ";
                    while($dataKategori = mysqli_fetch_array($sql_kategori)): 
                      echo "<option ".($_data[kategori] == $dataKategori['nama'] ? 'selected' : '')." value='".$dataKategori['nama']."'>".$dataKategori['nama']."</option>";
                    endwhile;
                    echo "
                    </select>
                  </div>
                </div>

            <div class='form-actions'>
              <button type='submit' class='btn btn-success'>Simpan Data</button>
            </div>
          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
     


";

?>
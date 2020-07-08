<?php
$SQL=mysqli_query($koneksi,"SELECT * FROM sub_kriteria WHERE id_sub='$_GET[id]'");
$_data=mysqli_fetch_array($SQL);
echo"
<div id='content-header'>
  <div id='breadcrumb'> <a href='?load=dashboard' title='Go to Home' class='tip-bottom'><i class='icon-home'></i> Home</a> <a href='?load=jadwal' class='tip-bottom'>Module Jadwal</a> <a href='?load=jadwal&action=edit&id=$_GET[kdJadwal]' class='current'>Edit Data Jadwal</a> </div>
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
          <form action='$loadModule?load=sub&action=ubahData' method='POST' class='form-horizontal' enctype='multipart/form-data'>
		  <input type='hidden' name='id' value='$_data[id_sub]'>
            
			  <div class='control-group'>
              <label class='control-label'>Nama Sub :</label>
              <div class='controls'>
                <input type='text' class='span2'  name='txtsub' value='$_data[nama_sub]' />
              </div>
            </div>
			<div class='control-group'>
              <label class='control-label'>Prioritas :</label>
              <div class='controls'>
                <input type='text' class='span2'  name='txtpr' value='$_data[prioritas]' readonly/>
              </div>
            </div>
         
              <div class='control-group'>
			  
              <label class='control-label'>Kriteria</label>
			   <div class='controls'>
              <input type='text' class='span4'  name='kriteria' value='$_data[nama_kriteria]' />
            </div>
             </div>
            
            <div class='control-group'>
              <label class='control-label'>Bobot :</label>
              <div class='controls'>
                <input type='text' class='span2'  name='bobot' value='$_data[bobot]' disabled/>
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

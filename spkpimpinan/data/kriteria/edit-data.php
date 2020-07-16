<?php
$SQL=mysqli_query($koneksi,"SELECT * FROM kriteria WHERE id_kriteria='$_GET[id]'");
$_data=mysqli_fetch_array($SQL);
if(isset($_POST['id'])){
  $SQL="UPDATE kriteria SET nama_kriteria ='$_POST[kriteria]',
							 prioritas='$_POST[txtp]',
               bobot='$_POST[bobot]'
		                     WHERE id_kriteria='$_POST[id]'";	
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('/spkpimpinan/frame.php?load=k')
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
          <h5>Isi Data Dengan Lengkap</h5>
        </div>
        <div class='widget-content nopadding'>
          <form method='POST' class='form-horizontal' enctype='multipart/form-data'>
		  <input type='hidden' name='id' value='$_data[id_kriteria]'>
            
			  <div class='control-group'>
			  
              <label class='control-label'>Kriteria</label>
			   <div class='controls'>
              <input type='text' class='span4'  name='kriteria' value='$_data[nama_kriteria]' />
            </div>
             </div>
			<div class='control-group'>
              <label class='control-label'>Prioritas :</label>
              <div class='controls'>
                <input type='number' class='span2'  name='txtp' value='$_data[prioritas]'  />
              </div>
            </div>
         
              
            
            <div class='control-group'>
              <label class='control-label'>Bobot :</label>
              <div class='controls'>
                <input type='text' class='span3'  name='bobot' value='$_data[bobot]'/>
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

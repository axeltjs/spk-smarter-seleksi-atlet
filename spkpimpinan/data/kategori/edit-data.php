<?php
$SQL=mysqli_query($koneksi,"SELECT * FROM kategori WHERE id =$_GET[id]");
$_data=mysqli_fetch_array($SQL);
if(isset($_POST['id'])){
  $SQL="UPDATE kategori SET nama ='$_POST[nama]'
		                     WHERE id=$_POST[id]";	
	mysqli_query($koneksi,$SQL) or die (mysqli_error($koneksi));
		 
	echo"
	<script language='javascript'>
	window.alert('Data Berhasil Diubah');
	window.location=('/spkpimpinan/frame.php?load=kategori')
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
		  <input type='hidden' name='id' value='$_data[id]'>
            
			  <div class='control-group'>
			  
              <label class='control-label'>Nama Grup</label>
			   <div class='controls'>
              <input type='text' class='span4'  name='nama' value='$_data[nama]' />
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

<?php
$SQL=mysqli_query($koneksi,"SELECT * FROM tpengguna WHERE kdpengguna='$_GET[id]'");
$_data=mysqli_fetch_array($SQL);
echo"
<div id='content-header'>
  <div id='breadcrumb'> <a href='?load=dashboard' title='Go to Home' class='tip-bottom'><i class='icon-home'></i> Home</a> <a href='?load=pengguna' class='tip-bottom'>Module pengguna</a> <a href='#' class='current'>Pengguna</a> </div>
  <h1></h1>
</div>
<div class='container-fluid'>
  <hr>
  <div class='row-fluid'>
    <div class='span12'>
      <div class='widget-box'>
        <div class='widget-title'> <span class='icon'> <i class='icon-align-justify'></i> </span>
          <h5>Data Pengguna</h5>
        </div>
        <div class='widget-content nopadding'>
          <form action='$loadModule?load=member&action=ubahData' method='POST' class='form-horizontal' enctype='multipart/form-data'>
		  <input type='hidden' name='id' value='$_data[id_calon]'>
            <div class='control-group'>
              <label class='control-label'>Nama Lengkap:</label>
              <div class='controls'>
                <input type='text' class='span6' placeholder='nama lengkap' name='txtNmLengkap' value='$_data[nmPengguna]' readonly  />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Username:</label>
              <div class='controls'>
                <input type='text' class='span6' placeholder='Tgl Lahir' name='txttgllhr' value='$_data[username]' readonly />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Password:</label>
              <div class='controls'>
                <input type='text' class='span6' placeholder='Tempat lahir' name='txttmptlhr' value='$_data[password]' readonly />
              </div>
            </div>
										
			
			
            <div class='control-group'>
              <label class='control-label'>Alamat :</label>
              <div class='controls'>
                <input type='text' class='span7' placeholder='Jl.Example' name='txtAlamat' value='$_data[alamatPengguna]'readonly />
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>Kontak:</label>
              <div class='controls'>
                <input type='number' class='span6'  name='txtkontak' value='$_data[kontak]'readonly />
              </div>
            </div>
			
           
				<div class='control-group'>
              <label class='control-label'>Level:</label>
              <div class='controls'>
                <input type='text' class='span6'  name='txtkontak' value='$_data[level]' readonly/>
              </div>
            </div>	
			

          </form>
        </div>
      </div>
     </div>
     </div>
     </div>
     


";
?>
<?php
function upMemberLaman($upImage_name){
  //direktori gambar
  $upDir_h = "gambar/member_img/height/";
  $upDir_m = "gambar/member_img/medium/";
  $upDir_s = "gambar/member_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}
function upLapangan($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/lapangan_img/height/";
  $upDir_m = "../../../gambar/lapangan_img/medium/";
  $upDir_s = "../../../gambar/lapangan_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto1"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}


function upLapangan1($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/lapangan_img/height/";
  $upDir_m = "../../../gambar/lapangan_img/medium/";
  $upDir_s = "../../../gambar/lapangan_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}



function upLapangan2($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/lapangan_img/height/";
  $upDir_m = "../../../gambar/lapangan_img/medium/";
  $upDir_s = "../../../gambar/lapangan_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto44"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}





function upLapangan3($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/lapangan_img/height/";
  $upDir_m = "../../../gambar/lapangan_img/medium/";
  $upDir_s = "../../../gambar/lapangan_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto2"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}



function upLapangan4($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/lapangan_img/height/";
  $upDir_m = "../../../gambar/lapangan_img/medium/";
  $upDir_s = "../../../gambar/lapangan_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["kk"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}


function upLapanganblm($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/lapangan_img/height/";
  $upDir_m = "../../../gambar/lapangan_img/medium/";
  $upDir_s = "../../../gambar/lapangan_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhotoblm"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}



function upLapangan5($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/lapangan_img/height/";
  $upDir_m = "../../../gambar/lapangan_img/medium/";
  $upDir_s = "../../../gambar/lapangan_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto5"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}




function upLapangan6($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/lapangan_img/height/";
  $upDir_m = "../../../gambar/lapangan_img/medium/";
  $upDir_s = "../../../gambar/lapangan_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto9"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}





function upCoverBook($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/cover_img/height/";
  $upDir_m = "../../../gambar/cover_img/medium/";
  $upDir_s = "../../../gambar/cover_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fimage"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upAvatar($upImage_name){
  //direktori gambar
  $upDir_h = "../../../gambar/pengguna_img/height/";
  $upDir_m = "../../../gambar/pengguna_img/medium/";
  $upDir_s = "../../../gambar/pengguna_img/small/";
  
  $upFile_h = $upDir_h . $upImage_name;
  $upFile_m = $upDir_m . $upImage_name;
  $upFile_s = $upDir_s . $upImage_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["upPhoto"]["tmp_name"], $upFile_h);

  //identitas file asli
  $imgSrc = imagecreatefromjpeg($upFile_h);
  $srcWidth = imageSX($imgSrc);
  $srcHeight = imageSY($imgSrc);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth = 110;
  $rstHeight = ($rstWidth/$srcWidth)*$srcHeight;

  //proses perubahan ukuran
  $imColor = imagecreatetruecolor($rstWidth,$rstHeight);
  imagecopyresampled($imColor, $imgSrc, 0, 0, 0, 0, $rstWidth, $rstHeight, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor,$upDir_s . "small_" . $upImage_name);
  

  //Simpan dalam versi medium 360 pixel
  //Set ukuran gambar hasil perubahan
  $rstWidth2 = 233;
  $rstHeight2 = 288;

  //proses perubahan ukuran
  $imColor2 = imagecreatetruecolor($rstWidth2,$rstHeight2);
  imagecopyresampled($imColor2, $imgSrc, 0, 0, 0, 0, $rstWidth2, $rstHeight2, $srcWidth, $srcHeight);

  //Simpan gambar
  imagejpeg($imColor2,$upDir_m . "medium_" . $upImage_name);
  
  //Hapus gambar di memori komputer
  imagedestroy($imgSrc);
  imagedestroy($imColor);
  imagedestroy($imColor2);
}function upFile($fupload_name){
  //direktori file
  $vdir_upload = "../../../_file/";
  $vfile_upload = $vdir_upload . $fupload_name;
  $tipe_file   = $_FILES['fupload']['type'];

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
}
?>

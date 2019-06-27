<?php
include "koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM `ta_list` WHERE `ta_list`.`NIM` = '$_GET[nim]'");
$kuku = mysqli_fetch_array($query);
$data = array( 
	'nim'    				=>  $kuku['NIM'],
	'pem1'    				=>  $kuku['KD_PEMBIMBING1'],
	'pem2' 					=>  $kuku['KD_PEMBIMBING2'],
	'showpengajuan'    		=>  $kuku['JENIS'],
	'showjudul'    			=>  $kuku['JUDUL'],
	'showruangansem'    	=>  $kuku['RUANG_SEMINAR'],
	'showptanggalsem'    	=>  $kuku['TGL_SEMINAR'],
	'showpejamsem'    		=>  $kuku['WKT_SEMINAR'],
	'showreviewersem'    	=>  $kuku['KD_REVIEWER'],
	'shownilsem'    		=>  $kuku['NILAI_SEMINAR'],
	'showruangansid'    	=>  $kuku['RUANG_SIDANG'],
	'showptanggalsid'    	=>  $kuku['TGL_SIDANG'],
	'showpejamsid'    		=>  $kuku['WKT_SIDANG'],
	'showpengujisid1'    	=>  $kuku['KD_PENGUJI1'],
	'showpengujisid2'    	=>  $kuku['KD_PENGUJI2'],
	'showpengujisid3'    	=>  $kuku['KD_PENGUJI3']);

echo json_encode($data);
?>
<?php
include "koneksi.php";
$query = mysqli_query($conn,"SELECT * FROM mhsakad WHERE mhsakad.`NIM` = '$_GET[nim]'");
$kuku = mysqli_fetch_array($query);
$data = array( 'nim'     =>  $kuku['NIM'],
			   'nama'     =>  $kuku['NAMA'],
			   'kelas' =>  $kuku['KDKLS'],
			   'doswal'   =>  $kuku['KDWALI']);
 echo json_encode($data);
?>
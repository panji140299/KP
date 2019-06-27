<?php
    include 'koneksi.php';
    $nim = 10115625;
    $kode = $_POST['kddosen'];
    $ruang = $_POST['ruang'];
    $waktu = $_POST['waktu'];
     
    mysqli_query($conn,"UPDATE ta_list SET KD_PENGUJI1='$kode', RUANG_SEMINAR='$ruang', WKT_SEMINAR='$waktu' WHERE NIM='10115625'");
    
?>
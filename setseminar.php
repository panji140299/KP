<?php
    require_once 'koneksi.php';
    $kode = $_POST['kddosen'];
    $ruang = $_POST['ruang'];
    $waktu = $_POST['waktu'];
    $nim = $_POST['nim'];
    $sql1 = mysqli_query($conn,"SELECT * from ta_list where NIM='$nim'");
    if(mysqli_num_rows($sql1)>0){
        echo mysqli_num_rows($sql1);
        mysqli_query($conn,"UPDATE ta_list SET KD_REVIEWER='$kode', RUANG_SEMINAR='$ruang', WKT_SEMINAR='$waktu' WHERE NIM='$nim'");
    }else{
        mysqli_query($conn,"INSERT into ta_list (NIM,JUDUL,KD_REVIEWER,TGL_SEMINAR,WKT_SEMINAR,RUANG_SEMINAR) 
        value ('$nim','','$kode','','$waktu','$ruang')");
    } 
    
?>
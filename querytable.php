<?php 
    include "koneksi.php";
    $a =1;
    $b =7;
    $c =13;
    $d =19;
    $e =25;
    $f =31;
    $g =37;
    $h =43;
    $i =49;
    $j =55;
    $r1="R6010";
    $r2="R6028";
    $r3="R6034-PERPUS";
    $r4="Lab.6009";
    $r5="R6015-Rapat";
    $r6="R5407";
    $rr1=json_encode($r1);
    $rr2=json_encode($r2);
    $rr3=json_encode($r3);
    $rr4=json_encode($r4);
    $rr5=json_encode($r5);
    $rr6=json_encode($r6);  
    
    while ($a<=6) {
        ${'sql'.$a}    = "SELECT d.*,concat(d.NAMA,d.GLR2)as namadosen,t.*,m.* FROM dosen d,ta_list t,mhsakad m 
        WHERE  t.KD_PENGUJI1 = d.KDDOSEN and t.WKT_SEMINAR = '08.00-09.15' and t.RUANG_SEMINAR = ${'rr'.$a}";
        ${'query'.$a} = mysqli_query($conn, ${'sql'.$a});
        ${'data'.$a}   = mysqli_fetch_assoc(${'query'.$a});
        $a++;
    }
    for ($a=1;$a<=6;$a++) {
        while ($b<=12){
            ${'sql'.$b}    = "SELECT d.*,concat(d.NAMA,d.GLR2)as namadosen,t.*,m.* FROM dosen d,ta_list t,mhsakad m 
            WHERE  t.KD_PENGUJI1 = d.KDDOSEN and t.WKT_SEMINAR = '09.15-10.30' and t.RUANG_SEMINAR = ${'rr'.$a}";
            ${'query'.$b} = mysqli_query($conn, ${'sql'.$b});
            ${'data'.$b}   = mysqli_fetch_assoc(${'query'.$b});
            $b++;
            $a++;
        }
    }             
    
    for ($a=1;$a<=6;$a++){
        while ($c<=18) {
            ${'sql'.$c}    = "SELECT d.*,concat(d.NAMA,d.GLR2)as namadosen,t.*,m.* FROM dosen d,ta_list t,mhsakad m 
            WHERE  t.KD_PENGUJI1 = d.KDDOSEN and t.WKT_SEMINAR = '10.30-11.45' and t.RUANG_SEMINAR = ${'rr'.$a}";
            ${'query'.$c} = mysqli_query($conn, ${'sql'.$c});
            ${'data'.$c}   = mysqli_fetch_assoc(${'query'.$c});
            $c++;
            $a++;
        }
    }
    
    for ($a=1;$a<=6;$a++){
    while ($d<=24) {
        ${'sql'.$d}    = "SELECT d.*,concat(d.NAMA,d.GLR2)as namadosen,t.*,m.* FROM dosen d,ta_list t,mhsakad m 
        WHERE  t.KD_PENGUJI1 = d.KDDOSEN and t.WKT_SEMINAR = '11.45-13.00' and t.RUANG_SEMINAR = ${'rr'.$a}";
        ${'query'.$d} = mysqli_query($conn, ${'sql'.$d});
        ${'data'.$d}   = mysqli_fetch_assoc(${'query'.$d});
        $d++;
        $a++;
        }
    }
    
    for ($a=1;$a<=6;$a++){
    while ($e<=30) {
        ${'sql'.$e}    = "SELECT d.*,concat(d.NAMA,d.GLR2)as namadosen,t.*,m.* FROM dosen d,ta_list t,mhsakad m 
        WHERE  t.KD_PENGUJI1 = d.KDDOSEN and t.WKT_SEMINAR = '11.45-13.00' and t.RUANG_SEMINAR = ${'rr'.$a}";
        ${'query'.$e} = mysqli_query($conn, ${'sql'.$e});
        ${'data'.$e}   = mysqli_fetch_assoc(${'query'.$e});
        $e++;
        $a++;
        }
    }
    
    for ($a=1;$a<=6;$a++){
    while ($f<=36) {
        ${'sql'.$f}    = "SELECT d.*,concat(d.NAMA,d.GLR2)as namadosen,t.*,m.* FROM dosen d,ta_list t,mhsakad m 
        WHERE  t.KD_PENGUJI1 = d.KDDOSEN and t.WKT_SEMINAR = '11.45-13.00' and t.RUANG_SEMINAR = ${'rr'.$a}";
        ${'query'.$f} = mysqli_query($conn, ${'sql'.$f});
        ${'data'.$f}   = mysqli_fetch_assoc(${'query'.$f});
        $f++;
        $a++;
        }
    }
    
    for ($a=1;$a<=6;$a++){
    while ($g<=42) {
        ${'sql'.$g}    = "SELECT d.*,concat(d.NAMA,d.GLR2)as namadosen,t.*,m.* FROM dosen d,ta_list t,mhsakad m 
        WHERE  t.KD_PENGUJI1 = d.KDDOSEN and t.WKT_SEMINAR = '11.45-13.00' and t.RUANG_SEMINAR = ${'rr'.$a}";
        ${'query'.$g} = mysqli_query($conn, ${'sql'.$g});
        ${'data'.$g}   = mysqli_fetch_assoc(${'query'.$g});
        $g++;
        $a++;
        }
    }
    
    for ($a=1;$a<=6;$a++){
    while ($h<=48) {
        ${'sql'.$h}    = "SELECT d.*,concat(d.NAMA,d.GLR2)as namadosen,t.*,m.* FROM dosen d,ta_list t,mhsakad m 
        WHERE  t.KD_PENGUJI1 = d.KDDOSEN and t.WKT_SEMINAR = '11.45-13.00' and t.RUANG_SEMINAR = ${'rr'.$a}";
        ${'query'.$h} = mysqli_query($conn, ${'sql'.$h});
        ${'data'.$h}   = mysqli_fetch_assoc(${'query'.$h});
        $h++;
        $a++;
        }
    }
    
    for ($a=1;$a<=6;$a++){
    while ($i<=54) {
        ${'sql'.$i}    = "SELECT d.*,concat(d.NAMA,d.GLR2)as namadosen,t.*,m.* FROM dosen d,ta_list t,mhsakad m 
        WHERE  t.KD_PENGUJI1 = d.KDDOSEN and t.WKT_SEMINAR = '11.45-13.00' and t.RUANG_SEMINAR = ${'rr'.$a}";
        ${'query'.$i} = mysqli_query($conn, ${'sql'.$i});
        ${'data'.$i}   = mysqli_fetch_assoc(${'query'.$i});
        $i++;
        $a++;
        }
    }
    
    for ($a=1;$a<=6;$a++){
    while ($j<=60) {
        ${'sql'.$j}    = "SELECT d.*,concat(d.NAMA,d.GLR2)as namadosen,t.*,m.* FROM dosen d,ta_list t,mhsakad m 
        WHERE  t.KD_PENGUJI1 = d.KDDOSEN and t.WKT_SEMINAR = '11.45-13.00' and t.RUANG_SEMINAR = ${'rr'.$a}";
        ${'query'.$j} = mysqli_query($conn, ${'sql'.$j});
        ${'data'.$j}   = mysqli_fetch_assoc(${'query'.$j});
        $j++;
        $a++;
        }
    }
?>
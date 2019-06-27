<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css" />
    <style>
    td:hover {
        border-color: #007bff;
        cursor: pointer;
    }
    </style>



<title>Penjadwalan Modal</title>
</head>
<body>

    <span class="d-block p-2 bg-primary text-white">
        <img src="logo_unikom_kuning.png" width="60" height="60" alt="" class="float-left">
        <h4 class=text-center>PENJADWALAN SEMINAR DAN SIDANG</h4>
        <h6 class="text-center">TAHUN AKADEMIK 2018/2019 SEMESTER GENAP</h6>
    </span>
    <input type="date" value="<?php echo date('Y-m-d'); ?>" />
    <table class="table-sm table-bordered" style="width:100%" id="tabelseminar">
        <thead>
            <tr>
                <th scope="col" id="">WAKTU</th>
                <th scope="col" id="ruangan1">R6010</th>
                <th scope="col" id="ruangan2">R6028</th>
                <th scope="col" id="ruangan3">R6034-PERPUS</th>
                <th scope="col" id="ruangan4">Lab.6009</th>
                <th scope="col" id="ruangan5">R6015-Rapat</th>
                <th scope="col" id="ruangan6">R5407</th>
            </tr>
        </thead>
        <?php
        include "querytable.php";
        ?>
        <tbody>
            <tr>
                <th scope="row">08.00-09.15</th>
                <?php
                
                $a=1;
                while ($a<=6){
                    if (mysqli_num_rows(${'query'.$a})>0){?>
                    <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$a}['namadosen'];?></td>

                    <?php }else{
                        echo "<td data-toggle='modal' data-target='#modal1'></td>";
                    }
                    $a++;
                }
                ?>

            </tr>
            <tr>
                <th scope="row">09.15-10.30</th>
                <?php
                
                $b=7;
                while ($b<=12){
                    if (mysqli_num_rows(${'query'.$b})>0){?>
                    <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$b}['namadosen'];?></td>

                    <?php }else{
                        echo "<td data-toggle='modal' data-target='#modal1'></td>";
                    }
                    $b++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">10.30-11.45</th>
                <?php
                $c=13;
                while ($c<=18){
                    if (mysqli_num_rows(${'query'.$c})>0){?>
                    <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$c}['namadosen'];?></td>

                    <?php }else{
                        echo "<td data-toggle='modal' data-target='#modal1'></td>";
                    }
                    $c++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">11.45-13.00</th>
                <?php
                $d=19;
                while ($d<=24){
                    if (mysqli_num_rows(${'query'.$d})>0){?>
                    <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$d}['namadosen'];?></td>

                    <?php }else{
                        echo "<td data-toggle='modal' data-target='#modal1'></td>";
                    }
                    $d++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">13.00-14.15</th>
                <?php
                $e=25;
                while ($e<=30){
                    if (mysqli_num_rows(${'query'.$e})>0){?>
                    <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$e}['namadosen'];?></td>

                    <?php }else{
                        echo "<td data-toggle='modal' data-target='#modal1'></td>";
                    }
                    $e++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">14.15-15.30</th>
                <?php
                $f=31;
                while ($f<=36){
                    if (mysqli_num_rows(${'query'.$f})>0){?>
                    <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$f}['namadosen'];?></td>

                    <?php }else{
                        echo "<td data-toggle='modal' data-target='#modal1'></td>";
                    }
                    $f++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">15.30-16.45</th>
                <?php
                $g=37;
                while ($g<=42){
                    if (mysqli_num_rows(${'query'.$g})>0){?>
                    <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$g}['namadosen'];?></td>

                    <?php }else{
                        echo "<td data-toggle='modal' data-target='#modal1'></td>";
                    }
                    $g++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">16.45-18.00</th>
                <?php
                $h=43;
                while ($h<=48){
                    if (mysqli_num_rows(${'query'.$h})>0){?>
                    <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$h}['namadosen'];?></td>

                    <?php }else{
                        echo "<td data-toggle='modal' data-target='#modal1'></td>";
                    }
                    $h++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">18.00-19.15</th>
                <?php
                $i=49;
                while ($i<=54){
                    if (mysqli_num_rows(${'query'.$i})>0){?>
                    <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$i}['namadosen'];?></td>

                    <?php }else{
                        echo "<td data-toggle='modal' data-target='#modal1'></td>";
                    }
                    $i++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">19.15-20.30</th>
                <?php
                $j=55;
                while ($j<=60){
                    if (mysqli_num_rows(${'query'.$j})>0){?>
                    <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$j}['namadosen'];?></td>

                    <?php }else{
                        echo "<td data-toggle='modal' data-target='#modal1'></td>";
                    }
                    $j++;
                }
                ?>
            </tr>

        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modal1">
        <div class="modal-dialog modal-custom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Set Seminar</a><br>
                    <a class="text-secondary">Hapus Seminar</a><br>
                    <a class="text-secondary">Ganti Reviewer</a><br>
                    <a class="text-secondary">Cetak Berita Acara
                    Seminar</a><br>
                    <hr>
                    <a class="text-secondary">Set Sidang</a><br>
                    <a class="text-secondary">Hapus Sidang</a><br>
                    <a class="text-secondary">Ganti Penguji</a><br>
                    <a class="text-secondary">Cetak Berita Acara
                    Sidang</a><br>
                    <hr>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Print Lembar Nilai
                    Untuk Mahasiswa</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Preview Lembar Nilai
                    Untuk Mahasiswa</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modal5">
        <div class="modal-dialog modal-custom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a class="text-secondary">Set Seminar</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Hapus
                    Seminar</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Ganti
                    Reviewer</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Cetak Berita Acara
                    Seminar</a><br>
                    <hr>
                    <a class="text-secondary">Set Sidang</a><br>
                    <a class="text-secondary">Hapus
                    Sidang</a><br>
                    <a class="text-secondary">Ganti
                    Penguji</a><br>
                    <a class="text-secondary">Cetak Berita Acara
                    Sidang</a><br>
                    <hr>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Print Lembar Nilai
                    Untuk Mahasiswa</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Preview Lembar
                        Nilai
                    Untuk Mahasiswa</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal3">
        <div class="modal-dialog modal-custom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Set Seminar</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Hapus Seminar</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Ganti Reviewer</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Cetak Berita Acara
                    Seminar</a><br>
                    <hr>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Set Sidang</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Hapus Sidang</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Ganti Penguji</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Cetak Berita Acara
                    Sidang</a><br>
                    <hr>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Print Lembar Nilai
                    Untuk Mahasiswa</a><br>
                    <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Preview Lembar Nilai
                    Untuk Mahasiswa</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="modal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pemilihan Dosen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" class="setseminar">
                    <input type="text" name="kddosen" id="kddosen">
                    <input type="text" name="ruang" id="ruang">
                    <input type="text" name="waktu" id="waktu">
                    
                    <div class="modal-body">
                        <table id="tabeldosen" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Dosen</th>
                                    <th scope="col">Pembimbing 1/Penguji 2</th>
                                    <th scope="col">Reviewer/Penguji 1</th>
                                    <th scope="col">Penguji 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include "koneksi.php";
                                $sql    ="SELECT KDDOSEN,concat(NAMA,GLR2) as nama from dosen";
                                $query  = mysqli_query($conn, $sql);
                                while($data = mysqli_fetch_assoc($query)){
                                    ?>
                                    <tr>
                                        <td><?php echo $data['KDDOSEN'];?></td>
                                        <td><?php echo $data['nama'];?></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php } ?>

                                </tbody>

                            </table>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" id="btn_simpan" value="Simpan">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- END DATA TABLE-->
        <div class="table-responsive m-b-40">
           <table  class="table table-borderless" border="2" width="50%">
               <td valign="top"> 
                <table class="table table-borderless table-data3" border="2" width="30%" id="tbl_listmhs">
                    <thead>
                        <tr>
                            <form method="get" action="">
                                <th colspan="2">
                                    <input type="text" size="40" maxlength="40" name="searchnim" onkeyup="osdata()" id="sdata">
                                </th>    
                            </form>

                        </tr>
                        <Tr>
                            <th>NIM</th>
                            <th>NAMA</th>
                        </Tr>
                    </thead>
                    <tbody>
                       <?php
                       $query = "SELECT * FROM mhsakad" ;
                       $hasil = mysqli_query($conn, $query);
                       $tampil = mysqli_num_rows($hasil);

                       if ( $tampil> 0) {
                        while ( $data = mysqli_fetch_assoc($hasil)) {?>

                        <tr>
                            <td><?php echo $data['NIM']?></td>
                            <td><?php echo $data['NAMA']?></td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </td>
    <td valign="top">

        <table class="table table-borderless table-data3" border="0" width="30%" id="tbl_bio_mhs">
            <tr>
                <th colspan="4">
                    BIODATA MAHASISWA <?php echo "$nim"; ?>
                </th>
            </tr>
            <tr>
                <td>
                 NIM
             </td>
             <td>:</td>
             <td>
                <input type="text" size="25" maxlength="25" name="shownim" id="shownim" readonly>
            </td>
        </tr>
        <tr>
            <td>
                NAMA
            </td>
            <td>:</td>
            <td colspan="2">
                <input type="text" size="25" maxlength="25" name="shownama" id="shownama" readonly>
            </td>
        </tr>
        <tr>
            <td>
                KELAS
            </td>
            <td>:</td>
            <td>
                <input type="text" size="25" maxlength="25" name="showkelas">
            </td>
        </tr>
        <tr>
            <td>
                DOSEN WALI
            </td>
            <td>:</td>
            <td colspan="2">
                <input type="text" size="25" maxlength="25" name="showdoswal">
            </td>
        </tr>        
        <tr>
            <th colspan="4">
                Tugas Akhir / Skripsi
            </th>
        </tr>
        <tr>
            <td>
                Pembimbing 1 
            </td>
            <td>:</td>
            <td colspan="2">
                <input type="text" size="25" maxlength="25" name="showpem1">
            </td>
        </tr>
        <tr>
            <td>
                Pembimbing 2 
            </td>
            <td>:</td>
            <td colspan="2">
                <input type="text" size="25" maxlength="25" name="showpem2">
            </td>
        </tr>
        <tr>
            <td>
                Pengajuan
            </td>
            <td>:</td>
            <td>
                <input type="text" size="25" maxlength="25" name="showpengajuan">
            </td>
        </tr>
        <tr>
            <td>
                Judul 
            </td>
            <td>:</td>
            <td colspan="3">
                <textarea cols="26" rows="6" name="showjudul" style="resize: none;"></textarea>
            </td>
        </tr>
    </table>
</td>
<td valign="top" >
    <table  class=""border="0" width="30%">
        <tr>
            <th colspan="6">
                SEMINAR 
            </th>
        </tr>
        <tr>
            <td>
                Seminar di
            </td>
            <td>:</td>
            <td>
                <input type="text" size="15" maxlength="15" name="showruangansem">
            </td>
            <td>
                <input type="text" size="10" maxlength="10" name="showptanggalsem">
            </td>
            <td>
                <input type="text" size="10" maxlength="10" name="showpejamsem">
            </td>
            <td>
                <input type="button" name="?" value="?????" onclick="?????????">
            </td>
        </tr>
        <tr>
            <td>
                Reviewer
            </td>
            <td>:</td>
            <td colspan="">
                <input type="text" size="25" maxlength="25" name="showreviewersem">
            </td>
        </tr>
        <tr>
            <td>
                Nilai Seminar 
            </td>
            <td>:</td>
            <td>
                <input type="text" size="10" maxlength="10" name="shownilsem">
            </td>
            <td>
                <input type="button" name="?" value="?????" onclick="?????????">
            </td>
        </tr>

        <tr>
            <th colspan="6">
                SIDANG
            </th>
        </tr>
        <tr>
            <td>
                Sidang di
            </td>
            <td>:</td>
            <td>
                <input type="text" size="15" maxlength="15" name="showruangansid">
            </td>
            <td>
                <input type="text" size="10" maxlength="10" name="showptanggalsid">
            </td>
            <td>
                <input type="text" size="10" maxlength="10" name="showpejamsid">
            </td>
            <td>
                <input type="button" name="?" value="?????" onclick="?????????">
            </td>
        </tr>
        <tr>
            <td>
                Penguji 1
            </td>
            <td>:</td>
            <td colspan="3">
                <input type="text" size="25" maxlength="25" name="showpengujisid1">
            </td>
        </tr>
        <tr>
            <td>
                Penguji 2
            </td>
            <td>:</td>
            <td colspan="3">
                <input type="text" size="25" maxlength="25" name="showpengujisid2">
            </td>
        </tr>
        <tr>
            <td>
                Penguji 3
            </td>
            <td>:</td>
            <td colspan="3">
                <input type="text" size="25" maxlength="25" name="showpengujisid3">
            </td>
        </tr>
    </table>
</td>
</table>
</div>

<!-- Source Klik List Mahasiswa -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
        //searcing data nim & mhs
        function osdata() {
            var input, filter, table, tbody, tr, td, i, j, found;
            input = document.getElementById("sdata");
            filter = input.value.toUpperCase();
            table = document.getElementById("tbl_listmhs");
            tbody = table.getElementsByTagName("tbody")[0];;
            tr = tbody.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                    }
                }
                if (found) {
                    tr[i].style.display = "";
                    found = false;
                } else {
                    tr[i].style.display = "none";
                }
            }
        }





        $( document ).ready(function() {

          $("#tbl_listmhs tbody").on('click', 'tr', function() {
              //get row contents into an array
              var rowData = $(this).children("td").map(function() {
               return $(this).text();}).get();

              var $snim = $("#shownim").val(rowData[0])
              $('#tbl_bio_mhs').load('showdata.php?nim=' + $snim)
              {
                  if(statusTxt=="success")
                    $('.loading').remove();
            };



            
        });       

      });

  </script>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
  <script>
    $(document).ready(function() {
        var table = $('#tabelseminar').DataTable({
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false

        });
        $('#tabelseminar tr').click(function() {
            var data = table.row(this).data()
            $('#waktu').val(data[0])


        });
        $('#tabelseminar td').click(function() {
            var idx = table.column(this).index();
            var nilai = $('thead tr th:eq(' + idx + ')').text()
            $('#ruang').val(nilai)
        });
    });
    $(document).ready(function() {
        var table = $('#tabeldosen').DataTable();

        $('#tabeldosen tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                $('#kddosen').val('')
            } else if ($(this).removeClass('selected')) {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
                var data = table.row(this).data()
                $('#kddosen').val(data[0])
            }
        });
        $('#btn_simpan').click(function() {
            var data2 = $('.setseminar').serialize();
            $.ajax({
                type: 'POST',
                url: "setseminar.php",
                data: data2,
                success: function() {
                    $('#modal2').modal('hide');
                }
            });
        });
    });
    $("#bstn_simpan").click(function() {
        //ambil data dan set ke variable
        var $row = $(this).closest("tr"),
        $kolom1 = $row.find("td:nth-child(0)")
        //dan set ke form update kawan
        //contoh aja setvalue lagi males ngetik nya :)
        alert('#idinput').val($kolom1.text());
    });
</script>
</body>

</html>
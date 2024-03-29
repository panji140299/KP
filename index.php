<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css">
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
        require_once "querytable.php";
        ?>
        <tbody>
            <tr>
                <th scope="row">08.00-09.15</th>
                <?php
                
                $aa=1;
                while ($aa<=6){
                    if (mysqli_num_rows(${'query'.$aa})>0){?>
                <td data-toggle='modal' data-target='#modal5' id="tdisi">
                    <?php echo ${'data'.$aa}['namadosen'];
                    echo "<input type='hidden' name='nimm".$aa."' id='nimm".$aa."' value='".${'data'.$aa}['NIM']."'>";
                    ?>
                
                </td>

                <?php }else{
                        echo "<td id='tdkosong'></td>";
                    }
                    $aa++;
                }
                ?>

            </tr>
            <tr>
                <th scope="row">09.15-10.30</th>
                <?php
                
                $bb=7;
                while ($bb<=12){
                    if (mysqli_num_rows(${'query'.$bb})>0){?>
                <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$bb}['namadosen'];?></td>

                <?php }else{
                        echo "<td id='tdkosong'></td>";
                    }
                    $bb++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">10.30-11.45</th>
                <?php
                $cc=13;
                while ($cc<=18){
                    if (mysqli_num_rows(${'query'.$cc})>0){?>
                <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$cc}['namadosen'];
                echo "<input type='hidden' name='nimm' id='nimm' value='".${'data'.$cc}['NIM']."'>";
                ?>
                </td>

                <?php }else{
                        echo "<td id='tdkosong'></td>";
                    }
                    $cc++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">11.45-13.00</th>
                <?php
                $dd=19;
                while ($dd<=24){
                    if (mysqli_num_rows(${'query'.$dd})>0){?>
                <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$dd}['namadosen'];?></td>

                <?php }else{
                        echo "<td id='tdkosong'></td>";
                    }
                    $dd++;
                }
                ?>
            </tr>
            <tr>
                <th scope="row">13.00-14.15</th>
                <?php
                $ee=25;
                while ($ee<=30){
                    if (mysqli_num_rows(${'query'.$ee})>0){?>
                <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$ee}['namadosen'];?></td>

                <?php }else{
                        echo "<td id='tdkosong'></td>";
                    }
                    $ee++;
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
                        echo "<td id='tdkosong'></td>";
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
                        echo "<td id='tdkosong'></td>";
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
                        echo "<td id='tdkosong'></td>";
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
                        echo "<td id='tdkosong'></td>";
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
                        echo "<td id='tdkosong'></td>";
                    }
                    $j++;
                }
                ?>
            </tr>

        </tbody>
    </table>


    <!-- Modal -->
    <!-- form hidden untuk input atau edit seminar -->
    <form method="POST" class="setseminar">
        <input type="hidden" name="kddosen" id="kddosen">
        <input type="hidden" name="ruang" id="ruang">
        <input type="hidden" name="waktu" id="waktu">
        <input type="hidden" name="nim" id="nim">
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
                        <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Hapus
                            Seminar</a><br>
                        <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Ganti
                            Reviewer</a><br>
                        <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Cetak Berita Acara
                            Seminar</a><br>
                        <hr>
                        <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Set Sidang</a><br>
                        <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Hapus
                            Sidang</a><br>
                        <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Ganti
                            Penguji</a><br>
                        <a href="#modal2" data-toggle="modal" data-dismiss="modal" class="text-dark">Cetak Berita Acara
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

                </div>
            </div>
        </div>
    </form>

    <!-- END DATA TABLE-->
    <?php include('coba2.php');?>

    <!-- Source Klik List Mahasiswa -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
        var table = $('#tabelseminar').DataTable({
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false

        });
        var nim = $('#nim').val('');
        $('#tabelseminar #tdkosong').click(function() {
            if (nim.val() == '') {
                alert('NIM mahasiswa belum di klik!');
            } else {
                var idx = table.column(this).index();
                var nilai = $('thead tr th:eq(' + idx + ')').text();
                $('#ruang').val(nilai);
                jQuery.noConflict();
                $('#modal1').modal('show');
            }
        });
        $('#tabelseminar #tdisi').click(function() {
                var idx = table.column(this).index();
                var nilai = $('thead tr th:eq(' + idx + ')').text()
                //untuk mengambil value di dalam kolom yg bertipe elemen "<input>"
                var nim = $('input', this).val()
                $('#ruang').val(nilai)
                $('#nim').val(nim)
                
        });
        $('#tabelseminar tr').click(function() {
            var data = table.row(this).data()
            $('#waktu').val(data[0])
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
    $('button.close').click(function(){
        $('#nim').val('');
    });
    </script>
</body>

</html>
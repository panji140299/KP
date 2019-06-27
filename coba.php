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
        td:hover{
            border-color:#007bff;
            cursor : pointer;
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
    <table class=" table-bordered" style="width:100%" id="tabeljadwal">
        <thead>
            <tr>
                <th scope="col">WAKTU</th>
                <th scope="col">R6010</th>
                <th scope="col">R6028</th>
                <th scope="col">R6034-PERPUS</th>
                <th scope="col">Lab.6009</th>
                <th scope="col">R6015-Rapat</th>
                <th scope="col">R5407</th>
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
                            <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$a}['NAMA'];?></td>
                    
                        <?php }else{
                            echo "<td data-toggle='modal' data-target='#modal5'>sadasd</td>";
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
                            <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$b}['NAMA'];?></td>
                        <?php }else{
                            echo "<td data-toggle='modal' data-target='#modal5'></td>";
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
                            <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$c}['NAMA'];?></td>
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
                            <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$d}['NAMA'];?></td>
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
                            <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$e}['NAMA'];?></td>
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
                            <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$f}['NAMA'];?></td>
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
                            <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$g}['NAMA'];?></td>
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
                            <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$h}['NAMA'];?></td>
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
                            <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$i}['NAMA'];?></td>
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
                            <td data-toggle='modal' data-target='#modal5'><?php echo ${'data'.$j}['NAMA'];?></td>
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
                <pre>
                    <p class="modal-title" id="namatd"></p>
                    <p class="modal-title" id="ruang"></p>
                    <p class="modal-title" id="waktu"></p>
                </pre>
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
                    <table id="example2" class="display" style="width:100%">
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
                            <tr id="rowdosen">
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
                    <button type="button" class="btn btn-primary" id="btn_simpan">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#tabeljadwal td').click(function(){
            var nama  = $(this).text();
            var ruang = $(this).text();
            var colIndex = $(this).parent().children().index($(this));
            var rowIndex = $(this).parent().parent().children().index($(this).parent());
            var waktu = $('#tabeljadwal tr:eq('+rowIndex+') th:eq('+colIndex+')').text()
            alert('Row: ' + rowIndex + ', Column: ' + colIndex);
            $('#namatd').text(nama);
            $('#ruang').text(ruang);
            $('#waktu').text(waktu);
        });
        
    });
    $(document).ready(function() {
        var table = $('#example2').DataTable();

        $('#example2 tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected'); 
            }
        });
        $('#example2 td').click( function () {
            var kode = table.cell(1,0).data();
            alert(kode);
        });

        
    });    
       
    $(document).ready(function() {
        var table = $('#example2').DataTable();
     
        $('#example2 tbody')
        .on( 'mouseenter', 'td', function () {
            var colIdx = table.cell(this).index().column;
 
            $( table.cells().nodes() ).removeClass( 'highlight' );
            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
        } );
    });
    </script>
</body>
</html>
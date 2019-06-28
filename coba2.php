<html>
<!DOCTYPE html>
<html lang="en">

<body>

    <td>
        <div class="table-responsive m-b-40">
            <table class="table table-borderless" border="2" width="50%">
    <td valign="top">
        <table class="table table-borderless table-data3" border="2" width="30%" id="tbl_listmhs">
            <thead>
                <tr>
                    <form method="POST" action="">
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
						include "koneksi.php";
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
        <form method="" action="">
            <table class="table table-borderless table-data3" border="0" width="30%" id="tbl_bio_mhs">
                <tr>
                    <th colspan="4">
                        BIODATA MAHASISWA
                    </th>
                </tr>
                <tr>
                    <td>
                        NIM
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" size="25" maxlength="25" onkeyup="isi_otomatis()" name="shownim" id="shownim"
                            autocomplete="off" required="on">
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
                        <input type="text" size="25" maxlength="25" name="showkelas" id="showkelas" autocomplete="off"
                            readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOSEN WALI
                    </td>
                    <td>:</td>
                    <td colspan="2">
                        <input type="text" size="25" maxlength="25" name="showdoswal" id="showdoswal" autocomplete="off"
                            readonly>
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
                        <input type="text" size="25" maxlength="25" name="showpem1" id="showpem1" autocomplete="off"
                            readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Pembimbing 2
                    </td>
                    <td>:</td>
                    <td colspan="2">
                        <input type="text" size="25" maxlength="25" name="showpem2" id="showpem2" autocomplete="off"
                            readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Pengajuan
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" size="25" maxlength="25" name="showpengajuan" id="showpengajuan"
                            autocomplete="off" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Judul
                    </td>
                    <td>:</td>
                    <td colspan="3">
                        <textarea cols="26" rows="6" name="showjudul" id="showjudul" autocomplete="off" readonly
                            style="resize: none;"></textarea>
                    </td>
                </tr>
            </table>
        </form>
    </td>
    <td valign="top">
        <form method="POST" action="">
            <table class="" border="0" width="30%">
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
                        <input type="text" size="15" maxlength="15" name="showruangansem" id="showruangansem"
                            autocomplete="off" readonly>
                    </td>
                    <td>
                        <input type="text" size="10" maxlength="10" name="showptanggalsem" id="showptanggalsem"
                            autocomplete="off" readonly>
                    </td>
                    <td>
                        <input type="text" size="10" maxlength="10" name="showpejamsem" id="showpejamsem"
                            autocomplete="off" readonly>
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
                        <input type="text" size="25" maxlength="25" name="showreviewersem" id="showreviewersem"
                            autocomplete="off" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nilai Seminar
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" size="10" maxlength="10" name="shownilsem" id="shownilsem" autocomplete="off"
                            readonly>
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
                        <input type="text" size="15" maxlength="15" name="showruangansid" id="showruangansid"
                            autocomplete="off" readonly>
                    </td>
                    <td>
                        <input type="text" size="10" maxlength="10" name="showptanggalsid" id="showptanggalsid"
                            autocomplete="off" readonly>
                    </td>
                    <td>
                        <input type="text" size="10" maxlength="10" name="showpejamsid" id="showpejamsid"
                            autocomplete="off" readonly>
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
                        <input type="text" size="25" maxlength="25" name="showpengujisid1" id="showpengujisid1"
                            autocomplete="off" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Penguji 2
                    </td>
                    <td>:</td>
                    <td colspan="3">
                        <input type="text" size="25" maxlength="25" name="showpengujisid2" id="showpengujisid2"
                            autocomplete="off" readonly>
                    </td>
                </tr>
                <tr>
                    <td>
                        Penguji 3
                    </td>
                    <td>:</td>
                    <td colspan="3">
                        <input type="text" size="25" maxlength="25" name="showpengujisid3" id="showpengujisid3"
                            autocomplete="off" readonly>
                    </td>
                </tr>
            </table>
        </form>
    </td>
    </table>
    </div>
    <!-- Source Klik List Mahasiswa -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.12.4.js"></script>

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





    $(document).ready(function() {

        $("#tbl_listmhs tbody").on('click', 'tr', function() {
            //get row contents into an array
            var rowData = $(this).children("td").map(function() {
                return $(this).text();
            }).get();


            var $snim = $("#shownim").val(rowData[0])
            $('#nim').val(rowData[0])
            
            //ajax untuk menampilkan data otomatis
            $.ajax({
                    url: 'ajax_isiot_bio.php',
                    data: "nim=" + $snim,
                })
                .success(function(data) {
                    isi_otomatis();
                    isi_otomatis2();
                });

        });
    });
    </script>
    <script type="text/javascript">
    function isi_otomatis() {
        var $snim = $("#shownim").val()
        $.ajax({
                url: 'ajax_isiot_bio.php',
                data: "nim=" + $snim,
            })
            .success(function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#shownama').val(obj.nama);
                $('#showkelas').val(obj.kelas);
                $('#showdoswal').val(obj.doswal);
            });


    }

    function isi_otomatis2() {
        var $snim = $("#shownim").val()
        $.ajax({
                url: 'ajax_isiot_tasemsid.php',
                data: "nim=" + $snim,
            })
            .success(function(data) {
                var json2 = data,
                    obj2 = JSON.parse(json2);
                $('#showpem1').val(obj2.pem1);
                $('#showpem2').val(obj2.pem2);
                $('#showpengajuan').val(obj2.showpengajuan);
                $('#showjudul').val(obj2.showjudul);
                $('#showruangansem').val(obj2.showruangansem);
                $('#showptanggalsem').val(obj2.showptanggalsem);
                $('#showpejamsem').val(obj2.showpejamsem);
                $('#showreviewersem').val(obj2.showreviewersem);
                $('#shownilsem').val(obj2.shownilsem);
                $('#showruangansid').val(obj2.showruangansid);
                $('#showptanggalsid').val(obj2.showptanggalsid);
                $('#showpejamsid').val(obj2.showpejamsid);
                $('#showpengujisid1').val(obj2.showpengujisid1);
                $('#showpengujisid2').val(obj2.showpengujisid2);
                $('#showpengujisid3').val(obj2.showpengujisid3);
            });
    }
    </script>

</body>

</html>
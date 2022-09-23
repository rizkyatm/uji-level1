<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="barang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="bdytambah">
        <div class="bar">
            <div class="profil">
                <div class="logo"><img src="./images/LSTB-removebg-preview.png" alt="logo"></div>
                <h2>SARPRAS</h2>
            </div>
            <div class="dmaster">
                <a href="tampilandatasiswa.php  " class="d-siswa"><i class="fas fa-user-friends" style="font-size:20px;"></i> Data siswa</a>
                <a href="#" class="d-barang"><i class="fas fa-box" style="font-size:21px;"></i> Data barang</a>
            </div>
        </div>

        <div class="tbbarang">
            <h3>Data Barang</h3>
            <h4><a href="tambahdatabarang.html">Tambah Baru</a></h4>
            <div>
                <table>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>jenis Barang</th>
                        <th colspan="2" style="padding-left:25px;">Action</th>
                    </tr>
                    <?php
                    $no = 1;
                    $sql = "SELECT * FROM data_barang";
                    $query = mysqli_query($connect, $sql);
                    while ($sis = mysqli_fetch_array($query)) {
                        echo "
                    <tr>
                    <td>$no</td>
                    <td>$sis[kode_barang]</td>
                    <td>$sis[nama_barang]</td>
                    <td>$sis[jumlah_barang]</td>
                    <td>$sis[satuan]</td>
                    <td>$sis[jenis_barang]</td>
                    <td><a href='formeditbarang.php?kode_barang=" . $sis['kode_barang'] . "'<input type='button' class='btn-edit'></a></td>
                    <td><a href='hapusdatabarang.php?kode_barang=" . $sis['kode_barang'] . "'<input type='button' class='btn-hapus'></a></td>
                    </tr>";
                        $no++;
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bar">
        <div class="profil">
            <div class="logo"></div>
            <h2>RIZATM</h2>
        </div>
        <div class="dmaster">
            <a href="tampilandatasiswa.php">Data siswa</a>
            <a href="#">Data barang</a>
        </div>
        <div class="tbbarang">
        <h3>Data Barang</h3>
    <h4><a href="tambahdatabarang.html">[+]Tambah Baru</a></h4>
    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Satuan</th>
            <th>jenis Barang</th>
            <th>Action</th>
        </tr>
        <?php
            $sql = "SELECT * FROM data_barang";
            $query = mysqli_query ($connect,$sql);
            while($sis = mysqli_fetch_array ($query)){
                echo "
            <tr>
            <td>$sis[kode_barang]</td>
            <td>$sis[nama_barang]</td>
            <td>$sis[jumlah_barang]</td>
            <td>$sis[satuan]</td>
            <td>$sis[jenis_barang]</td>
            <td>
                <a href='formeditbarang.php?kode_barang=".$sis['kode_barang']."'>Edit</a>
                <a href='hapusdatabarang.php?kode_barang=".$sis['kode_barang']."'>Hapus</a>
            </td>
            </tr>";
            }
        ?>
    </table>
    </div>
    </div>
</body>
</html>
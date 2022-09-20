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
            <h2>RIZATM</h2>
        </div>
        <div class="dmaster">
            <a href="tampilandatasiswa.php">Data siswa</a>
            <a href="#">Data barang</a>
        </div>
    </div class="">       
    <div class="tbbarang">
        <h3>Data Barang</h3>
        <h4><a href="tambahdatabarang.html">[+]Tambah Baru</a></h4>
        <div>
        <table border="">
        <tr>
            <th width="130">Kode Barang</th>
            <th width="130">Nama Barang</th>
            <th width="150">Jumlah Barang</th>
            <th width="75">Satuan</th>
            <th width="125">jenis Barang</th>
            <th colspan="2">Action</th>
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
            <td><a href='formeditbarang.php?kode_barang=".$sis['kode_barang']."'<input type='button' class='btn-edit'></a></td>
            <td><a href='hapusdatabarang.php?kode_barang=".$sis['kode_barang']."'<input type='button' class='btn-hapus'></a></td>
            </tr>";
            }
        ?>
    </table>
    </div>
    </div>
    </div>
</body>
</html>
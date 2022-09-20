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
    <link rel="stylesheet" href="siswa.css">
</head>
<body>
<div class="bdytambah">
    <div class="bar">
        <div class="profil">
            <h2>RIZATM</h2>
        </div>
        <div class="dmaster">
            <a href="#">Data siswa</a>
            <a href="tampildatabarang.php">Data barang</a>
        </div>
    </div>
    <div class="tbsiswa">
        <h3>Data Siswa</h3>
    <h4><a href="tambahdatasiswa.html">[+]Tambah Baru</a></h4>
    <table border="1">
        <tr>
            <th width="90">NISN</th>
            <th width="130">Nama Siswa</th>
            <th width="90">Kelas</th>
            <th width="90">Agama</th>
            <th width="130">jenis Kelamin</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            $sql = "SELECT * FROM data_siswa";
            $query = mysqli_query ($connect,$sql);
            while($sis = mysqli_fetch_array ($query)){
                echo "
            <tr>
            <td>$sis[nisn]</td>
            <td>$sis[nama]</td>
            <td>$sis[kelas]</td>
            <td>$sis[agama]</td>
            <td>$sis[jenis_kelamin]</td>
            <td><a href='formeditsiswa.php?nisn=".$sis['nisn']."'<input type='button' class='btn-edit'></a></td>
            <td><a href='hapusdatasiswa.php?nisn=".$sis['nisn']."'<input type='button' class='btn-hapus'></a> </td>
            </tr>";
            }
        ?>
    </table>
    </div>
    </div>
</body>
</html>
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
            <a href="#" class="d-siswa"><i class="fas fa-user-friends" style="font-size:20px;"></i>  Data siswa</a>
            <a href="tampildatabarang.php" class="d-barang"><i class="fas fa-box" style="font-size:21px;"></i>  Data barang</a>
        </div>
    </div>

    <div class="tbsiswa">
    <h3>Data Siswa</h3>
    <h4><a href="tambahdatasiswa.html">Tambah Baru</a></h4>
    <div class="a-table">
    <table border="1">
        <tr>
            <th>NISN</th>
            <th>Nama Siswa</th>
            <th>Kelas</th>
            <th>Agama</th>
            <th>jenis Kelamin</th>
            <th colspan="2" style="padding-left:32px;">Action</th>
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
    </div>
</body>
</html>
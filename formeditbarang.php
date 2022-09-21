<?php
include 'koneksi.php';

$kode_barang = $_GET['kode_barang'];
$sql = "select * from data_barang where kode_barang='$kode_barang'";
$query = mysqli_query($connect, $sql);
$pel = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak di temukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data barang</title>
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
            <a href="tampilandatasiswa.php  " class="d-siswa"><i class="fas fa-user-friends" style="font-size:20px;"></i>  Data siswa</a>
            <a href="tampildatabarang.php" class="d-barang"><i class="fas fa-box" style="font-size:21px;"></i>  Data barang</a>
        </div>
    </div>
      <div class="container-u">
        <div class="judul"> <p>UPDATE DATA BARANG</p></div>
            <form action="editdatabarang.php" method="post">
                <div class="user-detail">
                    <div class="input-box">
                        <span class="detail"></span>
                        <input value="<?php echo $pel['kode_barang']?>" required="required" type="hidden" name="kode_barang"></input>
                    </div>
                    <div class="input-box">
                        <span class="detail">NAMA BARANG</span>
                        <input value="<?php echo $pel['nama_barang']?>" required="required" type="text" name="nama_barang"></input>
                    </div>
                    <div class="input-box">
                        <span class="detail">JUMLAH BARANG</span>
                        <input value="<?php echo $pel['jumlah_barang']?>" required="required" type="number" name="jumlah_barang"></input>
                    </div>
                    <div class="input-box">
                        <span class="detail">SATUAN</span>
                        <input value="<?php echo $pel['satuan']?>" required="required" type="text" name="satuan"></input>
                    </div>
                    <div class="input-box">
                        <span class="detail">JENIS BARANG</span>
                        <input  value="<?php echo $pel['jenis_barang']?>" required="required" type="text" name="jenis_barang"></input>
                    </div>
                    <DIv class="btn-simpan-u">
                        <input type="submit" name="updatebarang" value="update">
                    </DIv>
                </div>
            </form>
    </div>
    </div>
</body>
</html>
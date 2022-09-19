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
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bar">
        <div class="profil">
            <div class="logo"></div>
            <h2>RIZATM</h2>
        </div>
        <div class="dmaster">
            <a href="tampildatabarang.php">Data siswa</a>
            <a href="#">Data barang</a>
        </div>
    <form action="editdatabarang.php" method="POST">
        <div class="imputdata">
        <h3>Edit Data barang</h3>
        <p><label> <input value="<?php echo $pel['kode_barang']?>" required="required"  type="hidden" name="kode_barang"></label></p>
        <p><label>nama barang : <input value="<?php echo $pel['nama_barang']?>" required="required" type="text" name="nama_barang"></label></p>
        <p><label>jumlah barang : <input value="<?php echo $pel['jumlah_barang']?>" required="required" type="number" name="jumlah_barang"></textarea></label></p>
        <p><label>satuan : <input value="<?php echo $pel['satuan']?>" required="required" type="text" name="satuan"></label></p>
        <p><label>jenis barang : <input value="<?php echo $pel['jenis_barang']?>" required="required" type="text" name="jenis_barang"></label></p>
        <input type="submit" name="updatebarang" value="update">
        </div>
    </form>
</body>
</html>
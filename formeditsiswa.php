<?php
include 'koneksi.php';

$nisn = $_GET['nisn'];
$sql = "select * from data_siswa where nisn='$nisn'";
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
    <title>Edit Data siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="bar">
        <div class="profil">
            <div class="logo"></div>
            <h2>RIZATM</h2>
        </div>
        <div class="dmaster">
            <a href="#">Data siswa</a>
            <a href="tampildatabarang.php">Data barang</a>
        </div>
    <form action="editdatasiswa.php" method="POST">
        <div class="imputdata">
        <h3>Edit Data SISWA</h3>
        <p><label> <input value="<?php echo $pel['nisn']?>" required="required"  type="hidden" name="nisn"></label></p>
        <p><label>nama siswa : <input value="<?php echo $pel['nama']?>" required="required" type="text" name="nama"></label></p>
        <p><label>kelas : <input value="<?php echo $pel['kelas']?>" required="required" type="number" name="kelas"></textarea></label></p>
        <p><label>agama : <input value="<?php echo $pel['agama']?>" required="required" type="text" name="agama"></label></p>
        <p><label>jenis kelamin : <input value="<?php echo $pel['jenis_kelamin']?>" required="required" type="text" name="jenis_kelamin"></label></p>
        <input type="submit" name="update" value="update">
        </div>
    </form>
</body>
</html>
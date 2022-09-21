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
            <a href="tampilandatasiswa.php" class="d-siswa"><i class="fas fa-user-friends" style="font-size:20px;"></i>  Data siswa</a>
            <a href="tampildatabarang.php" class="d-barang"><i class="fas fa-box" style="font-size:21px;"></i>  Data barang</a>
        </div>
    </div>
      <div class="container-u">
        <div class="judul"> <p>UPDATE DATA SISWA</p></div>
            <form action="editdatasiswa.php" method="post">
                <div class="user-detail">
                    <div class="input-box">
                        <span class="detail"></span>
                        <input value="<?php echo $pel['nisn']?>" required="required" type="hidden" name="nisn"></input>
                    </div>
                    <div class="input-box">
                        <span class="detail">NAMA</span>
                        <input value="<?php echo $pel['nama']?>" required="required" type="text" name="nama"></input>
                    </div>
                    <div class="input-box">
                        <span class="detail">KELAS</span>
                        <input value="<?php echo $pel['kelas']?>" required="required" type="number" name="kelas"></input>
                    </div>
                    <div class="input-box">
                        <span class="detail">AGAMA</span>
                        <input value="<?php echo $pel['agama']?>" required="required" type="text" name="agama"></input>
                    </div>
                    <div class="input-box">
                        <span class="detail">JENIS KELAMIN</span>
                        <input  value="<?php echo $pel['jenis_kelamin']?>" required="required" type="text" name="jenis_kelamin"></input>
                    </div>
                    <DIv class="btn-simpan-u">
                        <input type="submit" name="update" value="update">
                    </DIv>
                </div>
            </form>
    </div>
    </div>
</body>
</html>
<?php
include 'koneksi.php';

if(isset($_POST['simpanbarang'])){
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $agama = $_POST['agama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    
    $sql = "INSERT into data_siswa values('$nisn','$nama','$kelas','$agama','$jenis_kelamin')";
    $query = mysqli_query($connect, $sql);

if($query){
    header('location: tampilandatasiswa.php');
  }else{
    header('location: simpandatasiswa.php?stasus=gagal');
}
}
?>
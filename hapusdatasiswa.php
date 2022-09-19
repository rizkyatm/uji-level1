<?php
include 'koneksi.php';

$nisn= $_GET['nisn'];

$sql = "DELETE FROM `data_siswa` WHERE nisn = '$nisn'";

$query = mysqli_query($connect, $sql);

if($query){
    header('location: tampilandatasiswa.php');
  }else{
    header('location: tampilandatasiswa.php?stasus=gagal');
}

?>
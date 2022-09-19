<?php
include 'koneksi.php';

$kode_barang= $_GET['kode_barang'];

$sql = "DELETE FROM `data_barang` WHERE kode_barang = '$kode_barang'";

$query = mysqli_query($connect, $sql);

if($query){
    header('location: tampildatabarang.php');
  }else{
    header('location: tampilandatabarang.php?stasus=gagal');
}

?>
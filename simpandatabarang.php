<?php
include 'koneksi.php';

if(isset($_POST['simpanbarang'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $satuan = $_POST['satuan'];
    $jenis_barang = $_POST['jenis_barang'];
    
    $sql = "INSERT into data_barang values('$kode_barang','$nama_barang','$jumlah_barang','$satuan','$jenis_barang')";
    $query = mysqli_query($connect, $sql);

if($query){
    header('location: tampildatabarang.php');
  }else{
    header('location: simpandatabarang.php?stasus=gagal');
}
}
?>
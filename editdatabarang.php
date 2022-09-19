<?php 
    include "koneksi.php";

    if(isset($_POST['updatebarang'])){
        $kode_barang = $_POST['kode_barang'];
        $nama_barang = $_POST['nama_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];
        $satuan = $_POST['satuan'];
        $jenis_barang = $_POST['jenis_barang'];

        $sql = "UPDATE data_barang SET nama_barang = '$nama_barang', jumlah_barang = '$jumlah_barang', satuan = '$satuan', jenis_barang = '$jenis_barang' WHERE data_barang.kode_barang = '$kode_barang'";

        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: tampildatabarang.php');
        }else{
            header('Location: formeditbarang.php?status=gagal');
        }
    }
?>
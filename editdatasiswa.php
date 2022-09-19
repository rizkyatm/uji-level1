<?php 
    include "koneksi.php";

    if(isset($_POST['update'])){
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $agama = $_POST['agama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        $sql = "UPDATE data_siswa SET nama = '$nama', kelas = '$kelas', agama = '$agama', jenis_kelamin = '$jenis_kelamin' WHERE data_siswa.nisn = '$nisn'";

        $query = mysqli_query($connect, $sql);
        if($query){
            header('Location: tampilandatasiswa.php');
        }else{
            header('Location: formeditsiswa.php?status=gagal');
        }
    }
?>
<?php
    include 'connection.php';

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];

    $query_tambah = "INSERT INTO mahasiswa (nim,nama,prodi) VALUES ('$nim','$nama','$prodi')";
    $tambah = pg_query($connection,$query_tambah);

    if($tambah){
        header("location: index.php");
    }else{
        header("location: tambah.php");
    }

?>
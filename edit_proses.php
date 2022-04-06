<?php

    include('connection.php');
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi']; 

        $query_edit = "UPDATE mahasiswa SET nim='$nim', nama='$nama', prodi='$prodi' WHERE id = '$id' ";
        $edit = pg_query($connection,$query_edit);

        if($edit){
            header("location:index.php");
        }else{
            header("location:index.php?id=$id");
        }
?>
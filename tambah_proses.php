<?php
    include 'connection.php';

    $no = $_POST['no'];
    $tgl = $_POST['tgl'];
    $pengirim = $_POST['pengirim'];

    $query_tambah = "INSERT INTO datasurat (nomor_surat,tanggal_surat,pengirim) VALUES ('$no','$tgl','$pengirim')";
    $tambah = pg_query($connection,$query_tambah);

    if($tambah){
        header("location: index.php");
    }else{
        header("location: tambah.php");
    }

?>

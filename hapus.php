<?php
include 'connection.php';

    $query_hapus = "DELETE FROM datasurat WHERE id = '$_GET[id]'";
    $hapus = pg_query($connection, $query_hapus);

    if($hapus){
        header("location:index.php");
    }else{
        header("location:index.php");
    }
?>

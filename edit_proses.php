<?php

    include('connection.php');
        $no = $_POST['no'];
        $tgl = $_POST['tgl'];
        $pengirim = $_POST['pengirim']; 

        $query_edit = "UPDATE datasurat SET no='$no', tgl='$tgl', pengirim='$pengirim' WHERE id = '$id' ";
        $edit = pg_query($connection,$query_edit);

        if($edit){
            header("location:index.php");
        }else{
            header("location:index.php?id=$id");
        }
?>

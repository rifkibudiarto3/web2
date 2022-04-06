<?php

    include 'connection.php';
    $tampil = pg_query("SELECT * FROM datasurat");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body shadow" style="margin-auto;">
                <a href="tambah.php" class="btn btn-primary" >Tambah</a>
                <h3 class="text-center"><b>Daftar Data</b></h3>
                <table class="table table-hover table-success">
                    <thead>
                        <tr>
                            <td>Nomor Surat</td>
                            <td>Tanggal Surat</td>
                            <td>Pengirim</td>
                             <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while($data = pg_fetch_array($tampil)):
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nomor_surat'];?></td>
                            <td><?= $data['tanggal_surat'];?></td>
                            <td><?= $data['pengirim'];?></td>
                            <td>
                                <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

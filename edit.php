<?php
    include 'connection.php';
    $query = "SELECT * FROM mahasiswa WHERE id = '$_GET[id]'";
    $statement = pg_query($connection,$query);
    while($data= pg_fetch_array($statement)){
        $id = $data['id'];
        $no = $data['no'];
        $tgl = $data['tgl'];
        $pengirim = $data['pengirim'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
<div class="container">
    <div class="card shadow mt-3" >
    <form method="post" action="edit_proses.php" >
        <div class="card-body" style="margin: auto;">
         <h3 class="text-center"><b>Edit Data</b></h3>
        <div class="form-group">
                
                <input type="hidden" class="form-control" id ="id" name ="id" value ="<?php echo $id; ?>" required>
            </div>
            <div class="form-group">
                <label class="mt-2mb-2" for="nim">NOMOR SURAT</label>
                <input type="text" class="form-control" name="no" id="no" value="<?php echo $no;?>"  required>
            </div>
            <div class="form-group">
                <label class="mt-5-mb-5" for="nama">TANGGAL SURAT</label>
                <input type="date" class="form-control" name="tgl" id="tgl" placeholder="masukan nama"value ="<?php echo $tgl; ?>" required>
            </div>
            <div class="form-group">
                <label for="prodi">PENGIRIM</label>
                <input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="masukan nama"value ="<?php echo $pengirim; ?>" required>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger mt-3" onclick="history.back()">Batal</button>
            <input type="submit" name="submit" class="btn btn-primary mt-3" value="SIMPAN" onclick="return confirm('Apakah Anda yakin ?')">
            </div>
        </div>
        </form>
    </div>
       
    </div>
</body>
</html>

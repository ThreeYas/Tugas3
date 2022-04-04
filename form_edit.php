<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
    </head>
    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php
        include "koneksi.php";
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_043 WHERE id_mhs=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <h1>Form tambah data mahasiswa</h1>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form method="post" action="update.php">
            <input type="hidden" name="id_mhs" value="<?php echo $row["id_mhs"]?>">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Mhs</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Lengkap" name="nama_mhs" value="<?php echo $row['nama_mhs']?>">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Nim Mhs</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan NIM" name="nim_mhs" value="<?php echo $row['nim_mhs']?>">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput3" class="form-label">Alamat Mhs</label>
              <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Masukkan Alamat" name="alamat_mhs" value="<?php echo $row['alamat_mhs']?>">
            </div>
            <button type="submit">Update</button> 
        </form>
        <?php } ?>
    </body>
</html>
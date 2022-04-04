<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
        <h1>Data Mahasiswa</h1>
        <a href="form.php">Tambah Data</a> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <table class="table table-dark table-striped">
            <tr>
                <td>ID MHS</td>
                <td>Nama Mahasiswa</td>
                <td>NIM Mahasiswa</td>
                <td>Alamat Mahasiswa</td>
                <td>Action</td>
            </tr>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM tbl_043";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil))
                {
                ?>
                <tr>
                    <td><?=$row['id_mhs'];?></td>
                    <td><?=$row['nama_mhs'];?></td>
                    <td><?=$row['nim_mhs'];?></td>
                    <td><?=$row['alamat_mhs'];?></td>
                    <td> <a href="form_edit.php?id=<?=$row['id_mhs']?>">Edit | <a href="delete.php?id=<?=$row['id_mhs']?>"> Delete</td>
                </tr>
                <?php }
                ?>
        </table>
    </body>
</html>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
    </head>
    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <h1>Form tambah data mahasiswa</h1>
        <form method="post" action="action.php">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Mhs</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nama Lengkap" name="nama_mhs">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Nim Mhs</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan NIM" name="nim_mhs">
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput3" class="form-label">Alamat Mhs</label>
              <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Masukkan Alamat" name="alamat_mhs">
            </div>
            <button type="submit">Kirim</button> 
        </form>
    </body>
</html>
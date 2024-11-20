<?php 
require 'functions.php';

// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"])){
    
    
    // cek data berhasil di tambah tidak
    if(tambah ($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'index.php';
        </script>
        ";
    }
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp"
                required>
            </li> 
            <li>
            <label for="nama">NAMA :</label>
            <input type="text" name="nama" id="nama"
            required>
            </li> 
            <li>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email"
            require>
            </li>
             <li>
             <label for="jurusan">Jurusan :</label>
             <input type="jurusan" name="jurusan" id="jurusan"
             required>
          </li>
          <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar"
          required>
          </li>
          <li>
            <button type="submit" name="submit">Tambah
                Data!</button>
        </li>
        </ul>
    </form>
</body>
</html>
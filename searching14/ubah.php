<?php 
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id= $id") [0];
// query data mahasiswa berdasarkan id

// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"])){
    
    
    // cek data berhasil diubah tidak
    if(ubah ($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
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
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h1>ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"];?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"];?>">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp"
                required value=" <?= $mhs["nrp"] ?>">
            </li> 
            <li>
            <label for="nama"></label>NAMA :</label>
            <input type="text" name="nama" id="nama"
            required value=" <?= $mhs["nama"] ?>">
            </li> 
            <li>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email"
            require value=" <?= $mhs["email"] ?>">
            </li>
             <li>
             <label for="jurusan">Jurusan :</label>
             <input type="jurusan" name="jurusan" id="jurusan"
             required value=" <?= $mhs["jurusan"] ?>">
          </li>
          <li>
          <label for="gambar">Gambar :</label>
          <input type="text" name="gambar" id="gambar"
          required value=" <?= $mhs["gambar"] ?>">
          </li>
          <li>
            <button type="submit" name="submit">Ubah
                Data!</button>
        </li>
        </ul>
    </form>
</body>
</html>
<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs =query("SELECT * FROM mahasiswa WHERE id = $id")[0];
$id = $_GET["id"]; // Pastikan id valid dan aman
$query = "SELECT * FROM mahasiswa WHERE id = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'i', $id);  // 'i' untuk integer
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$mhs = mysqli_fetch_assoc($result);

// koneksi ke DBMS
// $conn = mysqli_connect("localhost","root","","phpdasar");
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){

// cek apakah data berhasil di ubah atau tidak
$_POST["id"] = $mhs["id"];
if( ubah($_POST) > 0 ){
    echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo"
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>";
}

    // cek apakah data berhasil di tambahkan atau tidak
//     if(mysqli_affected_rows($conn) > 0 ){
//         echo "berhasil";
//     } else {
//         echo "gagal!";
//         echo "<br>";
//         echo mysqli_error($conn);
//     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden"name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden"name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"]?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <img src="img/<?= $mhs['gambar']; ?>" width="40">
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
</body>
</html>
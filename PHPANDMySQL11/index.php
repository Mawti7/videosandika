<?php 
require 'functions.php' ;
$mahasiswa = query("SELECT * FROM mahasiswa ") ;
// Ambil data dari tabel mahasiswa / query data mahasiswa
// $result = mysqli_query ($conn, "SELECT  *  FROM mahasiswa");

// ambik data (fetch) mahasiswa dari objek result
//mysqli_fetch_row() // mengembalikan array numerik
//mysqli_fetch_assac()
//mysqli_fetch_array()
//mysqli_fetch_object()

//  while($mhs = mysqli_fetch_row($result));
// var_dump($mhs[3]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
   <TH>No.</TH> 
   <TH>Aksi</TH>
   <TH>Gambar</TH>
   <TH>NRP</TH>
   <TH>Nama</TH>
   <TH>Email</TH>
   <TH>Jurusan</TH>
</tr>
<?php $i = 1;?>
<?PHP  foreach ($mahasiswa as $row): ?>
<tr> 
    <td><?= $i; ?></td>
    <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
    </td>
    <td><img src="img/<?= $row["gambar"] ;?>" width="50"></td>
    <td><?= $row["nrp"];?></td>
    <td><?= $row["nama"];?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i++; ?>
<?php  endforeach; ?>
</table>

</body>
</html>
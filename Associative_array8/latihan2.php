<?php
 $mahasiswa = [
    ["nurma","000721",
 "nurma@gmail.com","Rekayasa Perangkat Lunak"],
 ["reta","000722",
 "reta@gmail.com","Rekayasa Perangkat Lunak"]
];


// array associative
// definisinya sama seperti array numerik,kecuali
// key-nya adalah string yang  kita buat sendiri
$mahasiswa = [
    [
    "nama" => "nurma",
     "nrp" => "000721",
     "email" => "nurma@gmail.com",
     "jurusan" => "Rekayasa Perangkat Lunak",
     "gambar" => "foto2.jpg"
    ],
    [
        "nama" => "reta",
         "nrp" => "000722",
         "email" => "reta@gmail.com",
         "jurusan" => "Rekayasa Perangkat Lunak",
         "gambar" => "foto.jpg"
         ]
     ] ;
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs ["gambar"]; ?> "width="100" height="100">
        </li>
        <li>Nama : <?= $mhs["nama"];?></li>
        <li>NRP : <?= $mhs["nrp"];?></li>
        <li>Email :<?= $mhs["jurusan"];?></li>
        <li>Jurusan : <?= $mhs["email"];?></li>
    </ul>
    <?php endforeach ; ?>
</body>
</html>
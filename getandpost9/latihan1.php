<?php
// $_GET
$_GET ["nama"] = "nurma";
$_GET["nrp"] = "00721" ;
 
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ( $mahasiswa as $mhs) : ?>  
        <li>
            <a href="latihan2.php?nama=<?= $mhs ["nama"] ;
             ?> &nrp=<?=$mhs["nrp"];?>&emai=<?= $mhs["email"];?>
             &jurusan=<?= $mhs ["jurusan"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs ["nama"]; ?></a> 
    </li>
        <?php endforeach ; ?>
    </ul>
</body>
</html>

